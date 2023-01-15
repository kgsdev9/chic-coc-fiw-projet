<div>

    <section class="mt-8 mb-lg-14 mb-8">
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- col -->
            <div class="col-lg-12">
              <!-- page header -->
              <div class="card mb-4 bg-light border-0">
                <!-- card body -->
                <div class="card-body p-9">
                  <!-- title -->
                  <h2 class="mb-0 fs-1">Nos Produits</h2>
                </div>
              </div>
              <!-- list icon -->
              <div class="d-lg-flex justify-content-between align-items-center">
                <div>
                  <p class="mb-3 mb-md-0"> <span class="text-dark">Filtrer nos Produits </span> Par  </p>
                </div>
                <!-- icon -->
                <div class="d-md-flex justify-content-between align-items-center">

                  <div class="d-flex mt-2 mt-lg-0">
                    <div>
                      <!-- select option -->
                      <select class="form-select" aria-label="Default select example">
                        <option selected="">Ajouté Recemments</option>
                        <option value="Low to High">prix decroissant</option>
                        <option value="High to Low"> prix croissant</option>
                      </select></div>
                  </div>

                </div>
              </div>
              <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3 mt-2">

                <!-- col -->

                @foreach ($product as $value )
                <div class="col">
                    <!-- card product -->
                    <div class="card card-product">
                      <div class="card-body">

                        <!-- badge -->
                        <div class="text-center position-relative ">
                          <div class=" position-absolute top-0 start-0">
                            <span class="badge bg-danger">EN STOCK</span>
                          </div>
                          <a href="{{route('product.detail', $value->id)}}">
                            <!-- img --><img src="{{asset('cover/'.$value->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
                          <!-- action btn -->

                        </div>
                        <!-- heading -->
                        <div class="text-small mb-1"><a href="{{route('product.detail', $value->id)}}" class="text-decoration-none text-muted"><small>
                                    {{$value->category->name}}

                            </small></a></div>
                        <h2 class="fs-6"><a href="{{route('product.detail', $value->id)}}" class="text-inherit text-decoration-none">{{$value->name}}</a></h2>
                        <div>

                          <!-- rating --><small class="text-warning"> <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i></small>
                            <span class="text-muted small">4(122)</span>
                            <h6>{{$value->price}} FCFA</h6>
                        </div>
                        <!-- price -->
                        <div class="d-flex justify-content-between align-items-center mt-3">

                          <!-- btn -->
                          <div>

                            <span class="btn btn-primary btn-sm" wire:click="add({{$value->id}})">AJOUTER AU PANIER</span>
                           </div>
                        </div>
                      </div>
                    </div>
                  </div>

                @endforeach









              </div>
              <!-- row -->
              <div class="row mt-8">
                <div class="col">
                  <!-- nav -->
                  <nav>
                    {{$product->links()}}
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



</div>
