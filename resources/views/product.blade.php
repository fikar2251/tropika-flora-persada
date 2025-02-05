@extends('layouts.app2')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('img/FOTO/010-RUSCUS FARM-03.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Produk</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Produk
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h2 class="font-weight-bold text-primary heading">
                        Featured Properties
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            <div class="property-item">
                                <a href="#" class="img">
                                    <img src="img/bunga_1.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="#" class="img">
                                    <img src="img/bunga_2.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="#" class="img">
                                    <img src="img/bunga_3.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="#" class="img">
                                    <img src="assets2/images/img_4.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="#" class="img">
                                    <img src="assets2/images/img_5.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="#" class="img">
                                    <img src="assets2/images/img_6.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="#" class="img">
                                    <img src="assets2/images/img_7.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="#" class="img">
                                    <img src="assets2/images/img_8.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="#" class="img">
                                    <img src="assets2/images/img_1.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <span class="d-block d-flex align-items-center me-3">
                                                <span class="icon-bed me-2"></span>
                                                <span class="caption">2 beds</span>
                                            </span>
                                            <span class="d-block d-flex align-items-center">
                                                <span class="icon-bath me-2"></span>
                                                <span class="caption">2 baths</span>
                                            </span>
                                        </div>

                                        <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->
                        </div>

                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property"
                                tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property"
                                tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
{{-- <section class="section">
    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-lg-6 text-center mx-auto">
                <h2 class="font-weight-bold text-primary heading">
                    Jenis Bunga
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="box-feature">
                    <span class="flaticon-house"></span>
                    <h3 class="mb-3">Our Properties</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptates, accusamus.
                    </p>
                    <p><a href="#" class="learn-more">Learn More</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <div class="box-feature">
                    <span class="flaticon-building"></span>
                    <h3 class="mb-3">Property for Sale</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptates, accusamus.
                    </p>
                    <p><a href="#" class="learn-more">Learn More</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="box-feature">
                    <span class="flaticon-house-3"></span>
                    <h3 class="mb-3">Real Estate Agent</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptates, accusamus.
                    </p>
                    <p><a href="#" class="learn-more">Learn More</a></p>
                </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <div class="box-feature">
                    <span class="flaticon-house-1"></span>
                    <h3 class="mb-3">House for Sale</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptates, accusamus.
                    </p>
                    <p><a href="#" class="learn-more">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <div class="section section-properties">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6 text-center mx-auto">
                    <h2 class="font-weight-bold text-primary heading">
                        Produk Kami
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="{{url('detail')}}" class="img">
                            <img src="img/bunga_1.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>Mawar Merah</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">Kategori: </span>
                                <span class="city d-block mb-3">Mawar</span>

                                {{-- <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div> --}}

                                <a href="#" class="btn btn-primary py-2 px-3">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="img/bunga_2.jpg" alt="Image" class="img-fluid" />
                        </a>
                        <div class="property-content">
                            <div class="price mb-2"><span>Mawar Hitam</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">Kategori:</span>
                                <span class="city d-block mb-3">Mawar</span>

                                {{-- <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div> --}}

                                <a href="#" class="btn btn-primary py-2 px-3">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="img/bunga_3.jpg" alt="Image" class="img-fluid" />
                        </a>

                       
                        <div class="property-content">
                            <div class="price mb-2"><span>Kamboja</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">Kategori:</span>
                                <span class="city d-block mb-3">Bunga</span>

                                {{-- <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div> --}}

                                <a href="#" class="btn btn-primary py-2 px-3">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="img/bunga_4.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>Mawar Merah</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">Kategori: </span>
                                <span class="city d-block mb-3">Mawar</span>

                                {{-- <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div> --}}

                                <a href="#" class="btn btn-primary py-2 px-3">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="img/bunga_5.jpg" alt="Image" class="img-fluid" />
                        </a>
                        <div class="property-content">
                            <div class="price mb-2"><span>Mawar Hitam</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">Kategori:</span>
                                <span class="city d-block mb-3">Mawar</span>

                                {{-- <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div> --}}

                                <a href="#" class="btn btn-primary py-2 px-3">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="img/bunga_6.jpg" alt="Image" class="img-fluid" />
                        </a>

                       
                        <div class="property-content">
                            <div class="price mb-2"><span>Kamboja</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">Kategori:</span>
                                <span class="city d-block mb-3">Bunga</span>

                                {{-- <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div> --}}

                                <a href="#" class="btn btn-primary py-2 px-3">Lihat detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
{{-- 
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="assets2/images/img_4.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>$1,291,000</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                <span class="city d-block mb-3">California, USA</span>

                                <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div>

                                <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="assets2/images/img_5.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>$1,291,000</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                <span class="city d-block mb-3">California, USA</span>

                                <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div>

                                <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="assets2/images/img_6.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>$1,291,000</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                <span class="city d-block mb-3">California, USA</span>

                                <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div>

                                <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="assets2/images/img_7.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>$1,291,000</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                <span class="city d-block mb-3">California, USA</span>

                                <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div>

                                <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="assets2/images/img_8.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>$1,291,000</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                <span class="city d-block mb-3">California, USA</span>

                                <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div>

                                <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="property-item mb-30">
                        <a href="#" class="img">
                            <img src="assets2/images/img_1.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>$1,291,000</span></div>
                            <div>
                                <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                <span class="city d-block mb-3">California, USA</span>

                                <div class="specs d-flex mb-4">
                                    <span class="d-block d-flex align-items-center me-3">
                                        <span class="icon-bed me-2"></span>
                                        <span class="caption">2 beds</span>
                                    </span>
                                    <span class="d-block d-flex align-items-center">
                                        <span class="icon-bath me-2"></span>
                                        <span class="caption">2 baths</span>
                                    </span>
                                </div>

                                <a href="#" class="btn btn-primary py-2 px-3">See details</a>
                            </div>
                        </div>
                    </div>
                    <!-- .item -->
                </div> --}}
            </div>
            <div class="row align-items-center py-5">
                <div class="col-lg-3">Pagination (1 of 10)</div>
                <div class="col-lg-6 text-center">
                    <div class="custom-pagination">
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
