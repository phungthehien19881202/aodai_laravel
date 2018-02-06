<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
class Theloaicontroller extends Controller
{
    public function getDanhSach(){
    	$Loaisanpham = ProductType::all();
    	return view('admin.loaisanpham.danhsach',['Loaisanpham'=>$Loaisanpham]);
    }

     public function getThem(){
    	return view('admin.loaisanpham.them');
    }
    public function postThem(Request $reg){
    	$this-> validate($reg,
    		[
    			'Ten'=> 'required|min:3|max:100',
                'TenK'=> 'required|min:3|max:100'
    		],
    		[
    			'required'=>'Bạn không được để trống ',
    			'min'=> 'Tên Loại sản Phẩm phải có độ dài từ 3 đến 100 ký tự',
    			'max'=> 'Tên Loại sản Phẩm phải có độ dài từ 3 đến 100 ký tự',
    		]);

    	$loaisp = new ProductType();
    	$loaisp->name = $reg->Ten;
    	$loaisp->url_name = $reg->TenK;
        $loaisp->description = '';
    	$loaisp->save();

    	return redirect('admin/loaisanpham/them')->with('thongbao','Bạn đã Thêm thành công');
    }

     public function getSua($id){
    	$loaisp = ProductType::find($id);
        return view('admin.loaisanpham.sua',['loaisp'=>$loaisp]);

    }

    public function postSua(Request $reg,$id){
        $sualoaisp = ProductType::find($id);
        $this-> validate($reg,
            [
                'Ten'=> 'required|min:3|max:100',
                'TenK'=> 'required|min:3|max:100',
            ],
            [   
                'required'=>'Bạn không được để trống ',
                'min'=> 'Tên Loại sản Phẩm phải có độ dài từ 3 đến 100 ký tự',
                'max'=> 'Tên Loại sản Phẩm phải có độ dài từ 3 đến 100 ký tự',
            ]);
        $sualoaisp->name = $reg->Ten;
        $sualoaisp->url_name = $reg->TenK;
        $sualoaisp->description = '';
        $sualoaisp->save();
      
        return redirect('admin/loaisanpham/sua/' .$id)->with('thongbao','sửa thành công');
    }

    public function postXoa($id){
        $loaisp = ProductType::find($id);
        $loaisp->delete();
        return redirect('admin/loaisanpham/danhsach')->with('thongbao','Đã Xóa thành công');
    }
}
