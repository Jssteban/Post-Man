<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/categoria', CategoriesController::class )->names('api.v1.categorias');
Route::resource('/publicacion', PostsController::class)->names('api.v1.publicaciones');
Route::resource('/etiqueta', TagsController::class)->names('api.v1.etiquetas');
Route::resource('/imagen', ImagesController::class)->names('api.v1.imagenes');