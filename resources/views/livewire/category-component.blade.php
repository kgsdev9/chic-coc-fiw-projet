<div>

    <section class="my-lg-14 my-8">
        <div class="container">
          <div class="row">
            <div class="col-12 mb-6">

              <h3 class="mb-0">Nos Categories</h3>

            </div>
          </div>

          <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">

            @foreach ($category as $value )
            <div class="col">
                <div class="card card-product">
                  <div class="card-body">

                    <div class="text-center position-relative ">

                      <a href="{{route('category.product' , $value->id)}}"> <img src="{{asset('categorie/images/'.$value->image)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>



                    </div>
                    <div class="text-small mb-1"><a href="{{route('category.product' , $value->id)}}" class="text-decoration-none text-muted"><small>Categorie &amp;
                          Populaire</small></a></div>
                    <h2 class="fs-6"><a href="pages/shop-single.html" class="text-inherit text-decoration-none">
                      {{$value->name}}

                    </a></h2>

                    <div class="d-flex justify-content-between align-items-center mt-3">

                      <div><a href="{{route('category.product' , $value->id)}}" class="btn btn-primary btn-sm">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg> Consulter</a></div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach










          </div>
        </div>
      </section>



</div>
