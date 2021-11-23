@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Live Sessions
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
                Live Sessions
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
                <h4 class="card-title">Live Sessions List</h4>
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
                                <th>Title</th>
                                <th>Category</th>
                                <th>Zoom ID</th>
                                <th>Zoom Password</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($liveSessions as $liveSession)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ ucfirst($liveSession->title) }}</td>
                                <td>{{ ucfirst($liveSession->getCategory->category_name) }}</td>
                                <td>{{ ucfirst($liveSession->zoom_id) }}</td>
                                <td>{{ ucfirst($liveSession->password) }}</td>
                                <td>${{ $liveSession->price }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('liveSessions.show', $liveSession->id) }}">
                                                <i data-feather="eye" class="mr-50"></i>
                                                <span>Show</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('liveSessions.edit', $liveSession->id) }}">
                                                <i data-feather="edit-2" class="mr-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <form action="{{ route('liveSessions.destroy', $liveSession->id) }}" method="POST">
                                                {{-- Initiate Delete method --}}
                                                {{ method_field('DELETE') }}
                                                @csrf 
                                                <a class="dropdown-item" href="{{ route('liveSessions.destroy', $liveSession->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
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