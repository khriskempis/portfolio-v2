{{--
  Template Name: Front Template
--}}

@extends('layouts.app')

@section('content')

    @include('partials.hero')

    <section class="content home-page">

        @include('partials.feature-projects')

        @include('partials.feature-about')

        @include('partials.feature-gigs')
        
    </section> 
    
@endsection
