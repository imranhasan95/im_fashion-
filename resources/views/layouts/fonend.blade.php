<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
                <meta charset="utf-8">
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <meta http-equiv="x-ua-compatible" content="ie=edge">
                <!-- <title>Home Version One || Sellshop</title> -->
                <title>Laravel</title>
                <meta name="description" content="">
                <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- favicon -->
                <link rel="shortcut icon" type="{{ asset('font_end/image/x-icon') }} " href="img/favicon.ico">


                <link rel="apple-touch-icon" href="apple-touch-icon.png">
                <!-- Place favicon.ico in the root directory -->
            <!-- google fonts -->
            <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
            <!-- all css here -->
            <!-- style css -->
            <link rel="stylesheet" href="{{ asset('font_end/style.css') }}">
            <!-- modernizr js -->
                <script src="{{ asset('font_end/js/vendor/modernizr-2.8.3.min.js') }}"></script>
            </head>

            <!-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif -->


                <body>
                    <!--[if lt IE 8]>
                        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
                    <![endif]-->

                    <!-- header section start -->
            		<header class="header-one">
            			<div class="container-fluid text-center">
            				<div class="row">
            					<div class="col-sm-2">
            						<div class="logo">
            							<a href="index.html"><img src="{{ asset('font_end/img/logo.png') }}" alt="Sellshop" /></a>
            						</div>
            					</div>
            					<div class="col-sm-8">
            						<div class="header-middel">
            							<div class="middel-top clearfix">
            								<div class="left floatleft">
            									<p><i class="mdi mdi-clock"></i> {{ date('Y-m-d H:i:s') }} 
                                 <!-- Mon-Fri : 09:00-19:00 -->
                               </p>
            								</div>
            								<div class="center floatleft">
            									<form action="#" method="get">
            										<button type="submit"><i class="mdi mdi-magnify"></i></button>
            										<input type="text" placeholder="Search within these results..." />
            									</form>
            								</div>
            								<div class="right floatleft">
            									<ul class="clearfix">
            										<li><a href="#"><i class="mdi mdi-account"></i></a>
            											<ul>
            												<li><a href="login.html">Login</a></li>
            												<li><a href="login.html">Registar</a></li>
            												<li><a href="my-account.html">My account</a></li>
            											</ul>
            										</li>
            										<li><a href="#"><i class="mdi mdi-settings"></i></a>
            											<ul>
            												<li><a href="my-account.html">My account</a></li>
            												<li><a href="cart.html">My cart</a></li>
            												<li><a href="wishlist.html">My wishlist</a></li>
            												<li><a href="checkout.html">Check out</a></li>
            											</ul>
            										</li>
            									</ul>
            								</div>
            							</div>
            							<div class="mainmenu">
            								<nav>
            									<ul>
            										<li><a href="index.html">Home</a>
            											<ul class="dropdown">
            												<li><a href="index.html">Home version one</a></li>
            												<li><a href="index-2.html">Home version two</a></li>
            											</ul>
            										</li>
            										<li><a href="shop.html">Shop</a>
            											<ul class="magamenu">
            												<li class="banner"><a href="shop.html"><img src="{{ asset('font_end/img/maga1.png') }}" alt="" /></a></li>
            												<li><h5>men’s wear</h5>
            													<ul>
            														<li><a href="#">Shirts & Top</a></li>
            														<li><a href="#">Shoes</a></li>
            														<li><a href="#">Dresses</a></li>
            														<li><a href="#">Shemwear</a></li>
            														<li><a href="#">Jeans</a></li>
            														<li><a href="#">Sweaters</a></li>
            														<li><a href="#">Jacket</a></li>
            														<li><a href="#">Men Watch</a></li>
            													</ul>
            												</li>
            												<li><h5>women’s wear</h5>
            													<ul>
            														<li><a href="#">Shirts & Tops</a></li>
            														<li><a href="#">Shoes</a></li>
            														<li><a href="#">Dresses</a></li>
            														<li><a href="#">Shemwear</a></li>
            														<li><a href="#">Jeans</a></li>
            														<li><a href="#">Sweaters</a></li>
            														<li><a href="#">Jacket</a></li>
            														<li><a href="#">Women Watch</a></li>
            													</ul>
            												</li>
            												<li class="banner"><a href="shop.html"><img src="{{ asset('font_end/img/maga2.png') }}" alt="" /></a></li>
            											</ul>
            										</li>
            										<li><a href="#">Pages</a>
            											<ul class="dropdown">
            												<li><a href="wishlist.html">Wishlist</a></li>
            												<li><a href="checkout.html">Checkout</a></li>
            												<li><a href="cart.html">Cart</a></li>
            												<li><a href="product-grid.html">Product Grid View</a></li>
            												<li><a href="product-list.html">Product List View</a></li>
            												<li><a href="single-product.html">Single Product</a></li>
            												<li><a href="error-404.html">404 page</a></li>
            											</ul>
            										</li>
            										<li><a href="blog.html">Blog</a>
            											<ul class="dropdown">
            												<li><a href="blog-style-1.html">Blog Style One</a></li>
            												<li><a href="blog-style-2.html">Blog Style Two</a></li>
            												<li><a href="single-blog.html">Single Blog</a></li>
            											</ul>
            										</li>
            										<li><a href="about.html">About</a></li>
            										<li><a href="contact.html">Contact</a></li>
            									</ul>
            								</nav>
            							</div>
            							<!-- mobile menu start -->
            							<div class="mobile-menu-area">
            								<div class="mobile-menu">
            									<nav id="dropdown">
            										<ul>
            											<li><a href="index.html">Home</a>
            												<ul class="dropdown">
            													<li><a href="index.html">Home version one</a></li>
            													<li><a href="index-2.html">Home version two</a></li>
            												</ul>
            											</li>
            											<li><a href="shop.html">Shop</a>
            												<ul>
            													<li><h5>men’s wear</h5>
            														<ul>
            															<li><a href="#">Shirts & Top</a></li>
            															<li><a href="#">Shoes</a></li>
            															<li><a href="#">Dresses</a></li>
            															<li><a href="#">Shemwear</a></li>
            															<li><a href="#">Jeans</a></li>
            															<li><a href="#">Sweaters</a></li>
            															<li><a href="#">Jacket</a></li>
            															<li><a href="#">Men Watch</a></li>
            														</ul>
            													</li>
            													<li><h5>women’s wear</h5>
            														<ul>
            															<li><a href="#">Shirts & Tops</a></li>
            															<li><a href="#">Shoes</a></li>
            															<li><a href="#">Dresses</a></li>
            															<li><a href="#">Shemwear</a></li>
            															<li><a href="#">Jeans</a></li>
            															<li><a href="#">Sweaters</a></li>
            															<li><a href="#">Jacket</a></li>
            															<li><a href="#">Women Watch</a></li>
            														</ul>
            													</li>
            												</ul>
            											</li>
            											<li><a href="#">Pages</a>
            												<ul>
            													<li><a href="wishlist.html">Wishlist</a></li>
            													<li><a href="checkout.html">Checkout</a></li>
            													<li><a href="cart.html">Cart</a></li>
            													<li><a href="product-grid.html">Product Grid View</a></li>
            													<li><a href="product-list.html">Product List View</a></li>
            													<li><a href="single-product.html">Single Product</a></li>
            													<li><a href="error-404.html">404 page</a></li>
            												</ul>
            											</li>
            											<li><a href="blog.html">Blog</a>
            												<ul>
            													<li><a href="blog-style-1.html">Blog Style One</a></li>
            													<li><a href="blog-style-2.html">Blog Style Two</a></li>
            													<li><a href="single-blog.html">Single Blog</a></li>
            												</ul>
            											</li>
            											<li><a href="about.html">About</a></li>
            											<li><a href="contact.html">Contact</a></li>
            										</ul>
            									</nav>
            								</div>
            							</div>
            						</div>
            					</div>
            					<div class="col-sm-2">
            						<div class="cart-itmes">
            							<a class="cart-itme-a" href="cart.html">
            								<i class="mdi mdi-cart"></i>
            								02 items :  <strong>$86.00</strong>
            							</a>
            							<div class="cartdrop">
            								<div class="sin-itme clearfix">
            									<i class="mdi mdi-close"></i>
            									<a class="cart-img" href="cart.html"><img src="{{ asset('font_end/img/cart/1.png') }}" alt="" /></a>
            									<div class="menu-cart-text">
            										<a href="#"><h5>men’s black t-shirt</h5></a>
            										<span>Color :  Black</span>
            										<span>Size :     SL</span>
            										<strong>$122.00</strong>
            									</div>
            								</div>
            								<div class="sin-itme clearfix">
            									<i class="mdi mdi-close"></i>
            									<a class="cart-img" href="cart.html"><img src="{{ asset('font_end/img/cart/2.png') }}" alt="" /></a>
            									<div class="menu-cart-text">
            										<a href="#"><h5>men’s black t-shirt</h5></a>
            										<span>Color :  Black</span>
            										<span>Size :     SL</span>
            										<strong>$132.00</strong>
            									</div>
            								</div>
            								<div class="total">
            									<span>total <strong>= $306.00</strong></span>
            								</div>
            								<a class="goto" href="cart.html">go to cart</a>
            								<a class="out-menu" href="checkout.html">Check out</a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            		</header>
                    <!-- header section end -->


                      @yield('contents')


                      <!-- footer-top area start -->
                      <div class="footer-top section-padding">
                        <div class="footer-dsc">
                          <div class="container">
                            <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="single-text">
                                  <div class="footer-title">
                                    <h4>Contact us</h4>
                                  </div>
                                  <div class="footer-text">
                                    <ul>
                                      <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <p>Flat no 01, House no 02, Vincent,</p>
                                        <p>Dhaka-1207, Bangladesh</p>
                                      </li>
                                      <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p>(+880) 19453 821758</p>
                                        <p>(+880) 19453 813758</p>
                                      </li>
                                      <li>
                                        <i class="mdi mdi-email"></i>
                                        <p>info@mydomain.com</p>
                                        <p>username@email.com</p>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-3 col-md-2 wide-mobile">
                                <div class="single-text">
                                  <div class="footer-title">
                                    <h4>my account</h4>
                                  </div>
                                  <div class="footer-menu">
                                    <ul>
                                      <li><a href="login.html"><i class="mdi mdi-menu-right"></i>My Account</a></li>
                                      <li><a href="wishlist.html"><i class="mdi mdi-menu-right"></i>My Wishlist</a></li>
                                      <li><a href="cart.html"><i class="mdi mdi-menu-right"></i>My Cart</a></li>
                                      <li><a href="login.html"><i class="mdi mdi-menu-right"></i>Sign In</a></li>
                                      <li><a href="checkout.html"><i class="mdi mdi-menu-right"></i>Check out</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Track My Orde</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-3 col-md-2 wide-mobile">
                                <div class="single-text">
                                  <div class="footer-title">
                                    <h4>shipping</h4>
                                  </div>
                                  <div class="footer-menu">
                                    <ul>
                                      <li><a href="contact.html"><i class="mdi mdi-menu-right"></i>New Products</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Top Sellers</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Manufactirers</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Suppliers</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Specials</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Availability</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-2 r-margin-top wide-mobile">
                                <div class="single-text">
                                  <div class="footer-title">
                                    <h4>Information</h4>
                                  </div>
                                  <div class="footer-menu">
                                    <ul>
                                      <li><a href="contact.html"><i class="mdi mdi-menu-right"></i>Return Exchange</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Fast Delivery</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Online Shopping</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Shipping Guide</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Turm Of Use</a></li>
                                      <li><a href="#"><i class="mdi mdi-menu-right"></i>Home Delivery</a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-3 r-margin-top wide-mobile">
                                <div class="single-text">
                                  <div class="footer-title">
                                    <h4>instagram</h4>
                                  </div>
                                  <div class="clearfix instagram">
                                    <ul>
                                      <li><a href="#"><img src="{{ asset('font_end/img/footer/in1.png') }}" alt="Instagram" /></a></li>
                                      <li><a href="#"><img src="{{ asset('font_end/img/footer/in2.png') }}" alt="Instagram" /></a></li>
                                      <li><a href="#"><img src="{{ asset('font_end/img/footer/in3.png') }}" alt="Instagram" /></a></li>
                                      <li><a href="#"><img src="{{ asset('font_end/img/footer/in4.png') }}" alt="Instagram" /></a></li>
                                      <li><a href="#"><img src="{{ asset('font_end/img/footer/in5.png') }}" alt="Instagram" /></a></li>
                                      <li><a href="#"><img src="{{ asset('font_end/img/footer/in6.png') }}" alt="Instagram" /></a></li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- footer-top area end -->
                      <!-- footer-bottom area start -->
                      <div class="footer-bottom">
                        <div class="container">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6">
                              <p>&copy; Sellshop 2016. All Rights Reserved.</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 text-right">
                              <a href="#"><img src="img/footer/payment.png" alt="" /></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- footer-bottom area end -->
                    </footer>
                        <!-- footer section end -->

                    <!-- all js here -->
                    <!-- jquery latest version -->
                        <script src="{{ asset('font_end/js/vendor/jquery-1.12.3.min.js') }}"></script>
                    <!-- bootstrap js -->
                        <script src="{{ asset('font_end/js/bootstrap.min.js') }}"></script>
                    <!-- owl.carousel js -->
                        <script src="{{ asset('font_end/js/owl.carousel.min.js') }}"></script>
                    <!-- meanmenu js -->
                        <script src="{{ asset('font_end/js/jquery.meanmenu.js') }}"></script>
                    <!-- countdown JS -->
                        <script src="{{ asset('font_end/js/countdown.js') }}"></script>
                    <!-- nivo.slider JS -->
                        <script src="{{ asset('font_end/js/jquery.nivo.slider.pack.js') }}"></script>
                    <!-- simpleLens JS -->
                        <script src="{{ asset('font_end/js/jquery.simpleLens.min.js') }}"></script>
                    <!-- jquery-ui js -->
                        <script src="{{ asset('font_end/js/jquery-ui.min.js') }}"></script>
                    <!-- load-more js -->
                        <script src="{{ asset('font_end/js/load-more.js') }}"></script>
                    <!-- plugins js -->
                        <script src="{{ asset('font_end/js/plugins.js') }}"></script>
                    <!-- main js -->
                        <script src="{{ asset('font_end/js/main.js') }}"></script>


                    @yield('script')

            </body>
            </html>
