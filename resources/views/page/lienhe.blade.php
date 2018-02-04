@extends('master')
@section('content')

	<div id="contact-page" class="col-sm-9">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Bản Đồ Đến Shop</h2>    			    				    				
					<div id="gmap" class="contact-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1864.191524785894!2d106.6752431579542!3d20.85660539652297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d20.857305099999998!2d106.6761193!4m5!1s0x314a7a8a98f06819%3A0xc1354a86741c8a8c!2zU2hvcCDDgW8gRMOgaSBIb8OgaSBIaeG7g24gU-G7kSAxNSBIb8OgbmcgTmfDom4gLFF14bqtbiBI4buTbmcgQsOgbmc!3m2!1d20.856014!2d106.676807!5e0!3m2!1svi!2s!4v1517300814173" width="100%" height="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Tên Của Bạn">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="text" name="phone" class="form-control" required="required" placeholder="Số điện thoại của bạn">
				            </div>
				      
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Ý kiến của bạn:"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gửi">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    			
	    				<address>
	    					<p><b>Áo Dài Hoài Hiển</b></p>
							<p>Số 15 Hoàng Ngân - Hồng Bàng - Hải Phòng</p>
							
							<p>Số điện thoại: 0904378888</p>
							
							<p>Email: aodaihoaihien@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
	</div><!--/#contact-page-->
	
@endsection