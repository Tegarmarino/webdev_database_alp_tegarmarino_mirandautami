<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/frontend/css/style.css">

    <title>Login</title>
</head>

<body>

    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <header>
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Update produk') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('') }}
                            </p>
                        </header>

                        <form action="{{ route('admin_product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                            <input type="hidden" name="_method" value="PATCH">
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ $product->name }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="price" :value="__('Harga')" />
                                <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" value="{{ $product->price }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Deskripsi')" />
                                <x-text-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" value="{{ $product->description }}"/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div class="mb-3">
                                <label for="">Produk image title</label>
                                <br>
                                <img src="{{ asset('storage/'.$product->image_title) }}" alt="">
                                <input type="file" name="photo-title" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Produk image 1</label>
                                <br>
                                <img src="{{ asset('storage/'.$product->image_1) }}" alt="">
                                <input type="file" name="photo-1" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Produk image 2</label>
                                <br>
                                <img src="{{ asset('storage/'.$product->image_2) }}" alt="">
                                <input type="file" name="photo-2" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Produk image 3</label>
                                <br>
                                <img src="{{ asset('storage/'.$product->image_3) }}" alt="">
                                <input type="file" name="photo-3" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Produk image 4</label>
                                <br>
                                <img src="{{ asset('storage/'.$product->image_4) }}" alt="">
                                <input type="file" name="photo-4" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Produk image 5</label>
                                <br>
                                <img src="{{ asset('storage/'.$product->image_5) }}" alt="">
                                <input type="file" name="photo-5" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Produk image 6</label>
                                <br>
                                <img src="{{ asset('storage/'.$product->image_6) }}" alt="">
                                <input type="file" name="photo-6" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Produk image 7</label>
                                <br>
                                <img src="{{ asset('storage/'.$product->image_7) }}" alt="">
                                <input type="file" name="photo-7" class="form-control" id="">
                            </div>
                            <div class="mb-3">
                                <label for="">Produk image 8</label>
                                <br>
                                <img src="{{ asset('storage/'.$product->image_8) }}" alt="">
                                <input type="file" name="photo-8" class="form-control" id="">
                            </div>

                            <button type="submit" class="btn btn-outline-success">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>
</html>