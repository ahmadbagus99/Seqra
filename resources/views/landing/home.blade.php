@extends('layouts.landing')

@section('content')
  @include('landing.partials.hero-home')
  @include('landing.partials.business-categories')
  @include('landing.partials.features-planet')
  @include('landing.partials.large-testimonial')
  @include('landing.partials.cta')
@endsection

