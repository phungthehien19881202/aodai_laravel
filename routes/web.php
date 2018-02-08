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
Route::get('them-hang',['as'=>'themgiohang','uses'=>'PageController@themHang']);
Route::get('xoa-gio-hang',['as'=>'xoagiohang','uses'=>'PageController@xoahang']);



// route cho admin
 
 
 Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
 Route::post('admin/dangnhap','UserController@postdangnhapAdmin');
// admin/loaisanpham/danhsach
Route::group(['prefix'=>'admin'],function(){
	// LOAI SAN PHAM
	Route::group(['prefix'=>'loaisanpham'],function(){
		Route::get('danhsach','TheloaiController@getDanhSach');


		Route::get('sua/{id}','TheloaiController@getSua');
		Route::post('sua/{id}','TheloaiController@postSua');

		Route::get('them','TheloaiController@getThem');
		Route::post('them','TheloaiController@postThem');

		Route::get('xoa/{id}','TheloaiController@postXoa');

	});

	Route::group(['prefix'=>'sanpham'],function(){
		//SAN PHAM
		Route::get('danhsach','SanPhamController@getDanhSach');


		Route::get('sua/{id}','SanPhamController@getSua');
		Route::post('sua/{id}','SanPhamController@postSua');

		Route::get('them','SanPhamController@getThem');
		Route::post('them','SanPhamController@postThem');

		Route::get('xoa/{id}','SanPhamController@postXoa');
	});

	Route::group(['prefix'=>'tintuc'],function(){
		Route::get('danhsach','TheloaiController@getDanhSach');
		Route::get('sua','TheloaiController@getSua');
		Route::get('them','TheloaiController@getThem');
	});

	Route::group(['prefix'=>'slide'],function(){
		Route::get('danhsach','TheloaiController@getDanhSach');
		Route::get('sua','TheloaiController@getSua');
		Route::get('them','TheloaiController@getThem');
	});

	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','UserController@getDanhSach');


		Route::get('sua/{id}','UserController@getSua');
		Route::post('sua/{id}','UserController@postSua');

		Route::get('them','UserController@getThem');
		Route::post('them','UserController@postThem');

		Route::get('xoa/{id}','UserController@postXoa');
	});

	



});
