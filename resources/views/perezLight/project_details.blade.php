@extends('perezLight.layouts.main')
@section('content')
        <!-- Header end -->

        <!-- Hero Section Start -->
        <section class="bg-secondary pt-20">
            <div class="max-w-1075 mx-auto banner-contents" data-aos="flip-down" data-aos-delay="300">
                <div class="row pb-12">
                    <div class="col-12 col-lg-6 mb-10">

                        <ul class="d-flex flex-wrap text-sm fw-normal font-Inter leading-tight p-0 list-unstyled m-0 p-0 list-unstyled m-0">
                            <li class="blog-meta-item">
                                <a href="#">{{ $project->project_type }}</a>
                            </li>
                            <li class="blog-meta-item">
                                <a href="#">{{ \Carbon\Carbon::parse($project->created_at)->format('d M, Y') }}</a>
                            </li>
                        </ul>


                        <h4 class="text-dark fw-bold font-Syne leading-snug banner-title">
                            {{ $project->project_name }}
                        </h4>
                    </div>
                    <div class="col-12 col-lg-6">
                        <ul class="d-flex flex-wrap gap-y-6 gy-lg-0 clients-info">
                            <li class="d-flex flex-wrap flex-column gap-2 clients-info-item">
                                <span class="clients-info-text text-sm fw-normal font-Inter leading-tight">Client</span>
                                <h2 class="text-dark text-15 fw-bold font-sans leading-none">
                                    {{ $project->client_name }}</h2>
                            </li>
                            <li class="d-flex flex-wrap flex-column gap-2 clients-info-item">
                                <span
                                    class="clients-info-text text-sm fw-normal font-Inter leading-tight">Category</span>
                                <h4 class="text-dark text-15 fw-bold font-sans leading-none">
                                    {{ $project->project_type }}
                                </h4>
                            </li>
                            <li class="d-flex flex-wrap flex-column gap-2 clients-info-item">
                                <span class="clients-info-text text-sm fw-normal font-Inter leading-tight">Tools</span>
                                <h4 class="text-dark text-15 fw-bold font-sans leading-none">
                                    {{ $project->technologies_used }}
                                </h4>
                            </li>
                            <li class="d-flex flex-wrap flex-column gap-2 clients-info-item">
                                <span class="clients-info-text text-sm fw-normal font-Inter leading-tight">Start
                                    date</span>
                                <h4 class="text-dark text-15 fw-bold font-sans leading-none">
                                    {{ \Carbon\Carbon::parse($project->created_at)->format('d M, Y') }}</h4>
                            </li>
                            <li class="d-flex flex-wrap flex-column gap-2 clients-info-item">
                                <span class="clients-info-text text-sm fw-normal font-Inter leading-tight">End
                                    date</span>
                                <h4 class="text-dark text-15 fw-bold font-sans leading-none">
                                    </h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row mb-12">
                    <div class="col-12">
                        <img class="w-full rounded-20" src="{{ asset('assets/images/blog-details/banner.png') }}" alt="banner">
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->


        <section class="bg-white pb-120 project-details-section">
            <div class="max-w-1075 mx-auto banner-contents">
                <div class="grid grid-cols-1">

                    <h3 class="text-32 fw-bold font-Syne leading-10 mb-4">Overview</h3>
                    <p class="paragraph mb-12">Minimalism combined with elements of french typography and brutalism
                        helped us to realize the
                        site exactly as we imagined with the client at the beginning: visually restrained, but
                        stylish.
                        Informative and pleasant to use, with an elegant aftertaste of a serious financial
                        institution.
                        Combined with elements of french typography and visually restrained, but stylish.
                        Informative
                        and pleasant to use, with an elegant aftertaste of a serious financial institutional client,
                        and
                        close collaboration.</p>
                    <p class="paragraph mb-12">That is where I come in. A lover of words, a wrangler of copy. Here
                        to
                        create copy that not only
                        reflects who you are and what you stand for, but words that truly land with those that read
                        them, calling your audience in and making them want more.</p>
                    <ul class="list-style-squre text-dark text-xl fw-bold font-Syne mb-12 list-unstyled">
                        <li>
                            Advantage</li>
                        <li>
                            Accomplished</li>
                        <li>
                            Marketplace startups</li>
                        <li>
                            SaaS startups</li>
                    </ul>

                    <h3 class="text-32 fw-bold font-Syne leading-10 mb-4">Typography</h3>
                    <p class="paragraph mb-12">
                        The basic idea was to find a balance between the thin, wispy sans-serif used to indicate a
                        ‘futuristic‘ tone, and a bold, masculine font synonymous with ‘construction‘. We came up
                        with
                        something in the middle, leaning towards lighter-weighted fonts, but still with a hint of
                        that
                        blocky ‘construction’ vibe. We use Chaney for general display and when we want to drive
                        attention to the content, and the technical and geometric Sora font for the body copy and
                        paste
                        overall hierachy.
                    </p>

                </div>
                <div class="row gy-6 mb-12">
                    <div class="col-12 col-sm-5">
                        <img class="w-100 h-100 rounded-20" src="{{ asset('assets/images/blog-details/post1.png') }}" alt="post image">
                    </div>
                    <div class="col-12 col-sm-7">
                        <img class="w-100 h-100 rounded-20" src="{{ asset('assets/images/blog-details/post2.png') }}" alt="post image">
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <h3 class="text-32 fw-bold font-Syne leading-10 mb-4">Conclusion</h3>
                </div>

                <div class="row mb-n6">
                    <div class="col-12 col-lg-6 mb-6">
                        <p class="paragraph">The basic idea was to find a balance between the thin, wispy sans-serif
                            used to indicate a ‘futuristic‘ tone, and a bold, masculine font synonymous with
                            ‘construction‘.
                            We came up with something in the middle, leaning towards lighter-weighted fonts, but still
                            with
                            a hint of that blocky ‘construction’ vibe. We use Chaney for general display and when we
                            want to
                            drive attention to the content, and the technical and geometric Sora font for the body copy
                            and
                            paste overall hierachy.</p>
                    </div>
                    <div class="col-12 col-lg-6 mb-6">
                        <p class="paragraph">
                            The basic idea was to find a balance between the thin, wispy sans-serif used to indicate a
                            ‘futuristic‘ tone, and a bold, masculine font synonymous with ‘construction‘. We came up
                            with
                            something in the middle, leaning towards lighter-weighted fonts, but still with a hint of
                            that
                            blocky ‘construction’ vibe.
                        </p>
                    </div>


                </div>
            </div>
        </section>

        <!-- Project Section Start -->
        <section class="bg-white pb-120">
            <div class="container">
                <div class="row mb-n6">
                    <div class="col-12" data-aos="flip-down" data-aos-delay="400">
                        <div class="fw-bold font-Syne text-center leading-none d-flex flex-wrap flex-column gap-y-2 mb-10">
                            <span class="text-warning text-xl">Portfolio</span>
                            <h3 class="section-title text-dark">
                                Related <span class="position-relative circle-shape portfolio-shape">wo</span>rk
                            </h3>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mb-6" data-aos="flip-down">
                        <div class="rounded-20 overflow-hidden mb-6">
                            <img src="{{ asset('assets/images/projects/project3.png') }}" alt="project1">
                        </div>
                        <div class="d-flex flex-wrap flex-column gap-3">
                            <div class="d-flex flex-wrap gap-2">
                                <a class="text-xs fw-medium font-Inter leading-none px-4 rounded-40 portfolio-tag-link" href="projects.blade.php">APP</a>
                                <a class="text-xs fw-medium font-Inter leading-none px-4 rounded-40 portfolio-tag-link" href="projects.blade.php">DEVELOPMENT</a>

                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-between text-dark portfolio-title">
                                <h4 class="fw-bold font-Syne text-center leading-10 portfolio-link">
                                    <a class="transition-all" href="{{ $project && Auth::user() ? route('project.details', ['username' => Auth::user()->username, 'id' => $project->id]) : '#' }}">Basinik Finance App</a>

                                </h4>
                                <a class="animate-arrow-up" href="{{ $project && Auth::user() ? route('project.details', ['username' => Auth::user()->username, 'id' => $project->id]) : '#' }}">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 mb-6" data-aos="flip-down" data-aos-delay="300">
                        <div class="rounded-20 overflow-hidden mb-6">
                            <img src="assets/images/projects/project4.png" alt="project1">
                        </div>
                        <div class="d-flex flex-wrap flex-column gap-3">
                            <div class="d-flex flex-wrap gap-2">
                                <a class="text-xs fw-medium font-Inter leading-none px-4 rounded-40 portfolio-tag-link" href="projects.blade.php">APP</a>
                                <a class="text-xs fw-medium font-Inter leading-none px-4 rounded-40 portfolio-tag-link" href="projects.blade.php">DEVELOPMENT</a>

                            </div>
                            <div class="d-flex flex-wrap align-items-center justify-content-between text-dark portfolio-title">
                                <h4 class="fw-bold font-Syne text-center leading-10 portfolio-link">
                                    <a class="transition-all" href="project-details.html">Oxilex Dashboard design</a>
                                </h4>
                                <a class="animate-arrow-up" href="project-details.html">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Section End -->
@endsection
