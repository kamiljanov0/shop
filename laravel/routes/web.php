<?php

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
Route::middleware('auth.sanctum')->get('/user',function (\Illuminate\Http\Request $request){
    return $request->user();
   });
//Route::get('favorites.index',[\App\Http\Controllers\FavoritesController::class, "index"])->name('favorites.index');
Route::get('user', [\App\Http\Controllers\AuthController::class, 'user'])->middleware('auth.sanctum');
Route::view('admin', 'admin.index')->middleware('isAdmin');
Route::get('admin.list',[\App\Http\Controllers\AdminController::class, 'list'])->name('admin.list')->middleware('isAdmin');
Route::get('/', [\App\Http\Controllers\PageController::class, 'main'])->name('main');
Route::get('login',[\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('authenticate',[\App\Http\Controllers\AuthController::class,'authenticate'])->name('authenticate');
Route::post('logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
Route::get('register',[\App\Http\Controllers\AuthController::class,'register'])->name('register');
Route::post('register',[\App\Http\Controllers\AuthController::class,'register_store'])->name('register.store');
Route::get('cart.index',[\App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::get('cart.create{id}',[\App\Http\Controllers\CartController::class, 'create'])->name('cart.create');
Route::post('removeProduct{id}',[\App\Http\Controllers\CartController::class,'removeProduct'])->name('removeProduct');
Route::get('products.filter{id}',[\App\Http\Controllers\ProductController::class,'productfilter'])->name('filter');
Route::delete('products.delete/{product}', [\App\Http\Controllers\ProductController::class, 'delete'])->name('products.delete')->middleware('isAdmin');;
Route::delete('category.delete/{category}', [\App\Http\Controllers\CategoryController::class, 'delete'])->name('category.delete')->middleware('isAdmin');;
Route::delete('subCategory.delete/{subCategory}', [\App\Http\Controllers\SubCategoryController::class, 'delete'])->name('subCategory.delete')->middleware('isAdmin');;
Route::get('products.discount', [\App\Http\Controllers\ProductController::class, 'discount'])->name('products.discount');
Route::post('products.search', [\App\Http\Controllers\ProductController::class, 'searchProduct'])->name('products.search');
Route::get('addresses.create',[\App\Http\Controllers\AdressController::class,'create'])->name('addresses.create')->middleware('auth');
Route::post('addresses.store',[\App\Http\Controllers\AdressController::class,'store'])->name('addresses.store')->middleware('auth');
Route::get('users.personal,',[\App\Http\Controllers\UsersController::class,'personal'])->name('users.personal');
Route::get('user.orders',[\App\Http\Controllers\UsersController::class, 'orders'])->name('user.orders');
Route::get('user.addresses',[\App\Http\Controllers\UsersController::class,'addresses'])->name('user.addresses');
Route::post('products.discount{sort]',[\App\Http\Controllers\ProductController::class,'sortDiscount'])->name('products.sort');
Route::post('sort{id}',[\App\Http\Controllers\ProductController::class,'sortProduct'])->name('sortProduct');
Route::get('products.forYou',[\App\Http\Controllers\ProductController::class, 'forYou'])->name('products.forYou');
Route::get('items.category',[\App\Http\Controllers\ProductItemController::class, 'category'])->name('items.category');
Route::get('item.products{id}',[\App\Http\Controllers\ProductItemController::class, 'products'])->name('item.products');
Route::get('item.create{id}',[\App\Http\Controllers\ProductItemController::class,'creating'])->name('item.create');
Route::get('products.show{product}',[\App\Http\Controllers\ProductController::class,'show'])->name('products.show');
Route::resource('products', \App\Http\Controllers\ProductController::class)->middleware('isAdmin')->only(['create', 'update', 'destroy', 'store','edit']);
//Route::resource('posts',\App\Http\Controllers\PostController::class); //resource classi  Crud uchun hammasini qilib beradi

Route::resources([
    'subCategory'=>\App\Http\Controllers\SubCategoryController::class,
    'category'=>\App\Http\Controllers\CategoryController::class,
    'favorites' => \App\Http\Controllers\FavoritesController::class,
    'orders' => \App\Http\Controllers\OrdersController::class,
    'user' => \App\Http\Controllers\UsersController::class,
    'items' => \App\Http\Controllers\ProductItemController::class,
]);
