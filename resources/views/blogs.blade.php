@extends('layouts.app')
@section('main')
@include('partials.nav')
<div class="container">
        <h1>Blogs</h1>
    <div class="row">

    @foreach($blogs as $blog)
    <div class="col-6">
        <p>{{$blog->title}}</p>
    </div>
    @endforeach
    </div>
</div>
@endsection

