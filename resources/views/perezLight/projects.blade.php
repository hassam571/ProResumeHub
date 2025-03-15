@extends('perezLight.layouts.main')
@section('content')
        <!-- Header end -->


        <!-- Portfolio Section Start -->
        <section class="bg-white pt-20 pb-120">
            <div class="container mx-auto">
                <div class="row">
                    <div class="col-12" data-aos="flip-down" data-aos-delay="400">
                        <div class="fw-bold font-Syne text-center leading-none d-flex flex-wrap flex-column gap-y-2 mb-10">
                            <span class="text-warning text-xl">Portfolio</span>
                            <h3 class="section-title text-dark">My recent <span
                                    class="position-relative circle-shape portfolio-shape">w</span>ork</h3>
                        </div>
                    </div>
                </div>

                <div class="row g-6">
                    @foreach($projects as $project)
                        <div class="col-12 col-md-6 col-lg-4" data-aos="flip-down" data-aos-delay="600">
                            <div class="overflow-hidden position-relative project-item">

                                @php
                                    $image = is_array($project->project_images)
                                        ? $project->project_images[0] ?? null
                                        : json_decode($project->project_images, true)[0] ?? null;
                                @endphp

                                <img class="w-100 h-100" src="{{ $image ? asset('assets3/images/' . $image) : asset('assets3/images/portfolios/project1.png') }}" alt="project image">

                                <div class="position-absolute project-item-content">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between project-item-contet-wrap">
                                        <h4 class="fw-bold font-Syne text-center leading-10 project-title">
                                            <a class="transition-all" href="{{ route('project.details', ['username' => auth()->user()->username, 'id' => $project->id]) }}">
                                                {{ $project->project_name }}
                                            </a>

                                        </h4>
                                        <a href="{{ route('project.details', ['username' => auth()->user()->username, 'id' => $project->id]) }}" class="animate-arrow-up">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach




                    <div class="col-12 col-md-6 col-lg-7" data-aos="flip-down" data-aos-delay="800">
                        <div class="overflow-hidden position-relative project-item">
                            <img class="w-100 h-100" src="{{ asset('assets3/images/portfolios/project6.png') }}" alt="project1">
                            <div class="position-absolute project-item-content">
                                <div class="d-flex flex-wrap alig-items-center justify-content-between project-item-contet-wrap">
                                    <h4 class="fw-bold font-Syne text-center leading-10 project-title">
                                        <a class="transition-all" href="project-details.blade.php">Oxilex Dashboard
                                            design</a>
                                    </h4>
                                    <a href="project-details.blade.php" class="animate-arrow-up">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="flip-down" data-aos-delay="1000">
                        <div class="overflow-hidden position-relative project-item">
                            <img class="w-100 h-100" src="{{ asset('assets3/images/portfolios/project3.png') }}" alt="project1">
                            <div class="position-absolute project-item-content">
                                <div class="d-flex flex-wrap alig-items-center justify-content-between project-item-contet-wrap">
                                    <h4 class="fw-bold font-Syne text-center leading-10 project-title">
                                        <a class="transition-all" href="project-details.blade.php">Oxilex Dashboard</a>
                                    </h4>
                                    <a href="project-details.blade.php" class="animate-arrow-up">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7" data-aos="flip-down">
                        <div class="overflow-hidden position-relative project-item">
                            <img class="w-100 h-100" src="{{ asset('assets3/images/portfolios/project6.png') }}" alt="project1">
                            <div class="position-absolute project-item-content">
                                <div class="d-flex flex-wrap alig-items-center justify-content-between project-item-contet-wrap">
                                    <h4 class="fw-bold font-Syne text-center leading-10 project-title">
                                        <a class="transition-all" href="project-details.blade.php">Oxilex Dashboard</a>
                                    </h4>
                                    <a href="project-details.blade.php" class="animate-arrow-up">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5" data-aos="flip-down" data-aos-delay="300">
                        <div class="overflow-hidden position-relative project-item">
                            <img class="w-100 h-100" src="{{ asset('assets3/images/portfolios/project7.png') }}" alt="project1">
                            <div class="position-absolute project-item-content">
                                <div class="d-flex flex-wrap alig-items-center justify-content-between project-item-contet-wrap">
                                    <h4 class="fw-bold font-Syne text-center leading-10 project-title">
                                        <a class="transition-all" href="project-details.blade.php">Oxilex Dashboard
                                            design</a>
                                    </h4>
                                    <a href="project-details.blade.php" class="animate-arrow-up">
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
            </div>
        </section>
        <!-- Portfolio Section End -->

@endsection
