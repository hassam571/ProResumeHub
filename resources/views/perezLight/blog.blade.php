@extends('perezLight.layouts.main')
@section('content')


    <!-- Blog Section Start -->
        <section class="bg-white pt-20 pb-120">
            <div class="container">

                <div class="row">
                    <div class="col-12" data-aos="flip-down" data-aos-delay="400">
                        <div class="fw-bold font-Syne text-center leading-none flex flex-wrap flex-column gap-y-2 mb-10">
                            <span class="text-warning text-xl">Blog</span>
                            <h3 class="section-title text-dark">
                                My blog
                                <span class="position-relative circle-shape blog-shape-inner">po</span>st
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="blog-grid">

                    <!-- Blog Item Start -->
                    @foreach($skills as $skill)
                        <div class="blog-item" data-aos="zoom-in-up" data-aos-delay="600">
                            <div class="rounded-20 overflow-hidden mb-6">
                                <img class="w-100" src="{{ $skill->skill_icon ? $skill->skill_icon : asset('default/image/path.png') }}" alt="blog image">
                            </div>
                            <div class="d-flex flex-wrap flex-column gap-3">
                                <ul class="d-flex flex-wrap text-sm fw-normal font-Inter leading-tight p-0 list-unstyled m-0">
                                    <li class="blog-meta-item">
                                        <a href="#">{{ $skill->skill_subcategory }}</a>
                                    </li>
                                    <li class="blog-meta-item">
                                        <a href="#">{{ \Carbon\Carbon::parse($skill->start_date)->format('d M, Y') }}</a>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-end text-dark blog-title-section">
                                    <h4 class="fw-bold font-Syne transition-all leading-8 blog-title">
                                        <a href="{{ route('blog.details', ['username' => auth()->user()->username, 'id' => $skill->id]) }}">
                                            {{ $skill->skill_description }}
                                        </a>
                                    </h4>
                                    <a class="animate-arrow-up" href="{{ route('blog.details', ['username' => auth()->user()->username, 'id' => $skill->id]) }}">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M30.8839 9.11612C31.372 9.60427 31.372 10.3957 30.8839 10.8839L10.8839 30.8839C10.3957 31.372 9.60427 31.372 9.11612 30.8839C8.62796 30.3957 8.62796 29.6043 9.11612 29.1161L29.1161 9.11612C29.6043 8.62796 30.3957 8.62796 30.8839 9.11612Z" fill="currentColor" fill-opacity="0.9" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 10C12.5 9.30964 13.0596 8.75 13.75 8.75H30C30.6904 8.75 31.25 9.30964 31.25 10V26.25C31.25 26.9404 30.6904 27.5 30 27.5C29.3096 27.5 28.75 26.9404 28.75 26.25V11.25H13.75C13.0596 11.25 12.5 10.6904 12.5 10Z" fill="currentColor" fill-opacity="0.9" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <!-- Blog Item End -->



                </div>

            </div>
        </section>
        <!-- Blog Section End -->

@endsection
