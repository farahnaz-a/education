@extends('layouts.frontend')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ $course->title }}
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

                <h2 class="title">{{ $course->title }}</h2>

                <p>{{ $course->short_description }}</p>

                <div class="course-details-meta">
                    <div class="meta-action">
                        <div class="meta-author">
                            <img src="{{ $course->getAuthor->profile_photo_url }}" alt="Author">
                        </div>
                        <div class="meta-name">
                            <h5 class="name">{{ ucfirst($course->getAuthor->name) }}</h5>
                        </div>
                    </div>

                    <div class="meta-action">
                        <p class="label">Last Update : <span>{{ $course->updated_at->format('d M Y') }}</span></p>
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

                        <!-- Course Overview -->
                        <div class="course-learn-list mt-0">
                            <h3 class="title">Course Overview</h3>
                            <p>{!! $course->course_overview !!}</p>
                        </div>
                        <!-- Course Learn List End -->

                        <!-- Course Lessons Start -->
                        <div class="course-lessons">
                            <div class="lessons-top">
                                <h3 class="title">Course Content</h3>
                                <div class="lessons-time">
                                    <span>{{ $course->getLessons->count() }} Lessons</span>
                                    <span>{{ $course->duration }}</span>
                                </div>
                            </div>
                            <!-- Course Accordion Start -->
                            <div class="course-accordion accordion" id="accordionCourse">
                                @foreach ($course->getLessons as $key => $lesson)
                                    <div class="accordion-item">
                                        <button data-bs-toggle="collapse" class="{{ $key != 0 ? 'collapsed' : '' }}" data-bs-target="#collapse{{ $lesson->id }}">{{ ucfirst($lesson->lesson_title) }} </button>
                                        <div id="collapse{{ $lesson->id }}" class="accordion-collapse collapse {{ $key == 0 ? 'show' : '' }}" data-bs-parent="#accordionCourse">
                                            <div class="accordion-body">
                                                <ul class="lessons-list">
                                                    <li><a href="#"><i class="fa fa-play-circle"></i> Greetings and Introductions <span>5:00</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
                                <img src="{{ asset('uploads/courses') }}/{{ $course->thumbnail_image }}" alt="video">
                                <a href="" class="play videoLightbox" href="#"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="sidebar-description">
                                <div class="price">
                                    <span class="sale-price">${{ $course->price }}</span>
                                    {{-- <span class="regular-price">$102</span> --}}
                                </div>
                                <a class="btn btn-primary btn-hover-heading-color w-100" href="#">Entroll</a>
                                <ul class="description-list">
                                    <li><i class="fa fa-clock-o"></i> Duration <span>{{ $course->duration }}</span></li>
                                    <li><i class="fa fa-sliders"></i> Level <span>{{ ucfirst($course->level) }}</span></li>
                                    <li><i class="fa fa-file-o"></i> Lessons <span>{{ $course->getLessons->count() }}</span></li>
                                    <li><i class="fa fa-language"></i> Language <span>{{ ucfirst($course->language) }}</span></li>
                                    <li><i class="fa fa-user-o"></i> Enrolled <span>4 Enrolled</span></li>
                                </ul>
                                <a class="btn btn-outline-primary w-100" href="#"><i class="fa fa-share"></i> Share This Course</a>
                            </div>
                        </div>
                        <!-- Sidebar Details Video Description End -->

                        <!-- Sidebar Course Start -->
                        <div class="sidebar-details-course">
                            @if($related_courses->count() > 1)
                            <h4 class="sidebar-details-title">Releted Courses</h4>
                            @endif
                            <ul class="sidebar-details-courses">
                                @forelse ($related_courses as $item)
                                    @if ($course->id != $item->id)
                                        <li>
                                            <!-- Single Course Start -->
                                            <div class="sidebar-course-item">
                                                <div class="item-image">
                                                    <a href="{{ route('frontend.courseDetails', $item->slug) }}">
                                                        <img src="{{ asset('uploads/courses') }}/{{ $item->thumbnail_image }}" alt="Courses">
                                                    </a>
                                                </div>
                                                <div class="item-content">
                                                    <h3 class="title"><a href="">{{ $item->title }}</a></h3>
                                                    <span class="price">Price  <strong>${{ $item->price }}</strong></span>
                                                </div>
                                            </div>
                                            <!-- Single Course End -->
                                        </li>
                                    @endif
                                @empty 
                                No Related Course    
                                @endforelse
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