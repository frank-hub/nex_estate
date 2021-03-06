<!DOCTYPE html>
<html lang="en">
<head>
<title>Nex-Estate</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Nex-Estate">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/slick-1.8.0/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">

</head>

<body>

<div class="super_container">

<!-- Header -->

<header class="header">

	<!-- Top Bar -->

	<div class="top_bar">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-row">
					<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>+254 717 353 774</div>
					<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="mailto:info@nextechdevelopers.com">info@nextechdevelopers.com</a></div>
					<div class="top_bar_content ml-auto">
						<div class="top_bar_menu">
							<ul class="standard_dropdown top_bar_dropdown">
								<li>
									<a href="#">English<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="#">Italian</a></li>
										<li><a href="#">Spanish</a></li>
										<li><a href="#">Japanese</a></li>
									</ul>
								</li>
								<li>
									<a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="#">EUR Euro</a></li>
										<li><a href="#">GBP British Pound</a></li>
										<li><a href="#">JPY Japanese Yen</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="top_bar_user">
							<div class="user_icon"><img src="images/user.svg" alt=""></div>
							<div><a href="{{ route('register') }}">Register</a></div>
							<div><a href="{{ route('login') }}">Sign in</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	
	<!-- Main Navigation -->

	<nav class="main_nav">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="main_nav_content d-flex flex-row">

						<!-- Categories Menu -->

						<div class="cat_menu_container">
							<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
								<div class="cat_burger"><span></span><span></span><span></span></div>
								<div class="cat_menu_text">categories</div>
							</div>

							<ul class="cat_menu">
								<li><a href="#">Office Space<i class="fas fa-chevron-right"></i></a></li>
								<li class="hassubs">
									<a href="#">Land/Plots<i class="fas fa-chevron-right"></i></a>
									<ul>
										<li class="hassubs">
											<a href="#">Land<i class="fas fa-chevron-right"></i></a>
											<ul>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											</ul>
										</li>
										<li class="hassubs">
											<a href="#">Plots<i class="fas fa-chevron-right"></i></a>
											<ul>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										
									</ul>
								</li>
								<li><a href="#">Conference<i class="fas fa-chevron-right"></i></a></li>
								<li><a href="#">Bookings<i class="fas fa-chevron-right"></i></a></li>
							</ul>
						</div>

						<!-- Main Nav Menu -->

						<div class="main_nav_menu ml-auto">
							<ul class="standard_dropdown main_nav_dropdown">
								<li><a href="/">Home<i class="fas fa-chevron-down"></i></a></li>
								<li><a href="{{url('services')}}">Services<i class="fas fa-chevron-down"></i></a></li>
								<li><a href="{{url('property')}}">Propery<i class="fas fa-chevron-down"></i></a></li>
								<li class="hassubs">
									<a href="#">Bookings<i class="fas fa-chevron-down"></i></a>
									<ul>
										<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</li>
								<li><a href="{{url('blog')}}">Blog<i class="fas fa-chevron-down"></i></a></li>
								<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
							</ul>
						</div>

						<!-- Menu Trigger -->

						<div class="menu_trigger_container ml-auto">
							<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
								<div class="menu_burger">
									<div class="menu_trigger_text">menu</div>
									<div class="cat_burger menu_burger_inner">
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</nav>
	
	<!-- Menu -->

	

</header>

@yield('main_layout')


<!-- Footer -->

<footer class="footer">
<div class="container">
	<div class="row">

		<div class="col-lg-3 footer_col">
			<div class="footer_column footer_contact">
				<div class="logo_container">
					<div class="logo"><a href="#">Nex-Estate</a></div>
				</div>
				<div class="footer_title">Got Question? Call Us 24/7</div>
				<div class="footer_phone">+38 068 005 3570</div>
				<div class="footer_contact_text">
					<p>17 Princess Road, London</p>
					<p>Grester London NW18JR, UK</p>
				</div>
				<div class="footer_social">
					<ul>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						<li><a href="#"><i class="fab fa-google"></i></a></li>
						<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="col-lg-2 offset-lg-2">
			<div class="footer_column">
				<div class="footer_title">Find it Fast</div>
				<ul class="footer_list">
					<li><a href="#">Computers & Laptops</a></li>
					<li><a href="#">Cameras & Photos</a></li>
					<li><a href="#">Hardware</a></li>
					<li><a href="#">Smartphones & Tablets</a></li>
					<li><a href="#">TV & Audio</a></li>
				</ul>
				<div class="footer_subtitle">Gadgets</div>
				<ul class="footer_list">
					<li><a href="#">Car Electronics</a></li>
				</ul>
			</div>
		</div>

		<div class="col-lg-2">
			<div class="footer_column">
				<ul class="footer_list footer_list_2">
					<li><a href="#">Video Games & Consoles</a></li>
					<li><a href="#">Accessories</a></li>
					<li><a href="#">Cameras & Photos</a></li>
					<li><a href="#">Hardware</a></li>
					<li><a href="#">Computers & Laptops</a></li>
				</ul>
			</div>
		</div>

		<div class="col-lg-2">
			<div class="footer_column">
				<div class="footer_title">Customer Care</div>
				<ul class="footer_list">
					<li><a href="#">My Account</a></li>
					<li><a href="#">Order Tracking</a></li>
					<li><a href="#">Wish List</a></li>
					<li><a href="#">Customer Services</a></li>
					<li><a href="#">Returns / Exchange</a></li>
					<li><a href="#">FAQs</a></li>
					<li><a href="#">Product Support</a></li>
				</ul>
			</div>
		</div>

	</div>
</div>
</footer>

<!-- Copyright -->

<div class="copyright">
<div class="container">
	<div class="row">
		<div class="col">
			
			<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
				<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
				<div class="logos ml-sm-auto">
					<ul class="logos_list">
						<li><a href="#"><img src="images/logos_1.png" alt=""></a></li>
						<li><a href="#"><img src="images/logos_2.png" alt=""></a></li>
						<li><a href="#"><img src="images/logos_3.png" alt=""></a></li>
						<li><a href="#"><img src="images/logos_4.png" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
