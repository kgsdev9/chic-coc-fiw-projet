
@if(session()->get('cart') >0 )

<main>
    <!-- section-->

    <!-- section -->
    <section class="mt-8 mb-14">
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="mb-8">
              <!-- heading -->
              <h1 class="mb-1">Votre Panier</h1>
              <p>Liste de vos produits selectionnés.</p>
            </div>
            <div>
              <!-- table -->
              <div class="table-responsive">
                <table class="table text-nowrap">
                  <thead class="table-light">
                    <tr>
                      <th>
                        <!-- form check -->

                      </th>

                      <th>Produit </th>
                      <th>Prix </th>
                      <th>Quantite</th>
                      <th>Sous Total</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( (array)session('cart') as $id => $details)
                    <tr>
                        @php $total = 0 @endphp
                        @php $total += $details['price'] * $details['quantity'] @endphp
                      <td class="align-middle">
                        <!-- form check -->


                      </td>
                      <td class="align-middle">
                        <a href="#"><img src="{{asset('cover/'.$details['img_one'])}}" class="img-fluid icon-shape icon-xxl" alt=""></a>

                      </td>
                      <td class="align-middle">
                        <div>
                          <h5 class="fs-6 mb-0"><a href="{{route('product.detail', $details['product_id'])}}" class="text-inherit">{{ Str::limit($details['name'], 30) }}</a></h5>
                          <small>$.98 / lb</small>
                        </div>
                      </td>
                      <td class="align-middle">
                        <div class="input-group input-spinner  ">
                            <input type="button"  wire:click="decrement({{$details['product_id']}})"    value="-" class="button-minus  btn  btn-sm ">
                            <input type="number"  value="{{ $details['quantity']}}" class="quantity-field form-control-sm form-input   ">
                            <input type="button"  wire:click="increment({{$details['product_id']}})"  value="+" class="button-plus btn btn-sm " data-field="quantity">
                          </div>

                      </td>
                      <td class="align-middle">
                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                            <span class="fw-bold">{{ $details['price'] * $details['quantity'] }} FCFA</span>

                          </div>
                    </td>

                      <td class="align-middle ">
                        <span style="cursor: pointer;" wire:click="delete({{$details['product_id']}})">  <i class="feather-icon icon-trash-2"></i></span>


                    </td>
                    </tr>


                    @endforeach


                  </tbody>
                </table>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{route('payment')}}" class="btn btn-primary">Payer à la livraison</a>
                    <a href="https://wa.me/+2250708375478?text={{$mycart }}" class="btn btn-primary" target="blank">Commander Via Whattsap</a>
                    <a href="{{route('oders')}}" class="btn btn-dark">Payer Directement</a>
                  </div>
              </div>

            </div>
          </div>

        </div>



      </div>

    </section>






  </main>



@else


@endif
