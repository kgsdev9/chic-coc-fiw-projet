<div>

    <main>
        <!-- section-->

        <!-- section -->
        <section class="mb-lg-14 mb-8 mt-8">
          <div class="container">
            <!-- row -->
            <div class="row">
              <!-- col -->
              <div class="col-12">
                <div>
                  <div class="mb-8">
                    <!-- text -->
                    <h1 class="fw-bold mb-0">Votre Commande </h1>

                  </div>
                </div>
              </div>
            </div>
            <div>
              <!-- row -->
              <div class="row">
                <div class="col-lg-7 col-md-12">
                  <!-- accordion -->
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!-- accordion item -->



                    <div class="accordion-item py-4">

                      <a href="#" class="text-inherit h5" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="true" aria-controls="flush-collapseFour">
                        <i class="feather-icon icon-credit-card me-2 text-muted"></i>Payer Par Paypal
                        <!-- collapse --> </a>
                      <div id="flush-collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample" style="">

                        <div class="mt-5">
                          <div>

                            <div class="card card-bordered shadow-none mb-2">
                              <!-- card body -->
                              <div class="card-body p-6">
                                <div class="d-flex">

                                  <div>
                                    <!-- title -->
                                    <h5 class="mb-1 h6">  <a href="{{route('processTransaction')}}" class="nav-link active">Payer Avec Paypal</a> </h5>
                                    <p class="mb-0 small">Vous serez redirigé vers le site PayPal pour finaliser votre achat en toute sécurité.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                      <!-- card -->
                            <div class="card card-bordered shadow-none mb-2">
                              <!-- card body -->
                              <div class="card-body p-6">
                                <div class="d-flex mb-4">
                                  <div class="form-check ">
                                    <!-- input -->
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="creditdebitcard">
                                    <label class="form-check-label ms-2" for="creditdebitcard">

                                    </label>
                                  </div>
                                  <div>
                                    <h5 class="mb-1 h6"> PAIEMENT PAR ORANGE MONEY WAVE MTN MONEY </h5>
                                    <a href="{{route('checkout.mobile')}}" target="_blank">FINALISER LE PAIEMENT </a>
                                  </div>
                                </div>
                              </div>
                            </div>



                            <!-- Button -->

                          </div>
                        </div>
                      </div>

                    </div>


                  </div>

                </div>

                <div class="col-12 col-md-12 offset-lg-1 col-lg-4">
                  <div class="mt-4 mt-lg-0">
                    <div class="card shadow-sm">
                      <h5 class="px-6 py-4 bg-transparent mb-0">Votre Panier</h5>
                      <ul class="list-group list-group-flush">
                        <!-- list group item -->
                        @foreach( (array)session('cart') as $id => $details)
                        @php $total = 0 @endphp
                        @php $total += $details['price'] * $details['quantity'] @endphp
                        <li class="list-group-item px-4 py-3">
                          <div class="row align-items-center">
                            <div class="col-2 col-md-2">
                              <img src="{{asset('cover/'.$details['img_one'])}}" alt="Ecommerce" class="img-fluid"></div>
                            <div class="col-5 col-md-5">
                              <h6 class="mb-0">{{ Str::limit($details['name'], 30) }}</h6>


                            </div>
                            <div class="col-2 col-md-2 text-center text-muted">
                              <span>{{ $details['quantity']  }}</span>

                            </div>
                            <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                              <span class="fw-bold">{{ $details['price']  }} FCFA</span>

                            </div>
                          </div>

                        </li>
                        <!-- list group item -->


               @endforeach


                        <!-- list group item -->
                        <li class="list-group-item px-4 py-3">
                          <div class="d-flex align-items-center justify-content-between fw-bold">
                            <div>
                              Subtotal
                            </div>
                            <div>
                             {{$totalpanier}} FCFA


                            </div>

                          </div>


                        </li>

                      </ul>

                    </div>


                  </div>
                </div>


              </div>
            </div>


          </div>


        </section>
      </main>


</div>
