<div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
    <div class="pt-10 pe-lg-10">
      <!-- nav -->
      <ul class="nav flex-column nav-pills nav-pills-dark">
        <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('dashboard')}}"><i class="feather-icon icon-shopping-bag me-2"></i>Mes Commandes</a>
        </li>
        <!-- nav item -->
        {{-- <li class="nav-item">
          <a class="nav-link" href="account-settings.html"><i class="feather-icon icon-settings me-2"></i>Mon Compte</a>
        </li> --}}
        <!-- nav item -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('like.index')}}"><i class="feather-icon icon-map-pin me-2"></i>Liste D'envie</a>
        </li>


        <li class="nav-item">
          <hr>
        </li>
        <!-- nav item -->
        <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button> <i class="feather-icon icon-log-out me-2"  class="btn btn-light" type="submit"></i>Se Deconnecter</button>
            </form>

        </li>
      </ul>
    </div>
  </div>
