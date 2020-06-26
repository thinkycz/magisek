@props(['method' => 'POST', 'action' => ''])

<form method="{{ $method === 'GET' ? 'GET' : 'POST' }}" action="{{ $action }}">
    @csrf

    @if(!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    <button type="submit"
        {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white focus:outline-none transition duration-150 ease-in-out']) }}>
        {{ $slot }}
    </button>
</form>
