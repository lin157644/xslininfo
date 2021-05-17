@extends('master')

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
    .form-container {
        background-color: white;
        border: 1px solid #3d3d3d;
        padding: 10px;
        margin: 10px 50px;
    }
</style>
@endsection

@section('content')
    
    <div style="height: 70px;"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
        <div style="margin-left: 8%"></div>
        <a class="navbar-brand  me-auto" href="#">Navbar</a>
        <a class="nav-item nav-link " href="{{ route('blog.index') }}">home</a>
        <a class="nav-item nav-link " href="#">link</a>
        <div style="margin-right: 8%"></div>
    </nav>
    @if ($errors->any())
        <div class="alert alert-danger text-left col-sm-6" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <header class="p-3 d-flex justify-content-center">
        <h1 style="font-weight: 700;">CREATE</h1>
    </header>
    <hr>

    <form class="form-container" action="{{ route('blog.store') }}" method="POST">
        <div class="mb-3 me-auto">
            <label for="title" class="form-label">title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="write something..." >
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">content</label>
            <textarea name="content" class="form-control" id="content" rows="3" required ></textarea>
        </div>
        {{ csrf_field() }}
        <div class="d-flex justify-content-between ">
            <button type="submit" class="btn btn-secondary">submit</button>
        </div>
    </form>
@endsection