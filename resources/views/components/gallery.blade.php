@props(['photos' => [], 'thumbnails' => []])

<div class="p-4">
    <ul x-data
        x-init="$($refs.gallery).slick({infinite: true, dots: true});"
        x-ref="gallery"
        class="gallery w-96">
        @foreach($photos as $photo)
            <li>
                <a href="{{ $photo }}" data-fancybox>
                    <img src="{{ $photo }}" alt="Product Photo">
                </a>
            </li>
        @endforeach
    </ul>

    <ul x-data
        x-init="$($refs.thumbnails).slick({slidesToShow: 5, asNavFor: '.gallery', focusOnSelect: true});"
        x-ref="thumbnails"
        class="w-96 mt-2">
        @foreach($thumbnails as $thumbnail)
            <li class="border rounded p-1 mx-2">
                <img src="{{ $thumbnail }}" alt="Product Thumbnail" class="h-12 object-contain">
            </li>
        @endforeach
    </ul>
</div>

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.min.css') }}"/>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
@endsection
