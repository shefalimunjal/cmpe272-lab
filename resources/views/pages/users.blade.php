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

	<div style="text-align: center; max-width: 1080px; margin: auto; margin-top:50px; ">
		<h4 style="margin: auto; margin-bottom: 30px;">Users</h4>

		<table class="table table-striped table-bordered table-condensed">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Username</th>
            <th>Home Address</th>
            <th>Home Phone</th>
            <th>Cell Phone</th>
        </tr>
    </thead>

    <tbody>
    	<?php
			foreach ($users as &$user) {
    			echo "<tr>
            			<td>".$user->first_name."</td>
            			<td>".$user->last_name."</td>
            			<td>".$user->email."</td>
            			<td>".$user->user_name."</td>
            			<td>".$user->home_address."</td>
            			<td>".$user->home_phone."</td>
            			<td>".$user->cell_phone."</td>
        			</tr>";
			}
		?>
    </tbody>
</table>
	</div>
@stop