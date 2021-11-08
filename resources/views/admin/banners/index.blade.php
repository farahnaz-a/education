@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Banner
@endsection

{{-- Active Menu --}}
@section('banners')
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
                Banner
            </li>
        </ol>
    </div>
@endsection

{{-- Page Content --}}
@section('content')
    <section id="basic-vertical-layouts">
        <div class="row">
            <div class="col-md-7 col-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Banner</h4>
                        @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if (session('warning'))
                            <div class="alert alert-warning">{{ session('warning') }}</div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="{{ route('banners.update', $banner->id) }}" enctype="multipart/form-data" method="POST" class="form form-vertical">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" value="{{ $banner->title }}" id="title" class="form-control"/>
                                        @error('title')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="short_description">Short Description</label>
                                        <input type="text" name="short_description" value="{{ $banner->short_description }}" id="short_description" class="form-control"/>
                                        @error('short_description')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Existing image</label>
                                        <br>
                                        <img src="{{ asset('uploads/banners') }}/{{ $banner->image }}" style="max-height: 130px" alt="Not Found">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                        @error('image')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="background_color">Background color</label>
                                        <input type="color" name="background_color" value="{{ $banner->background_color }}" id="background_color" class="form-control"/>
                                        @error('background_color')
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
    </section>
@endsection