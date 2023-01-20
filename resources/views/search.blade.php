@extends('layout.app')
@section('content')

<main>


    <section class="my-lg-14 my-8">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-6">

            <h3 class="mb-0"> {{count($searchProduct)}} Produit(s) Trouvés</h3>

          </div>
        </div>

        <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">
        @foreach ($searchProduct as  $value)
          <div class="col">
            <div class="card card-product">
              <div class="card-body">
                <div class="text-center position-relative"> <a href="{{route('product.detail', $value->id)}}">
                    <img src="{{asset('cover/'.$value->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>

                </div>
                <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>{{$value->category->name}}</small></a></div>
                <h2 class="fs-6"><a href="{{route('product.detail', $value->id)}}" class="text-inherit text-decoration-none">
                    {{$value->name}}
                </a></h2>
                <div class="text-warning">

                  <small> <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i></small>
                     <span class="text-muted small">4.5 (67)</span>

                </div>
                <h6>{{$value->price}} FCFA</h6>
              
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

  </main>

@endsection
