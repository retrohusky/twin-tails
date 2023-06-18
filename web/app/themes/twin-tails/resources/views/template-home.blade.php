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
      <div class="tt-home__chapters">
        <a class="tt-btn tt-btn--special"
          href="#">First Chapter</a>
        <a class="tt-btn tt-btn--special"
           href="{{ get_permalink($lastChapter) }}">Last Chapter</a>
      </div>

      <div>
        <img src="@asset('images/tamakokoharu.png')" alt="">
      </div>

      <div>
        <a class="tt-btn tt-btn--special"
          href="">Want more? Check our media section...</a>
      </div>
    </div>

  @endif
@endsection
