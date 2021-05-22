<?php
use Illuminate\Support\Facades\Auth;
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_9/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 15:59:21 GMT -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Porto - Bootstrap eCommerce Template</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Bootstrap eCommerce Template">
	<meta name="author" content="SW-THEMES">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ asset('frontend/assets/images/icons/favicon.ico') }}">

	<script type="text/javascript">
		WebFontConfig = {
			google: {
				families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700,800']
			}
		};
		(function(d) {
			var wf = d.createElement('script'),
				s = d.scripts[0];
			wf.src = '{{ asset('
			frontend / assets / js / webfont.js ') }}';
			wf.async = true;
			s.parentNode.insertBefore(wf, s);
		})(document);
	</script>

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}">
</head>

<body>


	<div class="page-wrapper">
		<div class="top-notice text-white bg-primary">
			<div class="container text-center">
				<h5 class="d-inline-block mb-0">Get Up to <b>40% OFF</b> New-Season Styles </h5>
				<small>* Limited time only.</small>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			</div><!-- End .container -->
		</div><!-- End .top-notice -->
		<header class="header">
			<div class="header-top">
				<div class="container">
					<div class="header-left header-dropdowns">
						<div class="header-dropdown">
							<a href="#" class="pl-0"><img src="{{ asset('frontend/assets/images/flags/en.png') }}" alt="England flag">ENG</a>
							<div class="header-menu">
								<ul>
									<li><a href="#"><img src="{{ asset('frontend/assets/images/flags/en.png') }}" alt="England flag">ENG</a></li>
									<li><a href="#"><img src="{{ asset('frontend/assets/images/flags/fr.png') }}" alt="France flag">FRA</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<div class="header-dropdown ml-4">
							<a href="#">USD</a>
							<div class="header-menu">
								<ul>
									<li><a href="#">EUR</a></li>
									<li><a href="#">USD</a></li>
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->
					</div><!-- End .header-left -->

					<div class="header-right">
						<p class="top-message text-uppercase d-none d-sm-block mr-4">Free returns. Standard shipping orders $99+</p>

						<span class="separator"></span>

						<div class="header-dropdown dropdown-expanded mx-2 px-1">
							<a href="#">Links</a>
							<div class="header-menu">
								<ul>
									<li><a href="about.html">About </a></li>
									<li><a href="#">Our Stores</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="{{route('login_check')}}">LogIn</a></li>
									 
									<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form></li> 
									
									

									
								</ul>
							</div><!-- End .header-menu -->
						</div><!-- End .header-dropown -->

						<span class="separator"></span>

						<div class="social-icons">
							<a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
							<a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
							<a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
						</div><!-- End .social-icons -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-top -->

			<div class="header-middle">
				<div class="container">
					<div class="header-left w-lg-max ml-auto ml-lg-0">
						<div class="header-icon header-search header-search-inline header-search-category">
							<a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
							<form action="#" method="get">
								<div class="header-search-wrapper">
									<input type="search" class="form-control" name="q" id="q" placeholder="Search..." required>
									<div class="select-custom body-text">
										<select id="cat" name="cat">
											<option value="">All Categories</option>
											<option value="4">Fashion</option>
											<option value="12">- Women</option>
											<option value="13">- Men</option>
											<option value="66">- Jewellery</option>
											<option value="67">- Kids Fashion</option>
											<option value="5">Electronics</option>
											<option value="21">- Smart TVs</option>
											<option value="22">- Cameras</option>
											<option value="63">- Games</option>
											<option value="7">Home &amp; Garden</option>
											<option value="11">Motors</option>
											<option value="31">- Cars and Trucks</option>
											<option value="32">- Motorcycles &amp; Powersports</option>
											<option value="33">- Parts &amp; Accessories</option>
											<option value="34">- Boats</option>
											<option value="57">- Auto Tools &amp; Supplies</option>
										</select>
									</div><!-- End .select-custom -->
									<button class="btn icon-search-3 p-0" type="submit"></button>
								</div><!-- End .header-search-wrapper -->
							</form>
						</div><!-- End .header-search -->
					</div><!-- End .header-left -->

					<div class="header-center order-first order-lg-0 ml-0 ml-lg-auto">
						<button class="mobile-menu-toggler" type="button">
							<i class="icon-menu"></i>
						</button>
						<a href="{{route('home')}}" class="logo">
							<img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Porto Logo">
						</a>
					</div><!-- End .header-center -->

					<div class="header-right w-lg-max ml-0 ml-lg-auto">
						<div class="header-contact d-none d-lg-flex align-items-center ml-auto pr-xl-4 mr-4">
							<i class="icon-phone-2"></i>
							<h6 class="pt-1 line-height-1 pr-2">Call us now<a href="tel:#" class="d-block text-dark pt-1 font1">+123 5678 890</a></h6>
						</div><!-- End .header-contact -->

						<a href="login.html" class="header-icon login-link pl-1"><i class="icon-user-2"></i></a>

						<a href="#" class="header-icon pl-1 pr-2"><i class="icon-wishlist-2"></i></a>

						<div class="dropdown cart-dropdown">
							<a href="#" class="dropdown-toggle dropdown-arrow" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
								<i class="icon-shopping-cart"></i>

								<?php
								$qtn = Cart::getTotalQuantity()
								//	echo "<pre>";
								//	print_r($contents);

								?>
								<span class="cart-count badge-circle">{{$qtn}}</span>
							</a>

							<div class="dropdown-menu">
								<div class="dropdownmenu-wrapper">
									<div class="dropdown-cart-header">
										<span>{{$qtn}} Items</span>

										<a href="{{route('show_cart')}}" class="float-right">View Cart</a>
									</div><!-- End .dropdown-cart-header -->

									<?php
									$contents = Cart::getContent();
									$sum = 0;

									?>
									@foreach($contents as $key => $value)
									<?php
									$image = $value->attributes->image;
									//dd($image);
									$total = ($value->price) * ($value->quantity);


									?>
									<div class="dropdown-cart-products">
										<div class="product">
											<div class="product-details">
												<h4 class="product-title">
													<a href="product.html">{{$value->name}}</a>
												</h4>
								<span class="cart-product-info">
													<span   class="cart-product-qty">{{$value->quantity}}</span>
													x ${{$value->price}}
												</span>
											</div><!-- End .product-details -->

											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="{{(!empty($image))? url('upload/product_images/'.$image):url('upload/no_image.jpg') }}" alt="product" width="80" height="80">
												</a>
											
												<a href="{{ route('item_remove',$value->id)}}" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</div><!-- End .product -->


									</div><!-- End .cart-product -->

									<?php
								$sum = $sum + $total;

								?>
								@endforeach


									<div class="dropdown-cart-total">
										<span>Total</span>

										<span class="cart-total-price float-right">${{$sum}}</span>
									</div><!-- End .dropdown-cart-total -->

									<div class="dropdown-cart-action">
										<a href="checkout-shipping.html" class="btn btn-dark btn-block">Checkout</a>
									</div><!-- End .dropdown-cart-total -->
								</div><!-- End .dropdownmenu-wrapper -->
							</div><!-- End .dropdown-menu -->
						</div><!-- End .dropdown -->
					</div><!-- End .header-right -->
				</div><!-- End .container -->
			</div><!-- End .header-middle -->

			<div class="header-bottom sticky-header d-none d-lg-block" data-sticky-options="{
				'move': [
					{
						'item': '.logo',
						'position': 'start',
						'clone': false
					},
					{
						'item': '.header-search',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.header-icon:not(.header-search)',
						'position': 'end',
						'clone': false
					},
					{
						'item': '.cart-dropdown',
						'position': 'end',
						'clone': false
					}
				],
				'moveTo': '.container',
				'changes': [
					{
						'item': '.header-search',
						'removeClass': 'header-search-inline',
						'addClass': 'header-search-popup ml-auto'
					},
					{
						'item': '.main-nav li.custom',
						'removeClass': 'd-xl-block'
					}
				]
			}">
				<div class="container">
					<nav class="main-nav d-flex w-lg-max justify-content-center">
						<ul class="menu">
							<li class="active">
								<a href="index-2.html">Home</a>
							</li>
							<li>
								<a href="category.html">Categories</a>
								<div class="megamenu megamenu-fixed-width megamenu-3cols">
									<div class="row">
										<div class="col-lg-4">
											<a href="#" class="nolink">VARIATION 1</a>
											<ul class="submenu">
												<li><a href="category.html">Fullwidth Banner</a></li>
												<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
												<li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
												<li><a href="category.html">Left Sidebar</a></li>
												<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
												<li><a href="category-flex-grid.html">Product Flex Grid</a></li>
												<li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
												<li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
											</ul>
										</div>
										<div class="col-lg-4">
											<a href="#" class="nolink">VARIATION 2</a>
											<ul class="submenu">
												<li><a href="category-list.html">List Types</a></li>
												<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
												<li><a href="category.html">3 Columns Products</a></li>
												<li><a href="category-4col.html">4 Columns Products</a></li>
												<li><a href="category-5col.html">5 Columns Products</a></li>
												<li><a href="category-6col.html">6 Columns Products</a></li>
												<li><a href="category-7col.html">7 Columns Products</a></li>
												<li><a href="category-8col.html">8 Columns Products</a></li>
											</ul>
										</div>
										<div class="col-lg-4 p-0" style="background: #f4f4f4 no-repeat center 82%/cover url('{{ asset('frontend/assets/images/menu-banner.jpg') }}')"></div>
									</div>
								</div><!-- End .megamenu -->
							</li>
							<li>
								<a href="product.html">Products</a>
								<div class="megamenu megamenu-fixed-width">
									<div class="row">
										<div class="col-lg-3">
											<a href="#" class="nolink">Variations 1</a>
											<ul class="submenu">
												<li><a href="product.html">Horizontal Thumbs</a></li>
												<li><a href="product-full-width.html">Vertical Thumbnails</a></li>
												<li><a href="product.html">Inner Zoom</a></li>
												<li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
												<li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->
										<div class="col-lg-3">
											<a href="#" class="nolink">Variations 2</a>
											<ul class="submenu">
												<li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
												<li><a href="product-simple.html">Simple Product</a></li>
												<li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->
										<div class="col-lg-3">
											<a href="#" class="nolink">Product Layout Types</a>
											<ul class="submenu">
												<li><a href="product.html">Default Layout</a></li>
												<li><a href="product-extended-layout.html">Extended Layout</a></li>
												<li><a href="product-full-width.html">Full Width Layout</a></li>
												<li><a href="product-grid-layout.html">Grid Images Layout</a></li>
												<li><a href="product-sticky-both.html">Sticky Both Side Info</a></li>
												<li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
											</ul>
										</div><!-- End .col-lg-4 -->

										<div class="col-lg-3 p-0">
											<img src="{{ asset('frontend/assets/images/menu-bg.png') }}" alt="Menu banner" class="product-promo">
										</div><!-- End .col-lg-4 -->
									</div><!-- End .row -->
								</div><!-- End .megamenu -->
							</li>
							<li>
								<a href="#">Pages</a>
								<ul>
									<li><a href="cart.html">Shopping Cart</a></li>
									<li><a href="#">Checkout</a>
										<ul>
											<li><a href="checkout-shipping.html">Checkout Shipping</a></li>
											<li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
											<li><a href="checkout-review.html">Checkout Review</a></li>
										</ul>
									</li>
									<li><a href="#">Dashboard</a>
										<ul>
											<li><a href="dashboard.html">Dashboard</a></li>
											<li><a href="my-account.html">My Account</a></li>
										</ul>
									</li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="#">Blog</a>
										<ul>
											<li><a href="blog.html">Blog</a></li>
											<li><a href="single.html">Blog Post</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact Us</a></li>
									<li><a href="#" class="login-link">Login</a></li>
									<li><a href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="about.html">About Us</a></li>
							<li class="d-none d-xl-block custom"><a href="#">Special Offer!</a></li>
							<li class="d-none d-xl-block custom"><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
						</ul>
					</nav>
				</div><!-- End .container -->
			</div><!-- End .header-bottom -->
		</header><!-- End .header -->

		<main class="main">
			<section class="home-slider owl-carousel owl-theme owl-carousel-lazy text-uppercase nav-big bg-gray" data-owl-options="{
				'loop': false
			}">
				@yield('top')

				<div class="container">
					<br><br>


					@yield('content')










				</div><!-- End .container -->
		</main><!-- End .main -->

		<footer class="footer">
			<div class="footer-middle">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="widget">
								<h4 class="widget-title">Contact Info</h4>
								<ul class="contact-info mb-2">
									<li>
										<span class="contact-info-label">Address:</span>1234 Street Name, City, England
									</li>
									<li>
										<span class="contact-info-label">Phone:</span><a href="tel:">(123) 456-7890</a>
									</li>
									<li>
										<span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
									</li>
									<li>
										<span class="contact-info-label">Working Days/Hours:</span>
										Mon - Sun / 9:00 AM - 8:00PM
									</li>
								</ul>
								<div class="social-icons">
									<a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
									<a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
									<a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
								</div><!-- End .social-icons -->
							</div><!-- End .widget -->
						</div><!-- End .col-lg-3 -->

						<div class="col-lg-9 col-md-8">
							<div class="widget widget-newsletter">
								<h4 class="widget-title m-b-1 pb-2">Subscribe newsletter</h4>
								<div class="row">
									<div class="col-lg-6">
										<p class="pt-2 mb-lg-0">Get all the latest information on Events, Sales and Offers. Sign up for newsletter today.</p>
									</div><!-- End .col-lg-6 -->

									<div class="col-lg-6">
										<form action="#" class="d-flex mb-0 w-100">
											<input type="email" class="form-control mb-0" placeholder="Email address" required="">

											<input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
										</form>
									</div><!-- End .col-lg-6 -->
								</div><!-- End .row -->
							</div><!-- End .widget -->

							<div class="row pt-3">
								<div class="col-sm-6 col-lg-5">
									<div class="widget">
										<h4 class="widget-title">Customer Service</h4>

										<ul class="links link-parts row mb-0">
											<div class="link-part col-sm-6">
												<li><a href="about.html">About Us</a></li>
												<li><a href="contact.html">Contact Us</a></li>
												<li><a href="my-account.html">My Account</a></li>
											</div>
											<div class="link-part col-sm-6">
												<li><a href="#">Orders History</a></li>
												<li><a href="#">Advanced Search</a></li>
												<li><a href="#" class="login-link">Login</a></li>
											</div>
										</ul>
									</div><!-- End .widget -->
								</div><!-- End .col-sm-6 -->

								<div class="col-sm-6 col-lg-7">
									<div class="widget">
										<h4 class="widget-title">About Us</h4>

										<ul class="links link-parts row mb-0">
											<div class="link-part col-xl-6">
												<li><a href="#">Super Fast WordPress Theme</a></li>
												<li><a href="#">1st Fully working Ajax Theme</a></li>
												<li><a href="#">33 Unique Shop Layouts</a></li>
											</div>
											<div class="link-part col-xl-6">
												<li><a href="#">Powerful Admin Panel</a></li>
												<li><a href="#">Mobile &amp; Retina Optimized</a></li>
											</div>
										</ul>
									</div><!-- End .widget -->
								</div><!-- End .col-sm-6 -->
							</div><!-- End .row -->
						</div><!-- End .col-lg-9 -->
					</div><!-- End .row -->
				</div><!-- End .container -->
			</div><!-- End .footer-middle -->

			<div class="footer-bottom">
				<div class="container d-flex justify-content-between align-items-center flex-wrap">
					<p class="footer-copyright py-3 pr-4 mb-0">© Porto eCommerce. 2020. All Rights Reserved</p>

					<img src="{{ asset('frontend/assets/images/payments.png') }}" alt="payment methods" class="footer-payments py-3">
				</div><!-- End .container -->
			</div><!-- End .footer-bottom -->
		</footer>
	</div><!-- End .page-wrapper -->

	<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

	<div class="mobile-menu-container">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="icon-cancel"></i></span>
			<nav class="mobile-nav">
				<ul class="mobile-menu">
					<li class="active"><a href="index-2.html">Home</a></li>
					<li>
						<a href="category.html">Categories</a>
						<ul>
							<li><a href="https://www.portotheme.com/html/porto_ecommerce/demo_9/category-banner-full-width.html">Full Width Banner</a></li>
							<li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
							<li><a href="category.html">Boxed Image Banner</a></li>
							<li><a href="category.html">Left Sidebar</a></li>
							<li><a href="category-sidebar-right.html">Right Sidebar</a></li>
							<li><a href="category-flex-grid.html">Product Flex Grid</a></li>
							<li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
							<li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
							<li><a href="#">Product List Item Types</a></li>
							<li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span class="tip tip-new">New</span></a></li>
							<li><a href="category-3col.html">3 Columns Products</a></li>
							<li><a href="category.html">4 Columns Products</a></li>
							<li><a href="category-5col.html">5 Columns Products</a></li>
							<li><a href="category-6col.html">6 Columns Products</a></li>
							<li><a href="category-7col.html">7 Columns Products</a></li>
							<li><a href="category-8col.html">8 Columns Products</a></li>
						</ul>
					</li>
					<li>
						<a href="product.html">Products</a>
						<ul>
							<li>
								<a href="#">Variations</a>
								<ul>
									<li><a href="product.html">Horizontal Thumbnails</a></li>
									<li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
									<li><a href="product.html">Inner Zoom</a></li>
									<li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
									<li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Variations</a>
								<ul>
									<li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
									<li><a href="product-simple.html">Simple Product</a></li>
									<li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Product Layout Types</a>
								<ul>
									<li><a href="product.html">Default Layout</a></li>
									<li><a href="product-extended-layout.html">Extended Layout</a></li>
									<li><a href="product-full-width.html">Full Width Layout</a></li>
									<li><a href="product-grid-layout.html">Grid Images Layout</a></li>
									<li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
									<li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
						<ul>
							<li><a href="cart.html">Shopping Cart</a></li>
							<li>
								<a href="#">Checkout</a>
								<ul>
									<li><a href="checkout-shipping.html">Checkout Shipping</a></li>
									<li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
									<li><a href="checkout-review.html">Checkout Review</a></li>
								</ul>
							</li>
							<li><a href="about.html">About</a></li>
							<li><a href="#" class="login-link">Login</a></li>
							<li><a href="forgot-password.html">Forgot Password</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a>
						<ul>
							<li><a href="single.html">Blog Post</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="#">Special Offer!<span class="tip tip-hot">Hot!</span></a></li>
					<li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
				</ul>
			</nav><!-- End .mobile-nav -->

			<div class="social-icons">
				<a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
				<a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
			</div><!-- End .social-icons -->
		</div><!-- End .mobile-menu-wrapper -->
	</div><!-- End .mobile-menu-container -->

	



	<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

	<!-- Plugins JS File -->
	<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/plugins.min.js') }}"></script>

	<!-- Main JS File -->
	<script src="{{ asset('frontend/assets/js/main.min.js') }}"></script>
	
</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_9/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 May 2021 15:59:48 GMT -->

</html>