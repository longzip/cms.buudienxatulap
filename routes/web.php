<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BhytController;

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

Route::get('/nop-bhyt/{id}/pdf', [BhytController::class, 'inMauNopTienBHYT']);
Route::get('/nop-bhyt/{id}', [BhytController::class, 'xemMauNopTienBHYT']);
Route::get('/thanh-vien-ho-gia-dinh/{id}/pdf', [BhytController::class, 'inPhuLucThanhVienHoGiaDinh']);

// Route::resource('bhyt', 'BhytController');
