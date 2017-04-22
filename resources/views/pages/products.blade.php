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

    <div id="content" class="page-wrap" style="display:inline-block;">
    	<div style="width: 200px; height: 200px; float: left; margin-top: 100px; text-align: center;">
    		<a style="font-size: 18px; margin-bottom: 5px;" href="/products">All Products</a></br>
    		<a style="font-size: 18px; margin-bottom: 5px;" href="/products/recent">5 Most Recent</a></br>
    		<a style="font-size: 18px; margin-bottom: 5px;" href="/products/most_visited">5 Frequently Visited</a>
    	</div>

		<div class="container content-wrapper" style="float: left;">
			<div class="row">

				<div id="primary" class="content-area col-md-12" style="display:inline-block;">
					<main id="main" class="post-wrap" role="main">
						<article id="post-12" class="post-12 page type-page status-publish hentry">
							<header class="entry-header">
								<h1 class="title-post entry-title"><?php echo($title)?></h1>	
							</header><!-- .entry-header -->


							<div class="entry-content">
								<p>
									<?php
										foreach ($products as &$product) {
    										echo ('<a href="/products/'.$product->id.'"><div onclick="location.href=\'/products/'.$product->id.'\'" class="entry-content" style="display: inline-block; background-color: #f7f8f9; margin-right: 30px; margin-bottom:30px; vertical-align:top;">
												<img src="'.$product->url.'" alt="Smiley face" height="300" width="300" style="display: inline-block;">
												<p style="color:white; text-align:center; margin-top: -30px; font-size:18px;">'.$product->name.'</p>
												<p style="width: 300px; text-align:justify; padding: 10px;">'.$product->short_description.'</p>
											</div></a>');

										}
									?>
								</p>
							</div><!-- .entry-content -->
						</article><!-- #post-## -->
					</main><!-- #main -->

				</div><!-- #primary -->

			</div> <!-- #row -->
		</div>
	</div><!-- #content -->
@stop