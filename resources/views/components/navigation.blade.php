<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="/frontend/css/style.css">
    
    <title>Document</title>

    <style>
     
    </style>

    <script>
      
    </script>
</head>
<body>
  @if (Request::is('/') )
    <nav class="navbar navbar-expand-lg cream-bg">
  @else
    <nav class="navbar navbar-expand-lg nav-light">
  @endif
  
      
      <div class="container-fluid  mt-2 mb-2">
        <a class="navbar-brand text-decoration-none poppins-bold orange-color" href="/dashboard">
          @auth
              @if(auth()->user()->status == 'admin')
              <span class="poppins-bold orange-color">Admin</span>
              @endif
          @endauth
        </a>
        
              
        @guest
            <a class="navbar-brand" href="/">
              <span class="poppins-bold orange-color">Inviters</span>
              <span class="black-color poppins-bold">.ID</span>

            </a>
        @endguest

        @auth
              @if(auth()->user()->status == 'member')
              <a class="navbar-brand" href="/">
                <span class="poppins-bold orange-color">Inviters</span>
                <span class="black-color poppins-bold">.ID</span>
              </a>
              @endif
          @endauth
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse d-lg-flex justify-content-lg-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link poppins-regular mx-5" style="color: #260701;" aria-current="page" href="/">Utama</a>
              </li>
              <li class="nav-item">
                <a class="nav-link poppins-regular mx-5 active" style="color: #260701;" href="/catalogue">Katalog</a>
              </li>
              @auth
                @if(auth()->user())
                <li class="nav-item">
                  <a class="nav-link poppins-regular mx-5" style="color: #260701;" href="/cart_user/{{ Auth::user()->id }}">Keranjang</a>
                </li>
                @endif
              @endauth
              
            </ul>
            
          </div>
        </div>
        <div class="nav-item d-flex justify-content-end me-5">
          @auth
            <div class="dropdown nav-link ms-5">
              <a class="text-decoration-none text-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
            
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button  class="btn" type="submit">logout</button>
                  </form>
                </li>
                <li>
                  <a class="dropdown-item" href="{{ route('profile.edit') }}">Profil</a>
                </li>
              </ul>
            </div>
          @endauth
          @guest
            <a class="nav-link poppins-bold orange-color ms-5" style="color: #EE4E24" href="/login">Login</a>
          @endguest
        </div>
      </nav>
</body>
</html>
