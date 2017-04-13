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

		<form action="/users/search_results" method="get">
			<select class="selectpicker" name="field">
  				<option>first_name</option>
  				<option>last_name</option>
  				<option>user_name</option>
  				<option>email</option>
  				<option>home_address</option>
  				<option>home_phone</option>
  				<option>cell_phone</option>
			</select>

  			<div class="form-group">
    			<input type="text" class="form-control" name="value" placeholder="search term">
  			</div>
  			<button type="submit" class="btn btn-default">Search</button>
		</form>
	</div>
@stop