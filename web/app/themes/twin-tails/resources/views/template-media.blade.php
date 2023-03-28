{{--
  Template Name: Media
--}}

@extends('layouts.app')

@section('content')
  <div class="tt-wrapper">
    <div class="tt-media">
      <h2 class="text-center h2">
        Media
      </h2>

      <div class="tt-media-list">
        @if(!empty($media))
          @foreach(/** @var WP_Post[] $media */ $media as $medium)
            @php
            $thumbnail = get_field('thumbnail', $medium->ID);
            $link = get_field('link', $medium->ID);
//            dd($thumbnail, $link);
            @endphp
            <div class="tt-media-list__item">
              <figure>
                <a href="{{ $link }}" target="_blank">
                  <img class="tt-cover" src="{{ Arr::get($thumbnail, 'url') }}" alt="">
                </a>
                <figcaption>
                  <h3 class="h3">
                    {{ $medium->post_title }}
                  </h3>
                </figcaption>
              </figure>
            </div>
          @endforeach
        @endif
      </div>

    </div>
  </div>

@endsection
