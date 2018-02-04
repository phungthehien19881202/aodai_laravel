<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
      
      </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
            <div class="logo pull-left">
              <a href="{{route('trang-chu')}}"><img src="source/images/home/logo1.png" alt="" /></a>
            
            </div>
          </div>
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <li><a href="{{route('giohang')}}"><i class="fa fa-shopping-cart"></i>Giỏ Hàng (0 sản phẩm)</a></li>
                <li>
                   <div class="col-sm-3">
                    <div class="search_box pull-right">
                    <input type="text" placeholder="Nhập sản phẩm"/>
                     </div>
                    </div>
                </li>
              </ul>
            </div>
          </div>
  
      </div>
    </div><!--/header-middle-->
  
    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="{{route('trang-chu')}}">Trang Chủ</a></li>
                <li class="dropdown"><a href="#">Sản Phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                      @foreach($loai_sp as $loai)
                                        <li><a href="{{route('loaisanpham',$loai->url_name)}}">{{$loai->name}}</a></li>
                                      @endforeach
                                    </ul>
                                </li> 
                <li><a href="{{route('tintuc')}}">Tin Tức</a>
                <li><a href="{{route('lienhe')}}">Liên Hệ</a></li>
                
              </ul>
            </div>
          </div>
        
        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->