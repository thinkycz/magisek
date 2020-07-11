<li class="col-span-1 flex flex-col bg-white rounded-lg shadow">
    <div class="flex-1 flex flex-col p-4">
        <img class="w-full h-40 flex-shrink-0 mx-auto object-contain" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="" />
        <h3 class="mt-6 text-gray-900 text-sm leading-5 font-medium">Jane Cooper</h3>
        <dl class="mt-3 flex-grow flex flex-col justify-between">
            <dt class="sr-only">Price</dt>
            <dd class="text-teal-500 text-xl font-semibold leading-5">891 Kč</dd>
            <dt class="sr-only">Price excl. VAT</dt>
            <dd class="text-gray-500 text-xs font-semibold leading-5">736,32 Kč excl. 21 % VAT</dd>
        </dl>
    </div>
    <div class="p-4 bg-cool-gray-100">
        <div x-data="{count: 1}" class="flex shadow">
            <button class="flex-1 rounded-l text-white text-xs font-semibold flex items-center justify-center space-x-2 bg-teal-500 hover:bg-teal-600 focus:outline-none">
                <x-icons.shopping-cart class="w-5 h-5"></x-icons.shopping-cart>
                <span>Add to Basket</span>
            </button>
            <input type="text" class="text-center text-sm w-12 border focus:outline-none" :value="count">
            <div class="flex flex-col border border-l-0 rounded-r">
                <button class="px-2 text-xs border-b focus:outline-none" @click="count++">+</button>
                <button class="px-2 text-xs focus:outline-none" @click="count--">-</button>
            </div>
        </div>
    </div>
</li>
