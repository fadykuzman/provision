@extends('layouts.app')

@section('content')
<div class="container">
  <div class="roe justify-content-center">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <hr>
      <h5> Created on: {{ $post->created_at }}</h5>
      <h6> Last Update: {{ $post->updated_at }}</h6>
      <div class="card">
        <div class="card-image">
          <img src="/storage/{{ $post->image }}">
        </div>
        <div class="card-body">
          <p> {{ $post->body }} </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
