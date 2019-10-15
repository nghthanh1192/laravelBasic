<?php

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


// // note ? {ten?} defaul had
// Route::get('xin-chao/{ten?}/{namsinh?}' , function($ten='nguyễn thế phúc',$namsinh = '1992'){ 
//     return 'Chào bạn: ' . $ten.'<br>Có năm sinh là: '.$namsinh; 
// });


// note ? {ten?} defaul had
// Route::get('xin-chao/{ten?}/{namsinh?}' , function($ten = 'nguyễn thế phúc', $namsinh = ){ 
//     return 'Chào bạn: ' . $ten.'<br>Có năm sinh là: '.$namsinh; 
// });

// note ? {ten?} defaul had
Route::get('xin-chao/{ten}/{namSinh}', 'DemoController@getXinChao');

