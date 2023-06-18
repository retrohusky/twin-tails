{{--
  Template Name: Embeds
--}}

@php
/** @var $embeds */

 @endphp

@extends('layouts.app')

@section('content')
  @include('partials.embeds', ['embeds' => $embeds])
@endsection
