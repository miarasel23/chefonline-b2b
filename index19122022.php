<?php

error_reporting(E_ERROR | E_PARSE);

// define all the page name with proper folder path and url after domain name
$pagesNameArray = array("home", "cloud-epos-system", "services","product-new", "ecommerce-web-design", "app-development", "portfolio", "digital-marketing", "online-ordering-system", "reservation-system", "control-panel", "customer-database", "driver-tracking-system", "review-rating-system", "faq", "contact", "bespoke-website-development", "seo-services", "business-cards", "takeaway-menu-leaflet", "news-media-press", "smart-media", "smart-media-visual", "market-hub", "business-registration", "epos-registration", "about-us", "privacy-policy", "terms-conditions", "terms-of-use", "career", "career-marketing-sales", "contactform", "contactform2", "cookie-policy", "error", "print-media", "videos", "photo", "news", "budget", "offers","black-friday-offers","offer/black-friday/2022");

// associate all the page name from the $pagesNameArray with file name
$pagesArray = array(
    "home" => "home.php",
    "about" => "about.php",
    "cloud-epos-system" => "cloud-epos-system.php",
    "services" => "services.php",
    "product-new" => "product-new.php",
    "ecommerce-web-design" => "ecommerce-web-design.php",
    "app-development" => "app-development.php",
    "portfolio" => "portfolio.php",
    "digital-marketing" => "digital-marketing.php",
    "online-ordering-system" => "online-ordering-system.php",
    "reservation-system" => "reservation-system.php",
    "control-panel" => "control-panel.php",
    "customer-database" => "customer-database.php",
    "driver-tracking-system" => "driver-tracking-system.php",
    "review-rating-system" => "review-rating-system.php",
    "faq" => "faq.php",
    "contact" => "contact.php",
    "bespoke-website-development" => "bespoke-website-development.php",
    "seo-services" => "seo-services.php",
    "business-cards" => "business-cards.php",
    "takeaway-menu-leaflet" => "takeaway-menu-leaflet.php",
    // "a-la-carte-menu-design" => "a-la-carte-menu-design.php",
    "news-media-press" => "news-media-press.php",
    "smart-media" => "smart-media.php",
    "smart-media-visual" => "smart-media-visual.php",
    "market-hub" => "market-hub.php",
    "business-registration" => "business-registration.php",
    "epos-registration" => "epos-registration.php",
    "about-us" => "about-us.php",
    "privacy-policy" => "privacy-policy.php",
    "terms-conditions" => "terms-conditions.php",
    "terms-of-use" => "terms-of-use.php",
    "career" => "career.php",
    "career-marketing-sales" => "career-marketing-sales.php",
    "contactform" => "contactform.php",
    "contactform2" => "contactform2.php",
    "cookie-policy" => "cookie-policy.php",
    "error" => "error.php",
    "print-media" => "print-media.php",
    "videos" => "video.php",
    "photo" => "photo.php",
    "news" => "news.php",
    "budget" => "budget.php",
    "offers" => "offers.php",
    "black-friday-offers" => "black_friday_offers.php",
    "offer/black-friday/2022" => "offer/black-friday/2022.php"
    );

    $titleArray = array(
        "home" => "Online Restaurant System | Menu Printing UK | ChefOnline.com",
        "cloud-epos-system" => "EPoS Systems and EPoS Software Management | ChefOnline.com",
        "services" => "Services | ChefOnline.com",
        "about-us" => "About Us | Chefonline.com",
        "product-new" => "",
        "ecommerce-web-design" => "E-Commerce Website Design and Development | ChefOnline.com",
        "app-development" => "Android & iOS App Development for Mobile | ChefOnline.com",
        "portfolio" => "Our Recent Work and Portfolio | ChefOnline.com",
        "digital-marketing" => "Digital Marketing & SEO Services | ChefOnline.com",
        "online-ordering-system" => "Online Food Ordering System for Restaurant | ChefOnline.com",
        "reservation-system" => "Restaurant Table Booking Systems & Reservation Management | ChefOnline.com",
        "control-panel" => "Get the Stats & Take Control of Your Business | ChefOnline.com",
        "customer-database" => "Customer Database System Management | ChefOnline.com",
        "driver-tracking-system" => "Online Driver Tracking System | ChefOnline.com",
        "review-rating-system" => "Rating System: Customer Ratings and Reviews Solution  | ChefOnline.com",
        "faq" => "Frequently Asked Questions (FAQ) & Answers | ChefOnline.com",
        "contact" => "Contact Us | ChefOnline.com",
        "bespoke-website-development" => "Custom-built Bespoke Website Design & Development | ChefOnline.com",
        "seo-services" => "Optimize search results for rank your business | ChefOnline.com",
        "business-cards" => "Business Card Design | ChefOnline.com",
        "takeaway-menu-leaflet" => "Crisp & Colorful Takeaway Menu Leaflet | ChefOnline.com",
        // "a-la-carte-menu-design" => "A La Carte Menu Design for Restaurant or Hotel | ChefOnline.com",
        "news-media-press" => "News, Media and Press | ChefOnline.com",
        "smart-media" => "Smart Media Solutions for Your Business | ChefOnline.com",
        "smart-media-visual" => "Smart Media Solutions for Your Business | ChefOnline.com",
        "market-hub" => "Market Hub | Affiliation | ChefOnline.com",
        "business-registration" => "Business Registration Form for New Restaurant | ChefOnline.com",
        "epos-registration" => "EPoS Registration for Restaurant & Takeaway | ChefOnline.com",
        "privacy-policy" => "Your Personal Data Is Safe With Us | ChefOnline.com",
        "terms-conditions" => "Terms & Conditions | ChefOnline.com",
        "terms-of-use" => "Terms of Use | ChefOnline.com",
        "career" => "Career Opportunities | ChefOnline.com",
        "career-marketing-sales" => "Career Opportunities:Marketing & Sales | ChefOnline.com",
        "cookie-policy" => "Cookie Policy | Chefonline.com",
        "error" => "Error 404 – Page Not Found!",
        "print-media" => "Menu Design & Printing Service in UK | ChefOnline Print Media",
        "videos" => "Video | News, Media and Press | ChefOnline.com",
        "photo" => "Photo | News, Media and Press | ChefOnline.com",
        "news" => "In the News | ChefOnline.com",
        "budget" => "Budget 2021 - Detailed Analysis",
        "offers" => "Offers & Discounts | ChefOnline",
        "black-friday-offers" => "ChefOnline Black Friday Offer",
        "offer/black-friday/2022" => "ChefOnline Black Friday Offer"
    );

    $descriptionArray = array(
        "home" => "ChefOnline offers complete business solution for business owners. We provide website, marketing & sales strategies & other services to promote businesses.",
        "cloud-epos-system" => "Manage both your online deals and restaurant business at the same time now! ChefOnline offers SRS EPoS LIVE to manage your restaurant business efficiently!",
        "services" => "ChefOnline Products and Services Designed for Restaurant Businesses",
        "product-new" => "",
        "ecommerce-web-design" => "ChefOnline is one of world-class ecommerce restaurant solution. ChefOnline deliver professional, flexible and effective ecommerce solutions for small and medium business.",
        "app-development" => "What actually app do? Make life fast and easier. By developing android, ios and cross platform app we deliver the happiness to enjoy modern life.",
        "portfolio" => "ChefOnline not only design responsive & attractive websites for restaurant business but also provide needed solutions to make your business profitable. Our valuable client and their portfolio given below.",
        "digital-marketing" => "Expert digital marketing & SEO service company. Specialize in restaurant oriented businesses solution. Contact ChefOnline SEO team now !",
        "online-ordering-system" => "ChefOnline offers an online food ordering system with website, app, EPOS, and digital marketing platform helping restaurants feed their valuable customers.",
        "reservation-system" => "Reservation is vital for any restaurant business. ChefOnline provide most advanced and secure reservation system for your restaurant efficiency.",
        "control-panel" => "ChefOnline handles you the power to control your business site. Access, alter & analyse your business information using the Control Panel of your website.",
        "customer-database" => "Customer database helps restaurants or businesses to assess what their valuable customers want, providing important feedback for Restaurant or businesses.",
        "driver-tracking-system" => "Our driver tracking system is accessible via Mobile App, allows the customer to follow the restaurant order from when it leaves the kitchen right up to delivery.",
        "review-rating-system" => "People now make decisions based on reviews, so those are really important. ChefOnline offers a very effective review system that aids your business to grow.",
        "faq" => "Any kind of query for your restaurant or business you have just ask and we will surely come up with proper answers.",
        "contact" => "Do you have a question in mind? Want to know more about our services in detail? Feel free to contact us. We are always happy to help you!",
        "bespoke-website-development" => "We offer custom-built bespoke website solutions. Do you want lucrative bespoke web design & development in affordable price? Contact us for a quote.",
        "seo-services" => "Now a days SEO is the smart way to established business in giant search console. To stay for long term in search console and increase business seo services is mandatory.",
        "business-cards" => "Business cards are small but strong tool for establishing brands. We design high-quality business cards with a view to creating great first impressions!",
        "takeaway-menu-leaflet" => "Menus are important for restaurants. ChefOnline designs impressive & Optimized menus for takeaways including things people need to know about your business.",
        // "a-la-carte-menu-design" => "Get your restaurant / business online and become part of the ChefOnline community or register your business online or by calling us on 0203 598 5956.",
        "news-media-press" => "Keep up to date with all the latest events, news, media and press coverage related to ChefOnline Community.",
        "smart-media" => "ChefOnline builds online media image for your business. We design bespoke websites and visual media to highlight your business in most prominent ways.",
        "smart-media-visual" => "ChefOnline builds online media image for your business. We design bespoke websites and visual media to highlight your business in most prominent ways.",
        "market-hub" => "Looking for efficient internet/data connectivity provider? Need a good IP telephony service? We are here to help.",
        "business-registration" => "We provide best setup for restaurant business in UK. By giving full support to increase order and developed restaurant business locally. Register now for increase your business.",
        "epos-registration" => "Get your restaurant & takeaway business registered with ChefOnline EPoS! Sign up with us today by filling up the information & click on submit!",
        "about-us" => "We assure restaurant or business owners a colorful business experience/journey with us. We build layers which maximize your opportunity for businesses.",
        "privacy-policy" => "ChefOnline is committed to protect your personal data. Our well explained Privacy Policy will give you idea how we use and protect your information.",
        "terms-conditions" => "Terms and conditions for using ChefOnline are noted here.  Before you get started, you need to go through this.",
        "terms-of-use" => "Terms of use for using ChefOnline are noted here.  Before you get started, you need to go through this.",
        "career" => "We value your talent and provide means to nurture it! Join us if you're ready to take challenges and sharpen your skills!",
        "career-marketing-sales" => "Would you like to be a sales executive for ChefOnline? We're hiring now. Check the requirements and apply now.",
        "cookie-policy" => "ChefOnline applies cookie policy to make better quality of our service on the website and create browsing experience more significant.",
        "error" => "The page you are trying to reach does not exist, or has been moved. Please use the menus to find what you are looking for.",
        "print-media" => "ChefOnline Print Media provides quality Designing & Printing services in London at comprehensive prices.",
        "videos" => "Video | Keep up to date with all the latest events, news, media and press coverage related to ChefOnline Community.",
        "photo" => "Photo | Keep up to date with all the latest events, news, media and press coverage related to ChefOnline Community.",
        "news" => "News | Keep up to date with all the latest events, news, media and press coverage related to ChefOnline Community.",
        "budget" => "Budget 2021 - Detailed Analysis",
        "offers" => "Get exciting offers & discounts from ChefOnline on EPoS, SEO, SMM, and Print Media.",
        "black-friday-offers" => "Black Friday Starts Now! Enjoy our Services with the biggest sale of the year!",
        "offer/black-friday/2022" => "Black Friday Starts Now! Enjoy our Services with the biggest sale of the year!"
    );

    $canonical = array(
        "home" => "https://www.chefonline.com",
        "cloud-epos-system" => "https://www.chefonline.com/cloud-epos-system",
        "services" => "https://www.chefonline.com/services",
        "product-new" => "https://www.chefonline.com/product-new",
        "ecommerce-web-design" => "https://www.chefonline.com/ecommerce-web-design",
        "app-development" => "https://www.chefonline.com/app-development",
        "portfolio" => "https://www.chefonline.com/portfolio",
        "digital-marketing" => "https://www.chefonline.com/digital-marketing",
        "online-ordering-system" => "https://www.chefonline.com/online-ordering-system",
        "reservation-system" => "https://www.chefonline.com/reservation-system",
        "control-panel" => "https://www.chefonline.com/control-panel",
        "customer-database" => "https://www.chefonline.com/customer-database",
        "driver-tracking-system" => "https://www.chefonline.com/driver-tracking-system",
        "review-rating-system" => "https://www.chefonline.com/review-rating-system",
        "faq" => "https://www.chefonline.com/faq",
        "contact" => "https://www.chefonline.com/contact",
        "bespoke-website-development" => "https://www.chefonline.com/bespoke-website-development",
        "seo-services" => "https://www.chefonline.com/seo-services",
        "business-cards" => "https://www.chefonline.com/business-cards",
        "takeaway-menu-leaflet" => "https://www.chefonline.com/takeaway-menu-leaflet",
        // "a-la-carte-menu-design" => "https://www.chefonline.com/a-la-carte-menu-design",
        "news-media-press" => "https://www.chefonline.com/news-media-press",
        "smart-media" => "https://www.chefonline.com/smart-media",
        "smart-media-visual" => "https://www.chefonline.com/smart-media-visual",
        "market-hub" => "https://www.chefonline.com/market-hub",
        "business-registration" => "https://www.chefonline.com/business-registration",
        "epos-registration" => "https://www.chefonline.com/epos-registration",
        "about-us" => "https://www.chefonline.com/about-us",
        "privacy-policy" => "https://www.chefonline.com/privacy-policy",
        "terms-conditions" => "https://www.chefonline.com/terms-conditions",
        "terms-of-use" => "https://www.chefonline.com/terms-of-use",
        "career" => "https://www.chefonline.com/career",
        "career-marketing-sales" => "https://www.chefonline.com/career-marketing-sales",
        "cookie-policy" => "https://www.chefonline.com/cookie-policy",
        "error" => "https://www.chefonline.com",
        "print-media" => "https://www.chefonline.com/print-media",
        "videos" => "https://www.chefonline.com/videos",
        "photo" => "https://www.chefonline.com/photo",
        "news" => "https://www.chefonline.com/news",
        "budget" => "https://www.chefonline.com/budget",
        "offers" => "https://www.chefonline.com/offers",
        "black-friday-offers" => "https://www.chefonline.com/black-friday-offers",
        "offer/black-friday/2022" => "https://www.chefonline.com/offer/black-friday/2022"
    );

$urlSlug = strtok($_SERVER["REQUEST_URI"], '?');

// omitting the last slash from the url
$urlSlug = rtrim($urlSlug, "/");

// making an array of url items from the remaining url
$urlSlugArray = explode("/", $urlSlug);



if (count($urlSlugArray) > 2) {
    $slugKey = str_replace("https://www.chefonline.com/", "",$urlSlug);
	$slugKey = trim($slugKey, "/");
	
	//echo '<pre>',print_r($urlSlugArray,1);
	//echo $slugKey;
	//die();
} elseif (count($urlSlugArray) == 1) {
    $slugKey = "home";
} else {
    $slugKey = end($urlSlugArray);
}

//echo '<pre>',print_r($pagesArray,1);
//$check = !in_array($slugKey, $pagesNameArray);
//	echo $check;
	//die();

if (!in_array($slugKey, $pagesNameArray)) {
    header("Status: 404 Not Found");
    $slugKey = "error";
}

$canonical_link = $canonical[$slugKey];
$meta_title = $titleArray[$slugKey];
$meta_desc = $descriptionArray[$slugKey];
//echo $slugKey;
$page_class = $slugKey;



if ($pagesArray[$slugKey] == 'contact.php') {
    require 'header.php';
} elseif ($pagesArray[$slugKey] == 'product-new.php') {
    require 'header3.php';
} elseif ($pagesArray[$slugKey] == 'home.php') {
    require 'header3.php';
} else {
    require 'header.php';
}

	//echo '<pre>',print_r($pagesArray,1);
	//echo $pagesArray[$slugKey];
	//die();

require "view/" . $pagesArray[$slugKey];

if ($pagesArray[$slugKey] == 'contact.php') {
    require 'footer2.php';
} elseif ($pagesArray[$slugKey] == 'product-new.php') {
    require 'footer3.php';
} elseif ($pagesArray[$slugKey] == 'home.php') {
    require 'footer3.php';
} else {
    require 'footer.php';
}