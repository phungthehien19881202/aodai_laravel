<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\ProductType;

class PageController extends Controller
{
    public function getIndex(){
    	// $user = ProductType::all();
    	// print_r( $user);
    	return view('page.trangchu');
    }
}
