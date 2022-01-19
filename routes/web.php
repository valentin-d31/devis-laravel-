<?php

use App\Http\Controllers\AdminController;
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

/*Home Route*/
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

/*[Admin] Devis Route*/


/*[Admin] Produits Routes*/
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{produit}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::patch('/admin/{produit}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('admin/{produit}', [AdminController::class, 'destroy'])->name('admin.destroy');
