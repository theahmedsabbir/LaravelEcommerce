
<div class="site-header__nav-panel">
	<div class="nav-panel">
		<div class="nav-panel__container container">
			<div class="nav-panel__row">
				<div class="nav-panel__departments">
					<!-- .departments -->
					@include('frontend.include.desktop-sidebar')
					<!-- .departments / end -->
				</div>
				<!-- .nav-links -->
				<div class="nav-panel__nav-links nav-links">
					<ul class="nav-links__list">
						<li class="nav-links__item">
							<a href="{{ route('frontend.index') }}"><span>Home</span></a>
						</li>


						<li class="nav-links__item nav-links__item--with-submenu">
						    <a href="shop-grid-3-columns-sidebar.html">
						        <span>
						            Shop <svg class="nav-links__arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg>
						        </span>
						    </a>
						    <div class="nav-links__menu">
						        <!-- .menu -->
						        <ul class="menu menu--layout--classic">
						            <li><a href="#">Products</a></li>
						            <li><a href="#">Brands</a></li>
						            <li><a href="#">Categories</a></li>
						            <li><a href="cart.html">Cart</a></li>
						            <li><a href="checkout.html">Checkout</a></li>
						            <li><a href="wishlist.html">Wishlist</a></li>
						            <li><a href="compare.html">Compare</a></li>
						            <li><a href="track-order.html">Track Order</a></li>
						        </ul>
						        <!-- .menu / end -->
						    </div>
						</li>

						<li class="nav-links__item">
							<a href="contact-us.html"><span>My Account</span></a>
						</li>

						<li class="nav-links__item">
							<a href="contact-us.html"><span>About</span></a>
						</li>

						<li class="nav-links__item">
							<a href="contact-us.html"><span>Contact Us</span></a>
						</li>

						<li class="nav-links__item">
							<a href="contact-us.html"><span>FAQ</span></a>
						</li>
					</ul>
				</div>
				<!-- .nav-links / end -->
				<div class="nav-panel__indicators">
					<div class="indicator">
						<a href="wishlist.html" class="indicator__button">
							<span class="indicator__area">
								<svg width="20px" height="20px"><use xlink:href="images/sprite.svg#heart-20"></use></svg> <span class="indicator__value">0</span>
							</span>
						</a>
					</div>
					<div class="indicator indicator--trigger--click">
						<a href="cart.html" class="indicator__button">
							<span class="indicator__area">
								<svg width="20px" height="20px"><use xlink:href="images/sprite.svg#cart-20"></use></svg> <span class="indicator__value">3</span>
							</span>
						</a>
						<div class="indicator__dropdown">
							<!-- .dropcart -->
							<div class="dropcart">
								<div class="dropcart__products-list">
									<div class="dropcart__product">
										<div class="dropcart__product-image">
											<a href="product.html"><img src="images/products/product-1.jpg" alt="" /></a>
										</div>
										<div class="dropcart__product-info">
											<div class="dropcart__product-name"><a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a></div>
											<ul class="dropcart__product-options">
												<li>Color: Yellow</li>
												<li>Material: Aluminium</li>
											</ul>
											<div class="dropcart__product-meta"><span class="dropcart__product-quantity">2</span> x <span class="dropcart__product-price">$699.00</span></div>
										</div>
										<button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
											<svg width="10px" height="10px"><use xlink:href="images/sprite.svg#cross-10"></use></svg>
										</button>
									</div>
									<div class="dropcart__product">
										<div class="dropcart__product-image">
											<a href="product.html"><img src="images/products/product-2.jpg" alt="" /></a>
										</div>
										<div class="dropcart__product-info">
											<div class="dropcart__product-name"><a href="product.html">Undefined Tool IRadix DPS3000SY 2700 watts</a></div>
											<div class="dropcart__product-meta"><span class="dropcart__product-quantity">1</span> x <span class="dropcart__product-price">$849.00</span></div>
										</div>
										<button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
											<svg width="10px" height="10px"><use xlink:href="images/sprite.svg#cross-10"></use></svg>
										</button>
									</div>
									<div class="dropcart__product">
										<div class="dropcart__product-image">
											<a href="product.html"><img src="images/products/product-5.jpg" alt="" /></a>
										</div>
										<div class="dropcart__product-info">
											<div class="dropcart__product-name"><a href="product.html">Brandix Router Power Tool 2017ERXPK</a></div>
											<ul class="dropcart__product-options">
												<li>Color: True Red</li>
											</ul>
											<div class="dropcart__product-meta"><span class="dropcart__product-quantity">3</span> x <span class="dropcart__product-price">$1,210.00</span></div>
										</div>
										<button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
											<svg width="10px" height="10px"><use xlink:href="images/sprite.svg#cross-10"></use></svg>
										</button>
									</div>
								</div>
								<div class="dropcart__totals">
									<table>
										<tr>
											<th>Subtotal</th>
											<td>$5,877.00</td>
										</tr>
										<tr>
											<th>Shipping</th>
											<td>$25.00</td>
										</tr>
										<tr>
											<th>Tax</th>
											<td>$0.00</td>
										</tr>
										<tr>
											<th>Total</th>
											<td>$5,902.00</td>
										</tr>
									</table>
								</div>
								<div class="dropcart__buttons"><a class="btn btn-secondary" href="cart.html">View Cart</a> <a class="btn btn-primary" href="checkout.html">Checkout</a></div>
							</div>
							<!-- .dropcart / end -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>