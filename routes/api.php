<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BhytController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('bhyts', BhytController::class);

Route::put('/bhyts/{bhyt}/completed', [BhytController::class, 'setCompleted']);
Route::put('/bhyts/{bhyt}/disabled', [BhytController::class, 'setDisabled']);
Route::put('/bhyts/{bhyt}/tong-tien', [BhytController::class, 'setTongTien']);
Route::get('/maHoGd', [BhytController::class, 'getAllMaHoGd']);
Route::get('/maSoBhxhs', [BhytController::class, 'getAllMaSoBhxh']);
Route::get('/contacts', [BhytController::class, 'getAllContacts']);
Route::get('/xoaHoGd', [BhytController::class, 'xoaHoGd']);
Route::put('/themds', [BhytController::class, 'themDanhSach']);
Route::put('/bhyt-auth', [BhytController::class, 'setAuth']);
Route::get('/bhyt-auth', [BhytController::class, 'getAuth']);
