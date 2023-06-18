{{--
  Template Name: Media
--}}

@extends('layouts.app')

@section('content')
  <div class="tt-wrapper">
    <div class="tt-media">
      <div class="tt-media-list">
        @if(!empty($media))
          @foreach(/** @var WP_Post[] $media */ $media as $medium)
            @php
            $thumbnail = get_the_post_thumbnail_url($medium->ID, 'large');
            @endphp
            <div class="tt-media-list__item">
              <figure>
                <a href="{{ get_permalink($medium) }}">
                  <img class="tt-cover" src="{{ $thumbnail }}" alt="{{$medium->post_title}} thumbnail">
                </a>
              </figure>
            </div>
          @endforeach
        @endif
      </div>

    </div>
  </div>

@endsection
