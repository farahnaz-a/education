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
                <h2 class="title">
                    @if (Route::is('frontend.courseByCategory'))
                        {{ ucfirst($category->category_name) }} 
                    @else
                    Course List
                    @endif
                </h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Courses</li>
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
                                <p>Courses</p>
                                {{-- <p>We found <span>{{ $courses->count() }}</span> Courses For You</p> --}}
                            </div>
                        </div>
                        <!-- Course Top Bar End -->
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="grid">
                                <div class="row" id="category_filtering">
                                     @include('includes.course')
                                </div>
                            </div>
                        </div>

                        <!-- Page Pagination Start -->
                       
                        @include('includes.pagination')
                        
                        <!-- Page Pagination End -->

                    </div>
                    <div class="col-lg-3 order-0 order-lg-1">
                        <!-- Sidebar Wrapper Start -->
                        @include('includes.filterByCategory')
                        <!-- Sidebar Wrapper End -->
                    </div>
                </div>
            </div>
            <!-- Course List Wrapper End -->

        </div>
    </div>
    <!-- Course List End -->
@endsection


@section('js')

    @foreach (categories() as $category)
        <script>
            $(document).ready(function () {
                $('#category{{ $category->id }}').click(function () { 
                

                let category = $('#category{{ $category->id }}').val();
                
                
                $.ajaxSetup({
                        headers: 
                        {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });

                $.ajax({
                    type: "POST",
                    url: "{{ route('frontend.courseFiltering') }}",
                    data: 
                    {
                        category:category,
                    },
                    success: function (data) {
                        
                        $('#category_filtering').html(data.response);
                    },
                    
                });
                
                });
            });
        </script>
    @endforeach

@endsection