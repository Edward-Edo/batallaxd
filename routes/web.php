<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;
//use Telegram;

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

Route::get('/', [TelegramController::class, 'index']);
Route::get('/activity', [TelegramController::class, 'updatedActivity']);
Route::get('/push_message', [TelegramController::class, 'pushMessage']);
/*Route::get('/bot/getupdates', function() {
    $updates = Telegram::getUpdates();
    return (json_encode($updates));
});*/