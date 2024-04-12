<div class="row">
    <div class="col-lg-6">
        <form class="card" id="productForm" enctype="multipart/form-data">
            <div class="px-4 py-3 border-bottom">
                <h5 class="card-title fw-semibold mb-0">Administrdor de productos</h5>
            </div>
            <div class="card-body p-4">

                <div class="mb-4 row align-items-center">
                    <label class="form-label fw-semibold col-sm-3 col-form-label">Imagen del producto</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="file" name="image" accept="image/*">
                    </div>
                </div>

                <div class="mb-4 row align-items-center">
                    <label class="form-label fw-semibold col-sm-3 col-form-label">Nombre del producto</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="mb-4 row align-items-center">
                    <label class="form-label fw-semibold col-sm-3 col-form-label">Descripción del producto</label>
                    <div class="col-sm-9">
                        <textarea class="form-control p-7" name="description" cols="20" rows="1"></textarea>
                    </div>
                </div>
                <div class="mb-4 row align-items-center">
                    <label class="form-label fw-semibold col-sm-3 col-form-label">Precio del producto</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="number" name="price">
                    </div>
                </div>
                <div class="mb-4 row align-items-center">
                    <label class="form-label fw-semibold col-sm-3 col-form-label">Cantidad en stock</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="number" name="stock">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <button class="btn btn-primary" type="submit">Agregar producto</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


<script src="<?= PAGE_PRODUCT ?>/add.js"></script>

<div class="shop-detail">
    <div class="card shadow-none">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-lg-6">
                    <div id="sync1" class="owl-carousel owl-theme">
                        <div class="item rounded overflow-hidden">
                            <img src="../assets/images/product/s1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shop-content">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge text-bg-success fs-2 fw-semibold rounded-3">In Stock</span>
                            <span class="fs-2">books</span>
                        </div>
                        <h4 class="fw-semibold">How Innovation Works</h4>
                        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ex arcu, tincidunt
                            bibendum felis.</p>
                        <h4 class="fw-semibold mb-3"><del class="fs-5 text-muted">$350</del> $275</h4>
                        <div class="d-flex align-items-center gap-8 pb-4 border-bottom">
                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                                </li>
                                <li><a class="me-1" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                                </li>
                                <li><a class="" href="javascript:void(0)"><i class="ti ti-star text-warning fs-4"></i></a>
                                </li>
                            </ul>
                            <a href="javascript:void(0)">(236 reviews)</a>
                        </div>
                        <div class="d-flex align-items-center gap-8 py-7">
                            <h6 class="mb-0 fs-4 fw-semibold">Colors:</h6>
                            <a class="rounded-circle d-block text-bg-primary p-6" href="javascript:void(0)"></a>
                        </div>
                        <div class="d-flex align-items-center gap-7 pb-7 mb-7 border-bottom">
                            <h6 class="mb-0 fs-4 fw-semibold">QTY:</h6>
                            <div class="input-group input-group-sm rounded">
                                <button class="btn minus min-width-40 py-0 border-end border-secondary fs-5 border-end-0 text-secondary" type="button" id="add1"><i class="ti ti-minus"></i></button>
                                <input type="text" class="min-width-40 flex-grow-0 border border-secondary text-secondary fs-4 fw-semibold form-control text-center qty" placeholder="" aria-label="Example text with button addon" aria-describedby="add1" value="1">
                                <button class="btn min-width-40 py-0 border border-secondary fs-5 border-start-0 text-secondary add" type="button" id="addo2"><i class="ti ti-plus"></i></button>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center gap-3 pt-8 mb-7">
                            <a href="javascript:void(0)" class="btn d-block btn-primary px-5 py-8 mb-2 mb-sm-0">Buy Now</a>
                            <a href="javascript:void(0)" class="btn d-block btn-danger px-7 py-8">Add to Cart</a>
                        </div>
                        <p class="mb-0">Dispatched in 2-3 weeks</p>
                        <a href="javascript:void(0)">Why the longer time for delivery?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>