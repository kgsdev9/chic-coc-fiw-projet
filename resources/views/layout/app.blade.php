
<!DOCTYPE html>
<html lang="en">

<head>

  <title>CHIC COQ | Vente et Livraison à domicile Poulet</title>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="chic coq is a beautiful eCommerce HTML template specially designed for multipurpose shops & online stores selling products. Most Loved by Developers to build a store website easily.">
<meta content="Codescandy" name="author" />


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">



<!-- Libs CSS -->
<link rel="stylesheet" href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/libs/feather-webfont/dist/feather-icons.css')}}">
<link rel="stylesheet" href="{{asset('assets/libs/slick-carousel/slick/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/libs/slick-carousel/slick/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/libs/nouislider/dist/nouislider.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/libs/tiny-slider/dist/tiny-slider.css')}}">
<link rel="stylesheet" href="{{asset('assets/libs/dropzone/dist/min/dropzone.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/libs/prismjs/themes/prism-okaidia.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">

<script src="{{asset('assets/js/ajaxjquery.min.js')}}"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    @livewireStyles()
</head>

<body>
  <!-- navigation -->



  <header class="navbar navbar-light py-lg-5 py-4 px-0 border-bottom border-bottom-lg-0 ">
    <div class="container-fluid">
      <div class="row w-100 align-items-center g-0 g-lg-3">
        <div class="col-xxl-9 col-lg-8">
          <div class="d-flex align-items-center">
            <a class="navbar-brand d-none d-lg-block" href="../index.html">
              <img src="{{asset('logo.jpg')}}" alt="eCommerce HTML Template">

            </a>


    <div class=" w-100 ms-4  d-none d-lg-block ">
        <form action="{{route('search')}}"  style="margin-left: 25%">
        <div class="input-group">
          <input type="text"  name="search" class="form-control" placeholder="Chercher un produit" />
       <button class="input-group-text bg-transparent" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          </button>
        </div>
        </form>
      </div>


          </div>
          <div class="d-flex justify-content-between w-100 d-lg-none">
            <a class="navbar-brand" href="../index.html">
              <img src="{{asset('logo.jpg')}}" alt="eCommerce HTML Template">

            </a>

            <div class="d-flex align-items-center lh-1">

              <div class="list-inline me-2">
                <div class="list-inline-item">
                    @guest
                    <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                          <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                      </a>

                        @else
                        <a href="{{route('dashboard')}}" class="text-muted" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                              <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                          </a>

                    @endguest

                </div>
                <div class="list-inline-item">

                  <a class="text-muted position-relative " data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                      <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                      <line x1="3" y1="6" x2="21" y2="6"></line>
                      <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                        @livewire('counter-component')
                  </a>
                </div>

              </div>
              <!-- Button -->
              <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar mt-0"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
              </button>

            </div>
          </div>

        </div>

        <div class="col-xxl-3 col-lg-4 d-flex align-items-center ">
          <!-- Button trigger modal -->

          <div class="list-inline ms-auto d-lg-block d-none">
            <div class="list-inline-item">

              <a href="{{route('like.index')}}" class="text-muted position-relative">

                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                  <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                  </path>
                </svg>

              </a></div>

            <div class="list-inline-item">

                @guest
                <a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                      <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                      <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                  </a>
                    @else

                    <a href="{{route('dashboard')}}" class="text-muted">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                          <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                      </a>
                @endguest


            </div>
            <div class="list-inline-item">

              <a class="text-muted position-relative " href="{{route('cart.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                  <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <path d="M16 10a4 4 0 0 1-8 0"></path>
                </svg>

               @livewire('counter-component')
              </a>

            </div>





          </div>

        </div>

      </div>
    </div>
  </header>

  <nav class="navbar navbar-light navbar-default pt-0 pb-0">
  <div class="container px-0 px-md-3">





    <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default" >
      <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
        <a href="../index.html"><img src="{{asset('logo.jpg')}}" alt="eCommerce HTML Template"></a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <ul class="navbar-nav navbar-nav-offcanvac"   >
        <li class="nav-item">
          <a class="nav-link" href="{{URL('/')}}" role="button">
            ACCUEIL
          </a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{route('sotre.index')}}" role="button" >
          NOS PRODUITS
          </a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{route('category.index')}}" role="button" >
            NOS CATEGORIES
          </a>
        </li>







        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           MON COMPTE
          </a>
          <ul class="dropdown-menu">

              @guest
              <li><a class="dropdown-item" href="{{route('login')}}">SE CONNECTERd </a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">CREEZ VOTRE COMPTE </a></li>

              @else
              <li><a class="dropdown-item" href="{{route('login')}}">TABLEAU DE BORD </a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">CREEZ VOTRE COMPTE </a></li>

              @endguest


          </ul>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{route('article.index')}}">
          ACTUALITES
          </a>

        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="border-bottom pb-lg-4 pb-3">
  <nav class="navbar navbar-expand-lg navbar-light navbar-default pt-0 pb-0">
    <div class="container px-0 px-md-3">




      <div class="offcanvas offcanvas-start p-4 p-lg-0" id="navbar-default">

        <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
          <a href="index.html"><img src="{{asset('logo.jpg')}}"
              alt="eCommerce HTML Template"></a>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="d-block d-lg-none mb-2 pt-2">
          <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center" data-bs-toggle="collapse"
            href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-grid">
                <rect x="3" y="3" width="7" height="7"></rect>
                <rect x="14" y="3" width="7" height="7"></rect>
                <rect x="14" y="14" width="7" height="7"></rect>
                <rect x="3" y="14" width="7" height="7"></rect>
              </svg></span> Nos Categories
          </a>
          <div class="collapse mt-2" id="collapseExample">
            <div class="card card-body">
              <ul class="mb-0 list-unstyled">
                <li><a class="dropdown-item" href="pages/shop-grid.html">Dairy, Bread & Eggs</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Snacks & Munchies</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Fruits & Vegetables</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Cold Drinks & Juices</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Breakfast & Instant Food</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid.html">Bakery & Biscuits</a></li>

                <li><a class="dropdown-item" href="pages/shop-grid.html">Chicken, Meat & Fish</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="d-lg-none d-block mb-3 ">
          <button type="button" class="btn  btn-outline-gray-400 text-muted w-100 " data-bs-toggle="modal"
            data-bs-target="#locationModal">
            <i class="feather-icon icon-map-pin me-2"></i>Pick Location
          </button>
        </div>
        <div class="d-none d-lg-block">
          <ul class="navbar-nav "  style="padding-left: 23%">
            <li class="nav-item dropdown">
              <a class="nav-link " href="{{URL('/')}}" role="button" >
                ACCUEIL
              </a>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="{{route('sotre.index')}}" role="button">
               NOS PRODUITS
              </a>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{route('category.index')}}" role="button"
                aria-expanded="false">
                NOS CATEGORIES
              </a>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{URL('/presentation')}}" role="button"
                aria-expanded="false">
                QUI SOMMES-NOUS
              </a>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{URL('/blog')}}" role="button"
                aria-expanded="false">
                ACTUALITES
              </a>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button"
                aria-expanded="false">
              MON COMPTE
              </a>
              <ul class="dropdown-menu">
                @guest
                <li><a class="dropdown-item" href="{{route('login')}}">SE CONNECTER</a></li>
                <li><a class="dropdown-item" href="{{route('register')}}">CREEZ VOTRE COMPTE</a></li>

                @else
                <li><a class="dropdown-item" href="{{route('login')}}">CONNECTE</a></li>
                <li><a class="dropdown-item" href="{{route('dashboard')}}">TABLEAU DE BORD</a></li>

                @endguest

              </ul>
            </li>
          </ul>
        </div>
        <div class="d-block d-lg-none">
          <ul class="navbar-nav ">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Home
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.html">Home 1</a></li>
                <li><a class="dropdown-item" href="pages/index-2.html">Home 2</a></li>
                <li><a class="dropdown-item" href="pages/index-3.html">Home 3</a></li>

              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
              Nos Produits
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/shop-grid.html">Shop Grid - Filter</a></li>
                <li><a class="dropdown-item" href="pages/shop-grid-3-column.html">Shop Grid - 3 column</a>
                </li>
                <li><a class="dropdown-item" href="pages/shop-list.html">Shop List - Filter</a></li>
                <li><a class="dropdown-item" href="pages/shop-filter.html">Shop - Filter</a></li>
                <li><a class="dropdown-item" href="pages/shop-fullwidth.html">Shop Wide</a></li>
                <li><a class="dropdown-item" href="pages/shop-single.html">Shop Single</a></li>
                <li><a class="dropdown-item" href="pages/shop-wishlist.html">Shop Wishlist</a></li>
                <li><a class="dropdown-item" href="pages/shop-cart.html">Shop Cart</a></li>
                <li><a class="dropdown-item" href="pages/shop-checkout.html">Shop Checkout</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Stores
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/store-list.html">Store List</a></li>
                <li><a class="dropdown-item" href="pages/store-grid.html">Store Grid</a></li>
                <li><a class="dropdown-item" href="pages/store-single.html">Store Single</a></li>

              </ul>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Mega Menu
              </a>
              <ul class="dropdown-menu">

                <li class="dropdown-submenu ">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    Dairy, Bread & Eggs
                  </a>
                  <ul class="dropdown-menu">


                    <li><a class="dropdown-item" href="pages/shop-grid.html">Milk Drinks</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Curd & Yogurt</a></li>
                    <li> <a class="dropdown-item" href="pages/shop-grid.html">Eggs</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Buns & Bakery</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Cheese</a></li>
                    <li> <a class="dropdown-item" href="pages/shop-grid.html">Condensed Milk</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Dairy Products</a></li>


                  </ul>
                </li>
                <li class="dropdown-submenu ">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    Vegetables & Fruits
                  </a>
                  <ul class="dropdown-menu">


                    <li><a class="dropdown-item" href="pages/shop-grid.html">Vegetables</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Fruits</a></li>
                    <li> <a class="dropdown-item" href="pages/shop-grid.html">Exotics & Premium</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Fresh Sprouts</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Frozen Veg</a></li>



                  </ul>
                </li>
                <li class="dropdown-submenu ">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    Cold Drinks & Juices
                  </a>
                  <ul class="dropdown-menu">


                    <li><a class="dropdown-item" href="pages/shop-grid.html">Soft Drinks</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Fruit Juices</a></li>
                    <li> <a class="dropdown-item" href="pages/shop-grid.html">Coldpress</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Soda & Mixers</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Milk Drinks</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Health Drinks</a></li>
                    <li><a class="dropdown-item" href="pages/shop-grid.html">Herbal Drinks</a></li>



                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Pages
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/blog.html">Blog</a></li>
                <li><a class="dropdown-item" href="pages/blog-single.html">Blog Single</a></li>
                <li><a class="dropdown-item" href="pages/blog-category.html">Blog Category</a></li>
                <li><a class="dropdown-item" href="pages/about.html">About us</a></li>
                <li><a class="dropdown-item" href="pages/404error.html">404 Error</a></li>
                <li><a class="dropdown-item" href="pages/contact.html">Contact</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="pages/signin.html">Sign in</a></li>
                <li><a class="dropdown-item" href="pages/signup.html">Signup</a></li>
                <li><a class="dropdown-item" href="pages/forgot-password.html">Forgot Password</a></li>
                <li class="dropdown-submenu dropend">
                  <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                    My Account
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="pages/account-orders.html">Orders</a></li>
                    <li><a class="dropdown-item" href="pages/account-settings.html">Settings</a></li>
                    <li><a class="dropdown-item" href="pages/account-address.html">Address</a></li>
                    <li><a class="dropdown-item" href="pages/account-payment-method.html">Payment Method</a>
                    </li>
                    <li><a class="dropdown-item" href="pages/account-notification.html">Notification</a></li>


                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="docs/index.html">
                Docs
              </a>

            </li>
          </ul>
        </div>


      </div>
    </div>

  </nav>
</div>
<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-4">
      <div class="modal-header border-0">
        <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">Se Connecter</h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('login')}}">
            @csrf
          <div class="mb-3">
            <label for="fullName" class="form-label">Adresse E-mail</label>
            <input type="email" class="form-control" id="fullName" placeholder="Enter Your Name" required="" name="email">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="email" placeholder="Enter Email address" required="" name="password">
          </div>



          <button type="submit" class="btn btn-primary">Se Connecter</button>
        </form>
      </div>
      <div class="modal-footer border-0 justify-content-center">

       vous n'avez pas de compte ? <a href="{{route('register')}}">inscrivez-vous</a>
      </div>
    </div>
  </div>
</div>



<!-- Shop Cart -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header border-bottom">
    <div class="text-start">
      <h5 id="offcanvasRightLabel" class="mb-0 fs-4">Shop Cart</h5>
      <small>Location in 382480</small>
    </div>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    <div class="">
      <!-- alert -->
      <div class="alert alert-danger p-2" role="alert">
        You’ve got FREE delivery. Start <a href="#!" class="alert-link">checkout now!</a>
      </div>
      <ul class="list-group list-group-flush">
        <!-- list group -->
        <li class="list-group-item py-3 ps-0 border-top">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
              <!-- img --> <img src="assets/images/products/product-img-1.jpg" alt="Ecommerce"
                class="img-fluid"></div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
              </a>
              <span><small class="text-muted">.98 / lb</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>

            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$5.00</span>

            </div>
          </div>

        </li>
        <!-- list group -->
        <li class="list-group-item py-3 ps-0">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
              <!-- img --> <img src="assets/images/products/product-img-2.jpg" alt="Ecommerce"
                class="img-fluid"></div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">NutriChoice Digestive </h6>
              </a>
              <span><small class="text-muted">250g</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>
            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold text-danger">$20.00</span>
              <div class="text-decoration-line-through text-muted small">$26.00</div>
            </div>
          </div>

        </li>
        <!-- list group -->
        <li class="list-group-item py-3 ps-0">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
              <!-- img --> <img src="assets/images/products/product-img-3.jpg" alt="Ecommerce"
                class="img-fluid"></div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
              </a>
              <span><small class="text-muted">1 kg</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>
            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$15.00</span>
              <div class="text-decoration-line-through text-muted small">$20.00</div>
            </div>
          </div>

        </li>
        <!-- list group -->
        <li class="list-group-item py-3 ps-0">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
              <!-- img --> <img src="assets/images/products/product-img-4.jpg" alt="Ecommerce"
                class="img-fluid"></div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">Onion Flavour Potato</h6>
              </a>
              <span><small class="text-muted">250g</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>
            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$15.00</span>
              <div class="text-decoration-line-through text-muted small">$20.00</div>
            </div>
          </div>

        </li>
        <!-- list group -->
        <li class="list-group-item py-3 ps-0 border-bottom">
          <!-- row -->
          <div class="row align-items-center">
            <div class="col-3 col-md-2">
              <!-- img --> <img src="assets/images/products/product-img-5.jpg" alt="Ecommerce"
                class="img-fluid"></div>
            <div class="col-4 col-md-6 col-lg-5">
              <!-- title -->
              <a href="pages/shop-single.html" class="text-inherit">
                <h6 class="mb-0">Salted Instant Popcorn </h6>
              </a>
              <span><small class="text-muted">100g</small></span>
              <!-- text -->
              <div class="mt-2 small lh-1"> <a href="#!" class="text-decoration-none text-inherit"> <span
                    class="me-1 align-text-bottom">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="feather feather-trash-2 text-success">
                      <polyline points="3 6 5 6 21 6"></polyline>
                      <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                      </path>
                      <line x1="10" y1="11" x2="10" y2="17"></line>
                      <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg></span><span class="text-muted">Remove</span></a></div>
            </div>
            <!-- input group -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- input -->
              <!-- input -->
                  <div class="input-group input-spinner  ">
                    <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                    <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                    <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                  </div>
            </div>
            <!-- price -->
            <div class="col-2 text-lg-end text-start text-md-end col-md-2">
              <span class="fw-bold">$15.00</span>
              <div class="text-decoration-line-through text-muted small">$25.00</div>
            </div>
          </div>

        </li>

      </ul>
      <!-- btn -->
      <div class="d-flex justify-content-between mt-4">
        <a href="#!" class="btn btn-primary">Continue Shopping</a>
        <a href="#!" class="btn btn-dark">Update Cart</a>
      </div>

    </div>
  </div>
</div>




    @yield('content')


  <!-- Modal -->
<div class="modal fade" id="quickViewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body p-8">
        <div class="position-absolute top-0 end-0 me-3 mt-3">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <!-- img slide -->
            <div class="product productModal" id="productModal">
              <div
                class="zoom"
                onmousemove="zoom(event)"
                style="
                  background-image: url(assets/images/products/product-single-img-1.jpg);
                "
              >
                <!-- img -->
                <img
                  src="assets/images/products/product-single-img-1.jpg"
                  alt=""
                />
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(assets/images/products/product-single-img-2.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="assets/images/products/product-single-img-2.jpg"
                    alt=""
                  />
                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(assets/images/products/product-single-img-3.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="assets/images/products/product-single-img-3.jpg"
                    alt=""
                  />
                </div>
              </div>
              <div>
                <div
                  class="zoom"
                  onmousemove="zoom(event)"
                  style="
                    background-image: url(assets/images/products/product-single-img-4.jpg);
                  "
                >
                  <!-- img -->
                  <img
                    src="assets/images/products/product-single-img-4.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <!-- product tools -->
            <div class="product-tools">
              <div class="thumbnails row g-3" id="productModalThumbnails">
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="assets/images/products/product-single-img-1.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="assets/images/products/product-single-img-2.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="assets/images/products/product-single-img-3.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="col-3">
                  <div class="thumbnails-img">
                    <!-- img -->
                    <img
                      src="assets/images/products/product-single-img-4.jpg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ps-lg-8 mt-6 mt-lg-0">
              <a href="#!" class="mb-4 d-block">Bakery Biscuits</a>
              <h2 class="mb-1 h1">Napolitanke Ljesnjak</h2>
              <div class="mb-4">
                <small class="text-warning">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i></small
                ><a href="#" class="ms-2">(30 reviews)</a>
              </div>
              <div class="fs-4">
                <span class="fw-bold text-dark">$32</span>
                <span class="text-decoration-line-through text-muted">$35</span
                ><span
                  ><small class="fs-6 ms-2 text-danger">26% Off</small></span
                >
              </div>
              <hr class="my-6" />
              <div class="mb-4">
                <button type="button" class="btn btn-outline-secondary">
                  250g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  500g
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  1kg
                </button>
              </div>
              <div>
                <!-- input -->
                <!-- input -->
                <div class="input-group input-spinner  ">
                  <input type="button" value="-" class="button-minus  btn  btn-sm " data-field="quantity">
                  <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field form-control-sm form-input   ">
                  <input type="button" value="+" class="button-plus btn btn-sm " data-field="quantity">
                </div>
              </div>
              <div
                class="mt-3 row justify-content-start g-2 align-items-center"
              >

                <div class="col-lg-4 col-md-5 col-6 d-grid">
                  <!-- button -->
                  <!-- btn -->
                  <button type="button" class="btn btn-primary">
                    <i class="feather-icon icon-shopping-bag me-2"></i>Add to
                    cart
                  </button>
                </div>
                <div class="col-md-4 col-5">
                  <!-- btn -->
                  <a
                    class="btn btn-light"
                    href="#"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Compare"
                    ><i class="bi bi-arrow-left-right"></i
                  ></a>
                  <a
                    class="btn btn-light"
                    href="shop-wishlist.html"
                    data-bs-toggle="tooltip"
                    data-bs-html="true"
                    aria-label="Wishlist"
                    ><i class="feather-icon icon-heart"></i
                  ></a>
                </div>
              </div>
              <hr class="my-6" />
              <div>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td>Product Code:</td>
                      <td>FBB00255</td>
                    </tr>
                    <tr>
                      <td>Availability:</td>
                      <td>In Stock</td>
                    </tr>
                    <tr>
                      <td>Type:</td>
                      <td>Fruits</td>
                    </tr>
                    <tr>
                      <td>Shipping:</td>
                      <td>
                        <small
                          >01 day shipping.<span class="text-muted"
                            >( Free pickup today)</span
                          ></small
                        >
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- footer -->
<footer class="footer">
  <div class="container">
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
          <ul class="list-inline mb-0">
            <li class="list-inline-item text-dark">Paiment Securisé avec </li>
            <li class="list-inline-item">
              <a href="#!"><img src="{{asset('assets/images/payment/paypal.svg')}}" alt=""></a>
            </li>
            <li class="list-inline-item">
              <a href="#!"><img src="{{asset('assets/images/payment/visa.svg')}}" alt=""></a>
            </li>
          </ul>
        </div>
        <div class="col-lg-7 mt-4 mt-md-0">
          <ul class="list-inline mb-0 text-lg-end text-center">
            <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
            <li class="list-inline-item ms-4">
              <a href="#!"> <img src="assets/images/appbutton/appstore-btn.svg" alt=""
                  style="width: 140px;"></a></li>
            <li class="list-inline-item">
              <a href="#!"> <img src="assets/images/appbutton/googleplay-btn.svg" alt=""
                  style="width: 140px;"></a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="border-top py-4">
      <div class="row align-items-center">
        <div class="col-md-6"><span class="small text-muted">Dstore market est une plateforme de vente de  poulet en cote d'ivoire</span></div>
        <div class="col-md-6">
          <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
            <li class="list-inline-item text-muted">Suivez-Nous </li>
            <li class="list-inline-item me-1">
              <a href="#!" class="icon-shape icon-sm social-links"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></a></li>
            <li class="list-inline-item me-1">
              <a href="#!" class="icon-shape icon-sm social-links"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-twitter" viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></a></li>
            <li class="list-inline-item">
              <a href="#!" class="icon-shape icon-sm social-links"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</footer>
  <!-- Javascript-->

  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


  <script>
      $( function() {
        var availableTags = [];
        $.ajax({
         method:"GET",
         url:"/categorie/search",
         success:function(response){
         console.log(response);
          startAutocomplete(response);
         }
        })
        function startAutocomplete(availableTags){
                  $( ".searchcate" ).autocomplete({
                  source: availableTags
              });
        }
      } );
      ///
  </script>

  <style>
    .ui-menu{
    display: flex;
    flex-direction: column !important;
    background-color: #fff!important;
    max-width: 645px;
    border: 1px solid;
    padding-left: 10px;
    z-index: 1000;

    }

  </style>



  <!-- Libs JS -->

<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery-countdown/dist/jquery.countdown.min.js')}}"></script>
<script src="{{asset('assets/libs/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/nouislider/dist/nouislider.min.js')}}"></script>
<script src="{{asset('assets/libs/wnumb/wNumb.min.js')}}"></script>
<script src="{{asset('assets/libs/rater-js/index.js')}}"></script>
<script src="{{asset('assets/libs/prismjs/prism.js')}}"></script>
<script src="{{asset('assets/libs/prismjs/components/prism-scss.min.js')}}"></script>
<script src="{{asset('assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js')}}"></script>
<script src="{{asset('assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js')}}"></script>
<script src="assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
<script src="{{asset('assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
<script src="{{asset('assets/libs/dropzone/dist/min/dropzone.min.css')}}"></script>
<script src="{{asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/libs/inputmask/dist/jquery.inputmask.min.js')}}"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        showCloseButton: true,
        timer: 5000,
        timerProgressBar:true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    window.addEventListener('alert',({detail:{type,message}})=>{
        Toast.fire({
            icon:type,
            title:message
        })
    })
</script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<!-- Theme JS -->
<script src="{{asset('assets/js/theme.min.js')}}"></script>
 @livewireScripts()
</body>

</html>
