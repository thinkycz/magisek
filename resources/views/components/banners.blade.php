@if($banners->isNotEmpty())
    <div class="flex items-center justify-center mb-8">
        <div x-data
             x-init="$(document).ready(function(){
                $($refs.banners).slick({infinite: true, dots: true});
             });"
             x-ref="banners"
             class="banners w-80 md:w-128 lg:w-192 xl:w-256">
            @foreach($banners as $banner)
                <img src="{{ $banner->image }}" alt="Banner Image" class="rounded">
            @endforeach
        </div>
    </div>
@endif

@once
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
@endpush
@endonce
