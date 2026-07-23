<?php
/**
 * The template for displaying the header
 *
 * @author      NanoAgency
 * @link        http://nanoagency.co
 * @copyright   Copyright (c) 2015 NanoAgency
 * @license     GPL v2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142186121-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142186121-1');
</script>
<meta name="google-site-verification" content="Vx4tJTLUjwfKzQoSgTcULeAJdvgW_0wd0f0PtX2X9BA" />
<meta name="msvalidate.01" content="17E33B33B7B85804E29C01DD8CBBA654" />
<meta name="ahrefs-site-verification" content="02c77069d1e483f6ac5fa0fdb63e6286e8596c254defeeece9233c81dc9961ee">


	
</head>
<body <?php body_class(); ?>>
    <div class="hidden" itemscope itemtype="http://schema.org/Organization">
   <span itemprop="name">ChefOnline Blog</span>
   <span itemprop="company">ChefOnline</span>
   <span itemprop="tel">0330 380 1000</span>
</div>	
<div id="page" class="wrapper site">
    <div class="canvas-overlay"></div>
    <?php
    $layout_header = '';
    if(is_page()){
        $layout_header = get_post_meta($post->ID, 'layout_header', true);
    }
    if($layout_header == 'global' || empty($layout_header)){
        get_template_part('templates/header/header', get_theme_mod('goody_header', 'left'));
    }
    else{
        get_template_part('templates/header/header', $layout_header);
    }
    ?>
    <div id="content" class="site-content">