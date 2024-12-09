<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PageKeduaController;
use App\Http\Controllers\PageKetigaController;
use App\Http\Controllers\PagePertamaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home',[HomePageController::class, 'index'])->name('home');
Route::get('/tul', [HomePageController::class, 'tulisan'])->name('tulisan');

Route::get('/param1', [HomePageController::class, 'paramone'])->name('paramone');
Route::get('/param2/{a}/{c}/{b}', [HomePageController::class, 'paramtwo'])->name('parantwo');

Route::get('/pageone', [PagePertamaController::class, 'index'])->name('pageone');
Route::get('/pagetwo', [PageKeduaController::class, 'index'])->name('pagetwo');
Route::get('/pagethree', [PageKetigaController::class, 'index'])->name('pagethree');
Route::get('/pageone/address/', [PagePertamaController::class, 'add'])->name('address.add');
Route::post('/pageone/address/create', [PagePertamaController::class, 'create'])->name('address.create');
Route::delete('/pageone/address/delete/{id}', [PagePertamaController::class, 'destroy'])->name('address.delete');
Route::get('/pageone/address/edit/{id}', [PagePertamaController::class, 'edit'])->name('address.edit');
Route::put('/pageone/address/update/{id}', [PagePertamaController::class, 'update'])->name('address.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
