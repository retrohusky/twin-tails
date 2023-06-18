<?php
/** @var WP_Term $volume */

use App\View\Composers\Taxonomies\Volume;

$prevVolume = Volume::getAdjacent($volume, 'volume', true);
$nextVolume = Volume::getAdjacent($volume, 'volume', false);
?>

@extends('layouts.app')

@section('content')

  @if(!empty($chapters))
    <div class="tt-wrapper">
      <div class="pagination">

        @if($prevVolume)
          <a class="tt-btn"
             href="{{ get_term_link( $prevVolume->term_id ) }}">
            << {{ $prevVolume->name }}
          </a>
        @endif
        <a class="tt-btn"
           href="{{ get_permalink( get_page_by_title('comics') ) }}">
          Volume List
        </a>

        @if($nextVolume)
          <a class="tt-btn"
             href="{{ get_term_link( $nextVolume->term_id ) }}">
            {{ $nextVolume->name }} >>
          </a>
        @endif
      </div>

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
