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

    <div class="entry-content">
		<p>Mary Smith<br />
John Wang<br />
Alex Bington<br />
Shefali Munjal<br />
Rency Joseph<br />
Abhishek Munjal</p>
			</div><!-- .entry-content -->

	<footer class="entry-footer">
			</footer><!-- .entry-footer -->
</article><!-- #post-## -->

				
			
		</main><!-- #main -->
	</div><!-- #primary -->

			</div>
		</div>
	</div><!-- #content -->
@stop