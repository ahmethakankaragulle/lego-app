<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title name="header">Sepet</title>

    <!-- Fonts -->

    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .border-gray-200 {
            --tw-border-opacity: 1;
            border-color: rgb(229 231 235 / var(--tw-border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --tw-text-opacity: 1;
            color: rgb(229 231 235 / var(--tw-text-opacity))
        }

        .text-gray-300 {
            --tw-text-opacity: 1;
            color: rgb(209 213 219 / var(--tw-text-opacity))
        }

        .text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-700 {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:border-gray-700 {
                --tw-border-opacity: 1;
                border-color: rgb(55 65 81 / var(--tw-border-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity))
            }
        }
    </style>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            padding-top: 4.5rem;

        }

        .accordion {
            background-color: #eee;
            color: #444;
            padding: 10px 10px;
            margin-bottom: 10px;
            width: 100%;
            text-align: left;
            box-shadow: 0px 0px 20px -8px gray;
            outline: none;
            transition: 0.4s;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            position: relative;
            font-size: 20px;
        }

        .panel {
            padding: 0px 18px;
            margin-top: -10px;
            margin-bottom: 10px;
            background-color: #eee;
            color: #000;
            text-align: left;
            width: 100%;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }

        svg:hover {
            fill: white;
            cursor: pointer;
        }
        p{
            margin-bottom: 0 !important;
        }

    </style>

    @vite(['resources/js/app.js'])

</head>

<body class="antialiased">

    @include('layouts.header')
    <div class="container px-5 py-5">

        <div class="header pb-5 pt-2">
            <h1>Siparişlerim</h1>
        </div>

        <div class="filter py-1">
            <p class="text-primary mb-0">Sipariş Durumu</p>
            <div class="input-group w-100">
                <select class="form-select" style="max-width:190px;">
                    <option selected>Tümü</option>
                    <option value="1">Tamamlananlar</option>
                    <option value="2">Sipariş sürecindekiler</option>
                </select>
            </div>
        </div>

        <div class="orders py-3">
            
            @foreach($orders as $order)
                @foreach($order->orderItems as $orderItem)

                <div class="order">
                    <div class="accordion">
                        <div class="d-flex flex-row">
                            <div>
                                <img class="accbutton" src="{{$orderItem->product->image_path}}" alt="Ürün Görseli" width="80px" height="80px" style="border:solid black 0.2px; border-radius:50%;">
                            </div>
                            <div class="mx-5">
                                <div>
                                    <p>Sipariş No <strong>123456{{$order->id}}</strong></p>
                                </div>
                                <div>
                                    <p>{{$order->created_at}}</p>
                                </div>
                            </div>
                        </div>
                        

                        <div class="w-15 d-flex flex-row align-middle">
                            <img src="/storage/icons/ok-circle-filled-svgrepo-com.svg" alt="" width="30">
                            <p style="margin-left:10px;">Sipariş Tamamlandı</p>
                        </div>

                        <div>
                            <p class="text-success">{{ $orderItem->product->price }} TL</p>
                        </div>

                        <div>
                            <button class="accbutton" style="position: absolute; right:10px; bottom:40%; padding:0;">
                                <svg width="20px" height="20px" viewBox="-102.4 -102.4 1228.80 1228.80" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#185ADB" stroke="#185ADB" stroke-width="47.104">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="8.192"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M903.232 256l56.768 50.432L512 768 64 306.432 120.768 256 512 659.072z" fill="#185ADB"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="panel d-flex flex-row justify-content-start">

                        <div class="d-flex flex-row flex-wrap p-4 w-50" style="border-right: 1px solid #a1a1a1">
                            <div class="p-1">
                                <img src="{{$orderItem->product->image_path}}" alt="Ürün görseli" style="border:solid black 0.2px; width:200px; height:200px;">
                            </div>
                            <div class="p-2">
                                <h4>{{$orderItem->product->name}} </h4>
                                <h5>Paket İçeriği:</h5>
                                <p>{{$orderItem->product->name}} </p>
                            </div>
                        </div>

                        <div class="d-flex flex-column p-4 w-50 justify-content-between">
                            <div class="d-flex flex-row flex-wrap">
                                <img src="/storage/icons/package-packing-svgrepo-com.svg" width="70px" alt="" >
                                <div style="margin-left:30px;">
                                    <p>{{$order->status}}</p>
                                    <p>{{$order->updated_at}}</p>
                                </div>
                            </div>

                            <div>
                                <a style="text-decoration: none; color:#444;" href=""> <img src="/storage/icons/cargo-truck-svgrepo-com.svg" width="60px" alt=""> <span style="margin-left:30px; font-weight:600;" >Kargo Takibi</span></a>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            @endforeach


            
            

        </div>
    </div>
</body>

<script>
    var acc = document.getElementsByClassName("accbutton");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.parentElement.parentElement.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = 400 + "px";
            }
        });
    }
</script>

</html>