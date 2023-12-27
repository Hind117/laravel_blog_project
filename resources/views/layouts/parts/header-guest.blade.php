<div class="flex space-x-5">
    <x-nav-link href="{{ route('filament.app.auth.login') }}" :active="request()->routeIs('filament.app.auth.login')">
        {{ __('Login to Publish your Article') }}
    </x-nav-link>
    {{--<x-nav-link href="{{ route('filament.app.auth.register') }}" :active="request()->routeIs('filament.app.auth.register')">
        {{ __('Register') }}
    </x-nav-link>--}}


</div>
