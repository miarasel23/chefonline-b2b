<?php
/**
 * @package     NA Core
 * @version     0.1
 * @author      Nanogoody
 * @link        http://nanogoody.co
 * @copyright   Copyright (c) 2015 Nanogoody
 * @license     GPL v2
 */
if (!class_exists('goody_Customize')) {
    class goody_Customize
    {
        public $customizers = array();

        public $panels = array();

        public function init()
        {
            $this->customizer();
            add_action('customize_controls_enqueue_scripts', array($this, 'goody_customizer_script'));
            add_action('customize_register', array($this, 'goody_register_theme_customizer'));
            add_action('customize_register', array($this, 'remove_default_customize_section'), 20);
        }

        public static function &getInstance()
        {
            static $instance;
            if (!isset($instance)) {
                $instance = new goody_Customize();
            }
            return $instance;
        }

        protected function customizer()
        {
            $this->panels = array(

                'site_panel' => array(
                    'title'             => esc_html__('Style Setting','goody'),
                    'description'       => esc_html__('Style Setting >','goody'),
                    'priority'          =>  101,
                ),
                'sidebar_panel' => array(
                    'title'             => esc_html__('Sidebar','goody'),
                    'description'       => esc_html__('Sidebar Setting','goody'),
                    'priority'          => 103,
                ),
                'goody_option_panel' => array(
                    'title'             => esc_html__('Option','goody'),
                    'description'       => '',
                    'priority'          => 104,
                ),
            );

            $this->customizers = array(
                'title_tagline' => array(
                    'title' => esc_html__('Site Identity', 'goody'),
                    'priority'  =>  1,
                    'settings' => array(
                        'goody_logo' => array(
                            'class' => 'image',
                            'label' => esc_html__('Logo', 'goody'),
                            'description' => esc_html__('Upload Logo Image', 'goody'),
                            'priority' => 12
                        ),
                    )
                ),
//2.General ============================================================================================================
                'goody_general' => array(
                    'title' => esc_html__('General', 'goody'),
                    'description' => '',
                    'priority' => 2,
                    'settings' => array(

                        'goody_bg_body' => array(
                            'label'         => esc_html__('Background - Body', 'goody'),
                            'description'   => '',
                            'class'         => 'color',
                            'priority'      => 2,
                            'params'        => array(
                                'default'   => '',
                            ),
                        ),
                        'goody_primary_body' => array(
                            'label'         => esc_html__('Primary - Color', 'goody'),
                            'description'   => '',
                            'class'         => 'color',
                            'priority'      => 1,
                            'params'        => array(
                                'default'   => '',
                            ),
                        ),
                    )
                ),
//3.Header =============================================================================================================
                'goody_header' => array(
                    'title' => esc_html__('Header', 'goody'),
                    'description' => '',
                    'priority' => 3,
                    'settings' => array(
                        //header
                        'goody_header_heading' => array(
                            'class' => 'heading',
                            'label' => esc_html__('Header', 'goody'),
                            'priority' => 0,
                        ),

                        'goody_header' => array(
                            'class'=> 'layout',
                            'label' => esc_html__('Header Layout', 'goody'),
                            'priority' =>1,
                            'choices' => array(
                                'simple'                   => get_template_directory_uri().'/assets/images/header/default.png',
                                'center'                   => get_template_directory_uri().'/assets/images/header/center.png',
                                'left'                     => get_template_directory_uri().'/assets/images/header/left.png',

                            ),
                            'params' => array(
                                'default' => 'left',
                            ),
                        ),

                        'goody_bg_header' => array(
                            'label'         => esc_html__('Background - Header', 'goody'),
                            'description'   => '',
                            'class'         => 'color',
                            'priority'      => 5,
                            'params'        => array(
                                'default'   => '',
                            ),
                        ),

                        'goody_color_menu' => array(
                            'label'         => esc_html__('Color - Text', 'goody'),
                            'description'   => '',
                            'class'         => 'color',
                            'priority'      => 6,
                            'params'        => array(
                                'default'   => '',
                            ),
                        ),
                    )
                ),
//4.Footer =============================================================================================================
                'goody_new_section_footer' => array(
                    'title' => esc_html__('Footer', 'goody'),
                    'description' => '',
                    'priority' => 4,
                    'settings' => array(
                        'goody_footer' => array(
                            'type' => 'select',
                            'label' => esc_html__('Choose Footer Style', 'goody'),
                            'description' => '',
                            'priority' => -1,
                            'choices' => array(
                                '1'     => esc_html__('Footer 1', 'goody'),
                                '2'     => esc_html__('Footer 2', 'goody'),
                                'hidden' => esc_html__('Hidden Footer', 'goody')
                            ),
                            'params' => array(
                                'default' => '1',
                            ),
                        ),


                        'goody_enable_footer' => array(
                            'type' => 'checkbox',
                            'label' => esc_html__('Enable Footer', 'goody'),
                            'description' => '',
                            'priority' => 0,
                            'params' => array(
                                'default' => '1',
                            ),
                        ),
                        'goody_enable_copyright' => array(
                            'type' => 'checkbox',
                            'label' => esc_html__('Enable Copyright', 'goody'),
                            'description' => '',
                            'priority' => 0,
                            'params' => array(
                                'default' => '1',
                            ),
                        ),
                        'goody_copyright_text' => array(
                            'type' => 'textarea',
                            'label' => esc_html__('Footer Copyright Text', 'goody'),
                            'description' => '',
                            'priority' => 0,
                        ),

                        'goody_bg_footer' => array(
                            'label'         => esc_html__('Background - Footer', 'goody'),
                            'description'   => '',
                            'class'         => 'color',
                            'priority'      => 5,
                            'params'        => array(
                                'default'   => '',
                            ),

                        ),
                        'goody_color_footer' => array(
                            'label'         => esc_html__('Color - Text ', 'goody'),
                            'description'   => '',
                            'class'         => 'color',
                            'priority'      => 6,
                            'params'        => array(
                                'default'   => '',
                            ),

                        ),
                    )
                ),

//5.Categories Blog ====================================================================================================
                'goody_blog' => array(
                    'title' => esc_html__('Blogs Categories', 'goody'),
                    'description' => '',
                    'priority' => 5,
                    'settings' => array(

                        'goody_sidebar_cat' => array(
                            'class'         => 'layout',
                            'label'         => esc_html__('Sidebar Layout', 'goody'),
                            'priority'      =>3,
                            'choices'       => array(
                                'left'         => get_template_directory_uri().'/assets/images/left.png',
                                'right'        => get_template_directory_uri().'/assets/images/right.png',
                                'full'         => get_template_directory_uri().'/assets/images/full.png',
                            ),
                            'params' => array(
                                'default' => 'right',
                            ),
                        ),
                        'goody_siderbar_cat_info' => array(
                            'class' => 'info',
                            'label' => esc_html__('Info', 'goody'),
                            'description' => esc_html__( 'Please goto Appearance > Widgets > drop drag widget to the sidebar Article.', 'goody' ),
                            'priority' => 4,
                        ),
                        //post-layout-cat
                        'goody_title_cat_heading' => array(
                            'class' => 'heading',
                            'label' => esc_html__('Post Title Category', 'goody'),
                            'priority' =>5,
                        ),
                        'goody_post_title_heading' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Title Category ','goody'),
                            'priority' => 6,
                            'params' => array(
                                'default' => true,
                            ),
                        ),

                        'goody_post_cat_layout' => array(
                            'class' => 'heading',
                            'label' => esc_html__('Category layout', 'goody'),
                            'priority' =>8,
                        ),
                        'goody_layout_cat_content' => array(
                            'class'         => 'layout',
                            'priority'      =>9,
                            'choices'       => array(
                                'grid'        => get_template_directory_uri().'/assets/images/box-grid.jpg',
                                'grid-text'        => get_template_directory_uri().'/assets/images/box-grid-content.jpg',
                                'list'        => get_template_directory_uri().'/assets/images/box-list.jpg',
                                'grid-full'        => get_template_directory_uri().'/assets/images/box-grid-full.jpg',
                            ),
                            'params' => array(
                                'default' => 'list',
                            ),
                        ),
                        'goody_number_post_cat' => array(
                            'class' => 'slider',
                            'label' => esc_html__('Number post on a row', 'goody'),
                            'description' => '',
                            'priority' =>10,
                            'choices' => array(
                                'max' => 4,
                                'min' => 1,
                                'step' => 1
                            ),
                            'params'      => array(
                                'default' =>1
                            ),
                        ),
                        //post article content
                        'goody_post_cat_article' => array(
                            'class' => 'heading',
                            'label' => esc_html__('Post content', 'goody'),
                            'priority' =>11,
                        ),

                        //post meta
                        'goody_cat_meta' => array(
                            'class' => 'heading',
                            'label' => esc_html__('Post meta', 'goody'),
                            'priority' =>13,
                        ),
                        'goody_post_meta_share' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Share ','goody'),
                            'priority' => 14,
                            'params' => array(
                                'default' => false,
                            ),
                        ),
                        'goody_post_meta_author' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Author ','goody'),
                            'priority' => 15,
                            'params' => array(
                                'default' => true,
                            ),
                        ),
                        'goody_post_meta_date' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Date ','goody'),
                            'priority' => 16,
                            'params' => array(
                                'default' => true,
                            ),
                        ),
                        'goody_post_meta_comment' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Comment ','goody'),
                            'priority' => 17,
                            'params' => array(
                                'default' => true,
                            ),
                        ),
                        'goody_post_meta_view' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('View ','goody'),
                            'priority' => 18,
                            'params' => array(
                                'default' => true,
                            ),
                        ),
                    ),
                ),
//6.Single blog ========================================================================================================
                'goody_blog_single' => array(
                    'title' => esc_html__('Blog Single', 'goody'),
                    'description' => '',
                    'priority' => 6,
                    'settings' => array(
                        'goody_sidebar_single' => array(
                            'class'         => 'layout',
                            'label'         => esc_html__('Sidebar Layout', 'goody'),
                            'priority'      =>11,
                            'choices'       => array(
                                'left'         => get_template_directory_uri().'/assets/images/left.png',
                                'right'        => get_template_directory_uri().'/assets/images/right.png',
                                'full'         => get_template_directory_uri().'/assets/images/full.png',
                            ),
                            'params' => array(
                                'default' => 'right',
                            ),
                        ),
                        'goody_single_layout' => array(
                            'class' => 'heading',
                            'label' => esc_html__('layout-content', 'goody'),
                            'priority' =>12,
                        ),
                        'goody-layout-content-single' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('The title is at the top of the article','goody'),
                            'priority' => 13,
                            'params' => array(
                                'default' => false,
                            ),
                        ),
                        //share
                        'goody_single_share' => array(
                            'class' => 'heading',
                            'label' => esc_html__('Share', 'goody'),
                            'priority' =>19,
                        ),
                        'goody_share_facebook' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Share Facebook  ','goody'),
                            'priority' => 21,
                            'params' => array(
                                'default' => false,
                            ),
                        ),
                        'goody_share_twitter' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Share Twitter  ','goody'),
                            'priority' => 22,
                            'params' => array(
                                'default' => false,
                            ),
                        ),
                        'goody_share_google' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Share Google  ','goody'),
                            'priority' => 23,
                            'params' => array(
                                'default' => false,
                            ),
                        ),

                        'goody_share_linkedin' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Share Linkedin  ','goody'),
                            'priority' => 24,
                            'params' => array(
                                'default' => false,
                            ),
                        ),

                        'goody_share_pinterest' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Share Pinterest  ','goody'),
                            'priority' => 25,
                            'params' => array(
                                'default' => false,
                            ),
                        ),
                        //comments
                        'goody_single_comments' => array(
                            'class' => 'heading',
                            'label' => esc_html__('Comments', 'goody'),
                            'priority' =>28,
                        ),
                        'goody_comments_single_facebook' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Enable Facebook Comments ','goody'),
                            'priority' => 29,
                            'params' => array(
                                'default' => false,
                            ),
                        ),
                        'goody_comments_single' => array(
                            'type'          => 'text',
                            'label'         => esc_html__('Your app id :', 'goody'),
                            'priority'      => 30,
                            'params'        => array(
                                'default'   => '',
                            ),
                        ),
                        'goody_comments_single_info' => array(
                            'class' => 'info',
                            'label' => esc_html__('Info', 'goody'),
                            'description' => esc_html__('If you want show notification on  your facebook , please input app id ...', 'goody' ),
                            'priority' => 31,
                        ),
                    ),
                ),
//7.Adsense blog ========================================================================================================
                'goody_ads' => array(
                    'title' => esc_html__('Adsense Setting', 'goody'),
                    'description' => '',
                    'priority' => 7,
                    'settings' => array(
                        'goody_ads_leaderboard' => array(
                            'type' => 'textarea',
                            'label' => esc_html__('ADS Size: Leaderboard', 'goody'),
                            'description' => 'Add code adsbygoogle with the size is: 468x60 ,728x90, 920x180 ...',
                            'priority' => 3,
                        ),
                        'goody_heading_ads_single' => array(
                            'class' => 'heading',
                            'label' => esc_html__('Single', 'goody'),
                            'priority' =>20,
                        ),
                        'goody_ads_single_article' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Ads at the end of the article ','goody'),
                            'priority' => 21,
                            'params' => array(
                                'default' => false,
                            ),
                        ),
                        'goody_ads_single_comment' => array(
                            'class' => 'toggle',
                            'label' => esc_html__('Ads at the top of the Comment ','goody'),
                            'priority' => 21,
                            'params' => array(
                                'default' => false,
                            ),
                        ),
                    )
                ),
//Font   ===============================================================================================================
                'goody_new_section_font_size' => array(
                    'title' => esc_html__('Font', 'goody'),
                    'priority' => 8,
                    'settings' => array(
                        'goody_body_font_google' => array(
                            'type'          => 'select',
                            'label'         => esc_html__('Use Google Font', 'goody'),
                            'choices'       => goody_googlefont(),
                            'priority'      => 0,
                            'params'        => array(
                                'default'       => 'Roboto',
                            ),

                        ),
                        'goody_body_font_size' => array(
                            'class' => 'slider',
                            'label' => esc_html__('Font size ', 'goody'),
                            'description' => '',
                            'priority' =>8,
                            'choices' => array(
                                'max' => 30,
                                'min' => 10,
                                'step' => 1
                            ),
                            'params'      => array(
                                'default' => 16,
                            ),
                        ),
                    )
                ),
//Style  ===============================================================================================================


            );
        }

        public function goody_customizer_script()
        {
            // Register
            wp_enqueue_style('na-customize', get_template_directory_uri() . '/inc/customize/assets/css/customizer.css', array(),null);
            wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/inc/customize/assets/css/jquery-ui.min.css', array(),null);
            wp_enqueue_script('na-customize', get_template_directory_uri() . '/inc/customize/assets/js/customizer.js', array('jquery'), null, true);
        }

        public function add_customize($customizers) {
            $this->customizers = array_merge($this->customizers, $customizers);
        }


        public function goody_register_theme_customizer()
        {
            global $wp_customize;

            foreach ($this->customizers as $section => $section_params) {

                //add section
                $wp_customize->add_section($section, $section_params);
                if (isset($section_params['settings']) && count($section_params['settings']) > 0) {
                    foreach ($section_params['settings'] as $setting => $params) {

                        //add setting
                        $setting_params = array();
                        if (isset($params['params'])) {
                            $setting_params = $params['params'];
                            unset($params['params']);
                        }
                        $wp_customize->add_setting($setting, array_merge( array( 'sanitize_callback' => null ), $setting_params));
                        //Get class control
                        $class = 'WP_Customize_Control';
                        if (isset($params['class']) && !empty($params['class'])) {
                            $class = 'WP_Customize_' . ucfirst($params['class']) . '_Control';
                            unset($params['class']);
                        }

                        //add params section and settings
                        $params['section'] = $section;
                        $params['settings'] = $setting;

                        //add controll
                        $wp_customize->add_control(
                            new $class($wp_customize, $setting, $params)
                        );
                    }
                }
            }

            foreach($this->panels as $key => $panel){
                $wp_customize->add_panel($key, $panel);
            }

            return;
        }

        public function remove_default_customize_section()
        {
            global $wp_customize;
//            // Remove Sections
//            $wp_customize->remove_section('title_tagline');
            $wp_customize->remove_section('header_image');
            $wp_customize->remove_section('nav');
            $wp_customize->remove_section('static_front_page');
            $wp_customize->remove_section('colors');
            $wp_customize->remove_section('background_image');
        }
    }
}