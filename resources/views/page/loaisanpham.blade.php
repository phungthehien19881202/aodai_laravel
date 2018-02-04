@extends('master') 
  @section('content')
    <div class="col-sm-9 padding-right">

                        <div class="features_items"><!--features_items-->
                          
                            <h2 class="title text-center">{{$title}}
                            </h2>
                            @if(count($sp_theoloai)==0)
                            {{'Khong tim thay yeu cau cua ban'}}
                            @else
                           @foreach($sp_theoloai as $sp)
                           
                            <div class="col-sm-4">
                                @if($sp->promotion_price!=0)
                                <div class="ribbon-wrapper"><div class="ribbon sale"><img src="source/images/home/sale.png" alt="" /></div></div>
                                @endif
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                            
                                        <div class="productinfo text-center">
                                            <img src="source/images/product/{{$sp->image}}" height="400px" alt="" />
                                            <h2>{{number_format($sp->unit_price)}}</h2>
                                            <p><a href="{{route('chitietsanpham',$sp->id)}}">Xem chi tiết</a></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                            @endif
                            <ul class="pagination">
                                <li class="active"><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">&raquo;</a></li>
                            </ul>
                        </div><!--features_items-->
    </div>
  @endsection