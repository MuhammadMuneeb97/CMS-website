<?php

use App\Http\Controllers\Website;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UsersController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Website::class, 'website'])->name('website');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except' => ['show','create','store']]);

});

Route::get('/add-image',[HomeController::class,'addImage']);

Route::post('/add-image',[HomeController::class,'storeImage'])->name('image.store');

Route::get('all-images',[HomeController::class,'allImages'])->name('all.image');

Route::get('/edit-image/{id}',[HomeController::class,'editImage']);

Route::post('/update-image',[HomeController::class,'updateImage'])->name('image.update');

Route::get('/delete-image/{id}',[HomeController::class,'deleteImage']);

Route::get('/add-data',[HomeController::class,'addData']);

Route::post('/add-data',[HomeController::class,'storeData'])->name('data.store');

Route::get('/all-data',[HomeController::class,'allData'])->name('all.data');

Route::get('/edit-data/{id}',[HomeController::class,'editData']);

Route::post('/update-data',[HomeController::class,'updateData'])->name('data.update');

Route::get('/add-team',[HomeController::class,'addTeam']);

Route::post('/add-team',[HomeController::class,'storeTeam'])->name('team.store');

Route::get('/all-team',[HomeController::class,'teams'])->name('all.team');

Route::get('/edit-team/{id}',[HomeController::class,'editTeam']);

Route::post('/update-team',[HomeController::class,'updateTeam'])->name('team.update');

Route::get('/delete-team/{id}',[HomeController::class,'deleteTeam']);