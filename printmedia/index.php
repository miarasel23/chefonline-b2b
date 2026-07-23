<?php

$pagesNameArray = array("home","cookie-policy","privacy-policy","error");

$pagesArray = array(
                        "home" => "home.php",
                        "cookie-policy" => "cookie-policy.php",
                        "privacy-policy" => "privacy-policy.php",
                        "error" => "error.php"
                    );

$titleArray = array(
                        "home" => "ChefOnline Print – Menus & Cards Printing UK | ChefOnline",
                        "cookie-policy" => "ChefOnline Print Media | Cookie Policy",
                        "privacy-policy" => "ChefOnline Print Media | Privacy Policy",
                        "error" => "Error 404 – Page Not Found!"
                    );

$descriptionArray = array(
                        "home" => "Order leaflets, business cards & menus from ChefOnline Print Media. High-quality restaurant design & printing services in London at great prices | ChefOnline",
                        "cookie-policy" => "",
                        "privacy-policy" => "",
                        "error" => "The page you are trying to reach does not exist, or has been moved. Please use the menus to find what you are looking for."
                    );

$canonical = array(
                    'home' => "https://www.chefonline.com/printmedia",
                    'cookie-policy' => "https://www.chefonline.com/printmedia/cookie-policy",
                    'privacy-policy' => "https://www.chefonline.com/printmedia/privacy-policy",
                    'error' => "https://www.chefonline.com/printmedia/"
                    );

$keywords = array(
                    'home' => "ChefOnline, Smart Restaurant Solutions, ChefOnline",
                    'cookie-policy' => "ChefOnline, Smart Restaurant Solutions, ChefOnline",
                    'privacy-policy' => "ChefOnline, Smart Restaurant Solutions, ChefOnline",
                    'error' => "ChefOnline, Smart Restaurant Solutions, ChefOnline"
                    );
                    
$urlSlug=strtok($_SERVER["REQUEST_URI"], '?');
// $urlSlug =  $_SERVER['REQUEST_URI'];
// echo $urlSlug; exit;
$urlSlug = rtrim($urlSlug, "/");
$urlSlugArray = explode("/", $urlSlug);

// echo '<pre>';
// print_r($urlSlugArray);
// echo '</pre>';

if ($urlSlugArray[1] == 'printmedia'){
        $slugKey = "home";
    } else{
       if (count($urlSlugArray) > 2) {
        header("Status: 404 Not Found");
        $slugKey = "error";
    } elseif (count($urlSlugArray) == 1) {
        $slugKey = "home";
    } else {
        $slugKey = end($urlSlugArray);
        
        if (!in_array($slugKey, $pagesNameArray)) {
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
        
require("view/".$pagesArray[$slugKey]);

require('footer.php');
