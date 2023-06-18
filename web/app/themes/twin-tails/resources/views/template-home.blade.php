{{--
  Template Name: Home Template
--}}

@php
/** @var WP_Post|null $lastChapter */
/** @var WP_Post|null $firstChapter */
/** @var string $mainVideo */
@endphp

@extends('layouts.app')

@section('content')

    <div class="tt-home">

      @if($mainVideo)
        <div class="tt-home__video">
          <iframe src="{{ $mainVideo }}" allowfullscreen></iframe>
        </div>
      @endif

      <div class="tt-home__chapters">
        <a class="tt-btn tt-btn--special"
          href="{{ get_permalink($firstChapter) }}">First Chapter</a>
        <a class="tt-btn tt-btn--special"
           href="{{ get_permalink($lastChapter) }}">Last Chapter</a>
      </div>

      <div>
        <img src="@asset('images/tamakokoharu.png')" alt="">
      </div>

      <div>
        <p>
          Want more? Check our <a class="h2" href="#">media section</a>
        </p>
      </div>
    </div>
@endsection
