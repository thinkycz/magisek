@props(['photos' => []])

<div x-data x-init="new Splide($refs.splide).mount();"
     x-ref="splide"
     data-splide='{"type":"loop"}'
     class="splide w-96">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach($photos as $photo)
                <li class="splide__slide">
                    <img src="{{ $photo }}" alt="Product Photo">
                </li>
            @endforeach
        </ul>
    </div>
</div>

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.10/dist/css/themes/splide-sea-green.min.css" integrity="sha256-5kJhf2RKFj+fcrquSWaAfei30Optj6ZQIZMIAfafc+w=" crossorigin="anonymous">
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.10/dist/js/splide.min.js" integrity="sha256-uAncy13cSynorO5+2C3gp5Mb+azFNu5PnZ9iWgvsGQA=" crossorigin="anonymous"></script>
@endsection
