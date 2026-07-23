<?php
/**
 * The Shortcode Services
 */
function na_introduce_shortcode( $atts) {
    $atts = shortcode_atts(
        array(
            'introduce-image'            =>'',
            'sub_title'                 => 'Welcome to',
            'title'                     => 'Nano store',
            'des'                       =>'',
            'initialize'                =>'Dooodle lys',
            'after_initialize'          =>' - CEO Founder',
            'social_facebook'           =>'#',
            'social_googleplus'         =>'#',
            'social_twitter'            =>'#',
            'social_instagram'          =>'',
            'social_pinterest'          =>'',
            'social_skype'              =>''
        ), $atts );
    ob_start();
    if ( isset($atts['google_fonts']) ) {
        wp_enqueue_style( 'vc_google_fonts_' . vc_build_safe_css_class( $atts['google_fonts'] ), '//fonts.googleapis.com/css?family=' . $atts['google_fonts'] );
    }
    $css_style=array();
    $image    = wp_get_attachment_image_src( $atts['introduce-image'],'nano-introduce');
    if ( !empty( $image ) && isset($image)) {
        $css_style = 'background-image: url(\''.$image[0].'\');';
    }
    ?>
    <div class="widget widget-introduce">
        <div class="widget-content widget-introduce-content clearfix">
            <?php if($atts['sub_title']){?>
                <div class="sub-title"><?php echo esc_html($atts['sub_title']);?></div>
            <?php }?>
            <div class="row-nopadding">
                <div class="introduce-image" style="<?php echo esc_attr( $css_style );?>" ></div>
                <div class="introduce-text">
                    <h3 class="widgettitle"><?php echo esc_html($atts['title']);?></h3>
                    <div class="services-content">
                        <div class="des-services"><p><?php echo $atts['des'];?></p></div>
                        <span class="initialize"><strong><?php echo $atts['initialize'];?></strong><?php echo $atts['after_initialize'];?></span>
                        <ul class="social-about">
                            <?php if(!empty($atts['social_facebook'])){?>
                                <li><a href="<?php echo esc_html($atts['social_facebook']);?>" class="socialfa"><i class="fa fa-facebook"></i></a></li>
                            <?php } ?>
                            <?php if(!empty($atts['social_googleplus'])){?>
                                <li><a href="<?php echo esc_html($atts['social_googleplus']);?>" class="socialgo"><i class="fa fa-google-plus"></i></a></li>
                            <?php } ?>
                            <?php if(!empty($atts['social_instagram'])){?>
                                <li><a href="<?php echo esc_html($atts['social_instagram']);?>" class="socialin"><i class="fa fa-instagram"></i></a></li>
                            <?php } ?>
                            <?php if(!empty($atts['social_twitter'])){?>
                                <li><a href="<?php echo esc_html($atts['social_twitter']);?>" class="socialtw""><i class="fa fa-twitter"></i></a></li>
                            <?php } ?>
                            <?php if(!empty($atts['social_pinterest'])){?>
                                <li><a href="<?php echo esc_html($atts['social_pinterest']);?>" class="socialpi"><i class="fa fa-pinterest"></i></a></li>
                            <?php } ?>
                            <?php if(!empty($atts['social_skype'])){?>
                                <li><a href="<?php echo esc_html($atts['social_skype']);?>" class="socialsk"><i class="fa fa-skype"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.services -->

    <?php
    $output = ob_get_contents();
    ob_end_clean();

    return $output;
}

add_shortcode( 'na_introduce', 'na_introduce_shortcode' );

/**
 * The VC Functions
 */
function na_introduce_shortcode_vc() {

    vc_map(
        array(
            'icon'     => 'na-vc-introduce',
            'name'     => __( 'NA - Introduce', 'na-nano' ),
            'base'     => 'na_introduce',
            'category' => __( 'NA', 'na-nano' ),
            'description' => __('Show Introduce for shop.', 'na-nano'),
            'params'   => array(
                array(
                    'type'        => 'attach_image',
                    'heading'     => __( 'Icon Image(size default :500x314 )', 'na-nano' ),
                    'param_name'  => 'introduce-image',
                    'description' => __( 'Select images from media library.', 'na-nano' ),
                    'value'      => ''
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Sub Title', 'na-nano' ),
                    'param_name' => 'sub_title',
                    'value'      => 'Welcome to',
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Title', 'na-nano' ),
                    'param_name' => 'title',
                    'value'      => 'Nano store',
                ),
                array(
                    'type' => 'textarea',
                    'holder' => 'div',
                    'heading' => __( 'Content', 'na-nano' ),
                    'param_name' => 'des',
                    'value' =>''
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Signature', 'na-nano' ),
                    'param_name' => 'initialize',
                    'value'      => 'Dooodle lys',
                ),
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Text after Signature', 'na-nano' ),
                    'param_name' => 'after_initialize',
                    'value'      => ' - CEO Founder',
                ),


//                      ----SOCIAL----

//            facebook
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Social facebook', 'na-nano' ),
                    'param_name' => 'social_facebook',
                    'value'      => '#',
                    'edit_field_class' => 'vc_col-sm-6',
                ),
//            googleplus
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Social googleplus', 'na-nano' ),
                    'param_name' => 'social_google',
                    'value'      => '#',
                    'edit_field_class' => 'vc_col-sm-6',
                ),
//            instagram
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Social instagram', 'na-nano' ),
                    'param_name' => 'social_instagram',
                    'value'      => '#',
                    'edit_field_class' => 'vc_col-sm-6',
                ),
//           twitter
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Social twitter', 'na-nano' ),
                    'param_name' => 'social_twitter',
                    'value'      => '',
                    'edit_field_class' => 'vc_col-sm-6',
                ),
//            pinterest
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Social pinterest', 'na-nano' ),
                    'param_name' => 'social_pinterest',
                    'value'      => '',
                    'edit_field_class' => 'vc_col-sm-6',
                ),
//            skype
                array(
                    'type'       => 'textfield',
                    'heading'    => __( 'Social skype', 'na-nano' ),
                    'param_name' => 'social_skype',
                    'value'      => '',
                    'edit_field_class' => 'vc_col-sm-6',
                ),

            )
        )
    );
}

add_action( 'vc_before_init', 'na_introduce_shortcode_vc' );