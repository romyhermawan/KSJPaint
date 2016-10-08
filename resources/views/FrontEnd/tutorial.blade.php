@extends('Master.MasterFront')

@section('link')

@stop()

@section('script')
    
@stop()

@section('content')
    <!--tabs-->
	<section id="tutorial" class="tutorial">
		<div class="container">
		<div class="sec-title text-center titleH2 wow bounceInDown animated" data-wow-duration="500ms">
					<h2>Tutorial</h2>
				</div>
		  <ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#home">Canvas</a></li>
		    <li><a data-toggle="tab" href="#menu1">Suede</a></li>
		    <li><a data-toggle="tab" href="#menu2">Leather</a></li>
		  </ul>

		  <div class="tab-content">
		    <div id="home" class="tab-pane fade in active">
		    <div class="col-md-4">
		    	<img class="img-responsive" src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/11265077_1461445047513521_1594237820_n.jpg?ig_cache_key=MTA0NDgzMjM1NzY3MDY2OTg5Ng%3D%3D.2">
		    </div>
		    <div class="col-md-8">
		    	<h4 class="header">Step 1</h4>
		    	<p class="pStep">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    </div>
		      
		    </div>
		    <div id="menu1" class="tab-pane fade">
		      
		      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    </div>
		    <div id="menu2" class="tab-pane fade">
		      
		      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		    </div>
		    <div id="menu3" class="tab-pane fade">
		      
		      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
		    </div>
		  </div>
		</div>
	</section>
	<!--end tabs-->
@stop()