@props(['photos' => []])

<div class="p-4">
    <ul x-data
        x-init="$($refs.gallery).slick({infinite: true});"
        x-ref="gallery"
        class="w-96">
        @foreach($photos as $photo)
            <li >
                <a href="{{ $photo }}" data-fancybox>
                    <img src="{{ $photo }}" alt="Product Photo">
                </a>
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
