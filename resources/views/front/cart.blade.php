@extends("front.master")
@section("content")
@if(session('message'))
           <p class="alert aria-danger" style="background-color: red;color: white">
              {{session('message')}}
           </p>
@endif
		<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Cart</h1>
				<ul class="page-depth">
					<li><a href="index.html">PNINFOSYS</a></li>
					<li><a href="cart.html">Cart</a></li>
				</ul>
</div>
		</section>
		<!-- End page-banner-section -->

		<!-- cart-section 

			================================================== -->
			
		<section class="cart-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="cart-box">
							<table class="shop_table table-responsive">
								<thead>
									<tr>
										
										<th class="product-thumbnail">Image</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
										<th class="product-remove">Remove</th>
									</tr>
								</thead>
								<tbody>
									<?php $total_amount=0; ?>

									@foreach($cart as $m)
									<tr>
									
										<td class="product-thumbnail">
											<a href=""><img src="{{ url('/upload/'.$m->course_image) }}" alt=""></a>
										</td>
										<td class="product-name">
											<a href="#">{{$m->course_name}}</a>
										</td>
										<td class="product-price">
											{{$m->course_price}}
										</td>
										<td class="product-quantity">
											<a href="{{url('cart/quantity_update/'.$m->id.'/1')}}">+</a>
											<input type="text" name="course_quantity" value="{{$m->course_quantity}}">
											<a href="{{url('cart/quantity_update/'.$m->id.'/-1')}}">-</a>
										</td>
										<td class="product-subtotal">{{$m->course_price*$m->course_quantity}}</td>

										<td class="product-remove">
											<a href="{{url('front/cart/delete/'.$m->id)}}" name="{{$m->course_id}}" class="remove">{{$m->course_id}}</a>
										</td>
										<?php $total_amount=$total_amount+($m->course_price*$m->course_quantity);?>
											@endforeach
									</tr>
										<tr class="coupon-line">
										@foreach($data as $a) 
										<td colspan="6" class="actions">
											<input type="text" name="{{$a->coupan_code}}" placeholder="Coupon code">
											<button type="submit">Update cart</button>
										</td>
										@endforeach
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="sidebar">
							<div class="widget cart-widget">
								<h2>Cart Totals</h2>
								<table>
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td>{{$total}}</td>
										</tr>
										<tr class="order-total">
											<th>Total</th>
											<td><?php echo $total_amount?></td>
										</tr>
									</tbody>
								</table>
								
									@if(Auth::check())

								<a href="{{url('front/checkout')}}" class="checkout-button">Proceed to checkout</a>

									@else

								<a href="{{url('front/login')}}" class="checkout-button">Proceed to checkout</a>

								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End cart section -->

	
	@endsection