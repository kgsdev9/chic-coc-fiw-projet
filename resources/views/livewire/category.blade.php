<div>

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
                                <h6 class="title"><a href="shop-details.html">Uncle Orange Vanla Ready Pice</a></h6>
                            </div>
                        </div>
                    </div>
                    @endforeach





                </div>
            </div>
        </div>
    </section>




</div>
