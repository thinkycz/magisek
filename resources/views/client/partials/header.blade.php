<div class="bg-white shadow py-4">
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <x-logo class="w-8 h-8"></x-logo>

            <div>
                <label for="search" class="sr-only">
                    Search
                </label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                        </svg>
                    </div>
                    <input id="search" class="form-input block w-full pl-10 sm:text-sm sm:leading-5" placeholder="Search..." />
                </div>
            </div>
        </div>
    </div>
</div>
