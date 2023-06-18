{{--
  Template Name: Gallery
--}}

@php
  /** @var $gallery */
//dd($gallery)
@endphp

@extends('layouts.app')

@section('content')
<div class="tt-masonry">
  <div class="tt-grid">
    @foreach($gallery as $image)
      <div class="tt-grid-item">
        <img src="{{ $image['url'] }}" alt="{{ $image['title'] }}">
      </div>
    @endforeach
  </div>
</div>
@endsection
