@extends('layout.success')
@section('title,success')

@section('content')
        <!-- Navbar -->
        <div class="container">
          <nav class="row navbar navbar-expand-lg navbar-light bg-white">
              <div
                  class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto"
              >
                  <a href="{{ route('Checkout-Success') }}" class="navbar-brand">
                      <img src="{{ url('frontend/image/koperku.png') }}" alt="" />
                  </a>
              </div>
              <ul class="navbar-nav mr-auto d-nonne d-lg-block">
                  <li>
                      <span class="text-muted">
                          | &nbsp; Explore beautiful places in the world
                      </span>
                  </li>
              </ul>
          </nav>
      </div>
    <main>
        <div class="section-success d-flex align-items-center">
          <div class="col text-center">
            <img src="{{ url('frontend/image/email.png') }}" alt="">
            <h1>Yay! Success</h1>
            <p>
              We've sent you email for trip instruction
              <br>
              please read it as well
            </p>
            <a href="{{ route('home') }}" class="btn btn-home-page mt-3 px-5">
              Home Page
            </a>
          </div>
        </div>
    </main>
@endsection
