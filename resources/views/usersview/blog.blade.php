@extends('layout.app')

@section('content')

<main>
    <!-- section -->
    <div class="mt-4">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row ">
          <!-- col -->

        </div>
      </div>
    </div>

    <!-- section -->
    <section class="mt-8">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-12 mb-4">
            <!-- heading -->
            <h1 class="fw-bold">Nos Articles</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- section -->
    <section class="mb-lg-14 mb-8">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <!-- col -->
          @foreach ($articles as $value)


          <div class="col-12 col-md-6 col-lg-4 mb-8">
            <div class="mb-4">
              <a href="#!">
                <!-- img -->
                <div class="img-zoom">
                  <img src="../assets/images/blog/blog-img-1.jpg" alt="" class="img-fluid rounded-3 w-100">
                </div>
              </a></div>
            <div class="mb-3"><a href="#!">DSTORE</a>

            </div>
            <!-- text -->
            <div>
              <h2 class="h5"><a href="#!" class="text-inherit">{{$value->name}}</a></h2>
              <p>{{Str::limit($value->description, 122)}}</p>
              <div class="d-flex justify-content-between text-muted mt-4"><span><small>Date de publication
                    {{$value->created_at}}</small></span><span></span>
              </div>
            </div>

          </div>

          @endforeach








        </div>
      </div>
    </section>




  </main>


@endsection
