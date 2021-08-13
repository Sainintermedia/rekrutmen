<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\Frontcontroller;

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

// Route::get('/', function () {
//     return view('frontend.main');
// });


///////////////// PENDAFTARAN ///////////////////////

    Route::get('/pendaftaran',[PendaftaranController::class, 'index']);
    Route::post('/pendaftaran',[PendaftaranController::class, 'store']);
    Route::get('/creatependaftaran',[PendaftaranController::class, 'create']);
    Route::put('/pendaftaranupdate/{id}',[PendaftaranController::class, 'update']);
    Route::get('/pendaftaranedit/{id}',[PendaftaranController::class, 'edit']);
    Route::get('/pendaftaranhapus/{id}',[PendaftaranController::class, 'destroy']);

///////////////// DATA FRONTEND ///////////////////////
Route::get('/',[Frontcontroller::class, 'index']);

