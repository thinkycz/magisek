<x-accordion :title="__('orders.print_export')" class="mt-8">
    <div class="flex flex-col">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full overflow-hidden border-b border-cool-gray-200">
                <table class="min-w-full">
                    <tbody class="bg-white divide-y divide-cool-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap leading-5 text-sm text-gray-800 font-semibold">
                            {{ __('global.invoice') }}
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 flex justify-end">
                            <x-button :href="route('acp.orders.generate-invoice', $order)" class="bg-teal-600 hover:bg-teal-500">
                                {{ __('global.generate') }}
                            </x-button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-accordion>
