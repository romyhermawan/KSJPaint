<!DOCTYPE html>
<html>
<head>
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('ckeditor/styles.js')}}"></script>
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('datatable/jquery.dataTables.min.css')}}">

    <script>
    $(document).ready(function() {
        $('#myTable2').dataTable();
    } );
    </script>  
	
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
        <div class="col-md-12 col-xs-12">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="/adminpanel">Admin</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="/adminpanel">Home</a></li>
	         <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Header<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="/master/slider">Slider</a></li>
	            <li><a href="/master/logo">Logo</a></li>
	            <li><a href="/master/contactus">Contact</a></li>
	            <li><a href="/master/caraorder">Cara Order</a></li>
	          </ul>
	        </li>
	        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="/master/addbarang">Tutorial</a></li>
	            <li><a href="/master/viewbarang">FAQ</a></li>
	            <li><a href="/master/kategory">Videos</a></li>
	            <li><a href="/master/kategory">Products</a></li>
	          </ul>
	        </li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="/changepass"><span class="glyphicon glyphicon-pencil"></span> ChangePassword</a></li>
	        <li><a href="/logoutadmin"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	      </ul>
	    </div>
	    </div>
	  </div>
	</nav>
</head>
<body>

	@yield('content')
     
    
</body>
</html>