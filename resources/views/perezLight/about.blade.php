@extends('perezLight.layouts.main')
@section('content')


    <!-- About Me Sectin Start -->
        <section class="bg-secondary pt-20 pb-120" data-aos="zoom-in">
            <div class="container">
                <div class="about-grid">
                    <img class="mx-auto" src="{{ $user->dp_path ? asset($user->dp_path) : asset('assets3/images/about/about2.png') }}" alt="about me">
                    <div class="fw-bold font-Syne leading-none d-flex flex-wrap flex-column gap-y-2">
                        <span class="text-warning text-xl">About me</span>
                        <h3 class="text-dark section-title">
                            {{$user->first_name}}
                        </h3>

                        <h4 class="text-dark text-2xl mt-3 mb-4">{{ $skill_name ? $skill_name->skill_name : 'Skill name not available' }}
                        </h4>
                        <p class="text-dark text-xl fw-bold font-Syne leading-7 mb-6">
                            {{ $skill_name ? $skill_name->skill_description : 'Description not available' }}

                        </p>
                        <p class="paragraph mb-6">
                            That is where I come
                            in.
                            A lover of
                            words, a wrangler of copy. Here to create copy that not
                            only reflects who you are and what you stand for, but words that truly land with those that
                            read them, calling your audience in and making them .</p>

                        <div>
                            <img src="{{ asset('assets3/images/signature.svg') }}" alt="signature">
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- About Me Sectin End -->



        <!-- Experience Sectin Start -->
        <section class="bg-white py-120 overflow-x-hidden">
            <div class="container" data-aos="zoom-out">
                <div class="about-grid-section-two">
                    <div class="fw-bold font-Syne leading-none d-flex flex-wrap flex-column gap-y-2">
                        <h3 class="text-dark section-title mb-5">
                            My vision is to create happy my clients
                        </h3>
                        <p class="paragraph mb-7">
                            That is where I come in. A lover of words, a wrangler of copy. Here to create copy that not
                            only reflects who you are and what you stand for, but words that truly land with those that
                            read them, calling your audience in and making them want more.
                        </p>

                        <ul class="award-lists d-flex flex-wrap p-0 list-unstyled">
                            <li class="award-lists-item">

                                <span class="text-dark text-32 fw-bold font-Syne position-relative">08</span>
                                <p class="paragraph">Award winner</p>
                            </li>
                            <li class="award-lists-item">

                                <span class="text-dark text-32 fw-bold font-Syne position-relative">1.2k</span>
                                <p class="paragraph">Worldwide client</p>
                            </li>
                            <li class="award-lists-item">

                                <span class="text-dark text-32 fw-bold font-Syne position-relative">{{ $job_count }}</span>
                                <p class="paragraph">Job done successfully</p>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex flex-column justify-content-end">
                        <div class="d-flex flex-wrap flex-column years-of-experience mb-12">
                            <span
                                class="years-experience-of-number text-dark fw-bold font-Syne leading-none d-inline-block position-relative">{{ $skill_name ? $skill_name->years_experience : 'Experience not available' }}</span>
                            <span class="strock-text">Years of <br> experience</span>
                        </div>

                        <div class="bg-dark d-flex flex-wrap justify-content-between align-items-end say-hello-contact-box">
                            <div class="d-flex flex-column flex-wrap gap-y-2">
                                <span class="text-warning text-lg fw-normal leading-none">SAY HELLO!</span>
                                <h4 class="text-white text-2xl fw-bold font-Syne leading-none mb-0">
                                    {{ $user->email }}
                                </h4>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end">
                                <a href="#" class="animate-arrow-up">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 34L34 14" stroke="#FFB646" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14 14H34V34" stroke="#FFB646" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Experience Sectin End -->


        <!-- Video Section Start -->

        <div class="bg-white pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="position-relative" data-aos="zoom-in-up">
                            <img class="rounded-2xl" src="{{ asset('assets3/images/video/video.png') }}" alt="video image">
                            <a href="https://www.youtube.com/watch?v=mSC6GwizOag&ab_channel=TailwindLabs" class="video-popup play-button">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="fill-primary group-hover:fill-yellow transition-all duration-300" cx="50" cy="50" r="50" />
                                    <path class="stroke-black-800 group-hover:stroke-white" d="M43 41L57 50L43 59V41Z" stroke-opacity="0.9" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Video Section End -->

        <!-- tabs start -->
        <section class="featured-properties">
            <div class="container" data-aos="zoom-out" data-aos-delay="800">
                <div class="row">

                    <div class="col-12">

                        <div class="fw-bold font-Syne text-center leading-none d-flex flex-wrap flex-column gap-y-2 mb-4">
                            <span class="text-warning text-xl">Resume</span>
                            <h3 class="section-title text-dark mb-0">All over my details find he<span
                            class="d-inline-block position-relative circle-shape portfolio-shape2">re.</span>..

                            </h3>



                        </div>
                        <div class="tabs nav nav-pills flex-wrap justify-content-center gap-4 mt-8 mb-14">
                            <button data-bs-toggle="pill" data-bs-target="#about_me_tab" class="tab-btn justify-content-between align-items-center d-inline-flex active">
                                About me
                                <span class="inline-block animate-arrow-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                            </button>
                            <button class="tab-btn tab-btn justify-content-between align-items-center d-inline-flex" data-bs-toggle="pill" data-bs-target="#experience_tab">
                                Experience
                                <span class="inline-block animate-arrow-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                            </button>
                            <button class="tab-btn tab-btn justify-content-between align-items-center d-inline-flex" data-bs-toggle="pill" data-bs-target="#education_tab">
                                Education
                                <span class="inline-block animate-arrow-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                            </button>
                            <button class="tab-btn tab-btn justify-content-between align-items-center d-inline-flex" data-bs-toggle="pill" data-bs-target="#skills_tab">
                                Skills
                                <span class="inline-block animate-arrow-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                            </button>
                            <button class="tab-btn tab-btn justify-content-between align-items-center d-inline-flex" data-bs-toggle="pill" data-bs-target="#awards_tab">
                                Awards
                                <span class="inline-block animate-arrow-up">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 17L17 7" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7 7H17V17" stroke="currentColor" stroke-opacity="0.9" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                            </button>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="tab-content">

                            <div id="about_me_tab" class="tab-pane fade show active position-relative">
                                <div class="about-me-grid">

                                    <img src="{{ asset('assets3/images/about/about3.png') }}" alt="about me">
                                    <div>
                                        <h4 class="text-dark text-2xl based-in-german-title-tab fw-bold font-Syne">Based in
                                            {{ $user->state }}
                                        </h4>
                                        <p class="paragraph mb-7">{{ $user->username }}, <span class="text-dark">{{ $user->skill_name }}</span>,
                                            based
                                            in
                                            {{ $user->state }}. That is where I come in. A
                                            lover of words, a wrangler of copy. Here to create copy that not only reflects who
                                            you
                                            are
                                            and what you stand for,</p>
                                        <p class="paragraph mb-14">but words that truly land with those that read them, calling
                                            your
                                            audience
                                            in and making them want more.</p>

                                        <ul class="flex-column gap-3 d-inline-flex list-unstyled p-0">
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Name</span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->first_name }}{{ $user->last_name }}</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            State</span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->state }}</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Phone</span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->phone }}</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Email</span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->email }}</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Experience</span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $skill_name ? $skill_name->skill_experience : 'Experience information not available' }}+ years</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Fiver </span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->fiverr_link }}</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Upwork</span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->upwork_link }}</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Linked In</span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->linkedin_link}}</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            FaceBook</span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->facebook_link }}</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Instagram</span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->instagram_link}}</span>
                                            </li>
                                            <li class="gap-10 d-inline-flex align-items-center">
                                                <span class="w-110px text-black-text-800 text-lg fw-normal leading-none">
                                            Other </span>
                                                <span class="text-dark text-2xl fw-bold font-Syne leading-8">
                                            {{ $user->other_platform}}</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div id="experience_tab" class="tab-pane fade position-relative">
                                <h4 class="text-dark text-2xl based-in-german-title-tab fw-bold font-Syne">Experience</h4>

                                <div class="tab-contents tab-contents-experience gap-x-4 gap-y-5">

                                    @foreach($experience as $exp)
                                    <div class="experience-tab-item d-flex flex-wrap flex-column gap-8 justify-content-between">
                                        <span class="text-sm fw-normal font-Inter leading-tight text-black-text-800">{{ \Carbon\Carbon::parse($exp->start_date)->format('d M, Y') }}
                                    –
                                    {{ \Carbon\Carbon::parse($exp->end_date)->format('d M, Y') }}</span>
                                        <div>
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-dark position-relative">
                                                Axtra</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-2xl text-dark">
                                                 {{ $exp->job_title }}
                                            </h4>
                                        </div>
                                    </div>
                                        @endforeach

                                </div>
                            </div>

                            <div id="education_tab" class="tab-pane fade">
                                <h4 class="text-dark text-2xl based-in-german-title-tab fw-bold font-Syne">Education</h4>

                                <div class="education-tab-contents">

                                    @foreach($education as $edu)
                                    <div class="education-tab-item d-flex flex-wrap">
                                        <span class="text-sm fw-normal font-Inter leading-tight text-black-text-800">{{ \Carbon\Carbon::parse($edu->start_date)->format('d M, Y') }}
                                    –
                                    {{ \Carbon\Carbon::parse($edu->end_date)->format('d M, Y') }}</span>
                                        <div class="flex-1">
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-dark position-relative">
                                                Axtra</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-2xl text-dark">{{ $edu->degree_name }}
                                            </h4>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>

                            <div id="skills_tab" class="tab-pane fade">
                                <h4 class="text-dark text-2xl based-in-german-title-tab fw-bold font-Syne">Skills</h4>

                                <div class="skills-tab-contents">
                                    @foreach( $skills as $skill)
                                    <div class="d-flex flex-wrap gap-4 align-items-start skills-tab-item">
                                        <img class="items-start" src="{{ asset($skill->skill_icon ?? 'assets3/images/skills/vs-code.png') }}" alt="skill icon">

                                        " alt="icons">
                                        <div class="flex flex-wrap gap-1 flex-1 flex-col">
                                            <h4 class="fw-bold font-Syne leading-normal text-xl text-dark">{{ $skill->skill_name }}</h4>
                                            <p class="text-sm fw-normal font-Inter leading-none text-dark">({{ $skill->proficiency_level }})</p>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>

                            <div id="awards_tab" class="tab-pane fade">
                                <h4 class="text-dark text-2xl based-in-german-title-tab fw-bold font-Syne">Awards</h4>

                                <div class="awards-tab-contents">

                                    <div class="d-flex flex-wrap flex-column awards-tab-item">

                                        <div class="d-flex align-items-start justify-content-between">
                                            <img src="{{ asset('assets3/images/awards/w-dot.png') }}" alt="icons">
                                            <span class="fw-normal text-sm font-Inter text-black-text-800">2018</span>
                                        </div>

                                        <div>
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-dark position-relative">
                                                Winner</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-xl text-dark">01X
                                                Developer Award
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap flex-column awards-tab-item">

                                        <div class="d-flex align-items-start justify-content-between">
                                            <img src="{{ asset('assets3/images/awards/webby.png') }}" alt="icons">
                                            <span class="fw-normal text-sm font-Inter text-black-text-800">2018</span>
                                        </div>

                                        <div>
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-dark position-relative">
                                                Winner</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-xl text-dark">01X
                                                Developer Award
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap flex-column awards-tab-item">

                                        <div class="d-flex align-items-start justify-content-between">
                                            <img src="{{ asset('assets3/images/awards/fwa.png')}}" alt="icons">
                                            <span class="fw-normal text-sm font-Inter text-black-text-800">2018</span>
                                        </div>

                                        <div>
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-dark position-relative">
                                                Winner</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-xl text-dark">01X
                                                Developer Award
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap flex-column awards-tab-item">

                                        <div class="d-flex align-items-start justify-content-between">
                                            <img src="{{ asset('assets3/images/awards/wordpress.png') }}" alt="icons">
                                            <span class="fw-normal text-sm font-Inter text-black-text-800">2018</span>
                                        </div>

                                        <div>
                                            <p class="dot text-lg fw-normal font-sans leading-7 text-dark position-relative">
                                                Winner</p>
                                            <h4 class="fw-bold font-Syne leading-normal text-xl text-dark">01X
                                                Developer Award
                                            </h4>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- tabs end -->


        <!-- Testimonial section Start -->
        <section class="bg-white py-120 testimonial" data-aos="fade-up">
            <div class="testimonial-space-left px-8">
                <div class="d-flex flex-column testimonial-gap flex-xl-row">

                    <div class="fw-bold font-Syne leading-none d-flex flex-wrap flex-column gap-y-2 mb-10 testimonial-title-section">
                        <span class="text-warning text-xl">Testimonial</span>
                        <h3 class="d-inline-block section-title text-dark">
                            <span class="position-relative circle-shape testimonial-shape">Cl</span>ient
                            <br class="hidden d-xl-inline-block" /> feedback
                        </h3>
                    </div>


                    <div class="swiper w-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <span class="d-inline-block qotation-icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 13.5L21.75 30C21.7475 32.3862 20.7985 34.6739 19.1112 36.3612C17.4239 38.0485 15.1362 38.9975 12.75 39C12.3522 39 11.9706 38.842 11.6893 38.5607C11.408 38.2794 11.25 37.8978 11.25 37.5C11.25 37.1022 11.408 36.7206 11.6893 36.4393C11.9706 36.158 12.3522 36 12.75 36C14.3413 36 15.8674 35.3679 16.9926 34.2426C18.1179 33.1174 18.75 31.5913 18.75 30V28.5H7.5C6.70435 28.5 5.94129 28.1839 5.37868 27.6213C4.81607 27.0587 4.5 26.2956 4.5 25.5L4.5 13.5C4.5 12.7044 4.81607 11.9413 5.37868 11.3787C5.94129 10.8161 6.70435 10.5 7.5 10.5L18.75 10.5C19.5456 10.5 20.3087 10.8161 20.8713 11.3787C21.4339 11.9413 21.75 12.7044 21.75 13.5ZM40.5 10.5H29.25C28.4544 10.5 27.6913 10.8161 27.1287 11.3787C26.5661 11.9413 26.25 12.7044 26.25 13.5L26.25 25.5C26.25 26.2956 26.5661 27.0587 27.1287 27.6213C27.6913 28.1839 28.4544 28.5 29.25 28.5H40.5V30C40.5 31.5913 39.8679 33.1174 38.7426 34.2426C37.6174 35.3679 36.0913 36 34.5 36C34.1022 36 33.7206 36.158 33.4393 36.4393C33.158 36.7206 33 37.1022 33 37.5C33 37.8978 33.158 38.2794 33.4393 38.5607C33.7206 38.842 34.1022 39 34.5 39C36.8862 38.9975 39.1739 38.0485 40.8612 36.3612C42.5485 34.6739 43.4975 32.3862 43.5 30V13.5C43.5 12.7044 43.1839 11.9413 42.6213 11.3787C42.0587 10.8161 41.2957 10.5 40.5 10.5Z"
                                            fill="#080808" fill-opacity="0.9" />
                                    </svg>
                                </span>
                                <p class="testimonial-texts fw-bold font-Syne">
                                    “Energistically
                                    build
                                    alternative scenarios
                                    via cross-unit applications. Credibly exploit
                                    one-to-one strategic theme areas and clicks-and-mortar services”</p>
                                <h4 class="d-flex flex-wrap align-items-center gap-4 text-dark testimonial-qotation-name font-Syne">
                                    <span><svg width="48" height="2" viewBox="0 0 48 2" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H48" stroke="#080808" stroke-opacity="0.4" />
                                        </svg>
                                    </span> Jhon Smith
                                </h4>
                            </div>
                            <div class="swiper-slide">
                                <span class="d-inline-block qotation-icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 13.5L21.75 30C21.7475 32.3862 20.7985 34.6739 19.1112 36.3612C17.4239 38.0485 15.1362 38.9975 12.75 39C12.3522 39 11.9706 38.842 11.6893 38.5607C11.408 38.2794 11.25 37.8978 11.25 37.5C11.25 37.1022 11.408 36.7206 11.6893 36.4393C11.9706 36.158 12.3522 36 12.75 36C14.3413 36 15.8674 35.3679 16.9926 34.2426C18.1179 33.1174 18.75 31.5913 18.75 30V28.5H7.5C6.70435 28.5 5.94129 28.1839 5.37868 27.6213C4.81607 27.0587 4.5 26.2956 4.5 25.5L4.5 13.5C4.5 12.7044 4.81607 11.9413 5.37868 11.3787C5.94129 10.8161 6.70435 10.5 7.5 10.5L18.75 10.5C19.5456 10.5 20.3087 10.8161 20.8713 11.3787C21.4339 11.9413 21.75 12.7044 21.75 13.5ZM40.5 10.5H29.25C28.4544 10.5 27.6913 10.8161 27.1287 11.3787C26.5661 11.9413 26.25 12.7044 26.25 13.5L26.25 25.5C26.25 26.2956 26.5661 27.0587 27.1287 27.6213C27.6913 28.1839 28.4544 28.5 29.25 28.5H40.5V30C40.5 31.5913 39.8679 33.1174 38.7426 34.2426C37.6174 35.3679 36.0913 36 34.5 36C34.1022 36 33.7206 36.158 33.4393 36.4393C33.158 36.7206 33 37.1022 33 37.5C33 37.8978 33.158 38.2794 33.4393 38.5607C33.7206 38.842 34.1022 39 34.5 39C36.8862 38.9975 39.1739 38.0485 40.8612 36.3612C42.5485 34.6739 43.4975 32.3862 43.5 30V13.5C43.5 12.7044 43.1839 11.9413 42.6213 11.3787C42.0587 10.8161 41.2957 10.5 40.5 10.5Z"
                                            fill="#080808" fill-opacity="0.9" />
                                    </svg>
                                </span>
                                <p class="testimonial-texts fw-bold font-Syne">
                                    “Energistically
                                    build
                                    “Unleash energistically build alternative scenarios via cross-unit build
                                    efficient
                                    initiatives for distinctive vortals. Synergistically strategize via adaptiv“
                                </p>
                                <h4 class="d-flex flex-wrap align-items-center gap-4 text-dark testimonial-qotation-name font-Syne">
                                    <span><svg width="48" height="2" viewBox="0 0 48 2" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H48" stroke="#080808" stroke-opacity="0.4" />
                                        </svg>
                                    </span> Jhon Smith
                                </h4>
                            </div>
                            <div class="swiper-slide">
                                <span class="d-inline-block qotation-icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 13.5L21.75 30C21.7475 32.3862 20.7985 34.6739 19.1112 36.3612C17.4239 38.0485 15.1362 38.9975 12.75 39C12.3522 39 11.9706 38.842 11.6893 38.5607C11.408 38.2794 11.25 37.8978 11.25 37.5C11.25 37.1022 11.408 36.7206 11.6893 36.4393C11.9706 36.158 12.3522 36 12.75 36C14.3413 36 15.8674 35.3679 16.9926 34.2426C18.1179 33.1174 18.75 31.5913 18.75 30V28.5H7.5C6.70435 28.5 5.94129 28.1839 5.37868 27.6213C4.81607 27.0587 4.5 26.2956 4.5 25.5L4.5 13.5C4.5 12.7044 4.81607 11.9413 5.37868 11.3787C5.94129 10.8161 6.70435 10.5 7.5 10.5L18.75 10.5C19.5456 10.5 20.3087 10.8161 20.8713 11.3787C21.4339 11.9413 21.75 12.7044 21.75 13.5ZM40.5 10.5H29.25C28.4544 10.5 27.6913 10.8161 27.1287 11.3787C26.5661 11.9413 26.25 12.7044 26.25 13.5L26.25 25.5C26.25 26.2956 26.5661 27.0587 27.1287 27.6213C27.6913 28.1839 28.4544 28.5 29.25 28.5H40.5V30C40.5 31.5913 39.8679 33.1174 38.7426 34.2426C37.6174 35.3679 36.0913 36 34.5 36C34.1022 36 33.7206 36.158 33.4393 36.4393C33.158 36.7206 33 37.1022 33 37.5C33 37.8978 33.158 38.2794 33.4393 38.5607C33.7206 38.842 34.1022 39 34.5 39C36.8862 38.9975 39.1739 38.0485 40.8612 36.3612C42.5485 34.6739 43.4975 32.3862 43.5 30V13.5C43.5 12.7044 43.1839 11.9413 42.6213 11.3787C42.0587 10.8161 41.2957 10.5 40.5 10.5Z"
                                            fill="#080808" fill-opacity="0.9" />
                                    </svg>
                                </span>
                                <p class="testimonial-texts fw-bold font-Syne">
                                    “Energistically
                                    build
                                    “Aliquam vehicula nunc facilisis tincidunt feugiat. Pellentesque sed viverra
                                    nisi. Fusce
                                    et
                                    laoreet augue. Quisque pretium, ligula lectus semper urna. Aliquam vehicula.”

                                </p>
                                <h4 class="d-flex flex-wrap align-items-center gap-4 text-dark testimonial-qotation-name font-Syne">
                                    <span><svg width="48" height="2" viewBox="0 0 48 2" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H48" stroke="#080808" stroke-opacity="0.4" />
                                        </svg>
                                    </span> Jhon Smith
                                </h4>
                            </div>
                            <div class="swiper-slide">
                                <span class="d-inline-block qotation-icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.75 13.5L21.75 30C21.7475 32.3862 20.7985 34.6739 19.1112 36.3612C17.4239 38.0485 15.1362 38.9975 12.75 39C12.3522 39 11.9706 38.842 11.6893 38.5607C11.408 38.2794 11.25 37.8978 11.25 37.5C11.25 37.1022 11.408 36.7206 11.6893 36.4393C11.9706 36.158 12.3522 36 12.75 36C14.3413 36 15.8674 35.3679 16.9926 34.2426C18.1179 33.1174 18.75 31.5913 18.75 30V28.5H7.5C6.70435 28.5 5.94129 28.1839 5.37868 27.6213C4.81607 27.0587 4.5 26.2956 4.5 25.5L4.5 13.5C4.5 12.7044 4.81607 11.9413 5.37868 11.3787C5.94129 10.8161 6.70435 10.5 7.5 10.5L18.75 10.5C19.5456 10.5 20.3087 10.8161 20.8713 11.3787C21.4339 11.9413 21.75 12.7044 21.75 13.5ZM40.5 10.5H29.25C28.4544 10.5 27.6913 10.8161 27.1287 11.3787C26.5661 11.9413 26.25 12.7044 26.25 13.5L26.25 25.5C26.25 26.2956 26.5661 27.0587 27.1287 27.6213C27.6913 28.1839 28.4544 28.5 29.25 28.5H40.5V30C40.5 31.5913 39.8679 33.1174 38.7426 34.2426C37.6174 35.3679 36.0913 36 34.5 36C34.1022 36 33.7206 36.158 33.4393 36.4393C33.158 36.7206 33 37.1022 33 37.5C33 37.8978 33.158 38.2794 33.4393 38.5607C33.7206 38.842 34.1022 39 34.5 39C36.8862 38.9975 39.1739 38.0485 40.8612 36.3612C42.5485 34.6739 43.4975 32.3862 43.5 30V13.5C43.5 12.7044 43.1839 11.9413 42.6213 11.3787C42.0587 10.8161 41.2957 10.5 40.5 10.5Z"
                                            fill="#080808" fill-opacity="0.9" />
                                    </svg>
                                </span>
                                <p class="testimonial-texts fw-bold font-Syne">
                                    “Energistically
                                    build
                                    “Aliquam vehicula nunc facilisis tincidunt feugiat. Pellentesque sed viverra
                                    nisi. Fusce
                                    et
                                    laoreet augue. Quisque pretium, ligula lectus semper urna. Aliquam vehicula.”

                                </p>
                                <h4 class="d-flex flex-wrap align-items-center gap-4 text-dark testimonial-qotation-name font-Syne">
                                    <span><svg width="48" height="2" viewBox="0 0 48 2" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 1H48" stroke="#080808" stroke-opacity="0.4" />
                                        </svg>
                                    </span> Jhon Smith
                                </h4>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- Testimonial section End -->

        <!-- Brand Section Start-->

        <div class="bg-white brandCarousel mb-120" data-aos="flip-down">
            <div class="container">
                <div class="swiper brand-carousel">

                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="{{ asset('assets3/images/brand/logo1.svg') }}" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="{{ asset('assets3/images/brand/logo2.svg') }}" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="{{ asset('assets3/images/brand/logo3.svg') }}" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="{{ asset('assets3/images/brand/logo4.svg') }}" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="{{ asset('assets3/images/brand/logo5.svg') }}" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="{{ asset('assets3/images/brand/logo6.svg') }}" alt=" brandlogo">
                        </div>
                        <div class="swiper-slide">
                            <img class="mx-auto d-block" src="{{ asset('assets3/images/brand/logo3.svg') }}" alt=" brandlogo">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Brand Section End-->

@endsection
