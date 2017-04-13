@extends('layouts.default')
@section('head')
	<link rel='stylesheet' id='dashicons-css'  href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css' media='all' />

	<style type="text/css">
		.header-image {
			background-image: url(https://cafesocial.000webhostapp.com/wp-content/themes/sydney/images/header.jpg);
			display: block;
		}
		@media only screen and (max-width: 1024px) {
			.header-inner {
				display: block;
			}
			.header-image {
				background-image: none;
				height: auto !important;
			}		
		}
	</style>
@stop

@section('content')
	<div class="sydney-hero-area">
		<div class="header-image">
			<div class="overlay"></div>	
			<img class="header-inner" src="https://cafesocial.000webhostapp.com/wp-content/themes/sydney/images/header.jpg" width="1920" alt="cafesocial" title="cafesocial">
		</div>
	</div>

	<div style="max-width: 400px; margin: auto; margin-top:100px; ">
		<?php
			if ($success) {
				echo "<div class=\"alert alert-success fade in\">New user successfuly created!</div>";
			}
		?>

		<form action="/users/create" method="post">
  			<div class="form-group">
    			<input type="text" class="form-control" name="first_name" placeholder="First name">
  			</div>
  			<div class="form-group">
    			<input type="text" class="form-control" name="last_name" placeholder="Last Name">
  			</div>
  			<div class="form-group">
    			<input type="text" class="form-control" name="user_name" placeholder="User Name">
  			</div>
  			<div class="form-group">
    			<input type="email" class="form-control" name="email" placeholder="Email">
  			</div>
  			<div class="form-group">
    			<input type="text" class="form-control" name="home_address" placeholder="Home Address">
  			</div>
  			<div class="form-group">
    			<input type="text" class="form-control" name="home_phone" placeholder="Home Phone">
  			</div>
  			<div class="form-group">
    			<input type="text" class="form-control" name="cell_phone" placeholder="Cell Phone">
  			</div>
  			<button type="submit" class="btn btn-default">Create</button>
		</form>
	</div>
@stop