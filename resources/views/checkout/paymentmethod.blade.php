@extends('layout.app')


@section('content')

<main>
    <!-- section-->
    <div class="mt-4">
      <div class="container">
        <!-- row -->

      </div>
    </div>



    <!-- section -->
    <section class="mb-lg-14 mb-8 mt-8">
      <div class="container">
        <!-- row -->

        <div>
          <!-- row -->
          <div class="row">
            <div class="col-lg-7 col-md-12">
              <!-- accordion -->
              <div>
                <div class="mb-8">
                    <!-- heading -->
                  <h1 class="h3">Renseignez les informations correctement pour la livraison </h1>
                  <p>Juste une derniere Etape {{Auth::user()->name}}</p>

                </div>
                <!-- form -->
                <form  wire:submit.prevent="saveOrder" class="row">
                
                    <!-- input -->
                  <div class="col-md-12 mb-3">
                    <label class="form-label" for="fname"> Nom et Prenom<span class="text-danger">*</span></label>
                    <input type="text"  wire:model="fullname" placeholder="Votre Nom et prenom" class="form-control">
                  </div>

                  <div class="col-md-12 mb-3">
                    <!-- input -->
                    <label class="form-label" for="company"> Télephone<span class="text-danger">*</span></label>
                    <input type="number" placeholder="Telephone"  wire:model="phone"  class="form-control">
                  </div>
                  <div class="col-md-12 mb-3">
                    <!-- input -->
                    <label class="form-label" for="comments"> Adresse De Livraison </label>
                    <textarea  wire:model="addresse"  id="message" placeholder="Description de votre lieu de livraison" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12">
                    <!-- btn -->
                    <button type="submit" class="btn btn-primary">Confirmer la livraison </button>
                  </div>


                </form>

              </div>
            </div>

            <div class="col-12 col-md-12 offset-lg-1 col-lg-4">
              <div class="mt-4 mt-lg-0">
                <div class="card shadow-sm">
                  <h5 class="px-6 py-4 bg-transparent mb-0">Votre Commande</h5>
                  <ul class="list-group list-group-flush">
                    <!-- list group item -->
                    <li class="list-group-item px-4 py-3">
                      <div class="row align-items-center">
                        <div class="col-2 col-md-2">
                          <img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="img-fluid"></div>
                        <div class="col-5 col-md-5">
                          <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                          <span><small class="text-muted">.98 / lb</small></span>

                        </div>
                        <div class="col-2 col-md-2 text-center text-muted">
                          <span>1</span>

                        </div>
                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                          <span class="fw-bold">$5.00</span>

                        </div>
                      </div>

                    </li>
                    <!-- list group item -->
                    <li class="list-group-item px-4 py-3">
                      <div class="row align-items-center">
                        <div class="col-2 col-md-2">
                          <img src="../assets/images/products/product-img-2.jpg" alt="Ecommerce" class="img-fluid"></div>
                        <div class="col-5 col-md-5">
                          <h6 class="mb-0">NutriChoice Digestive</h6>
                          <span><small class="text-muted">250g</small></span>

                        </div>
                        <div class="col-2 col-md-2 text-center text-muted">
                          <span>1</span>

                        </div>
                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                          <span class="fw-bold">$20.00</span>
                          <div class="text-decoration-line-through text-muted small">$26.00</div>
                        </div>
                      </div>

                    </li>
                    <!-- list group item -->
                    <li class="list-group-item px-4 py-3">
                      <div class="row align-items-center">
                        <div class="col-2 col-md-2">
                          <img src="../assets/images/products/product-img-3.jpg" alt="Ecommerce" class="img-fluid"></div>
                        <div class="col-5 col-md-5">
                          <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                          <span><small class="text-muted">1 kg</small></span>

                        </div>
                        <div class="col-2 col-md-2 text-center text-muted">
                          <span>1</span>

                        </div>
                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                          <span class="fw-bold">$15.00</span>
                          <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                      </div>

                    </li>
                    <!-- list group item -->
                    <li class="list-group-item px-4 py-3">
                      <div class="row align-items-center">
                        <div class="col-2 col-md-2">
                          <img src="../assets/images/products/product-img-4.jpg" alt="Ecommerce" class="img-fluid"></div>
                        <div class="col-5 col-md-5">
                          <h6 class="mb-0">Onion Flavour Potato</h6>
                          <span><small class="text-muted">250g</small></span>

                        </div>
                        <div class="col-2 col-md-2 text-center text-muted">
                          <span>1</span>

                        </div>
                        <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                          <span class="fw-bold">$15.00</span>
                          <div class="text-decoration-line-through text-muted small">$20.00</div>
                        </div>
                      </div>

                    </li>

                    <!-- list group item -->
                    <li class="list-group-item px-4 py-3">
                      <div class="d-flex align-items-center justify-content-between   mb-2">
                        <div>
                          Item Subtotal

                        </div>
                        <div class="fw-bold">
                          $70.00

                        </div>

                      </div>
                      <div class="d-flex align-items-center justify-content-between  ">
                        <div>
                          Service Fee <i class="feather-icon icon-info text-muted" data-bs-toggle="tooltip" aria-label="Default tooltip"></i>

                        </div>
                        <div class="fw-bold">
                          $3.00

                        </div>

                      </div>

                    </li>
                    <!-- list group item -->
                    <li class="list-group-item px-4 py-3">
                      <div class="d-flex align-items-center justify-content-between fw-bold">
                        <div>
                          Subtotal
                        </div>
                        <div>
                          $73.00


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

@endsection
