@extends('layouts.default')
@section('head')
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

    <div id="content" class="page-wrap">
		<div class="container content-wrapper">
			<div class="row">	
	<div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">

			
				
<article id="post-58" class="post-58 page type-page status-publish hentry">
	<header class="entry-header">
		<h1 class="title-post entry-title">Admin login</h1>	</header><!-- .entry-header -->

	<div class="entry-content">
		<form action="/authenticate" method="post">
  			Username:<br />
  			<input type="text" name="username" style="margin-bottom: 20px;"><br />
  			Password:<br />
  			<input type="password" name="password"><br />
 			<input type='submit' value='Login' style= "margin-top: 20px;" /><br />
		</form>
	</div><!-- .entry-content -->
	
</article><!-- #post-## -->

				
			
		</main><!-- #main -->
	</div><!-- #primary -->

			</div>
		</div>
	</div><!-- #content -->
@stop