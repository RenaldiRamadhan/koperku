@extends('layout.app')
@section('title,Detail Travel')

@section('content')
    <main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Paket Travel
                </li>
                <li class="breadcrumb-item active">
                  Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1>
                Maldives Island
              </h1>
              <p>
                Maldives
              </p>
              <div class="gallery">
                <div class="xzoom-cointainer">
                  <img src="frontend/image/Mask Group 3.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/image/Mask Group 3.jpg">
                </div>
                <div class="xzoom-thumbs">
                  <a href="frontend/image/gl1 cpy.jpg">
                    <img src="frontend/image/gl1 cpy.jpg" class="xzoom-gallery" width="128" xpreview="frontend/image/gl1 cpy.jpg">
                  </a>
                  <a href="frontend/image/gl2 cpy.jpg">
                    <img src="frontend/image/gl2 cpy.jpg" class="xzoom-gallery" width="128" xpreview="frontend/image/gl2 cpy.jpg">
                  </a>
                  <a href="frontend/image/gl3 cpy.jpg">
                    <img src="frontend/image/gl3 cpy.jpg" class="xzoom-gallery" width="128" xpreview="frontend/image/gl3 cpy.jpg">
                  </a>
                  <a href="frontend/image/gl4 cpy.jpg">
                    <img src="frontend/image/gl4 cpy.jpg" class="xzoom-gallery" width="128" xpreview="frontend/image/gl4 cpy.jpg">
                  </a>
                  <a href="ffrontend/image/gl5 cpy.jpg">
                    <img src="frontend/image/gl5 cpy.jpg" class="xzoom-gallery" width="128" xpreview="frontend/image/gl5 cpy.jpg">
                  </a>
                </div>
              </div>
              <h2>Tentang Wisata</h2>
              <p>
                The Maldives are known as “the tropical paradise” for reasons such as its beauty. 
        This tropical country has separated islands and islands are surrounded by its own lagoon.
        Each island has pure white sandy beaches. The sea covers 99% of the Maldives and it is
        where you can see beautiful fishes and corals. There are over five thousand coral reefs and
        plenty of reef fish, corals, and many other marine lives you could see underwater. Diving in
        the Maldives would be memorable
                    </p>
                    <p>
                        Maldives is an ideal destination for a family holiday or a honeymoon trip where you can
        enjoy and have a memorable vacation. Visiting and exploring the beauty of the Maldives
        would be a wonderful experience.
              </p>
              <div class="features row">
                <div class="col-md-4">
                  <div class="description"><img src="frontend/image/Group 20.png" alt="" class="feature-image"></div>
                  <div class="description">
                    <h3>Featured Event</h3>
                    <p>Maldivian Festivals</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description"><img src="frontend/image/Group 21.png" alt="" class="feature-image"></div>
                  <div class="description">
                    <h3>Language</h3>
                    <p>Dhivehi</p>
                  </div>
                </div>
                <div class="col-md-4 border-left">
                  <div class="description"><img src="frontend/image/Group 22.png" alt="" class="feature-image"></div>
                  <div class="description">
                    <h3>Foods</h3>
                    <p>Local Foods</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right">
            <h2>Members are going</h2>
            <div class="members my-2">
              <img src="frontend/image/Foto_Members Going_1.png"  class="member-image mr-1">
              <img src="frontend/image/Foto_Members Going_2.png"  class="member-image mr-1">
              <img src="frontend/image/Foto_Members Going_3.png"  class="member-image mr-1">
              <img src="frontend/image/Foto_Members Going_4.png"  class="member-image mr-1">
              <img src="frontend/image/Foto_Members Going_5.png"  class="member-image mr-1">
              <div class="members my-2">
              </div>
            </div>
            <hr>
            <h2>Trip Information</h2>
            <table class="trip-information">
              <tr>
                <th width="50%">Date of Departure</th>
                <td width="50%">5 Aug,22</td>
              </tr>
              <tr>
                <th width="50%">Duration</th>
                <td width="50%">4D 3N</td>
              </tr>
              <tr>
                <th width="50%">Type</th>
                <td width="50%">Open Trip</td>
              </tr>
              <tr>
                <th width="50%">Price</th>
                <td width="50%">$ 80,00/ person</td>
              </tr>
            </table>
          </div>
          <div class="join-container">
            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
              Join Now
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.xzoom, .xzoom-gallery').xzoom({
      zoomwitdth: 500,
      title: false,
      tint: '#333',
      xoffset: 15
    });
  });
</script>
@endpush