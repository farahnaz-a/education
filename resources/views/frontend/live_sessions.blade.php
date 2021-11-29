@extends('layouts.frontend')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Courses
@endsection

{{-- Menu Active --}}
@section('livesessions')
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
                        Live Sessions
                    @endif
                </h2>
                <ul class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Live Sessions</li>
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
                                <p>Live Sessions</p>
                            </div>
                        </div>
                        <!-- Course Top Bar End -->
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="grid">
                                <div class="row" id="category_filtering">
                                     @include('includes.livesessions')
                                </div>
                            </div>
                        </div>

                        <!-- Page Pagination Start -->
                       
                        <div class="page-pagination custom-pagination">{{ $livesessions->links() }}</div>
                        
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
                                                <input value="{{ $category->id }}" class="form-check-input" type="radio" name="category" id="category{{ $category->id }}">
                                                <label class="form-check-label" for="category{{ $category->id }}">{{ $category->category_name }} ({{ $category->getLivesessions->count() }})</label>
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
                    url: "{{ route('frontend.livesessionsFiltering') }}",
                    data: 
                    {
                        category : category,
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