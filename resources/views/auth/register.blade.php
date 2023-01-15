@extends('layout.app')

@section('content')


<main>
    <!-- section -->

    <section class="my-lg-14 my-8">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">
            <!-- img -->
            <img src="../assets/images/svg-graphics/signup-g.svg" alt="" class="img-fluid">
          </div>
          <!-- col -->
          <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
            <div class="mb-lg-9 mb-5">
              <h1 class="mb-1 h2 fw-bold">S'inscire CHIC COQ </h1>
              <p>Bienvienue sur CHIC COQ! Entrer votre email pour commencer.</p>
            </div>
            <!-- form -->
            <form method="POST" action="{{route('register')}}">
                @csrf
              <div class="row g-3">
                <!-- col -->
                <input type="hidden" value="{{$roles->id}}" name="role_id">
                <div class="col">
                  <!-- input --><input type="text" class="form-control" placeholder="Nom D'utilisateur" required="" name="name">
                </div>
                <div class="col">
                  <!-- input --><input type="email" class="form-control" placeholder="Adresse E-mail"  required="" name="email">
                </div>
                <div class="col-12">

                  <!-- input --><input type="password" class="form-control" id="inputEmail4" placeholder="Entrer votre mot de passe" required="" name="password">
                </div>
                <div class="col-12">

                  <!-- input --><input type="password" class="form-control" id="inputPassword4" placeholder="Confirmer votre mot de passe" required=""  name="password_confirmation">
                </div>
                <!-- btn -->
                <div class="col-12 d-grid"> <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>

                <!-- text -->
                <p> En continuant, vous acceptez nos Conditions d'utilisation et notre Politique de confidentialité</p>
              </div>
            </form>
          </div>
        </div>
      </div>


    </section>
    </main>

@endsection




