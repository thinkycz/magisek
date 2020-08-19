<div class="mb-8">
    <div x-data
         x-init="$($refs.banners).flickity({autoplay: true});"
         x-ref="banners"
         class="banners">
        @foreach($banners as $banner)
            <img src="{{ $banner->image }}" alt="Banner Image" class="rounded">
        @endforeach
    </div>
</div>

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/flickity.min.css') }}">
@endsection

@section('scripts')
    <script src="{{ asset('js/flickity.pkgd.min.js') }}"></script>
@endsection
