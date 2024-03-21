<?php

use App\Http\Controllers\HomeController;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', [HomeController::class,"index"]);

Route::get('/emploi/{offre}', [HomeController::class,"detailEmploi"])->name("detailEmploi");
Route::get('/emploi/{offre}/candidater', [HomeController::class,"candidaterEmploi"])->name("candidaterEmploi");
Route::get('/emplois', [HomeController::class,"emploi"])->name("emploi");

Route::post('/emploi/{offre}/addcandidat', [HomeController::class,"addcandidat"])->name("addcandidat");
