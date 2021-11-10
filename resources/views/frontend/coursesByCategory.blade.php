@extends('layouts.frontend')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Courses
@endsection

{{-- Menu Active --}}
@section('courses')
    active
@endsection

{{-- Main Content --}}
@section('content')
     <!-- Page Banner Start -->
     <div class="section page-banner-section bg-color-1">
        <div class="container">
            <!-- Page Banner Content Start -->
            <div class="page-banner-content">
                <h2 class="title">Course List</h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Course</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner End -->

    <!-- Course List Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Course List Wrapper Start -->
            <div class="course-list-wrapper">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 order-1 order-lg-0">
                        <!-- Course Top Bar Start -->
                        <div class="course-top-bar">
                            <div class="course-top-text">
                                <p>We found <span>{{ $courses->count() }}</span> Courses For You</p>
                            </div>
                        </div>
                        <!-- Course Top Bar End -->
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="grid">
                                <div class="row">
                                    @include('includes.course')
                                </div>
                            </div>
                        </div>

                        <!-- Page Pagination Start -->
                        @if ($courses->count() != 0)
                            @include('includes.pagination')
                        @endif
                        <!-- Page Pagination End -->

                    </div>
                    <div class="col-lg-3 order-0 order-lg-1">
                        <!-- Sidebar Wrapper Start -->
                        <div class="sidebar-wrap-02">
                            <!-- Sidebar Wrapper Start -->
                            <div class="sidebar-widget-02">
                                <h3 class="widget-title">Categories</h3>
                                <div class="widget-checkbox">
                                    <ul class="checkbox-list">
                                        @foreach ( categories() as $category)  
                                            <li class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox3">
                                                <label class="form-check-label" for="checkbox3">{{ $category->category_name }} ({{ $category->getCourses->count() }})</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Wrapper End -->
                        </div>
                        <!-- Sidebar Wrapper End -->
                    </div>
                </div>
            </div>
            <!-- Course List Wrapper End -->

        </div>
    </div>
    <!-- Course List End -->
@endsection