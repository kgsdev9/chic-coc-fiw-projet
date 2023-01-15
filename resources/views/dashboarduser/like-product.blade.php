@extends('layout.app')

@section('content')
<main>
    <!-- section -->
    <section>
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- col -->

          <!-- col -->
            @include('dashboarduser.nav-bar-user')
          <div class="col-lg-9 col-md-8 col-12">
            <div class="py-6 p-md-6 p-lg-10">
              <!-- heading -->
              <h2 class="mb-6">Votre Liste D'envies</h2>

              <div class="table-responsive border-0">
                <!-- Table -->
                <table class="table mb-0 text-nowrap">
                  <!-- Table Head -->
                  <thead class="table-light">
                    <tr>
                      <th class="border-0">Produit </th>
                      <th class="border-0">Prix </th>
                      <th class="border-0">Image  </th>
                      <th class="border-0">Statut</th>

                      <th class="border-0"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Table body -->



                    @forelse ($coeur as $value )


                    <tr>
                        <td class="align-middle border-top-0 w-0">

                            <h6 class="mb-0">{{$value->product->name}}</h6>

                        </td>
                        <td class="align-middle border-top-0">

                          <a href="#" class="fw-semi-bold text-inherit">
                            <h6 class="mb-0">{{$value->product->price}} FCFA</h6>
                          </a>


                        </td>
                        <td class="align-middle border-top-0">
                        <img src="{{asset('cover/'.$value->product->img_one)}}" alt="" style="height: 50px; width:50px;">

                        </td>

                        <td class="align-middle border-top-0">


                                @if($value->statut =="disponible")
                                <span class="badge bg-success">  En stock </span>
                                @elseif($value->statut=="stock vide")
                                <span class="badge bg-warning"> Stock vide </span>

                                @endif


                        </td>


                        <td class="text-muted align-middle border-top-0">
                          <a href="{{route('product.detail', $value->product->id)}}" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Consulter le produit"><i class="feather-icon icon-eye"></i></a>
                        </td>
                      </tr>
                      @empty
                      <span>Aucun produit à votre liste d'envies</span>
                      @endforelse







                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
