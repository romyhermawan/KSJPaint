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
    <link rel="stylesheet" type="text/css" href="{{asset('css/modified.css')}}">
    @yield('link')



    <script src="{{asset('jssor/js/jquery-1.11.3.min.js')}}" type="text/javascript"></script>


	<!-- Modernizer Script for old Browsers -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/modified.js')}}"></script>

    <!-- Essential jQuery Plugins
	================================================== -->
	<!-- Main jQuery -->
    <!-- <script src="js/jquery-1.11.1.min.js"></script> -->
	<!-- Single Page Nav -->
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
		$(document).ready(function(){
			$("#navigation").css("background-color","#0EB493");
		});
		
	</script> 
	<!-- Custom Functions -->
    <script src="{{asset('js/custom.js')}}"></script>
    @yield('script')
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
                <a class="navbar-brand" href="/">
					<h1 id="logo">
						<img src="{{asset('img/logo.png')}}" alt="Brandi">
					</h1>
				</a>
				<!-- /logo -->
            </div>

			<!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="/">Home</a></li>
                    <li><a href="/product">Product</a></li>
                    <li><a href="/tutorial">Tutorial</a></li>
                    <li><a href="/gallery">Gallery</a></li>
		  			<li><a href="/faq">FAQ</a></li>
                </ul>
            </nav>
			<!-- /main nav -->
			
        </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->

    <!-- start isi -->
    @yield('content')

    <!-- end of isi -->


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
