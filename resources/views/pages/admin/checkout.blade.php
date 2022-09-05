@extends('layout.checkout')
@section('title,checkout')

@section('content')
        <!-- Navbar -->
        <div class="container">
          <nav class="row navbar navbar-expand-lg navbar-light bg-white">
              <div
                  class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
                  <a href="{{ route('Checkout') }}" class="navbar-brand">
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
                            <li class="breadcrumb-item">
                              Details
                            </li>
                            <li class="breadcrumb-item active">
                              Check Out
                            </li>
                          </ol>
                        </nav>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                          <h1>
                            Who is Going
                          </h1>
                          <p>
                          Trip to Maldives Island, MALDIVES
                          </p>
                          <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                              <thead>
                                <tr>
                                  <td>
                                    Picture
                                  </td>
                                  <td>
                                    Name
                                  </td>
                                  <td>
                                    Nationality
                                  </td>
                                  <td>
                                    Visa
                                  </td>
                                  <td>
                                    Passport
                                  </td>
                                  <td>
                                    
                                  </td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <img src="{{ url('frontend/image/bank.png') }}" height="60">
                                  </td>
                                  <td class="align-middle">Hillary Clinton</td>
                                  <td class="align-middle">US</td>
                                  <td class="align-middle">N/A</td>
                                  <td class="align-middle">Active</td>
                                  <td class="align-middle"><img src="frontend/image/x.jpg" alt=""></td>
                                </tr>
                                <tr>
                                  <td>
                                    <img src="frontend/image/Kemal.jpg" height="60">
                                  </td>
                                  <td class="align-middle">Kemal Atatürk</td>
                                  <td class="align-middle">TUR</td>
                                  <td class="align-middle">30 Days</td>
                                  <td class="align-middle">Active</td>
                                  <td class="align-middle"><img src="frontend/image/x.jpg" alt=""></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="member-mt-3">
                            <h2>
                              Add Members
                            </h2>
                            <form action="" class="form-inline">
                              <label for="InputUsername" class="sr-only">
                                Name
                              </label>
                              <input type="text" name="InputUsername" class="form-control mb-2 mr-sm-2" id="inputusername" placeholder="Username">
                              <label for="InputVisa" class="sr-only">
                                Visa
                              </label>

                              <select name="InputVisa" id="InputVisa" class="custom-select mb-2 mr-sm-2">
                                <option value="VISA" selected>VISA</option>
                                <option value="30 Days">30 Days</option>
                                <option value="N/A">N/A</option>
                              </select>

                              <label for="doePassport" class="sr-only">DOE Passport</label>
                              <div class="input-group mb-2 mr-sm-2">
                                <input type="text" class="form-control datepicker" id="doepassport" placeholder="DOE Passport">
                              </div>
                              <button type="submit" class="btn btn-add-now mb-2 px-4">
                                Add Now
                              </button>

                            </form>
                            <h3 class="mt-2 mb-0">
                              Note
                            </h3>
                            <p class="disclaimer mb-0">
                              You are only able to invite member that has registered in koperku
                            </p>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card card-details card-right">
                        <h2>Checkout Informations</h2>
                        <table class="trip-information">
                          <tr>
                            <th width="50%">Members</th>
                            <td width="50%" class="text-right">2 Person</td>
                          </tr>
                          <tr>
                            <th width="50%">Additional VISA</th>
                            <td width="50%" class="text-right">$ 285,00</td>
                          </tr>
                          <tr>
                            <th width="50%">Trip price</th>
                            <td width="50%" class="text-right">$ 80,00</td>
                          </tr>
                          <tr>
                            <th width="50%">Total Price</th>
                            <td width="50%" class="text-right">$ 525,00</td>
                          </tr>
                          <tr>
                            <th width="50%">Total Pay (Unique Code)</th>
                            <td width="50%" class="text-right text-total">
                              <span class="text-blue">$ 524,</span><span class="text-orange">33</span>
                            </td>
                          </tr>
                        </table>
                        <hr>
                        <h2>Payment Instruction</h2>
                        <p class="payment-instruction">Please complete payment before you continue the wonderful trip </p>
                        <div class="bank">
                          <div class="bank-item pb-3">
                            <img src="frontend/image/bank.png" alt="" class="bank-image">
                            <div class="description">
                              <h3>PT Koperku ID</h3>
                              <p>4372343030
                                <br>
                                Bank Central Asia
                              </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="bank-item pb-3">
                              <img src="frontend/image/bank.png" alt="" class="bank-image">
                              <div class="description">
                                <h3>PT Koperku ID</h3>
                                <p>
                                  085156762711
                                  <br>
                                  GOPAY
                                </p>
                              </div>
                              <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="join-container">
                      <a href="{{ route('Checkout-Success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                        I Have Made Payment
                      </a>
                    </div>
                    <div class="text-center mt-3">
                      <a href="{{ route('Details') }}" class="text-muted">
                        Cancel Booking
                      </a>
                    </div>
                  </div>
                </section>
            </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    });
    </script>
@endpush