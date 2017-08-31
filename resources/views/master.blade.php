<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', $title ?: 'Website') ~ Tilde</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:300&amp;subset=latin,latin-ext">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700&amp;subset=latin,latin-ext">
	<link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
	    $(document).ready(function(){
	        $('#res-menu').on('click', function(e){
	            e.preventDefault();
	            $('header nav').slideToggle('slow');
	        });
	    });
	</script>
</head>
<body class="{{ Request::segment(1) ?: 'home' }}">
	<header>
		<div class="content clearfix">
			<h1>
				<a href="#"><img src="img/logo.png" alt="Logo"></a>
			</h1>
			<a href="#" id="res-menu">Menu</a>
			<nav>
				<ul>
					@foreach ( $nav_links as $path => $name )
						<li>
							@if ( trim($path, '/') == Request::segment(1) )

								<a href="{{ url( $path ) }}"  class="active" >{{ $name }}</a>

							@else

								<a href="{{ url( $path ) }}" >{{ $name }}</a>

							@endif
						</li>
					@endforeach
				</ul>
				<!--
					<li><a href="index.html" class="active">About us</a></li>
					<li><a href="consulting.html">Consulting</a></li>
					<li><a href="training.html">Training</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul-->
			</nav>
		</div>
	</header>

	<main>
		<section id="sec-1">
			<div class="content">
				@yield('content')
			</div>
		</section>

		<section id="sec-2">
			<div class="content">
				<h1>You may recognize us from around town</h1>
				<ul>
					<li><a href="" target="_blank"><img src="img/rails.png" alt="Logo"></a></li>
					<li><a href="" target="_blank"><img src="img/jquery.png" alt="Logo"></a></li>
					<li><a href="" target="_blank"><img src="img/ember.png" alt="Logo"></a></li>
					<li><a href="" target="_blank"><img src="img/handlebars.png" alt="Logo"></a></li>
					<li><a href="" target="_blank"><img src="img/bundler.png" alt="Logo"></a></li>
				</ul>
			</div>
		</section>

		<section id="sec-3">
			<div class="content">
				<h1><span>What We Do</span></h1>
				<div class="sec-3 clearfix">
					<div class="col">
						<img src="img/consulting.png" alt="">
						<h3>Ember.js &amp; Product Consulting</h3>
						<p>We can handle the most challenging technical problems, and we've also got architecture, product and marketing chops.</p>
						<a href="#">Learn about our process</a>
					</div>
					<div class="col">
						<img src="img/engagements.png" alt="">
						<h3>Training &amp; Speaking Engagements</h3>
						<p>We offer public, private and group training classes for Ember.js, Ruby on Rails and JavaScript. We also speak at industry conferences.</p>
						<a href="#">View our upcoming schedule</a>
					</div>
					<div class="col">
					<img src="img/open-source.png" alt="">
						<h3>Open Source Development</h3>
						<p>
							We’ve created and made contributions to some of the most notable and successful open-source projects in the world.
						</p>
						<a href="#">See what we've done</a>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<div class="content">
			<nav>
				<ul>
					<li><a href="">About Us</a></li>
					<li><a href="">Consulting</a></li>
				</ul>
				<a id="footer-logo" href=""><img src="img/logo-footer.png" alt=""></a>
				<ul>
					<li><a href="">Training</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</nav>
			<p>Copyright 2015 Tilde Inc.</p>
		</div>
	</footer>
</body>
</html>