<?php

$file = 'resources/views/merchant/auth/business-address.blade.php';
$content = file_get_contents($file);

// Find the flex space-x-3 div containing city and state
preg_match('/<div class="flex space-x-3">(.*?)<\/div>\s*<div>\s*<label class="block text-xs font-bold text-slate-700 mb-2">PIN Code<\/label>/s', $content, $matches);

if (isset($matches[0])) {
    $rowHTML = '
<div class="flex space-x-3">
    <!-- State on the left -->
    <div class="w-1/2">
        <label class="block text-xs font-bold text-slate-700 mb-2">State</label>
        <div class="relative">
            <select name="state" id="stateDropdown" required class="w-full bg-[#f1f5f9] border border-[#e2e8f0] rounded-xl px-4 py-2.5 text-sm font-medium text-[#0f172a] transition appearance-none cursor-pointer">
                <option value="" disabled selected>Select state</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Delhi">Delhi</option>
            </select>
            <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>
    </div>
    
    <!-- City on the right -->
    <div class="w-1/2">
        <label class="block text-xs font-bold text-slate-700 mb-2">City</label>
        <div class="relative">
            <select name="city" id="cityDropdown" required class="w-full bg-[#f1f5f9] border border-[#e2e8f0] rounded-xl px-4 py-2.5 text-sm font-medium text-[#0f172a] transition appearance-none cursor-pointer" disabled>
                <option value="" disabled selected>Select city</option>
            </select>
            <div class="absolute inset-y-0 right-0 pr-3.5 flex items-center pointer-events-none">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
        </div>
    </div>
</div>
<div>
    <label class="block text-xs font-bold text-slate-700 mb-2">PIN Code</label>';

    $content = str_replace($matches[0], $rowHTML, $content);
}

// Add the JS script before </body>
$js = '
<script>
    const citiesByState = {
        "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Guntur", "Nellore", "Tirupati"],
        "Arunachal Pradesh": ["Itanagar", "Tawang", "Ziro", "Pasighat", "Roing"],
        "Assam": ["Guwahati", "Silchar", "Dibrugarh", "Jorhat", "Nagaon"],
        "Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Purnia"],
        "Chhattisgarh": ["Raipur", "Bhilai", "Bilaspur", "Korba", "Rajnandgaon"],
        "Goa": ["Panaji", "Margao", "Vasco da Gama", "Mapusa", "Ponda"],
        "Gujarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar"],
        "Haryana": ["Faridabad", "Gurugram", "Panipat", "Ambala", "Yamunanagar"],
        "Himachal Pradesh": ["Shimla", "Mandi", "Solan", "Dharamshala", "Kullu"],
        "Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad", "Bokaro", "Deoghar"],
        "Karnataka": ["Bengaluru", "Mysuru", "Hubballi", "Mangaluru", "Belagavi"],
        "Kerala": ["Thiruvananthapuram", "Kochi", "Kozhikode", "Kollam", "Thrissur"],
        "Madhya Pradesh": ["Indore", "Bhopal", "Jabalpur", "Gwalior", "Ujjain"],
        "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad"],
        "Manipur": ["Imphal", "Thoubal", "Bishnupur", "Churachandpur", "Kakching"],
        "Meghalaya": ["Shillong", "Tura", "Nongstoin", "Jowai", "Baghmara"],
        "Mizoram": ["Aizawl", "Lunglei", "Saiha", "Champhai", "Kolasib"],
        "Nagaland": ["Kohima", "Dimapur", "Mokokchung", "Tuensang", "Wokha"],
        "Odisha": ["Bhubaneswar", "Cuttack", "Rourkela", "Brahmapur", "Sambalpur"],
        "Punjab": ["Ludhiana", "Amritsar", "Jalandhar", "Patiala", "Bathinda"],
        "Rajasthan": ["Jaipur", "Jodhpur", "Kota", "Bikaner", "Ajmer"],
        "Sikkim": ["Gangtok", "Namchi", "Geyzing", "Mangan", "Singtam"],
        "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem"],
        "Telangana": ["Hyderabad", "Warangal", "Nizamabad", "Karimnagar", "Khammam"],
        "Tripura": ["Agartala", "Dharmanagar", "Kailashahar", "Udaipur", "Belonia"],
        "Uttar Pradesh": ["Lucknow", "Kanpur", "Ghaziabad", "Agra", "Varanasi"],
        "Uttarakhand": ["Dehradun", "Haridwar", "Roorkee", "Haldwani", "Rudrapur"],
        "West Bengal": ["Kolkata", "Asansol", "Siliguri", "Durgapur", "Bardhaman"],
        "Delhi": ["New Delhi", "North Delhi", "South Delhi", "East Delhi", "West Delhi"]
    };

    const stateDropdown = document.getElementById("stateDropdown");
    const cityDropdown = document.getElementById("cityDropdown");

    stateDropdown.addEventListener("change", function() {
        const state = this.value;
        cityDropdown.innerHTML = \'<option value="" disabled selected>Select city</option>\';
        
        if (state && citiesByState[state]) {
            citiesByState[state].forEach(city => {
                const option = document.createElement("option");
                option.value = city;
                option.textContent = city;
                cityDropdown.appendChild(option);
            });
            cityDropdown.disabled = false;
        } else {
            cityDropdown.disabled = true;
        }
    });
</script>
</body>';

$content = str_replace('</body>', $js, $content);

file_put_contents($file, $content);
echo "Successfully updated city and state fields!\n";
