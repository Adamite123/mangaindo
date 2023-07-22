<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/assets/css/home.css')}}">
    <title>Hello, world!</title>
  </head>
  <body>

<!-- navbar -->
<div class="container">

    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MANGA INDO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Manga list</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Manhwa list</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Manhua list</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Genre</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> --}}
@extends('landing.navbar')
@section('navbar')

</div>

<!-- corousel -->
<div class="container">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{URL('images/1311951.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL('images/1318226.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{URL('images/533007.png')}}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>



<div class="container">
  <div class="row">
    <!-- row 2 -->

    <div class="col-sm-8">
      <div class="row">
        {{-- <div class="card-anime"> --}}
                        <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>


                      <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                      </div>
                      </div>



                      <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>


                      <div class="col-sm-3">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                      </div>
                      </div>

      </div>
    </div>

<!-- row 2 -->
           <div class="col-sm-4">
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="card">
                          <div class="card-body">
                            <img src="{{URL('images/533007.png')}}" class="card-img-top" alt="...">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                      </div>
                    </div>
              </div>
  </div>
</div>


<!-- list manga terpopuler -->



<!-- footer -->


<footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-center text-md-left">
    <div class="row text-center text-md-left">
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 ">
          <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
            Company name
          </h5>
          <p>
            Here you can use rows and columns to organize your footer content.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
      </div>

      <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
            Product
          </h5>
          <p>
            <a href="#!" class="text-white" style="text-decoration: none;">TheProvider</a>
          </p>
          <p>
            <a href="#!" class="text-white" style="text-decoration: none;">TheProvider</a>
          </p>
          <p>
            <a href="#!" class="text-white" style="text-decoration: none;">TheProvider</a>
          </p>
          <p>
            <a href="#!" class="text-white" style="text-decoration: none;">TheProvider</a>
          </p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
            Useful links
          </h5>
          <p>
            <a href="#!" class="text-white" style="text-decoration: none;">TheProvider</a>
          </p>
          <p>
            <a href="#!" class="text-white" style="text-decoration: none;">TheProvider</a>
          </p>
          <p>
            <a href="#!" class="text-white" style="text-decoration: none;">TheProvider</a>
          </p>
          <p>
            <a href="#!" class="text-white" style="text-decoration: none;">TheProvider</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
            Useful links
          </h5>
          <p>
            <i class="fas fa-home mr-3"></i>Bet York, NY 10012, US
          </p>
          <p>
            <i class="fas fa-home mr-3"></i>Bet York, NY 10012, US
          </p>
          <p>
            <i class="fas fa-home mr-3"></i>Bet York, NY 10012, US
          </p>
          <p>
            <i class="fas fa-home mr-3"></i>Bet York, NY 10012, US
          </p>
        </div>

    </div>

    <hr class="mb-4">
    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p>Copyright @2023 all right reserved by:
          <a href="" style="text-decoration: none;">
            <strong class="text-warning">Deadly</strong>
          </a>
        </p>
      </div>

    </div>
  </div>
</footer>

@endsection

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
