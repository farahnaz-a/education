@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Live Sessions
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
                Live Sessions Create
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
                <h4 class="card-title">Live Sessions Create</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('liveSessions.store') }}" method="POST" class="form form-vertical" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" value="{{ old('title') }}" type="text" id="title" placeholder="Enter title" class="form-control"/>
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="subtitle">Subtitle</label>
                                <input name="subtitle" value="{{ old('subtitle') }}" type="text" id="subtitle" placeholder="Enter subtitle" class="form-control"/>
                                @error('subtitle')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="">-Select Category-</option>
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
                                <label for="zoom_id">Zoom ID</label>
                                <input name="zoom_id" value="{{ old('zoom_id') }}" type="text" id="zoom_id" placeholder="Ex: 20.00" class="form-control"/>
                                @error('zoom_id')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="password">Zoom Password</label>
                                <input name="password" value="{{ old('password') }}" type="password" id="password" placeholder="Enter password" class="form-control"/>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cover_image">Date</label>
                                <div class="custom-file">
                                    <input type="datetime-local" min="{{ \Carbon\Carbon::today()->format('Y-m-d h:i A') }}" name="date" class="form-control" id="date">
                                </div>
                                @error('date')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" placeholder="Write description" value="" class="form-control">{{ old('description') }}</textarea>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="price">Price ($)</label>
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