<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


// Route::resource('users', ProductController::class);


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

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('dashboard', ['as' => 'dashboard', function () {
//         // Route named "admin::dashboard"
//     }]);
// });

Route::get('/', function () {
    return 'Hello home';
});

// Route::post('/login', [LoginController::class, 'login'])->name('users.login');

