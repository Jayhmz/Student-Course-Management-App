<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
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

Route::resource('/student', StudentController::class);
Route::resource('/course', CourseController::class);














// route::view("register", "register");
// Route::post("create", [usersController::class, "register"]);

// route::view("homepage", "homepage")->name('homepage');
// Route::post("login", [usersController::class, "login"]);

// route::view("testing", "querytest")->name('postpage');
// Route::post("testing", [PostController::class, "upload"])->name('uploadfile');




