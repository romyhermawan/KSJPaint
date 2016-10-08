<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<!-- meta charec set -->
    <meta charset="utf-8">
	<!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- Page Title -->
    <title>KSJPaint Premium Shoe Paint</title>		
	<!-- Meta Description -->
    <meta name="description" content="Cat Sepatu Premium Indonesia Produk Lokal">
    <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation,shoe,paint,shoe paint,Ksj,yogyakarta">
    <meta name="author" content="Romy Hermawan">
	<!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Google Font -->
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- CSS
	================================================== -->
	<!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<!-- jquery.fancybox  -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}">
	<!-- animate -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
	<!-- media-queries -->
    <link rel="stylesheet" href="{{asset('css/media-queries.css')}}">
   <!--  <link rel="stylesheet" type="text/css" href="jssor/css/jssor.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/modified.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fullslider/css/fullslider.css')}}">
    
    <!-- Essential jQuery Plugins
	================================================== -->
	<!-- Main jQuery -->
    <!-- <script src="js/jquery-1.11.1.min.js"></script> -->
	<!-- Single Page Nav -->
    <script src="{{asset('jssor/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
   <!--  <script src="jssor/js/jssor.slider-21.1.5.mini.js" type="text/javascript"></script>
    <script src="jssor/js/mainjssor.js" type="text/javascript"></script> -->
    <script src="{{asset('fullslider/js/jssor.slider-21.1.6.mini.js')}}" type="text/javascript"></script>
    <script src="{{asset('fullslider/js/fullslider.js')}}" type="text/javascript"></script>

	<!-- Modernizer Script for old Browsers -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/modified.js')}}"></script>
    <script src="{{asset('js/jquery.singlePageNav.min.js')}}"></script>
	<!-- Twitter Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- jquery.fancybox.pack -->
    <script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
	<!-- jquery.mixitup.min -->
    <script src="{{asset('js/jquery.mixitup.min.js')}}"></script>
	<!-- jquery.parallax -->
    <script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
	<!-- jquery.countTo -->
    <script src="{{asset('js/jquery-countTo.js')}}"></script>
	<!-- jquery.appear -->
    <script src="{{asset('js/jquery.appear.js')}}"></script>
	<!-- Contact form validation -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
	<!-- Google Map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<!-- jquery easing -->
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
	<!-- jquery easing -->
    <script src="{{asset('js/wow.min.js')}}"></script>
	<script>
		var wow = new WOW ({
			boxClass:     'wow',      // animated element css class (default is wow)
			animateClass: 'animated', // animation css class (default is animated)
			offset:       120,          // distance to the element when triggering the animation (default is 0)
			mobile:       false,       // trigger animations on mobile devices (default is true)
			live:         true        // act on asynchronously loaded content (default is true)
		  }
		);
		wow.init();

		function redirectTo(url){
			window.location.href = "/"+url;
		}
	</script> 
	<!-- Custom Functions -->
    <script src="{{asset('js/custom.js')}}"></script>
  	<script src="{{asset('js/customHome.js')}}"></script>
  
	
</head>

<body id="body">

	<!-- preloader -->
	<div id="preloader">
		<img src="{{asset('img/preloader.gif')}}" alt="Preloader">
	</div>
	<!-- end preloader -->

    <!-- 
    Fixed Navigation
    ==================================== -->
    <header id="navigation" class="navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-2x"></i>
                </button>
				<!-- /responsive nav button -->
				
				<!-- logo -->
                <a class="navbar-brand" href="#body">
					<h1 id="logo">
						<img src="{{asset('img/logo.png')}}" alt="Brandi">
					</h1>
				</a>
				<!-- /logo -->
            </div>

			<!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="#body">Home</a></li>
                    <li><a href="#about">About KSJ</a></li>
                    <li><a href="#why">Why KSJ?</a></li>
                    <li><a href="#location">Location</a></li>
		  
                    <li><a class="dropbtn" href="#" onclick="myFunction()">More <i class="fa fa-caret-down"></i> </a> 
            		<div id="myDropdown" class="dropdown-content">
					    <a href="/product" style="color:black;border:none" onclick='redirectTo("product")'>Product</a>
					    <a href="/tutorial" style="color:black;border:none" onclick='redirectTo("tutorial")'>Tutorial</a>
					    <a href="/gallery" style="color:black;border:none" onclick='redirectTo("gallery")'>Gallery</a>
					    <a href="/faq" style="color:black;border:none" onclick='redirectTo("faq")'>FAQ</a>
		  			</div>

                    </li>
                </ul>
            </nav>
			<!-- /main nav -->
			
        </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->

    <!--
    Home Slider
    ==================================== -->
	
	<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 650px; overflow: hidden; visibility: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position:absolute;display:block;background:url('fullslider/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
    </div>
    <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 650px; overflow: hidden;">
        <div data-p="225.00" style="display: none;">
            <img data-u="image" src="fullslider/img/red.jpg" />
            <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
            <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Build your slider with anything, includes image, content, text, html, photo, picture</div>
            <div data-u="caption" data-t="0" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                <img style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" src="fullslider/img/c-phone-horizontal.png" />
                <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                    <img data-u="caption" data-t="1" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" src="fullslider/img/c-slide-1.jpg" />
                    <img data-u="caption" data-t="2" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" src="fullslider/img/c-slide-3.jpg" />
                </div>
                <img style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" src="fullslider/img/c-navigator-horizontal.png" />
                <img data-u="caption" data-t="3" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" src="fullslider/img/c-finger-pointing.png" />
            </div>
        </div>
        <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
        <div data-p="225.00" style="display: none;">
            <img data-u="image" src="fullslider/img/purple.jpg" />
        </div>
        <div data-p="225.00" data-po="80% 55%" style="display: none;">
            <img data-u="image" src="fullslider/img/blue.jpg" />
        </div>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
        <!-- bullet navigator item prototype -->
        <div data-u="prototype" style="width:16px;height:16px;"></div>
    </div>
    <!-- Arrow Navigator -->
    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
    <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
</div>
<!-- #endregion Jssor Slider End -->
    <!--
    End Home SliderEnd
    ==================================== -->
	
    <!--
    Features
    ==================================== -->

		<div class="container about" id="about">
			<div class="row">
				<div class="intro text-left col-md-6">
					<div class="sec-title text-left">
						<h2>Apa sih Ksj?</h2>
						<hr>
					</div>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-md-6">
					<!-- 555px x 555px -->
					<img src="http://andrrows.com.au/wp-content/uploads/2015/02/IMG_3943.jpg" alt="" class="img-responsive">
				</div>
				
			</div>
		</div>
	
	<!-- why choose ksj -->
	<section>
		<div class="container why" id="why">
			<div class="row">
				<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
					<h2>Mengapa Memilih KSJ?</h2>
					<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
				</div>

				<!-- service item -->
				<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-github fa-2x"></i>
						</div>
						
						<div class="service-desc">
							<h3>Banyak Pilihan Warna</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
						</div>
					</div>
				</div>
				<!-- end service item -->
				
				<!-- service item -->
				<div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-pencil fa-2x"></i>
						</div>
						
						<div class="service-desc">
							<h3>Tahan Lama</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
						</div>
					</div>
				</div>
				<!-- end service item -->
				
				<!-- service item -->
				<div class="col-md-4 wow fadeInRight" data-wow-duration="500ms"  data-wow-delay="900ms">
					<div class="service-item">
						<div class="service-icon">
							<i class="fa fa-bullhorn fa-2x"></i>
						</div>
						
						<div class="service-desc">
							<h3>Mudah Digunakan</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
						</div>
					</div>
				</div>
				<!-- end service item -->
					
			</div>
		</div>
	</section>
	<!-- end of why choose ksj -->
    <!--
    End Features
    ==================================== -->





	<!-- 		maps -->
	<section id="location" class="location">
		<div class="container">
		<div class="sec-title text-center titleH2">
			<h2>Our Location</h2>
		</div>
			<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 divMaps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63252.644461067845!2d110.42079196038046!3d-7.759007354511946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5a49a33def47%3A0x5027a76e3569610!2sPurwomartani%2C+Kalasan%2C+Kabupaten+Sleman%2C+Daerah+Istimewa+Yogyakarta%2C+Indonesia!5e0!3m2!1sid!2s!4v1474947253500" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 divMaps">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7919.22143706638!2d110.4139907708237!3d-7.054944231977497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bfde7bdb121%3A0xf48f5e35cbf6963b!2sOfficial+Store+Clean+Your+Shoes!5e0!3m2!1sid!2s!4v1474946943800" width="450" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</section>

	<!-- end maps -->


	


	<!-- video -->
	<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div style="background:url('http://img.youtube.com/vi/sGlNYn-ky3Q/mqdefault.jpg');" class="youtube-vid">
					<div class="icon-play">
	                    <a href="https://www.youtube.com/watch?v=sGlNYn-ky3Q" target="_blank"><img src="https://cdn2.iconfinder.com/data/icons/perfect-flat-icons-2/512/Play_button_next_stop_music_pause.png" width="64" height="64" style="opacity: 0.9"></a>
	                </div>
            	</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div style="background:url('http://img.youtube.com/vi/9EbWtpYMMds/mqdefault.jpg');" class="youtube-vid">
					<div class="icon-play">
	                    <a href="https://www.youtube.com/watch?v=9EbWtpYMMds" target="_blank"><img src="https://cdn2.iconfinder.com/data/icons/perfect-flat-icons-2/512/Play_button_next_stop_music_pause.png" width="64" height="64" style="opacity: 0.9"></a>
	                </div>
            	</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div style="background:url('http://img.youtube.com/vi/I4uRMEU7g8s/mqdefault.jpg');" class="youtube-vid">
					<div class="icon-play">
	                    <a href="https://www.youtube.com/watch?v=I4uRMEU7g8s" target="_blank"><img src="https://cdn2.iconfinder.com/data/icons/perfect-flat-icons-2/512/Play_button_next_stop_music_pause.png" width="64" height="64" style="opacity: 0.9"></a>
	                </div>
            	</div>
			</div>
		</div>
	</div>
	</section>
	<!-- end of video -->
	<!--
    Some fun facts
    ==================================== -->		
	
	<section id="facts" class="facts">
		<div class="parallax-overlay">
			<div class="container">
				<div class="row number-counters">
					
					<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
						<h2>Our Social</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<!-- first count item -->
					<div class="col-md-4 col-sm-4 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
						<div class="counters-item">
							<img src="img/wa.png">
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>081231586221</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="counters-item">
							<img src="img/ig.png">
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>@Ksj.official</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="counters-item">
							<img src="img/line.png">
							<!-- Set Your Number here. i,e. data-to="56" -->
							<p>@ksj.paint</p>
						</div>
					</div>
					<!-- end first count item -->
			
				</div>
			</div>
		</div>
	</section>
	
    <!--
    End Some fun facts
    ==================================== -->
	
	
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
			
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
					<div class="footer-single">
						<img src="img/footer-logo.png" alt="">
						<p>eusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
			
				<div class="col-md-3 col-sm-3 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
					<div class="footer-single">
						<h6>Subscribe </h6>
						<form action="#" class="subscribe">
							<input type="text" name="subscribe" id="subscribe">
							<input type="submit" value="&#8594;" id="subs">
						</form>
						<p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
				</div>
			
				<div class="col-md-5 col-sm-5 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
					<div class="footer-single">
						<div class="col-md-4">
							<h6>Menu</h6>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Product</a></li>
								<li><a href="#">Tutorial</a></li>
								<li><a href="#">Gellery</a></li>
							</ul>
						</div>
						<div class="col-md-8">
							<h6 style="margin-bottom: 3px">Workshop KSJ Paint</h6>
							<p>Purwomartani, Kalasan Sleman Yogyakarta</p>
							<br>
							<h6 style="margin-bottom: 3px">CLEAN YOUR SHOES</h6>
							<p>Jl. Srondol bumi indah no.3
							Ngesrep, banyumanik, semarang
							(Depan smp negeri 27)</p>
						</div>
					</div>

				</div>
			
				<!-- <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
					<div class="footer-single">
						<h6>Social</h6>
						<ul>
							<li><a href="#">Instagram</a></li>
							<li><a href="#">Market Blog</a></li>
							<li><a href="#">Help Center</a></li>
							<li><a href="#">Pressroom</a></li>
						</ul>
					</div>
				</div> -->
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="copyright">
						Copyright © 2015 <a href="http://themefisher.com/">Themefisher</a>. All rights reserved. Designed & developed by <a href="http://themefisher.com/">Themefisher</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	
	<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

	
    
</body>
</html>
