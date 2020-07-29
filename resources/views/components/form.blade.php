@props(['method' => 'POST', 'action' => ''])

<form {{ $attributes }} method="{{ $method === 'GET' ? 'GET' : 'POST' }}" action="{{ $action }}" enctype="multipart/form-data">
    @if(!in_array($method, ['GET']))
        @csrf
    @endif

    @if(!in_array($method, ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>
