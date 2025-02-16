@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Sponsors -->
    @include('layouts.sponsor')

    <!-- Country Section -->
    <section id="imi-country-feed-2" class="py-5">
        <div class="container">
            <div class="row">
                <!-- Country Card 1 -->
                {{-- @foreach($countries as $country)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card text-white border-0">
                            <img src="{{ $country->image }}" class="card-img" alt="{{ $country->name }}">
                            <div class="card-img-overlay d-flex flex-column justify-content-end">
                                <div class="d-flex align-items-center mb-2">
                                    <img src="{{ $country->icon }}" alt="Icon" style="width: 40px; height: 40px;">
                                    <h5 class="card-title ms-2 mb-0">
                                        <a href="{{ route('country.show', $country->slug) }}" class="text-white text-decoration-none">
                                            {{ $country->name }}
                                        </a>
                                    </h5>
                                </div>
                                <p class="card-text">{{ $country->description }}</p>
                                <a href="{{ route('country.show', $country->slug) }}" class="btn btn-outline-light btn-sm text-uppercase">
                                    Read More <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </section>

    <!-- Residency By Investment -->
    <div class="container my-4">
        <h2 class="text-center">Residency By Investment</h2>
    </div>

    <!-- Country Grid -->
    @include('layouts.country')

    <!-- Call to Action -->
    @include('layouts.work_process')

    <!-- Countries We Offer -->
    @include('layouts.countries_we_offer')

    <!-- Our Services -->
    @include('layouts.our_services')

    <!-- Contact Benefits -->
    @include('layouts.contact_benefits')

    <!-- Benefits Section -->
    @include('layouts.benefits_section')

@endsection
