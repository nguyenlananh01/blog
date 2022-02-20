<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\NewController;
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
})->name('laravel');
//
//Route::get('khoahoc',function () {
//    return 'Hoc Laravel';
//});
//Route::get('/',function (){
//    echo '<h1>Chao mung den voi laravel</h1>';
//});
//
//Route::get('Toihoccode',function (){
//    return 'Xin cho cac ban';
//});

//truyền tham số trên route
//Route::get('HoTen/{Ten}',function ($Ten){
//    echo 'My name is ' .$Ten;
//});
//Route::get('Laravel/{ngay}',function ($ngay){
//    echo 'Khoa hoc ngay:'.$ngay;
//})->where(['ngay'=>'[a-zA-Z]+']);
//
//Route::get('/Hungoccho', function () {
//    return view('home');
//});

//goi tu route sang controller
Route::get('news', [NewController::class,'index'])->name('news');
//Route::resource('Info', InfoController::class); //Route resource
//Route::resource('Info',InfoController::class)->only(['index']);// chi muon dung ham index
Route::resource('Info',InfoController::class)->except(['index']);//dung tat ca cac ham tru ham index
//Route resource

//Route Group
Route::group(['prefix'=>'admin','middleware'=> 'check.admin'],function (){
    Route::get('/',function (){
        return'Day la trang admin';
    });

    Route::get('info', function (){
        return 'Day la trang admin info';
    });
    Route::get('create',function (){
        return  'Day la trang admin create';
    });
});
//Truyen tham so tu route sang controller
Route::get('news/name/{name}', [NewController::class,'getName']);

Route::get('tinh/{s1}/{s2}', function ($s1, $s2){
    $sum = $s1 + $s2;
    if($sum > 100){
        return redirect()->route('news'); //chuyen huong trang thong qua dinh danh
    }
    return $sum;

});

Route::get('home', function (){
    return view('home');
});
Route::get ('home/contact',[NewController::class,'getContact']);
