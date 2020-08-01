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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
@endsection
