<?php

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

Route::get('/', 'App\Http\Controllers\site\IndexController@index')->name('home.index');
Route::get('/course-gallery/{name}', 'App\Http\Controllers\site\IndexController@showImages')->name('details');
Route::get('/courses','App\Http\Controllers\site\CourseController@index')->name('courses');
Route::get('/contact-us', 'App\Http\Controllers\SendMailController@index')->name('contact-us');
Route::post('/send-email', 'App\Http\Controllers\SendMailController@send')->name('send.mail');
Route::post('/send/email', 'App\Http\Controllers\SendMailHomeController@send')->name('send.mail.from.home');

Route::get('/service-one', function () {
    return view('services.service1');
})->name('service.one');

Route::get('/service-two', function () {
    return view('services.service2');
})->name('service.two');

Route::get('/service-three', function () {
    return view('services.service3');
})->name('service.three');

Route::get('/service-four', function () {
    return view('services.service4');
})->name('service.four');

Route::get('/service-five', function () {
    return view('services.service5');
})->name('service.five');

Route::get('/service-six', function () {
    return view('services.service6');
})->name('service.six');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// for admin
Route::group(['middleware' => 'auth'], function () {
    // User needs to be authenticated to enter here.
    Route::get('/dashboard','App\Http\Controllers\admin\IndexController@index')->name('dashboard');
    Route::get('/new-course', 'App\Http\Controllers\admin\CourseController@index')->name('show.add.course.page');
    Route::post('/store-course', 'App\Http\Controllers\admin\CourseController@store')->name('store.course');
    Route::get('/course-images/{id}','App\Http\Controllers\admin\ImagesController@index')->name('show.images');
    Route::post('/store-images/{id}','App\Http\Controllers\admin\ImagesController@store')->name('store.images');
});
