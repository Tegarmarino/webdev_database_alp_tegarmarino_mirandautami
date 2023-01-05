@extends('layouts.mainlayout')
@section('body')

    {{-- Product name --}}
    <div class="mt-5 text-center poppins-reguler orange-color" style="font-size: 48px;">
        {{ $product['name'] }}
    </div>
    <div class="mt-5">
        <img class="w-100" src="{{ asset('storage/' . $product->image_1) }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('storage/' . $product->image_2) }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('storage/' . $product->image_3) }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('storage/' . $product->image_4) }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('storage/' . $product->image_5) }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('storage/' . $product->image_6) }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('storage/' . $product->image_7) }}">
    </div>
    <div>
        <img class="w-100" src="{{ asset('storage/' . $product->image_8) }}">
    </div>
  @if (Auth()->user())
        <form action="{{ route('cart.store') }}" method="POST">
            @csrf

            <div class="mb-4 mt-3" style="margin-left:85px;">
                <input type="hidden" class="form-control poppins-reguler" name="user_id" id="exampleFormControlInput1"
                    value="{{ Auth::user()->id }}" readonly>
            </div>
            <div class="mb-4 mt-3" style="margin-left:85px;">
                <input type="hidden" class="form-control poppins-reguler" name="product_id" id="exampleFormControlInput1"
                    value="{{ $product->id }}" readonly />
            </div>
            <div class="row" style="margin-top: 100px;">
                <div class="d-flex justify-content-center align-center">
                    {{-- <a href="" type="submit" class="text-decoration-none poppins-bold black-color mx-4"
        style="margin-top: 5px">Add to cart</a> --}}
                    <button type="submit" class="btn orange-bg poppins-bold p-1 px-5 white-color mx-4"
                        style="border-radius:10px; ">
                        Masukkan keranjang
                    </button>

                </div>
            </div>
        </form>

        <div class="cream-bg" style="margin-top:200px">
            {{-- LG --}}

            <div class="d-none d-lg-none d-xl-block"
                style="position: absolute; left: 50%; transform: translate(-50%, -50%); z-index:1;">
                <div class="d-flex justify-content-center">
                    <div class="home-lg-upper-rectangel " style="background:white">
                        <div class="poppins-regular text-center orange-color" style="padding-top: 35px; font-size: 48px;">
                            Apa kata mereka
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding-top:200px;">
                <div class="col-6">
                    <div class="poppins-reguler" style="margin-left: 85px; font-size: 48px;">Tambah review</div>

                    <form action="{{ route('review.store') }}" method="POST">
                        @csrf

                        <div class="mb-4 mt-3" style="margin-left:85px;">
                            <input type="hidden" class="form-control poppins-reguler" name="user_id"
                                id="exampleFormControlInput1" value="{{ Auth::user()->id }}" readonly>
                        </div>
                        <div class="mb-4 mt-3" style="margin-left:85px;">
                            <input type="hidden" class="form-control poppins-reguler" id="exampleFormControlInput1"
                                value="{{ Auth::user()->name }}" readonly>
                        </div>
                        <div class="mb-4 mt-3" style="margin-left:85px;">
                            <input type="hidden" class="form-control poppins-reguler" name="product_id"
                                id="exampleFormControlInput1" value="{{ $product->id }}" readonly />
                        </div>
                        <div class="mb-3" style="margin-left:85px;">
                            <textarea class="form-control poppins-reguler" name="review" id="exampleFormControlTextarea1" rows="3"
                                placeholder="review..." required></textarea>
                        </div>
                        <button type="submit" class="btn orange-bg text-white" style="margin-left: 90px; border-radius: 10px;">
                            Kirim
                        </button>
                    </form>

                </div>
                <div class="col-6">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($product->review as $review)
                                @if ($review->status == 'no')
                                @elseif ($review->status == 'yes')
                                    @if ($i == 0)
                                        @php
                                            $set = 'active';
                                        @endphp
                                    @else
                                        @php
                                            $set = '';
                                        @endphp
                                    @endif
                                    <div class="carousel-item {{ $set }}" data-bs-interval="3000">
                                        <div class="d-none d-lg-none d-xl-block" style="margin-top: px;">
                                            <div class="d-flex justify-content-center">
                                                <div class="review-lg-rectangel" style="font-size: 48px; color:#EE4E24;">
                                                    <div class="poppins-bold text-center white-color"
                                                        style="padding-top: 65px; font-size:24px;">
                                                        {{ $review->user->name }}
                                                    </div>
                                                    <div class="poppins-regular text-center white-color"
                                                        style="padding-left: 70px; padding-right:70px; padding-top: 50px; font-size:24px;">
                                                        {{ $review->review }}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                @endif
                        </div>
                        @php
                            $i++;
                        @endphp
                      @endforeach
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
  <div style="margin-top: 50px; padding-bottom: 30px;">
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
    
@else
    <div class="text-center poppins-regular mt-5">Mohon untuk <span class="poppins-bold orange-color">login</span> agar
        bisa beli produk ini</div>
    <div class="d-flex justify-content-center">
        <a href="/login" type="submit" class="btn orange-bg poppins-bold p-1 px-5 white-color mx-4 mt-3"
            style="border-radius:10px; ">
            Login
        </a>
    </div>
    <div style="margin-top: 50px; padding-bottom: 30px;">
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
    @endif
    
    
@endsection
