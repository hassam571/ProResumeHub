@extends('frontend.layout.app')
@section('breadcrumb-title', 'Users')
@section('breadcrumbs', 'Add')

@section('content')
			<!-- Section Started -->
			<div class="section started" id="section-started">

				<!-- background -->
				<div class="video-bg jarallax" style="background-image: url('{{ asset('assets/images/started_image_p.jpg') }}');">
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
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

				<!-- mosue button -->
				<a href="#" class="mouse_btn" style="display: none;"><span class="icon fas fa-chevron-down"></span></a>

			

			</div>

			<!-- Section About -->
			<div class="section about" id="section-about">

				<!-- title -->
				<div class="title">
					<div class="title_inner">About</div>
				</div>

				<div class="content content-box">

					<!-- image -->
					<div class="image">

						<img src="{{ $users->dp_path ? asset('storage/' . $users->dp_path) : asset('assets/images/man2.jpg') }}" alt="{{ $users->first_name }}'s Profile Picture" />
					</div>
					

					<!-- desc -->
					<div class="desc">
						<p>Hello! I’m {{ $users->first_name }} {{ $users->last_name }}. I’m from {{ $users->city }}, {{ $users->state }}. I have rich experience in web design and development. I’d love to connect with you and discuss your projects.</p>
						<div class="info-list">
							<ul>
								@if($users->age)
									<li><strong>Age:</strong> {{ $users->age }}</li>
								@endif
								@if($users->city)
									<li><strong>Residence:</strong> {{ $users->city }}, {{ $users->state }}</li>
								@endif
								<li><strong>Freelance:</strong> Available</li>
								@if($users->address)
									<li><strong>Address:</strong> {{ $users->address }}</li>
								@endif
								@if($users->phone)
									<li><strong>Phone:</strong> {{ $users->phone }}</li>
								@endif
								@if($users->email)
									<li><strong>E-mail:</strong> {{ $users->email }}</li>
								@endif
							</ul>
						</div>
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
						@if($skills->isNotEmpty())
							@foreach($skills as $skill)
								<div class="service-col">
									<div class="service-item content-box">
										<div class="icon">{!! $skill->skill_icon !!}</div>
										<div class="name">{{ $skill->skill_name }}</div>
										<div class="text">
											<strong>Category:</strong> {{ $skill->skill_category }}<br>
											<strong>Experience:</strong> {{ $skill->years_experience }} years<br>
											<strong>Proficiency:</strong> {{ $skill->proficiency_level }}<br>
											<strong>Organization:</strong> {{ $skill->organization_name }}<br>
											<strong>Achievements:</strong> {{ $skill->key_achievements }}
										</div>
									</div>
								</div>
							@endforeach
						@else
							<div class="service-col">
								<div class="service-item content-box">
									<div class="text">No skills available for this user.</div>
								</div>
							</div>
						@endif
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
			
						<!-- Experience Section -->
						<div class="col col-md">
							<!-- title -->
							<div class="title">
								<div class="title_inner">Experience</div>
							</div>
			
							<!-- resume items -->
							<div class="resume-items">
								@forelse($experiences as $experience)
								<div class="resume-item content-box active"> 										<div class="date">
											{{ $experience->start_date->format('Y') }} - 
											{{ $experience->end_date ? $experience->end_date->format('Y') : 'Present' }}
										</div>
										<div class="name">{{ $experience->job_title }} - {{ $experience->organization_name }}</div>
										<div class="text">
											{!! $experience->key_achievements !!}
										</div>
									</div>
								@empty
									<div class="resume-item content-box">
										<div class="text">No experiences found.</div>
									</div>
								@endforelse
							</div>
						</div>
			
						<!-- Education Section -->
						<div class="col col-md">
							<!-- title -->
							<div class="title">
								<div class="title_inner">Education</div>
							</div>
			
							<!-- resume items -->
							<div class="resume-items">
								@forelse($educations as $index => $education)
								<div class="resume-item content-box active"
								{{-- {{ $loop->first ? 'active' : '' }}" --}}
								 >
									<div class="date">
										{{ $education->start_date ? $education->start_date->format('Y') : 'N/A' }} - 
										{{ $education->end_date ? $education->end_date->format('Y') : ($education->ongoing ? 'Ongoing' : 'Present') }}
									</div>
									
									<div class="name">{{ $education->degree_name }} - {{ $education->institute_name }}</div>
									<div class="text">
										{!! $education->description !!}
									</div>
								</div>
							@empty
								<div class="resume-item content-box">
									<div class="text">No education records found.</div>
								</div>
							@endforelse
							
							
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
						<div class="title_inner">Skills</div>
					</div>
			
					<!-- skills items -->
					<div class="skills percent content-box">
						<ul>
							@forelse($users->skills as $skill)
								<li>
									<div class="name">{{ $skill->skill_name }}</div>
									<div class="progress">
										<div class="percentage" style="width: {{ $skill->proficiency_level }}%;">
											<span class="percent">{{ $skill->proficiency_level }}%</span>
										</div>
									</div>
								</li>
							@empty
								<li>
									<div class="name">No skills added yet</div>
								</li>
							@endforelse
						</ul>
					</div>
			
				</div>
			</div>
			


<style>
.percent {
    font-size: 0.7rem !important;
}
</style>





		

	<div class="section skills" id="section-skills-code">
    <div class="content">

        <!-- title -->
        <div class="title">
            <div class="title_inner">Language Skills</div>
        </div>

        <!-- skills items -->
        <div class="skills circles content-box">
            <ul>
                @forelse($users->languages as $language)
                    <li>
                        <div class="name">{{ $language->language_name }}</div>
						<div class="progress p{{ $language->proficiency_level }}">
							<!-- Circle fill based on proficiency level -->
							<div class="percentage">
								<span class="percent" style="font-size: 0.7rem !important;">{{ $language->proficiency_level }}%</span>
							</div>
							<span style="font-size: 0.7rem;">{{ $language->proficiency_level }}</span>
						</div>
						
                    </li>
                @empty
                    <li>
                        <div class="name">No languages added yet.</div>
                    </li>
                @endforelse
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



			
			<div class="section team" id="section-team">
				<div class="content">
					<!-- title -->
					<div class="title">
						<div class="title_inner">Our Team</div>
					</div>
			
					<!-- team items -->
					<div class="team-items">
						@forelse($teammates as $teammate)
							<div class="team-col">
								<div class="team-item content-box">
									<div class="image">
										asset('storage/' . $user->dp_path) 
										<img src="{{ $teammate->dp_path ? asset('storage/' . $teammate->dp_path) : asset('assets/images/default-avatar.png') }}" alt="{{ $teammate->first_name }}" />
									</div>
									<div class="desc">
										<div class="name">{{ $teammate->first_name }} {{ $teammate->last_name }}</div>
										<div class="category">Team</div>
										<div class="soc">
											@if($teammate->email)
											<a href="mailto:{{ $teammate->email }}" target="_blank">
												<span class="icon fas fa-envelope"></span>
											</a>
											
											@endif
											{{-- @if($teammate->fiverr_link)
												<a target="_blank" href="{{ $teammate->fiverr_link }}">
													<span class="icon fab fa-fiverr"></span>
												</a>
											@endif --}}
											{{-- @if($teammate->upwork_link)
												<a target="_blank" href="{{ $teammate->upwork_link }}">
													<span class="icon fab fa-upwork"></span>
												</a>
											@endif --}}
											@if($teammate->linkedin_link)
												<a target="_blank" href="{{ $teammate->linkedin_link }}">
													<span class="icon fab fa-linkedin"></span>
												</a>
											@endif
											@if($teammate->facebook_link)
												<a target="_blank" href="{{ $teammate->facebook_link }}">
													<span class="icon fab fa-facebook"></span>
												</a>
											@endif
											@if($teammate->instagram_link)
												<a target="_blank" href="{{ $teammate->instagram_link }}">
													<span class="icon fab fa-instagram"></span>
												</a>
											@endif
											@if($teammate->other_platform)
												<a target="_blank" href="{{ $teammate->other_platform }}">
													<span class="icon fas fa-external-link-alt"></span>
												</a>
											@endif
										</div>
									</div>
								</div>
							</div>
						@empty
							<div class="team-col">
								<div class="team-item content-box">
									<div class="desc">
										<div class="name">No teammates found</div>
									</div>
								</div>
							</div>
						@endforelse
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

































			<style>
				.box-item {
					display: block; /* Default display for all items */
				}
				.info.circle {
    text-align: left;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);

}

.info.circle:hover {
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
    transform: translateY(-5px);
}

.info .desc {
    display: flex;
    flex-direction: column;
    gap: 5px;
    color: #333;
}
.info .desc span{ margin-left:.2rem ;

}

.info .category {
    font-size: 14px;
    color: #007bff;
    font-weight: bold;
}

.info .name {
    font-size: 18px;
    font-weight: bold;
    color: #000;
    margin-top: 5px;
}

.info .client, .info .duration, .info .cost, .info .technologies, .info .features {
    font-size: 14px;
    margin-top: 3px;
    color: #555;
}

.info .link {
    margin-top: 10px;
}

.info .btn {
    font-size: 14px;
    padding: 5px 10px;
    border-radius: 5px;
    text-transform: capitalize;
}

			</style>
			
			<!-- Works -->
			<div class="section works" id="section-portfolio">
				<div class="content">
			
					<!-- Title -->
					<div class="title">
						<div class="title_inner">Portfolio</div>
					</div>
			
					<!-- Portfolio Filter -->
					<div class="filter-menu content-box">
						<div class="filters">
							<div class="btn-group">
								<label data-text="All" class="glitch-effect">
									<input type="radio" name="fl_radio" value=".box-item" checked /> All
								</label>
							</div>
							@foreach ($projects->unique('project_type') as $project)
								<div class="btn-group">
									<label data-text="{{ $project->project_type }}">
										<input type="radio" name="fl_radio" value=".f-{{ strtolower(str_replace(' ', '-', $project->project_type)) }}" />
										{{ $project->project_type }}
									</label>
								</div>
							@endforeach
						</div>
						
					</div>
			
					<!-- Portfolio Items -->
					<div class="box-items portfolio-items">
						@foreach ($projects as $project)
    <div class="box-item f-{{ strtolower(str_replace(' ', '-', $project->project_type)) }}">
      <div class="image">
									@if (is_array($project->project_images) && count($project->project_images) > 0)
										@php $firstImage = $project->project_images[0]; @endphp
										<a href="#popup-{{ $project->id }}" class="has-popup-media hover-animated">
											<img src="{{ asset('storage/' . $firstImage) }}" class="img-thumbnail rounded" alt="Project Image" style="width: 30rem; height: auto; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
											<span class="info circle">
												<span class="centrize full-width">
													<span class="vertical-center">
														<span class="icon fas fa-project-diagram"></span>
														<span class="desc">
															<!-- Project Type -->
															<span class="category">{{ $project->project_type }}</span>
															<!-- Project Name -->
															<span class="name">{{ $project->project_name }}</span>
															
															<!-- Duration -->
															<span class="duration"><strong>Duration:</strong> {{ $project->duration }}  </span>
															<!-- Project Cost -->
															<span class="cost"><strong> Cost:</strong> ${{ $project->project_cost }} </span>
															<!-- Technologies Used -->
															<span class="technologies">
																<strong> Technologies:</strong> {{ $project->technologies_used }} 
															</span>
															<!-- Key Features -->
															<span class="features">
																<strong> Key Features:</strong> {{ $project->key_features }} 
															</span>
														
														</span>
													</span>
												</span>
											</span>
											
										</a>
									@else
										<span class="text-muted">No Image</span>
									@endif
								</div>
								<div id="popup-{{ $project->id }}" class="popup-box mfp-fade mfp-hide">
									<div class="content">
										<div class="image" style="background-image: url('{{ asset('storage/' . $firstImage) }}');"></div>
										<div class="desc single-post-text">
											<div class="category">{{ $project->project_type }}</div>
											<h4>{{ $project->project_name }}</h4>
											<p><strong>Cost:</strong> ${{ $project->project_cost }}</p>
											<p><strong>Technologies:</strong> {{ $project->technologies_used }}</p>
											<p><strong>Key Features:</strong> {{ $project->key_features }}</p>
											<a href="{{ $project->live_link }}" class="btn hover-animated" target="_blank">
												<span class="circle"></span>
												<span class="lnk">View Live</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
			
					<div class="clear"></div>
				</div>
			</div>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

			
			<script>document.addEventListener('DOMContentLoaded', function () {
				const filters = document.querySelectorAll('.filter-menu input[name="fl_radio"]');
				const items = document.querySelectorAll('.box-item');
			
				filters.forEach(filter => {
					filter.addEventListener('change', function () {
						const filterValue = this.value.replace('.', ''); // Remove dot from value
						items.forEach(item => {
							if (filterValue === 'box-item' || item.classList.contains(filterValue)) {
								item.style.display = 'block'; // Show matching items
							} else {
								item.style.display = 'none'; // Hide non-matching items
							}
						});
					});
				});
			});
			</script>
			

































































			<!-- Section Contacts Info -->
			<div class="section contacts" id="section-contacts">
				<div class="content">
			
					<!-- Title -->
					<div class="title">
						<div class="title_inner">Contacts</div>
					</div>
			
					<!-- Contacts Items -->
					<div class="service-items">
			
						<!-- Phone -->
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-phone"></span></div>
								<div class="name">Phone</div>
								<div class="text">{{ $users->phone ?? 'Not Available' }}</div>
							</div>
						</div>
			
						<!-- Email -->
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-envelope"></span></div>
								<div class="name">Email</div>
								<div class="text">
									@if (!empty($users->email))
										<a href="mailto:{{ $users->email }}">{{ $users->email }}</a>
									@else
										Not Available
									@endif
								</div>
							</div>
						</div>
			
						<!-- Address -->
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-map-marker-alt"></span></div>
								<div class="name">Address</div>
								<div class="text">{{ $users->address ?? 'Not Available' }}</div>
							</div>
						</div>
			
						<!-- Freelance Availability -->
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon"><span class="fas fa-user-tie"></span></div>
								<div class="name">Freelance Available</div>
								<div class="text">
									{{ $users->freelance_available ? 'I am available for Freelance hire' : 'Not Available for Freelance' }}
								</div>
							</div>
						</div>
			

						<style>
							.service-item {
    text-align: center;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.service-item:hover {
    transform: translateY(-10px);
    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.15);
}

.platform-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.platform-links li {
    margin: 10px 0;
}

.platform-links a {
    text-decoration: none;
    color: #333;
    font-size: 16px;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: color 0.3s ease;
}

.platform-links a:hover {
    color: #007bff;
}

.platform-icon {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

						</style>
						<!-- Links -->
						{{-- @if (!empty($users->fiverr_link) || !empty($users->upwork_link) || !empty($users->linkedin_link) || !empty($users->facebook_link) || !empty($users->instagram_link) || !empty($users->other_platform)) --}}
						<div class="service-col">
							<div class="service-item content-box">
								<div class="icon">
								</div>
								<div class="name">Platforms</div>
								<div class="text">
									<ul class="platform-links">
										@if (!empty($users->fiverr_link))
											<li>
												<a href="{{ $users->fiverr_link }}" target="_blank">
													<img src="{{ asset('asset/images/social/fiverr.png') }}" alt="Fiverr" class="platform-icon">
													Fiverr
												</a>
											</li>
										@endif
										@if (!empty($users->upwork_link))
											<li>
												<a href="{{ $users->upwork_link }}" target="_blank">
													<img src="{{ asset('asset/images/social/upwork.png') }}" alt="Upwork" class="platform-icon">
													Upwork
												</a>
											</li>
										@endif
										@if (!empty($users->linkedin_link))
											<li>
												<a href="{{ $users->linkedin_link }}" target="_blank">
													<img src="{{ asset('asset/images/social/linkedin.png') }}" alt="LinkedIn" class="platform-icon">
													LinkedIn
												</a>
											</li>
										@endif
										@if (!empty($users->facebook_link))
											<li>
												<a href="{{ $users->facebook_link }}" target="_blank">
													<img src="{{ asset('asset/images/social/facebook.png') }}" alt="Facebook" class="platform-icon">
													Facebook
												</a>
											</li>
										@endif
										@if (!empty($users->instagram_link))
											<li>
												<a href="{{ $users->instagram_link }}" target="_blank">
													<img src="{{ asset('asset/images/social/insta.png') }}" alt="Instagram" class="platform-icon">
													Instagram
												</a>
											</li>
										@endif
										@if (!empty($users->other_platform))
											<li>
												<a href="{{ $users->other_platform }}" target="_blank">
													<img src="{{ asset('asset/images/social/other.png') }}" alt="Other" class="platform-icon">
													Other
												</a>
											</li>
										@endif
									</ul>
								</div>
							</div>
						</div>
						
						{{-- @endif --}}
			
					</div>
			
					<div class="clear"></div>
				</div>
			</div>
			

			<!-- Section Contacts Form -->
			<div class="section contacts" id="section-contacts-form">
				<div class="content">
			
					<!-- title -->
					<div class="title">
						<div class="title_inner">Hire Me</div>
					</div>
			
					<!-- form -->
					<div class="contact_form content-box">
						<form id="cform" method="post" action="{{ route('contact.store') }}">
							@csrf
							<div class="group-val">
								<input type="text" name="name" placeholder="Name" required />
							</div>
							<div class="group-val">
								<input type="email" name="email" placeholder="Email" required />
							</div>
							<div class="group-val ct-gr">
								<textarea name="message" placeholder="Message" required></textarea>
							</div>
							<div class="alert-success" style="display: none;" style="color: #FDD935; margin-bottom: .5rem;">
								<p style="color: #FDD935; margin-bottom: .5rem;">Thanks, your message is sent successfully.</p>
							</div>
							<div class="group-bts">
								<button type="submit" class="btn hover-animated">
									<span class="circle"></span>
									<span class="lnk">Send Message</span>
								</button>
							</div>
						</form>
						

						
					</div>
			
				</div>
				<div class="clear"></div>
			</div>
			
			<script>
				document.getElementById('cform').addEventListener('submit', function (e) {
					e.preventDefault();
			
					const formData = new FormData(this);
			
					fetch('{{ route('contact.store') }}', {
						method: 'POST',
						headers: {
							'X-CSRF-TOKEN': '{{ csrf_token() }}'
						},
						body: formData,
					})
					.then(response => response.json())
					.then(data => {
						if (data.success) {
							document.querySelector('.alert-success').style.display = 'block';
							this.reset(); // Clear the form
						}
					})
					.catch(error => console.error('Error:', error));
				});
			</script>
			

			<!-- Section Started -->
			<div class="section started section-title" id="section-map">

				<!-- background -->
				<div class="video-bg">
					<div class="map" id="map"></div>
					<div class="video-bg-mask"></div>
					<div class="video-bg-texture" id="grained_container"></div>
				</div>

			</div>
            @endsection
