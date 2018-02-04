@extends('master') 
    @section('content')	
	<div class="col-sm-9 padding-right">
						<div class="product-details"><!--product-details-->
							<div class="col-sm-5">
								<div class="view-product">
									<img src="source/images/product/{{$sanpham->image}}" alt="" />
									
								</div>
								

							</div>
							<div class="col-sm-7">
								<div class="product-information"><!--/product-information-->
									<img src="source/images/product-details/new.jpg" class="newarrival" alt="" />
									<h2>{{$sanpham->name}}</h2>
									<p>Mã sản phẩm: {{$sanpham->id}}</p>
									<img src="source/images/product-details/rating.png" alt="" />
									<span>
										<span>{{$sanpham->unit_price}}</span>
										<label>Số Lượng:</label>
										<input type="text" value="1" />
										<button type="button" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Cho Vào Giỏ Hàng
										</button>
									</span>
									<p><b>Nếu bạn hài lòng xin hãy chia sẻ cho mọi người về chúng tôi</b></p>
									<a href=""><img src="source/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
								</div><!--/product-information-->
							</div>
						</div><!--/product-details-->
						
						<div class="category-tab shop-details-tab"><!--category-tab-->
							<div class="col-sm-12">
								<ul class="nav nav-tabs">
									<li><a href="#details" data-toggle="tab">Mô tả sản phẩm</a></li>
									<li class="active"><a href="#reviews" data-toggle="tab">Đánh giá của bạn về sản phẩm</a></li>
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane fade" id="details" >
									<p>
										{{$sanpham->description}}
									</p>
								</div>
								
								<div class="tab-pane fade" id="companyprofile" >
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="source/images/product-details/chitietsp2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="source/images/product-details/chitietsp2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="source/images/product-details/chitietsp2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="source/images/product-details/chitietsp2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="tab-pane fade" id="tag" >
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="source/images/product-details/chitietsp2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="source/images/product-details/chitietsp2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="source/images/product-details/chitietsp2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="source/images/product-details/chitietsp2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="tab-pane fade active in" id="reviews" >
									<div class="col-sm-12">
										
										<p>Phương châm làm việc của chúng tôi là đặt niềm vui của khách hàng làm tiêu chí hàng đầu. Để nâng cao chất lượng phục vụ quí khách vui lòng để lại nhận xét của mình khi trải nghiệm về sản phẩm.</p>
										<p><b>Viết Nhận xét của mình</b></p>
										
										<form action="#">
											<span>
												<input type="text" placeholder="Tên Của bạn"/>
												<input type="email" placeholder="Địa chỉ email hợp lệ"/>
											</span>
											<textarea name="" ></textarea>
											<b>Xếp Hạng: </b> <img src="source/images/product-details/rating.png" alt="" />
											<button type="button" class="btn btn-default pull-right">
												Gửi
											</button>
										</form>
									</div>
								</div>
								
							</div>
						</div><!--/category-tab-->
						
						<div class="recommended_items"><!--recommended_items-->
							<h2 class="title text-center">Các Sản Phẩm Liên Quan</h2>
							
							<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">

									@for($i=0;$i<count($sanphamlienquan);$i=$i+3)
									<div class="item {{$i==0?'active':''}}">	
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img height="400px" src="source/images/product/{{$sanphamlienquan[$i]->image}}" alt="" />
														<h2>{{$sanphamlienquan[$i]->unit_price}}</h2>
														<p><a href="">Xem chi Tiết</a></p>
														<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho Vào Giỏ Hàng</button>
													</div>
												</div>
											</div>
										</div>
										@if($i+1<count($sanphamlienquan))
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img height="400px" src="source/images/product/{{$sanphamlienquan[$i+1]->image}}" alt="" />
														<h2>{{$sanphamlienquan[$i+1]->unit_price}}</h2>
														<p><a href="">Xem chi Tiết</a></p>
														<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho Vào Giỏ Hàng</button>
													</div>
												</div>
											</div>
										</div>
										@endif
										@if($i+2<count($sanphamlienquan))
										<div class="col-sm-4">
											<div class="product-image-wrapper">
												<div class="single-products">
													<div class="productinfo text-center">
														<img height="400px" src="source/images/product/{{$sanphamlienquan[$i+2]->image}}" alt="" />
														<h2>{{$sanphamlienquan[$i+2]->unit_price}}</h2>
														<p><a href="">Xem chi Tiết</a></p>
														<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Cho Vào Giỏ Hàng</button>
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