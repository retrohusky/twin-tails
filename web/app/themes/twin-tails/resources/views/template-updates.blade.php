{{--
  Template Name: Updates Template
--}}

@php
/** @var array $updates */
/** @var WP_Query $query */

@endphp

@extends('layouts.app')

@section('content')

  <div>
    <h2 class="text-center h2">
      Updates
    </h2>
  </div>

  <div class="pagination">
    @if($query->max_num_pages > 1)
      @php
        $current_page = max(1, get_query_var('paged'));
        $previous_page = $current_page - 1;
        $next_page = $current_page + 1;
      @endphp

      @if($previous_page >= 1)
        <a class="tt-btn" href="{!! esc_url(get_pagenum_link($previous_page)) !!}">&laquo; Previous Page</a>
      @endif

      @if($next_page <= $query->max_num_pages)
        <a class="tt-btn" href="{!! esc_url(get_pagenum_link($next_page)) !!}">Next Page &raquo;</a>
      @endif
    @endif
  </div>

  <div class="tt-updates">
    @foreach($updates as $update)
      <div class="tt-post">
        <div class="tt-post__meta">
          <h2 class="tt-post__title">{{ Arr::get($update, 'title') }}</h2>
          <span class="tt-post__date">{{ Arr::get($update, 'date') }}</span>
        </div>
        <div class="tt-post__content">
          {!! Arr::get($update, 'content')  !!}
        </div>
      </div>
    @endforeach

  </div>

@endsection
