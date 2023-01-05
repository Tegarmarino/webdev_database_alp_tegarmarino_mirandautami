<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/frontend/css/style.css">

    <title>Login</title>
  </head>
  <body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorys') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- @include('categorys.partials/create-categorys-form') --}}
                    {{-- <a href="{{ route('categorys.create') }}" class="btn btn-outline-primary">Create category</a> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="poppins-bold">Review checking</div>
    <table class="table table-striped mb-5">
        <thead>
            <tr>
                <th>No</th>
                <th>review</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    @if ($review->status == 'yes')
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $review['review'] }}</td>
                        <td>{{ $review['status'] }}</td>
                    @elseif ($review->status == 'no')

                    @endif
                </tr>
                @endforeach
        </tbody>
    </table>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>review</th>
                <th>status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $review['review'] }}</td>
                    <td>{{ $review['status'] }}</td>
                    @if (Auth::check() && Auth::user()->status == 'admin')
                            {{-- memanggil func create yang ada di controller dengan menggunakan routes books --}}
                                <td>
                                    <div class="mt-2">
                                        <a href="{{ route("admin_review.edit", $review->id)}}" class="btn btn-primary">Update</a>
                                    </div>
                                    <div>
                                        <form action="{{ route("admin_review.destroy", $review->id) }}" method="POST">
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
</x-app-layout>

</body>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
