<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CountryControlller;
use App\Http\Controllers\CategoryControlller;
use App\Http\Controllers\CityControlller;
use App\Http\Controllers\AdminControlller;

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


Route::get('/admin/login', [AdminControlller::class, 'login']);
Route::post('/admin/login-data', [AdminControlller::class, 'admin_login']);


Route::get('/show-post', [PostController::class, 'show']);

Route::get('/admin/show-country', [CountryControlller::class, 'index']);
Route::get('/admin/add-country', [CountryControlller::class, 'create']);
Route::post('/admin/add-country-data', [CountryControlller::class, 'store']);
Route::get('/admin/edit-country/{id}', [CountryControlller::class, 'edit']);
Route::post('/admin/edit-country-data', [CountryControlller::class, 'update']);
Route::post('/admin/update-country-status', [CountryControlller::class, 'update_country_status']);
Route::get('/admin/delete-country/{id}', [CountryControlller::class, 'destroy']);



Route::get('/admin/show-category', [CategoryControlller::class, 'show']);

Route::get('/admin/show-city', [CityControlller::class, 'show']);
Route::get('/admin/add-city', [CityControlller::class, 'create']);
Route::post('/admin/add-city-data', [CityControlller::class, 'store']);
Route::get('/admin/delete-city/{id}', [CityControlller::class, 'destroy']);
Route::get('/admin/edit-city/{id}', [CityControlller::class, 'edit']);
Route::post('/admin/edit-city-data', [CityControlller::class, 'update']);
Route::post('/admin/update-city-status', [CityControlller::class, 'update_city_status']);

Route::get('/admin/dashboard', [AdminControlller::class, 'index']);

Route::get('/admin/users', [UserControlller::class, 'index']);





