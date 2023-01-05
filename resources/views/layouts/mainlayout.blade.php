<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    {{-- <link rel="stylesheet" href="/frontend/css/style.css"> --}}

    <link rel="icon" href="./images/Inviters_logo.png">

    {{-- <link rel="stylesheet" href="https:://fonts.googleapis.com/css?family=Poppins"> --}}

    <title>Inviters.id</title>

    <style>
      

    </style>
  </head>
  <body>
    @include('components.navigation')
    {{-- nav --}}
    {{-- <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid ms-4 mt-2 mb-2">
        <a class="navbar-brand" href="#"><span class="poppins-bold orange-color">Inviters</span><span class="black-color poppins-bold">.ID</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link poppins-bold mx-5" style="color: #EE4E24;" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link poppins-regular mx-5" style="color: #260701;" href="/catalogue">Catalogue</a>
            </li>
            <li class="nav-item">
              <a class="nav-link poppins-regular mx-5" style="color: #260701;" href="/cart_one">Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> --}}



    @yield('body')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>