<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\User;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Review;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Regular route
Route::get('/', function () {
    return view('home', [
        'pagetitle' => 'Writers',
        'maintitle' => 'Writers in My Library',
        'reviews' => Review::all()
    ]);
});

Route::get('/catalogue', [ProductsController::class, 'index']);


// Calling ID route

Route::get('product/{product}', [ProductsController::class, 'show']);

Route::get('category/{category}', [CategorysController::class, 'show']);

Route::get('delete_cart/{user}', [CartsController::class, 'destroy']);

Route::get('checkout/{user}', function(User $user){
    $user->load('cart');
        return view('checkout_two', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The writer',
            'user' => $user,
            'payments' => Payment::paginate(3)
        ]);
});

Route::get('cart_user/{user}', [CartsController::class,'show']);

Route::get('checkout_two/{user}', [OrdersController::class,'show']);



// Calling func class route

Route::resource('order', OrdersController::class);

Route::resource('review', ReviewsController::class);

Route::resource('cart', CartsController::class);


// Admin route

Route::resource('admin_product', ProductsController::class)->middleware('admin');

Route::resource('admin_payment', PaymentsController::class)->middleware('admin');

Route::resource('admin_category', CategorysController::class)->middleware('admin');

Route::resource('admin_review', ReviewsController::class)->middleware('admin');

Route::resource('admin_order', OrdersController::class)->middleware('admin');

Route::resource('admin_user', UserController::class)->middleware('admin');

Route::resource('categorys', CategorysController::class)->middleware('admin');


// Original laravel Auth route

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';