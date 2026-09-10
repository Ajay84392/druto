<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeAurex Admin - @yield('title', 'Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="/favicon.jpg">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .table-container::-webkit-scrollbar { height: 8px; }
        .table-container::-webkit-scrollbar-track { background: #f1f5f9; border-radius: 4px; }
        .table-container::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .table-container::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        @yield('styles')
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased h-screen overflow-hidden flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-[#b00000] text-white flex flex-col flex-shrink-0 h-full overflow-y-auto">
        <!-- Logo -->
        <div class="h-20 flex items-center px-6">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-[#b00000]" fill="currentColor" viewBox="0 0 24 24"><path d="M4 4h4v4H4V4zm6 0h4v4h-4V4zm6 0h4v4h-4V4zM4 10h4v4H4v-4zm12 0h4v4h-4v-4zM4 16h4v4H4v-4zm6 0h4v4h-4v-4zm6 0h4v4h-4v-4zm-6-6h4v4h-4v-4z"/></svg>
                </div>
                <div>
                    <div class="text-xl font-black leading-tight tracking-tight">BeAurex</div>
                    <div class="text-[11px] font-medium text-red-200">Admin Panel</div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 px-4 py-6 space-y-1">
            <a href="/admin/dashboard" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold transition {{ request()->is('admin/dashboard') ? 'bg-[#8a0000] text-white' : 'text-red-100 hover:bg-[#9a0000] hover:text-white' }}">
                <svg class="w-5 h-5 {{ request()->is('admin/dashboard') ? 'text-white' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                <span>Dashboard</span>
            </a>
            
            <a href="/admin/merchants" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold transition {{ request()->is('admin/merchant*') ? 'bg-[#8a0000] text-white' : 'text-red-100 hover:bg-[#9a0000] hover:text-white' }}">
                <svg class="w-5 h-5 {{ request()->is('admin/merchant*') ? 'text-white' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <span>Merchants</span>
            </a>

            <a href="/admin/plans" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold transition {{ request()->is('admin/plan*') ? 'bg-[#8a0000] text-white' : 'text-red-100 hover:bg-[#9a0000] hover:text-white' }}">
                <svg class="w-5 h-5 {{ request()->is('admin/plan*') ? 'text-white' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                <span>Plans</span>
            </a>

            <a href="/admin/claims" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold transition {{ request()->is('admin/claim*') ? 'bg-[#8a0000] text-white' : 'text-red-100 hover:bg-[#9a0000] hover:text-white' }}">
                <svg class="w-5 h-5 {{ request()->is('admin/claim*') ? 'text-white' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                <span>Claim Logs</span>
            </a>

            <a href="/admin/settings" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold transition {{ request()->is('admin/setting*') ? 'bg-[#8a0000] text-white' : 'text-red-100 hover:bg-[#9a0000] hover:text-white' }}">
                <svg class="w-5 h-5 {{ request()->is('admin/setting*') ? 'text-white' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                <span>Settings</span>
            </a>
            
            <a href="/admin/profile" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold transition {{ request()->is('admin/profile*') ? 'bg-[#8a0000] text-white' : 'text-red-100 hover:bg-[#9a0000] hover:text-white' }}">
                <svg class="w-5 h-5 {{ request()->is('admin/profile*') ? 'text-white' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                <span>Profile</span>
            </a>
        </nav>

        <!-- Footer Info -->
        <div class="px-6 py-6 border-t border-[#c90000] mt-auto">
            <p class="text-[11px] text-red-200 leading-tight">
                &copy; 2025 BeAurex.<br>
                All rights reserved.
            </p>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 flex flex-col h-full bg-slate-50 overflow-hidden">
        
        <!-- Topbar -->
        <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 flex-shrink-0">
            <!-- Mobile Menu / Hamburger -->
            <button class="text-slate-500 hover:text-slate-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </button>

            <!-- Right side: Notifications & Profile -->
            <div class="flex items-center space-x-6">
                <!-- Notifications -->
                <button class="relative text-slate-500 hover:text-slate-700 transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    <!-- Badge -->
                    <span class="absolute top-0 right-0 block w-2.5 h-2.5 rounded-full bg-red-600 ring-2 ring-white"></span>
                </button>

                <!-- Profile Dropdown -->
                <div class="flex items-center space-x-3 cursor-pointer">
                    <img src="https://ui-avatars.com/api/?name=Super+Admin&background=0D8ABC&color=fff" alt="Super Admin" class="w-9 h-9 rounded-full object-cover">
                    <div class="hidden md:block text-right">
                        <div class="text-sm font-bold text-slate-900 leading-tight">Super Admin</div>
                        <div class="text-[11px] font-semibold text-slate-500">Owner</div>
                    </div>
                    <svg class="w-4 h-4 text-slate-400 hidden md:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                </div>
            </div>
        </header>

        <!-- View Content -->
        @yield('content')
        
    </main>

    @yield('scripts')
</body>
</html>
