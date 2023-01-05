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
                                {{ __('Create new categorys') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('') }}
                            </p>
                        </header>

                        {{-- <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form> --}}

                        <form action="{{ route('admin_review.update', $reviews->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('patch') --}}
                            <input type="hidden" name="_method" value="PATCH">
                            <div>
                                <x-input-label for="name" :value="__('Review')" />
                                <input id="name" name="review" type="text" class="mt-1 block w-full" value="{{ $reviews->review }}" readonly/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            {{-- <div>
                                <x-input-label for="price" :value="__('Status')" />
                                <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" value="{{ $product->price }}" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div> --}}

                            <div class="mb-3">
                                <label for="">Status</label>
                                {{-- <select name="status" id="" class="form-select">
                                    @foreach ($reviews as $review)
                                        <option value="{{ $review['review_id'] }}">{{ $review['review'] }}</option>
                                    @endforeach

                                </select> --}}
                                <select name="status" id="" class="form-select">
                                    <option value="no">
                                        Tidak setuju
                                    </option>
                                    <option value="yes">
                                        Setujui   
                                    </option>
                                </select>
                            </div>
                            
                            

                            {{-- <div>
                                <x-input-label for="description" :value="__('Category')" />
                                <x-text-input id="description" name="category_name" type="text"
                                    class="mt-1 block w-full" value="{{ $product->category->name }}" readonly/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div> --}}

                            {{-- <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="productsphoto" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div> --}}

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