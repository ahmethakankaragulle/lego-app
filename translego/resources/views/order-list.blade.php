<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title name="header">Siparişler</title>

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

        svg:hover {
            fill: white;
            cursor: pointer;
        }

        p {
            margin-bottom: 0 !important;
        }

        .list-group-item span{
            font-weight: 800;
            color: black;
            margin-right: 10px;
        }
    </style>

    @vite(['resources/js/app.js'])

</head>

<body class="antialiased">
    @include('layouts.header')
    <?php $orderId = 3;  ?>
    <div class="container px-5 py-5">

        <div class="header pb-5 pt-2">
            <h1>Sipariş Listesi</h1>
        </div>

          <!-- Edit Modal -->
        <div class="modal fade" id="OrderUpdateModal" tabindex="-1" role="dialog" aria-labelledby="OrderUpdateModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="OrderUpdateModalLabel">Sipariş Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ route('order.update') }}">
                        @csrf
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="hidden" name="order-id" id="orderId">
                                <p class="text-primary mb-0 w-0">Sipariş Durumu</p>
                                <select class="form-select" id="orderStatus" name="order-status" style="width:190px;">
                                    <option value="0">Hazırlanıyor</option>
                                    <option value="1">Kargoya Verildi</option>
                                    <option value="2">Teslim Edildi</option>
                                    <option value="3">İptal Edildi</option>
                                </select>
                            </div>
                        </div>
                        <div style="width: 82%; text-align:right; margin-top:4rem;">
                            <button class="btn btn-lg btn-primary"> <span>Kaydet</span> </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <!-- View Modal -->
        {{-- <div class="modal fade" id="OrderViewModal" tabindex="-1" role="dialog" aria-labelledby="OrderViewModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="OrderViewModalLabel">Sipariş Bilgileri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php 
                        if($orderId == null){
                            
                            $order = \App\Models\Order::find(3);  
                        }
                        else{
                            $order = \App\Models\Order::find($orderId);  
                        }
                    ?>
                    <ul class="list-group">
                        <li class="list-group-item" id="order-id"></li>
                        <li class="list-group-item"><span class="font-weight-bold"> Sipariş Tarihi : </span>{{$order->created_at}}</li>
                        <li class="list-group-item"><span class="font-weight-bold">Sipariş Durumu : </span>{{$order->status}}</li>
                        <li class="list-group-item"><span class="font-weight-bold">Teslimat Adı : </span>{{$order->name}}</li>
                        <li class="list-group-item"><span class="font-weight-bold">Teslimat Telefon Numarası : </span>{{$order->phone}}</li>
                        <li class="list-group-item"><span class="font-weight-bold">Teslimat Adresi : </span>{{$order->address}}</li>
                        <li class="list-group-item"><span class="font-weight-bold">Kargo Takibi : </span>{{$order->cargo_tracking}}</li>
                      </ul>

                      <h2 class="m-3">Sipariş İçeriği:</h2>
                      @foreach($order->orderItems as $orderItem)
                        @if($orderItem->item_type == 1)
                            <?php $art = \App\Models\UserArt::find($orderItem->item_id);  ?>
                            <ul class="list-group">
                                <li class="list-group-item"><span class="font-weight-bold">Adı : </span>{{$art->name}}</li>
                                <li class="list-group-item"><span class="font-weight-bold">Fiyatı : </span>{{$art->price}}</li>
                              </ul>
                        @else
                            <?php $product = \App\Models\Product::find($orderItem->item_id);  ?>
                            <ul class="list-group">
                                <li class="list-group-item"><span class="font-weight-bold">Adı : </span>{{$product->name}}</li>
                                <li class="list-group-item"><span class="font-weight-bold">Fiyatı : </span>{{$product->price}}</li>
                                <li class="list-group-item"><span class="font-weight-bold">Adet : </span>{{$orderItem->count}}</li>
                              </ul>
                        @endif
                        @endforeach

                </div>
                </div>
            </div>
        </div> --}}

        <div class="filter py-1 d-flex flex-row">
            <div class="input-group d-flex flex-column">
                <p class="text-primary mb-0 w-0">Sipariş Durumu</p>
                <select class="form-select" style="width:190px;">
                    <option selected>Tümü</option>
                    <option value="1">Tamamlananlar</option>
                    <option value="2">Sipariş sürecindekiler</option>
                </select>
            </div>
            <div class="input-group d-flex flex-column">
                <p class="text-primary mb-0">Sipariş Numarası</p>
                <input type="text" class="form-control" placeholder="Sipariş Numarası" aria-label="SiparişNumarası" aria-describedby="basic-addon1" style="width:190px;">
            </div>
            <div class="input-group d-flex flex-column">
                <p class="text-primary mb-0">Müşteri Adı</p>
                <input type="text" class="form-control" placeholder="Müşteri Adı" aria-label="MüşteriAdı" aria-describedby="basic-addon1" style="width:190px;">
            </div>

            <div class="input-group d-flex flex-column">
                <p class="text-primary mb-0">Tutarı</p>
                <input type="text" class="form-control" placeholder="Tutarı" aria-label="Tutarı" aria-describedby="basic-addon1" style="width:190px;">
            </div>

            <button type="button" class="btn btn-primary">Ara <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="Interface / Search_Magnifying_Glass">
                            <path id="Vector" d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </g>
                </svg> </button>
        </div>

        <div class="table mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Sipariş No</th>
                        <th scope="col">Kullanıcı Adı</th>
                        <th scope="col">Durumu</th>
                        <th scope="col">Tutarı</th>
                        <th scope="col">Eklenme Tarihi</th>
                        <th scope="col">Güncellenme Tarihi</th>
                        <th scope="col">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    @foreach($order->orderItems as $orderItem)
                    @if($orderItem->item_type == 1)
                    <?php $art = \App\Models\UserArt::find($orderItem->item_id);  ?>
                    <tr>
                        <td class="text-primary font-weight-bold">#123456{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td class="font-weight-bold">
                            @if($order->status == 0)
                            <p class="text-primary">Hazırlanıyor</p>
                            @elseif($order->status == 1)
                            <p class="text-success">Teslim Edildi</p>
                            @else
                            <p class="text-danger">İptal Edildi</p>
                            @endif

                        </td>
                        <td>{{ $art->price }} TL</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->updated_at}}</td>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm"><img src="storage/icons/pencil-ui-svgrepo-com.svg" height="20px" alt="Güncelle"></button>
                            <button type="button" class="btn btn-danger btn-sm"> <img src="/storage/icons/garbage-trash-svgrepo-com.svg" height="20px" alt="Sil"></button>
                        </td>
                    </tr>
                    @else
                    <?php $product = \App\Models\Product::find($orderItem->item_id);  ?>
                    <tr>
                        <td class="text-primary font-weight-bold">#123456{{$order->id}}</td>
                        <td>{{$order->user->name}}</td>
                        <td class="font-weight-bold">
                            @if($order->status == 0)
                            <p class="text-primary">Hazırlanıyor</p>
                            @elseif($order->status == 1)
                            <p class="text-success">Kargoya Verildi</p>
                            @elseif($order->status == 2)
                            <p class="text-success">Teslim Edildi</p>
                            @else
                            <p class="text-danger">İptal Edildi</p>
                            @endif

                        </td>
                        <td>{{ $product->price }} TL</td>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->updated_at}}</td>
                        <td>
                            <button type="button" class="btn btn-secondary btn-sm view-button" data-order-id="{{ $order->id }}"><img src="storage/icons/eye-svgrepo-com.svg" height="20px" alt="Göster"></button>
                            <button type="button" class="btn btn-primary btn-sm edit-button" data-order-id="{{ $order->id }}"><img src="storage/icons/pencil-ui-svgrepo-com.svg" height="20px" alt="Güncelle"></button>
                            <a class="btn btn-danger btn-sm" href="{{ route('order.delete', [$order->id]) }}"> <img src="/storage/icons/garbage-trash-svgrepo-com.svg" height="20px" alt="Sil"></a>
                        </td>
                    </tr>
                    
                    @endif

                    @endforeach
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

</body>


<script>
$(document).on('click', '.edit-button', function () {
  
    var orderId = $(this).data('order-id');
    $('#order_id').attr('value', orderId);
    document.getElementById("orderId").value = orderId;
    $('#OrderUpdateModal').modal('show');
});

$(document).on('click', '.view-button', function () {
  
  var orderId = $(this).data('order-id');
  $('#order_id').attr('value', orderId);
  $orderId = orderId;
  document.getElementById("order-id").textContent = orderId;
  $('#OrderViewModal').modal('show');
});
</script>

</html>