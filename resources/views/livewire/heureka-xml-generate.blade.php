<div class="bg-white shadow px-4 py-5 sm:rounded-lg sm:p-6 mt-16">
    <div class="lg:flex justify-between space-y-4 lg:space-y-0 mb-8">
        <div>
            <h3 class="text-lg font-medium leading-6 text-gray-900">
                {{ __('heureka.heureka_generate') }}
            </h3>
            <p class="mt-1 text-sm leading-5 text-gray-500">
                {{ __('heureka.heureka_generate_sub') }}
            </p>
        </div>

        <x-button wire:click="generate" class="bg-teal-600 hover:bg-teal-500">
            <x-icons.refresh class="w-4 h-4 mr-2"></x-icons.refresh>
            {{ __('heureka.generate') }}
        </x-button>
    </div>

    <dl class="mt-5 space-y-8">
        <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-center">
            <dt class="text-sm leading-5 font-medium text-gray-500">
                {{ __('heureka.xml_feed') }}
            </dt>
            <dd class="mt-1 text-xs font-semibold leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                <a href="{{ url('storage/heureka.xml') }}">{{ url('storage/heureka.xml') }}</a>
            </dd>
        </div>
    </dl>
</div>
