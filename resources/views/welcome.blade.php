@extends('layouts.fonend')

@section('contents')
                    <!-- slider-section-start -->
                    <div class="main-slider-one slider-area">
            			<div id="wrapper">
            				<div class="slider-wrapper">
            					<div id="mainSlider" class="nivoSlider">
            						<img src="{{ asset('font_end/img/slider/home1/1.jpg') }}" alt="main slider" title="#htmlcaption"/>
            						<img src="{{ asset('font_end/img/slider/home1/2.jpg') }}" alt="main slider" title="#htmlcaption2"/>
            					</div>
            					<div id="htmlcaption" class="nivo-html-caption slider-caption">
            						<div class="container">
            							<div class="slider-left slider-right">
            								<div class="slide-text animated bounceInRight">
            									<h3 class="bounceInDown">new collection</h3>
            									<h1>Men’s Fashion 2016</h1>
            									<span>Starting at $65.00. Don’t miss out!</span>
            								</div>
            								<div class="one-p animated bounceInLeft">
            									<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</p>
            								</div>
            								<div class="animated slider-btn fadeInUpBig">
            									<a class="shop-btn" href="shop.html">Shop now</a>
            								</div>
            							</div>
            						</div>
            					</div>
            					<div id="htmlcaption2" class="nivo-html-caption slider-caption">
            						<div class="container">
            							<div class="slider-left slider-right">
            								<div class="slide-text animated bounceInRight">
            									<h3>new collection</h3>
            									<h1>Men’s Fashion 2016</h1>
            									<span>Starting at $65.00. Don’t miss out!</span>
            								</div>
            								<div class="one-p animated bounceInLeft">
            									<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum".</p>
            								</div>
            								<div class="animated slider-btn fadeInUpBig">
            									<a class="shop-btn" href="shop.html">Shop now</a>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            		<!-- slider section end -->
                    <!-- collection section start -->
            		<section class="collection-area section-padding">
            			<div class="container">
            				<div class="row">
            					<div class="col-sm-4">
            						<div class="single-colect banner collect-one">
            							<a href="#"><img src="{{ asset('font_end/img/collect/1.jpg') }}" alt="" /></a>
            						</div>
            					</div>
            					<div class="col-sm-4">
            						<div class="colect-text ">
            							<h4><a href="#">Fashion Collection 2016</a></h4>
            							<h5>big sale of the men 2016 fashion <br /> Up To 23% Off!</h5>
            							<a href="#">Shop Now <i class="mdi mdi-arrow-right"></i></a>
            						</div>
            						<div class="collect-img banner margin single-colect">
            							<a href="#"><img src="{{ asset('font_end/img/collect/2.jpg')  }}" alt="" /></a>
            						</div>
            					</div>
            					<div class="col-sm-4">
            						<div class="collect-img banner single-colect">
            							<a href="#"><img src="{{ asset('font_end/img/collect/3.jpg')  }}" alt="" /></a>
            							<h2>New Collection</h2>
            						</div>
            						<div class="colect-text ">
            							<h4><a href="#">Men’s Collection 2016</a></h4>
            							<p>There are many variations of passages of Lorem Ipsum avalabbut the majority have suffered alteration in some form.</p>
            							<a href="#">Shop Now <i class="mdi mdi-arrow-right"></i></a>
            						</div>
            					</div>
            				</div>
            			</div>
            		</section>
            		<!-- collection section end -->
                    <!-- featured-products section start -->
            		<section class="single-products section-padding extra-padding-bottom">
            			<div class="container">
            				<div class="row">
            					<div class="col-xs-12">
            						<div class="section-title text-center">
            							<h2>Featured Products</h2>
            						</div>
            					</div>
            				</div>
            				<div class="wrapper">
            					<ul class="load-list load-list-one">
            						<li>
            							<div class="row text-center">
            								<div class="col-xs-12 col-sm-6 col-md-3">
            									<div class="single-product">
            										<div class="product-img">
            											<div class="pro-type">
            												<span>new</span>
            											</div>
            											<a href="#"><img src="{{ asset('font_end/img/products/1.jpg' ) }}" alt="Product Title" /></a>
            											<div class="actions-btn">
            												<a href="#"><i class="mdi mdi-cart"></i></a>
            												<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            												<a href="#"><i class="mdi mdi-heart"></i></a>
            											</div>
            										</div>
            										<div class="product-dsc">
            											<p><a href="#">men’s Black t-shirt</a></p>
            											<span>$65.20</span>
            										</div>
            									</div>
            								</div>
            								<!-- single product end -->
            								<div class="col-xs-12 col-sm-6 col-md-3">
            									<div class="single-product">
            										<div class="product-img">
            											<div class="pro-type sell">
            												<span>sell</span>
            											</div>
            											<a href="#"><img src="{{ asset('font_end/img/products/2.jpg') }}" alt="Product Title" /></a>
            											<div class="actions-btn">
            												<a href="#"><i class="mdi mdi-cart"></i></a>
            												<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            												<a href="#"><i class="mdi mdi-heart"></i></a>
            											</div>
            										</div>
            										<div class="product-dsc">
            											<p><a href="#">men’s White t-shirt</a></p>
            											<span>$57.00</span>
            										</div>
            									</div>
            								</div>
            								<!-- single product end -->
            								<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            									<div class="single-product">
            										<div class="product-img">
            											<div class="pro-type">
            												<span>-15%</span>
            											</div>
            											<a href="#"><img src="{{ asset('font_end/img/products/3.jpg') }}" alt="Product Title" /></a>
            											<div class="actions-btn">
            												<a href="#"><i class="mdi mdi-cart"></i></a>
            												<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            												<a href="#"><i class="mdi mdi-heart"></i></a>
            											</div>
            										</div>
            										<div class="product-dsc">
            											<p><a href="#">men’s Blue t-shirt</a></p>
            											<span>$56.00</span>
            										</div>
            									</div>
            								</div>
            								<!-- single product end -->
            								<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            									<div class="single-product">
            										<div class="product-img">
            											<a href="#"><img src="{{ asset('font_end/img/products/4.jpg') }}" alt="Product Title" /></a>
            											<div class="actions-btn">
            												<a href="#"><i class="mdi mdi-cart"></i></a>
            												<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            												<a href="#"><i class="mdi mdi-heart"></i></a>
            											</div>
            										</div>
            										<div class="product-dsc">
            											<p><a href="#">men’s White t-shirt</a></p>
            											<span>$96.20</span>
            										</div>
            									</div>
            								</div>
            								<!-- single product end -->
            							</div>
            						</li>
            						<li>
            							<div class="row text-center">
            								<div class="col-xs-12 col-sm-6 col-md-3">
            									<div class="single-product">
            										<div class="product-img">
            											<div class="pro-type">
            												<span>new</span>
            											</div>
            											<a href="#"><img src="{{ asset('font_end/img/products/5.jpg') }}" alt="Product Title" /></a>
            											<div class="actions-btn">
            												<a href="#"><i class="mdi mdi-cart"></i></a>
            												<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            												<a href="#"><i class="mdi mdi-heart"></i></a>
            											</div>
            										</div>
            										<div class="product-dsc">
            											<p><a href="#">men’s White t-shirt</a></p>
            											<span>$165.20</span>
            										</div>
            									</div>
            								</div>
            								<!-- single product end -->
            								<div class="col-xs-12 col-sm-6 col-md-3">
            									<div class="single-product">
            										<div class="product-img">
            											<a href="#"><img src="{{ asset('font_end/img/products/6.jpg') }}" alt="Product Title" /></a>
            											<div class="actions-btn">
            												<a href="#"><i class="mdi mdi-cart"></i></a>
            												<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            												<a href="#"><i class="mdi mdi-heart"></i></a>
            											</div>
            										</div>
            										<div class="product-dsc">
            											<p><a href="#">men’s Black t-shirt</a></p>
            											<span>$57.00</span>
            										</div>
            									</div>
            								</div>
            								<!-- single product end -->
            								<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            									<div class="single-product">
            										<div class="product-img">
            											<div class="pro-type">
            												<span>new</span>
            											</div>
            											<a href="#"><img src="{{ asset('font_end/img/products/7.jpg') }}" alt="Product Title" /></a>
            											<div class="actions-btn">
            												<a href="#"><i class="mdi mdi-cart"></i></a>
            												<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            												<a href="#"><i class="mdi mdi-heart"></i></a>
            											</div>
            										</div>
            										<div class="product-dsc">
            											<p><a href="#">men’s Grey t-shirt</a></p>
            											<span>$67.00</span>
            										</div>
            									</div>
            								</div>
            								<!-- single product end -->
            								<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            									<div class="single-product">
            										<div class="product-img">
            											<a href="#"><img src="{{ asset('font_end/img/products/8.jpg') }}" alt="Product Title" /></a>
            											<div class="actions-btn">
            												<a href="#"><i class="mdi mdi-cart"></i></a>
            												<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            												<a href="#"><i class="mdi mdi-heart"></i></a>
            											</div>
            										</div>
            										<div class="product-dsc">
            											<p><a href="#">men’s Blue t-shirt</a></p>
            											<span>$77.00</span>
            										</div>
            									</div>
            								</div>
            								<!-- single product end -->
            							</div>
            						</li>
            					</ul>
            					<button id="load-more-one">Load More</button>
            				</div>
            			</div>
            		</section>
            		<!-- featured-products section end -->
            		<!-- coming product section start -->
            		<section class="coming-product">
            			<div class="container">
            				<div class="row">
            					<div class="col-sm-4 col-md-2">
            						<div class="tab-menu nav nav-tabs padding">
            							<ul>
            								<li class="active"><a href="#dress1" data-toggle="tab" data-target="#dress1, #text1"><img src="img/coming/s1.jpg" alt="" /></a></li>
            								<li><a href="#dress2" data-toggle="tab" data-target="#dress2,#text2"><img src="img/coming/s2.jpg" alt="" /></a></li>
            							</ul>
            						</div>
            					</div>
            					<div class="col-sm-7 col-md-5">
            						<div class="text-center large-img tab-content">
            							<div class="tab-pane fade in active" id="dress1">
            								<img src="{{ asset('font_end/img/coming/l1.jpg') }}" alt="" />
            							</div>
            							<div class="tab-pane fade" id="dress2">
            								<img src="{{ asset('font_end/img/coming/l2.jpg') }}" alt="" />
            							</div>
            						</div>
            					</div>
            					<div class="col-sm-12 col-md-5">
            						<div class="padding">
            							<div class="tab-content" >
            								<div class="single-coming tab-pane fade in active" id="text1">
            									<h4><a href="#">The Maker usc Dress</a></h4>
            									<span><strong>$569.00</strong>   <del>$669.00</del></span>
            									<p class="come-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam.</p>
            									<ul class="color-size">
            										<li><span>Size</span><strong>:</strong> <a href="#">SL</a><a href="#">ML</a><a href="#">Xl</a></li>
            										<li><span>color</span><strong>:</strong> <a href="#">Red</a><a href="#">Grean</a><a href="#">Blue</a></li>
            										<li><span>Brand</span><strong>:</strong>Crazy Fashion</li>
            										<li><span>category</span><strong>:</strong>Fashion   Men’s</li>
            									</ul>
            									<div class="count-text clearfix">
            										<ul id="countdown-1">
            											<li>
            												<p class="timeRefDays timedescription">days</p>
            												<span class="days timenumbers">00</span>
            											</li>
            											<li>
            												<p class="timeRefHours timedescription">hrs</p>
            												<span class="hours timenumbers">00</span>
            											</li>
            											<li>
            												<p class="timeRefMinutes timedescription">mins</p>
            												<span class="minutes timenumbers">00</span>
            											</li>
            											<li>
            												<p class="timeRefSeconds timedescription">secs</p>
            												<span class="seconds timenumbers">00</span>
            											</li>
            										</ul>
            									</div>
            								</div>
            								<div class="single-coming tab-pane fade" id="text2">
            									<h4><a href="#">The Maker usc Dress</a></h4>
            									<span><strong>$569.00</strong>   <del>$669.00</del></span>
            									<p class="come-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed does eiusmodes tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim venim, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam.</p>
            									<ul class="color-size">
            										<li><span>Size</span><strong>:</strong> <a href="#">SL</a><a href="#">ML</a><a href="#">Xl</a></li>
            										<li><span>color</span><strong>:</strong> <a href="#">Red</a><a href="#">Grean</a><a href="#">Blue</a></li>
            										<li><span>Brand</span><strong>:</strong>Crazy Fashion</li>
            										<li><span>category</span><strong>:</strong>Fashion   Men’s</li>
            									</ul>
            									<div class="count-text clearfix">
            										<ul id="countdown-2">
            											<li>
            												<p class="timeRefDays timedescription">days</p>
            												<span class="days timenumbers">00</span>
            											</li>
            											<li>
            												<p class="timeRefHours timedescription">hrs</p>
            												<span class="hours timenumbers">00</span>
            											</li>
            											<li>
            												<p class="timeRefMinutes timedescription">mins</p>
            												<span class="minutes timenumbers">00</span>
            											</li>
            											<li>
            												<p class="timeRefSeconds timedescription">secs</p>
            												<span class="seconds timenumbers">00</span>
            											</li>
            										</ul>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            		</section>
                    <!-- coming product section end -->
                    <!-- tab-products section start -->
            		<div class="tab-products single-products section-padding extra-padding-top">
            			<div class="container">
            				<div class="row">
            					<div class="col-xs-12">
            						<div class="section-title text-center">
            							<div class="product-tab nav nav-tabs">
            								<ul>
            									<li class="active"><a data-toggle="tab" href="#arrival">New Arrival <span>/</span></a></li>
            									<li><a data-toggle="tab" href="#popular">Popular Product <span>/</span></a></li>
            									<li><a data-toggle="tab" href="#best">Best Seller</a></li>
            								</ul>
            							</div>
            						</div>
            					</div>
            				</div>
            				<div class="text-center tab-content">
            					<div class="tab-pane  fade in active" id="arrival">
            						<div class="wrapper">
            							<ul class="load-list load-list-two">
            								<li>
            									<div class="row text-center">
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type">
            														<span>new</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/5.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s White t-shirt</a></p>
            													<span>$165.20</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type sell">
            														<span>sell</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/6.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$57.00 <del>$60.00</del></span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type">
            														<span>-15%</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/7.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Grey t-shirt</a></p>
            													<span>$67.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/4.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Blue t-shirt</a></p>
            													<span>$77.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            									</div>
            								</li>
            								<li>
            									<div class="row text-center">
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/8.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$65.20</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type sell">
            														<span>sell</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/9.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$57.00 <del>$62.00</del></span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/10.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$56.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/11.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$96.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            									</div>
            								</li>
            								<li>
            									<div class="row text-center">
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type">
            														<span>new</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/5.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s White t-shirt</a></p>
            													<span>$165.20</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/6.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$57.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/7.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Grey t-shirt</a></p>
            													<span>$67.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/8.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Blue t-shirt</a></p>
            													<span>$77.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            									</div>
            								</li>
            							</ul>
            							<button id="load-more-two">Load More</button>
            						</div>
            					</div>
            					<!-- arrival product end -->
            					<div class="tab-pane fade" id="popular">
            						<div class="wrapper">
            							<ul class="load-list load-list-three">
            								<li>
            									<div class="row text-center">
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/6.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$57.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/7.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Grey t-shirt</a></p>
            													<span>$67.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/8.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Blue t-shirt</a></p>
            													<span>$77.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/4.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Blue t-shirt</a></p>
            													<span>$77.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            									</div>
            								</li>
            								<li>
            									<div class="row text-center">
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/8.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$65.20</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type sell">
            														<span>sell</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/9.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$57.00 <del>$62.00</del></span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/10.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$56.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/11.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$96.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            									</div>
            								</li>
            								<li>
            									<div class="row text-center">
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type">
            														<span>new</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/5.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s White t-shirt</a></p>
            													<span>$165.20</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/6.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$57.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/7.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Grey t-shirt</a></p>
            													<span>$67.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/8.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Blue t-shirt</a></p>
            													<span>$77.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            									</div>
            								</li>
            							</ul>
            							<button id="load-more-three">Load More</button>
            						</div>
            					</div>
            					<!-- popular product end -->
            					<div class="tab-pane fade" id="best">
            						<div class="wrapper">
            							<ul class="load-list load-list-four">
            								<li>
            									<div class="row text-center">
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type">
            														<span>new</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/5.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s White t-shirt</a></p>
            													<span>$165.20</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/6.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$57.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type">
            														<span>-15%</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/7.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Grey t-shirt</a></p>
            													<span>$67.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/4.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Blue t-shirt</a></p>
            													<span>$77.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            									</div>
            								</li>
            								<li>
            									<div class="row text-center">
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/8.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$65.20</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type sell">
            														<span>sell</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/9.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$57.00 <del>$62.00</del></span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/10.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$56.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/11.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$96.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            									</div>
            								</li>
            								<li>
            									<div class="row text-center">
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type">
            														<span>new</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/5.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s White t-shirt</a></p>
            													<span>$165.20</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3">
            											<div class="single-product">
            												<div class="product-img">
            													<div class="pro-type">
            														<span>new</span>
            													</div>
            													<a href="#"><img src="{{ asset('font_end/img/products/5.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s White t-shirt</a></p>
            													<span>$165.20</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/6.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Black t-shirt</a></p>
            													<span>$57.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            										<div class="col-xs-12 col-sm-6 col-md-3 r-margin-top">
            											<div class="single-product">
            												<div class="product-img">
            													<a href="#"><img src="{{ asset('font_end/img/products/8.jpg') }}" alt="Product Title" /></a>
            													<div class="actions-btn">
            														<a href="#"><i class="mdi mdi-cart"></i></a>
            														<a href="#" data-toggle="modal" data-target="#quick-view"><i class="mdi mdi-eye"></i></a>
            														<a href="#"><i class="mdi mdi-heart"></i></a>
            													</div>
            												</div>
            												<div class="product-dsc">
            													<p><a href="#">men’s Blue t-shirt</a></p>
            													<span>$77.00</span>
            												</div>
            											</div>
            										</div>
            										<!-- single product end -->
            									</div>
            								</li>
            							</ul>
            							<button id="load-more-four">Load More</button>
            						</div>
            					</div>
            					<!-- popular product end -->
            				</div>
            			</div>
            		</div>
            		<!-- tab-products section end -->
                    <!-- service section start -->
            		<section class="service-area section-padding">
            			<div class="container">
            				<div class="row">
            					<div class="col-xs-12">
            						<div class="section-title text-center">
            							<h2>Our Service</h2>
            						</div>
            					</div>
            				</div>
            				<div class="row text-center">
            					<div class="col-sm-4">
            						<div class="service-text">
            							<i class="mdi mdi-truck"></i>
            							<h4>home delivery</h4>
            							<p>Contrary to popular belief, Lorem Ipsum is <br /> not simply random text.</p>
            						</div>
            					</div>
            					<div class="col-sm-4">
            						<div class="service-text">
            							<i class="mdi mdi-lock"></i>
            							<h4>PAYMENT SECURED</h4>
            							<p>Contrary to popular belief, Lorem Ipsum is <br /> not simply random text.</p>
            						</div>
            					</div>
            					<div class="col-sm-4">
            						<div class="service-text">
            							<i class="mdi mdi-rotate-left"></i>
            							<h4>30 days money back</h4>
            							<p>Contrary to popular belief, Lorem Ipsum is <br /> not simply random text.</p>
            						</div>
            					</div>
            				</div>
            			</div>
            		</section>
            		<!-- service section end -->
                    <!-- blog section start -->
            		<section class="latest-blog section-padding extra-padding">
            			<div class="container">
            				<div class="row">
            					<div class="col-xs-12">
            						<div class="section-title text-center">
            							<h2>Latest Blog</h2>
            						</div>
            					</div>
            				</div>
            				<div class="wrapper">
            					<ul class="load-list load-list-blog">
            						<li>
            							<div class="row">
            								<div class="col-sm-4">
            									<div class="l-blog-text">
            										<div class="banner"><a href="single-blog.html"><img src="{{ asset('font_end/img/blog/1.jpg') }}" alt="" /></a></div>
            										<div class="s-blog-text">
            											<h4><a href="single-blog.html">Fashion style fine arts drawing</a></h4>
            											<span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
            											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour....</p>
            										</div>
            										<div class="date-read clearfix">
            											<a href="#"><i class="mdi mdi-clock"></i> jun 25, 2016</a>
            											<a href="single-blog.html">read more</a>
            										</div>
            									</div>
            								</div>
            								<div class="col-sm-4">
            									<div class="l-blog-text">
            										<div class="banner"><a href="single-blog.html"><img src="{{ asset('font_end/img/blog/2.jpg') }}" alt="" /></a></div>
            										<div class="s-blog-text">
            											<h4><a href="single-blog.html">women’s Fashion style 2016</a></h4>
            											<span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
            											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour....</p>
            										</div>
            										<div class="date-read clearfix">
            											<a href="#"><i class="mdi mdi-clock"></i> jun 15, 2016</a>
            											<a href="single-blog.html">read more</a>
            										</div>
            									</div>
            								</div>
            								<div class="col-sm-4">
            									<div class="l-blog-text">
            										<div class="banner"><a href="single-blog.html"><img src="{{ asset('font_end/img/blog/3.jpg') }}" alt="" /></a></div>
            										<div class="s-blog-text">
            											<h4><a href="single-blog.html">women’s winter Fashion style</a></h4>
            											<span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
            											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour....</p>
            										</div>
            										<div class="date-read clearfix">
            											<a href="#"><i class="mdi mdi-clock"></i> jun 22, 2016</a>
            											<a href="single-blog.html">read more</a>
            										</div>
            									</div>
            								</div>
            							</div>
            						</li>
            						<li>
            							<div class="row">
            								<div class="col-sm-4">
            									<div class="l-blog-text">
            										<div class="banner"><a href="single-blog.html"><img src="{{ asset('font_end/img/blog/3.jpg') }}" alt="" /></a></div>
            										<div class="s-blog-text">
            											<h4><a href="single-blog.html">women’s winter Fashion style</a></h4>
            											<span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
            											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour....</p>
            										</div>
            										<div class="date-read clearfix">
            											<a href="#"><i class="mdi mdi-clock"></i> jun 22, 2016</a>
            											<a href="single-blog.html">read more</a>
            										</div>
            									</div>
            								</div>
            								<div class="col-sm-4">
            									<div class="l-blog-text">
            										<div class="banner"><a href="single-blog.html"><img src="{{ asset('font_end/img/blog/1.jpg') }}" alt="" /></a></div>
            										<div class="s-blog-text">
            											<h4><a href="single-blog.html">Fashion style fine arts drawing</a></h4>
            											<span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
            											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour....</p>
            										</div>
            										<div class="date-read clearfix">
            											<a href="#"><i class="mdi mdi-clock"></i> jun 25, 2016</a>
            											<a href="single-blog.html">read more</a>
            										</div>
            									</div>
            								</div>
            								<div class="col-sm-4">
            									<div class="l-blog-text">
            										<div class="banner"><a href="single-blog.html"><img src="{{ asset('font_end/img/blog/2.jpg') }}" alt="" /></a></div>
            										<div class="s-blog-text">
            											<h4><a href="single-blog.html">women’s Fashion style 2016</a></h4>
            											<span>By : <a href="#">Rakib</a> | <a href="#">210 Like</a> | <a href="#">69 Comments</a></span>
            											<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour....</p>
            										</div>
            										<div class="date-read clearfix">
            											<a href="#"><i class="mdi mdi-clock"></i> jun 15, 2016</a>
            											<a href="single-blog.html">read more</a>
            										</div>
            									</div>
            								</div>
            							</div>
            						</li>
            					</ul>
            					<button id="load-more-blog">Load More</button>
            				</div>
            			</div>
            		</section>
            		<!-- blog section end -->
                    <!-- quick view start -->
            		<div class="product-details quick-view modal animated zoomInUp" id="quick-view">
            			<div class="container">
            				<div class="row">
            					<div class="col-xs-12">
            						<div class="d-table">
            							<div class="d-tablecell">
            								<div class="modal-dialog">
            									<div class="main-view modal-content">
            										<div class="modal-footer" data-dismiss="modal">
            											<span>x</span>
            										</div>
            										<div class="row">
            											<div class="col-xs-12 col-sm-5 col-md-4">
            												<div class="quick-image">
            													<div class="single-quick-image text-center">
            														<div class="list-img">
            															<div class="product-img tab-content">
            																<div class="simpleLens-container tab-pane fade in" id="sin-1">
            																	<div class="pro-type">
            																		<span>new</span>
            																	</div>
            																	<a class="simpleLens-image" data-lens-image="{{ asset('font_end/img/products/z1.jpg') }}" href="#"><img src="{{ asset('font_end/img/products/z1.jpg') }}" alt="" class="simpleLens-big-image"></a>
            																</div>
            																<div class="simpleLens-container tab-pane active fade in" id="sin-2">
            																	<div class="pro-type sell">
            																		<span>sell</span>
            																	</div>
            																	<a class="simpleLens-image" data-lens-image="{{ asset('font_end/img/products/z2.jpg') }}" href="#"><img src="{{ asset('font_end/img/products/z2.jpg') }}" alt="" class="simpleLens-big-image"></a>
            																</div>
            																<div class="simpleLens-container tab-pane fade in" id="sin-3">
            																	<div class="pro-type">
            																		<span>-15%</span>
            																	</div>
            																	<a class="simpleLens-image" data-lens-image="{{ asset('font_end/img/products/z3.jpg') }}" href="#"><img src="{{ asset('font_end/img/products/z3.jpg') }}" alt="" class="simpleLens-big-image"></a>
            																</div>
            																<div class="simpleLens-container tab-pane fade in" id="sin-4">
            																	<div class="pro-type">
            																		<span>new</span>
            																	</div>
            																	<a class="simpleLens-image" data-lens-image="{{ asset('font_end/img/products/z4.jpg') }}" href="#"><img src="{{ asset('font_end/img/products/z4.jpg') }}" alt="" class="simpleLens-big-image"></a>
            																</div>
            															</div>
            														</div>
            													</div>
            													<div class="quick-thumb">
            														<ul class="product-slider">
            															<li><a data-toggle="tab" href="#sin-1"> <img src="{{ asset('font_end/img/products/s1.jpg') }}" alt="quick view" /> </a></li>
            															<li class="active"><a data-toggle="tab" href="#sin-2"> <img src="img/products/s2.jpg" alt="small image" /> </a></li>
            															<li><a data-toggle="tab" href="#sin-3"> <img src="{{ asset('font_end/img/products/s3.jpg') }}" alt="small image" /> </a></li>
            															<li><a data-toggle="tab" href="#sin-4"> <img src="{{ asset('font_end/img/products/s4.jpg') }}" alt="small image" /> </a></li>
            														</ul>
            													</div>
            												</div>
            											</div>
            											<div class="col-xs-12 col-sm-7 col-md-8">
            												<div class="quick-right">
            													<div class="list-text">
            														<h3>men’s White t-shirt</h3>
            														<span>Summer men’s fashion</span>
            														<div class="ratting floatright">
            															<p>( 27 Rating )</p>
            															<i class="mdi mdi-star"></i>
            															<i class="mdi mdi-star"></i>
            															<i class="mdi mdi-star"></i>
            															<i class="mdi mdi-star-half"></i>
            															<i class="mdi mdi-star-outline"></i>
            														</div>
            														<h5><del>$79.30</del> $69.30</h5>
            														<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anything embarrassing hidden in the middle of text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            														<div class="all-choose">
            															<div class="s-shoose">
            																<h5>Color</h5>
            																<div class="color-select clearfix">
            																	<span></span>
            																	<span class="outline"></span>
            																	<span></span>
            																	<span></span>
            																</div>
            															</div>
            															<div class="s-shoose">
            																<h5>size</h5>
            																<div class="size-drop">
            																	<div class="btn-group">
            																		<button type="button" class="btn">XL</button>
            																		<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            																			<span class=""><i class="mdi mdi-chevron-down"></i></span>
            																		</button>
            																		<ul class="dropdown-menu">
            																			<li><a href="#">Xl</a></li>
            																			<li><a href="#">SL</a></li>
            																			<li><a href="#">S</a></li>
            																			<li><a href="#">L</a></li>
            																		</ul>
            																	</div>
            																</div>
            															</div>
            															<div class="s-shoose">
            																<h5>qty</h5>
            																<form action="#" method="POST">
            																	<div class="plus-minus">
            																		<a class="dec qtybutton">-</a>
            																		<input type="text" value="02" name="qtybutton" class="plus-minus-box">
            																		<a class="inc qtybutton">+</a>
            																	</div>
            																</form>
            															</div>
            														</div>
            														<div class="list-btn">
            															<a href="#">add to cart</a>
            															<a href="#">wishlist</a>
            															<a href="#">zoom</a>
            														</div>
            														<div class="share-tag clearfix">
            															<ul class="blog-share floatleft">
            																<li><h5>share </h5></li>
            																<li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
            																<li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
            																<li><a href="#"><i class="mdi mdi-linkedin"></i></a></li>
            																<li><a href="#"><i class="mdi mdi-vimeo"></i></a></li>
            																<li><a href="#"><i class="mdi mdi-dribbble"></i></a></li>
            																<li><a href="#"><i class="mdi mdi-instagram"></i></a></li>
            															</ul>
            														</div>
            													</div>
            												</div>
            											</div>
            										</div>
            									</div>
            								</div>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            		<!-- quick view end -->
                    <!-- footer section start -->
            		<footer>
            			<!-- brand logo area start -->
            			<div class="brand-logo">
            				<div class="container">
            					<div class="row">
            						<div class="col-xs-12">
            							<div class="barnd-bg">
            								<a href="#"><img src="{{ asset('font_end/img/brand/1.png') }}" alt="Brand Logo" /></a>
            								<a href="#"><img src="{{ asset('font_end/img/brand/2.png') }}" alt="Brand Logo" /></a>
            								<a href="#"><img src="{{ asset('font_end/img/brand/3.png') }}" alt="Brand Logo" /></a>
            								<a href="#"><img src="{{ asset('font_end/img/brand/4.png') }}" alt="Brand Logo" /></a>
            								<a href="#"><img src="{{ asset('font_end/img/brand/5.png') }}" alt="Brand Logo" /></a>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<!-- brand logo section end -->
            			<!-- social media section start -->
            			<div class="social-media section-padding">
            				<div class="container">
            					<div class="row">
            						<div class="col-sm-6">
            							<div class="social-icons">
            								<a href="#"><i class="mdi mdi-facebook"></i></a>
            								<a href="#"><i class="mdi mdi-twitter"></i></a>
            								<a href="#"><i class="mdi mdi-google-plus"></i></a>
            								<a href="#"><i class="mdi mdi-dribbble"></i></a>
            								<a href="#"><i class="mdi mdi-rss"></i></a>
            							</div>
            						</div>
            						<div class="col-sm-6">
            							<div class="newsletter">
            								<form action="http://preview.freethemescloud.com/sell-shop-preview/sell-shop/mail.php" method="post">
            									<input type="text" name="email" placeholder="Enter your email..."/>
            									<input type="submit" value="subscribe"/>
            								</form>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            			<!-- social media section end -->
      @endsection
