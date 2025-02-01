@extends('frontend.layout.app')
@section('content')

			<!-- Section Started -->
			<div class="section started section-title" id="section-started">

				<!-- background -->
				<div class="video-bg">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
				</div>

				<!-- started content -->
				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<h1 class="h-title">Works</h1>
							<div class="h-subtitles">
								<div class="h-subtitle typing-bread">
									<p class="breadcrumbs">
										<a href="{{ route('index') }}">Home</a> / Works
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

			<!-- Works -->
			<div class="section works" id="section-portfolio">
				<div class="content">

					<!-- portfolio filter -->
					<div class="filter-menu content-box">
						<div class="filters">
							<div class="btn-group">
								<label data-text="All" class="glitch-effect"><input type="radio" name="fl_radio" value=".box-item" />All</label>
							</div>
							<div class="btn-group">
								<label data-text="Video"><input type="radio" name="fl_radio" value=".f-video" />Video</label>
							</div>
							<div class="btn-group">
								<label data-text="Music"><input type="radio" name="fl_radio" value=".f-music" />Music</label>
							</div>
							<div class="btn-group">
								<label data-text="Links"><input type="radio" name="fl_radio" value=".f-links" />Links</label>
							</div>
							<div class="btn-group">
								<label data-text="Image"><input type="radio" name="fl_radio" value=".f-image" />Image</label>
							</div>
							<div class="btn-group">
								<label data-text="Gallery"><input type="radio" name="fl_radio" value=".f-gallery" />Gallery</label>
							</div>
							<div class="btn-group">
								<label data-text="Content"><input type="radio" name="fl_radio" value=".f-content" />Content</label>
							</div>
						</div>
					</div>

					<!-- portfolio items -->
					<div class="box-items portfolio-items">

						<div class="box-item f-gallery">
							<div class="image">
								<a href="#gallery-1" class="has-popup-gallery hover-animated">
									<img src="{{ asset('public/assets/images/work1.jpg') }}" class="wp-post-image" alt="" />
									<span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-images"></span>
												<span class="desc">
													<span class="category">Gallery</span>
													<span class="name">Shot in Iceland</span>
												</span>
											</span>
										</span>
									</span>
								</a>
								<div id="gallery-1" class="mfp-hide">
									<a href="images/work1.jpg"></a>
									<a href="images/work2.jpg"></a>
									<a href="images/work3.jpg"></a>
									<a href="images/work4.jpg"></a>
								</div>
							</div>
						</div>

						<div class="box-item f-links"> <!-- add class "animate-to-page" if need animated transition to page and delete target="_blank" -->
							<div class="image">
								<a href="https://google.com/" class="has-popup-link hover-animated" target="_blank">
									<img src="{{ asset('public/assets/images/work3.jpg') }}" class="wp-post-image" alt="" />
									<span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-link"></span>
												<span class="desc">
													<span class="category">Links</span>
													<span class="name">Nike Red</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="box-item f-video">
							<div class="image">
								<a href="https://youtu.be/S4L8T2kFFck" class="has-popup-video hover-animated">
									<img src="{{ asset('public/assets/images/work2.jpg') }}" class="wp-post-image" alt="" />
									<span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-video"></span>
												<span class="desc">
													<span class="category">Video</span>
													<span class="name">Fertility of Some Plants</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="box-item f-image">
							<div class="image">
								<a href="images/work4.jpg" class="has-popup-image hover-animated">
									<img src="{{ asset('public/assets/images/work4.jpg') }}" class="wp-post-image" alt="" />
									<span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-image"></span>
												<span class="desc">
													<span class="category">Image</span>
													<span class="name">Inspiration in Cap Haitian</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="box-item f-image">
							<div class="image">
								<a href="images/work7.jpg" class="has-popup-image hover-animated">
									<img src="{{ asset('public/assets/images/work7.jpg') }}" class="wp-post-image" alt="" />
									<span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-image"></span>
												<span class="desc">
													<span class="category">Image</span>
													<span class="name">Water and Shore</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="box-item f-music">
							<div class="image">
								<a href="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&#038;show_artwork=true" class="has-popup-music hover-animated">
									<img src="{{ asset('public/assets/images/work6.jpg') }}" class="wp-post-image" alt="" />
									<span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-music"></span>
												<span class="desc">
													<span class="category">Music</span>
													<span class="name">Dark Bike</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>

						<div class="box-item f-gallery">
							<div class="image">
								<a href="#gallery-2" class="has-popup-gallery hover-animated">
									<img src="{{ asset('public/assets/images/work5.jpg') }}" class="wp-post-image" alt="" />
									<span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-images"></span>
												<span class="desc">
													<span class="category">Gallery</span>
													<span class="name">Undulating Space</span>
												</span>
											</span>
										</span>
									</span>
								</a>
								<div id="gallery-2" class="mfp-hide">
									<a href="images/work5.jpg"></a>
									<a href="images/work1.jpg"></a>
									<a href="images/work2.jpg"></a>
									<a href="images/work3.jpg"></a>
								</div>
							</div>
						</div>

						<div class="box-item f-content">
							<div class="image">
								<a href="#popup-1" class="has-popup-media hover-animated">
									<img src="{{ asset('public/assets/images/work8.jpg') }}" class="wp-post-image" alt="" />
									<span class="info circle">
										<span class="centrize full-width">
											<span class="vertical-center">
												<span class="icon fas fa-plus"></span>
												<span class="desc">
													<span class="category">Content</span>
													<span class="name">Curved Ceiling Ribs</span>
												</span>
											</span>
										</span>
									</span>
								</a>
							</div>
							<div id="popup-1" class="popup-box mfp-fade mfp-hide">
								<div class="content">
									<div class="image" style="background-image: url('{{ asset('public/assets/images/work8.jpg') }}');"></div>
									<div class="desc single-post-text">
										<div class="category">Content</div>
										<h4>Hand holding pyramid painting</h4>
										<p>
											Now there is more fashion. There is no so-called trends. Now chase after anything not necessary — nor for fashionable color nor the shape, nor for style. Think about the content that you want to invest in a created object, and only then will form. The thing is your spirit. A spirit unlike forms hard copy.
										</p>
										<ul>
											<li>Now there is more fashion. There is no so-called trends.</li>
											<li>Now chase after anything not necessary — nor for fashionable color nor the shape, nor for style.</li>
											<li>Think about the content that you want to invest in a created object, and only then will form.</li>
											<li>The thing is your spirit. A spirit unlike forms hard copy.</li>
										</ul>
										<p>
											Now there is more fashion. There is no so-called trends. Now chase after anything not necessary — nor for fashionable color nor the shape, nor for style. Think about the content that you want to invest in a created object, and only then will form. The thing is your spirit. A spirit unlike forms hard copy.
										</p>
										<a href="{{ route('work_single') }}" class="btn hover-animated">
											<span class="circle"></span>
											<span class="lnk">View Project</span>
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>
				</div>
			</div>
            @endsection
