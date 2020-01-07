@extends('layouts.mainlayout')
@section('content')

<div class="overlay overlay-boxify">
	<nav>
		<ul>
			<li><a  href="#about"><i class="fa fa-heart"></i>About Us</a></li>	
			
			<li><a href="#features"><i class="fa fa-flash"></i>Features</a></li>
		</ul>
		<ul>
			<li><a href="#screenshots"><i class="fa fa-desktop"></i>Screenshots</a></li>
			<li><a href="#download"><i class="fa fa-download"></i>Download</a></li>
		</ul>
	</nav>
</div>

<section class="video" id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1><a href="http://www.youtube.com/embed/9No-FiEInLA?autoplay=1&wmode=opaque&fs=1" class="youtube-media"><i class="fa fa-play-circle-o"></i> Watch the Video</a></h1>
			</div>
		</div>
	</div>
</section>
<section class="features-intro">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 nopadding features-intro-img">
			<div class="features-bg">
				<div class="texture-overlay"></div>
				<div class="features-img wp1">
					<img src="{{ URL::asset('assets/img/html5-logo.png') }}" alt="HTML5 Logo">
				</div>
			</div>
		</div>
		<div class="col-md-6 nopadding">
			<div class="features-slider">
					<ul class="slides" id="featuresSlider">
						<li>
							<h1>The Fore-front of Design &amp; Technology</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						</li>
						<li>
							<h1>Multi-Purpose User Centric Design</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						</li>
						<li>
							<h1>Made with Love, Released for Free</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						</li>
					</ul>
			</div>
		</div>
	</div>
</div>
</section>
		<section class="features-list" id="features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="col-md-4 feature-1 wp2">
							<div class="feature-icon">
								<i class="fa fa-desktop"></i>
							</div>
							<div class="feature-content">
								<h1>Responsive</h1>
								<p>Built using HTML5/CSS3 and jQuery, and built using one of the world's most powerful CSS frameworks available, Bootstrap.</p>
							</div>
						</div>
						<div class="col-md-4 feature-2 wp2 delay-05s">
							<div class="feature-icon">
								<i class="fa fa-flash"></i>
							</div>
							<div class="feature-content">
								<h1>Multi-Purpose</h1>
								<p>Perfect if you run your own start-up, product or service. Boxify can showcase your business converting your visits to income.</p>
							</div>
						</div>
						<div class="col-md-4 feature-3 wp2 delay-1s">
							<div class="feature-icon">
								<i class="fa fa-heart"></i>
							</div>
							<div class="feature-content">
								<h1>Absolutely Free</h1>
								<p>As aways, download Boxify for free exclusively from Codrops. If you love Boxify and want to thank me, simply.</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<section class="showcase">
			<div class="showcase-wrap">
				<div class="texture-overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="device wp3">
								<div class="device-content">
									<div class="showcase-slider">
										<ul class="slides" id="showcaseSlider">
											<li>
												<img src="{{ URL::asset('assets/img/screen1.jpg') }}" alt="Device Content Image">
											</li>
											<li>
												<img src="{{ URL::asset('assets/img/screen2.jpg') }}" alt="Device Content Image">
											</li>
											<li>
												<img src="{{ URL::asset('assets/img/screen3.jpg') }}" alt="Device Content Image">
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<h1>Showcase your Product or Service</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
							<blockquote class="team-quote">
								<div class="avatar"><img src="{{ URL::asset('assets/img/avatar.png') }}" alt="User Avatar"></div>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc." - Steve Jobs</p>
								<div class="logo-quote">
									<a href="#"><img src="{{ URL::asset('assets/img/codrops-logo.png') }}" alt="Codrops Logo"></a>
								</div>
							</blockquote>
							<a href="{{ url('/print-pdf') }}" class="download-btn">Download! <i class="fa fa-download"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="screenshots-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Packed Full of Powerful Features</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
						<p><a href="#screenshots" class="arrow-btn">See the screenshots! <i class="fa fa-long-arrow-right"></i></a></p>
					</div>
				</div>
			</div>
		</section>
		<section class="screenshots" id="screenshots">
			<div class="container-fluid">
				<div class="row">
					<ul class="grid">
						<li>
							<figure>
								<img src="{{ URL::asset('assets/img/01-screenshot.jpg') }}" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="{{ URL::asset('assets/img/large/01.jpg') }}" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Optimised For Design</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('assets/img/02-screenshot.jpg') }}" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="{{ URL::asset('assets/img/large/02.jpg') }}" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>User Centric Design</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('assets/img/03-screenshot.jpg') }}" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="{{ URL::asset('assets/img/large/03.jpg') }}" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Responsive and Adaptive</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('assets/img/04-screenshot.jpg') }}" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="{{ URL::asset('assets/img/large/04.jpg') }}" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Absolutely Free</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<div class="row">
					<ul class="grid">
						<li>
							<figure>
								<img src="{{ URL::asset('assets/img/05-screenshot.jpg') }}" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="{{ URL::asset('assets/img/large/05.jpg') }}" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Multi-Purpose Design</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('assets/img/06-screenshot.jpg') }}" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="{{ URL::asset('assets/img/large/06.jpg') }}" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Exclusive to Codrops</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('assets/img/07-screenshot.jpg') }}" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="{{ URL::asset('assets/img/large/07.jpg') }}" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>Made with Love</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="{{ URL::asset('assets/img/08-screenshot.jpg') }}" alt="Screenshot 01">
								<figcaption>
								<div class="caption-content">
									<a href="{{ URL::asset('assets/img/large/08.jpg') }}" class="single_image">
										<i class="fa fa-search"></i><br>
										<p>In Sydney, Australia</p>
									</a>
								</div>
								</figcaption>
							</figure>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<section class="download" id="download">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center wp4">
						<h1>Seen Enough?</h1>
						<a href="{{ url('/download') }}" class="download-btn">Download! <i class="fa fa-download"></i></a>
					</div>
				</div>
			</div>
		</section>

@stop