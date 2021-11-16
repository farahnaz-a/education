@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Lesson
@endsection

{{-- Active Menu --}}
@section('lessons')
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
                Lessons Edit
            </li>
        </ol>
    </div>
@endsection

{{-- Main Content --}}
@section('content')
<div class="row" id="basic-table">
    <div class="col-md-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ ucfirst($lesson->lesson_title) }} Edit</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('lessons.update', $lesson->id) }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="course_id">Select Course</label>
                                <select name="course_id" id="course_id" class="form-control">

                                    <option value="{{ $lesson->getCourses->id }}">{{ $lesson->getCourses->title }}</option>

                                    @foreach ($author_courses as $course)
                                        @if ($lesson->getCourses->id != $course->id)
                                            <option value="{{ $course->id }}">{{ ucfirst($course->title) }}</option>
                                        @endif
                                    @endforeach
                                    
                                </select>
                                @error('course_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="lesson_title">Lesson Title</label>
                                <input name="lesson_title" value="{{ $lesson->lesson_title }}" type="text" id="lesson_title" placeholder="Enter lesson title" class="form-control"/>
                                @error('lesson_title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Existing Video</label>
                                <br>
                                <video width="200" src="{{ asset('uploads/courses/lessons') }}/{{ $lesson->lesson_video }}" controls></video>
                            </div>
                            <div class="form-group">
                                <label for="lesson_video">Update Lesson Video</label>
                                <div class="custom-file">
                                    <input type="file" name="lesson_video" class="custom-file-input" id="lesson_video">
                                    <label class="custom-file-label" for="lesson_video">Choose Video file</label>
                                </div>
                                @error('lesson_video')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="serial">Lesson Custom Serial</label>
                                <input name="serial" value="{{ $lesson->serial }}" type="text" id="serial" placeholder="Enter lesson serial" class="form-control"/>
                                @error('serial')
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