@extends('master')
@section('slide')
 <section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
           

            <ol class="carousel-indicators">
              <?php $i=0;?>
               @foreach($slide as $sl)
                <li data-target="#slider-carousel" data-slide-to="{{$i}}" 
                  @if($i==0)
                      class="active"
                  @endif
                ></li>
                
                <?php $i++;?>
             @endforeach
           </ol>   

            
            <div class="carousel-inner">
              <?php $i=0;?>
            @foreach($slide as $sl)
              <div 
              @if($i==0)
              class="item active"
              @else
              class="item"
              @endif
              >
              <?php $i++;?>
                <div class="col-sm-6">
                  <h1>Bộ sưu tập Áo Dài Cách Tân</h1>
                  <h2>Top 100 Áo Dài Cách Tân đẹp nhất 2018</h2>
                  <p>Áo Dài Cách Tân là sự kết hợp hoàn hảo giữa xu hướng thời trang truyền thống và hiện đại. Vừa mang nét đẹp dịu dàng của phụ nữ 
                  </p>
                  <button type="button" class="btn btn-default get">Xem Ngay!!!</button>
                </div>
                <div class="col-sm-6">
                 
                  <img src="source/images/slide/{{$sl->image}}" class="girl img-responsive" alt="" />
                 
                </div>
              </div>
           @endforeach         
            </div>
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>         
        </div>
      </div>
    </div>
  </section><!--/slider-->
  
@endsection
@section('content')
    <div class="col-sm-9 padding-right">

          <div class="features_items"><!--features_items-->
            <h2 class="title text-center">Mẫu Áo Dài Cách Tân Đẹp</h2>
           @foreach($new_product as $new)
            <div class="col-sm-4">
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="source/images/product/{{$new->image}}" alt="" />
                      <h2>{{number_format($new->unit_price)}}đ</h2>
                      <h3 style="font-size:19px;">{{$new->name}}</h3>
                      <p><a href="{{route('chitietsanpham',$new->id)}}">Xem Chi Tiết</a></p>
                      <a href="{{route('giohang')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                    </div>
                   
                </div>
                
              </div>
            </div>
            @endforeach
            <div class="row">{{$new_product->links()}}</div>
          </div><!--features_items-->
          
           <div class="features_items"><!--features_items2-->
            <h2 class="title text-center">Mẫu áo giảm giá</h2>
           @foreach($new_product as $new)
            <div class="col-sm-4">
               @if($new->promotion_price!=0)
                <div class="ribbon-wrapper"><div class="ribbon sale"><img src="source/images/home/sale.png" alt="" /></div></div>
                @endif
              <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                      <img src="source/images/product/{{$new->image}}" alt="" />
                      @if($new->promotion_price==0)
                        <p>{{$new->unit_price}}đ</p>
                       @else
                       <p class="giacu"><del>{{number_format($new->unit_price)}}đ</del></p>
                       <p class="giamoi">{{number_format($new->promotion_price)}} đ</p>      
                      @endif
                      <h3 style="font-size:19px;">{{$new->name}}</h3>
                      <p><a href="">Xem Chi Tiết</a></p>
                      <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                    </div>
                   
                </div>
                
              </div>
            </div>
            @endforeach
          </div><!--features_items2-->

          
          <div class="recommended_items"><!--recommended_items-->
            <h2 class="title text-center">Áo Dài Cưới</h2>
            
            <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner">
              
                @for($i = 0; $i < count($aodaicuoi); $i = $i+3)
                <div class="item {{$i == 0 ? 'active' : ''}}"> 
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="source/images/aodaicuoi/{{$aodaicuoi[$i]->image}}" alt="" />
                             <h2>{{$aodaicuoi[$i]->unit_price}}</h2></p>
                             
                          
                          <p><a href="">xem chi tiết</a></p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  
                  @if($i + 1 < count($aodaicuoi))
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="source/images/aodaicuoi/{{$aodaicuoi[$i + 1]->image}}" alt="" />
                          <h2>{{$aodaicuoi[$i + 1]->unit_price}}</h2></p>
                          <p><a href="">xem chi tiết</a></p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  @endif

                  @if($i + 2 < count($aodaicuoi))
                  <div class="col-sm-4">
                    <div class="product-image-wrapper">
                      <div class="single-products">
                        <div class="productinfo text-center">
                          <img src="source/images/aodaicuoi/{{$aodaicuoi[$i + 2]->image}}" alt="" />
                          <h2>{{$aodaicuoi[$i + 2]->unit_price}}</h2></p>
                          <p><a href="">xem chi tiết</a></p>
                          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho vào giỏ hàng</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  @endif

                </div>
                @endfor
                
               

              </div>
               <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>      
            </div>
          </div><!--/recommended_items-->
          
        </div>
@endsection