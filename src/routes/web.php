<?php
namespace laravelmoduelscrud\LaravelPermissionEditor\Http\Controllers;

use laravelmoduelscrud\laravelpermissioneditor\Http\Controllers\CrudController;

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

Route::get('contact', function(){
        return 'Hello from the contact form package';
    });



Route::get('/crud', [CrudController::class, 'index'])->name('crud.index');
Route::get('/crud/create', [CrudController::class, 'create'])->name('crud.create');
Route::post('/crud', [CrudController::class, 'store'])->name('crud.store');
Route::get('/crud/{id}', [CrudController::class, 'show'])->name('crud.show');
Route::get('/crud/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit');
Route::put('/crud/{id}', [CrudController::class, 'update'])->name('crud.update');
Route::delete('/crud/{id}', [CrudController::class, 'destroy'])->name('crud.destroy');
