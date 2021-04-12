@extends("front.master")
@section("content")
<!-- page-banner-section 
			================================================== -->
		<section class="page-banner-section">
			<div class="container">
				<h1>Checkout</h1>
				<ul class="page-depth">
					<li><a href="index.html">PN-Infosys</a></li>
					<li><a href="checkout.html">Checkout</a></li>
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
							<h2>Billing details</h2>
							<form class="billing-details">
								<div class="row">
									<div class="col-lg-6">
										<label for="first-name">Name</label>
										<input type="text" name="name">
									</div>
								</div>
								<label for="country" >Country*</label>
								<select id="country" name="country">
									<option>Country...</option>
									<option>USA</option>
									<option>Canada</option>
									<option>Brazil</option>
									<option>Germany</option>
									<option>England</option>
									<option>France</option>
									<option>India</option>
									<option>Italy</option>
									<option>Australia</option>
								</select>
								<label for="street-name">Street address *</label>
								<input type="text" id="street-name" name="address" placeholder="House number and street name" />
								<label for="city-name">Town / City*</label>
								<input type="text" id="city-name"  name="city" />
								<label for="state-name">State / Country*</label>
								<input type="text" id="state-name" name="state" />
								<label for="postcode-name">Postcode / Zip*</label>
								<input type="text" id="postcode-name" name="pincode" />
								<label for="phone-name">Phone*</label>
								<input type="text" id="phone-name" name="phone"/>
								<label for="email-address">Email Address*</label>
								<input type="text" id="email-address" / name="user_email">
								<h2>Additional information</h2>
								<label for="notes">Order notes (optional)</label>
								<textarea id="notes" placeholder="Notes about your order, e.g. special notes for delivery" name="order_note"></textarea>
							</form>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="sidebar">
							<div class="widget cart-widget">
								<h2>Your order</h2>
								<table>
									<tbody>
										<?php $total_amount=0; ?>
										@foreach($cart as $cs)
										<tr>
											<td>Product</td>
											<td>Total</td>
										</tr>
										<tr>
											<td class="name-pro">{{$cs->course_name}}</td>
											<td>{{$cs->course_price}}</td>
										</tr>
										<tr class="order-total">
											<th>Subtotal</th>
											<td>{{$total}}</td>
										</tr>
										
										<tr class="order-total">
											<th>Total</th>
											<td class="total-price"><?php echo $total_amount?></td>
										</tr>
										<?php $total_amount=$total_amount+($cs->course_price*$cs->course_quantity);?>
										@endforeach
									</tbody>
								</table>
								<a href="#" class="checkout-button">Proceed to Paypal</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End cart section -->
@endsection