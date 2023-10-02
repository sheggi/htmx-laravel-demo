<?php

use App\Http\Controllers\Api\ExampleController;
use App\Http\Controllers\Api\GetTime;
use App\Http\Middleware\HtmxPageWrapper;
use App\Http\Middleware\HtmxPreviewWrapper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' =>[HtmxPageWrapper::class, HtmxPreviewWrapper::class], 'as' => 'api.'], function (){
   Route::get('time', GetTime::class)->name('time');
   Route::get('example', ExampleController::class)->name('example');
   Route::post('example', ExampleController::class);
});
