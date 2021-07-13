<?php


use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('get_logged_user',[LoginController::class,'get_logged_user']
)->name('get_logged_user'
);
Route::post('login_facebook',[LoginController::class,'store_facebook'])->name('login_facebook');
Route::post('login_gmail',[LoginController::class,'store_gmail'])->name('login_gmail');
Route::get('logout',[LoginController::class,'logout'])->name('logout')->middleware('auth:api');
Route::post('addComment',[CommentController::class,'addComment'])->name('addComment')->middleware('auth:api');
Route::get('getComments',[CommentController::class,'getComments'])->name('getComments')->middleware('auth:api');

