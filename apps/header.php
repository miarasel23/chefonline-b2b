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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <meta name="msvalidate.01" content="17E33B33B7B85804E29C01DD8CBBA654" />
    <meta name="description" content="<?php echo $meta_desc; ?>">
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="keywords" content="<?php echo $meta_key; ?>">
    <link rel="canonical" href="<?php echo $canonical_link;?>" />
    <link href="<?php echo BASE_URL; ?>/apps/images/favicon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet"> 
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $meta_title; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo BASE_URL; ?>/apps/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/apps/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/apps/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/apps/css/animate.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/apps/css/toastr.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/apps/css/style.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/apps/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86296227-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@id": "https://www.srs-apps.co.uk/#Organization",
    "@type": "Organization",
    "name": "SRS Apps",
    
          
    "url": "https://www.srs-apps.co.uk/",
    "logo": "https://www.srs-apps.co.uk/images/black-logo.png",
    "contactPoint": [
      {
        "@type": "ContactPoint",
        "telephone": "+442035985956",
        "telephone": "+443303801000",
        "contactType": "Customer Service",
        "areaServed": [ "UK" ]
      }
    ],
    "sameAs": [
      "https://www.facebook.com/srsapps",
      "https://twitter.com/SRS_ChefOnline",
      "https://www.youtube.com/channel/UCXHCWYuAMOeYSPrvF8x0kSw",
      "https://www.linkedin.com/company/chef-online"
    ]
  }
</script>



<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@id": "https://www.srs-apps.co.uk/#website",
    "@type": "WebSite",
    "url": "https://www.srs-apps.co.uk/",
    "name": "SRS Apps",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://www.srs-apps.co.uk/?search/{search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
</script>




<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@id": "https://www.srs-apps.co.uk/#webpage",
    "@type": "WebPage",
    "url": "<?php echo $canonical_link;?>",
    "name": "SRS SEO"
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
        "addressCountry":"UK"
  } 
}
</script>
<!-- SSl Start -->
<script type="text/javascript"> //<![CDATA[ 
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
  </head>
  <body>
    <header id="header" class="navbar-fixed-top">
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>/apps">
            <img class="img-responsive white-logo" src="<?php echo BASE_URL; ?>/apps/images/white-logo.png" alt="SRS Apps Logo">
            <img class="img-responsive black-logo" src="<?php echo BASE_URL; ?>/apps/images/black-logo.png" alt="SRS Apps Logo">
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo BASE_URL; ?>/apps">Home</a></li>
              <li><a href="about-us">About Us</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Service <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="ios-apps">iOS Apps</a></li>
                  <li><a href="android">Android Apps</a></li>
                  <li><a href="cross-platform">Cross-Platform</a></li>
                </ul>
              </li>
              <li><a href="our-work">Our Work</a></li>
              <li><a href="contact">Contact Us</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header><!-- /header -->