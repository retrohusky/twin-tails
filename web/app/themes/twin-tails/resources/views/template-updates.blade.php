{{--
  Template Name: Updates Template
--}}

@extends('layouts.app')

@section('content')

  <div class="tt-updates">
    @foreach($updates as $update)
      <div class="tt-post">
        <div class="tt-post__meta">
          <h2 class="tt-post__title">{{ Arr::get($update, 'title') }}</h2>
          <span class="tt-post__date">{{ Arr::get($update, 'date') }}</span>
        </div>
        <div class="tt-post__content">
          {!! Arr::get($update, 'content')  !!}
        </div>
      </div>
    @endforeach

  </div>

@endsection
