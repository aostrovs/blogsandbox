@extends('layouts.app')
@section('main')
<div class="container">
    <h1>Blog</h1>
    <div class="row">
        <div class="col">
            <form action="/blog/create" method="POST">
                @csrf
                <div class="form-group">
                    <input class="form-control" type="text" name="article_title" placeholder="Article Title">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="article_categories" placeholder="comma seperated list">
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="text" name="article" placeholder="Enter Article Here" ></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
