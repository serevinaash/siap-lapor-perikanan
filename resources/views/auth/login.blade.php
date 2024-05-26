<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div class="text-center mt-2 mb-3">
            <small>{{ __('Sign in with') }}</small>
        </div>
        <div class="btn-wrapper text-center mb-4">
            <a href="#" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/github.svg"></span>
                <span class="btn-inner--text">{{ __('Github') }}</span>
            </a>
            <a href="#" class="btn btn-neutral btn-icon">
                <span class="btn-inner--icon"><img src="{{ asset('argon') }}/img/icons/common/google.svg"></span>
                <span class="btn-inner--text">{{ __('Google') }}</span>
            </a>
        </div>

        <div class="text-center text-muted mb-4">
            <small>
                Create new account OR Sign in with these credentials:
                <br>
                Username <strong>admin@argon.com</strong> Password: <strong>secret</strong>
            </small>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="auth" value="{{ __('Username/Email') }}" />
                <x-jet-input id="auth" class="block mt-1 w-full" type="text" name="auth" :value="old('auth')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>

        <div class="row mt-3">
            <div class="col-6">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-light">
                        <small>{{ __('Forgot password?') }}</small>
                    </a>
                @endif
            </div>
            <div class="col-6 text-right">
                <a href="{{ route('register') }}" class="text-light">
                    <small>{{ __('Create new account') }}</small>
                </a>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
