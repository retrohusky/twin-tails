@extends('layouts.app')

@section('content')

  @if(!empty($chapters))
    <div>
      <ol class="tt-volume-list">
        @foreach($chapters as /** @var WP_Post $chapter */ $chapter)
          <li>
            <a href="{{ get_permalink($chapter) }}">
              <img src="{{ get_the_post_thumbnail_url( $chapter ) }}" alt="{{ $chapter->post_title }}">
            </a>
          </li>
        @endforeach
      </ol>
    </div>
  @endif

@endsection
