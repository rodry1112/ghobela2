<?php

use App\Http\Controllers\NavigationController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Laravel\Jetstream\Rules\Role;

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
/*
Route::get('/', function () {
    return view('Navigation.home');
});
*/

//Auth::routes();

//Grupo para el contolador del producto
Route::controller(ProductController::class)->group(function(){
    Route::get('/product', 'index')->name('product.index');
    Route::get('/product/create', 'create')->name('product.create');
    Route::get('/product/{producto}/modify', 'modify')->name('product.modify');
    Route::get('/product/{producto}/show', 'show')->name('product.show');

    Route::post('/product', 'store')->name('product.store');
    Route::put('/product/{producto}', 'update')->name('product.update');
    Route::delete('/product/{producto}', 'destroy')->name('product.destroy');
});

//Grupo para el contolador del usuario
Route::controller(UserController::class)->group(function(){
    Route::get('/user', 'index')->name('user.index');
    Route::get('/user/create', 'create')->name('user.create');
    Route::get('/user/{usuario}/modify', 'modify')->name('user.modify');
    Route::get('/user/{usuario}/show', 'show')->name('user.show');

    Route::post('/user', 'store')->name('user.store');
    Route::put('/user/{usuario}', 'update')->name('user.update');
    Route::delete('/user/{usuario}', 'destroy')->name('user.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(NavigationController::class)->group(function(){ 
    Route::get('/','index')->name('Navigation.home');
    Route::get('/Navigation/Catalogo','catalogo')->name('Navigation.catalogo');
    Route::get('/Navigation/nosotros','nosotros')->name('Navigation.nosotros');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
