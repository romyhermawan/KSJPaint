@extends('Master.MasterBack')
@section('content')

	<div class="text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
				  <h2>Change Password</h2>
				  <form role="form" action="/changepass" method="post" >
				    <div class="form-group">
				      <label for="pwd"></label>
				      <input type="password" class="form-control" name="old" placeholder="Old Password">
				    </div>
				    <div class="form-group">
				      <input type="password" class="form-control" name="new" placeholder="New Password">
				    </div>
				    <div class="form-group">
				      <input type="password" class="form-control" name="confirm" placeholder="Confirmation New Password">
				    </div>
				    @if (Session::has('message'))
						<div class="alert alert-danger">{{ Session::get('message') }}</div>
					@endif
					@if (Session::has('success'))
						<div class="alert alert-info">{{ Session::get('success') }}</div>
					@endif
				    <input type="submit" class="btn btn-info btn-lg" value="Submit">
				    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				  </form>
				 </div>
			 </div>
		 </div>
	</div>

@stop()