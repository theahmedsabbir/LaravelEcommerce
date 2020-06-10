
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
						<li class="nav-links__item nav-links__item--with-submenu">
							<a href="index.html">
								<span>
									Home <svg class="nav-links__arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg>
								</span>
							</a>
							<div class="nav-links__menu">
								<!-- .menu -->
								<ul class="menu menu--layout--classic">
									<li><a href="index.html">Home 1</a></li>
									<li><a href="index-2.html">Home 2</a></li>
								</ul>
								<!-- .menu / end -->
							</div>
						</li>
						<li class="nav-links__item nav-links__item--with-submenu">
							<a href="#">
								<span>
									Megamenu <svg class="nav-links__arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg>
								</span>
							</a>
							<div class="nav-links__megamenu nav-links__megamenu--size--nl">
								<!-- .megamenu -->
								<div class="megamenu">
									<div class="row">
										<div class="col-6">
											<ul class="megamenu__links megamenu__links--level--0">
												<li class="megamenu__item megamenu__item--with-submenu">
													<a href="#">Power Tools</a>
													<ul class="megamenu__links megamenu__links--level--1">
														<li class="megamenu__item"><a href="#">Engravers</a></li>
														<li class="megamenu__item"><a href="#">Wrenches</a></li>
														<li class="megamenu__item"><a href="#">Wall Chaser</a></li>
														<li class="megamenu__item"><a href="#">Pneumatic Tools</a></li>
													</ul>
												</li>
												<li class="megamenu__item megamenu__item--with-submenu">
													<a href="#">Machine Tools</a>
													<ul class="megamenu__links megamenu__links--level--1">
														<li class="megamenu__item"><a href="#">Thread Cutting</a></li>
														<li class="megamenu__item"><a href="#">Chip Blowers</a></li>
														<li class="megamenu__item"><a href="#">Sharpening Machines</a></li>
														<li class="megamenu__item"><a href="#">Pipe Cutters</a></li>
														<li class="megamenu__item"><a href="#">Slotting machines</a></li>
														<li class="megamenu__item"><a href="#">Lathes</a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="col-6">
											<ul class="megamenu__links megamenu__links--level--0">
												<li class="megamenu__item megamenu__item--with-submenu">
													<a href="#">Hand Tools</a>
													<ul class="megamenu__links megamenu__links--level--1">
														<li class="megamenu__item"><a href="#">Screwdrivers</a></li>
														<li class="megamenu__item"><a href="#">Handsaws</a></li>
														<li class="megamenu__item"><a href="#">Knives</a></li>
														<li class="megamenu__item"><a href="#">Axes</a></li>
														<li class="megamenu__item"><a href="#">Multitools</a></li>
														<li class="megamenu__item"><a href="#">Paint Tools</a></li>
													</ul>
												</li>
												<li class="megamenu__item megamenu__item--with-submenu">
													<a href="#">Garden Equipment</a>
													<ul class="megamenu__links megamenu__links--level--1">
														<li class="megamenu__item"><a href="#">Motor Pumps</a></li>
														<li class="megamenu__item"><a href="#">Chainsaws</a></li>
														<li class="megamenu__item"><a href="#">Electric Saws</a></li>
														<li class="megamenu__item"><a href="#">Brush Cutters</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- .megamenu / end -->
							</div>
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
									<li>
										<a href="shop-grid-3-columns-sidebar.html">
											Shop Grid <svg class="menu__arrow" width="6px" height="9px"><use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use></svg>
										</a>
										<div class="menu__submenu">
											<!-- .menu -->
											<ul class="menu menu--layout--classic">
												<li><a href="shop-grid-3-columns-sidebar.html">3 Columns Sidebar</a></li>
												<li><a href="shop-grid-4-columns-full.html">4 Columns Full</a></li>
												<li><a href="shop-grid-5-columns-full.html">5 Columns Full</a></li>
											</ul>
											<!-- .menu / end -->
										</div>
									</li>
									<li><a href="shop-list.html">Shop List</a></li>
									<li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
									<li>
										<a href="product.html">
											Product <svg class="menu__arrow" width="6px" height="9px"><use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use></svg>
										</a>
										<div class="menu__submenu">
											<!-- .menu -->
											<ul class="menu menu--layout--classic">
												<li><a href="product.html">Product</a></li>
												<li><a href="product-alt.html">Product Alt</a></li>
												<li><a href="product-sidebar.html">Product Sidebar</a></li>
											</ul>
											<!-- .menu / end -->
										</div>
									</li>
									<li><a href="cart.html">Cart</a></li>
									<li><a href="checkout.html">Checkout</a></li>
									<li><a href="wishlist.html">Wishlist</a></li>
									<li><a href="compare.html">Compare</a></li>
									<li><a href="account.html">My Account</a></li>
									<li><a href="track-order.html">Track Order</a></li>
								</ul>
								<!-- .menu / end -->
							</div>
						</li>
						<li class="nav-links__item nav-links__item--with-submenu">
							<a href="blog-classic.html">
								<span>
									Blog <svg class="nav-links__arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg>
								</span>
							</a>
							<div class="nav-links__menu">
								<!-- .menu -->
								<ul class="menu menu--layout--classic">
									<li><a href="blog-classic.html">Blog Classic</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
									<li><a href="post.html">Post Page</a></li>
									<li><a href="post-without-sidebar.html">Post Without Sidebar</a></li>
								</ul>
								<!-- .menu / end -->
							</div>
						</li>
						<li class="nav-links__item nav-links__item--with-submenu">
							<a href="#">
								<span>
									Pages <svg class="nav-links__arrow" width="9px" height="6px"><use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use></svg>
								</span>
							</a>
							<div class="nav-links__menu">
								<!-- .menu -->
								<ul class="menu menu--layout--classic">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="contact-us-alt.html">Contact Us Alt</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="terms-and-conditions.html">Terms And Conditions</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="components.html">Components</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
								<!-- .menu / end -->
							</div>
						</li>
						<li class="nav-links__item">
							<a href="contact-us.html"><span>Contact Us</span></a>
						</li>
						<li class="nav-links__item">
							<a href="https://themeforest.net/user/kos9/portfolio"><span>Buy Theme</span></a>
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