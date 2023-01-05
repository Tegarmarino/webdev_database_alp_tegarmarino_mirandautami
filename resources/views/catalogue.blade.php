@extends('layouts.mainlayout')
@section('body')
    {{-- Search bar --}}
    <div class="mt-5">
        <form action="" method="GET" class="d-flex justify-content-center">
            <input class="form-control me-2" name="search" type="search" placeholder="Cari berdasarkan kategori atau produk..." aria-label="Search" style="width: 600px; border-radius: 10px;">
            <button class="btn px-5 poppins-bold text-white" type="submit" style="border-radius: 10px; background: #EE4E24;">
                Cari
            </button>
        </form>
    </div>
    
    {{-- Category --}}
    <div class="poppins-regular mt-5 mb-3" style="font-size: 40px; margin-left:85px;">
        Kategori
    </div>
    <div style="margin-left:85px; margin-right: 85px;">
        <div class="container">
            <div class="row">    
                @foreach ($categorys as $category)
                <div class="col-4">
                    <div class="container">
                        <div>
                            <a href="/category/{{ $category['id'] }}">
                                <img class="card-img-top" src="{{ asset('storage/'.$category->image) }}" style="width: 300px; height: 180px; border-radius: 30px;">
                            </a>
                        </div>
                        <div class="mt-3">
                            <a href="/category/{{ $category['id'] }}" class="mt-3 text-decoration-none">
                                <span class="poppins-bold orange-color" style="font-size: 20px;">{{ $category['name'] }}</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>  
    </div>

    {{-- Product --}}
    <div class="poppins-regular mt-5" style="font-size: 40px; margin-left:85px;">
        Semua produk
    </div>
    <div style="margin-left:85px; margin-right: 85px;">
        <div class="container">
            <div class="row mt-3">
                @foreach ($products as $product)
                    <div class="col-4">
                        <div class="card border-0" style="width: 300px; border-top-right-radius: 30px; border-top-left-radius: 30px;">
                            <div class="d-flex justify-content-center">
                                <img class="card-img-top" src="{{ asset('storage/'.$product->image_title) }}" style="width: 300px; height: 180px; border-radius: 30px;">
                            </div>
                            
                                <div class="card-body">
                                <span class="poppins-bold" style="font-size: 20px;">{{ $product['name'] }}</span>
                                
                                <p class="poppins-regular card-text text-truncate" style="font-size: 16px;" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col">
                                        <span class="poppins_regular">Rp. {{ $product['price'] }}</span>
                                    </div>
                                    
                                    {{-- {{ route("product.show", $product['product_id'])}} --}}
                                    
                                    <div class="col">
                                        <a href="/product/{{ $product['id'] }}">
                                            <button class="btn orange-bg text-white poppins-bold" style="width: 120px; border-radius: 10px;">
                                                View
                                            </button>
                                        </a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div style="margin-top: 150px; margin-bottom: 30px;">
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
@endsection