<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (\Illuminate\Http\Request $request) {
    $request->merge(['role' => 'customer']);
    return app(\App\Http\Controllers\OtpAuthController::class)->sendOtp($request);
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', function (\Illuminate\Http\Request $request) {
    $request->merge(['role' => 'customer']);
    return app(\App\Http\Controllers\OtpAuthController::class)->sendOtp($request);
});
Route::post('/verify-otp', [\App\Http\Controllers\OtpAuthController::class, 'verifyOtp'])->name('otp.verify.post');

// Protected Customer Routes
Route::middleware([\App\Http\Middleware\CheckCustomerSession::class])->group(function () {
    Route::get('/customer', [\App\Http\Controllers\CustomerDashboardController::class, 'index'])->name('customer.home');
    Route::get('/customer/scan', [\App\Http\Controllers\CustomerDashboardController::class, 'scan'])->name('customer.scan');
    Route::get('/customer/after-scan', [\App\Http\Controllers\CustomerDashboardController::class, 'afterScan'])->name('customer.after-scan');
    Route::get('/customer/rewards', [\App\Http\Controllers\CustomerDashboardController::class, 'rewards'])->name('customer.rewards');
    Route::get('/customer/profile', [\App\Http\Controllers\CustomerDashboardController::class, 'profile'])->name('customer.profile');
    Route::get('/customer/logout', [\App\Http\Controllers\CustomerDashboardController::class, 'logout'])->name('customer.logout');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/verify-otp', function () { return view('auth.verify-otp'); })->name('otp.verify.get');
Route::get('/admin/verify-otp', function () { return view('auth.verify-otp'); });
Route::get('/merchant/verify-otp', function () { return view('merchant.auth.verify'); });

Route::post('/verify-otp', [\App\Http\Controllers\OtpAuthController::class, 'verifyOtp'])->name('otp.verify.post');
Route::post('/admin/verify-otp', [\App\Http\Controllers\OtpAuthController::class, 'verifyOtp']);
Route::post('/merchant/verify-otp', [\App\Http\Controllers\OtpAuthController::class, 'verifyOtp']);

Route::get('/reset-password', function () {
    return view('auth.reset-password');
});

Route::get('/admin', function () {
    return view('admin.login');
});

Route::post('/admin', function (\Illuminate\Http\Request $request) {
    $request->merge(['role' => 'admin']);
    return app(\App\Http\Controllers\OtpAuthController::class)->sendOtp($request);
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/merchants', function () {
    return view('admin.merchants.index');
});

Route::get('/admin/merchants/view/{id}', function ($id) {
    return view('admin.merchants.show', ['id' => $id]);
});

Route::get('/admin/plans', function () {
    return view('admin.plans.index');
});

Route::redirect('/admin/plan', '/admin/plans');

Route::get('/admin/plans/create', function () {
    return view('admin.plans.create');
});

Route::get('/admin/plans/edit/{id}', function ($id) {
    return view('admin.plans.edit', ['id' => $id]);
});

Route::get('/admin/claims', function () { return view('admin.claims'); });
Route::get('/admin/settings', function () { return view('admin.settings'); });
Route::get('/admin/settings/platform', function () { return view('admin.settings.platform'); });
Route::get('/admin/settings/contact', function () { return view('admin.settings.contact'); });
Route::get('/admin/settings/brand', function () { return view('admin.settings.brand'); });
Route::get('/admin/settings/faq', function () { return view('admin.settings.faq'); });
Route::get('/admin/profile', function () { return view('admin.profile'); });

// Merchant Auth Routes
Route::get('/merchant/login', [\App\Http\Controllers\MerchantDashboardController::class, 'showLogin'])->name('merchant.login');
Route::post('/merchant/login', function (\Illuminate\Http\Request $request) {
    $request->merge(['role' => 'merchant']);
    return app(\App\Http\Controllers\OtpAuthController::class)->sendOtp($request);
});
Route::get('/merchant/register', [\App\Http\Controllers\MerchantDashboardController::class, 'showRegister'])->name('merchant.register');
Route::post('/merchant/register', [\App\Http\Controllers\MerchantDashboardController::class, 'processRegister']);
Route::get('/merchant/verify', [\App\Http\Controllers\MerchantDashboardController::class, 'showVerify'])->name('merchant.verify');
Route::post('/merchant/verify', [\App\Http\Controllers\MerchantDashboardController::class, 'processVerify']);
Route::get('/merchant/account-created', [\App\Http\Controllers\MerchantDashboardController::class, 'showCreated'])->name('merchant.created');
Route::get('/merchant/logout', [\App\Http\Controllers\MerchantDashboardController::class, 'logout'])->name('merchant.logout');

// Protected Merchant Routes
Route::middleware([\App\Http\Middleware\CheckMerchantSession::class])->group(function () {
    Route::get('/merchant', [\App\Http\Controllers\MerchantDashboardController::class, 'index'])->name('merchant.dashboard');
    Route::get('/merchant/profile', [\App\Http\Controllers\MerchantDashboardController::class, 'profile'])->name('merchant.profile');
    Route::get('/merchant/rewards', [\App\Http\Controllers\MerchantDashboardController::class, 'rewards'])->name('merchant.rewards');
    Route::get('/merchant/create-offer', [\App\Http\Controllers\MerchantDashboardController::class, 'createOffer'])->name('merchant.create-offer');
});