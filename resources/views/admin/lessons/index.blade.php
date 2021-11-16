@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Lessons
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
                Lessons
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
                <h4 class="card-title">{{ ucfirst($course->title) }}'s Lessons</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            @if (Auth::user()->role == 'admin' || 'author')
                <div class="card-header">
                    <a href="{{ route('lessons.create') }}" class="btn btn-primary">+ Add Lessons</a>
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="data_table">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Lesson Title</th>
                                <th>Lesson Video</th>
                                <th>Serialize</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lessons as $lesson)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ ucfirst($lesson->lesson_title) }}</td>
                                <td>
                                    <video width="200" src="{{ asset('uploads/courses/lessons') }}/{{ $lesson->lesson_video }}" controls></video>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#serialize{{ $lesson->id }}" class="btn btn-sm btn-primary">Serialize</a>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('lessons.edit', $lesson->id) }}">
                                                <i data-feather="edit-2" class="mr-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <form action="{{ route('lessons.destroy', $lesson->id) }}" method="POST">
                                                {{-- Initiate Delete method --}}
                                                {{ method_field('DELETE') }}
                                                @csrf 
                                                <a class="dropdown-item" href="{{ route('lessons.destroy', $lesson->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    <i data-feather="trash" class="mr-50"></i>
                                                    <span>Delete</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                <!-- Modal -->
                                <div class="modal fade text-left modal-primary" id="serialize{{ $lesson->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel160" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <form action="{{ route('lessons.serialze', $lesson->id) }}" method="POST">
                                            @csrf
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel160">{{ ucfirst($lesson->lesson_title) }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="serial">Re-order your course lesson</label>
                                                        <input name="serial" value="{{ $lesson->serial }}" type="text" id="serial" placeholder="Enter lesson serial" class="form-control"/>
                                                        @error('serial')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        @foreach($lessons as $lesson)
        $(document).ready(function() {
            @if(count($errors) > 0)
            $("#serialize{{ $lesson->id }}").modal('show');
            @endif
        });
        @endforeach
    </script>
@endsection