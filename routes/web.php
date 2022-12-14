<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\PublishersController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\WarehouseController;
use App\Http\Controllers\web\WebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [WebController::class,'viewHome']);

Route::get('/home',[WebController::class,'viewHome']);
// Đăng ký
Route::get('/register',[WebController::class,'viewRegister']);
Route::post('/register',[WebController::class,'createRegister']);
// Đăng nhập
Route::get('/login',[WebController::class,'viewLogin']);
Route::post('/login',[WebController::class,'login']);
// Đăng xuất
Route::post('/logout',[WebController::class,'logout']);


Route::get('admin/home',[AdminController::class,'viewHome']);

// Xem Product Detail
Route::get('/home/{id}',[WebController::class,'viewProductDetail']);
// Xem gio hang
Route::get('/cart',[WebController::class,'viewCart']);

// Products
// Tạo
Route::get('/admin/products/create', [ProductController::class,'viewCreateProduct']);
Route::post('/admin/products/create', [ProductController::class,'createProduct']);
// Xem
Route::get('/admin/products',[ProductController::class,'viewAllProducts']);
Route::get('/admin/products/{id}',[ProductController::class,'viewProductById']);
// Sửa
// admin sửa
Route::get('/admin/products/{id}/edit',[ProductController::class,'editProductById']);
//custom sửa
Route::put('/admin/products/{id}/edit',[ProductController::class,'updateProductById']);
// Xóa
Route::delete('/admin/products/{id}',[ProductController::class,'deleteProductById']);

// Warehose
//Xem
Route::get('/admin/warehouses',[WarehouseController::class,'viewWarehouse']);
Route::get('/admin/warehouses/{id}',[WarehouseController::class,'viewWarehouseById']);
// Nxb
// Tạo
Route::get('/admin/publishers/create', [PublishersController::class,'viewCreateNhaXuatBan']);
Route::post('/admin/publishers/create', [PublishersController::class,'createNhaXuatBan']);
// Xem
Route::get('/admin/publishers',[PublishersController::class,'viewAllNhaXuatBan']);
// Sửa
// admin sửa
Route::get('/admin/publishers/{id}/edit',[PublishersController::class,'editNhaXuatBanById']);
// custom sửa
Route::put('/admin/publishers/{id}/edit',[PublishersController::class,'updateNhaXuatBanById']);
// Xóa
Route::delete('/admin/publishers/{id}',[PublishersController::class,'deleteNhaXuatBanById']);



Route::get('/admin/users',[UserController::class,'viewAllUser']);
Route::get('/admin/users/{id}',[UserController::class,'viewUserById']);
// Sửa
Route::put('/admin/users/{id}/edit',[UserController::class,'editUserById']);
// Xóa
Route::delete('/admin/users/{id}',[UserController::class,'deleteUserById']);
