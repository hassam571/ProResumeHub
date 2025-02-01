@extends('frontend.layout.app')
@section('content')
			<!-- Section Started -->
			<div class="section started layout-creative" id="section-started">

				<!-- background -->
				<div class="video-bg">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
				</div>

				<!-- started content -->
				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<h1 class="h-title">Shot in Iceland</h1>
							<div class="h-subtitles">
								<div class="h-subtitle typing-bread">
									<p class="breadcrumbs">
										<a href="{{ route('index') }}">Home</a> / <a href="{{ route('works') }}">Works</a> / Shot in Iceland
									</p>
								</div>
								<span class="typed-bread"></span>
							</div>
						</div>
					</div>
				</div>

				<!-- mosue button -->
				<a href="#" class="mouse_btn" style="display: none;"><span class="icon fas fa-chevron-down"></span></a>

			</div>

			<!-- Work Single -->
			<div class="section blog">
				<div class="content content-box">
					<div class="single-post-text">

						<!-- portfolio content -->
						<div class="portfolio-info portfolio-cols">
							<div class="description-col">

								<!-- title -->
								<div class="title">
									<div class="title_inner">Description</div>
								</div>

								<!-- text -->
								<div class="single-post-text">
									<p>
										Now there is more fashion. There is no so-called trends. Now chase after anything not necessary — nor for fashionable color nor the shape, nor for style. Think about the content that you want to invest in a created object, and only then will form. The thing is your spirit. A spirit unlike forms hard copy.
									</p>
									<p>
										Here choose yourself like that, without any looking back, do your personal, home, small fashion, and all will be well.
									</p>
									<p>
										My job is simple and sophisticated, so it is possible to describe and simple, and flowery language. I love the feel and sophistication of its superiority. I like people with a keen mind and at the same time easy to talk to. These qualities can be combined perfectly natural. However, things like people look miserable, if these properties are connected to them artificially.
									</p>

									<!-- gallery -->
									<div class="gallery-item">
										<p>
											<a href="images/work1.jpg">
												<img src="{{ asset('assets/images/work1.jpg') }}" alt="" />
											</a>
										</p>
										<p>
											<a href="images/work2.jpg">
												<img src="{{ asset('assets/images/work2.jpg') }}" alt="" />
											</a>
										</p>
										<p>
											<a href="images/work3.jpg">
												<img src="{{ asset('assets/images/work3.jpg') }}" alt="" />
											</a>
										</p>
									</div>

								</div>

							</div>
							<div class="details-col">

								<!-- title -->
								<div class="title">
									<div class="title_inner">Details</div>
								</div>

								<!-- details -->
								<ul class="details-list">
									<li><strong>Categories:</strong> Gallery</li>
									<li><strong>Date:</strong> 10 July 2019</li>
									<li><strong>Client:</strong> Envato</li>
									<li><strong>Live Preview:</strong> <a href="https://google.com/" target="_blank">www.envato.com</a></li>
								</ul>

							</div>
						</div>

					</div>
					<div class="clear"></div>
				</div>
			</div>
            @endsection
