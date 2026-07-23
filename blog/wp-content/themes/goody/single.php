<?php
/**
 * Single Product
 *
 * @author      NanoAgency
 * @link        http://nanoagency.co
 * @copyright   Copyright (c) 2015 NanoAgency
 * @license     GPL v2
 */
$layout=get_theme_mod('goody-layout-content-single');
if ($layout == false){
    $layout_post = 'single-1';
}else {
    $layout_post = 'single-2';
}
get_header();
?>
<div class="wrap-content <?php echo esc_attr($layout)?>" role="main">
    <div class="container">
        <div class="row">
            <?php do_action('single-sidebar-left'); ?>

            <?php do_action('single-content-before'); ?>
                <div class="content-inner">
                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();
                        get_template_part( 'templates/layout/single/content',$layout_post );
                        // If comments are open or we have at least one comment, load up the comment template.

                    endwhile;
                    ?>
                </div>
            <?php do_action('single-content-after'); ?>

            <?php do_action('single-sidebar-right'); ?>

        </div><!-- .content-area -->
    </div>
</div>
<?php get_footer(); ?>
