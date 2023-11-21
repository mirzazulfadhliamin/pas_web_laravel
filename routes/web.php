<?php

use App\Http\Controllers\MugiwaraController;
use App\Http\Controllers\PirateKingController;
use App\Http\Controllers\RedhairedController;
use App\Models\Redhaired;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function (){
    return redirect('/home');
});
Route::get('/mugiwara', [MugiwaraController::class, 'index']);
Route::get('/redhaired', [RedhairedController::class, 'index']);
Route::get('/PirateKing', [PirateKingController::class, 'index']);

Route::get('/mugiwara/detail/{mugiwara}', [MugiwaraController::class, 'show']);
Route::get('/redhaired/detail/{mugiwara}', [RedhairedController::class, 'show']);
Route::get('/PirateKing/detail/{pirateKing}', [PirateKingController::class, 'show']);


Route::get('/home',function (){
    return view('home', [
        'title' => "home"
    ]);
});
Route::fallback(function(){
    return view('404');
});


