@extends('layouts.frontend')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ $livesession->title }}
@endsection

{{-- Menu Active --}}
@section('livesessions')
    active
@endsection

{{-- Page content --}}
@section('content')
     <!-- Page Banner Start -->
     <div class="section page-banner-section bg-color-1">
        <div class="container">
            <!-- Course Details Banner Content Start -->
            <div class="course-details-banner-content">

                <h2 class="title">{{ $livesession->title }}</h2>

                <p>{{ $livesession->subtitle }}</p>

                <div class="course-details-meta">
                    <div class="meta-action">
                        <p class="label">Last Update : <span>{{ $livesession->updated_at->format('d M Y') }}</span></p>
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
                            <h3 class="title">Live Lessions Overview</h3>
                            <p>{{ ucfirst($livesession->description) }}</p>
                            <ul class="description-list">
                                <li>
                                    Category : <span>{{ ucfirst($livesession->getCategory->category_name )}}</span>
                                </li>
                                <li>
                                     Price : <span>${{ $livesession->price }}</span>
                                </li>
                                <li>
                                     Date : <span>{{ Carbon\Carbon::parse($livesession->date)->format('H:ia, d M Y') }}</span>
                                </li>
                                <li>
                                     Zoom Id : <span>{{ $livesession->zoom_id }}</span>
                                </li>
                                <li>
                                     Enrolled : <span>4</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Course Learn List End -->

                        <!-- Course Lessons Start -->
                       
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
                                <img src="{{ asset('uploads/liveSessions') }}/{{ $livesession->cover_image }}" alt="">
                            </div>
                            <div class="sidebar-description">
                                <div class="price">
                                    <span class="sale-price">${{ $livesession->price }}</span>
                                    {{-- <span class="regular-price">$102</span> --}}
                                </div>
                                <a class="btn btn-primary btn-hover-heading-color w-100" href="#">Entroll</a>
                                <a class="btn btn-outline-primary w-100" href="#"><i class="fa fa-share"></i> Share This Live Session</a>
                            </div>
                        </div>
                        <!-- Sidebar Details Video Description End -->

                        <!-- Sidebar Course Start -->
                        <div class="sidebar-details-course">
                            <h4 class="sidebar-details-title">Releted Courses</h4>
                            <ul class="sidebar-details-courses">
                                @foreach ($related_livesessions as $item)
                                    @if ($livesession->id != $item->id)
                                        <li>
                                            <!-- Single Course Start -->
                                            <div class="sidebar-course-item">
                                                <div class="item-image">
                                                    <a href="{{ route('frontend.livesessionsDetails', $item->id) }}">
                                                        <img src="{{ asset('frontend_assets/images/courses/courses-2.jpg') }}" alt="Courses">
                                                    </a>
                                                </div>
                                                <div class="item-content">
                                                    <h3 class="title"><a href="">{{ $item->title }}</a></h3>
                                                    <span class="price">Price  <strong>${{ $item->price }}</strong></span>
                                                </div>
                                            </div>
                                            <!-- Single Course End -->
                                        </li>
                                    @else 
                                        No Related Course
                                    @endif
                                @endforeach
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