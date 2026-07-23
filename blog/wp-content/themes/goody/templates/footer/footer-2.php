
<?php if(get_theme_mod('goody_enable_footer', '2')) { ?>
    <footer id="na-footer" class="na-footer  footer-2">
        <!--    Footer top-->
        <?php if(is_active_sidebar( 'footer-2-column1') ||is_active_sidebar( 'footer-2-column2') || is_active_sidebar( 'footer-2-column3') || is_active_sidebar( 'footer-2-column4')): ?>
            <div class="footer-top clearfix">
                <div class="container">
                    <div class="footer-top-inner row">
                        <div class="col-md-4"><?php dynamic_sidebar('footer-2-column1'); ?></div>
                        <div class="col-md-4"><?php dynamic_sidebar('footer-2-column2'); ?></div>
                        <div class="col-md-4"><?php dynamic_sidebar('footer-2-column3'); ?></div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!--    Footer bottom-->
        <div class="footer-bottom clearfix">
            <div class="container">
                <div class="container-inner">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="copy-right">
                                <?php if(get_theme_mod('goody_copyright_text')) {?>
                                    <span><?php echo  wp_kses_post(get_theme_mod('goody_copyright_text'));?></span>
                                <?php } else {
                                    echo '<span>'.esc_html('@ All Right Reserved ','goody').' '.date("Y").'<a href="'.esc_url('http://goody.nanoagency.co').'">'.esc_html('  Goody Theme','goody').'</a></span>';
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer><!-- .site-footer -->

<?php } ?>