@extends('layout.app')

@section('content')
<main>
    <!-- section -->
    <section>
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- col -->
          <div class="col-12">
            <div class="d-flex justify-content-between align-items-center d-md-none py-4">
              <!-- heading -->
              <h3 class="fs-5 mb-0">Account Setting</h3>
              <!-- button -->
              <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3 " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
                <i class="bi bi-text-indent-left fs-3"></i>
              </button>
            </div>
          </div>
          <!-- col -->
          @include('dashboarduser.nav-bar-user')
          <div class="col-lg-9 col-md-8 col-12">
            <div class="py-6 p-md-6 p-lg-10">
              <!-- heading -->
              <h2 class="mb-6">Vos Commandes</h2>

              <div class="table-responsive border-0">
                <!-- Table -->
                <table class="table mb-0 text-nowrap">
                  <!-- Table Head -->
                  <thead class="table-light">
                    <tr>
                      <th class="border-0">&nbsp;</th>
                      <th class="border-0">Nom et prenom</th>
                      <th class="border-0">Télephone</th>
                      <th class="border-0">Quantité</th>
                      <th class="border-0">Items</th>
                      <th class="border-0">Statut</th>
                      <th class="border-0">Date de la commande</th>

                      <th class="border-0"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Table body -->


                    @forelse ( $orders as $liste )




                    <tr>
                        <td class="align-middle border-top-0 w-0">
                          <a href="#"> <img src="../assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-shape icon-xl"></a>

                        </td>
                        <td class="align-middle border-top-0">

                          <a href="#" class="fw-semi-bold text-inherit">
                            <h6 class="mb-0">{{$liste->fullname}}</h6>
                          </a>
                          <span><small class="text-muted"> code de livraison  {{$liste->code}}</small></span>

                        </td>
                        <td class="align-middle border-top-0">
                          <a href="#" class="text-inherit">{{$liste->phone}}</a>

                        </td>
                        <td class="align-middle border-top-0">
                         {{$liste->quantity}}

                        </td>
                        <td class="align-middle border-top-0">
                          1

                        </td>
                        <td class="align-middle border-top-0">
                          <span class="badge bg-warning">Traitement en cours</span>
                        </td>
                        <td class="align-middle border-top-0">
                         {{$liste->created_at}}

                        </td>
                        <td class="text-muted align-middle border-top-0">
                          <a href="{{route('orders.details.users', $liste->id)}}" class="text-inherit" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Detail de la commande"><i class="feather-icon icon-eye"></i></a>
                        </td>
                      </tr>


                      @empty
                        <span>Aucune Commande pour le moment </span>
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
