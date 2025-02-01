@extends('frontend.layout.app')
@section('content')

			<!-- Section Started -->
			<div class="section started" id="section-started">

				<!-- background -->
				<div class="video-bg">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>

					<!-- slider -->
					<div class="started-carousel">
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide first">
									<div class="main-img" style="background-image: url('{{ asset('assets/images/started_image.jpg') }}');"></div>
								</div>
								<div class="swiper-slide">
									<div class="main-img" style="background-image: url('{{ asset('assets/images/started_image2.jpg') }}');"></div>
								</div>
								<div class="swiper-slide">
									<div class="main-img" style="background-image: url('{{ asset('assets/images/started_image3.jpg') }}');"></div>
								</div>
								<div class="swiper-slide">
									<div class="main-img" style="background-image: url('{{ asset('assets/images/started_image4.jpg') }}');"></div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- slider navigation -->
				<div class="swiper-nav">
					<a class="prev swiper-button-prev fas fa-long-arrow-alt-left"></a>
					<a class="next swiper-button-next fas fa-long-arrow-alt-right"></a>
				</div>

				<!-- started content -->
				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<h1 class="h-title">
								Hello, I’m <strong>Alejandro Abeyta</strong>, UX/UI Designer and <br />
								Front-end Developer Based in San Francisco.
							</h1>
							<div class="h-subtitle typing-subtitle">
								<p>I code cool <strong>websites</strong></p>
								<p>I develop <strong>mobile apps</strong></p>
								<p>I love <strong>wordpress</strong></p>
							</div>
							<span class="typed-subtitle"></span>
						</div>
					</div>
				</div>

			</div>
            @endsection
