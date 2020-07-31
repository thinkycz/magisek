<div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Contact and Notes
        </h3>
        <div class="mt-5 space-y-4">
            <x-input type="email" name="email" title="Email" :value="currentUser()->email" :required="true"></x-input>

            <x-input name="phone" title="Phone" :value="currentUser()->phone" :required="true"></x-input>

            <x-textarea name="customer_note" title="Notes" help="Anything you would like to add to the order."></x-textarea>
        </div>
    </div>
</div>
