
<?php if(get_theme_mod('goody_enable_footer', '1')) { ?>
    <footer id="na-footer" class="na-footer  footer-1">
        <!--    Footer top-->
        <?php if(is_active_sidebar( 'footer-1' )): ?>
        <div class="footer-top clearfix">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <?php endif; ?>
<!--    Footer bottom-->
        <div class="footer-bottom clearfix">
            <div class="container">
                <div class="container-inner">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 footer-bottom-left">
                            <?php dynamic_sidebar('copy-right'); ?>
                        </div>
                        <div class="col-md-6 col-sm-6">
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