<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailProduct;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CmtController;
use App\Http\Controllers\OrderAdminController;

Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/men', [UserController::class, 'men'])->name('men');
Route::get('/women', [UserController::class, 'women'])->name('women');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/admin', [AdminController::class, 'index'])->name('index_admin');

Route::get('/detail_order', [AdminController::class, 'detail_order']);
Route::get('/list-user', [AdminController::class, 'list_user'])->name('list-user');
Route::get('/list-contact', [AdminController::class, 'list_contact'])->name('list-contact');
Route::get('/list-tk-order', [AdminController::class, 'tk_list_order'])->name('list-tk-order');
Route::get('/list-tk-product', [AdminController::class, 'tk_list_product'])->name('list-tk-product');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/save', [CartController::class, 'Save']);
Route::post('/order', [OrderController::class, 'Order']);
Route::get('/order', [UserController::class, 'order']);
Route::get('/delete_cart', [CartController::class, 'delete']);
Route::resources([
    'product' => ProductController::class,
]);
Route::resources([
    'category' => CategoryController::class,
]);
Route::resources([
    'detail' => DetailProduct::class,
]);
Route::resources([
    'cmt' => CmtController::class,
]);
Route::resources([
    'list_order' => OrderAdminController::class,
]);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
