<?php

ob_start(function($buffer) {
    if (in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']) || strpos($_SERVER['HTTP_HOST'], 'localhost:') === 0) {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $projectDir = rtrim(str_replace('\\', '/', dirname(dirname($_SERVER['SCRIPT_NAME']))), '/');
        
        $buffer = str_replace(
            ['https://localhost', 'https://127.0.0.1', 'https://' . $_SERVER['SERVER_NAME']],
            [$protocol . $_SERVER['HTTP_HOST'] . $projectDir, $protocol . $_SERVER['HTTP_HOST'] . $projectDir, $protocol . $_SERVER['HTTP_HOST'] . $projectDir],
            $buffer
        );
    }
    return $buffer;
});

$pagesNameArray = array("home", "about-us","ios-apps","android","cross-platform","our-work","contact","cookie-policy","privacy-policy","error","trf-mega-medical-camp-bangladesh24");

$pagesArray = array(
                        "home" => "home.php", 
                        "about-us" => "about-us.php", 
                        "ios-apps" => "ios-apps.php", 
                        "android" => "android.php", 
                        "cross-platform" => "cross-platform.php", 
                        "our-work" => "our-work.php", 
                        "contact" => "contact.php",
                        "cookie-policy" => "cookie-policy.php",
                        "privacy-policy" => "privacy-policy.php",
                        "error" => "error.php",
                        "trf-mega-medical-camp-bangladesh24" => "trf-mega-medical-camp-bangladesh24.php"	
                    );

$titleArray = array(
                        "home" => "Best Mobile App Solution for Restaurants & Takeaways in UK | ChefOnline Apps",
                        "about-us" => "Smart Restaurant Solution | ChefOnline Apps",
                        "ios-apps" => "Restaurant and Takeaway Ordering Apps for IOS | ChefOnline Apps",
                        "android" => "Restaurant and Takeaway Ordering Apps for Android | ChefOnline Apps",
                        "cross-platform" => "Restaurant and Takeaway Ordering Apps for Cross Platform | ChefOnline Apps",
                        "our-work" => "Restaurant Apps Portfolio | ChefOnline Apps",
                        "contact" => "Contact | Best Restaurant App Provider in UK | ChefOnline Apps",
                        "trf-mega-medical-camp-bangladesh24" => "Trf | Medical Camp Bangladesh24 | ChefOnline Apps",	
                        "cookie-policy" => "",
                        "privacy-policy" => "",
                        "error" => ""
                    );

$descriptionArray = array(
                        "home" => "ChefOnline-Apps is the best platform provides mobile apps for online ordering system for restaurants and takeaways in UK at zero percent commission rate.",
                        "about-us" => "ChefOnline Apps is the best restaurant apps provider in United Kingdom. Try our apps to improve your restaurant business. We are Located in 218A Brick Lane, London E1 6SA",
                        "ios-apps" => "ChefOnline apps for IOS is the best option for the iPhone users to order food online from their iPhone. Make your restaurant business grow with ChefOnline IOS apps.",
                        "android" => "ChefOnline apps for Android is the best option for the users to order food online from their Android phone. Make your restaurant business grow with ChefOnline Android apps.",
                        "cross-platform" => "ChefOnline apps is the best option for Cross Platform users to order food online from their devices. Make your restaurant business grow with ChefOnline Cross Platform apps.",
                        "our-work" => "ChefOnline Apps has developed a huge number of mobile apps for numerous businesses. Review our portfolio!",
                        "contact" => "ChefOnline Apps is one of the leading apps provider companies in UK. We develop Cross-platform Apps for restaurant. Call us Today!",
                        "cookie-policy" => "",
                        "privacy-policy" => "",
                        "error" => ""
                    );

$canonical = array(
                    'home' => "https://www.chefonline.com/apps",
                    'about-us' => "https://www.chefonline.com/apps/about-us",
                    'ios-apps' => "https://www.chefonline.com/apps/ios-apps",
                    'android' => "https://www.chefonline.com/apps/android",
                    'cross-platform' => "https://www.chefonline.com/apps/cross-platform", 
                    'our-work' => "https://www.chefonline.com/apps/our-work",
                    'contact' => "https://www.chefonline.com/apps/contact",
                    'cookie-policy' => "https://www.chefonline.com/apps/cookie-policy",
                    'privacy-policy' => "https://www.chefonline.com/apps/privacy-policy",
                    'error' => "https://www.chefonline.com/apps/",
					'trf-mega-medical-camp-bangladesh24' => "https://www.chefonline.com/apps/trf-mega-medical-camp-bangladesh24"
                    );

$keywords = array(
                    'home' => "",
                    'about-us' => "",
                    'ios-apps' => "",
                    'android' => "",
                    'cross-platform' => "", 
                    'our-work' => "apps, apps portfolio, ChefOnline apps, iOS Apps, Android Apps, Cross-platform",
                    'contact' => "contact us, contact Now, contact us today, ChefOnline apps, iOS Apps, Android Apps, Cross-platform, call us today.",
                    'cookie-policy' => "",
                    'privacy-policy' => "",
                    'error' => ""
                    );

$urlSlug=strtok($_SERVER["REQUEST_URI"],'?');

// Clean up project subdirectory prefix if running on localhost
$projectDir = rtrim(str_replace('\\', '/', dirname(dirname($_SERVER['SCRIPT_NAME']))), '/');
if (!empty($projectDir) && strpos($urlSlug, $projectDir) === 0) {
    $urlSlug = substr($urlSlug, strlen($projectDir));
}

//$urlSlug =  $_SERVER['REQUEST_URI'];
$urlSlug = rtrim($urlSlug,"/");
$urlSlugArray = explode("/", $urlSlug);

// echo '<pre>';
// print_r($urlSlugArray);
// echo '</pre>';

if ($urlSlugArray[1] == 'apps') {
    if($urlSlugArray[1] == 'home') {
        $slugKey = "home";
    } elseif ($urlSlugArray[2] == 'about-us') {
        $slugKey = "about-us";
    } elseif ($urlSlugArray[2] == 'ios-apps') {
        $slugKey = "ios-apps";
    } elseif ($urlSlugArray[2] == 'android') {
        $slugKey = "android";
    } elseif ($urlSlugArray[2] == 'cross-platform') {
        $slugKey = "cross-platform";
    } elseif ($urlSlugArray[2] == 'our-work') {
        $slugKey = "our-work";
    } elseif ($urlSlugArray[2] == 'contact') {
        $slugKey = "contact";
    }  elseif ($urlSlugArray[2] == 'trf-mega-medical-camp-bangladesh24') {
        $slugKey = "trf-mega-medical-camp-bangladesh24";
    } elseif ($urlSlugArray[2] == 'cookie-policy') {
        $slugKey = "cookie-policy";
    } elseif ($urlSlugArray[2] == 'privacy-policy') {
        $slugKey = "privacy-policy";
    } elseif ($urlSlugArray[2] == 'error') {
        $slugKey = "error";
    } else {
        $slugKey = "home";
    }
} else {
    if(count($urlSlugArray) > 2) {
        header("Status: 404 Not Found");
        $slugKey = "error";
    } elseif (count($urlSlugArray) == 1) {
        $slugKey = "home";
    } else {
        $slugKey = end($urlSlugArray);
    
        if(!in_array($slugKey, $pagesNameArray)) {
            header("Status: 404 Not Found");
            $slugKey = "error";
        }
    }
}

$meta_key = $keywords[$slugKey];
$canonical_link = $canonical[$slugKey];
$meta_title=$titleArray[$slugKey];
$meta_desc=$descriptionArray[$slugKey];

//echo $slugKey;
 $page_class = $slugKey; 

require('header.php');

// echo $pagesArray[$slugKey];
// print_r($urlSlugArray);
// echo '</pre>';
        
require("view/".$pagesArray[$slugKey]);

require('footer.php');