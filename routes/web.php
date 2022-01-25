<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\fileController;

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
Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/viewUsers', [App\Http\Controllers\HomeController::class, 'viewUser'])->name('viewUser');

// Route::middleware('auth')->group(function(){
    Route::get('home/status/{user_id}/{status_code}', [App\Http\Controllers\HomeController::class, 'updateUserStatus'])->name('updateUserStatus');
    Route::get('deleteUser/{id}', [App\Http\Controllers\HomeController::class, 'deleteUser'])->name('deleteUser');
// });



// edit user page
Route::get('editUser/{eid}', [App\Http\Controllers\userController::class, 'editUser'])->name('editUser');
// updateUser
Route::post('updateUser',[App\Http\Controllers\userController::class, 'updateUser'])->name('updateUser');

// ======== user panel ==========
// upload file page
Route::get('/user/uploadFile', [App\Http\Controllers\fileController::class, 'uploadFile'])->name('uploadFile');
// insert file
Route::post('/user/insertFile', [App\Http\Controllers\fileController::class, 'insertFile'])->name('insertFile'); 

// data list show
Route::get('/user/data-show', [App\Http\Controllers\fileController::class, 'viewData'])->name('viewData');