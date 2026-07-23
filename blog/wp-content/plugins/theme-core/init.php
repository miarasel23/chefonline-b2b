<?php
/**
 * Plugin Name: Nano Core Plugin
 * Plugin URI: http://www.nanoliberty.co
 * Description: This is not just a plugin, it is a package with many tools a website needed.
 * Author: Nanoliberty
 * Version: 1.0.0
 * Author URI: http://www.nanoliberty.co
 * Text Domain: nano
 *
*/

require_once('core-config.php');
require_once('inc/helpers/vc.php');

/*  Include Meta Box ================================================================================================ */
require_once( 'inc/meta-box/meta-box-master/meta-box.php');
require_once( 'inc/meta-box/meta-boxes.php');

/*  Include Post Format ============================================================================================= */
require_once( 'inc/vafpress-post-formats/vp-post-formats-ui.php');

/*  Importer ======================================================================================================== */
require_once( 'inc/importer/importer.php');

/*  Custom post type ================================================================================================ */
//require_once  'inc/post-types/banner.php';
//require_once  'inc/post-types/testimonial.php';

//Shortcode
require_once( 'inc/shortcode/na_blogs_featured.php');
require_once( 'inc/shortcode/na_blog.php');
require_once( 'inc/shortcode/na_blogs_top.php');
require_once( 'inc/shortcode/na_banners.php');
require_once( 'inc/shortcode/na_introduce.php');


//Include Woocommerce Custom Attribute
require_once('inc/custom-attribute/custom-attribute.php');

NANO_Custom_Atrributes::initialize();
?>