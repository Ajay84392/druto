import os, re

files = [
    'resources/views/admin/login.blade.php',
    'resources/views/auth/login.blade.php',
    'resources/views/merchant/auth/login.blade.php'
]

for file in files:
    if os.path.exists(file):
        with open(file, 'r', encoding='utf-8') as f:
            content = f.read()

        # Fix Forgot Password link
        content = re.sub(r'<a href=\"#\"([^>]*?Forgot Password\?)</a>', r'<a href=\"/forgot-password\"\1</a>', content)
        
        # Insert email validation error
        if \"@error('email')\" not in content:
            content = re.sub(r'(<input[^>]*type=\"email\"[^>]*>)', r'\1\n                            @error(\'email\') <span class=\"text-red-500 text-xs mt-1 block w-full\">{{  }}</span> @enderror', content)
        
        # Insert mobile validation error
        if \"@error('mobile')\" not in content:
            content = re.sub(r'(<input[^>]*type=\"tel\"[^>]*>)', r'\1\n                            @error(\'mobile\') <span class=\"text-red-500 text-xs mt-1 block w-full\">{{  }}</span> @enderror', content)

        # Insert password validation error
        if \"@error('password')\" not in content:
            content = re.sub(r'(<input[^>]*type=\"password\"[^>]*>)', r'\1\n                            @error(\'password\') <span class=\"text-red-500 text-xs mt-1 block w-full absolute -bottom-5\">{{  }}</span> @enderror', content)
            
        with open(file, 'w', encoding='utf-8') as f:
            f.write(content)
print('Done!')
