@extends('layouts.frontend')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Course Details
@endsection

{{-- Menu Active --}}
@section('courses')
    active
@endsection

{{-- Page content --}}
@section('content')
     <!-- Page Banner Start -->
     <div class="section page-banner-section bg-color-1">
        <div class="container">
            <!-- Course Details Banner Content Start -->
            <div class="course-details-banner-content">

                <h2 class="title">2021 Complete Python Bootcamp From Zero to Hero in Python </h2>

                <p>Learn Python like a Professional Start from the basics and go all the way to creating your own applications and games </p>

                <div class="course-details-meta">
                    <div class="meta-action">
                        <div class="meta-author">
                            <img src="{{ asset('frontend_assets/images/author-1.jpg') }}" alt="Author">
                        </div>
                        <div class="meta-name">
                            <h5 class="name">Adam Helen</h5>
                        </div>
                    </div>

                    <div class="meta-action">
                        <p class="label">Last Update : <span>2/12/2021</span></p>
                    </div>
                </div>
            </div>
            <!-- Course Details Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Course List Start -->
    <div class="section section-padding">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-xl-7 col-lg-8">

                    <!-- Course Details Wrapper Start -->
                    <div class="course-details-wrapper">

                        <!-- Course Overview Start -->
                        <div class="course-overview">
                            <h3 class="title">Course Overview</h3>
                            <p>World-class training and development programs developed by top teachers. Build skills with courses, certificates, and degrees online from world-class universities and companies. from the National Research University Higher School of Economics (HSE University) is the first fully online.</p>
                        </div>
                        <!-- Course Overview End -->

                        <!-- Course Learn List Start -->
                        <div class="course-learn-list">
                            <h3 class="title">What you will learn</h3>
                            <ul>
                                <li>Become a UX designer.</li>
                                <li>Become a UX designer.</li>
                                <li>You will be able to add UX designer to your CV</li>
                                <li>You will be able to add UX designer to your CV</li>
                                <li>Build & test a full website design.</li>
                                <li>Build & test a full website design.</li>
                            </ul>
                        </div>
                        <!-- Course Learn List End -->

                        <!-- Course Lessons Start -->
                        <div class="course-lessons">

                            <div class="lessons-top">
                                <h3 class="title">Course Content</h3>
                                <div class="lessons-time">
                                    <span>10 Lessons</span>
                                    <span>6h 40m</span>
                                </div>
                            </div>

                            <!-- Course Accordion Start -->
                            <div class="course-accordion accordion" id="accordionCourse">
                                <div class="accordion-item">
                                    <button data-bs-toggle="collapse" data-bs-target="#collapseOne">Introduction </button>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionCourse">
                                        <div class="accordion-body">
                                            <ul class="lessons-list">
                                                <li><a href="#"><i class="fa fa-play-circle"></i> Greetings and Introductions <span>5:00</span></a></li>
                                                <li><a href="#"><i class="fa fa-play-circle"></i> 5 Business English Phrasal Verbs <span>3:17</span></a></li>
                                                <li><a href="#"><i class="fa fa-question-circle"></i> Quizz 1 : How to start?</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Analysis</button>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                                        <div class="accordion-body">
                                            <ul class="lessons-list">
                                                <li><a href="#"><i class="fa fa-play-circle"></i> Greetings and Introductions <span>5:00</span></a></li>
                                                <li><a href="#"><i class="fa fa-play-circle"></i> 5 Business English Phrasal Verbs <span>3:17</span></a></li>
                                                <li><a href="#"><i class="fa fa-question-circle"></i> Quizz 1 : How to start?</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Practical</button>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionCourse">
                                        <div class="accordion-body">
                                            <ul class="lessons-list">
                                                <li><a href="#"><i class="fa fa-play-circle"></i> Greetings and Introductions <span>5:00</span></a></li>
                                                <li><a href="#"><i class="fa fa-play-circle"></i> 5 Business English Phrasal Verbs <span>3:17</span></a></li>
                                                <li><a href="#"><i class="fa fa-question-circle"></i> Quizz 1 : How to start?</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Course Accordion End -->

                        </div>
                        <!-- Course Lessons End -->

                    </div>
                    <!-- Course Details Wrapper End -->

                </div>

                <div class="col-lg-4">
                    <!-- Sidebar Wrapper Start -->
                    <div class="sidebar-details-wrap">

                        <!-- Sidebar Details Video Description Start -->
                        <div class="sidebar-details-video-description">
                            <div class="sidebar-video">
                                <img src="{{ asset('frontend_assets/images/sidebar-video.jpg') }}" alt="video">
                                <a href="https://youtu.be/cdZHQFCqK3g" class="play videoLightbox" href="#"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="sidebar-description">
                                <div class="price">
                                    <span class="sale-price">$49.99</span>
                                    <span class="regular-price">$102</span>
                                </div>
                                <a class="btn btn-primary btn-hover-heading-color w-100" href="#">Entroll</a>
                                <ul class="description-list">
                                    <li><i class="fa fa-clock-o"></i> Duration <span>52 mins</span></li>
                                    <li><i class="fa fa-sliders"></i> Level <span>Expert</span></li>
                                    <li><i class="fa fa-file-o"></i> Lectures <span>4 Lectures</span></li>
                                    <li><i class="fa fa-language"></i> Language <span>English</span></li>
                                    <li><i class="fa fa-user-o"></i> Enrolled <span>4 Enrolled</span></li>
                                </ul>
                                <a class="btn btn-outline-primary w-100" href="#"><i class="fa fa-share"></i> Share This Course</a>
                            </div>
                        </div>
                        <!-- Sidebar Details Video Description End -->

                        <!-- Sidebar Course Start -->
                        <div class="sidebar-details-course">
                            <h4 class="sidebar-details-title">Releted Courses</h4>

                            <ul class="sidebar-details-courses">
                                <li>
                                    <!-- Single Course Start -->
                                    <div class="sidebar-course-item">
                                        <div class="item-image">
                                            <a href=""><img src="{{ asset('frontend_assets/images/courses/courses-2.jpg') }}" alt="Courses"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="title"><a href="">Cupidatat non proident sunt culpa officia deserunt</a></h3>
                                            <span class="price">Price  <strong>$45</strong></span>
                                        </div>
                                    </div>
                                    <!-- Single Course End -->
                                </li>
                                <li>
                                    <!-- Single Course Start -->
                                    <div class="sidebar-course-item">
                                        <div class="item-image">
                                            <a href=""><img src="{{ asset('frontend_assets/images/courses/courses-3.jpg') }}" alt="Courses"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="title"><a href="">Cupidatat non proident sunt culpa officia deserunt</a></h3>
                                            <span class="price">Price  <strong>$45</strong></span>
                                        </div>
                                    </div>
                                    <!-- Single Course End -->
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar Course End -->

                    </div>
                    <!-- Sidebar Wrapper End -->
                </div>
            </div>


        </div>
    </div>
    <!-- Course List End -->
@endsection