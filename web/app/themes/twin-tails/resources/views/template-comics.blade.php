{{--
  Template Name: Comics Template
--}}

@extends('layouts.app')

@section('content')
  @if(!empty($volumes))
    <div>
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
