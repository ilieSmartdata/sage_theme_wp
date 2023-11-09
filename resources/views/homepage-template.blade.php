{{--
  Template Name: Homepage Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
{{--  @include('partials.page-header')--}}
  @include('partials.homepage_partials.homepage-above-the-fold')
  @include('partials.homepage_partials.homepage-masonry-section')
  @include('partials.homepage_partials.homepage-trusted-source-section')
  @include('partials.homepage_partials.homepage-pricing-section')
  @include('partials.theme_partials.general-call-to-action')

{{--    @include('partials.content')--}}
  @endwhile
@endsection
