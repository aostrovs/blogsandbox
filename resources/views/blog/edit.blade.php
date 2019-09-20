@extends('layouts.app')
@section('main')
@include('partials.nav')
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-6">
            <h1>Edit Post {{$blog->id}}</h1>
            <form action="{{ route('blog.create.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="article_title" placeholder="Article Title" value="{{$blog->title}}">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="article_categories" placeholder="comma seperated list">
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="text" rows="4" name="article" placeholder="Enter Article Here" >{{$blog->body}}</textarea>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
