
@extends('frontend.layout.app')
@section('content')
			<!-- Section Started -->
			<div class="section started section-title" id="section-started">

				<!-- background -->
				<div class="video-bg jarallax" style="background-image: url('{{ asset('assets/images/resume_bg.jpg') }}');">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
				</div>

				<!-- started content -->
				<div class="centrize full-width">
					<div class="vertical-center">
						<div class="started-content">
							<h1 class="h-title">Contacts</h1>
							<div class="h-subtitles">
								<div class="h-subtitle typing-bread">
									<p class="breadcrumbs">
										<a href="{{ route('index') }}">Home</a> / Contacts
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

			<!-- Section Contacts Info -->
			<div class="section contacts" id="section-contacts-info">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Contacts Info</div>
					</div>

					<!-- contacts items -->
					<div class="service-items">

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-phone"></span></div>
								<div class="name">Phone</div>
								<div class="text">+ (231) 456 67 89</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-envelope"></span></div>
								<div class="name">Email</div>
								<div class="text"><a href="mailto:steve-pearson@gmail.com">steve-pearson@gmail.com</a></div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-map-marker-alt"></span></div>
								<div class="name">Address</div>
								<div class="text">2621 W Pico Blvd, Los Angeles</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-user-tie"></span></div>
								<div class="name">Freelance Available</div>
								<div class="text">I am available for Freelance hire</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Contacts Form -->
			<div class="section contacts" id="section-contacts">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Contacts Form</div>
					</div>

					<!-- form -->
					<div class="contact_form content-box">
						<form id="cform" method="post">
							<div class="group-val">
   								<input type="text" name="name" placeholder="Name" />
							</div>
							<div class="group-val">
								<input type="email" name="email" placeholder="Email" />
							</div>
							<div class="group-val ct-gr">
								<textarea name="message" placeholder="Message"></textarea>
							</div>
							<div class="group-bts">
								<button type="submit" class="btn hover-animated">
									<span class="circle"></span>
									<span class="lnk">Send Message</span>
								</button>
							</div>
						</form>
						<div class="alert-success">
							<p>Thanks, your message is sent successfully.</p>
						</div>
					</div>

				</div>
				<div class="clear"></div>
			</div>
            @endsection
