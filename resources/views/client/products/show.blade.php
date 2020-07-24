@extends('client.layout')

@section('content')
    <div class="flex w-full">
        <div>
            <img src="https://static.kosik.cz/images/thumbs/af/860x800x1_af66528708c963c2900c06d4a7f3afe5.jpg" class="w-96 h-96">
        </div>

        <div class="flex-1 space-y-4">
            <h2 class="text-2xl text-gray-700 font-semibold">
                {{ $product->name }}
            </h2>
            <p class="text-2xl text-red-500">19.90 Kc</p>
            <p class=" text-gray-700 text-sm">
                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus.
            </p>

            <div class="flex space-x-2">
                <div x-data="{ count: 1 }" class="bg-gray-300 flex items-center rounded">
                    <button class="p-4 focus:outline-none" x-on:click="count <= 1 ? count = 1 : count -= 1"> - </button>
                    <input type="text" class="h-8 w-12 focus:outline-none rounded text-center" x-bind:value="count">
                    <button class="p-4 focus:outline-none" x-on:click="count += 1"> + </button>
                </div>

                <div>
                    <button class="focus:outline-none h-full px-4 w-full bg-teal-500 hover:bg-teal-400 text-white text-md font-semibold flex items-center justify-center rounded">
                        <x-icons.shopping-bag class="w-4 h-4 mr-2"></x-icons.shopping-bag>
                        Add to cart
                    </button>
                </div>

                <div x-data="{ liked: false }" class="bg-gray-300 rounded p-4">
                    <button x-on:click="liked = !liked" class="focus:outline-none">
                        <x-icons.heart class="w-6 h-6" x-bind:class="{'text-red-500': liked}"></x-icons.heart>
                    </button>
                </div>
            </div>

        </div>
    </div>
@endsection
