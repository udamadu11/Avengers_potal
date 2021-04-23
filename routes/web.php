<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\heroControler;
use App\Hero;
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

Route::get('/addHeroes', function () {
    return view('addHeroes');
});

Route::post('addHeroes', [heroControler::class,'addHero']);
Route::get('/', [heroControler::class,'getHero']);

Route::get('/heroes', function () {
    return view('heroes');
});
Route::get('heroes', [heroControler::class,'fletchHero']);
Route::get('delete/{id}', [heroControler::class,'deleteHero']);

// Route::get('/', function () {
//     $data = Hero::orderBy('created_at')->get();
//     return view('welcome',['heroes'=>$data]);
// });
