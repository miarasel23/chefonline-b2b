<?php
if (!defined('BASE_URL')) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domainName = $_SERVER['HTTP_HOST'];
    $scriptDir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
    if (preg_match('/\/apps$/', $scriptDir)) {
        $projectDir = substr($scriptDir, 0, -5);
    } else {
        $projectDir = $scriptDir;
    }
    define('BASE_URL', $protocol . $domainName . $projectDir);
}
?>
<!DOCTYPE html>
<html lang="EN-GB" xml:lang="EN-GB">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- <meta name="description" content="ChefOnline - Restaurant management system; free online ordering, cheap mobile apps, best Epos & reservation system for restaurants."> -->
    <meta name="msvalidate.01" content="044B5B16E29E9EEC3B37057E8F524A87" />
    <title><?php echo $meta_title; ?>
    </title>
    <meta name="description" content="<?php echo $meta_desc; ?>">
    <link rel="canonical" href="<?php echo $canonical_link; ?>" />
    <link rel="shortcut icon" type="image/x-icon"
        href="<?php echo BASE_URL; ?>/assets/images/favicon.png">
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet'
        type='text/css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/font-awesome.min.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/homepage7.css" />

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/global.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/themify-icons.css" />
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css"
   /> -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/responsive.css" />

    <!--  -->

    <!--  <link href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet" /> -->
    <!--<link href="<?php echo BASE_URL; ?>/hayper/assets/css/font-awesome.min.css"
   rel="stylesheet" /> -->
    <link href="<?php echo BASE_URL; ?>/hayper/assets/css/flaticon-set.css"
        rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>/hayper/assets/css/magnific-popup.css"
        rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>/hayper/assets/css/owl.carousel.min.css"
        rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>/hayper/assets/css/owl.theme.default.min.css"
        rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>/hayper/assets/css/animate.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/themify-icons.css" />
    <!--  <link href="--><?php //echo BASE_URL;
    ?>
    <!--/hayper/assets/css/bootsnav.css" rel="stylesheet" />-->

    <!-- <link
      href="<?php echo BASE_URL; ?>/assets/css/offers.css"
   rel="stylesheet" /> -->


    <link href="<?php echo BASE_URL; ?>/hayper/style.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/hayper/assets/css/responsive.css"
        rel="stylesheet" />

    <!--  -->
    <script type="text/javascript"
        src="<?php echo BASE_URL; ?>/assets/js/jquery-1.11.3.min.js">
        </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-82222126-1', 'auto');
        ga('send', 'pageview');
    </script>



    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $meta_title; ?>" />
    <meta property="og:description" content="<?php echo $meta_desc; ?>" />
    <meta property="og:url" content="<?php echo $canonical_link; ?>" />
    <meta property="og:image" content="https://www.chefonline.com/assets/images/home-right.png" />

    <!--Twitter :card tag-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ChefOnlineUK">
    <meta name="twitter:title" content="<?php echo $meta_title; ?>" />
    <meta name="twitter:description" content="<?php echo $meta_desc; ?>" />
    <meta name="twitter:image" content="https://www.chefonline.com/assets/images/home-right.png" />


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@id": "https://www.chefonline.com/#Organization",
            "@type": "Organization",
            "name": "ChefOnline",


            "url": "https://www.chefonline.com/",
            "logo": "https://www.chefonline.com/assets/images/logo.png",
            "contactPoint": [{
                "@type": "ContactPoint",
                "telephone": ["+442035985956", "+443303801000"],
                "contactType": "Customer Service",
                "areaServed": ["UK"]
            }],
            "sameAs": [
                "https://www.facebook.com/ChefOnlinePartners/",
                "https://twitter.com/ChefOnlineUK",
                "https://www.youtube.com/channel/UCiuWjkTLdvJQ6EJECQa-7Zw",
                "https://www.linkedin.com/company/chef-online"
            ]
        }
    </script>



    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@id": "https://www.chefonline.com/#website",
            "@type": "WebSite",
            "url": "https://www.chefonline.com/",
            "name": "ChefOnline",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.chefonline.com/?search/{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>




    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@id": "https://www.chefonline.com/#webpage",
            "@type": "WebPage",
            "url": "<?php echo $canonical_link; ?>",
            "name": "ChefOnline"
        }
    </script>


    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "218A Brick Lane",
                "addressLocality": "London",
                "addressRegion": "London",
                "postalCode": "E1 6SA",
                "addressCountry": "UK"
            }
        }
    </script>
    <!-- <script type="text/javascript"> //<![CDATA[
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "https://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>-->

    <!-- Facebook Pixel Code -->
    <!--<script>
      ! function(f, b, e, v, n, t, s) {
         if (f.fbq) return;
         n = f.fbq = function() {
            n.callMethod ?
               n.callMethod.apply(n, arguments) : n.queue.push(arguments)
         };
         if (!f._fbq) f._fbq = n;
         n.push = n;
         n.loaded = !0;
         n.version = '2.0';
         n.queue = [];
         t = b.createElement(e);
         t.async = !0;
         t.src = v;
         s = b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
         'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1959549830937243');
      fbq('track', 'PageView');
   </script>-->
    <!-- End Facebook Pixel Code -->

    <meta name="facebook-domain-verification" content="sf4rwkbh0z8vic73o708b43nhh3kik" />

    <!-- Meta Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1404017030493503');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1404017030493503&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W3538QJF');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TR34QV6V');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3538QJF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TR34QV6V" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="wrapper" class="homepage homepage-1">
        <header id="header" class="header header-style-4">
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 hidden-xs logo-tab">
                            <a href="<?php echo BASE_URL; ?>" class="logo"> <img
                                    src="<?php echo BASE_URL; ?>/assets/images/logo.png"
                                    width="186" height="37" alt="ChefOnline Logo" /> </a>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 custom-nav">
                            <div class="row">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button class="navbar-toggle" type="button" data-toggle="collapse"
                                            data-target=".js-navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand hidden-sm hidden-md hidden-lg logo"
                                            href="<?php echo BASE_URL; ?>"><img
                                                class="img-responsive" width="186" height="37"
                                                src="assets/images/logo.png" alt="ChefOnline Logo" /></a>
                                    </div>

                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                        <ul class="nav navbar-nav">

                                            <li>
                                                <a href='<?php echo BASE_URL; ?>'>Home</a>
                                            </li>

                                            <!--                                 <li>-->
                                            <!--                                    <a target="_blank" href="https://chefonline.co.uk/"> ChefOnline</a>-->
                                            <!--                                 </li>-->

                                            <li class="dropdown mega-dropdown">

                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<i
                                                        class="fa fa-chevron-down"></i></a>

                                                <ul class="dropdown-menu mega-dropdown-menu row">

                                                    <li class="col-sm-6">
                                                        <ul>
                                                            <li class="dropdown-header"><a
                                                                    href="<?php echo BASE_URL; ?>/services">Services</a>
                                                            </li>
                                                            <li class="divider"></li>
                                                            <li><a
                                                                    href="<?php echo BASE_URL; ?>/online-ordering-system">
                                                                    Online Food Ordering
                                                                    System</a></li>
                                                            <li><a
                                                                    href="<?php echo BASE_URL; ?>/cloud-epos-system">
                                                                    EPoS System</a></li>
                                                            <!--<li><a href="<?php echo BASE_URL; ?>/offers">Offers</a></li>-->
                                                        </ul>
                                                    </li>

                                                    <li class="col-sm-6">
                                                        <ul>
                                                            <li class="dropdown-header hidden-xs">&nbsp;</li>
                                                            <li class="divider hidden-xs"></li>
                                                            <li><a
                                                                    href="<?php echo BASE_URL; ?>/digital-marketing">
                                                                    Digital Marketing</a></li>
                                                            <li><a
                                                                    href="<?php echo BASE_URL; ?>/print-media">
                                                                    Print Media</a></li>
                                                        </ul>
                                                    </li>

                                                </ul>

                                            </li>

                                            <!-- <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Offers
                                                    <i class="fa fa-chevron-down"></i></a>
                                                <ul class="dropdown-menu mega-dropdown-menu press-dropdown">
                                                    <li>
                                                        <a
                                                            href="<?php echo BASE_URL; ?>/offer/black-friday/2025">
                                                            Black Friday
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="<?php echo BASE_URL; ?>/offer/new-year/2024">
                                                            New Year
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="<?php echo BASE_URL; ?>/offer/valentine-offer/2025">
                                                            Valentine's offer
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li> -->


                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Press & Media
                                                    <i class="fa fa-chevron-down"></i></a>
                                                <ul class="dropdown-menu mega-dropdown-menu press-dropdown">
                                                    <li><a
                                                            href="<?php echo BASE_URL; ?>/videos">Video</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo BASE_URL; ?>/photo">Photo</a>
                                                    </li>
                                                    <li><a
                                                            href="<?php echo BASE_URL; ?>/news">News</a>
                                                    </li>
                                                </ul>
                                            </li>


                                            <li><a href="<?php echo BASE_URL; ?>/portfolio">
                                                    Portfolio </a></li>


                                            <li>
                                                <a href="https://www.chefonline.co.uk/partner"> Business
                                                    Registration</a>
                                            </li>
                                            <li>
                                                <a href="https://www.chefonline.com/associate-partners"> Partners </a>
                                            </li>

                                            <li><a href="<?php echo BASE_URL; ?>/contact">
                                                    Contact Us </a></li>

                                        </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header Ends Here -->
        </header>
        <!--header Section Ends Here -->

        <script>
            $(window).scroll(function () {
                if ($(this).scrollTop() > 200) {
                    $('#header').addClass('navbar-fixed-top');
                } else {
                    $('#header').removeClass('navbar-fixed-top');
                }

            });
        </script>