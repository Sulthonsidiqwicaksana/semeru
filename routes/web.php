<?php

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
Route::get('/login', function () {
    return view('loginpage');
});
Route::get('/register', function () {
    return view('registerpage');
});
Route::get('/konten1', function () {
    return view('konten_1');
});

Route::get('/maps', function () {
    return view('maps');
});

Route::get('/coba', function () {
    $data = ['Lat' => '-5,00724', 'long' => '1,34562'];
    var_dump($data);
    echo '<br>';
    var_dump(json_encode($data));
    // return json_encode($data);
});

/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
