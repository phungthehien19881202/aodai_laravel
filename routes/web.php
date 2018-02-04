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

Route::get('index',['as'=>'trang-chu', 'uses'=>'PageController@getIndex']);

Route::get('loai-san-pham/{product_type_name}',['as'=>'loaisanpham','uses'=>'PageController@getLoaiSp']);

Route::get('chi-tiet-san-pham/{id}',['as'=>'chitietsanpham','uses'=>'PageController@getChiTietSp']);
Route::get('lien-he',['as'=>'lienhe','uses'=>'PageController@getLienHe']);
Route::get('tin-tuc',['as'=>'tintuc','uses'=>'PageController@getTinTuc']);

Route::get('tin-chi-tiet',['as'=>'tinchitiet','uses'=>'PageController@getTinChiTiet']);
Route::get('gio-hang',['as'=>'giohang','uses'=>'PageController@getGioHang']);
