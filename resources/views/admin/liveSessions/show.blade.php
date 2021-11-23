@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Live Session
@endsection

{{-- Active Menu --}}
@section('liveSessionsList')
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
                live Sessions
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
                <h4 class="card-title">{{ $liveSession->title }}</h4>
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
                                <td>{{ ucfirst($liveSession->title) }}</td>
                            </tr>
                            @if ($liveSession->subtitle)
                                <tr>
                                    <th>Subtitle</th>
                                    <td>{{ ucfirst($liveSession->subtitle) }}</td>
                                </tr>
                            @endif
                            <tr>
                                <th>Category</th>
                                <td>{{ ucfirst($liveSession->getCategory->category_name) }}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{ Carbon\Carbon::parse($liveSession->date)->format('h:i A, d M y')  }}</td>
                            </tr>
                            <tr>
                                <th>Zoom ID</th>
                                <td>{{ $liveSession->zoom_id }}</td>
                            </tr>
                            <tr>
                                <th>Zoom Password</th>
                                <td>{{ $liveSession->password }}</td>
                            </tr>
                            <tr>
                                <th>Cover Image</th>
                                <td><img src="{{ asset('uploads/liveSessions') }}/{{ $liveSession->cover_image }}" style="max-width: 150px;" alt="not-found"></td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ ucfirst($liveSession->description) }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>${{ $liveSession->price }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>   
            <div class="card-footer pt-0 border-top-0">
                <a href="{{ route('liveSessions.index') }}" class="btn btn-primary">Return back</a>
                <a href="{{ route('liveSessions.edit', $liveSession->id) }}" class="btn btn-info">Edit</a>
            </div> 
        </div>
    </div>
</div>
@endsection