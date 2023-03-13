<?php
/** @var WP_Term $volume */
?>

@extends('layouts.app')

@section('content')

  @if(!empty($chapters))
    <div class="tt-wrapper">
      <div class="text-center">
        <a class="tt-btn"
           href="{{ get_permalink( get_page_by_title('comics') ) }}">
          << Volume List
        </a>
      </div>
      <h2 class="h2 text-center">{{ $volume->name }}</h2>
      <ol class="tt-volume-list">
        @foreach($chapters as /** @var WP_Post $chapter */ $chapter)
          <li>
            <a href="{{ get_permalink($chapter) }}">
              <img class="tt-cover" src="{{ get_the_post_thumbnail_url( $chapter ) }}" alt="{{ $chapter->post_title }}">
            </a>
          </li>
        @endforeach
      </ol>
    </div>
  @endif

@endsection
