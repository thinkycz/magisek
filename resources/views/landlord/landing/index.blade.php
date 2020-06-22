@extends('layouts.base')

@section('body')
    @include('landlord.landing.partials.hero')

    @include('landlord.landing.partials.features')

    @include('landlord.landing.partials.pricing')

{{--    @include('landlord.landing.partials.faq')--}}

    @include('landlord.landing.partials.footer')
@endsection
