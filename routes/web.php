<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('panel/{slug_name}', [HomeController::class, 'panel'])->name('panel');
Route::get('jodi/{slug_name}', [HomeController::class, 'jodi'])->name('jodi');


Auth::routes();

Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('optimize');
   echo "All cache clear successfully";
});

Route::controller(DashboardController::class)
    ->prefix('admin')
    ->group(function () {
        Route::get('dashboard', 'index')->name('dashboard');

        Route::get('user', 'renderUserList')->name('user.list');

        Route::post('add-user', 'addUserList')->name('api.add.user');
        Route::get('user-list', 'getUserList')->name('api.user.list');
        Route::post('update-user', 'updateUserList')->name('api.update.user');


        Route::get('allocation', 'renderUserAllocation')->name('user.allocation');

        Route::post('add-user-allocation', 'addUserAllocationList')->name('api.add.user.allocation');
        Route::get('allocation-user-list', 'getUserAllocationList')->name('api.user.list.allocation');
        Route::post('update-user-allocation', 'updateUserAllocationList')->name('api.update.user.allocation');

        Route::get('market', 'remderJodiList')->name('market.list');

        Route::get('market-serial', 'remderMarketSerial')->name('market.serial');
        Route::get('market-result', 'remderMarketResult')->name('market.result');
        
        Route::get('market-list', 'getJodiList')->name('api.jodi.list');
        Route::post('add-market', 'addJodiList')->name('api.jodi.add');
        Route::post('update-market', 'updateJodiList')->name('api.jodi.update');

        Route::post('add-market-serial', 'addMarketSerial')->name('add.market.serial');
        Route::get('market-serial-list', 'getMarketSerial')->name('market.serial.list');

        Route::post('add-market-result', 'addMarketResult')->name('api.add.market.result');
        Route::get('market-result-list', 'getMarketResult')->name('api.market.result.list');
        Route::post('market-result-update', 'updateMarketResult')->name('api.market.result.update');

    });
