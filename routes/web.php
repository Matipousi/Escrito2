<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
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
    return view('welcome');
});

Route::get('/escrito', function () {
    return view('app'); 
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/info', function () {
    return view('info');
});

Route::post('/login',  [RegisterController::class, 'store'])->name('registerFunc');
Route::post('/home',  [LoginController::class, 'store'])->name('loginFunc');
Route::get('/', function() {
$products = products::orderBy('created_at', 'desc')->get();
return view('home', ['products' => $products
]);
});
