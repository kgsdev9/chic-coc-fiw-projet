<div>

    <main>
        <div class="mt-4">
          <div class="container">
            <!-- row -->
            <div class="row ">
              <!-- col -->
              <div class="col-12">
                <!-- breadcrumb -->
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>




                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <section class="mt-8">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <!-- img slide -->
                <div class="tns-outer" id="product-ow"><div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">3</span>  of 4</div><div id="product-mw" class="tns-ovh"><div class="tns-inner" id="product-iw"><div class="product  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="product" style="transition-duration: 0s; transform: translate3d(-33.3333%, 0px, 0px);"><div class="tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                    <div class="zoom" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-4.jpg)">
                      <!-- img -->
                      <img   class="img-fluid" src="{{asset('cover/'.$colletiondetail->img_one)}}" alt="">
                    </div>
                  </div>
                  <div class="zoom tns-item" onmousemove="zoom(event)" style="background-image: url({{asset('cover/'.$colletiondetail->img_one)}})" id="product-item0" aria-hidden="true" tabindex="-1">
                    <!-- img -->
                    <!-- img --><img   class="img-fluid" src="{{asset('cover/'.$colletiondetail->img_two)}}" alt="">
                  </div>
                  <div class="tns-item tns-slide-active" id="product-item1">
                    <div class="zoom" onmousemove="zoom(event)" style="background-image: url(&quot;../assets/images/products/product-single-img-2.jpg&quot;); background-position: 68.8645% 2.20049%;">
                      <!-- img -->
                      <img   class="img-fluid" src="{{asset('cover/'.$colletiondetail->img_three)}}" alt="">
                    </div>
                  </div>


                <div class="zoom tns-item tns-slide-cloned" onmousemove="zoom(event)" style="background-image: url(../assets/images/products/product-single-img-1.jpg)" aria-hidden="true" tabindex="-1">
                    <!-- img -->
                    <!-- img --><img  class="img-fluid" src="{{asset('cover/'.$colletiondetail->img_two)}}" alt="">
                  </div></div></div></div></div>
                <!-- product tools -->
                <div class="product-tools">
                  <div class="thumbnails row g-3" id="productThumbnails" aria-label="Carousel Pagination">
                    <div class="col-3" data-nav="0" tabindex="-1" aria-label="Carousel Page 1" aria-controls="product">
                      <div class="thumbnails-img">
                        <!-- img -->
                        <img src="{{asset('cover/'.$colletiondetail->img_one)}}" alt="">
                      </div>
                    </div>
                    <div class="col-3 tns-nav-active" data-nav="1" aria-label="Carousel Page 2 (Current Slide)" aria-controls="product">
                      <div class="thumbnails-img">
                        <!-- img -->
                        <img src="{{asset('cover/'.$colletiondetail->img_two)}}" alt="">
                      </div>
                    </div>
                    <div class="col-3" data-nav="2" tabindex="-1" aria-label="Carousel Page 3" aria-controls="product">
                      <div class="thumbnails-img">
                        <!-- img -->
                        <img src="{{asset('cover/'.$colletiondetail->img_three)}}" alt="">
                      </div>
                    </div>
                    <div class="col-3" data-nav="3" tabindex="-1" aria-label="Carousel Page 4" aria-controls="product">
                      <div class="thumbnails-img">
                        <!-- img -->
                        <img src="../assets/images/products/product-single-img-4.jpg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="ps-lg-10 mt-6 mt-md-0">
                  <!-- content -->
                  <a href="#!" class="mb-4 d-block">{{ $colletiondetail->category->name}}</a>
                  <!-- heading -->
                  <h1 class="mb-1">{{$colletiondetail->name}} </h1>
                  <div class="mb-4">
                    <!-- rating -->
                    <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i></small><a href="#" class="ms-2">({{count($colletiondetail->commets)}} Commentaires)</a></div>
                  <div class="fs-4">
                    <!-- price --><span class="fw-bold text-dark">{{$colletiondetail->price}} FCFA</span>



                    <span>


                    </span>
                  </div>
                  <!-- hr -->

                  <div class="mt-3 row justify-content-start g-2 align-items-center">

                    <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                      <!-- button -->
                      <!-- btn --> <button type="button" class="btn btn-primary" wire:click="add({{$colletiondetail->id}})"><i class="feather-icon icon-shopping-bag me-2"></i>Commander  </button>
                    </div>

                    <div class="col-xxl-4 col-lg-4 col-md-5 col-5 d-grid">
                        <!-- button -->
                        <!-- btn --> <button type="button" class="btn btn-light" wire:click="addWishlist({{$colletiondetail->id}})"><i class="feather-icon icon-shopping-bag me-2 bg-l"></i>Ajouter aux favories </button>
                      </div>
                  </div>
                  <!-- hr -->
                  <hr class="my-6">
                  <div>
                    <!-- table -->
                    <table class="table table-borderless">


                    </table>

                  </div>
                  <div class="mt-8">
                    <!-- dropdown -->
                    <div class="dropdown">


                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-facebook me-2"></i>Facebook</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-twitter me-2"></i>Twitter</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-instagram me-2"></i>Instagram</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="mt-lg-14 mt-8 ">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills nav-lb-tab" id="myTab" role="tablist">
                    <!-- nav item -->
                    <li class="nav-item" role="presentation">
                      <!-- btn --> <button class="nav-link active" id="product-tab" data-bs-toggle="tab" data-bs-target="#product-tab-pane" type="button" role="tab" aria-controls="product-tab-pane" aria-selected="true">Description</button>
                    </li>
                    <!-- nav item -->

                    <!-- nav item -->
                    <li class="nav-item" role="presentation">
                      <!-- btn --> <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-tab-pane" type="button" role="tab" aria-controls="reviews-tab-pane" aria-selected="false" tabindex="-1">Commentaires</button>
                    </li>
                    <!-- nav item -->

                  </ul>
                  <!-- tab content -->
                  <div class="tab-content" id="myTabContent">
                    <!-- tab pane -->
                    <div class="tab-pane fade active show" id="product-tab-pane" role="tabpanel" aria-labelledby="product-tab" tabindex="0">
                      <div class="my-8">
                        <div class="mb-5">
                          <!-- text -->
                          <h4 class="mb-1"></h4>
                          <p class="mb-0">{{$colletiondetail->description}}</p>
                        </div>



                      </div>
                    </div>
                    <!-- tab pane -->

                    <!-- tab pane -->
                    <div class="tab-pane fade" id="reviews-tab-pane" role="tabpanel" aria-labelledby="reviews-tab" tabindex="0">
                      <div class="my-8">
                        <!-- row -->
                        <div class="row">
                          <div class="col-md-4">

                          </div>
                          <!-- col -->
                          <div class="col-md-8">
                            <div class="mb-10">
                              <div class="d-flex justify-content-between align-items-center mb-8">
                                <div>
                                  <!-- heading -->
                                  <h4>Listes des commentaires</h4>
                                </div>


                              </div>
                              @foreach ($comment as $c )
                              <div class="d-flex border-bottom pb-6 mb-6 pt-4">
                                <!-- img --><img src="{{asset('assets/images/avatar/avatar-12.jpg')}}" alt="" class="rounded-circle avatar-lg">

                                <div class="ms-5">
                                  <h6 class="mb-1">
                                    {{$c->user->name}}

                                  </h6>
                                  <!-- content -->



                                  <p>{{$c->content}}</p>

                                  <!-- icon -->

                                </div>

                              </div>
                              @endforeach


                            </div>

                              <!-- form control -->

                              <div class=" py-4 mb-4">
                                <!-- heading -->
                                <h5>Ajouter un commentaire</h5>

                                <form  class="review-form" wire:submit.prevent="saveComment">
                                        <textarea class="form-control"   rows="3" placeholder="Message"  wire:model="content" ></textarea>

                                    </div>
                                    <!-- button -->
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-primary">Soumettre</button>
                                    </div>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>
                    <!-- tab pane -->

                </div>
              </div>
        </div>
    </div>
</div>
</div>
                  <!-- tab pane -->

                </div>
              </div>
            </div>
          </div>



        </section>

        <!-- section -->
        <section class="my-lg-14 my-14">
          <div class="container">
            <!-- row -->
            <div class="row">
              <div class="col-12">
                <!-- heading -->
                <h3>Autres Produits </h3>
              </div>
            </div>
            <!-- row -->
            @livewire('other-product-component', [$colletiondetail->id, $colletiondetail->category->id ])
          </div>
        </section>

      </main>



</div>
