@extends('layouts.welcome_page.app')
@section('content')
    <div class="container">
      <section >
        <div class=" pt-5">
            <div class="card text-center  border-0 ">
                <div class="logo_area m-auto">
                    <img src="{{ asset('/storage/Altus_Logo.png') }}" class="card-img-top img-fluid "  alt="logo">
                    {{-- <div class="text_design text-3"><h1>Welcome To Online Registration</h1></div> --}}
                </div>

                <div class="card-body pt-5">
                  <h3 class="card-title ">Seminar-Webinar</h3>
                  <p class="card-text text-muted  fs-4 ">A successful seminar provider often spends more time developing business than giving presentations</p>

                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="btn btn-outline-primary btn-lg ">Back to Home!</a>
                            @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">Register Now!</a>
                            @endif
                            @endauth

                        @endif


                </div>
              </div>
        </div>
        <br>
      </section>
      <hr class="style-one">

        <div class="row row-cols-1 row-cols-md-2 g-4 p-5">
            <div class="col">
              <div class="card border-left-0 border-right-0">
                <img src="{{ asset('/storage/sem1.jpg') }}" class="card-img-top seminar-image" alt="...">
                <div class="card-body cardbody-bg">
                  <h4 class="card-title">Seminar</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-left-0 border-right-0">
                <img src="{{ asset('/storage/sem2.jpg') }}" class="card-img-top seminar-image" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-left-0 border-right-0">
                <img src="{{ asset('/storage/sem3.jpg') }}" class="card-img-top seminar-image" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border-left-0 border-right-0 ">
                <img src="{{ asset('/storage/sem4.jpg') }}" class="card-img-top seminar-image" alt="...">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>


    </div>
    <div class="pt-3">
        @include('layouts.welcome_page.footer')
      </div>
@endsection
