@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Course
@endsection

{{-- Active Menu --}}
@section('coursesCreate')
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
                Course Edit
            </li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
<div class="row" id="basic-table">
    <div class="col-6 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Course Edit</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('courses.update', $course->id) }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Course Title</label>
                                <input name="title" value="{{ $course->title }}" type="text" id="title" class="form-control"/>
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        @if (Auth::user()->role == 'admin')
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="user_id">Author Name</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option selected value="{{ $course->getAuthor->id }}">{{ $course->getAuthor->name }}</option>
                                        @foreach ($authors as $author)
                                            @if ($course->getAuthor->name != $author->name )
                                                <option value="{{ $author->id }}">{{ ucfirst($author->name) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        @else
                        <input type="hidden" name="user_id" value="{{ $course->user_id }}">  

                        @endif

                        <div class="col-12">
                            <div class="form-group">
                                <label for="category_id">Course Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option selected value="{{ $course->getCategory->id }}">{{ $course->getCategory->category_name }}</option>
                                    @foreach ($categories as $category)
                                        @if ($category->category_name != $course->getCategory->category_name )
                                        <option value="{{ $category->id }}">{{ ucfirst($category->category_name) }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="d-block" for="">Existing Thumbnail Image:</label>
                                <img src="{{ asset('uploads/courses') }}/{{ $course->thumbnail_image }}" style="max-width: 150px" alt="">
                            </div>
                            <div class="form-group">
                                <label for="thumbnail_image">Thumbnail Image</label>
                                <div class="custom-file">
                                    <input type="file" name="thumbnail_image" class="custom-file-input" id="thumbnail_image">
                                    <label class="custom-file-label" for="thumbnail_image">Choose file</label>
                                </div>
                                @error('thumbnail_image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="short_description">Course Short Description</label>
                                <textarea name="short_description" value="" class="form-control">{{ $course->short_description }}</textarea>
                                @error('short_description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="course_overview">Course Overview</label>
                                <input name="course_overview" value="{{ $course->course_overview }}" id="course_overview" type="hidden">
                                <trix-editor input="course_overview" placeholder="Write course overview"></trix-editor>
                                @error('course_overview')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            @if ($course->intro_video)
                            <div class="form-group">
                                <label class="d-block" for="">Existing Intro Video:</label>
                                <video src="{{ asset('uploads/courses') }}/{{ $course->intro_video }}" controls style="max-width: 240px"></video>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="intro_video">Course Intro Video</label>
                                <div class="custom-file">
                                    <input type="file" name="intro_video" class="custom-file-input" id="intro_video">
                                    <label class="custom-file-label" for="intro_video">Choose Video file</label>
                                </div>
                                @error('intro_video')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="language">Course Language</label>
                                <input name="language" value="{{ $course->language }}" type="text" id="language" class="form-control"/>
                                @error('language')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="level">Course Level</label>
                                <input name="level" value="{{ $course->level }}" type="text" id="level" class="form-control"/>
                                @error('level')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="duration">Course Duration</label>
                                <input name="duration" value="{{ $course->duration }}" type="text" id="duration" class="form-control"/>
                                @error('duration')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="price">Course Price</label>
                                <input name="price" value="{{ $course->price }}" type="text" id="price" class="form-control"/>
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection