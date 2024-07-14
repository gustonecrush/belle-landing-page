<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\BahanMentahController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HasilProduksiController;
use App\Http\Controllers\HotelMadinahController;
use App\Http\Controllers\HotelMekahController;
use App\Http\Controllers\PaketUmrahController;
use App\Http\Controllers\PesawatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Models\HasilProduksi;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products = Product::all();
    return view('index', compact('products'));
})->name('index');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/dashboard/data', [AdminDashboardController::class, 'getData'])->name('admin.dashboard.data');

Route::get('/admin/login', [AdminAuthController::class, 'index']);
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products');
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::put('/admin/products', [ProductController::class, 'update'])->name('admin.products.update');
Route::delete('/admin/products', [ProductController::class, 'destroy'])->name('admin.products.delete');

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::put('/admin/categories', [CategoryController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories', [CategoryController::class, 'destroy'])->name('admin.categories.delete');