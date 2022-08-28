<?php

use App\Http\Controllers\User\CustomerController;
use App\Http\Middleware\CodeLab;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('customer.home');
    })
    ;

Route::get('one',function(){
    return 'one';
})->middleware('codelab_middleware');
Route::get('two',function(){
    return 'two';
});

});

Route::get('three',function(){
    return 'three';
})->middleware(CodeLab::class);



Route::group(['prefix'=>'customer','middleware'=>'codelab_middleware'],function(){
    Route::get('home',[CustomerController::class,'home']);
    Route::get('about',[CustomerController::class,'about']);
    Route::get('service',[CustomerController::class,'service']);
});

Route::get('customer/register',function(){
    return view('customer.register');
});
Route::get('customer/login',function(){
    return view('customer.login');
});
