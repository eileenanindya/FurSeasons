<?php
use App\Models\Post;
use App\Models\Users;
use App\Models\Image;
use App\Models\Person;
use App\Http\Controllers\SendEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    return view('home');

});

Route::get('/AboutUs', function () {
    return view('aboutus');
});

// Route::get('/Cart', function () {
//     return view('cart');
// });

Route::get('/postgallery', [PostController::class, 'index']);

Route::get('/Checkout', [ProductController::class, 'showCheckout']);

Route::get('/Catalog', function () {
    return view('catalog');
});

Route::get('/Services', function () {
    return view('service');
});

Route::get('/Profile', function () {
    return view('profile');
});

Route::get('/admin/home', [HomeController::class, 'index'])->middleware(['auth', 'admin']);

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/Catalog', [ProductController::class, 'index']);

Route::get('/forgot-password', function() {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
    ? back()->with(['status' => __($status)])
    : back()->withErrors(['email' => __($status)]);

})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return 'We have emailed your password reset link. ';
})->middleware('guest')->name('password.reset');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/transaction', [TransactionController::class, 'processTransaction']);


require __DIR__.'/auth.php';

// Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
// Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
// Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

Route::get('/view_product', [AdminController::class, 'view_product']);

Route::post('/add_product', [AdminController::class, 'add_product']);

Route::get('/show_product', [AdminController::class, 'show_product']);

Route::get('/order', [AdminController::class, 'order']);

Route::get('/view_post', [AdminController::class, 'view_post']);

Route::post('/add_post', [AdminController::class, 'add_post']);

Route::get('/show_post', [AdminController::class, 'show_post']);

Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);

Route::get('/edit_post/{id}', [AdminController::class, 'edit_post']);

Route::post('/edit_post_confirm/{id}', [AdminController::class, 'edit_post_confirm']);

Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

Route::get('/edit_product/{id}', [AdminController::class, 'edit_product']);

Route::post('/edit_product_confirm/{id}', [AdminController::class, 'edit_product_confirm']);

Route::get('/admin/home', [AdminController::class, 'main'])->name('admin.home');

Route::get('/product_details/{id}', [ProductController::class, 'product_details']);

Route::post('/add_cart/{id}', [ProductController::class, 'add_cart']);

Route::get('/cart', [ProductController::class, 'cart']);

Route::get('/remove_cart/{id}', [ProductController::class, 'remove_cart']);

Route::get('/cod_order', [ProductController::class, 'cod_order']);

Route::get('/summary', [ProductController::class, 'summary'])->name('summary');

Route::get('/stripe/{totalprice}', [ProductController::class, 'stripe']);

Route::post('stripe', [ProductController::class, 'stripePost'])->name('stripe.post');

// Route::post('/add_profile', [UserProfileController::class, 'add_profile']);
// Route::middleware(['auth'])->group(function () {
//     Route::get('/edit_profile', [UserProfileController::class, 'showProfileForm'])->name('profile.edit');
//     Route::post('/add_profile', [UserProfileController::class, 'add_profile'])->name('profile.add');
// });

// routes/web.php

use App\Http\Controllers\SessionController;

Route::get('/login', [SessionController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [SessionController::class, 'login']);
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
