@if (count($otherproducts)>0)
<div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-2 mt-2">
    <!-- col -->

    @foreach ($otherproducts as $value )
    <div class="col">
      <div class="card card-product">
        <div class="card-body">
          <!-- badge -->

          <div class="text-center position-relative ">
            <div class=" position-absolute top-0 start-0">
              <span class="badge bg-danger">Sale</span>
            </div>
            <a href="{{route('product.detail', $value->id)}}">
              <!-- img --><img src="{{asset('cover/'.$value->img_one)}}" alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>
            <!-- action btn -->

          </div>
          <!-- heading -->
          <div class="text-small mb-1"><a href="#!" class="text-decoration-none text-muted"><small>{{$value->category->name}}</small></a></div>
          <h2 class="fs-6"><a href="#!" class="text-inherit text-decoration-none">{{$value->name}}</a></h2>
          <div>

            <!-- rating --> <small class="text-warning"> <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-half"></i></small>
          </div>
          <!-- price -->
          <div class="d-flex justify-content-between align-items-center mt-3">
            <div><span class="text-dark">{{$value->price}} FCFA</span>
            </div>
            <!-- btn -->
            <div><span wire:click="add({{{$value->id}}})"  class="btn btn-primary btn-sm"> Ajouter</span></div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
@else
<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
    <div class="col">

    </div>
</div>
@endif
