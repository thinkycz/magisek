@extends('client.layout')

@section('container')
    <div class="container mx-auto py-6">
        <!-- This component requires Tailwind CSS >= 1.5.1 and @tailwindcss/ui >= 0.4.0 -->
        <div class="py-16 bg-white overflow-hidden shadow-lg border border-gray-100 rounded">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="text-lg max-w-prose mx-auto mb-6">
                    <p class="text-base text-center leading-6 text-gray-500 font-semibold tracking-wide uppercase">
                        {{ $page->created_at->format('j.n.Y') }}
                    </p>
                    <h1 class="mt-2 mb-8 text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                        {{ $page->title }}
                    </h1>
                </div>

                <div>
                    {!! $page->content !!}
                </div>
            </div>
        </div>

    </div>
@endsection
