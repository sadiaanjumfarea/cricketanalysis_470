@extends('layout')

@section('title', 'Cricket Blogs')

@section('content')
<div class="container">
    <h1>Cricket Blogs</h1>
    <div class="mb-3">
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Write a Blog</a>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Read Blogs</a>
    </div>
</div>
@endsection
