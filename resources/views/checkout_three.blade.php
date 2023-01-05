@extends('layouts.mainlayout')
@section('body')

<div class="row" style="margin-top:40px; margin-left: 15px;">
    <div class="poppins-bold text-center orange-color" style="font-size: 40px;">
        Finish
    </div>
    
    {{--  --}}
    @forelse ($user->cart as $cart)
    <div style="padding-left: 400px; padding-right: 400px;" class="text-center">
        <div>Terimakasih atas pesanan anda, mohon untuk klik tombol <span class="poppins-bold orange-color">Finish</span> hingga muncul tombol <span class="poppins-bold orange-color">Konfirmasi</span> agar transaksi anda bisa diselesaikan</div>
    </div>
        <div class=" mt-5 d-flex justify-content-center" style="">
            <a href="/delete_cart/{{ $cart->id }}" class="btn orange-bg poppins-bold p-1 px-5 white-color mx-4" style="border-radius:10px; width: 320px;">
                Finish
            </a>
            @if ($cart)
                @break
            @endif
        </div>
    @empty
        <div style="padding-left: 400px; padding-right: 400px;" >
            <div class="mt-5 poppins-reguler text-center black-color" >
                Terima kasih atas transaksi anda,
                <span class="orange-color poppins-bold">mohon klik tombol dibawah ini</span> agar admin bisa melihat pesanan anda dan
                <span class="orange-color poppins-bold">untuk konfirmasi dengan admin</span> kami.
            </div>
        </div>
        <div class=" mt-5 d-flex justify-content-center" style="">
            <a href="" onclick="watsap();" target="_blank" class="btn orange-bg poppins-bold p-1 px-5 white-color mx-4" style="border-radius:10px; width: 320px;">
                Konfirmasi
            </a>
        </div>
    @endforelse
        
        
    </div>

</div>

<script>
    function watsap() {
        window.open("https://wa.me/6282234846577?text=Saya%20sudah%20beli%20produk%20inviters.id");
        window.location.href = '/'
    }
</script>
@endsection

{{-- '{{ route('/') }}' --}}