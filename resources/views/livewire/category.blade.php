<div>


 <!-- breadcrumb-area -->
 <div class="breadcrumb-area breadcrumb-bg-two">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">ACCUEIL</a></li>
                                    <li class="breadcrumb-item"><a href="shop.html">NOS BOUTIQUES</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Spices Food</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->
    <section class="best-sellers-area pt-85 pb-70">
        <div class="container">
            <div class="row align-items-end mb-40">
                <div class="col-md-8 col-sm-9">
                    <div class="section-title">
                        <span class="sub-title">Nos Categorie</span>

                    </div>
                </div>

            </div>
        
            <div class="best-sellers-products">
                <div class="row justify-content-center">
                    @foreach ( $category as $ressources )
                    <div class="col-3">
                        <div class="sp-product-item mb-20">
                            <div class="sp-product-thumb">
                                <span class="batch">New</span>
                                <a href="shop-details.html">

                                    <img src="{{asset('assets/img/product/sp_products09.png')}}" alt="">
                                </a>
                            </div>
                            <div class="sp-product-content">
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h6 class="title"><a href="shop-details.html">Uncle Orange</a></h6>
                            </div>
                        </div>
                    </div>
                    @endforeach





                </div>
            </div>
        </div>
    </section>




</div>
