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
    @if($comic)
        @foreach ($comic as $page)
          <div>
            <img src="{{ $page }}" alt="">
          </div>
        @endforeach
    @endif
  </div>
@endsection
