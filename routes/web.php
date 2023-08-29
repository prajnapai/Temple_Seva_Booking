<?php
namespace App\Http\Controllers;
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


/*-------------Admin--------------*/
Route::post('admin_login', [AdminController::class, 'admin_login']);
Route::get('admin', [AdminController::class, 'admin']);
Route::get('dashboard', [AdminController::class, 'dashboard']);
Route::get('logout', [AdminController::class, 'logout']);

Route::get('password', [AdminController::class, 'password']);
Route::post('password_insert', [AdminController::class, 'password_insert']);

Route::get('bookings', [AdminController::class, 'bookings']);

Route::get('bseva', [AdminController::class,'seva']);
Route::post('seva_insert', [AdminController::class, 'seva_insert']);
Route::get('editSeva', [AdminController::class, 'editSeva']);
Route::get('deleteSeva', [AdminController::class, 'deleteSeva']);

Route::get('category', [AdminController::class, 'category']);
Route::post('category_insert', [AdminController::class, 'category_insert']);
Route::get('editCategory', [AdminController::class, 'editCategory']);
Route::get('deleteCategory', [AdminController::class, 'deleteCategory']);

Route::get('invoice', [AdminController::class, 'invoice']);



/*-------------Front-end--------------*/
Route::get('/', [WebController::class, 'home']);
Route::get('about', [WebController::class, 'about']);
Route::get('seva', [WebController::class, 'seva']);
Route::get('details', [WebController::class, 'details']);
Route::get('booknow', [WebController::class, 'booknow']);
Route::get('contact', [WebController::class, 'contact']);

Route::get('login', [WebController::class, 'login']);
Route::post('login_insert', [WebController::class, 'login_insert']);

Route::get('register', [WebController::class, 'register']);
Route::post('register_insert', [WebController::class, 'register_insert']);

Route::get('profile', [WebController::class, 'profile']);
Route::post('profile_insert', [WebController::class, 'profile_insert']);

Route::get('history', [WebController::class,'history']);

Route::get('log_out', [WebController::class, 'log_out']);



Route::post('booking_insert', [WebController::class, 'booking_insert']);