{{--
  Template Name: Home Template
--}}

@php
/** @var WP_Post|null $lastChapter */
@endphp

@extends('layouts.app')

@section('content')
  @if ($lastChapter)

    <div class="tt-home">
      <div>
        <a class="tt-btn tt-btn--special"
           href="{{ get_permalink($lastChapter) }}">Our adventure so far...</a>
      </div>

      <div>
        <img src="@asset('images/tamakokoharu.png')" alt="">
      </div>
    </div>

  @endif
@endsection
