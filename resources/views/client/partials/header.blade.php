<div class="bg-white py-6 border-b-2 border-gray-100">
    <div class="container mx-auto px-4">
        <div class="flex lg:space-x-8 px-4">
            <div class="lg:w-64 flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0">
                    @if(settingsRepository()->getStoreLogo())
                        <img class="w-36 lg:w-48 h-12 object-contain" src="{{ settingsRepository()->getStoreLogo() }}"
                             alt="{{ settingsRepository()->getStoreName() }}">
                    @else
                        <x-logo class="w-10 h-10"></x-logo>
                    @endif
                </a>
            </div>

            <div class="flex-1 flex justify-between items-center">
                <div class="hidden lg:block flex-1">
                    <livewire:search-dropdown></livewire:search-dropdown>
                </div>

                <div class="ml-auto lg:ml-32">
                    <livewire:navbar-basket></livewire:navbar-basket>
                </div>
            </div>
        </div>

        <div class="block lg:hidden mt-6">
            <livewire:search-dropdown></livewire:search-dropdown>
        </div>
    </div>
</div>
