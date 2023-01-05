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
                        <form action="{{ route('admin_product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="price" :value="__('Harga')" />
                                <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div>
                                <x-input-label for="description" :value="__('Deskripsi')" />
                                <x-text-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div class="mb-3">
                                <label for="">category</label>
                                <select name="category_id" id="" class="form-select">
                                    @foreach ($categorys as $category)
                                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <x-input-label for="photo-title" :value="__('Photo title')" />
                                <x-text-input id="photo-title" name="photo-title" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="photo-1" :value="__('Photo 1')" />
                                <x-text-input id="photo-1" name="photo-1" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="photo-2" :value="__('Photo 2')" />
                                <x-text-input id="photo-2" name="photo-2" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="photo-3" :value="__('Photo 3')" />
                                <x-text-input id="photo-3" name="photo-3" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="photo-4" :value="__('Photo 4')" />
                                <x-text-input id="photo-4" name="photo-4" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="photo-5" :value="__('Photo 5')" />
                                <x-text-input id="photo-5" name="photo-5" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="photo-6" :value="__('Photo 6')" />
                                <x-text-input id="photo-6" name="photo-6" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="photo-7" :value="__('Photo 7')" />
                                <x-text-input id="photo-7" name="photo-7" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div>
                                <x-input-label for="photo-8" :value="__('Photo 8')" />
                                <x-text-input id="photo-8" name="photo-8" type="file"
                                    class="form-control mt-1 block w-full" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
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

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>name</th>
                <th>price</th>
                <th>image</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $product['name'] }}</td>
                <td>{{ $product['price'] }}</td>
                <td>
                    <img src="{{ asset('storage/'.$product->image_title) }}" style="width: 100px">
                </td>
                <td>
                    {{ $product->category->name }}
                </td>
                @if (Auth::check() && Auth::user()->status == 'admin')
                            <td>
                                <div class="mt-2">
                                    <a href="{{ route("admin_product.edit", $product->id)}}" class="btn btn-primary">Update</a>
                                </div>
                                <div>
                                    <form action="{{ route("admin_product.destroy", $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        @endif
            </tr>
        @endforeach
        
        </tbody>
    </table>

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












