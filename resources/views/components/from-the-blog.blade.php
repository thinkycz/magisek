@if($pages->isNotEmpty())
    <div class="bg-cool-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center">
                <a href="{{ route('pages.index') }}"
                   class="text-3xl leading-9 tracking-tight font-extrabold text-gray-900 sm:text-4xl sm:leading-10 hover:underline">
                    {{ __('global.from_our_blog') }}
                </a>
                <p class="mt-3 max-w-2xl mx-auto text-xl leading-7 text-gray-500 sm:mt-4">
                    {{ __('global.from_our_blog_sub') }}
                </p>
            </div>

            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
                @foreach($pages as $page)
                    <div class="flex flex-col rounded-lg shadow overflow-hidden">
                        @if($page->image)
                            <div class="flex-shrink-0">
                                <img class="h-48 w-full object-cover"
                                     src="{{ $page->image }}"
                                     alt="{{ $page->title }}">
                            </div>
                        @endif
                        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                                <p class="text-sm leading-5 font-medium text-teal-600">
                                    {{ $page->created_at->format('j.n.Y') }}
                                </p>
                                <a href="{{ route('pages.show', $page) }}" class="block">
                                    <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900 hover:underline">
                                        {{ $page->title }}
                                    </h3>
                                </a>
                                <p class="mt-3 text-base leading-6 text-gray-500">
                                    {{ $page->excerpt }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
