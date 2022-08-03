<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DengueCaseController;
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

Route::post('/case/add', [DengueCaseController::class, 'AddCase'])->name('DengueCase');



Route::view('/aboutdengue','aboutdengue');
//Route::get('/newcase', [DengueCaseController::class, '  '])
//Route::get('insert','App\Http\Controllers\InsertCaseController@insertform');
//Route::post('create','App\Http\Controllers\InsertCaseController@insert');

//denguecase controller
//Route::get('/newcase', [DengueCaseController::class, 'index'])->name('');;

//users route
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/welcome', function () {
        return view('welcome');
    })->name('welcome');
    Route::get('userreport', function () {
        return view('UserReport');
    })->name('UserReport');
    Route::get('createreport', function () {
        return view('CreateReport');
    })->name('CreateReport');
    Route::get('aboutdengue', function () {
        return view('AboutDengue');
    })->name('AboutDengue');
    
});

//admin route
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified', 'authadmin'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('newcase', function () {
        return view('insertcase');
    })->name('insertcase');
    Route::get('/allcase', [DengueCaseController::class, 'AllCase'])->name('admin.allcase');;

    Route::get('viewcase/update/{case_id}', [DengueCaseController::class, 'UpdateCase']);
    Route::post('case/update/{case_id}', [DengueCaseController::class, 'Update'])->name('caseupdate');
});
  
// Route::group(['middleware' => ['auth:visitor']], function () {
//     Route::get('visitor/dashboard', [VisitorController::class, 'dashboard'])->name('visitor.dashboard');
// });
  