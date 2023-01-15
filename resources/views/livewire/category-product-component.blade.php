<div>


    <section class="my-lg-14 my-8">
        <div class="container">
          <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">

            @foreach ($productcategory as $value )
            <div class="col">
                <div class="card card-product">
                  <div class="card-body">

                    <div class="text-center position-relative ">
                      <div class=" position-absolute top-0 start-0">
                        <span class="badge bg-danger">{{$value->category->name}}</span>
                      </div>
                      <a href="{{route('product.detail', $value->id)}}"> <img src="{{asset('cover/'.$value->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>



                    </div>
                    <div class="text-small mb-1"><a href="{{route('product.detail', $value->id)}}" class="text-decoration-none text-muted"><small>
                       {{$value->category->name}}

                        </small></a></div>
                    <h2 class="fs-6"><a href="{{route('product.detail', $value->id)}}" class="text-inherit text-decoration-none">
                             {{$value->name}}
                    </a></h2>
                    <div>

                      <small class="text-warning"> <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i></small> <span class="text-muted small">4.5(149)</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                      <div><span class="text-dark">{{$value->price}}</span> <span class="text-decoration-line-through text-muted">CFA 2200</span>
                      </div>
                      <div>

                        <span class="btn btn-primary btn-sm"  wire:click="add({{$value->id}})">AJOUTER AU PANIER</span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach






          </div>
        </div>
      </section>



</div>
