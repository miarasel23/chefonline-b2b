@extends('frontend.layouts.main')

@section('title', 'Smart Restaurant POS by ChefOnline EPoS System | Chefonline')
@section('description', 'ChefOnline EPoS offers a smart, flexible, and real-time POS system for restaurants with instant billing, online sync, and 7-day customer support | ChefOnline')


@section('content')

    <body class="common-home layout-1">

        @include('frontend.layouts.menu')

        <div class="content_headercms_top"></div>
        <div class="content-top-breadcum">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="title-content"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= Quick view JS ========= -->
        <script>
            function quickbox() {
                if ($(window).width() > 767) {
                    $(".quickview-button").magnificPopup({
                        type: "iframe",
                        delegate: "a",
                        preloader: true,
                        tLoading: "Loading image #%curr%...",
                    });
                }
            }
            jQuery(document).ready(function() {
                quickbox();
            });
            jQuery(window).resize(function() {
                quickbox();
            });
        </script>
        <div class="main-slider">
            <div id="spinner"></div>
            <div id="slideshow0" class="owl-carousel">
                <div class="item">
                    <a href="#"><img src="{{ asset('assets/image/cache/catalog/home-banner_2-1900x700.jpg') }}"
                            alt="Epos Banner 1" class="img-responsive" /></a>
                </div>
                <div class="item">
                    <a href="#"><img src="{{ asset('assets/image/cache/catalog/home-banner_1-1900x700.jpg') }}"
                            alt="Epos Banner 2" class="img-responsive" /></a>
                </div>
                <div class="item">
                    <a href="#"><img src="{{ asset('assets/image/cache/catalog/home-banner_3-1900x700.jpg') }}"
                            alt="Epos Banner 3" class="img-responsive" /></a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#slideshow0").owlCarousel({
                    items: 6,
                    autoPlay: 5000,
                    singleItem: true,
                    navigation: true,
                    navigationText: [
                        '<i class="fa fa-long-arrow-left fa-5x"></i>',
                        '<i class="fa fa-long-arrow-right fa-5x"></i>',
                    ],
                    pagination: true,
                    transitionStyle: "fade",
                });
            });
        </script>
        <script type="text/javascript">
            $(window).load(function() {
                $("#spinner").fadeOut("slow");
            });
        </script>

        <style>
            .start-from {
                /* text-align: center; */
                font-size: 20px;
                font-weight: bold;
                padding: 10px 0px;
                margin-left: 200px;
            }

            @media (max-width: 767px) {
                .start-from {
                    margin-left: 0px;
                    text-align: center;
                }
            }
        </style>



        <div>
            <div class="cms-banner">
                <div class="container">
                    <div class="cms-banner-inner">
                        <div class="cms-banner-inner1">
                            <a href="https://www.chefonline.com/epos/package"><img src="{{ asset('assets/image/catalog/home-banner-insite-1.png') }}"
                                    width="370" height="300" alt="ChefOnline EPoS Packages " /></a>
                            <div class="hover_content">
                                <div class="hover_data">
                                    <div class="desc-text">
                                        <a href="https://www.chefonline.com/epos/package">
                                            ChefOnline EPoS</a>
                                    </div>
                                    <div class="title">
                                        <a href="https://www.chefonline.com/epos/package">
                                            Packages
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cms-banner-inner2">
                            <a href="#"><img src="{{ asset('assets/image/catalog/home-banner-insite-2.png') }}"
                                    width="370" height="300" alt="EPoS Packages" /></a>
                            <div class="hover_content">
                                <div class="hover_data">
                                    <div class="desc-text">
                                        <a href="#">
                                            Standalone EPoS</a>
                                    </div>
                                    <div class="title">
                                        <a href="#">
                                            Packages</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cms-banner-inner3">
                            <a href="https://www.chefonline.com/epos/addon"><img src="{{ asset('assets/image/catalog/home-banner-insite-3.png') }}"
                                    width="370" height="300" alt="Add ons" /></a>
                            <div class="hover_content">
                                <div class="hover_data">
                                    <div class="desc-text">
                                        <a href="https://www.chefonline.com/epos/addon">
                                            Add ons</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="welcome_cms">
                    <div class="welcome_1cms cont_inner">
                        <div class="welcome_content1">
                            <h1 class="hidden">Welcome ChefOnline EPoS</h1>
                            <div class="welcome_cms_title1">Welcome to</div>
                            <div class="welcome_cms_title2">ChefOnline EPoS</div>
                            <p>
                                is a high-tech, integrated and easy-to-use Electronic Point of
                                Sale system brought to you by ChefOnline.
                            </p>
                            <div class="welcome_cms_desc">
                                We have designed the solutions with maximum flexibility and
                                features to meet all your business requirements through our
                                ChefOnline EPoS service. With the real-time collaboration of
                                ChefOnline EPoS service, restaurant business management has
                                never been so easy.
                            </div>
                            <div class="readmore">
                                <a href="https://www.chefonline.com/epos/about">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service_cms">
                    <div class="service_1cms cont_inner">
                        <div class="service_content1">
                            <div class="icon"></div>
                            <div class="service_cms_text">
                                <span>Time &amp; Cost Efficient</span>
                            </div>
                            <div class="service_cms_text2">
                                <span>Best Price in Market </span>
                            </div>
                        </div>
                    </div>
                    <div class="service_2cms cont_inner">
                        <div class="service_content2">
                            <div class="icon"></div>
                            <div class="service_cms_text">
                                <span>Customer Support 7 Days/Week</span>
                            </div>
                            <div class="service_cms_text2">
                                <span>Spot on and need-based</span>
                            </div>
                        </div>
                    </div>
                    <div class="service_3cms cont_inner">
                        <div class="service_content3">
                            <div class="icon"></div>
                            <div class="service_cms_text"><span>Easy to Use</span></div>
                            <div class="service_cms_text2">
                                <span>User Friendly and Efficient </span>
                            </div>
                        </div>
                    </div>
                    <div class="service_4cms cont_inner">
                        <div class="service_content4">
                            <div class="icon"></div>
                            <div class="service_cms_text"><span>Smart Management</span></div>
                            <div class="service_cms_text2">
                                <span>Central Management with few Taps </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="offer-banner parallex" data-source-url="image/catalog/paralax-bg.png">
                <div class="container">
                    <div class="offer-banner-inner">
                        <div class="offer-banner-title"></div>
                        <div class="offer-banner-desc"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <section class="features" id="features">
                <div class="container">
                    <div class="features-head">
                        <h2 class="features-title heading-h2">Smart Features</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature">
                                <div class="icon-container">
                                    <div class="icon">
                                        <img class="img-responsive" alt="Real Time Process"
                                            src="{{ asset('assets/image/catalog/img1.png') }}" />
                                    </div>
                                </div>
                                <div class="fetaure-details">
                                    <h4 class="main-color">Real-Time Processing</h4>
                                    <p>
                                        Take orders, table reservations, takeaway requests and more,
                                        all in real time.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature">
                                <div class="icon-container">
                                    <div class="icon">
                                        <img class="img-responsive" alt="Admin &amp; Monitor"
                                            src="{{ asset('assets/image/catalog/img2.png') }}" />
                                    </div>
                                </div>
                                <div class="fetaure-details">
                                    <h4 class="main-color">Admin &amp; Monitor</h4>
                                    <p>
                                        Send orders to the kitchen, process customer bills and
                                        payments, and monitor your tables, bars, takeaways and
                                        online orders from a single place.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature">
                                <div class="icon-container">
                                    <div class="icon">
                                        <img class="img-responsive" alt="Sync Online"
                                            src="{{ asset('assets/image/catalog/img3.png') }}" />
                                    </div>
                                </div>
                                <div class="fetaure-details">
                                    <h4 class="main-color">Sync Online</h4>
                                    <p>
                                        Instantly sync operations to ChefOnline EPoS LIVE, including
                                        menu, customer database, orders and reservations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature">
                                <div class="icon-container">
                                    <div class="icon">
                                        <img class="img-responsive" alt="Instant Billing"
                                            src="{{ asset('assets/image/catalog/img4.png') }}" />
                                    </div>
                                </div>
                                <div class="fetaure-details">
                                    <h4 class="main-color">Smart PoS Terminal</h4>
                                    <p>
                                        Get the best outlook with maximum flexibility and
                                        portability.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature">
                                <div class="icon-container">
                                    <div class="icon">
                                        <img class="img-responsive" alt="Smart POS Terminal"
                                            src="{{ asset('assets/image/catalog/img5.png') }}" />
                                    </div>
                                </div>
                                <div class="fetaure-details">
                                    <h4 class="main-color">Integrated Solutions</h4>
                                    <p>
                                        Combining smart software with robust hardware for the
                                        smoothest experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature">
                                <div class="icon-container">
                                    <div class="icon">
                                        <img class="img-responsive" alt="Integrated Solution"
                                            src="{{ asset('assets/image/catalog/img6.png') }}" />
                                    </div>
                                </div>
                                <div class="fetaure-details">
                                    <h4 class="main-color">Instant Billing</h4>
                                    <p>
                                        Get receipts of customers, bar and kitchen instantly for
                                        your restaurant and online orders.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div>
            <div class="offer-banner video parallex"
                data-source-url="{{ asset('assets/image/catalog/paralaxvideo.jpg') }}">
                <div class="container">
                    <div class="offer-banner-inner">
                        <div class="offer-banner-title">
                            ChefOnline EPoS is the smartest Electronic Point of Sale system
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="cloth-banner-outer container-outer">
                    <div class="cloth-banner-outer container-inner">

                        <h3 class="start-from">Starting from £499*</h3>

                        @foreach ($chefOnlineEpos['products'] as $index => $product)
                            @if ($loop->odd)
                                <div class="cloth-banner1">
                                    <div class="cloth1-banner1-inner">
                                        <div class="inner1">
                                            <div class="hover_content">
                                                <div class="hover_data">
                                                    <div class="title1">{{ $product['home_title'] }}</div>
                                                    <div class="title2">{{ $product['home_bold_title'] }}</div>
                                                    <div class="desc-text">
                                                        <p>{{ $product['home_description'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="image_block1">
                                                <a href="{{ route('package.detail', $product['slug']) }}"><img
                                                        src="{{ asset('assets/image/catalog/product-img4.png') }}"
                                                        alt="ChefOnline Enterprise" /></a>
                                            </div>
                                            <div class="image_block2">
                                                <a href="{{ route('package.detail', $product['slug']) }}"><img
                                                        src="{{ asset('assets/image/catalog/product-thambill4.png') }}"
                                                        alt="ChefOnline EPoS" /></a>
                                            </div>
                                            <div class="shop-now">
                                                <a href="{{ route('package.detail', $product['slug']) }}">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="cloth-banner2">
                                    <div class="cloth1-banner2-inner">
                                        <div class="inner1">
                                            <div class="image_block1">
                                                <a href="{{ route('package.detail', $product['slug']) }}"><img
                                                        src="{{ asset('assets/image/catalog/product-img2.png') }}"
                                                        alt="Pro Enterprise EPoS" /></a>
                                            </div>
                                            <div class="hover_content">
                                                <div class="hover_data">
                                                    <div class="title1">{{ $product['home_title'] }}</div>
                                                    <div class="title2">{{ $product['home_bold_title'] }}</div>
                                                    <div class="desc-text">{{ $product['home_description'] }}</div>
                                                </div>
                                            </div>
                                            <div class="image_block2">
                                                <a href="{{ route('package.detail', $product['slug']) }}"><img
                                                        src="{{ asset('assets/image/catalog/product-thambill2.png') }}"
                                                        alt="Pro Enterprise EPoS" /></a>
                                            </div>
                                            <div class="shop-now">
                                                <a href="{{ route('package.detail', $product['slug']) }}">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        {{-- <div class="cloth-banner1">
                            <div class="cloth1-banner1-inner">
                                <div class="inner1">
                                    <div class="hover_content">
                                        <div class="hover_data">
                                            <h4 class="product-price">Starting from £699*</h4>
                                            <div class="title1">ChefOnline</div>
                                            <div class="title2">EPoS</div>
                                            <div class="desc-text">
                                                Latest and most affordable<br />Electronic Point of Sale
                                                system from ChefOnline
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image_block1">
                                        <a href="#"><img src="{{ asset('assets/image/catalog/product-img4.png') }}"
                                                alt="ChefOnline Enterprise" /></a>
                                    </div>
                                    <div class="image_block2">
                                        <a href="#"><img
                                                src="{{ asset('assets/image/catalog/product-thambill4.png') }}"
                                                alt="ChefOnline EPoS" /></a>
                                    </div>
                                    <div class="shop-now">
                                        <a href="#">Get a Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cloth-banner1">
                            <div class="cloth1-banner1-inner">
                                <div class="inner1">
                                    <div class="hover_content">
                                        <div class="hover_data">
                                            <div class="title1">Enterprise EPoS</div>
                                            <div class="title2">Nino</div>
                                            <div class="desc-text">
                                                Online-integrated &amp; easy-to-use<br />Electronic
                                                Point of Sale system
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image_block1">
                                        <a href="#"><img src="{{ asset('assets/image/catalog/product-img1.png') }}"
                                                alt="ChefOnline Enterprise" /></a>
                                    </div>
                                    <div class="image_block2">
                                        <a href="#"><img
                                                src="{{ asset('assets/image/catalog/product-thambill1.png') }}"
                                                alt="ChefOnline Enterprise" /></a>
                                    </div>
                                    <div class="shop-now">
                                        <a href="#">Get a Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cloth-banner2">
                            <div class="cloth1-banner2-inner">
                                <div class="inner1">
                                    <div class="image_block1">
                                        <a href="#"><img src="{{ asset('assets/image/catalog/product-img2.png') }}"
                                                alt="Pro Enterprise EPoS" /></a>
                                    </div>
                                    <div class="hover_content">
                                        <div class="hover_data">
                                            <div class="title1">Pro Enterprise EPoS</div>
                                            <div class="title2">Yuno</div>
                                            <div class="desc-text">
                                                Robust, stylish and compact, AURES’s design<br />suits
                                                any application of the PoS vertical sectors.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image_block2">
                                        <a href="#"><img
                                                src="{{ asset('assets/image/catalog/product-thambill2.png') }}"
                                                alt="Pro Enterprise EPoS" /></a>
                                    </div>
                                    <div class="shop-now">
                                        <a href="#">Get a Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cloth-banner1">
                            <div class="cloth1-banner1-inner">
                                <div class="inner1">
                                    <div class="hover_content">
                                        <div class="hover_data">
                                            <div class="title1">Pro Enterprise EPoS</div>
                                            <div class="title2">Sango</div>
                                            <div class="desc-text">
                                                Designed to create space beneath<br />your terminal for
                                                storage!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="image_block1">
                                        <a href="#"><img src="{{ asset('assets/image/catalog/product-img3.png') }}"
                                                alt="Pro Enterprise EPoS" /></a>
                                    </div>
                                    <div class="image_block2">
                                        <a href="#"><img
                                                src="{{ asset('assets/image/catalog/product-thambill3.png') }}"
                                                alt="Pro Enterprise EPoS" /></a>
                                    </div>
                                    <div class="shop-now">
                                        <a href="#">Get a Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="vat">
                            *All prices are subject to VAT. Terms and Conditions apply.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="news-parralax">
                <div class="parallex" data-source-url="{{ asset('assets/image/catalog/parallax.jpg') }}">
                    <div class="container">
                        <div class="parallex-cms">
                            <div class="parallax-wrapper">
                                <div class="testimonial-cms">
                                    <div class="testimonials" id="testimonial">
                                        <div class="homepage-testimonial-inner">
                                            <div class="testimonial_inner">
                                                <div class="homepage-testimonials-inner products block_content">
                                                    <div class="products product-carousel" id="testimonial-carousel">
                                                        <div class="slider-item">
                                                            <div class="peoplesay-block">
                                                                <div class="test-image">
                                                                    <div class="image-block">
                                                                        <a href=""><img
                                                                                src="{{ asset('assets/image/catalog/user1.png') }}"
                                                                                alt="User" /></a>
                                                                    </div>
                                                                </div>
                                                                <div class="test-content">
                                                                    <div class="cms-box-heading">
                                                                        <a href="https://www.currypalacecottenham.com/"
                                                                            target="_blank">Curry Palace</a><span>Khasru
                                                                            Miah</span>
                                                                    </div>
                                                                    <div class="test-desc">
                                                                        <p>
                                                                            Easy to access modules to navigate through
                                                                            all the menus and options hassle free. The
                                                                            experience is pretty solid and everything
                                                                            loads way faster than I expected which I
                                                                            think is key during rush hours.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slider-item">
                                                            <div class="peoplesay-block">
                                                                <div class="test-image">
                                                                    <div class="image-block">
                                                                        <a href=""><img
                                                                                src="{{ asset('assets/image/catalog/user1.png') }}"
                                                                                alt="User" /></a>
                                                                    </div>
                                                                </div>
                                                                <div class="test-content">
                                                                    <div class="cms-box-heading">
                                                                        <a href="http://www.spice-garden.co.uk/"
                                                                            target="_blank">Spice Garden</a><span>Abdul
                                                                            Kadir</span>
                                                                    </div>
                                                                    <div class="test-desc">
                                                                        <p>
                                                                            Life in Business has become so much
                                                                            easier. I used to be someone really
                                                                            skeptical to invest in one, fearing the
                                                                            cost associated. But now that I have used
                                                                            it for a while, I don’t know how to go a
                                                                            day without EPoS.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slider-item">
                                                            <div class="peoplesay-block">
                                                                <div class="test-image">
                                                                    <div class="image-block">
                                                                        <a href=""><img
                                                                                src="{{ asset('assets/image/catalog/user1.png') }}"
                                                                                alt="User" /></a>
                                                                    </div>
                                                                </div>
                                                                <div class="test-content">
                                                                    <div class="cms-box-heading">
                                                                        <a href="http://www.cafegoa.co.uk/"
                                                                            target="_blank">Cafe Goa</a><span>Shahnoor
                                                                            Khan</span>
                                                                    </div>
                                                                    <div class="test-desc">
                                                                        <p>
                                                                            I was surprised with the prompt support as
                                                                            well as the training. Good thing they
                                                                            don’t wait for you to call for a session,
                                                                            rather insist you to get it right away. I
                                                                            would say that is needed or else I never
                                                                            would have availed one.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="slider-item">
                                                            <div class="peoplesay-block">
                                                                <div class="test-image">
                                                                    <div class="image-block">
                                                                        <a href=""><img
                                                                                src="{{ asset('assets/image/catalog/user1.png') }}"
                                                                                alt="User" /></a>
                                                                    </div>
                                                                </div>
                                                                <div class="test-content">
                                                                    <div class="cms-box-heading">
                                                                        <a href="http://www.raipurcuisine.co.uk/"
                                                                            target="_blank">Raipur Contemporary Indian
                                                                            Cuisine</a><span>Tutul Ahmed</span>
                                                                    </div>
                                                                    <div class="test-desc">
                                                                        <p>
                                                                            I availed add-ons with EPoS and was
                                                                            worried about integrating them. Support
                                                                            was kind of immediate and with the
                                                                            hands-on training I can quite maneuver the
                                                                            system. They trained my whole team which
                                                                            is fantastic.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="customNavigation">
                                                        <a class="btn prev">&nbsp;</a>
                                                        <a class="btn next">&nbsp;</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial_default_width">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div id="content" class="col-sm-12">
                    <div id="carousel-0" class="banners-slider-carousel">
                        <div class="carousel-head">
                            <div class="carousel-title">Our Clients</div>
                        </div>

                        <div class="customNavigation">
                            <a class="prev fa fa-arrow-left">&nbsp;</a>
                            <a class="next fa fa-arrow-right">&nbsp;</a>
                        </div>

                        <div id="module-0-carousel" class="product-carousel brand-carousel">
                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Raipur-Contemporary-Indian-Cuisine-BN24-130x100.jpg') }}"
                                            alt="Raipur" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/The-Spice-Garden-130x100.jpg') }}"
                                            alt="Spice Garden" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Cafe-Goa-MK45-130x100.jpg') }}"
                                            alt="Cafe Goa" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Saffron-Herts-130x100.jpg') }}"
                                            alt="Saffron" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Newent-Tandoori-130x100.jpg') }}"
                                            alt="Newent" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Spicy-Kalkata-Club-GL2-130x100.jpg') }}"
                                            alt="Spicy Kalkata" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/shahe-130x100.jpg') }}"
                                            alt="Shahe" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Jaipur-Spice-130x100.jpg') }}"
                                            alt="Jaipur Spice" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Deea-Bangladeshi-130x100.jpg') }}"
                                            alt="Deea" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Ripley-Curry-Garden-130x100.jpg') }}"
                                            alt="Ripley Curry Garden" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Curry-Master-BN21-130x100.jpg') }}"
                                            alt="Curry Master" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Paprika-Indian-Restaurant-130x100.jpg') }}"
                                            alt="Paprika" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Spice-Island-130x100.jpg') }}"
                                            alt="Spice Island" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Cinnamon-Balti-LL33-130x100.jpg') }}"
                                            alt="Cinnamon Balti" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Spice-Galleon-130x100.jpg') }}"
                                            alt="Spice Galleon" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Aroma-130x100.jpg') }}"
                                            alt="Aroma" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Curry-Palace-130x100.jpg') }}"
                                            alt="Curry Palace" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Calcutta-16-130x100.jpg') }}"
                                            alt="Calcutta 16" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/jay-raj-lu2-130x100.jpg') }}"
                                            alt="Jayraj" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/zaynab-indian-cuisine-ip9-130x100.jpg') }}"
                                            alt="Zaynab" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Asif-CR0-130x100.jpg') }}"
                                            alt="Asif" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Vantage-Indian-Restaurant-LU6-130x100.jpg') }}"
                                            alt="Vantage Indian Restaurant" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Shimla-Indian-Takeaway-BN22-130x100.jpg') }}"
                                            alt="Shimla Indian Takeaway" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/spice-fusion-130x100.jpg') }}"
                                            alt="Spice Fusion" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Curry-Garden-130x100.jpg') }}"
                                            alt="Curry Garden" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Curry-Inn-TN21-130x100.jpg') }}"
                                            alt="Curry Inn" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/The-Chatgaon-Tandoori-Ltd-130x100.jpg') }}"
                                            alt="Chatgaon Tandoori" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/sultans-130x100.jpg') }}"
                                            alt="Sultan Indian" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Red-Chilli-130x100.jpg') }}"
                                            alt="Red Chilli Indian Takeaway" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/indian-kitchen-130x100.jpg') }}"
                                            alt="Indian Kitchen" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/The-Royal-Tandoori-ME4-130x100.jpg') }}"
                                            alt="Royal Tandoori" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Dipali-Indian-Restaurant-N13-130x100.jpg') }}"
                                            alt="Dipali Indian Restaurant" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Jalpari-Tandoori-RG5-130x100.jpg') }}"
                                            alt="Jalpari" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Tajdar-BN14-130x100.jpg') }}"
                                            alt="Tajdar" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Shad-Indian-Restaurant-130x100.jpg') }}"
                                            alt="Shad Indian Restaurant" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Spice-Master-130x100.jpg') }}"
                                            alt="Spice Master Takeaway" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Spice-Kitchen-IG9-130x100.jpg') }}"
                                            alt="Spice Kitchen" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Surma-Takeaway-SG1-130x100.jpg') }}"
                                            alt="Surma Takeaway" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Hyderabad-Paradise-E12-130x100.jpg') }}"
                                            alt="Hyderabad Paradise" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Mumbai-Express-BR3-130x100.jpg') }}"
                                            alt="Mumbai Express" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Ginger-Bar-Restaurant-SG13-130x100.jpg') }}"
                                            alt="Ginger Bar &amp; Restaurant" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Hot-Chilli-Restaurant-BL7-130x100.jpg') }}"
                                            alt="Hot Chilli Restaurant" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Burgh-Heath-Eastern-Tandoori-KT20-130x100.jpg') }}"
                                            alt="Burgh Heath Tandoori" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Thaii-Fusion-130x100.jpg') }}"
                                            alt="Thaii Fusion" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Indian-Oven-130x100.jpg') }}"
                                            alt="Indian Oven" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Priti-Indian-BN21-130x100.jpg') }}"
                                            alt="Priti Indian" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Cumin-Bar-130x100.jpg') }}"
                                            alt="Cumin Bar" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/calcutta-16-bn11-130x100.jpg') }}"
                                            alt="Calcutta 16" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/hi-thai-e2-130x100.jpg') }}"
                                            alt="Hi Thai" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/zaffran-indian-cuisine-al3-130x100.jpg') }}"
                                            alt="Zaffran One Indian Cuisine" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/The-Raj-Mahal-Indian-Restaurant-KY13-130x100.jpg') }}"
                                            alt="The Raj Mahal Indian Restaurant" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Taste-Of-Nawab-N10-130x100.jpg') }}"
                                            alt="Taste of Nawab" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Asha-Indian-Restaurant-BL8-130x100.jpg') }}"
                                            alt="Asha Indian Restaurant &amp; Takeaway" />
                                    </div>

                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/Royal-Spice-TN1-130x100.jpg') }}"
                                            alt="Royal Spice" />
                                    </div>
                                </div>
                            </div>

                            <div class="slider-item">
                                <div>
                                    <div class="product-block-inner">
                                        <img src="{{ asset('assets/image/cache/catalog/haldi-indian-restaurant-rh13-130x100.jpg') }}"
                                            alt="New Haldi Indian Restaurant" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="module_default_width"></span>
                    </div>
                </div>
            </div>
            <div class="container">


                <h2>Rooms</h2>

                <?php
                // echo '<pre>';
                // print_r($chefOnlineEpos);
                // echo '</pre>';
                ?>

                <ul>
                </ul>
            </div>
        </div>
    @endsection
