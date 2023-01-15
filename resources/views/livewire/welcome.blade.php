
<div>


    <main>
        <section class="mt-8">
          <div class="container">
            <div class="hero-slider ">
              <div
                style="background: url(assets/images/slider/slide-1.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                  <span class="badge text-bg-warning">Opening Sale Discount 50%</span>

                  <h2 class="text-dark display-5 fw-bold mt-4">SuperMarket For Fresh Grocery </h2>
                  <p class="lead">Introduced a new model for online grocery shopping
                    and convenient home delivery.</p>
                  <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>

              </div>
              <div class=" "
                style="background: url(assets/images/slider/slider-2.jpg)no-repeat; background-size: cover; border-radius: .5rem; background-position: center;">
                <div class="ps-lg-12 py-lg-16 col-xxl-5 col-md-7 py-14 px-8 text-xs-center">
                  <span class="badge text-bg-warning">Free Shipping - orders over $100</span>
                  <h2 class="text-dark display-5 fw-bold mt-4">Free Shipping on <br> orders over <span
                      class="text-primary">$100</span></h2>
                  <p class="lead">Free Shipping to First-Time Customers Only, After promotions and discounts are applied.
                  </p>
                  <a href="#!" class="btn btn-dark mt-3">Shop Now <i class="feather-icon icon-arrow-right ms-1"></i></a>
                </div>

              </div>

            </div>
          </div>
        </section>

        <!-- Category Section Start-->
        <section class="mb-lg-10 mt-lg-14 my-8">
          <div class="container">
            <div class="row">
              <div class="col-12 mb-6">

                <h3 class="mb-0">Featured Categories</h3>

              </div>
            </div>
            <div class="category-slider ">





                    @foreach ($category as $value )


              <div class="item"> <a href="{{URL::signedRoute('category.product', $value->id)}}" class="text-decoration-none text-inherit">
                  <div class="card card-product mb-lg-4">
                    <div class="card-body text-center py-8">
                      <img src="{{asset('categorie/images/'.$value->image)}}" alt="Grocery Ecommerce Template"class="mb-3" height="80px;">
                      <div class="text-truncate">{{$value->name}}</div>
                    </div>
                  </div>
                </a></div>


                @endforeach








            </div>


          </div>
        </section>
        <!-- Category Section End-->
        <section>
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6 mb-3 mb-lg-0">
                <div>
                  <div class="py-10 px-8 rounded-3"
                    style="background:url(assets/images/banner/grocery-banner.png)no-repeat; background-size: cover; background-position: center;">
                    <div>
                      <h3 class="fw-bold mb-1">Fruits & Vegetables
                      </h3>
                      <p class="mb-4">Get Upto <span class="fw-bold">30%</span> Off</p>
                      <a href="#!" class="btn btn-dark">Shop Now</a>
                    </div>
                  </div>

                </div>

              </div>
              <div class="col-12 col-md-6 ">

                <div>
                  <div class="py-10 px-8 rounded-3"
                    style="background:url(assets/images/banner/grocery-banner-2.jpg)no-repeat; background-size: cover; background-position: center;">
                    <div>
                      <h3 class="fw-bold mb-1">Freshly Baked
                        Buns
                      </h3>
                      <p class="mb-4">Get Upto <span class="fw-bold">25%</span> Off</p>
                      <a href="#!" class="btn btn-dark">Shop Now</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Popular Products Start-->

        <br><br><br>
        <section class="mb-lg-14 mb-8">
            <div class="container ">
               <!-- row -->
              <div class="row">
                <div class="col-12">
                  <div class="mb-6 d-xl-flex justify-content-between align-items-center">
                     <!-- heading -->
                    <div class="mb-5 mb-xl-0">
                      <h3 class=" mb-0">Nos Collections</h3>
                      <p class="mb-0">Profitez de nos Poulets</p>
                    </div>
                    <div>
                       <!-- nav -->
                      <nav>
                        <ul class="nav nav-pills nav-scroll border-bottom-0 gap-1 " id="nav-tab" role="tablist">
         <!-- nav item -->
                          <li class="nav-item " role="presentation">
                             <!-- nav link -->
                            <a  class="nav-link " id="nav-fruitsandveg-tab" data-bs-toggle="tab" data-bs-target="#nav-fruitsandveg" role="tab" aria-controls="nav-fruitsandveg" aria-selected="true" tabindex="-1" >POULET DE CHAIRE</a>

                          </li>
         <!-- nav item -->

                          <li class="nav-item " role="presentation">
                             <!-- nav link -->
                            <a class="nav-link " id="nav-snackMunchies-tab" data-bs-toggle="tab" data-bs-target="#nav-snackMunchies" role="tab" aria-controls="nav-snackMunchies" aria-selected="false" tabindex="-1">PONDEUSE</a></li>
                               <!-- nav item -->
                          <li class="nav-item " role="presentation">
                             <!-- nav link -->
                            <a class="nav-link" id="nav-bakery-tab" data-bs-toggle="tab" data-bs-target="#nav-bakery" role="tab" aria-controls="nav-bakery" aria-selected="false" tabindex="-1"> POUSSIN
                           </a></li>
                               <!-- nav item -->
                          <li class="nav-item " role="presentation">
                             <!-- nav link -->
                            <a class="nav-link" id="nav-tea-tab" data-bs-toggle="tab" data-bs-target="#nav-tea" role="tab" aria-controls="nav-tea" aria-selected="false" tabindex="-1">PLAQUETTES D'OEUFS
                               </a></li>
                               <!-- nav item -->
                          <li class="nav-item" role="presentation">
                             <!-- nav link -->
                            <a  class="nav-link active " id="nav-drinks-tab" data-bs-toggle="tab" data-bs-target="#nav-drinks" role="tab" aria-controls="nav-drinks" aria-selected="false">DEMI PLAQUETTE D'OEUF
                              </a></li>

                        </ul>
                      </nav>


                    </div>
                  </div>
                </div>
              </div>
               <!-- row -->
              <div class="row">
                <div class="col-12">
                   <!-- tab -->
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="nav-fruitsandveg" role="tabpanel" aria-labelledby="nav-fruitsandveg-tab" tabindex="0">
         <!-- row -->
                      <div class="row row-cols-2 row-cols-xl-5 row-cols-md-3 g-4">


                            @foreach ($product as $value  )


                        <div class="col ">
                        <!-- card -->
                          <div class="card  card-product-v2 h-100">
                            <div class="card-body position-relative">
         <!-- badge -->
                              <div class="text-center position-relative ">

                                <!-- img -->
                                <a href="{{route('product.detail', $value->id)}}">

                                    <img src="{{asset('cover/'.$value->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                <!-- action btn -->

                              </div>
                              <!-- title -->
                              <h2 class="fs-6">

                            </h2>
                              <div>
         <!-- rating -->
                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.7(1,130)</span>
                              </div>
                               <!-- price -->
                              <div class="d-flex justify-content-between align-items-center mt-3">
                                <div><span class="text-dark">{{$value->name}}</span>
                                </div>
                                <div>
                                    {{-- <span class="text-uppercase small text-primary">
                                   Disponible </span> --}}

                                </div>
                              </div>
                               <!-- btn -->
                              <div class="product-fade-block">
                                <div class="d-grid mt-4">

                                    <span class="btn btn-primary rounded-pill" wire:click="add({{$value->id}})" >Ajouter au panier</span>

                                </div>
                              </div>

                            </div>
                            <!-- hidden class for hover -->
                            <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                          </div>
                        </div>

                        @endforeach

                      </div>


                    </div>
                    <div class="tab-pane fade" id="nav-snackMunchies" role="tabpanel" aria-labelledby="nav-snackMunchies-tab" tabindex="0">

                      <div class="row row-cols-2 row-cols-xl-5 row-cols-md-3 g-4">


                  @foreach($productpoussin as $poussin)
                       <div class="col ">
                        <!-- card -->
                          <div class="card  card-product-v2 h-100">
                            <div class="card-body position-relative">
                                 <!-- badge -->
                              <div class="text-center position-relative ">

                                <!-- img -->
                                <a href=""> <img src="{{asset('cover/'.$poussin->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                <!-- action btn -->


                              </div>
                              <!-- title -->
                              <h2 class="fs-6"><a href="" class="text-inherit text-decoration-none">{{$poussin->name}}</a>
                              </h2>
                              <div>
         <!-- rating -->
                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-half"></i></small> <span >4.5(140)</span>
                              </div>
                               <!-- price -->
                              <div class="d-flex justify-content-between align-items-center mt-3">
                                <div><span class="text-decoration ms-1">{{$poussin->category->name}}</span>
                                </div>
                                <div>


                                </div>
                              </div>
                               <!-- btn -->
                              <div class="product-fade-block">
                                <div class="d-grid mt-4">
                                    <span class="btn btn-primary rounded-pill" wire:click="add({{$poussin->id}})">Commander </span>

                                </div>
                              </div>

                            </div>
                            <!-- hidden class for hover -->
                            <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                          </div>
                        </div>

                            @endforeach

                      </div>




                    </div>
                    <div class="tab-pane fade" id="nav-bakery" role="tabpanel" aria-labelledby="nav-bakery-tab" tabindex="0">
                      <div class="row row-cols-2 row-cols-xl-5 row-cols-md-3 g-4">



        @foreach ($productpondeuse as $pousse )


                        <div class="col ">
                        <!-- card -->
                          <div class="card  card-product-v2 h-100">
                            <div class="card-body position-relative">
         <!-- badge -->
                              <div class="text-center position-relative ">
                                <div class=" position-absolute top-0 start-0">
                                  <span class="badge bg-warning text-dark">{{$pousse->category->name}}</span>
                                </div>
                                <!-- img -->
                                <a href="{{route('product.detail', $pousse->id)}}"> <img src="{{asset('cover/'.$pousse->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                <!-- action btn -->


                              </div>
                              <!-- title -->
                              <h2 class="fs-6"><a href="{{route('product.detail', $pousse->id)}}" class="text-inherit text-decoration-none">{{$pousse->name}}</a></h2>
                              <div>
         <!-- rating -->
                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(212)</span>
                              </div>
                               <!-- price -->
                              <div class="d-flex justify-content-between align-items-center mt-3">
                                <div><span class="text-danger">{{$pousse->price }} FCFA</span>
                                </div>
                                <div>


                                </div>
                              </div>
                               <!-- btn -->
                              <div class="product-fade-block">
                                <div class="d-grid mt-4">
                                    <span wire:click="add({{$pousse->id}})" class="btn btn-primary rounded-pill">Commander</span>

                                </div>
                              </div>

                            </div>
                            <!-- hidden class for hover -->
                            <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                          </div>
                        </div>

                        @endforeach






                      </div>
                    </div>
                    <div class="tab-pane fade" id="nav-tea" role="tabpanel" aria-labelledby="nav-tea-tab" tabindex="0">
                      <div class="row row-cols-2 row-cols-xl-5 row-cols-md-3 g-4">



                        @foreach ($productplaquetteoeuf as $oeuf )
                        <div class="col ">
                        <!-- card -->
                          <div class="card  card-product-v2 h-100">
                            <div class="card-body position-relative">
         <!-- badge -->
                              <div class="text-center position-relative ">

                                <!-- img -->
                                <a href="{{route('product.detail', $oeuf->id)}}"> <img src="{{asset('cover/'.$oeuf->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                <!-- action btn -->


                              </div>
                              <!-- title -->
                              <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">{{$oeuf->name}}</a></h2>
                              <div>
         <!-- rating -->
                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.4(694)</span>
                              </div>
                               <!-- price -->
                              <div class="d-flex justify-content-between align-items-center mt-3">
                                <div><span class="text-dark">{{$oeuf->price}} FCFA</span>
                                </div>
                                <div></div>
                              </div>
                               <!-- btn -->
                              <div class="product-fade-block">
                                <div class="d-grid mt-4">
                                    <span wire:click="add({{$pousse->id}})" class="btn btn-primary rounded-pill">Commander</span>
                                </div>
                              </div>

                            </div>
                            <!-- hidden class for hover -->
                            <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                          </div>
                        </div>
                        @endforeach








                      </div>
                    </div>
                    <div class="tab-pane fade active show" id="nav-drinks" role="tabpanel" aria-labelledby="nav-drinks-tab" tabindex="0">
                      <div class="row row-cols-2 row-cols-xl-5 row-cols-md-3 g-4">
                        @foreach ($productdemiplatquette as $demi )


                        <div class="col ">
                        <!-- card -->
                          <div class="card  card-product-v2 h-100">
                            <div class="card-body position-relative">
         <!-- badge -->
                              <div class="text-center position-relative ">

                                <!-- img -->
                                <a href="{{route('product.detail', $demi->id)}}"> <img src="{{asset('cover/'.$demi->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                                <!-- action btn -->


                              </div>
                              <!-- title -->
                              <h2 class="fs-6"><a href="{{route('product.detail', $demi->id)}}" class="text-inherit text-decoration-none">{{$demi->name}}</a>
                              </h2>
                              <div>
         <!-- rating -->
                                <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-fill"></i>
                                  <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(140)</span>
                              </div>
                               <!-- price -->
                              <div class="d-flex justify-content-between align-items-center mt-3">
                                <div><span class="text-dark">{{$demi->price}} FCFA</span>
                                </div>
                                <div></div>
                              </div>
                               <!-- btn -->
                              <div class="product-fade-block">
                                <div class="d-grid mt-4">
                                    <span wire:click="add({{$pousse->id}})" class="btn btn-primary rounded-pill">Commander</span>
                                </div>
                              </div>

                            </div>
                            <!-- hidden class for hover -->
                            <div class="product-content-fade border-info" style="margin-bottom: -60px;"></div>
                          </div>
                        </div>


                        @endforeach




          </section>



        <section class="my-lg-14 my-8">
          <div class="container">
            <div class="row">
              <div class="col-12 mb-6">

                <h3 class="mb-0">Produits  Recemments  Ajoutés</h3>

              </div>
            </div>

            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
     @foreach ($randomProduct as $random )

                <div class="col">
                    <div class="card card-product">
                      <div class="card-body">

                        <div class="text-center position-relative ">
                          <div class=" position-absolute top-0 start-0">
                            <span class="badge bg-danger">{{$random->category->name}}</span>
                          </div>
                          <a href="{{route('product.detail', $random->id)}}"> <img src="{{asset('cover/'.$random->img_one)}}" alt="Grocery Ecommerce Template"
                              class="mb-3 img-fluid"></a>



                        </div>
                        <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>
                            {{$random->name}}
                            </small></a></div>
                        <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">
                            {{$random->name}}
                        </a></h2>
                        <div>

                          <small class="text-warning"> <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(149)</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                          <div><span class="text-dark">{{$random->price}} FCFA</span>

                          </div>
                          <div> <span class="btn btn-primary btn-sm" wire:click="add({{$random->id}})">Commander</span>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach










            </div>
          </div>
        </section>
        <!-- Popular Products End-->





        <section class="bg-dark" style="background:url(../assets/images/svg-graphics/pattern.svg)no-repeat; background-size: cover; background-position: center;">
            <div class="container">
               <!-- row -->
              <div class="row">
                <div class="offset-lg-1 col-lg-10">

                  <div class="row align-items-center">
                     <!-- col -->
                    <div class="col-md-6">
                      <div class="text-white mt-8 mt-lg-0">
                        <span>Abonnez Nous aux NewsLetter </span>
                        <h2 class="h2 text-white  my-4">Vous obtiendrez des coupons</h2>
                        <p class="text-white-50">50 % sur votre premiere commande   </p>
                           <!-- form -->
                        <form class="row g-3">

                          <div class="col-6">
                             <!-- input -->
                            <label for="emailAddress" class="visually-hidden">Adresse E-mail</label>
                            <input type="email" class="form-control" id="emailAddress" placeholder="Email Address">
                          </div>
                           <!-- btn -->
                          <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">S'inscrire</button>
                          </div>
                        </form>
                      </div>
                    </div>
                     <!-- col -->
                    <div class="col-md-6">
                      <div class="text-center">
                         <!-- img -->
                        <img src="../assets/images/png/girl-email.png" alt="" class="img-fluid">
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </section>


      </main>

</div>
