@extends('layouts.mainlayout')
@section('body')
{{-- LG --}}
<div class="d-none d-lg-block d-xl-block">
    <div class="row cream-bg">
        <div class="col-lg-6 ">
            <div class="poppins-bold d-none d-lg-block" style="font-size: 48px; margin-top:90px; margin-left:85px; width: 450px;">
              Jadikan Momen Spesialmu bersama Inviters.id
            </div>
            @if(auth()->user())
              <a href="/catalogue" class="btn black-bg p-2 px-5 white-color" style="border-radius:25px; margin-top: 55px; margin-left:85px;">Katalog</a>
            @else
              <a href="/login" class="btn black-bg p-2 px-5 white-color" style="border-radius:25px; margin-top: 55px; margin-left:85px;">Login</a>
            @endif
        </div>
        <div class="col-6">
            <div id="carouselExampleInterval" class="carousel slide carousel-fade" style="" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="./images/men_birthday_cream.png" style="height: 500px; width: 500px;" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="./images/wedding.png" style="height: 500px; width: 500px;" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./images/zayn.png" style="height: 500px; width: 500px;" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="d-none d-lg-none d-xl-block" style="font-size:128px; position: absolute; top:70%; left: 50%; transform: translate(-50%, -50%); z-index:1;">
          <div class="d-flex justify-content-center" >
            <div class="home-lg-upper-rectangel">
              <div class="poppins-regular text-center white-color" style="padding-top: 50px; font-size: 32px;">
                Kurangi sampah kertas, beralih ke digital dengan Inviters.id
              </div>
            </div>
          </div>
        </div>
    </div>
    
    
</div>

{{-- SM --}}
<div class="d-lg-none d-xl-none">
  <div class="row cream-bg">
    <div class="poppins-bold text-center mt-5 px-5" style="font-size: 20px; margin-top:20px;">
      Jadikan Momen Spesialmu bersama Inviters.id
    </div>
    @if(auth()->user())
      <div class="d-flex justify-content-center pb-3">
        <a href="/catalogue" class="btn w-50 black-bg p-2 px-2 white-color" style="border-radius:15px; margin-top: 55px;">Katalog</a>
      </div>
    @else
      <div class="d-flex justify-content-center">
        <a href="/login" class="btn w-50 black-bg p-2 px-2 white-color" style="border-radius:15px; margin-top: 55px;">Login</a>
      </div>
    @endif
    <div class="col-lg-6 ">
      
    </div>
  </div>
    {{-- LG --}}
      <div class="d-none d-lg-none d-xl-block" style="font-size:128px; position: absolute; top:70%; left: 50%; transform: translate(-50%, -50%); z-index:1;">
        <div class="d-flex justify-content-center" >
          <div class="home-lg-upper-rectangel">
            <div class="poppins-regular text-center white-color" style="padding-top: 50px; font-size: 32px;">
              Kurangi sampah kertas, beralih ke digital dengan Inviters.id
            </div>
          </div>
        </div>
      </div>
</div>

{{-- LG --}}
<div class="d-none d-lg-none d-xl-block">
  <div class="poppins-regular text-center" style="font-size: 30px; margin-top: 150px;">
    Inviters.id
  </div>
  <div class="d-flex justify-content-center">
    <div class="poppins-regular  text-center" style=" margin-top: 20px; width: 860px;">
      inviters.id adalah situs web penyedia jasa pembuatan undangan digital. Bekerja dengan sepenuh hati, profesional dan kemauan
      tentunya terus berinovasi, berkreasi dan berkembang.
    </div>
  </div>
</div>

{{-- SM --}}
<div class="d-lg-none d-xl-none">
  <div class="poppins-bold text-center mt-4" style="font-size: 25px;">
    Inviters.id
  </div>
  <div class="d-flex justify-content-center">
    <div class="poppins-regular  text-center px-5" style=" margin-top: 20px; width: 860px;">
      inviters.id adalah situs web penyedia jasa pembuatan undangan digital. Bekerja dengan sepenuh hati, profesional dan kemauan
      tentunya terus berinovasi, berkreasi dan berkembang.
    </div>
  </div>
</div>

{{-- LG --}}
<div class="d-none d-lg-none d-xl-block">
  <div class="poppins-regular text-center" style="font-size: 30px; margin-top: 90px;">
    Keunggulan yang kami tawarkan
  </div>
  <div class="row d-flex justify-content-center" style="margin-top: 50px;">
    <div class="col-3 mx-5 benefits-lg-square ">
      <div class="d-flex justify-content-center">
        <img src="./images/traveling.png" style="height:150px; width:150px;" alt="">
      </div>
      <p class="poppins-semi-bold text-center" style="font-size: 16px;">Kirim undanganmu kemanapun</p>
    </div>
    <div class="col-3 mx-5 benefits-lg-square">
      <div class="d-flex justify-content-center">
        <img src="./images/save_money.png" style="height:150px; width:150px;" alt="">
      </div>
      <p class="poppins-semi-bold text-center" style="font-size: 16px;">Harga murah dan terjangkau</p>
    </div>
    <div class="col-3 mx-5 benefits-lg-square">
      <div class="d-flex justify-content-center">
        <img src="./images/infinity.png" style="height:150px; width:150px;" alt="">
      </div>
      <p class="poppins-semi-bold text-center" style="font-size: 16px;">Kami selalu sedia stock undangan</p>
    </div>
    <div class="col-3 mx-5 benefits-lg-square">
      <div class="d-flex justify-content-center">
        <img src="./images/fast.png" style="height:150px; width:150px;" alt="">
      </div>
      <p class="poppins-semi-bold text-center" style="font-size: 16px;">Pengerjaan yang cepat</p>
    </div>
  </div>
</div>

{{-- SM --}}
<div class="d-lg-none d-xl-none">
  <div class="poppins-bold text-center px-5" style="font-size: 25px; margin-top: 90px;">
    Keunggulan yang kami tawarkan
  </div>
  <div class="row d-flex justify-content-center mt-4">
    <div class="col-3 mx-5 benefits-lg-square my-3">
      <div class="d-flex justify-content-center">
        <img src="./images/traveling.png" style="height:150px; width:150px;" alt="">
      </div>
      <p class="poppins-semi-bold text-center" style="font-size: 16px;">Kirim undanganmu kemanapun</p>
    </div>
    <div class="col-3 mx-5 benefits-lg-square my-3">
      <div class="d-flex justify-content-center">
        <img src="./images/save_money.png" style="height:150px; width:150px;" alt="">
      </div>
      <p class="poppins-semi-bold text-center" style="font-size: 16px;">Harga murah dan terjangkau</p>
    </div>
    <div class="col-3 mx-5 benefits-lg-square my-3">
      <div class="d-flex justify-content-center">
        <img src="./images/infinity.png" style="height:150px; width:150px;" alt="">
      </div>
      <p class="poppins-semi-bold text-center" style="font-size: 16px;">Kami selalu sedia stock undangan</p>
    </div>
    <div class="col-3 mx-5 benefits-lg-square my-3">
      <div class="d-flex justify-content-center">
        <img src="./images/fast.png" style="height:150px; width:150px;" alt="">
      </div>
      <p class="poppins-semi-bold text-center" style="font-size: 16px;">Pengerjaan yang cepat</p>
    </div>
  </div>
</div>

{{-- LG --}}
<div class="d-none d-lg-none d-xl-block">
  <div class="row" style="margin-top: 100px;">
    <div class="col-6">
      <div class="" style="margin-left: 85px;" >
        <span class="poppins-bold" style="font-size: 96px;">Ini buatan kami</span><span class="poppins-reguler" style="margin-left: 40px; margin-top: 40px; position: absolute; width: 300px;">Website undangan digital, untuk menjangkau lebih banyak orang tanpa perlu mengirimkannya secara fisik.
        </span>
      </div>
        <div class="d-flex justify-content-start" >
          <div class="home-lg-middle-rectangel" style="margin-left: 85px; margin-top: 100px;">
            <div class="poppins-regular text-center white-color" style="padding-top: 50px; font-size: 32px;">
              Lebih mudah dengan digital.
            </div>
          </div>
        </div>
      <div class="d-flex justify-content-center" style="margin-left: 300px;">
        @if(auth()->user())
          <a href="/catalogue" class="btn black-bg p-2 px-5 white-color " style="border-radius:25px; margin-top: 20px; margin-left:85px;">Pesan sekarang</a>
        @else
        <a href="/register" class="btn black-bg p-2 px-5 white-color " style="border-radius:25px; margin-top: 20px; margin-left:85px;">Registrasi</a>
        @endif
      </div>
    </div>
    <div class="col-6">
      <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="./images/phone_1.png" style="height: 600px; width: 400px;" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./images/phone_1.png" style="height: 600px; width: 400px;" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./images/phone_1.png" style="height: 600px; width: 400px;" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>


  

<div class="cream-bg" style="margin-top:200px">
  {{-- LG --}}
  <div class="d-none d-lg-none d-xl-block" style="position: absolute; left: 50%; transform: translate(-50%, -50%); z-index:1;">
    <div class="d-flex justify-content-center" >
      <div class="home-lg-upper-rectangel " style="background:white">
        <div class="poppins-regular text-center orange-color" style="padding-top: 35px; font-size: 48px; ">
          Apa kata mereka
        </div>
      </div>
    </div>
  </div>
  {{-- LG --}}
  
    {{-- @if ($review->status == 'no')
                                    
    @elseif ($review->status == 'yes')
                                   
    
    @endif --}}
  
  <div id="carouselExampleInterval" class="carousel slide" style="" data-bs-ride="carousel">
      <div class="carousel-inner">
        @php
          $i = 0;
        @endphp
        @foreach ($reviews as $review)
        
        @if ($i==0)
          @php
            $set = 'active';
          @endphp
        @else
          @php
            $set = '';
          @endphp
        @endif
          <div class="carousel-item {{ $set }}" data-bs-interval="3000">
            <div class="d-none d-lg-none d-xl-block" style="margin-top: 200px;">
              <div class="d-flex justify-content-center" >
                <div class="review-lg-rectangel" style="font-size: 48px; color:#EE4E24;">
                  <div class="poppins-bold text-center white-color" style="padding-top: 65px; font-size:24px;">
                    {{ $review->user->name }}
                  </div>
                  <div class="poppins-regular text-center white-color" style="padding-left: 70px; padding-right:70px; padding-top: 50px; font-size:24px;">
                    {{ $review->review }}
                  </div>
                </div>
              
              </div>
            </div>
            
          </div>
          @php
            $i++;
          @endphp
        @endforeach
      </div>
  </div>

  <div style="margin-top: 130px; padding-bottom: 30px;">
    <div class="text-end poppins-semi-bold me-5">
      <a href="https://instagram.com/inviters.id?igshid=OGQ2MjdiOTE=" target="_blank" class="mx-3 text-decoration-none black-color">
        Instagram
      </a>
      <a href="https://wa.me/6282234846577?text=Saya%20ingin%20menghubungi%20inviters.id" target="_blank"  class="mx-3 text-decoration-none black-color">
        Whatsapp
      </a>
      <a href="mailto:invitersid@gmail.com?subject=Email dari pelanggan inviters.id" target="_blank"  class="mx-3 text-decoration-none black-color">
        Email
      </a>
    </div>
  </div>

</div>


@endsection
