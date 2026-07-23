<!DOCTYPE html>
<html dir="ltr" lang="EN-GB" xml:lang="EN-GB">

<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="ChefOnline EPoS" />
    <link rel="canonical" href="@yield('canonical')" />

    <script src="{{ asset('assets/javascript/jquery/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/javascript/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Poppins:400,500,300,600,700" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/stylesheet.css') }}" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/megnor/carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/megnor/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/megnor/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/megnor/lightbox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/megnor/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/stylesheet/megnor/search_suggestion.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/javascript/jquery/magnific/magnific-popup.css') }}" />
    <link href="{{ asset('assets/javascript/search_suggestion/jquery-ui.css') }}" type="text/css" rel="stylesheet"
        media="screen" />


    <link href="{{ asset('assets/javascript/search_suggestion/jquery-ui.css') }}" type="text/css" rel="stylesheet"
        media="screen" />
    <link href="{{ asset('assets/javascript/jquery/owl-carousel/owl.carousel.css') }}" type="text/css" rel="stylesheet"
        media="screen" />
    <link href="{{ asset('assets/javascript/jquery/owl-carousel/owl.transitions.css') }}" type="text/css"
        rel="stylesheet" media="screen" />

    <!-- Megnor www.templatemela.com - Start -->
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/jstree.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/megnor.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/jquery.custom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/jquery.formalize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/jquery.elevatezoom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/lightbox/lightbox-2.6.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/tabs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/jquery.bxslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/bootstrap-notify.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/jquery-migrate-1.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/doubletaptogo.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/megnor/parallex.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/javascript/jquery/magnific/jquery.magnific-popup.min.js') }}">
    </script>

    <!-- Megnor www.templatemela.com - End -->

    <script src="{{ asset('assets/javascript/common.js') }}" type="text/javascript"></script>
    <link href="{{ asset('assets/image/catalog/favicon.png') }}" rel="icon" />

    <script src="{{ asset('assets/javascript/search_suggestion/search_suggestion.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/search_suggestion/jquery-ui.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/javascript/jquery/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>

    <style>
        @yield('css')

        ;
    </style>

</head>
