@extends('master')

@section('styles')
    <style>
        .row {
            margin-top: 4rem;
        }

        .nav-item {
            color: #3d3d3d;
        }

    </style>
@endsection
@section('content')
    <div style="height: 70px;"></div>
    <header class="p-3 d-flex justify-content-center">
        <h1 style="font-weight: 700;">SHOW</h1>
    </header>
    <hr>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
        <div style="margin-left: 8%"></div>
        <a class="navbar-brand  me-auto" href="#">Navbar</a>
        <a class="nav-item nav-link " href="{{ route('blog.index') }}">home</a>
        <a class="nav-item nav-link " href="#">link</a>
        <div style="margin-right: 8%"></div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6  offset-md-3">
                <div class="alert alert-secondary" role="alert">
                    <p>Title</p>
                    <h4 class="alert-heading">{{ $blog->title }}</h4>
                    <hr>
                    <p class="mb-0">文章內容：</p>
                    <p>{{ $blog->content }}</p>
                </div>
            </div>
        </div>

    </div>
@endsection
