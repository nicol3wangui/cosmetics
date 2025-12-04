<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SkinTypeController;
use App\Http\Controllers\DashboardController;

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

Route::get('/',[FrontendController::class,'welcome'])->name('welcome');
Route::get('/products',[FrontendController::class,'products'])->name('products');
Route::get('/contact-us',[FrontendController::class,'contactus'])->name('contactus');
Route::get('/billing',[FrontendController::class,'billing'])->name('billing');
Route::get('/cart',[FrontendController::class,'cart'])->name('cart');
Route::post('/customer-delete-cartitem',[FrontendController::class,'customerdeletecartitem'])->name('customerdeletecartitem');
Route::post('/customer-delete-cartitems',[FrontendController::class,'customerdeletecartitems'])->name('customerdeletecartitems');
Route::get('/checkout',[FrontendController::class,'checkout'])->name('checkout');
Route::get('/productDetails/{id}',[FrontendController::class,'productDetails'])->name('productDetails');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ROUTES FOR PROFILE
Route::get('/profile',[FrontendController::class,'showProfile'])->name('showProfile');
Route::post('/updatePersonalInformation',[FrontendController::class,'updatePersonalInformation'])->name('updatePersonalInformation');
Route::post('/updateProfileImage',[FrontendController::class,'updateProfileImage'])->name('updateProfileImage');
Route::post('/updatePassword',[FrontendController::class,'updatePassword'])->name('updatePassword');




//CATEGORIES
Route::get('/categories',[CategoryController::class,'categories'])->name('categories');
Route::post('/addCategory',[CategoryController::class,'addCategory'])->name('addCategory');
Route::post('/updateCategory',[CategoryController::class,'updateCategory'])->name('updateCategory');
Route::post('/deleteCategory',[CategoryController::class,'deleteCategory'])->name('deleteCategory');

//BRANDS
Route::get('/brands',[BrandController::class,'brands'])->name('brands');
Route::post('/addBrand',[BrandController::class,'addBrand'])->name('addBrand');
Route::post('/updateBrand',[BrandController::class,'updateBrand'])->name('updateBrand');
Route::post('/deleteBrand',[BrandController::class,'deleteBrand'])->name('deleteBrand');


//BRANDS
Route::get('/skintypes',[SkinTypeController::class,'skintypes'])->name('skintypes');
Route::post('/addSkintype',[SkinTypeController::class,'addSkintype'])->name('addSkintype');
Route::post('/updateSkintype',[SkinTypeController::class,'updateSkintype'])->name('updateSkintype');
Route::post('/deleteSkintype',[SkinTypeController::class,'deleteSkintype'])->name('deleteSkintype');


//PRODUCTS
Route::get('/showProducts',[ProductController::class,'showProducts'])->name('showProducts');
Route::post('/addProduct',[ProductController::class,'addProduct'])->name('addProduct');
Route::post('/deleteProduct',[ProductController::class,'deleteProduct'])->name('deleteProduct');

Route::post('/updateProduct',[ProductController::class,'updateProduct'])->name('updateProduct');

Route::post('/addToCart',[ProductController::class,'addToCart'])->name('addToCart');

//INVOICES ROUTE
Route::post('/payForProduct',[ProductController::class,'payForProduct'])->name('payForProduct');

//DASHBOARD
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');