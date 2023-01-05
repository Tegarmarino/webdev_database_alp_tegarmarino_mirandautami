@extends('layouts.mainlayout')
@section('body')
    <div class="row" style="margin-top:40px; margin-left: 120px;">
        <div class="col-6 container">
            <div class="poppins-reguler orange-color" style="font-size: 40px;">
               Transaksi
            </div>
            <div class="mt-3 poppins-reguler black-color">
                Mohon untuk mengisi data-data dibawah ini dengan
                memilih <span class="poppins-bold orange-color">tipe pembayaran</span>, mengisi <span class="poppins-bold orange-color">nomor whatsapp yang aktif</span> dan <span class="poppins-bold orange-color">mengirimkan bukti transfer</span>.
            </div>
            <div class="poppins-reguler black-color mt-4" >
                Scroll tipe pembayaran dibawah ini untuk memilih tipe pembayaran anda.
            </div>
            <aside class="sidebar" style="margin-top: 300px; margin-bottom:460px; margin-left: 140px;">
                @foreach ($payments as $payment)
                    <div class="poppins-bold"
                    style="font-size: 20px;">
                        {{ $payment['payment_method'] }}
                    </div>
                    <p class="poppins-regular card-text text-truncate" style="font-size: 16px;">Nomor
                        rekening <span
                            class="poppins-bold orange-color">{{ $payment['account_number'] }}</span>
                    </p>
                @endforeach
                
            </aside>

            

            <form action="{{ route('order.store') }}" style="margin-top: 100px;" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form payment_id --}}
                <div class="mb-3">
                    <label for="">Lalu klik pilihan dibawah ini, sesuai dengan <span class="poppins-bold orange-color">tipe pembayaran</span> yang sudah anda pilih</label>
                    <select name="payment_id" id="" class="form-select">
                        @foreach ($payments as $payment)
                            <option value="{{ $payment['id'] }}">{{ $payment['payment_method'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-4 poppins-reguler black-color">
                    Setelah itu masukkan data-data dengan benar, masukan <span class="poppins-bold orange-color">nomor whatsapp yang aktif</span>, karena digunakan untuk <span class="poppins-bold orange-color">konfirmasi pembayaran</span>. 
                </div>

                {{-- Form user_id --}}
                <div class="mb-4 mt-3" style="margin-left:85px;">
                    <input type="hidden" class="form-control poppins-reguler" name="user_id" id="exampleFormControlInput1"
                        value="{{ Auth::user()->id }}" readonly>
                </div>
                {{-- Form cart_id --}}
                <div class="mb-4 mt-3" style="margin-left:85px;">
                    @foreach ($user->cart as $cart)
                        <input type="hidden" class="form-control poppins-reguler" name="cart_id"
                            id="exampleFormControlInput1" value="{{ $cart->id }}" readonly>
                    @endforeach
                </div>
                {{-- Form wa_number --}}
                <div class="mb-3 mt-2">
                    <label for="whatsapp_input" class="form-label grey-color">Whatsapp number (ganti 0 dengan 62)</label>
                    <input type="tel" class="form-control" name="wa_number" id="whatsapp_input" placeholder="628534...."
                        aria-describedby="emailHelp" pattern="62?.+" required>
                </div>
                {{-- Form bukti_transferphoto --}}
                <div>
                    <x-input-label for="bukti_transferphoto" class="grey-color" :value="__('Bukti Transfer')" />
                    <input id="bukti_transferphoto" name="bukti_transferphoto" type="file"
                        class="form-control mt-1 block w-full" required/>
                    <x-input-error class="mt-2" :messages="$errors->get('email')"/>
                </div>
                <div class="mb-4 mt-3" style="margin-left:85px;">
                </div>

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
                            <div class="small-circle-orange poppins-bold text-white text-center" style="padding-top: 3px;">
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
                    {{-- <div class="detail-square-scroll" style="margin-top: 220px; margin-bottom: 340px; margin-left: 15px;">
                        @foreach ($user->cart as $cart)
                            <div>{{ $cart->product->name }} : <span>{{ $cart->product->price }}</span></div>
                        @endforeach
                    </div> --}}
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
                        {{-- <div>Total : <span>{{ $total }}</span></div> --}}
                    </div>
                </div>
            </div>
            {{-- Form total_price --}}
            <div class="mb-4 mt-3" style="margin-left:85px;">
                <input type="hidden" class="form-control poppins-reguler" name="total_price" id="exampleFormControlInput1"
                    value="{{ $total }}" readonly>
            </div>
            <div class="d-flex justify-content-end mt-4" style="margin-right: 100px;">
                @forelse ($user->order as $order)
                    <a href="/checkout_two/{{ Auth::user()->id }}" type="hidden"
                        class="btn orange-bg poppins-bold p-1 px-5 white-color mx-4"
                        style="border-radius:10px; width: 320px;">
                        Lanjutkan
                    </a>
                @empty
                    <button type="submit" class="btn orange-bg poppins-bold p-1 px-5 white-color mx-4"
                        style="border-radius:10px; width: 320px;">
                        Konfirmasi
                    </button>
                @endforelse
            </div>
            </form>



        </div>
    </div>
@endsection
