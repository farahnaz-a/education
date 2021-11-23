@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | live Session
@endsection

{{-- Active Menu --}}
@section('liveSessionsCreate')
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
                live Session Edit
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
                <h4 class="card-title">live Session Edit</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('liveSessions.update', $liveSession->id) }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" value="{{ $liveSession->title }}" type="text" id="title" placeholder="Enter title" class="form-control"/>
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input name="subtitle" value="{{ $liveSession->subtitle }}" type="text" id="subtitle" placeholder="Enter subtitle" class="form-control"/>
                                @error('subtitle')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="{{ $liveSession->getCategory->id }}">{{ ucfirst($liveSession->getCategory->category_name )}}</option>
                                    @foreach (categories() as $category)
                                        @if ($liveSession->getCategory->category_name != $category->category_name)
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
                                <label for="zoom_id">Zoom ID</label>
                                <input name="zoom_id" value="{{ $liveSession->zoom_id }}" type="text" id="zoom_id" placeholder="Ex: 20.00" class="form-control"/>
                                @error('zoom_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">Zoom Password</label>
                                <input name="password" value="{{ $liveSession->password }}" type="text" id="password" placeholder="Enter password" class="form-control"/>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Existing Date</label>
                                <p>{{ \Carbon\Carbon::parse($liveSession->date)->format('d M Y, h:i a') }}</p>
                            </div>
                            <div class="form-group">
                                <label for="cover_image">Date</label>
                                <div class="custom-file">
                                    <input value="{{ \Carbon\Carbon::parse($liveSession->date)->format('Y-m-d h:i a') }}" type="datetime-local" min="" name="date" class="form-control" id="date">
                                </div>
                                @error('date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="d-block" for="">Existing Cover Image:</label>
                                <img src="{{ asset('uploads/liveSessions') }}/{{ $liveSession->cover_image }}" style="max-width: 150px" alt="">
                            </div>
                            <div class="form-group">
                                <label for="cover_image">Cover Image</label>
                                <div class="custom-file">
                                    <input type="file" name="cover_image" class="custom-file-input" id="cover_image">
                                    <label class="custom-file-label" for="cover_image">Choose file</label>
                                </div>
                                @error('cover_image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" placeholder="Write description" value="" class="form-control">{{ $liveSession->description }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="price">Price ($)</label>
                                <input name="price" value="{{ $liveSession->price }}" type="text" id="price" placeholder="Ex: 20.00" class="form-control"/>
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