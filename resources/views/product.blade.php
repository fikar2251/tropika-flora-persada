@extends('layouts.app')
@push('css-script')
    <style>
        .nav-wrapper {
            width: 100%;
            scrollbar-width: none;

            &::-webkit-scrollbar {
                display: none;
            }
        }

        .nav-tabs .nav-link {
            border-bottom-color: var(--bs-gray-300);

            &[aria-selected=true] {
                border-bottom-color: transparent;
            }
        }
    </style>
@endpush
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('assets2/images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Produk</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Produk
                            </li>
                        </ol>
                    </nav>
                    <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="text" class="form-control px-4" placeholder="Cari Bunga" />
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
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
                                <a href="property-single.html" class="img">
                                    <img src="assets2/images/flower1.jpg" alt="Image" class="img-fluid" />
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

                                        <a href="{{ url('product') }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="assets2/images/img_2.jpg" alt="Image" class="img-fluid" />
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

                                        <a href="{{ url('product') }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="assets2/images/img_3.jpg" alt="Image" class="img-fluid" />
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

                                        <a href="{{ url('product') }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
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

                                        <a href="{{ url('product') }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
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

                                        <a href="{{ url('product') }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
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

                                        <a href="{{ url('product') }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
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

                                        <a href="{{ url('product') }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
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

                                        <a href="{{ url('product') }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
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

                                        <a href="{{ url('product') }}" class="btn btn-primary py-2 px-3">See details</a>
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
                        Semua Produk
                    </h2>
                </div>
            </div>
            <div class="container">

                <div class="d-flex  m-5 gap-3">
                    <button id="back" type="button" class="btn border-0 d-none" aria-label="Scroll tabs left">
                        <i class="fa-solid fa-angle-left" aria-hidden="true"></i>
                    </button>
                    <div class="nav-wrapper d-flex justify-content-center overflow-auto mx-0">
                        <ul class="nav nav-tabs m-0 flex-nowrap" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Kebun 1</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Kebun
                                    2</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">Kebun
                                    3</button>
                            </li>
                        </ul>
                    </div>
                    <button id="forward" type="button" class="btn border-0 d-none" aria-label="Scroll tabs right">
                        <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                    </button>
                </div>


                <div class="tab-content mx-5 p-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower1.jpg" alt="Image" class="img-fluid" />
                                    </a>

                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 1</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower2.jpg" alt="Image" class="img-fluid" />
                                    </a>
                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 2</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower3.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 3</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower4.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 4</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower5.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 5</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower6.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 6</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower1.jpg" alt="Image" class="img-fluid" />
                                    </a>

                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 1</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower2.jpg" alt="Image" class="img-fluid" />
                                    </a>
                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 2</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower3.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 3</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower4.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 4</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower5.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 5</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower6.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 6</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
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
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower1.jpg" alt="Image" class="img-fluid" />
                                    </a>

                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 1</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower2.jpg" alt="Image" class="img-fluid" />
                                    </a>
                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 2</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower3.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 3</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower4.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 4</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower5.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 5</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="property-item mb-30">
                                    <a href="property-single.html" class="img">
                                        <img src="assets2/images/flower6.jpg" alt="Image" class="img-fluid" />
                                    </a>


                                    <div class="property-content">
                                        <div class="price mb-2"><span>Bunga 6</span></div>
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

                                            <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat
                                                detail</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- .item -->
                            </div>
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
            </div>
        </div>
    </div>
    </div>
    @push('custom-scripts')
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
            integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script>
            export interface TabContainerWidth {
                width: number;
                length: number;
            }

            export interface TabObserver {
                scrollWidth: number;
                previousButton: HTMLElement;
                nextButton: HTMLElement;
            }

            export interface TabItem {
                scrollContainer: HTMLElement;
                tabContainer: HTMLElement;
                tabItems: HTMLElement[];
                previousButton: HTMLElement;
                nextButton: HTMLElement;
            }

            export class TabScroll {
                private scrollContainer: HTMLElement;
                private tabContainer: HTMLElement;
                private tabItems: HTMLElement[];
                private previousButton: HTMLElement;
                private nextButton: HTMLElement;
                private scrollDistance: number = 0;

                constructor(tabItems: TabItem) {
                    this.scrollContainer = tabItems.scrollContainer;
                    this.tabContainer = tabItems.tabContainer;
                    this.tabItems = tabItems.tabItems;
                    this.previousButton = tabItems.previousButton;
                    this.nextButton = tabItems.nextButton;

                    this.init();
                }

                public init(): void {
                    this.previousButton.removeEventListener('click', e => {
                        this.onScrollButtonClick(e);
                    });

                    this.previousButton.addEventListener('click', e => {
                        this.onScrollButtonClick(e);
                    });

                    this.nextButton.removeEventListener('click', e => {
                        this.onScrollButtonClick(e);
                    });

                    this.nextButton.addEventListener('click', e => {
                        this.onScrollButtonClick(e);
                    });

                    const observeTab = this.resizeObserver({
                        scrollWidth: this.getTabContainerWidth(this.tabItems).width,
                        previousButton: this.previousButton,
                        nextButton: this.nextButton
                    });

                    observeTab.observe(this.scrollContainer);
                }

                public onScrollButtonClick(e): void {
                    const tabWidth: TabContainerWidth = this.getTabContainerWidth(this.tabItems);

                    if (e.target === this.previousButton || e.target.parentNode === this.previousButton) {
                        this.scrollDistance -= (tabWidth.width / tabWidth.length);
                        this.scrollTabContainer(this.scrollDistance);
                    } else {
                        this.scrollDistance += (tabWidth.width / tabWidth.length);
                        this.scrollTabContainer(this.scrollDistance);
                    }
                }

                private scrollTabContainer(scrollDistance: number): void {
                    this.scrollContainer.scroll({
                        top: 0,
                        left: scrollDistance,
                        behavior: 'smooth'
                    });
                }

                private resizeObserver(tabObserver: TabObserver): ResizeObserver {
                    return new ResizeObserver(entries => {
                        window.requestAnimationFrame(() => {
                            for (let entry of entries) {
                                let enableScrollButtons = entry.contentRect.width > tabObserver.scrollWidth;
                                tabObserver.previousButton.classList.toggle('d-none', enableScrollButtons);
                                tabObserver.nextButton.classList.toggle('d-none', enableScrollButtons);
                            }
                        });
                    });
                }

                private getElementWidth(el: HTMLElement): number {
                    return parseInt(window.getComputedStyle(el).width, 10);
                }

                private getTabContainerWidth(el: HTMLELement[]): TabContainerWidth {
                    let tabWidth: number = 0;

                    el.forEach(tab => {
                        tabWidth += this.getElementWidth(tab);
                    });

                    return {
                        width: tabWidth,
                        length: el.length
                    }
                    as TabContainerWidth;
                }
            }

            window.addEventListener('DOMContentLoaded', () => {
                new TabScroll({
                    scrollContainer: document.querySelector(".nav-wrapper"),
                    tabContainer: document.querySelector(".nav-tabs"),
                    tabItems: document.querySelectorAll(".nav-tabs .nav-link"),
                    previousButton: document.querySelector('#back'),
                    nextButton: document.querySelector('#forward')
                });
            }, false);
        </script>
    @endpush
@endsection
