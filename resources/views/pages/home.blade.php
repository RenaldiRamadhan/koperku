@extends('layout.app')
@section('title')
    Koperku
@endsection
@section('content')
<!-- Header -->
<header class="text-center">
    <h1>
      Explore the Beautiful World
      <br />
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see beautiful
      <br />
      moment you never see before
    </p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
  </header>
    <main>
        <div class="container">
        <section class="section-stats row justifiy-content-center" id="stats">
            <div class="col-3 col-md 2 stats-detail">
            <h2>20K</h2>
            <p>Members</p>
            </div>
            <div class="col-3 col-md2 stats-detail">
            <h2>12</h2>
            <p>Countries</p>
            </div>
            <div class="col-3 col-md2 stats-detail">
            <h2>3K</h2>
            <p>Hotels</p>
            </div>
            <div class="col-3 col-md2 stats-detail">
            <h2>72</h2>
            <p>Partners</p>
            </div>
        </section>
        </div>
        <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
            <div class="col text-center section-popular-heading">
                <h2>Wisata Popular</h2>
                <p>
                Something that you never try
                <br />
                before in this world
                </p>
            </div>
            </div>
        </div>
        </section>

 <section class="section-popular-content" id="popularcontent">
    <div class="container">
        <div class="section-popular-travel row justify-content-center">
        @foreach ($items as $item)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column"
            style="background-image: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image) : ''  }}');">
            <div class="travel-country">{{ $item->location }}</div>
            <div class="travel-location">{{ $item->title }}</div>
            <div class="travel-button mt-auto">
                <a href="{{ route('details', $item->slug) }}" class="btn btn-travel-details pt-x4">
                View Details
                </a>
            </div>
        </div>
    </div>
        @endforeach
    </div>
</div>

        </section>
        <section class="section-networks" id="networks">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                        Companies are trusted us
                        <br>
                        more than just a trip
                    </p>
                </div>
                <div class="col-md8 text-center">
                    <img 
                    src="frontend/image/logo partners.png" 
                    alt="logo partners"
                    class="img-partners">
                </div>
            </div>
        </div>
        </section>
        <div class="section section-testimonial-heading" id="testimonialheading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>They Are Loving US</h2>
                    <p>Moment were giving them
                        <br>
                        the best experience</p>
                </div>
            </div>
        </div>
        </div>
        <div class="section section-testimonial-content" id="testimonialcontetnt">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/image/Foto_Review_Cristopher Nolan.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Christopher Nolan</h3>
                            <p class="testimonial">It was glórious and I could 
                                not stop to say wohooo for 
                                every single moment
                                Dankeeeeee</p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Barcelona, Spain
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/image/Foto_Review_Florentino Perez.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">Florentino Perez</h3>
                            <p class="testimonial">Love to travel while  watching
                                champions league final
                                </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Paris, Frence</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/image/Foto_Review_j.k rowling.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4">J. K. Rowling</h3>
                            <p class="testimonial">This trip is very fun, i feel like
                                i'm in a harry potter movie
                                </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Malham Cove, England
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection