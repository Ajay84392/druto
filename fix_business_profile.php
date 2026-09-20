<?php

$content = file_get_contents('app/Http/Controllers/MerchantDashboardController.php');

$findStoreOfferCheck = <<<'EOF'
        $business = Business::where('user_id', auth()->id())->first();
        if (! $business) {
            // Auto-create basic business profile if missing
            $business = Business::create([
                'user_id' => auth()->id(),
                'name' => auth()->user()->name ?? 'My Business',
                'phone' => '0000000000',
                'email' => auth()->user()->email ?? '',
            ]);
        }
EOF;

$replaceStoreOfferCheck = <<<'EOF'
        $business = Business::where('user_id', auth()->id())->first();
        if (! $business) {
            // Auto-create basic business profile if missing
            $business = Business::create([
                'user_id' => auth()->id(),
                'name' => auth()->user()->name ?? 'My Business',
                'phone' => '0000000000',
                'email' => 'business_' . auth()->id() . '_' . time() . '@druto.com',
            ]);
        }
EOF;

$content = str_replace($findStoreOfferCheck, $replaceStoreOfferCheck, $content);
file_put_contents('app/Http/Controllers/MerchantDashboardController.php', $content);
echo "Updated storeOffer again.\n";
