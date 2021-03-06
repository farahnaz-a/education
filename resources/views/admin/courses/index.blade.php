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
                <h4 class="card-title">Course List</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="data_table">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Course Title</th>
                                <th>Price</th>
                                <th>Author</th>
                                <th>Lesson List</th>
                                <th>Thumbnail Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ ucfirst(Str::limit($course->title, 40)) }}</td>
                                    <td>${{ $course->price }}</td>
                                    <td>{{ ucfirst($course->getAuthor->name) }}</td>
                                    <td> <a href="{{ route('lessons.show', $course->id) }}" class="btn btn-sm btn-info">Lesson List</a> </td>
                                    <td>
                                        <img src="{{ asset('uploads/courses') }}/{{ $course->thumbnail_image }}" style="max-width: 150px" alt="not-found">
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                <i data-feather="more-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('courses.show', $course->id) }}">
                                                    <i data-feather="eye" class="mr-50"></i>
                                                    <span>Show</span>
                                                </a>
                                                <a class="dropdown-item" href="{{ route('courses.edit', $course->id) }}">
                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                    <span>Edit</span>
                                                </a>
                                                <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                                    {{-- Initiate Delete method --}}
                                                    {{ method_field('DELETE') }}
                                                    @csrf 
                                                    <a class="dropdown-item" href="{{ route('courses.destroy', $course->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                        <i data-feather="trash" class="mr-50"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection