@extends('layouts.app')
@section('main')
@include('partials.nav')
<div class="container">
    <div class="row mt-5">
        <div class="col">
            @foreach($blogs as $blog)
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 class="d-inline">{{ $blog->title }}</h5>
                            <a href="" class="btn btn-primary d-inline float-right">Edit</a>
                        </div>
                        <p class="card-text text-truncate">{{ $blog->body }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

