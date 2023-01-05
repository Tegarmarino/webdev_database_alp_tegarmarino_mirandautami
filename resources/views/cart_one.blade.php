@extends('layouts.mainlayout')
@section('body')
<div class="row" style="margin-top:40px; margin-left: 120px;">
    <div class="col-6">
        <div class="poppins-reguler orange-color" style="font-size: 40px;">
            Keranjang
        </div>
        <div class="mt-3 poppins-reguler black-color" >
            Ini adalah daftar produk yang anda masukkan ke keranjang.
        </div>
        <div class="mt-5 poppins-reguler orange-color" >
            Checkout produk anda.
        </div>
    
        <aside class="sidebar" style="margin-top: 300px; margin-left: 120px;">
        @foreach ($user->cart as $cart)
            <div class="row mt-3">
                <div class="col-2 ps-5">
                    <img src="{{ asset('storage/'.$cart->product->image_title) }}" style="width: 90px; height: 90px; border-radius: 15px;" alt="">
                </div>
                <div class="col-6">
                    <div class="product-square">
                        <div class="row">
                            <div class="col-6">
                                <div class="poppins-bold mt-3 ms-3" style="font-size: 16px;">
                                    {{ $cart->product->name }}
                                </div>
                            </div>
                            {{-- {{ Auth::user()->id }} --}}
                            <div class="col-6">
                                <a href="/delete_cart/{{ $cart->id }}" class="poppins-bold me-3 mt-3 text-danger d-flex justify-content-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="poppins-bold orange-color mt-2 ms-3" style="font-size: 16px;">
                            <span class="poppins-regular grey-color me-2">Harga </span> {{ $cart->product->price }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </aside>
    </div>
    <div class="col-6">
        <div class="d-flex justify-content-end" style="margin-right: 120px;">
            <div class="cart-square" style="height: 480px;">
                <div class="row mt-3">
                    <div class="col-4 d-flex justify-content-center">
                        <div class="small-circle-orange poppins-bold text-white text-center" style="padding-top: 3px;">
                            1
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <div class="small-circle-grey poppins-bold text-dark text-center" style="padding-top: 3px;">
                            2
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <div class="small-circle-grey poppins-bold text-dark text-center" style="padding-top: 3px;">
                            3
                        </div>
                    </div>
                </div>
                <div class="poppins-bold orange-color" style="margin-top:25px; margin-left:15px; font-size: 20px;">
                    Detail informasi
                </div>
                <div class="detail-square-scroll" style="margin-top: 230px; margin-bottom: 340px; margin-left: 15px;">
                    @foreach ($user->cart as $cart)
                    <div class="row my-2 poppins-regular">
                        <div class="col-7">
                            {{ $cart->product->name }}
                        </div>
                        <div class="col-5 text-end poppins-regular">
                            Rp. {{ $cart->product->price }}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="poppins-reguler" style="margin-left: 15px; margin-top: 330px;">
                   @php
                       $total = 0;
                   @endphp
                    @foreach ($user->cart as $cart)
                        @php
                            $total += $cart->product->price;    
                        @endphp
                    @endforeach
                    <div class="row">
                        <div class="col-7 poppins-regular">
                            Total
                        </div>
                        <div class="col-5 poppins-regular">
                            Rp. {{ $total }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @forelse ($user->cart as $cart)
            <div class="d-flex justify-content-end mt-4" style="margin-right: 100px;">
                <a href="/checkout/{{ Auth::user()->id }}" type="hidden"
                    class="btn text-decoration-none orange-bg poppins-bold p-1 px-5 white-color mx-4" style="border-radius:10px; width: 320px;">
                    Selanjutnya
                </a>
            </div>
            @if ($cart)
                @break
            @endif
        @empty
        <div class="d-flex justify-content-end mt-4" style="margin-right: 100px;">
            <a href="/catalogue" type="hidden"
            class="btn text-decoration-none orange-bg poppins-bold p-1 px-5 white-color mx-4" style="border-radius:10px; width: 320px;">
                Katalog
            </a>
        </div>
        @endforelse
        
        
    </div>
</div>
@endsection