<?php

use App\Http\Controllers\MessageNotificationController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    // Главная страница
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
     
    // Обекты пожарных станций
     Route::get('/objects/{station:id}', [App\Http\Controllers\HomeController::class, 'objects'])->name('objects');

    // Рабочее место
    Route::view('/cabinet', [App\Http\Controllers\HomeController::class, 'cabinet'])->name('cabinet');

    // Отчеты
    Route::view('/reports', [App\Http\Controllers\HomeController::class, 'reports'])->name('reports');

    // Справочники
    Route::view('/dictionaries', [App\Http\Controllers\HomeController::class, 'dictionaries'])->name('dictionaries');

    // Пользователи
    Route::view('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users');

    // Пользователи -> Администрирование
    Route::get('/usersAdmin', [App\Http\Controllers\HomeController::class, 'usersAdmin'])->name('users.admin');
    
    // Пользователи -> Администрирование > Роли
    Route::get('/roles', [App\Http\Controllers\HomeController::class, 'roles'])->name('users.roles');

    // Справки
    Route::view('/references', [App\Http\Controllers\HomeController::class, 'references'])->name('references');


    // ================================= Broadcast =================================

    // страница с формой отпрвки тестовых событий в BroadCast
    Route::get('/sendEvent', [MessageNotificationController::class, 'showSendEventForm'])->name('showSendEventForm');

    // эндпоинт для отправки тестовых событий
    Route::post('/sendMessage', [MessageNotificationController::class, 'sendMessage'])->name('sendMessage');

    // роут для отладки Broadcast`а
    // Route::get('/listen', function () {
    //     return view('listen');
    // });
});
