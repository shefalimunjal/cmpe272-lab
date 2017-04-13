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

	<div style="width: 300px; margin: auto; margin-top:100px; text-align: center;">

		<h4 style="margin: auto;">Search User</h4>

		<form action="/users/search_results" method="get" style="margin-top: 20px;, width: 100%;">
			<select class="selectpicker" name="field" style="width: 100%;">
  				<option>first_name</option>
  				<option>last_name</option>
  				<option>user_name</option>
  				<option>email</option>
  				<option>home_address</option>
  				<option>home_phone</option>
  				<option>cell_phone</option>
			</select>

  			<div class="form-group" style="margin-top: 20px;">
    			<input type="text" class="form-control" name="value" placeholder="search term">
  			</div>
  			<button type="submit" class="btn btn-warning" style="width: 150px;">Search</button>
		</form>
	</div>
@stop