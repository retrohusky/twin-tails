<?php
/**
 * Template Name: Single Chapter
 * Template Post Type: chapter
 */

?>

@extends('layouts.app')

@section('content')

  <div class="tt-swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      @foreach($comic as $i => $page)
        <div class="swiper-slide">
          <img src="{{ $page }}" alt="Page {{$i}}">
        </div>
      @endforeach
      ...
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
