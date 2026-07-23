<?php

	// Theme Version
	if ( ! function_exists( 'goody_theme_version' ) ) :
		function goody_theme_version() {
			$goody_theme = wp_get_theme(get_template());
			return $goody_theme->get('Version');
		}
	endif;

	// Theme Name
	if ( ! function_exists( 'goody_theme_name' ) ) :
		function goody_theme_name() {
			$goody_theme = wp_get_theme();
			return $goody_theme->get('Name');
		}
	endif;

	function goody_load_settings()
	{
		$settings=array(
			'home'=> array(
				'name_home'			=>esc_html__('Home', 'goody' ),
				'live_preview'		=>esc_url('http://goody.nanoagency.co/'),
				'demo_xml'			=>esc_url('http://guide.nanoagency.co'),
				'demo_image'		=>get_template_directory_uri() . '/inc/backend/assets/images/home/home1.jpg',
				'class_install'		=>esc_attr('show'),
				'class_active'		=>esc_attr('hidden'),
				'class_deactivate'	=>esc_attr('hidden')
			),
			'home-2'=> array(
				'name_home'			=>esc_html__('Home 2', 'goody' ),
				'live_preview'		=>esc_url('http://goody.nanoagency.co/home-2'),
				'demo_xml'			=>esc_url('http://guide.nanoagency.co'),
				'demo_image'		=>get_template_directory_uri() . '/inc/backend/assets/images/home/home2.jpg',
				'class_install'		=>esc_attr('show'),
				'class_active'		=>esc_attr('hidden'),
				'class_deactivate'	=>esc_attr('hidden')
			),
			'home-3'=> array(
				'name_home'			=>esc_html__('Home 3', 'goody' ),
				'live_preview'		=>esc_url('http://goody.nanoagency.co/home-3'),
				'demo_xml'			=>esc_url('http://guide.nanoagency.co'),
				'demo_image'		=>get_template_directory_uri() . '/inc/backend/assets/images/home/home3.jpg',
				'class_install'		=>esc_attr('show'),
				'class_active'		=>esc_attr('hidden'),
				'class_deactivate'	=>esc_attr('hidden')
			),
			'home-4'=> array(
				'name_home'			=>esc_html__('Home 4', 'goody' ),
				'live_preview'		=>esc_url('http://goody.nanoagency.co/home-4'),
				'demo_xml'			=>esc_url('http://guide.nanoagency.co'),
				'demo_image'		=>get_template_directory_uri() . '/inc/backend/assets/images/home/home4.jpg',
				'class_install'		=>esc_attr('show'),
				'class_active'		=>esc_attr('hidden'),
				'class_deactivate'	=>esc_attr('hidden')
			),
			'home-5'=> array(
				'name_home'			=>esc_html__('Home 5', 'goody' ),
				'live_preview'		=>esc_url('http://goody.nanoagency.co/home-5'),
				'demo_xml'			=>esc_url('http://guide.nanoagency.co'),
				'demo_image'		=>get_template_directory_uri() . '/inc/backend/assets/images/home/home5.jpg',
				'class_install'		=>esc_attr('show'),
				'class_active'		=>esc_attr('hidden'),
				'class_deactivate'	=>esc_attr('hidden')
			)
		);

		return $settings;
	}
	$goody_settings = goody_load_settings();
?>