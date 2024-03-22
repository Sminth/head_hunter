<?php

use App\Http\Controllers\CandidatController;
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

Route::get('/thanks', function () {
    return view('thanks');
})->name("thanks");

Route::get('/', [HomeController::class,"index"])->name('index');

Route::get('/login', [CandidatController::class,"loginview"]);
Route::get('/logout', [CandidatController::class,"logout"]);
Route::post('/login', [CandidatController::class,"login"]);
Route::get('/user', [CandidatController::class,"index"])->name("user.index");
Route::get('/candidatures', [CandidatController::class,"candidatures"])->name("user.candidatures");

Route::get('/test/{candidature}', [CandidatController::class,"test"])->name("user.test");
Route::get('/test/{candidature}/{score}', [CandidatController::class,"resulttest"])->name("user.resulttest");


Route::get('/emploi/{offre}', [HomeController::class,"detailEmploi"])->name("detailEmploi");
Route::get('/emploi/{offre}/candidater', [HomeController::class,"candidaterEmploi"])->name("candidaterEmploi");

Route::get('/emploi/{offre}/candidats', [HomeController::class,"candidatsEmploi"])->name("candidatsEmploi");

Route::get('/emplois', [HomeController::class,"emploi"])->name("emploi");
Route::get('/accepter/{candidature}', [HomeController::class,"accepte"])->name("emploi");

Route::post('/emploi/{offre}/addcandidat', [HomeController::class,"addcandidat"])->name("addcandidat");
