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

	<div style="margin:auto; margin-top:100px; width: 300px;">
		<div><button type="button" class="btn btn-success" style="margin-top: 20px; width: 100%;" onclick="location.href='/users/new';" href="/users/new">Create User</button></div>
		<div><button type="button" class="btn btn-warning" style="margin-top: 20px; width: 100%;" onclick="location.href='/users/search';" href="/users/search">Search User</button></div>
		<div><button type="button" class="btn btn-danger"  style="margin-top: 20px; width: 100%;" onclick="location.href='/users';" href="/users">List all users</button></div>
		<div><button type="button" class="btn btn-info"  style="margin-top: 20px; width: 100%;" onclick="location.href='/users/marketplace';" href="/users">All users from marketplace</button></div>
	</div>
@stop