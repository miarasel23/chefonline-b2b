@extends('frontend.layouts.main')

@section('title', 'All-in-One Restaurant POS UK | ChefOnline EPoS About')
@section('description', 'ChefOnline EPoS is a real-time, all-in-one POS system for UK restaurants—boosting sales, syncing online, and simplifying operations with ease.')

@section('content')

    <body class="information-information-4 layout-1">
        @include('frontend.layouts.menu')

        <div class="content_headercms_top"></div>
        <div class="content-top-breadcum">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div id="title-content">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= Quick view JS ========= -->
        <script>
            function quickbox() {
                if ($(window).width() > 767) {
                    $('.quickview-button').magnificPopup({
                        type: 'iframe',
                        delegate: 'a',
                        preloader: true,
                        tLoading: 'Loading image #%curr%...',
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
        <div class="container">
            <div class="row">
                <div id="content" class="col-sm-12">
                    <h1 class="page-title">About Us</h1>
                    {{-- <p>
                        <img alt="About Us" style="width: 580px; float: left;"
                            src="https://www.chefonline.com/epos/image/catalog/about-us.jpg">
                    </p> --}}
                    <p>
                        <strong>ChefOnline EPoS</strong> is a fully functional, integrated and easy-to-use Electronic Point
                        of Sale system brought to you by <a target="_blank" href="https://chefonline.co.uk/">ChefOnline</a>,
                        designed to ensure that you can meet all your business needs with the ultimate ease.
                    </p>
                    <p>
                        ChefOnline EPoS System operates in real-time, managing your online restaurant business from a single
                        point of access. Our versatile and customizable technology brings to life your customer database,
                        daily PoS operations, timely sales reports and so much more — all using our secure, live server.
                        This allows you to complete any task with perfect efficiency.
                    </p>
                    <p>
                        The food industry is a high-growth and increasingly competitive sector, and the demand for better,
                        faster and smarter PoS systems are growing by the hour. Our priority is to meet this demand by
                        providing the highest quality service for large and small restaurants and takeaways across the
                        United Kingdom.
                    </p>
                    <p>
                        Through the cutting-edge technology of the ChefOnline EPoS System, you can monitor, track, and
                        integrate online portal sales, and ensure that your customers have a flawless user experience.
                        Businesses can speed their one-time sales while gaining devoted customers. Whether you have a small
                        family eatery or a towering 5-star restaurant, ChefOnline EPoS can add value to your business,
                        making it all cost-effective and hassle-free.
                    </p>
                    <p>
                        Our system is fast, easy to use and superbly efficient, needing little to no training for your staff
                        to begin operation. We integrate robust hardware and powerful software to create an experience like
                        no other.
                    </p>
                    <p>Sync instant operations (menus, customers, orders, reservations, etc.) online. Our EPoS system comes
                        with in-built, high-performance processors that bind different areas of business and promote on-time
                        deliveries, increased work efficiency, and coordination. As such, your table turnover rate increases
                        at incredible speed, and you can draw in more and more and MORE customers than ever.</p>
                    <p>ChefOnline EPoS comes in different packages and modules so you can choose the one that suits you
                        best. Then sit back and watch us work our magic!</p>
                    <p>Terms &amp; Conditions Apply.</p>
                </div>
            </div>
        </div>
        </div>
    @endsection
