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
						<article id="post-12" class="post-12 page type-page status-publish hentry">
							<header class="entry-header">
								<h1 class="title-post entry-title"><?php print_r($product->name); ?></h1>	
							</header><!-- .entry-header -->

							<div class="entry-content" style="display: inline-block; background-color: #f7f8f9;">
								<?php
										echo '<img src="'.$product->url.'" alt="Smiley face" height="300" width="300" style="display: inline-block;">';
										echo '<p style="width: 300px; text-align:justify; padding: 10px;">'.$product->full_description.'</p>';
								?>
							</div><!-- .entry-content -->
						</article><!-- #post-## -->
					</main><!-- #main -->

				</div><!-- #primary -->

			</div> <!-- #row -->
		</div>
	</div><!-- #content -->
@stop