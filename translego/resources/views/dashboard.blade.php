<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="d-flex flex-row justify-content-between">
                <div class="bg-success overflow-hidden shadow-xl sm:rounded-lg p-5">
                    <a href="/ürün-listesi" class="btn btn-light btn-lg shadow-xl "><img src="" alt=""> Ürün Yönetimi</a>
                </div>
                <div class="bg-info overflow-hidden shadow-xl sm:rounded-lg p-5">
                    <a href="/sipariş-listesi" class="btn btn-light btn-lg shadow-xl "><img src="" alt=""> Sipariş Yönetimi</a>
                </div>
                <div class="bg-warning overflow-hidden shadow-xl sm:rounded-lg p-5">
                    <a href="/mesajlar" class="btn btn-light btn-lg shadow-xl "><img src="" alt=""> Mesaj Yönetimi</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>