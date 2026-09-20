<?php

$content = file_get_contents('app/Http/Controllers/MerchantDashboardController.php');

// Fix createOffer
$findCreateOffer = <<<'EOF'
                return [
                    'id' => $index + 1,
                    'visits' => $offer->orex_coins,
                    'expiry' => $offer->expiry ?? '30',
                    'description' => $offer->description,
                    'image' => $img,
                ];
EOF;

$replaceCreateOffer = <<<'EOF'
                return [
                    'id' => $index + 1,
                    'visits' => $offer->orex_coins,
                    'expiry' => $offer->expiry ?? '30',
                    'title' => $offer->title,
                    'description' => $offer->description,
                    'image' => $img,
                ];
EOF;

$content = str_replace($findCreateOffer, $replaceCreateOffer, $content);

// Fix storeOffer
$findStoreOffer = <<<'EOF'
            foreach ($rewards as $reward) {
                // Only save if description is provided
                if (! empty($reward['description'])) {

                    $imagePath = null;
EOF;

$replaceStoreOffer = <<<'EOF'
            foreach ($rewards as $reward) {
                // Only save if title or description is provided
                if (! empty($reward['title']) || ! empty($reward['description'])) {

                    $imagePath = null;
EOF;

$content = str_replace($findStoreOffer, $replaceStoreOffer, $content);

$findStoreOfferCreate = <<<'EOF'
                    Offer::create([
                        'business_id' => $business->id,
                        'title' => $reward['description'], // Using description as title
                        'description' => $reward['description'],
                        'orex_coins' => (int) $reward['visits'], // Mapping visits to orex_coins
                        'expiry' => $reward['expiry'],
                        'image' => $imagePath,
                    ]);
EOF;

$replaceStoreOfferCreate = <<<'EOF'
                    Offer::create([
                        'business_id' => $business->id,
                        'title' => $reward['title'] ?? '',
                        'description' => $reward['description'] ?? '',
                        'orex_coins' => (int) ($reward['visits'] ?? 1), // Mapping visits to orex_coins
                        'expiry' => $reward['expiry'] ?? '30',
                        'image' => $imagePath,
                    ]);
EOF;

$content = str_replace($findStoreOfferCreate, $replaceStoreOfferCreate, $content);

file_put_contents('app/Http/Controllers/MerchantDashboardController.php', $content);
echo "Updated MerchantDashboardController.\n";
