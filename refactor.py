import os
import re

views = [
    'resources/views/admin/dashboard.blade.php',
    'resources/views/admin/merchants/index.blade.php',
    'resources/views/admin/merchants/show.blade.php',
    'resources/views/admin/plans/index.blade.php',
    'resources/views/admin/plans/create.blade.php',
    'resources/views/admin/plans/edit.blade.php',
]

for view in views:
    path = os.path.join('c:/xampp/htdocs/Druto', view)
    if not os.path.exists(path):
        continue
    
    with open(path, 'r', encoding='utf-8') as f:
        content = f.read()
    
    # We want to extract everything between <div class="flex-1 overflow-auto ..."> and the matching </div> right before </main>
    # Fortunately, they all have `<!-- Page Content -->`
    match = re.search(r'<!-- Page Content -->(.*?)    </main>', content, re.DOTALL)
    if match:
        inner_content = match.group(1).strip()
        new_content = f"@extends('layouts.admin')\n\n@section('title', 'Page')\n\n@section('content')\n        <!-- Page Content -->\n        {inner_content}\n@endsection\n"
        with open(path, 'w', encoding='utf-8') as f:
            f.write(new_content)
        print(f"Updated {view}")
    else:
        print(f"Could not match in {view}")
