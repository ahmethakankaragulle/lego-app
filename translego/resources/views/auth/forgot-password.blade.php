<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="/storage/icons/logo.png" alt="logo">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Parolanızı mı unuttunuz ? Kayıtlı olduğunuz email adresinizi aşağıya girin ve size bir parola sıfırlama bağlantısı gönderelim.') }}
        </div>

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Şifre Sıfırlama Bağlantısı') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>