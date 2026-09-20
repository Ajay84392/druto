@extends('layouts.admin')

@section('title', 'Create Plan')

@section('content')
<div class="flex-1 overflow-auto p-6 md:p-10">
    
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-[#0f172a] mb-1">Create Plan</h1>
        <div class="text-xs text-[#475569] font-medium flex items-center space-x-1">
            <a href="/admin/dashboard" class="hover:text-[#b00000] transition">Home</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <a href="/admin/plans" class="hover:text-[#b00000] transition">Plans</a>
            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
            <span class="text-[#0f172a]">Create Plan</span>
        </div>
    </div>

    <!-- Tabs -->
    <div class="flex space-x-2 mb-6 border-b border-[#e2e8f0]">
        <a href="/admin/plans"
            class="flex items-center space-x-2 px-4 py-2.5 text-sm font-semibold text-[#475569] hover:text-slate-700 hover:bg-slate-100 rounded-t-lg transition">
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
            class="flex items-center space-x-2 px-4 py-2.5 text-sm font-semibold text-[#b00000] border-b-2 border-[#b00000] bg-red-50/50 rounded-t-lg transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path>
            </svg>
            <span>Create Plan</span>
        </a>
    </div>

    @if($errors->any())
        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-[#8a0000] text-sm font-bold">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('plans.store') }}" method="POST" id="createPlanForm" class="bg-white rounded-2xl shadow-sm border border-[#e2e8f0] max-w-5xl">
        @csrf
        
        <div class="p-6 md:p-8">
            
            <!-- Plan Information -->
            <div class="mb-10">
                <h2 class="text-lg font-bold text-[#0f172a] mb-6">Plan Information</h2>
                
                <div class="flex flex-col md:flex-row gap-8 lg:gap-12">
                    <!-- Left Column -->
                    <div class="flex-1 space-y-5">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Plan Name <span class="text-[#EF4444]">*</span></label>
                            <input type="text" id="input_name" name="name" required class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a]" placeholder="Enter plan name" onkeyup="updatePreview()">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Price (₹) <span class="text-[#EF4444]">*</span></label>
                            <input type="number" id="input_price" name="price" step="0.01" required class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a]" placeholder="Enter plan price" onkeyup="updatePreview()">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Duration <span class="text-[#EF4444]">*</span></label>
                            <select id="input_duration" name="billing_cycle" required class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a] appearance-none bg-white" onchange="updatePreview()" style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%208l5%205%205-5%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20fill%3D%22none%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 12px center;">
                                <option value="" disabled selected>Select duration</option>
                                <option value="Monthly">Monthly</option>
                                <option value="Yearly">Yearly</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Plan Type <span class="text-[#EF4444]">*</span></label>
                            <select name="type" required class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a] appearance-none bg-white" style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%208l5%205%205-5%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20fill%3D%22none%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 12px center;">
                                <option value="" disabled selected>Select plan type</option>
                                <option value="Standard">Standard</option>
                                <option value="Premium">Premium</option>
                                <option value="Enterprise">Enterprise</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Plan Status</label>
                            <select id="input_status" name="is_active" class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a] appearance-none bg-white" onchange="updatePreview()" style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%208l5%205%205-5%22%20stroke%3D%22%2364748b%22%20stroke-width%3D%222%22%20fill%3D%22none%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 12px center;">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Right Column -->
                    <div class="flex-1 space-y-5">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Short Description</label>
                            <textarea id="input_short_desc" name="short_description" rows="3" class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a] resize-none" placeholder="Enter short description" maxlength="150" onkeyup="updateCharCount('input_short_desc', 'short_desc_count'); updatePreview()"></textarea>
                            <div class="text-right text-[10px] font-bold text-slate-400 mt-1"><span id="short_desc_count">0</span>/150</div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Detailed Description</label>
                            <textarea id="input_detailed_desc" name="detailed_description" rows="5" class="w-full px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a] resize-none" placeholder="Enter detailed description" maxlength="500" onkeyup="updateCharCount('input_detailed_desc', 'detailed_desc_count')"></textarea>
                            <div class="text-right text-[10px] font-bold text-slate-400 mt-1"><span id="detailed_desc_count">0</span>/500</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Features & Preview Split -->
            <div class="flex flex-col md:flex-row gap-8 lg:gap-12">
                
                <!-- Plan Features -->
                <div class="flex-1">
                    <h2 class="text-lg font-bold text-[#0f172a] mb-1">Plan Features</h2>
                    <p class="text-sm text-[#475569] mb-6">Add features included in this plan</p>
                    
                    <div id="features-container" class="space-y-3 mb-4">
                        <!-- Initial Feature Row -->
                        <div class="flex items-center space-x-2 feature-row">
                            <input type="text" name="features[]" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a] feature-input" placeholder="Enter feature name" onkeyup="updatePreview()" required>
                            <button type="button" class="w-10 h-10 rounded-xl border border-red-200 text-[#EF4444] hover:bg-red-50 flex flex-shrink-0 items-center justify-center transition" onclick="removeFeature(this)">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-2 feature-row">
                            <input type="text" name="features[]" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a] feature-input" placeholder="Enter feature name" onkeyup="updatePreview()">
                            <button type="button" class="w-10 h-10 rounded-xl border border-red-200 text-[#EF4444] hover:bg-red-50 flex flex-shrink-0 items-center justify-center transition" onclick="removeFeature(this)">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                        <div class="flex items-center space-x-2 feature-row">
                            <input type="text" name="features[]" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a] feature-input" placeholder="Enter feature name" onkeyup="updatePreview()">
                            <button type="button" class="w-10 h-10 rounded-xl border border-red-200 text-[#EF4444] hover:bg-red-50 flex flex-shrink-0 items-center justify-center transition" onclick="removeFeature(this)">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </div>
                    
                    <button type="button" onclick="addFeature()" class="px-4 py-2 rounded-xl border border-red-200 text-[#b00000] text-xs font-bold hover:bg-red-50 transition flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"></path></svg>
                        <span>Add Feature</span>
                    </button>
                </div>
                
                <!-- Plan Preview -->
                <div class="w-full md:w-80 flex-shrink-0">
                    <h2 class="text-sm font-bold text-[#0f172a] mb-6 text-center">Plan Preview</h2>
                    
                    <div class="bg-[#faf5ff] border border-purple-100 rounded-2xl p-6 text-center shadow-sm relative">
                        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-sm mx-auto mb-4 text-purple-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        
                        <h3 class="text-xl font-black text-[#0f172a] mb-1" id="preview_name">Plan Name</h3>
                        <p class="text-[10px] text-[#475569] mb-4 h-6 overflow-hidden" id="preview_short_desc">Short description will appear here.</p>
                        
                        <div class="mb-6">
                            <span class="text-2xl font-black text-purple-700">₹ <span id="preview_price">0</span></span>
                            <span class="text-xs font-bold text-slate-400" id="preview_duration">/ duration</span>
                        </div>
                        
                        <ul class="text-left space-y-2 mb-6" id="preview_features">
                            <li class="flex items-start text-xs font-semibold text-[#475569]">
                                <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Feature will appear here</span>
                            </li>
                            <li class="flex items-start text-xs font-semibold text-[#475569]">
                                <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Feature will appear here</span>
                            </li>
                            <li class="flex items-start text-xs font-semibold text-[#475569]">
                                <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>Feature will appear here</span>
                            </li>
                        </ul>
                        
                        <div class="inline-block px-4 py-1.5 rounded-full text-[10px] font-bold text-emerald-700 bg-emerald-100" id="preview_status">
                            Active
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <!-- Action Buttons -->
        <div class="px-6 md:px-8 py-5 border-t border-slate-100 bg-[#f1f5f9]/50 rounded-b-2xl flex items-center justify-end space-x-3">
            <a href="{{ route('plans.index') }}" class="px-6 py-2.5 bg-white border border-[#e2e8f0] text-slate-700 text-sm font-bold rounded-xl hover:bg-[#f1f5f9] transition">Cancel</a>
            <button type="submit" class="px-6 py-2.5 bg-[#b00000] text-white text-sm font-bold rounded-xl hover:bg-[#8a0000] transition shadow-sm">Create Plan</button>
        </div>
    </form>

</div>
@endsection

@section('scripts')
<script>
    function updateCharCount(inputId, countId) {
        var len = document.getElementById(inputId).value.length;
        document.getElementById(countId).innerText = len;
    }

    function addFeature() {
        var container = document.getElementById('features-container');
        var row = document.createElement('div');
        row.className = 'flex items-center space-x-2 feature-row';
        row.innerHTML = `
            <input type="text" name="features[]" class="flex-1 px-4 py-2.5 rounded-xl border border-[#e2e8f0] focus:outline-none focus:ring-1 focus:ring-red-500 focus:border-red-500 text-sm font-semibold text-[#0f172a] feature-input" placeholder="Enter feature name" onkeyup="updatePreview()">
            <button type="button" class="w-10 h-10 rounded-xl border border-red-200 text-[#EF4444] hover:bg-red-50 flex flex-shrink-0 items-center justify-center transition" onclick="removeFeature(this)">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
            </button>
        `;
        container.appendChild(row);
    }

    function removeFeature(btn) {
        var container = document.getElementById('features-container');
        if(container.children.length > 1) {
            btn.parentElement.remove();
            updatePreview();
        } else {
            alert('At least one feature is required.');
        }
    }

    function updatePreview() {
        var name = document.getElementById('input_name').value;
        var price = document.getElementById('input_price').value;
        var duration = document.getElementById('input_duration').value;
        var shortDesc = document.getElementById('input_short_desc').value;
        var status = document.getElementById('input_status').value;
        
        document.getElementById('preview_name').innerText = name || 'Plan Name';
        document.getElementById('preview_price').innerText = price || '0';
        document.getElementById('preview_duration').innerText = '/ ' + (duration ? duration.toLowerCase() : 'duration');
        document.getElementById('preview_short_desc').innerText = shortDesc || 'Short description will appear here.';
        
        if (status == "1") {
            document.getElementById('preview_status').innerText = 'Active';
            document.getElementById('preview_status').className = 'inline-block px-4 py-1.5 rounded-full text-[10px] font-bold text-emerald-700 bg-emerald-100';
        } else {
            document.getElementById('preview_status').innerText = 'Inactive';
            document.getElementById('preview_status').className = 'inline-block px-4 py-1.5 rounded-full text-[10px] font-bold text-[#475569] bg-slate-200';
        }

        var featureInputs = document.querySelectorAll('.feature-input');
        var featuresHtml = '';
        var hasFeatures = false;
        
        featureInputs.forEach(function(input) {
            if (input.value.trim() !== '') {
                hasFeatures = true;
                featuresHtml += `
                <li class="flex items-start text-xs font-semibold text-[#475569]">
                    <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span>${input.value}</span>
                </li>`;
            }
        });
        
        if (!hasFeatures) {
            featuresHtml = `
            <li class="flex items-start text-xs font-semibold text-[#475569]">
                <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>Feature will appear here</span>
            </li>
            <li class="flex items-start text-xs font-semibold text-[#475569]">
                <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>Feature will appear here</span>
            </li>
            <li class="flex items-start text-xs font-semibold text-[#475569]">
                <svg class="w-4 h-4 text-purple-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>Feature will appear here</span>
            </li>`;
        }
        
        document.getElementById('preview_features').innerHTML = featuresHtml;
    }
</script>
@endsection




