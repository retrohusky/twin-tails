{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

@section('content')
  <div class="tt-contact-form">
    <img class="tt-contact-form__kitsune" src="@asset('images/tamakochibi.png')" alt="Tamako chibi portrait">
    <div class="tt-contact-form__container">
      {!! $contactForm  !!}
    </div>
  </div>
@endsection
