<?php
/**
 * Template Name: Single Chapter
 * Template Post Type: chapter
 */

/** @var WP_Term $volume */
/** @var array $comic */

$nextChapter = get_previous_post();
$prevChapter = get_next_post();
?>

@extends('layouts.app')

@section('content')

  <div class="pagination">

    @if($prevChapter)
      <a class="tt-btn"
         href="{{ get_permalink($prevChapter->ID) }}">
        << {{ $prevChapter->post_title }}
      </a>
    @endif

    <a class="tt-btn"
       href="{{ get_term_link( $volume->term_id ) }}">
      Chapter List
    </a>

    @if($nextChapter)
      <a class="tt-btn"
         href="{{ get_permalink($nextChapter->ID) }}">
        {{ $nextChapter->post_title }} >>
      </a>
    @endif
  </div>

  <div>
    <h2 class="text-center h2">
      {{ $chapter->post_title }}
    </h2>
  </div>

  <div class="tt-swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      @if($comic)
        @foreach($comic as $i => $page)
          <div class="swiper-slide">
            <img src="{{ $page }}" alt="Page {{$i}}">
          </div>
        @endforeach
      @endif
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>

@endsection
