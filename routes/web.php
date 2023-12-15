<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Database\Factories\ProductFactory;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


// Barra de busqueda pa
Route::get('/search', [ProductController::class, 'search'])->name('search');


Route::get('/products/{category}', [ProductController::class, 'ShowProductCategory'])->name('products.ShowProductCategory');
Route::get('/products/Details/{product}', [ProductController::class, 'show'])->name('products.showPublic');
Auth::routes();
Route::get('/', [ProductController::class, 'home'])->name('products.home');






Route::group(['middleware' => ['auth']], function () {
	Route::get('/home', [HomeController::class, 'index'])->name('home');
	// Rutas de Users
	Route::group(['prefix' => 'users', 'middleware' => ['role:admin'],'controller'=> UserController::class],function(){
		Route::get('/', 'index')->name('users.index')->middleware('can:users.index');
		Route::get('/create',  'create')->name('users.create')->middleware('can:users.create');
		Route::post('/',  'store')->name('users.store')->middleware('can:users.store');
		Route::get('/{user}/edit',  'edit')->name('users.edit')->middleware('can:users.edit');
		Route::put('/{user}',  'update')->name('users.update')->middleware('can:users.update');
		Route::delete('/{user}',  'destroy')->name('users.destroy')->middleware('can:users.destroy');
	});
	// Rutas de Productos
	Route::group(['prefix' => 'products', 'controller'=> ProductController::class],function(){
		Route::get('/',  'index')->name('products.index')->middleware('can:products.index');


		Route::post('/store',  'store')->name('products.store')->middleware('can:products.store');
		Route::get('/{user}/edit',  'edit')->name('products.edit')->middleware('can:products.edit');
		Route::post('/update/{product}',  'update')->name('products.update')->middleware('can:products.update');
		Route::delete('/{product}',  'destroy')->name('products.destroy')->middleware('can:products.destroy');
	});
	// Rutas de Categoria
	Route::group(['prefix' => 'categories', 'controller'=> CategoryController::class],function(){
		Route::get('/',  'index')->name('categories.index')->middleware('can:categories.index');
		Route::get('/get-all', 'index')->name('categories.get-all')->middleware('can:categories.get-all');
		Route::get('/get-all-dt', 'getAll')->name('categories.get-all-dt');

		Route::get('/{category}',  'show')->name('categories.show');
		Route::post('/',  'store')->name('categories.store')->middleware('can:categories.store');
		Route::get('/{category}/edit',  'edit')->name('categories.edit')->middleware('can:categories.edit');
		Route::put('/{category}',  'update')->name('categories.update')->middleware('can:categories.update');
		Route::delete('/{category}',  'destroy')->name('categories.destroy')->middleware('can:categories.destroy');
	});

	// Rutas del carrito
	Route::get('/cart', [CartController::class, 'index'])->name('cart.index');


	
	Route::post('cart/add', [CartController::class, 'add'])->name('add');
	Route::get('cart/checkout', [CartController::class, 'checkout'])->name('checkout');
	Route::get('cart/clear', [CartController::class, 'clear'])->name('clear');
	Route::post('cart/removeitem', [CartController::class, 'removeItem'])->name('removeitem');
});
