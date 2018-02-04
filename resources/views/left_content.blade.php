<div class="col-sm-3">
          <div class="left-sidebar">
           <h2>Sản Phẩm Được Yêu Thích</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
              @foreach($loai_sp2 as $loai2)

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"><a href="{{route('loaisanpham',$loai2->url_name)}}">{{$loai2->name}}</a></h4>
                </div>
              </div>
             @endforeach
            </div><!--/category-products-->
          
            
            <div class="price-range"><!--price-range-->
              <h2>Tìm Theo giá tiền</h2>
              <div class="well text-center">
                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="6000" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                 <b class="pull-left">VNĐ 0</b> <b class="pull-right">VNĐ 6000</b>
              </div>
            </div><!--/price-range-->
            
            <div class="shipping text-center"><!--shipping-->
              <iframe height="360" src="https://www.youtube.com/embed/m475eMCASDU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div><!--/shipping-->
          
          </div>
        </div>