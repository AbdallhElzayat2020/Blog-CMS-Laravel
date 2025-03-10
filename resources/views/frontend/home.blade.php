@extends('frontend.layouts.master')
@section('title','Home Page')

@section('content')

    <!-- Breaking news  carousel-->
    @include('frontend.home-components.breaking-news')
    <!-- End Breaking news carousel -->

    <!-- Hero News Section-->
    @include('frontend.home-components.hero-slider')
    <!-- Hero News Section -->

    <div class="large_add_banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="large_add_banner_img">
                        <img src="{{asset('assets/frontend/images/placeholder_large.jpg')}}" alt="adds">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular news category -->
    @include('frontend.home-components.main-news')
    <!-- End Popular news category -->

@endsection
