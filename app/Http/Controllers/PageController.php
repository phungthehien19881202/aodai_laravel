<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;

class PageController extends Controller
{

    public function getIndex(){
    	 $slide = Slide::all();
    	 $new_product = Product::where('new',1)->paginate(3);
       //$sanpham_khuyenmai = Product::where('promotion_price','<>',0)->get();
       $aodaicuoi = Product::where('id_type',3)->get(); // Tra ve 1 mang cac dong trong db thoa man dk whre
  
    	 // cách 1 return view('page.trangchu',['slide'=>$slide]);
       return view('page.trangchu',compact('slide','new_product','aodaicuoi'));
    }

   public function getLoaiSp($product_type_name){
     
     // lấy dòng trong bảng loại sản phẩm mà có tên là  product_type_name
     $loai_san_pham = ProductType::where('url_name',$product_type_name)->get();
    if (count($loai_san_pham)==0){
       $id=0;
       $title ='';

     }else {
         $id =$loai_san_pham[0]['id'];
         $title = $loai_san_pham[0]['name'];
     }
      // Lấy id từ dòng trên

     // lấy tất cả các sản phẩm theo id (1,2,3) trong bảng product
     
    $sp_theoloai = Product::where('id_type',$id)->get();
    
    return view('page.loaisanpham',compact('sp_theoloai','title'));
  
   }


   public function getChiTietSp(Request $reg){

    $sanpham = Product::where('id',$reg->id)->first();
     $sanphamlienquan = Product::where('id_type',$sanpham->id_type)->where('id','!=',$reg->id)->get();

  //  
    
   		return view('page.chitiet_sanpham',compact('sanpham','sanphamlienquan'));
   }
   public function getLienHe(){
   		return view('page.lienhe');
   }
   public function getTinTuc(){
   		return view('page.tintuc');
   }
   public function getTinChiTiet(){
   		return view('page.tinchitiet');
   }
   public function getGioHang(){
    return view('page.giohang');
   }
}
