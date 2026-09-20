@extends('layouts.admin')
@section('title', 'Manage Plans')

@section('content')
    <!-- Page Content -->
    <div class="flex-1 overflow-auto p-6 md:p-10">

        <!-- Page Header & Breadcrumbs -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-[#0f172a] mb-1">Manage Plans</h1>
            <div class="text-xs text-[#475569] font-medium flex items-center space-x-1">
                <a href="/admin/dashboard" class="hover:text-[#b00000] transition">Home</a>
                <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-[#0f172a]">Plans</span>
                <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-[#0f172a]">Active Plans</span>
            </div>
        </div>

        <!-- Tabs -->
        <div class="flex space-x-2 mb-6 border-b border-[#e2e8f0]">
            <a href="/admin/plans"
                class="flex items-center space-x-2 px-4 py-2.5 text-sm font-semibold text-[#b00000] border-b-2 border-[#b00000] bg-red-50/50 rounded-t-lg transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zm10 0a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                    </path>
                </svg>
                <span>Active Plans</span>
            </a>
            <a href="{{ route('plans.history') }}"
                class="flex items-center space-x-2 px-4 py-2.5 text-sm font-semibold text-[#475569] hover:text-slate-700 hover:bg-slate-100 rounded-t-lg transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
                <span>Plan History</span>
            </a>
            <a href="/admin/plans/create"
                class="flex items-center space-x-2 px-4 py-2.5 text-sm font-semibold text-[#475569] hover:text-slate-700 hover:bg-slate-100 rounded-t-lg transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Create Plan</span>
            </a>
        </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                @forelse($plans as $plan)
                <div class="bg-white rounded-2xl border {{ $plan->name == 'Professional Plan' ? 'border-amber-400 shadow-md relative' : 'border-[#e2e8f0] shadow-sm' }} p-6 flex flex-col hover:shadow-lg transition relative">
                    @if($plan->name == 'Professional Plan')
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-white px-2">
                        <span class="text-xs font-bold text-[#F59E0B]">Most Popular</span>
                    </div>
                    @endif
                    
                    <div class="flex justify-center mb-4 mt-2">
                        @if(str_contains(strtolower($plan->name), 'basic'))
                        <div class="w-12 h-12 rounded-full bg-emerald-50 text-[#22C55E] flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        </div>
                        @elseif(str_contains(strtolower($plan->name), 'professional'))
                        <div class="w-12 h-12 rounded-full bg-amber-50 text-[#F59E0B] flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                        </div>
                        @else
                        <div class="w-12 h-12 rounded-full bg-purple-50 text-purple-500 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        </div>
                        @endif
                    </div>
                    
                    <div class="text-center mb-6">
                        <h3 class="text-lg font-bold text-[#0f172a] mb-1">{{ $plan->name }}</h3>
                        <p class="text-xs text-[#475569] font-medium h-8">Perfect for your business needs.</p>
                        <div class="mt-4">
                            <span class="text-3xl font-black text-[#0f172a]">₹ {{ number_format($plan->price) }}</span>
                            <span class="text-sm font-semibold text-[#475569]">/ {{ $plan->billing_cycle }}</span>
                        </div>
                    </div>
                    
                    <div class="flex-1">
                        <ul class="space-y-3 mb-8">
                            @foreach(explode(',', $plan->features) as $feature)
                            <li class="flex items-start text-sm text-[#475569] font-medium">
                                <svg class="w-5 h-5 text-[#22C55E] mr-2 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                                <span>{{ trim($feature) }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="mt-auto flex items-center justify-between border-t border-slate-100 pt-4">
                        <div class="flex-1 bg-emerald-50 text-[#22C55E] text-sm font-bold py-2 rounded-xl text-center mr-2">
                            Active
                        </div>
                        <div class="relative group">
                            <button class="w-9 h-9 flex items-center justify-center rounded-xl border border-[#e2e8f0] text-[#475569] hover:bg-[#f1f5f9] transition">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                            </button>
                            <div class="absolute right-0 bottom-full mb-2 w-36 bg-white border border-[#e2e8f0] rounded-xl shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition">
                                <a href="{{ route('plans.edit', $plan->id) }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-[#f1f5f9] font-medium">Edit Plan</a>
                                <form action="{{ route('plans.destroy', $plan->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm text-[#b00000] hover:bg-[#f1f5f9] font-medium" onsubmit="return confirm('Delete this plan?');">Delete Plan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-3 text-center py-12 bg-white rounded-2xl border border-[#e2e8f0]">
                    <svg class="w-12 h-12 text-slate-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    <h3 class="text-lg font-bold text-[#0f172a]">No Plans Found</h3>
                    <p class="text-[#475569] mb-4">Create your first subscription plan to get started.</p>
                    <a href="{{ route('plans.create') }}" class="inline-flex items-center space-x-2 bg-[#b00000] hover:bg-[#8a0000] text-white px-4 py-2 rounded-xl font-semibold transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                        <span>Create Plan</span>
                    </a>
                </div>
                @endforelse
            </div>
            
            <div class="flex items-start space-x-3 bg-amber-50 border border-amber-200 rounded-xl p-4 text-amber-700 text-sm font-medium">
                <svg class="w-5 h-5 shrink-0 text-[#F59E0B]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <p>You can reorder plans by dragging. Changes will be reflected to merchants.</p>
            </div>
        </div>
@endsection
