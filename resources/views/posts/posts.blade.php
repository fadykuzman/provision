@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="roe justify-content-center">
      <div class="col-md-8">
        @foreach($posts as $post)
          <a href="/posts/show/{{ $post->id }}">
            <div class="card">
              <div class="card-header">
                {{ $post->title }}
              </div>
              <div class="card-body">
                {{ $post->excerpt }}
              </div>
            </div>
          </a>
            <hr>
          @endforeach
        </a>
      </div>
    </div>
  </div>
@endsection
