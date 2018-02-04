<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Product;
use App\ProductType;


$sp_theoloai = Product::where('id_type',$id)->get();

print_r($sp_theoloai);

?>