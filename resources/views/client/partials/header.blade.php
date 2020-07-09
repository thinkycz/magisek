<div class="bg-white py-6 border-b-2 border-gray-100">
    <div class="container mx-auto">
        <div class="flex space-x-8">
            <div class="w-64 px-4 flex items-center">
                <a href="{{ route('home') }}">
                    <x-logo class="w-8 h-8"></x-logo>
                </a>
            </div>

            <div class="flex-1 flex justify-between items-center space-x-48">
                <livewire:search-dropdown></livewire:search-dropdown>

                <livewire:navbar-basket></livewire:navbar-basket>
            </div>
        </div>
    </div>
</div>
