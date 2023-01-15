@extends('layout.app')
@section('content')

<main>
    <!-- section -->
    <section class="my-lg-14 my-8">
      <div class="container">
        <!-- row -->
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
            <!-- img -->
            <img src="../assets/images/svg-graphics/signin-g.svg" alt="" class="img-fluid">
          </div>
          <!-- col -->
          <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
            <div class="mb-lg-9 mb-5">
              <h1 class="mb-1 h2 fw-bold">Se Connecter Sur CHIC COQ</h1>
              <p>Connectez-vous et passer autant de commande  que vous voulez.</p>
            </div>

            <form method="POST" action="{{route('login')}}">
                @csrf
              <div class="row g-3">
                <!-- row -->

                <div class="col-12">
                  <!-- input -->

                  <input type="email" class="form-control" id="inputEmail4" placeholder="Adresse E-mail" required="" name="email">
                  @error('email')
                        <small class="text-danger">{{$message}}</small>
                  @enderror
                </div>
                <div class="col-12">
                  <!-- input -->
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe" required="" name="password">
                </div>
                <div class="d-flex justify-content-between">
                  <!-- form check -->
                  <div class="form-check">

                  </div>
                  <div> Mot de passe oublié  <a href="{{route('password.request')}}">Rénitialiser</a></div>
                </div>
                <!-- btn -->
                <div class="col-12 d-grid"> <button type="submit" class="btn btn-primary">Se Connecter</button>
                </div>
                <!-- link -->
                <div>vous n'avez pas de compte ? <a href="{{route('register')}}">Inscrivez-vous</a></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  </main>


@endsection





