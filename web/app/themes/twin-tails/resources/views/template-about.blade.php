{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')

  <div>
    <h2 class="text-center h2">
      {{ the_title() }}
    </h2>
  </div>

  @php(the_content())

@endsection
