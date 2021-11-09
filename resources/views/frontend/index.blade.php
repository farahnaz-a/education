@extends('layouts.frontend')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Education
@endsection

{{-- Menu Active --}}
@section('index')
    active
@endsection



{{-- Page Content --}}
@section('content')

    <!-- Slider Start -->
    <div class="slider-section-04 section">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6">
                    <!-- Slider Start -->
                    <div class="slider-content">
                        <h2 class="title">{{ $banner->title }}</h2>
                        <p>{{ $banner->short_description }}</p>
                        <a href="{{ route('frontend.courseList') }}" class="btn btn-primary btn-hover-heading-color">Explore All Courses</a>
                    </div>
                    <!-- Slider End -->
                </div>
                <div class="col-md-6 col-sm-8">
                    <!-- Slider Images Start -->
                    <div class="slider-images-04">
                        <div class="image">
                            <img src="{{ asset('uploads/banners') }}/{{ $banner->image }}" alt="Hero">
                        </div>
                    </div>
                    <!-- Slider Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider End -->

    <!-- Top course Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title">Latest Tutorials</h2>
            </div>
            <!-- Section Title End -->

            <!-- Courses Wrapper Start -->
            <div class="courses-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            @include('includes.course')
                        </div>
                    </div>
                </div>
            </div>
            <!-- Courses Wrapper End -->

            <div class="courses-more text-center">
                <a href="{{ route('frontend.courseList') }}" class="btn btn-primary btn-hover-heading-color">Explore All Courses</a>
            </div>

        </div>
    </div>
    <!-- Top course End -->

    <!-- Feature Category Start -->
    <div class="section section-padding feature-category-section bg-color-2">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title">Featured topics by category</h2>
            </div>
            <!-- Section Title End -->

            <!-- Feature Category Body Start -->
            <div class="feature-category-body">
                <div class="row">
                    @foreach (categories() as $category)
                    <div class="col-lg-3 col-sm-6">
                        <!-- Category Item Start -->
                        <div class="single-category-item category-white text-center">
                            <a href="#">
                                <span class="title">{{ ucfirst($category->category_name) }}</span>
                            </a>
                        </div>
                        <!-- Category Item End -->
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Feature Category Body End -->

        </div>
    </div>
    <!-- Feature Category End -->

@endsection


       