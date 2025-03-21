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
							<h1 class="h-title">Resume</h1>
							<div class="h-subtitles">
								<div class="h-subtitle typing-bread">
									<p class="breadcrumbs">
										<a href="{{ route('index') }}">Home</a> / Resume
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

			<!-- Section About -->
			<div class="section about" id="section-about">
				<div class="content content-box">

					<!-- image -->
					<div class="image">
						<img src="{{ asset('assets/images/man2.jpg') }}" alt="" />
					</div>

					<!-- desc -->
					<div class="desc">
						<p>Hello! I’m Daniel Curry. Web designer from USA, California, San Francisco. I have rich experience in web site design and building, also I am good at wordpress. I love to talk with you about our unique.</p>
						<div class="info-list">
							<ul>
								<li><strong>Age:</strong> 24</li>
								<li><strong>Residence:</strong> USA</li>
								<li><strong>Freelance:</strong> Available</li>
								<li><strong>Address:</strong> San Francisco</li>
								<li><strong>Phone:</strong> +1 256 254 84 56</li>
								<li><strong>E-mail:</strong> alejandroa@gmail.com</li>
							</ul>
						</div>
						<div class="bts">
							<a href="#" class="btn hover-animated">
								<span class="circle"></span>
								<span class="lnk">Download CV</span>
							</a>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Service -->
			<div class="section service" id="section-services">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Services</div>
					</div>

					<!-- service items -->
					<div class="service-items">

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-code"></span></div>
								<div class="name">Web Development</div>
								<div class="text">Modern and mobile-ready website that will help you reach all of your marketing.</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-music"></span></div>
								<div class="name">Music Writing</div>
								<div class="text">Music copying, writing, creating, transcription, arranging and services.</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-ad"></span></div>
								<div class="name">Advetising</div>
								<div class="text">Advertising services include television, radio, print, mail, and web apps.</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-gamepad"></span></div>
								<div class="name">Game Development</div>
								<div class="text">Developing memorable and unique mobile android, ios and video games.</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-camera"></span></div>
								<div class="name">Photography</div>
								<div class="text">Our in-house photography services team made up of professional photographers.</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-mobile-alt"></span></div>
								<div class="name">Android Application</div>
								<div class="text">Games, playing music, handle network transactions, interacting content etc.</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Pricing -->
			<div class="section pricing" id="section-pricing">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Pricing Table</div>
					</div>

					<!-- pricing items -->
					<div class="pricing-items">

						<div class="pricing-col">
							<div class="pricing-item content-box">
								<div class="icon">
									<span class="fas fa-star"></span>
								</div>
								<div class="name">Basic</div>
								<div class="amount">
									<span class="number">
										<span class="dollar">$</span>
										<span>39</span>
										<span class="period">hour</span>
									</span>
								</div>
								<div class="feature-list">
									<ul>
										<li>Web Development</li>
										<li>Advetising</li>
										<li>Game Development</li>
										<li class="disable">Music Writing</li>
										<li class="disable">Photography</li>
									</ul>
								</div>
								<div class="bts">
									<a href="#" class="btn hover-animated">
										<span class="circle"></span>
										<span class="lnk">Buy Now</span>
									</a>
								</div>
							</div>
						</div>

						<div class="pricing-col">
							<div class="pricing-item content-box">
								<div class="icon">
									<span class="fas fa-rocket"></span>
								</div>
								<div class="name">Premium</div>
								<div class="amount">
									<span class="number">
										<span class="dollar">$</span>
										<span>59</span>
										<span class="period">hour</span>
									</span>
								</div>
								<div class="feature-list">
									<ul>
										<li>Web Development</li>
										<li>Advetising</li>
										<li>Game Development</li>
										<li>Music Writing</li>
										<li>Photography <strong>new</strong></li>
									</ul>
								</div>
								<div class="bts">
									<a href="#" class="btn hover-animated">
										<span class="circle"></span>
										<span class="lnk">Buy Now</span>
									</a>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!-- Section Resume -->
			<div class="section resume" id="section-history">
				<div class="content">
					<div class="cols">

						<div class="col col-md">

							<!-- title -->
							<div class="title">
								<div class="title_inner">Experience</div>
							</div>

							<!-- resume items -->
							<div class="resume-items">

								<div class="resume-item content-box active">
									<div class="date">2013 - Present</div>
									<div class="name">Art Director - Facebook Inc.</div>
									<div class="text">Collaborate with creative and development teams on the execution of ideas.</div>
								</div>

								<div class="resume-item content-box">
									<div class="date">2011 - 2012</div>
									<div class="name">Front-End Developer - Google Inc.</div>
									<div class="text">Monitored technical aspects of the front-end delivery for projects.</div>
								</div>

								<div class="resume-item content-box">
									<div class="date">2009 - 2010</div>
									<div class="name">Senior Developer - ABC Inc.</div>
									<div class="text">Optimize your website and apps performance using latest technology.</div>
								</div>

							</div>

						</div>

						<div class="col col-md">

							<!-- title -->
							<div class="title">
								<div class="title_inner">Education</div>
							</div>

							<!-- resume items -->
							<div class="resume-items">

								<div class="resume-item content-box">
									<div class="date">2006 - 2008</div>
									<div class="name">Art University - New York</div>
									<div class="text">Bachelors Degree in Computer Science ABC Technical Institute, Jefferson, Missouri.</div>
								</div>

								<div class="resume-item content-box">
									<div class="date">2005 - 2006</div>
									<div class="name">Programming Course - Paris</div>
									<div class="text">Coursework - Git, WordPress, Javascript, iOS, Android, CSS, and JavaScript.</div>
								</div>

								<div class="resume-item content-box">
									<div class="date">2004 - 2005</div>
									<div class="name">Web Design Course - London</div>
									<div class="text">Converted Photoshop layouts to web pages using HTML, CSS, and JavaScript.</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>

			<!-- Section Design Skills -->
			<div class="section skills" id="section-skills">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Design Skills</div>
					</div>

					<!-- skills items -->
					<div class="skills percent content-box">
						<ul>
							<li>
								<div class="name">Web Design</div>
								<div class="progress ">
									<div class="percentage" style="width: 90%;">
										<span class="percent">90%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">Illustrations</div>
								<div class="progress ">
									<div class="percentage" style="width: 70%;">
										<span class="percent">70%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">Photoshop</div>
								<div class="progress ">
									<div class="percentage" style="width: 95%;">
										<span class="percent">95%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">Graphic Design</div>
								<div class="progress ">
									<div class="percentage" style="width: 85%;">
										<span class="percent">85%</span>
									</div>
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>

			<!-- Section Languages Skills -->
			<div class="section skills" id="section-skills-lang">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Languages Skills</div>
					</div>

					<!-- skills items -->
					<div class="skills dotted content-box">
						<ul>
							<li>
								<div class="name">English</div>
								<div class="progress">
									<div class="percentage" style="width: 90%;">
										<span class="percent">90%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">German</div>
								<div class="progress">
									<div class="percentage" style="width: 70%;">
										<span class="percent">70%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">Italian</div>
								<div class="progress">
									<div class="percentage" style="width: 55%;">
										<span class="percent">55%</span>
									</div>
								</div>
							</li>
							<li>
								<div class="name">French</div>
								<div class="progress">
									<div class="percentage" style="width: 85%;">
										<span class="percent">85%</span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

			</div>

			<!-- Section Coding Skills -->
			<div class="section skills" id="section-skills-code">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Coding Skills</div>
					</div>

					<!-- skills items -->
					<div class="skills circles content-box">
						<ul>
							<li>
								<div class="name">WordPress</div>
								<div class="progress p90"> <!-- p90 = 90% circle fill color -->
									<div class="percentage">
										<span class="percent">90%</span>
									</div>
									<span>90%</span>
								</div>
							</li>
							<li>
								<div class="name">PHP / MYSQL</div>
								<div class="progress p75"> <!-- p75 = 75% circle fill color -->
									<div class="percentage">
										<span class="percent">75%</span>
									</div>
									<span>75%</span>
								</div>
							</li>
							<li>
								<div class="name">Angular / JavaScript</div>
								<div class="progress p85"> <!-- p85 = 85% circle fill color -->
									<div class="percentage">
										<span class="percent">85%</span>
									</div>
									<span>85%</span>
								</div>
							</li>
							<li>
								<div class="name">HTML / CSS</div>
								<div class="progress p95"> <!-- p95 = 95% circle fill color -->
									<div class="percentage">
										<span class="percent">95%</span>
									</div>
									<span>95%</span>
								</div>
							</li>
						</ul>
					</div>

				</div>
			</div>

			<!-- Section Knowladge Skills -->
			<div class="section skills" id="section-skills-know">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Knowledge</div>
					</div>

					<!-- skills -->
					<div class="skills list content-box">
						<ul>
							<li>
								<div class="name">Website hosting</div>
							</li>
							<li>
								<div class="name">iOS and android apps</div>
							</li>
							<li>
								<div class="name">Create logo design</div>
							</li>
							<li>
								<div class="name">Design for print</div>
							</li>
							<li>
								<div class="name">Modern and mobile-ready</div>
							</li>
							<li>
								<div class="name">Advertising services include</div>
							</li>
							<li>
								<div class="name">Graphics and animations</div>
							</li>
							<li>
								<div class="name">Search engine marketing</div>
							</li>
						</ul>
					</div>

				</div>
			</div>

			<!-- Section Interests -->
			<div class="section service" id="section-interests">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Interests</div>
					</div>

					<!-- interests items -->
					<div class="service-items">

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-baseball-ball"></span></div>
								<div class="name">Basketball</div>
								<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-campground"></span></div>
								<div class="name">Camping</div>
								<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-chess-knight"></span></div>
								<div class="name">Chess</div>
								<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
						</div>

						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-headphones"></span></div>
								<div class="name">Music</div>
								<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
							</div>
						</div>

					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Team -->
			<div class="section team" id="section-team">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Our Team</div>
					</div>

					<!-- team items -->
					<div class="team-items">

						<div class="team-col">
							<div class="team-item content-box">
								<div class="image">
									<img src="{{ asset('assets/images/team1.jpg') }}" alt="" />
								</div>
								<div class="desc">
									<div class="name">Alejandro Abeyta</div>
									<div class="category">Web Developer</div>
									<div class="soc">
										<a target="_blank" href="https://www.pinterest.com/">
											<span class="icon fab fa-pinterest"></span>
										</a>
										<a target="_blank" href="https://www.instagram.com/">
											<span class="icon fab fa-instagram"></span>
										</a>
										<a target="_blank" href="https://dribbble.com/">
											<span class="icon fab fa-dribbble"></span>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="team-col">
							<div class="team-item content-box">
								<div class="image">
									<img src="{{ asset('assets/images/team2.jpg') }}" alt="" />
								</div>
								<div class="desc">
									<div class="name">Peter Green</div>
									<div class="category">Back-end Developer</div>
									<div class="soc">
										<a target="_blank" href="https://www.pinterest.com/">
											<span class="icon fab fa-pinterest"></span>
										</a>
										<a target="_blank" href="https://www.instagram.com/">
											<span class="icon fab fa-instagram"></span>
										</a>
										<a target="_blank" href="https://dribbble.com/">
											<span class="icon fab fa-dribbble"></span>
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!-- Section Testimonials -->
			<div class="section testimonials" id="section-testimonials">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Testimonials</div>
					</div>

					<!-- testimonials items -->
					<div class="reviews-carousel">
						<div class="swiper-container">
							<div class="swiper-wrapper">

								<div class="swiper-slide">
									<div class="reviews-item content-box">
										<div class="image">
											<img src="{{ asset('assets/images/rev1.jpg') }}" alt="">
										</div>
										<div class="info">
											<div class="name">Helen Floyd</div>
											<div class="company">Art Director</div>
										</div>
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="reviews-item content-box">
										<div class="image">
											<img src="{{ asset('assets/images/rev1.jpg') }}" alt="">
										</div>
										<div class="info">
											<div class="name">Helen Floyd</div>
											<div class="company">Art Director</div>
										</div>
										<div class="text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										</div>
									</div>
								</div>

							</div>
						</div>

						<!-- navigation -->
						<div class="swiper-nav">
							<a class="prev swiper-button-prev fas fa-long-arrow-alt-left"></a>
							<a class="next swiper-button-next fas fa-long-arrow-alt-right"></a>
						</div>

					</div>

				</div>
			</div>

			<!-- Section Clients -->
			<div class="section clients" id="section-clients">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Clients</div>
					</div>

					<!-- clients items -->
					<div class="content-box">
						<div class="clients-items">

							<div class="clients-col">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ asset('assets/images/client1.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="clients-col">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ asset('assets/images/client3.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="clients-col">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ asset('assets/images/client2.png') }}" alt="" />
									</a>
								</div>
							</div>

							<div class="clients-col">
								<div class="clients-item">
									<a target="_blank" href="#">
										<img src="{{ asset('assets/images/client4.png') }}" alt="" />
									</a>
								</div>
							</div>

						</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Custom Text -->
			<div class="section custom-text" id="section-custom-text">
				<div class="content">

					<!-- title -->
					<div class="title">
						<div class="title_inner">Custom Text</div>
					</div>

					<!-- clients items -->
					<div class="content-box">
						<div class="single-post-text">
							<p>
								Now there is more fashion. There is no so-called trends. Now chase after anything not necessary — nor for fashionable color nor the shape, nor for style. Think about the content that you want to invest in a created object, and only then will form. The thing is your spirit. A spirit unlike forms hard copy.
							</p>
							<p>
								Here choose yourself like that, without any looking back, do your personal, home, small fashion, and all will be well.
							</p>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>
            @endsection
