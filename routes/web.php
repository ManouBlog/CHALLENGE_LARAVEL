<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InscriptionsController;
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
 /*products represente le nom du dossier tu peux mettre un ::get au lieu de ::resource*/
Route::resource('products', ProductController::class);


 /*inscriptions represente le nom du dossier tu peux mettre un ::get au lieu de ::resource*/
Route::resource('inscriptions', InscriptionsController::class);
