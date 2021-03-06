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

Route::get('/', [App\Http\Controllers\InstaController::class, 'index'])->name('welcome');

Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{id}', [App\Http\Controllers\PortfolioController::class, 'show'])->name('portfolio.show');
Route::get('/web', function () {
    return view('web');
})->name('web');
// Route::get('/design', function () {
//     return view('design');
// })->name('design');
Route::get('/contact',[App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact/send',[App\Http\Controllers\ContactController::class, 'mailContactForm'])->name('mailContactForm');
Route::get('/reload-captcha', [App\Http\Controllers\ContactController::class, 'reloadCaptcha'])->name('reloadCaptcha');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
