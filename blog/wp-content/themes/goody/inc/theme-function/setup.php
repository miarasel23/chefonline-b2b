<?php
/**
 * @package     goody
 * @version     1.0
 * @author      NanoAgency
 * @link        http://www.nanoagency.co
 * @copyright   Copyright (c) 2016 NanoAgency
 * @license     GPL v2
 */

/*  Setup Theme ===================================================================================================== */
add_action( 'after_setup_theme', 'goody_theme_setup' );
if ( ! function_exists( 'goody_theme_setup' ) ) :
    function goody_theme_setup() {
        load_theme_textdomain( 'goody', get_template_directory() . '/languages' );

        //  Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        //  Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        //  Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        set_post_thumbnail_size( 825, 510, true );

        add_image_size( 'thumb-image', 600, 450, true);

        //Enable support for Post Formats.
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

        add_theme_support( 'post-formats', array(
            'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
        ) );

        add_theme_support( 'custom-header' );

        add_theme_support( 'custom-background' );

        add_theme_support( "title-tag" );

        add_theme_support( 'woocommerce' );
    }
endif;

/* Thumbnail Sizes ================================================================================================== */
set_post_thumbnail_size( 220, 150, true);
add_image_size( 'goody-blog-list',568 ,530, true);
add_image_size( 'goody-blog-grid-full',768 ,406, true);
add_image_size( 'goody-blog-grid',568 ,406, true);
add_image_size( 'goody-sidebar',120,100,true);

/* Setup Font ======================================================================================================= */
function goody_font_url() {
    $fonts_url = '';
    $opensans   = _x( 'on', 'Roboto font: on or off', 'goody' );
    $oswald     = _x( 'on', 'Oswald font: on or off', 'goody' );

    if ( 'off' !== $opensans || 'off' !== $oswald ) {
        $font_families = array();

        if ( 'off' !== $opensans) {
            $font_families[] = 'Roboto:300,300i,400,400i,500,700,900';
        }
        if ( 'off' !== $oswald ) {
            $font_families[] = 'Oswald';
        }
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }

    return esc_url_raw( $fonts_url );
}


/* Load Front-end scripts  ========================================================================================== */
add_action( 'wp_enqueue_scripts', 'goody_theme_scripts');
function goody_theme_scripts() {

    // Add  fonts, used in the main stylesheet.
    wp_enqueue_style( 'goody_fonts', goody_font_url(), array(), null );

    //style bootstrap
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '3.0.2 ');

    //style MAIN THEME
    wp_enqueue_style( 'goody-main', get_template_directory_uri(). '/style.css', array(), null );

    //style skin
    wp_enqueue_style('goody-css', get_template_directory_uri().'/assets/css/style-default.min.css' );

    //register all plugins
    wp_enqueue_script( 'plugins', get_template_directory_uri().'/assets/js/plugins.min.js', array(), null, true );
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri().'/assets/js/plugins/imagesloaded.pkgd.min.js', array(), '4.1.3', true );
    wp_enqueue_script( 'isotope', get_template_directory_uri().'/assets/js/plugins/isotope.pkgd.min.js', array(), '2.2.0', true );
    wp_enqueue_script('jquery-masonry');
    //variation form
    wp_enqueue_script( 'wc-add-to-cart-variation' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'keyboard-keyboard-image-navigation', get_template_directory_uri() . '/assets/js/keyboard-image-navigation.min.js', array( 'jquery' ), '20141010' );
    }

    //jquery MAIN THEME
    wp_enqueue_script('isotope-init', get_template_directory_uri() . '/assets/js/dev/isotope-init.js', array('jquery'),null, true);
    wp_enqueue_script('goody', get_template_directory_uri() . '/assets/js/dev/goody.js', array('jquery'),null, true);

}

/* Load Back-end SCRIPTS============================================================================================= */
function goody_js_enqueue()
{
    wp_enqueue_media();
    wp_enqueue_style('thickbox');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    // moved the js to an external file, you may want to change the path
    wp_enqueue_script('information_js',get_template_directory_uri(). '/assets/js/widget.min.js', 'jquery', '1.0', true);
    wp_enqueue_script( 'slicknav', get_template_directory_uri().'/assets/js/plugins/jquery.slicknav.min.js', array(), null, true );
}
add_action('admin_enqueue_scripts', 'goody_js_enqueue');

/* Register the required plugins    ================================================================================= */
add_action( 'tgmpa_register', 'goody_register_required_plugins' );
function goody_register_required_plugins() {

    $plugins = array(
        // This is an example of how to include a plugin pre-packaged with a theme.
        array(
            'name'      => esc_html__( 'Nano Core Plugin', 'goody' ),
            'slug'      => 'theme-core',
            'source'    => get_template_directory() . '/inc/theme-plugins/theme-core.zip',
            'required'  => true,
            'version'   => '1.0.0',
            'force_activation' => false,
            'force_deactivation' => false,
            'image_url' => get_template_directory_uri() . '/inc/backend/assets/images/plugins/nano.jpg',

        ),
        //Contact form 7
        array(
            'name'      => esc_html__('Contact Form 7', 'goody' ),
            'slug'      => 'contact-form-7',
            'required'  => false,
            'image_url' => get_template_directory_uri() . '/inc/backend/assets/images/plugins/contact-form7.jpg',
        ),
        //WPBakery Visual Composer
        array(
            'name'      =>  esc_html__('WPBakery Visual Compose', 'goody' ),
            'slug'      => 'js_composer',
            'source'    => get_template_directory() . '/inc/theme-plugins/js_composer.zip',
            'required'  => true,
            'version'   => '5.4.5',
            'image_url' => get_template_directory_uri() . '/inc/backend/assets/images/plugins/vc.jpg',
        ),
        //MailChimp for WordPress
        array(
            'name'      =>  esc_html__('MailChimp for WordPress ', 'goody' ),
            'slug'      => 'mailchimp-for-wp',
            'required'  => false,
            'image_url' => get_template_directory_uri() . '/inc/backend/assets/images/plugins/mailchimp.jpg',
        ),
        //Instagram
        array(
            'name'      =>  esc_html__('Instagram Feed', 'goody' ),
            'slug'      => 'instagram-feed',
            'required'  => false,
            'image_url' => get_template_directory_uri() . '/inc/backend/assets/images/plugins/instagram.jpg',
        ),

    );

    $config = array(
        'id'           => 'goody',                   // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                       // Default absolute path to pre-packaged plugins.
        'has_notices'  => true,
        'menu'         => 'tgmpa-install-plugins',  // Menu slug.
        'dismiss_msg'  => '',                       // If 'dismissable' is false, this message will be output at top of nag.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'is_automatic' => true,                     // Automatically activate plugins after installation or not.
        'message'      => '',                       // Message to output right before the plugins table.

    );

    tgmpa( $plugins, $config );

}

/* Register Navigation ============================================================================================== */
register_nav_menus( array(
    'primary_navigation'    => esc_html__( 'Primary Navigation', 'goody' ),

) );

/* Register Sidebar ================================================================================================= */
if ( function_exists('register_sidebar') ) {
    register_sidebar( array(
        'name'          => esc_html__( 'Archive', 'goody' ),
        'id'            => 'archive',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'goody' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Blogs', 'goody' ),
        'id'            => 'blogs',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'goody' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar1', 'goody' ),
        'id'            => 'sidebar1',
        'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'goody' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

//    footer1
    register_sidebar(array(
        'name' => esc_html__('Footer 1','goody'),
        'id'   => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
//    footer2
    register_sidebar(array(
        'name' => esc_html__('Footer 2 Column1','goody'),
        'id'   => 'footer-2-column1',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 2 Column2','goody'),
        'id'   => 'footer-2-column2',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer 2 Column3','goody'),
        'id'   => 'footer-2-column3',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Custom Header Left','goody'),
        'id'   => 'custom-header-middle',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Custom Header Social','goody'),
        'id'   => 'custom-header-social',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => esc_html__('Custom Top bar Right','goody'),
        'id'   => 'custom-topbar-right',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Custom Top bar Left','goody'),
        'id'   => 'custom-topbar-left',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => esc_html__('Custom Copy Right','goody'),
        'id'   => 'copy-right',
        'before_widget' => '<div id="%1$s" class="widget first %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}