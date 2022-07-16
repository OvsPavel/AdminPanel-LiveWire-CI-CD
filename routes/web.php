<?php

use App\Http\Controllers\MessageNotificationController;
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

Route::get('/', function () {
    return view('index');
});


// Auth::routes();

// Главная страница
Route::view('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Рабочее место
Route::view('/cabinet', [App\Http\Controllers\HomeController::class, 'cabinet'])->name('cabinet');

// Отчеты
Route::view('/reports', [App\Http\Controllers\HomeController::class, 'reports'])->name('reports');

// Справочники
Route::view('/dictionaries', [App\Http\Controllers\HomeController::class, 'dictionaries'])->name('dictionaries');

// Пользователи
Route::view('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');

// Пользователи -> Администрирование
Route::view('/usersAdmin', [App\Http\Controllers\HomeController::class, 'usersAdmin'])->name('users.admin');

// Справки
Route::view('/references', [App\Http\Controllers\HomeController::class, 'references'])->name('references');

// Broadcast

Route::post('/sendMessage', [MessageNotificationController::class, 'sendMessage'])->name('sendMessage');

// страница с формой отпрвки тестовых событий в BroadCast
Route::get('/sendEvent', [MessageNotificationController::class, 'showSendEventForm'])->name('showSendEventForm');

// роут для отладки Broadcast`а
// Route::get('/listen', function () {
//     return view('listen');
// });