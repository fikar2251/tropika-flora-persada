@extends('layouts.app')
@section('content')
    <div class="hero page-inner overlay" style="background-image: url('assets2/images/hero_bg_1.jpg')">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                    <h1 class="heading" data-aos="fade-up">Bunga 1</h1>

                    <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                        <ol class="breadcrumb text-center justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('product') }}">Product</a></li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                bunga1
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <img src="assets2/images/flower1.jpg" alt="Image" class="img-fluid" />
                </div>
                <div class="col-lg-6">
                    <h2 class="heading text-primary">Deskripsi & Detail Bunga</h2>
                    <p class="text-black-50">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione
                        laborum quo quos omnis sed magnam id, ducimus saepe, debitis error
                        earum, iste dicta odio est sint dolorem magni animi tenetur.
                    </p>
                    <p class="text-black-50">
                        Perferendis eligendi reprehenderit, assumenda molestias nisi eius
                        iste reiciendis porro tenetur in, repudiandae amet libero.
                        Doloremque, reprehenderit cupiditate error laudantium qui, esse
                        quam debitis, eum cumque perferendis, illum harum expedita.
                    </p>

                </div>
            </div>
            <div class="row mt-5 justify-content-between">
                <div class="col-lg-12">
                    <h4 class="font-weight-bold heading">
                        Anda Mungkin Juga Menyukai
                    </h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="property-item">
                        <a href="{{ url('detail_product') }}" class="img">
                            <img src="assets2/images/flower2.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>Bunga 1</span></div>
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

                                <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="property-item">
                        <a href="{{ url('detail_product') }}" class="img">
                            <img src="assets2/images/flower2.jpg" alt="Image" class="img-fluid" />
                        </a>

                        <div class="property-content">
                            <div class="price mb-2"><span>Bunga 2</span></div>
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

                                <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="property-item">
                        <a href="{{ url('detail_product') }}" class="img">
                            <img src="assets2/images/flower2.jpg" alt="Image" class="img-fluid" />
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

                                <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="property-item">
                        <a href="{{ url('detail_product') }}" class="img">
                            <img src="assets2/images/flower2.jpg" alt="Image" class="img-fluid" />
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

                                <a href="{{ url('detail_product') }}" class="btn btn-primary py-2 px-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
