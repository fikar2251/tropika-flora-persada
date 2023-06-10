<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <img width="50" height="50" src="{{asset('img/Logo.jpg')}}" style="margin-right: 5px;" class="logo float-start" alt="" >
                <a href="{{url('home')}}" class="logo mt-2 float-start">Tropika Flora Persada</a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li ><a href="{{url('home')}}">BERANDA</a></li>
                    <li ><a href="{{url('product')}}">PRODUK</a></li>
                    {{-- <li class="has-children">
                        <a href="properties.html">Properties</a>
                        <ul class="dropdown">
                            <li><a href="#">Buy Property</a></li>
                            <li><a href="#">Sell Property</a></li>
                            <li class="has-children">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">Sub Menu One</a></li>
                                    <li><a href="#">Sub Menu Two</a></li>
                                    <li><a href="#">Sub Menu Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li><a href="services.html">Services</a></li> --}}
                    <li><a href="{{url('about')}}">TENTANG KAMI</a></li>
                    <li><a href="{{url('contact')}}">KONTAK KAMI</a></li>
                </ul>

                <a href="#"
                    class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>
