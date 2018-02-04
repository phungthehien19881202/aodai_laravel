
@extends('master')
@section('content')
<div id="contact-page" class="col-sm-9">

			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang chủ</a></li>
				  <li class="active">Giỏ Hàng Của Bạn</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản Phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Thành Tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
				
						@foreach($arr as $ar)
						 
						<tr>
							<td class="cart_product">
								<a href=""><img src="source/images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$ar['name']}}</a></h4>
								<p>Mã Số: {{$ar['id']}}</p>
							</td>
							<td class="cart_price">
								<p>{{$ar['price']}}đ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$ar['total']}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{route('xoagiohang',array('id'=>$ar['id']))}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<hr>	

							@endforeach

						
					</tbody>

				</table>
				<b>Tổng tiền là :  {{$total}} </b>
			</div>

</div>
@endsection