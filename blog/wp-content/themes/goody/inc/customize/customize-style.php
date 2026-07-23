<?php
//////////////////////////////////////////////////////////////////
// Customizer - Add CSS
//////////////////////////////////////////////////////////////////
/**
 * Enqueues front-end CSS for the page Font.
 *
 * @since nanoagency
 *
 * @see wp_add_inline_style()
 */
add_action( 'wp_enqueue_scripts', 'goody_font_google');
function goody_font_google()
{
    $font_family = get_theme_mod('goody_body_font_google', 'Roboto');
    if ($font_family != 'Roboto') {
        $query_args = array(
            'family' => urlencode($font_family),
            'subset' => urlencode('latin,latin-ext'),
        );
        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
        $goody_google_font = esc_url_raw($fonts_url);
        wp_enqueue_style('goody-fonts-customize', $goody_google_font, array(), null);
    }
}

function goody_body_font_family() {
    $default_font         = 'Roboto';
    $font_family   = get_theme_mod('goody_body_font_google',$default_font);

    // Don't do anything if the current color is the default.
    if ( $font_family === $default_font ) {
        return;
    }

    $css = '
		/* Custom  Font size */
		body {
            font-family: %1$s;
		}
	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $font_family ) );
}
add_action( 'wp_enqueue_scripts', 'goody_body_font_family', 11 );

function goody_body_font_size() {
    $default_font         = '14';
    $goody_body_font_size   = get_theme_mod('goody_body_font_size',$default_font);
    // Don't do anything if the current color is the default.
    if ( $goody_body_font_size === $default_font ) {
        return;
    }

    $css = '
		/* Custom  Font size */
		body ,.entry-content {
            font-size: %1$spx;
		}
	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_body_font_size ) );
}
add_action( 'wp_enqueue_scripts', 'goody_body_font_size', 12 );

function goody_menu_font_size() {
    $default_font         = '14';
    $goody_menu_font_size   = get_theme_mod('goody_menu_font_size',$default_font);
    // Don't do anything if the current color is the default.
    if ( $goody_menu_font_size === $default_font ) {
        return;
    }

    $css = '
		/* Custom  Font size */
		#na-menu-primary .na-menu > li a {
            font-size: %1$spx;
		}
	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_menu_font_size ) );
}
add_action( 'wp_enqueue_scripts', 'goody_menu_font_size', 13 );

function goody_color_footer() {
    $default         = '';
    $goody_color_footer       = get_theme_mod('goody_color_footer',$default);

    // Don't do anything if the current color is the default.
    if ( $goody_color_footer === $default ) {
        return;
    }

    $css = '
		/* Custom  color title  */
        #na-footer .widgettitle,#na-footer ul li,#na-footer ul li a,#na-footer ul li b,[class*="ion-social-"],#na-footer,#na-footer .footer-bottom .coppy-right a
		{
		    color:%1$s;
		}
		[class*="ion-social-"]{
		    border-color:%1$s;
		}

	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_color_footer ) );
}
add_action( 'wp_enqueue_scripts', 'goody_color_footer', 23 );

function goody_bg_footer() {
    $default         = '';
    $goody_bg_footer       = get_theme_mod('goody_bg_footer',$default);

    // Don't do anything if the current color is the default.
    if ( $goody_bg_footer === $default ) {
        return;
    }

    $css = '
		/* Custom  color title  */
        #na-footer,#na-footer .footer-bottom,#na-footer .footer-center
		{
		    background:%1$s;
		}

	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_bg_footer ) );
}
add_action( 'wp_enqueue_scripts', 'goody_bg_footer', 24 );

function goody_color_topbar() {
    $default         = '';
    $goody_color_topbar       = get_theme_mod('goody_color_topbar',$default);

    // Don't do anything if the current color is the default.
    if ( $goody_color_topbar === $default ) {
        return;
    }

    $css = '
		/* Custom  color title  */
        .wrap-select-currency::after,
        .wrap-select-country::after,
        #goody-top-navbar,
        #goody-top-navbar .topbar-left a,
        #goody-top-navbar a,
        .currency_switcher .woocommerce-currency-switcher-form .dd-selected-text,
        .currency_switcher .woocommerce-currency-switcher-form .dd-option-text
		{
		    color:%1$s;
		}

	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_color_topbar ) );
}
add_action( 'wp_enqueue_scripts', 'goody_color_topbar', 25 );

function goody_bg_topbar() {
    $default         = '';
    $goody_bg_topbar       = get_theme_mod('goody_bg_topbar',$default);

    // Don't do anything if the current color is the default.
    if ( $goody_bg_topbar === $default ) {
        return;
    }

    $css = '
		/* Custom  color title  */
		#goody-top-navbar{
		    background:%1$s;
		}

	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_bg_topbar ) );
}
add_action( 'wp_enqueue_scripts', 'goody_bg_topbar', 25 );

function goody_bg_header() {
    $default         = '';
    $goody_bg_header       = get_theme_mod('goody_bg_header',$default);

    // Don't do anything if the current color is the default.
    if ( $goody_bg_header === $default ) {
        return;
    }

    $css = '
		/* Custom  color title  */
		#goody-header,.header-drawer #goody-header,.header-content-menu{
		    background:%1$s;
		}

	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_bg_header ) );
}
add_action( 'wp_enqueue_scripts', 'goody_bg_header', 26 );

function goody_color_menu() {
    $default         = '';
    $goody_color_menu       = get_theme_mod('goody_color_menu',$default);

    // Don't do anything if the current color is the default.
    if ( $goody_color_menu === $default ) {
        return;
    }

    $css = '
		/* Custom  color title  */
		.menu-drawer #na-menu-primary ul.mega-menu > li > a,
		#na-menu-primary ul > li[class*="-has-children"] > a::before,
		.menu-drawer #na-menu-primary ul > li[class*="-has-children"] > a::before,
		.btn-mini-search, .na-cart .icon-cart,
		.goody_icon-bar,
        #na-menu-primary ul.mega-menu > li > a
		{
		    color:%1$s;
		}

	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_color_menu ) );
}
add_action( 'wp_enqueue_scripts', 'goody_color_menu', 27 );


function goody_body_background() {
    $default         = '';
    $goody_bg_body       = get_theme_mod('goody_bg_body',$default);

    // Don't do anything if the current color is the default.
    if ( $goody_bg_body === $default ) {
        return;
    }

    $css = '
		/* Custom  color title  */
		body{
		    background:%1$s;
		}

	';
    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_bg_body ) );
}
add_action( 'wp_enqueue_scripts', 'goody_body_background', 28 );

/**
 * Enqueues front-end CSS for the Primary  Color .
 *
 * @since goody
 *
 * @see wp_add_inline_style()
 */

function goody_primary_body() {
    $default         = '';
    $goody_primary_color       = get_theme_mod('goody_primary_body',$default);

    // Don't do anything if the current color is the default.
    if ( $goody_primary_color === $default ) {
        return;
    }

    $css = '
        .btn-outline .badge,
        .btn-inverse,
        .btn-inverse:hover, .btn-inverse:focus, .btn-inverse:active, .btn-inverse.active,
        .open .btn-inverse.dropdown-toggle,
        .btn-inverse.disabled, .btn-inverse.disabled:hover, .btn-inverse.disabled:focus, .btn-inverse.disabled:active, .btn-inverse.disabled.active, .btn-inverse[disabled], .btn-inverse[disabled]:hover, .btn-inverse[disabled]:focus, .btn-inverse[disabled]:active, .btn-inverse[disabled].active, fieldset[disabled] .btn-inverse, fieldset[disabled] .btn-inverse:hover, fieldset[disabled] .btn-inverse:focus, fieldset[disabled] .btn-inverse:active, fieldset[disabled] .btn-inverse.active,
        .btn-varian,
        .button:hover, .button:focus, .button:active, .button.active ,
        .open .button.dropdown-toggle,
        .button.single_add_to_cart_button:hover, .button.single_add_to_cart_button:focus, .button.single_add_to_cart_button:active, .button.single_add_to_cart_button.active ,
        .page-content .vc_btn3.vc_btn3-style-custom ,
        .page-content .vc_btn3.vc_btn3-style-custom:hover, .page-content .vc_btn3.vc_btn3-style-custom:focus, .page-content .vc_btn3.vc_btn3-style-custom:active, .page-content .vc_btn3.vc_btn3-style-custom.active ,
        .add_to_cart_button .badge, .button.product_type_simple .badge ,
        .added_to_cart .badge,
        #loadmore-button:hover,
        .yith-wcwl-wishlistexistsbrowse a:after ,
        .quick-view a ,
        .btn-checkout ,
        .btn-order,
        .slick-prev:hover,
        .slick-next:hover,
        .na-cart .icon-cart .mini-cart-items,
        #cart-panel-loader > *:before,
        #calendar_wrap #today ,
        .expand-icon:hover::after, .expand-icon:hover::before,
        .goody_icon:hover .goody_icon-bar,
        .scrollup:hover,
        .product-image.loading::before,
        .widget_layered_nav ul li.chosen > a:before, .widget_layered_nav_filters ul li.chosen > a:before,
        .widget_layered_nav ul li a:hover:before, .widget_layered_nav_filters ul li a:hover:before,
        .onsale,
        .list-view .add_to_cart_button,
        .list-view .add_to_cart_button:hover, .list-view .add_to_cart_button:focus,
        .product-detail-wrap .product-nav .fa:hover,
        .variations_form.cart .att_label:hover, .variations_form.cart .att_label.selected,
        .blog-recent-post .na-grid .bg_gradients > a ,
        .box-list .link-more a:hover,
        .post-format .ti-control-play:hover, .post-format .ti-camera:hover, .post-format .ti-headphone:hover, .post-format .ti-quote-left:hover,
        div.affect-border:before, div.affect-border:after,
        div.affect-border-inner:before,
        div.affect-border-inner:after,
        .nano > .nano-pane > .nano-slider,
        .btn-primary,.btn-primary:hover,
        .entry_pagination .page-numbers:hover i,
        .wrapper-filter .cat-item:hover,.wrapper-filter li.active .cat-item,
        .btn-variant:hover, .btn-variant:focus, .btn-variant:active, .btn-variant.active,
        a.readmore:hover,.navigation span.current,.navigation a:hover,
         .sidebar .newsletters .btn-newsletter:hover,
         .sidebar .newsletters input[type="submit"]:hover,#loadMore, #loadMoreCat,input[type="submit"]
        {
            background-color: %1$s;
        }

        .link:hover,
        a:hover, a:focus,
        .tags-list a:hover, .tagcloud a:hover,
        .btn-outline,
        .btn-outline:hover, .btn-outline:focus, .btn-outline:active, .btn-outline.active,
        .open .btn-outline.dropdown-toggle,
        .btn-inverse .badge,
        .btn-variant .badge,
        .add_to_cart_button, .button.product_type_simple,
        .add_to_cart_button:hover, .add_to_cart_button:focus, .add_to_cart_button:active, .add_to_cart_button.active, .button.product_type_simple:hover, .button.product_type_simple:focus, .button.product_type_simple:active, .button.product_type_simple.active,
        .open .add_to_cart_button.dropdown-toggle, .open .button.product_type_simple.dropdown-toggle,
        .added_to_cart,
        .added_to_cart:hover, .added_to_cart:focus, .added_to_cart:active, .added_to_cart.active,
        .open .added_to_cart.dropdown-toggle,
        .nav-tabs > li.active > a ,
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus,
        .na-filter-wrap #na-filter .widget .na-ajax-load a:hover ,
        .na-filter-wrap .chosen,
        .na-filter-wrap .na-remove-attribute,
        .btn-mini-search:hover,
        #na-menu-primary ul.mega-menu > li > a:hover, #na-menu-primary ul.mega-menu > li > a:focus,
        #na-menu-primary ul.mega-menu > li[class*="mega-current-"] > a,
        #na-menu-primary ul.mega-menu > li[class*="mega-current-"] > a:before,
        #na-menu-primary ul > li:hover[class*="-has-children"] > a:before ,
        #na-menu-primary ul > li > a:hover, #na-menu-primary ul > li > a:focus,
        #na-menu-primary ul > li > ul li[class*="-has-children"]:hover:after,
        #na-menu-primary .product-details a:hover ,
        #na-top-navbar #language-switch ul > li span:hover,
        .currency_switcher .woocommerce-currency-switcher-form .dd-selected-text:hover, .currency_switcher .woocommerce-currency-switcher-form .dd-option-text:hover,
        #cart-panel-loader > *:before,
        .cart-header .close:hover ,
        .woocommerce-tabs li.resp-tab-item.active,
        .woocommerce-tabs li.resp-tab-item.active a ,
        .woocommerce-tabs .resp-tabs-list li a:hover,
        .alert a,
        .share-links .count-share:hover ,
        .share-links .count-share i,
        #sb_instagram #sbi_load .fa, #sb_instagram .sbi_follow_btn .fa,
        .menu-drawer #na-menu-primary ul.mega-menu > li > a:hover,
        .menu-vertical #na-menu-primary ul.mega-menu > li > a:hover,
        .sidebar a:hover,
        .sidebar ul li.current-cat > a,
        .sidebar #recentcomments li > a,
        #na-footer .footer-bottom .coppy-right a:hover ,
        .page-cart .product-name a,
        .contact .fa,
        .woocommerce-thankyou-order-received:before,
        .woocommerce #content table.wishlist_table.cart a.remove:hover,
        #goody-quickview .price,
        .product-image.loading::after,
        .product-image.loading::before ,
        .is-active > a,
        #goody-top-navbar a:hover, #goody-top-navbar a:focus ,
        #goody-top-navbar .topbar-left a:hover,
        #na-footer ul li a:hover ,
        .widget_layered_nav ul li.chosen, .widget_layered_nav_filters ul li.chosen,
        .widget_layered_nav ul li.chosen > a, .widget_layered_nav_filters ul li.chosen > a,
        .widget_layered_nav ul li:hover .count, .widget_layered_nav_filters ul li:hover .count ,
        .widget.recent_blog .entry-title a:hover,
        .name a:hover ,
        .price,
        .price ins,
        .list-view .price,
        .product-detail-wrap .price,
        .product-detail-wrap .product_meta > * span:hover, .product-detail-wrap .product_meta > * a:hover,
        .cart .quantity .input-group-addon:hover ,
        .woocommerce-tabs #reviews .bypostauthor .comment-text .meta > strong,
        .sidebar .widget_tabs_post .widget-title li.active a,
        .sidebar .widget_tabs_post .widget-title li a:hover, .sidebar .widget_tabs_post .widget-title li a:focus, .sidebar .widget_tabs_post .widget-title li a:active ,
        .widget.about .goody-social-icon a:hover,
        .widget-product .group-title .link-cat:hover,
        .post-list .entry-header .posted-on a:hover,
        .post-list .author strong:hover,
        .box-list .name-category,
        .box-list .name-category > a,
        .post-cat ,
        .post-cat a ,
        .entry-title > a:hover,
        .entry-avatar .author-title,
        .entry-avatar .author-link,
        .post-comment .fa,
        #comments .text-user > a,
        .post-related .author-link:hover,
        .item-related .post-title > a:hover ,
        .entry_pagination .pagination .fa,
        .entry_pagination .pagination .page-numbers:hover .fa ,
        .entry_pagination .page-numbers i,
        .entry_pagination .page-numbers:hover ,
        .entry_pagination .page-numbers .btn-prev,
        .entry_pagination .page-numbers .btn-next,
        .entry-content a,
        .pagination .current,.post-list .article-meta a:hover,.pagination .nav-links a:hover,
        .wrapper-filter .cat-item,
        .newsletters .btn-newsletter,
        .post-grid .article-meta a:hover,
        .slick-dots li.slick-active button::before,
        .slick-dots li button::before,.newsletters input[type="submit"],.goody_social a:hover,
        .goody_social a:hover i,.na-banners .content .bannertitle a,.entry-avatar .author-link:hover,.tags-wrap .tags a:hover,
        .slider-blog .post-list .entry-title > a:hover
        {
          color: %1$s;
        }

       .btn-outline,
        .btn-outline:hover, .btn-outline:focus, .btn-outline:active, .btn-outline.active,
        .open .btn-outline.dropdown-toggle,
        .btn-outline.disabled, .btn-outline.disabled:hover, .btn-outline.disabled:focus, .btn-outline.disabled:active, .btn-outline.disabled.active, .btn-outline[disabled], .btn-outline[disabled]:hover, .btn-outline[disabled]:focus, .btn-outline[disabled]:active, .btn-outline[disabled].active, fieldset[disabled] .btn-outline, fieldset[disabled] .btn-outline:hover, fieldset[disabled] .btn-outline:focus, fieldset[disabled] .btn-outline:active, fieldset[disabled] .btn-outline.active,
        .btn-inverse,
        .btn-inverse:hover, .btn-inverse:focus, .btn-inverse:active, .btn-inverse.active,
        .open .btn-inverse.dropdown-toggle,
        .button:hover, .button:focus, .button:active, .button.active ,
        .open .button.dropdown-toggle,
        .form-control:focus,
        .searchform .form-control:focus, .woocommerce-product-search .form-control:focus,
        .page-links span.page-numbers:hover ,
        .list-view .add_to_cart_button,
        .list-view .add_to_cart_button:hover, .list-view .add_to_cart_button:focus,
        #loadmore-button:hover,
        .button.single_add_to_cart_button:hover, .button.single_add_to_cart_button:focus, .button.single_add_to_cart_button:active, .button.single_add_to_cart_button.active,
        .page-content .vc_btn3.vc_btn3-style-custom,
        .page-content .vc_btn3.vc_btn3-style-custom:hover, .page-content .vc_btn3.vc_btn3-style-custom:focus, .page-content .vc_btn3.vc_btn3-style-custom:active, .page-content .vc_btn3.vc_btn3-style-custom.active,
        .btn-checkout ,
        .btn-order,
        .woocommerce-tabs li.resp-tab-item.active,
        .product-block.border:hover ,
        .variations_form.cart .att_img:hover > img, .variations_form.cart .att_img.selected > img,
        .post-format .ti-control-play:hover, .post-format .ti-camera:hover, .post-format .ti-headphone:hover, .post-format .ti-quote-left:hover,
        blockquote,.btn-primary,
        .btn-variant:hover, .btn-variant:focus, .btn-variant:active, .btn-variant.active,
        a.readmore:hover,.widgettitle::after,.navigation span.current,.navigation a:hover,
        .sidebar .widget_tabs_post .widget-title li.active a::after, .sidebar .widget_most_views .widget-title li.active a::after,
        .widget.about .goody-social-icon a:hover,.wrapper-filter li .cat-item,.wrapper-filter li:hover .cat-item,input[type="submit"]
        {
          border-color: %1$s;
        }

	';

    wp_add_inline_style( 'goody-css', sprintf( $css, $goody_primary_color ) );
}
add_action( 'wp_enqueue_scripts', 'goody_primary_body', 29 );
?>