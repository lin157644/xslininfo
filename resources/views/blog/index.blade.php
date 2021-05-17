@extends('template')

@section('title')
    文章列表
@endsection

@section('styles')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .nav-item {
            color: #3d3d3d;
        }

    </style>
@endsection

@section('content')
    <div style="height: 70px;"></div>
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
        <div style="margin-left: 8%"></div>
        <a class="navbar-brand  me-auto" href="#">Navbar</a>
        <a class="nav-item nav-link " href="#">home</a>
        <a class="nav-item nav-link " href="#">link</a>
        <div style="margin-right: 8%"></div>
    </nav> --}}

    <header class="p-3 d-flex justify-content-between">
        <div></div>
        <h1 style="font-weight: 700;">INDEX</h1>
        <a type="button" class="btn btn-secondary" href="{{ route('blog.create') }}">create</a>
    </header>
    <hr>
    </nav>
    <div class="container">
        <div class="album py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($blogs as $blog)
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                        dy=".3em">{{ $blog->title }}</text>
                                </svg>
                                <div class="card-body">
                                    <p class="card-text">{{ $blog->content }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a type="button" class="btn btn-sm btn-outline-secondary"
                                                href="{{ route('blog.show', $post->id) }}">View</a>
                                            <a href="{{ route('blog.destroy', $post->id) }}" type="button"
                                                class="btn btn-sm btn-outline-secondary">delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection