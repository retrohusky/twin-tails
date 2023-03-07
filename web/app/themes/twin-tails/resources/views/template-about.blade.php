{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')

  <div class="tt-about flex flex-col mt-20">
    @php(the_content())
  </div>

@endsection
