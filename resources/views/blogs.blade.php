@extends('layouts.app')
@section('main')
@include('partials.nav')
<div class="container">
        <h1>Blogs</h1>
        <h2>This should only be under development</h2>
    <div class="row">

    @foreach($blogs as $blog)
    <div class="col-6">
        <p>{{$blog->title}}</p>
    </div>
    @endforeach
    </div>
</div>
@endsection

