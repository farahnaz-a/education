@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Category Edit
@endsection

{{-- Active Menu --}}
@section('categoriesCreate')
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
                Categories
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
                <h4 class="card-title">Category Edit</h4>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">{{ session('warning') }}</div>
                @endif
            </div>
            <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="POST" class="form form-vertical">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="category_name">Category name</label>
                                <input type="text" name="category_name" value="{{ $category->category_name }}" placeholder="Enter category name" id="category_name" class="form-control"/>
                                @error('category_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary mr-1">Retun Back</a>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection