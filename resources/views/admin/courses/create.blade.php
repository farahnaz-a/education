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
                Course Create
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
                <h4 class="card-title">Course Create</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('courses.store') }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Course Title</label>
                                <input name="title" value="{{ old('title') }}" type="text" id="title" placeholder="Enter course title" class="form-control"/>
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
                                        <option value="">-Select author-</option>
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->id }}">{{ ucfirst($author->name) }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        @else
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">    
                        @endif
                        <div class="col-12">
                            <div class="form-group">
                                <label for="category_id">Course Category (Add a new category if you cannot find an existing category of your choice)</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">-Select category-</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ ucfirst($category->category_name) }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="thumbnail_image">Thumbnail Image (400 X 270)PX</label>
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
                                <textarea name="short_description" placeholder="Write short description" value="" class="form-control">{{ old('short_description') }}</textarea>
                                @error('short_description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="course_overview">Course Overview</label>
                                <input name="course_overview" value="{{ old('course_overview') }}" id="course_overview" type="hidden">
                                <trix-editor input="course_overview" placeholder="Write course overview"></trix-editor>
                                @error('course_overview')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
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
                                <input name="language" value="{{ old('language') }}" type="text" id="language" placeholder="Enter course language" class="form-control"/>
                                @error('language')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="level">Course Level</label>
                                <input name="level" value="{{ old('level') }}" type="text" id="level" placeholder="Enter course level" class="form-control"/>
                                @error('level')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="duration">Course Duration</label>
                                <input name="duration" value="{{ old('duration') }}" type="text" id="duration" placeholder="Ex: 2hours 10m" class="form-control"/>
                                @error('duration')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="price">Course Price ($)</label>
                                <input name="price" value="{{ old('price') }}" type="text" id="price" placeholder="Ex: 20.00" class="form-control"/>
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection