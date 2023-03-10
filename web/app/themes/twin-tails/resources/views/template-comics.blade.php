{{--
  Template Name: Comics Template
--}}

@extends('layouts.app')

@section('content')
  @if(!empty($volumes))
    <div class="tt-wrapper">
      <h2 class="text-center h2">Volume List</h2>
      <ol class="tt-volume-list">
        @foreach($volumes as /** @var WP_Term $volume */ $volume)
          <li>
            <a href="{{ get_term_link($volume) }}">
              <img class="tt-cover" src="{{ get_field('cover', $volume)['url'] }}" alt="{{ $volume->name }}">
            </a>
          </li>
        @endforeach
      </ol>
    </div>
  @endif
@endsection
