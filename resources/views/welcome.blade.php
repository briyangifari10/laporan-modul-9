@extends('layouts.master')

@section('navbar')
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="https://1000logos.net/wp-content/uploads/2021/11/Nike-Logo.png" alt="Bootstrap" width="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-primary">
                        <i class="fas fa-user me-1"></i> Login
                    </button>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('header')
    <header>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cdnb.artstation.com/p/assets/images/images/011/153/149/large/huy-hoang-banner-2.jpg"
                            class="d-block w-100 shadow-nih" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/11/25/51260e3b-fcba-46ff-8a42-f11dd6736d1f.jpg.webp?ect=4g"
                            class="d-block w-100 shadow-nih" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2022/11/25/51260e3b-fcba-46ff-8a42-f11dd6736d1f.jpg.webp?ect=4g"
                            class="d-block w-100 shadow-nih" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <main>
        <div class="container">
            <!-- start section list product -->
            <section class="product">
                <div class="d-flex justify-content-between">
                    <div class="title">
                        <p class="text-success">Recomended Product</p>
                        <h2>Our Popular Product</h2>
                    </div>
                    <button class="btn btn-primary lihat d-none d-md-block">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>

                <div class="row justify-content-center" id="list-product">
                    <!-- 1 -->
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">
                            <div class="image">
                                <div class="bg"></div>
                                <img src="{{ asset('assets/img/pngegg (1).png') }}" alt="">
                            </div>
                            <div class="topic">
                                <h3>
                                    Nike Cortez Forrest Gump
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. 10.000</p>
                                    </div>
                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">
                            <div class="image">
                                <div class="bg"></div>
                                <img src="{{ asset('assets/img/pngegg (2).png') }}" alt="">
                            </div>
                            <div class="topic">
                                <h3>
                                    Nike Cortez Forrest Gump
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. 10.000</p>
                                    </div>
                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">
                            <div class="image">
                                <div class="bg"></div>
                                <img src="{{ asset('assets/img/pngegg (3).png') }}" alt="">
                            </div>
                            <div class="topic">
                                <h3>
                                    Nike Cortez Forrest Gump
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. 10.000</p>
                                    </div>
                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">
                            <div class="image">
                                <div class="bg"></div>
                                <img src="{{ asset('assets/img/pngegg.png') }}" alt="">
                            </div>
                            <div class="topic">
                                <h3>
                                    Nike Cortez Forrest Gump
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. 10.000</p>
                                    </div>
                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 1 -->
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">
                            <div class="image">
                                <div class="bg"></div>
                                <img src="{{ asset('assets/img/pngegg (1).png') }}" alt="">
                            </div>
                            <div class="topic">
                                <h3>
                                    Nike Cortez Forrest Gump
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. 10.000</p>
                                    </div>
                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2 -->
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">
                            <div class="image">
                                <div class="bg"></div>
                                <img src="{{ asset('assets/img/pngegg (2).png') }}" alt="">
                            </div>
                            <div class="topic">
                                <h3>
                                    Nike Cortez Forrest Gump
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. 10.000</p>
                                    </div>
                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3 -->
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">
                            <div class="image">
                                <div class="bg"></div>
                                <img src="{{ asset('assets/img/pngegg (3).png') }}" alt="">
                            </div>
                            <div class="topic">
                                <h3>
                                    Nike Cortez Forrest Gump
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. 10.000</p>
                                    </div>
                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4 -->
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">
                            <div class="image">
                                <div class="bg"></div>
                                <img src="{{ asset('assets/img/pngegg.png') }}" alt="">
                            </div>
                            <div class="topic">
                                <h3>
                                    Nike Cortez Forrest Gump
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. 10.000</p>
                                    </div>
                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4 d-md-none d-lg-none d-xl-none">
                    <button class="btn btn-primary lihat">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>
            </section>
            <!-- end section list product -->
        </div>
    </main>
@endsection

@section('footer')
    <footer class="text-center text-lg-start text-muted shadow-nih bg-light">
        <div class="container">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Mari Terhubung Dengan Sosial Media Kami</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section>
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-10 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Nama Toko
                            </h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam debitis recusandae ea,
                                dolorum ad tenetur. Ad quos illum dolorem repellendus molestias minima.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Usefull Link
                            </h6>
                            <p>
                                <a href="#" class="text-reset">Categories</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Product</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Coupon</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Term Of Service</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-10 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Usefull Link
                            </h6>
                            <p>
                                <a href="#" class="text-reset">Categories</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Product</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Coupon</a>
                            </p>
                            <p>
                                <a href="#" class="text-reset">Term Of Service</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Contact Us</h6>
                            <p><i class="fas fa-home me-3"></i> Kec KarangPucung</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                ojan@developerku.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> 0819 1248 8040</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

        </div>
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2022 Copyright Made With ♥
            <a class="text-reset" href="/">OJAN DEV</a>
        </div>
        <!-- Copyright -->
    </footer>
@endsection
