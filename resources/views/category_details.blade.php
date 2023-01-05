@extends('layouts.mainlayout')
@section('body')
<div style="margin-left:85px; margin-right: 85px;">
    <div class="container">
        <div class="mb-5 mt-5">
            <img class="w-100" style="height: 350px; border-radius: 30px;" src="{{ asset('storage/'.$category->image) }}" alt="">
            <div class="center-to-image poppins-bold" style="font-size:128px; position: absolute; top:57%; left: 50%; transform: translate(-50%, -50%);">
                {{ $category->name }}
            </div>
        </div>
        <div class="row" style="margin-top: 100px;">
            @foreach ($category->product as $product)
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
@endsection