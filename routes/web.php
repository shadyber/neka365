<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
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
    return view('welcome');
});



Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::get('/search', [App\Http\Controllers\SearchController::class,'search'])->name('search');

Route::get('/terms', function (){
    return view('terms');
});

Route::get('/about', function (){
    return view('about');
});
Route::get('/dashboard', function (){
    return view('dashboard');
});
Route::get('/notifications',[App\Http\Controllers\NotificationsController::class,'index']);
Route::get('/notifications/{id}',[App\Http\Controllers\NotificationsController::class,'show'])->name('notification.read');


Route::resource('/contact',App\Http\Controllers\AddressController::class);

Route::get('/subscribe',function (){
    return view('subscribe');
});


    Route::resource('/category',BlogCategoryController::class);
    Route::resource('/blog',BlogController::class);
    Route::resource('/video',VideoController::class);
    Route::resource('/newsletters',NewsletterController::class);
    Route::resource('/address',AddressController::class);

    Route::resource('/comment',BlogCommentController::class);





Route::group(['middleware' => 'role:admin'], function() {

    Route::resource('/user', UserController::class);
    Route::resource('/permission', PermissionController::class);
    Route::resource('/role',RoleController::class);

    Route::get('/init', function (){

        \Illuminate\Support\Facades\Artisan::call('storage:link');
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
        \Illuminate\Support\Facades\Artisan::call('db:seed');
        echo 'initialized';
    });
   });

