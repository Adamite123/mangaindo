
@extends('landing.navbar')
@section('navbar')

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

    @yield('footer')

    @endsection
