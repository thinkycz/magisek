<div class="bg-white py-6 border-b-2 border-gray-100">
    <div class="container mx-auto">
        <div class="flex space-x-8">
            <div class="w-64 px-4 flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0">
                    @if(settingsRepository()->getStoreLogo())
                        <img class="h-10" src="{{ settingsRepository()->getStoreLogo() }}"
                             alt="{{ settingsRepository()->getStoreName() }}">
                    @else
                        <x-logo class="w-8 h-8"></x-logo>
                    @endif
                </a>
            </div>

            <div class="flex-1 flex justify-between items-center">
                <div class="hidden md:block flex-1">
                    <livewire:search-dropdown></livewire:search-dropdown>
                </div>

                <div class="ml-auto md:ml-32">
                    <livewire:navbar-basket></livewire:navbar-basket>
                </div>
            </div>
        </div>
    </div>
</div>
