<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ApiResource\TenController;
use App\Http\Controllers\HandleController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/welcome', [WelcomeController::class, 'index']);
Route::get('/welcomePost', [WelcomeController::class, 'store']);



Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        // Uses Auth Middleware
    });
    Route::resource('/apiResource', TenController::class);

    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });
});

// Route::get('get-form', [HandleController::class, 'getForm']);
// Route::post('handle-form', [HandleController::class, 'handleRequest']);
Route::post('import', [HandleController::class, 'handleRequest']);
// Route::get('auth', [HandleController::class, 'auth']);

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    Route::post('/change-pass', [AuthController::class, 'changePassWord']);
    Route::get('auth', [HandleController::class, 'auth']);
});
