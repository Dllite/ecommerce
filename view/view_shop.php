<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Accueil</a>
                <a class="breadcrumb-item text-dark" href="#">Boutique</a>
                <span class="breadcrumb-item active">liste</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <!-- Shop Sidebar Start -->
        <div class="col-lg-3 col-md-4">
            <!-- Price Start -->
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Trier
                    Par PRIx</span>
            </h5>
            <div class="bg-light p-4 mb-30">
                <form>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" checked id="price-all">
                        <label class="custom-control-label" for="price-all">Tout les Prix</label>
                        <span class="badge border font-weight-normal">1000</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-1">
                        <label class="custom-control-label" for="price-1">0F - 100FCFA</label>
                        <span class="badge border font-weight-normal">150</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-2">
                        <label class="custom-control-label" for="price-2">100F - 200F</label>
                        <span class="badge border font-weight-normal">295</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-3">
                        <label class="custom-control-label" for="price-3">200F - 300F</label>
                        <span class="badge border font-weight-normal">246</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                        <input type="checkbox" class="custom-control-input" id="price-4">
                        <label class="custom-control-label" for="price-4">300F - 400F</label>
                        <span class="badge border font-weight-normal">145</span>
                    </div>
                    <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-control-input" id="price-5">
                        <label class="custom-control-label" for="price-5">400F - 500F</label>
                        <span class="badge border font-weight-normal">168</span>
                    </div>
                </form>
            </div>
            <!-- Price End -->

            <!-- Color Start -->
           
            <!-- Color End -->

            <!-- Size Start -->
            
            <!-- Size End -->
        </div>
        <!-- Shop Sidebar End -->


        <!-- Shop Product Start -->
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                            <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                        </div>
                        <div class="ml-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                    data-toggle="dropdown">Tri</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Nouveaut??</a>
                                    <a class="dropdown-item" href="#">Populaire</a>
                                    <a class="dropdown-item" href="#">Les plus demand??s</a>
                                </div>
                            </div>
                            <div class="btn-group ml-2">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                    data-toggle="dropdown">Par</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item" href="#">20</a>
                                    <a class="dropdown-item" href="#">30</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php 
                        while($ligne=$produit->fetch_assoc()){

                        
                        ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= 'asset/images/'.$ligne['image'] ?>" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="detail.php?id=<?=$ligne['id']?>"><?= $ligne['nomProduit'] ?></a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5><?= $ligne['prix'] ?> F CFA</h5><h6 class="text-muted ml-2"></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                   
                </div>
            </div>
            <?php } ?>
                
               
                
                <div class="col-12">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#">Precedent</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">suivant</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->