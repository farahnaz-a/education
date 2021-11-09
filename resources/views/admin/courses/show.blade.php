@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Courses
@endsection

{{-- Active Menu --}}
@section('coursesList')
    active
@endsection


{{-- Breadcrumb --}}
@section('breadcrumb')
     <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="breadcrumb-item active">
                Courses
            </li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
<div class="row" id="basic-table">
    <div class="col-12 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Course Details</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>Title</th>
                                <td>{{ ucfirst($course->title) }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ ucfirst($course->getCategory->category_name) }}</td>
                            </tr>
                            <tr>
                                <th>Author Name</th>
                                <td>{{ ucfirst($course->getAuthor->name) }}</td>
                            </tr>
                            <tr>
                                <th>Thumbnail Image</th>
                                <td><img src="{{ asset('uploads/courses') }}/{{ $course->thumbnail_image }}" style="max-width: 150px;" alt="not-found"></td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>{{ ucfirst($course->short_description) }}</td>
                            </tr>
                            @if ($course->course_overview)
                            <tr>
                                <th>Course Overview</th>
                                <td>{!! ucfirst($course->course_overview) !!}</td>
                            </tr>
                            @endif
                            @if ($course->intro_video)
                            <tr>
                                <th>Intro Video</th>
                                <td><video src="{{ asset('uploads/courses') }}/{{ $course->intro_video }}" controls style="max-width: 200px"></video></td>
                            </tr>
                            @endif
                            <tr>
                                <th>Price</th>
                                <td>${{ $course->price }}</td>
                            </tr>
                            <tr>
                                <th>Language</th>
                                <td>{{ ucfirst($course->language) }}</td>
                            </tr>
                            @if ($course->level)
                            <tr>
                                <th>Level</th>
                                <td>{{ ucfirst($course->level) }}</td>
                            </tr>
                            @endif
                            @if ($course->duration)
                            <tr>
                                <th>Duration</th>
                                <td>{{ ucfirst($course->duration) }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>   
            <div class="card-footer pt-0 border-top-0">
                <a href="{{ route('courses.index') }}" class="btn btn-primary">Return back</a>
                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-info">Edit</a>
            </div> 
        </div>
    </div>
</div>
@endsection