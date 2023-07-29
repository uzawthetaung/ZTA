<?php 

	$computer_repair_shop_custom_style = '';

	// Logo Size
	$computer_repair_shop_logo_top_padding = get_theme_mod('computer_repair_shop_logo_top_padding');
	$computer_repair_shop_logo_bottom_padding = get_theme_mod('computer_repair_shop_logo_bottom_padding');
	$computer_repair_shop_logo_left_padding = get_theme_mod('computer_repair_shop_logo_left_padding');
	$computer_repair_shop_logo_right_padding = get_theme_mod('computer_repair_shop_logo_right_padding');

	if( $computer_repair_shop_logo_top_padding != '' || $computer_repair_shop_logo_bottom_padding != '' || $computer_repair_shop_logo_left_padding != '' || $computer_repair_shop_logo_right_padding != ''){
		$computer_repair_shop_custom_style .=' .logo {';
			$computer_repair_shop_custom_style .=' padding-top: '.esc_attr($computer_repair_shop_logo_top_padding).'px; padding-bottom: '.esc_attr($computer_repair_shop_logo_bottom_padding).'px; padding-left: '.esc_attr($computer_repair_shop_logo_left_padding).'px; padding-right: '.esc_attr($computer_repair_shop_logo_right_padding).'px;';
		$computer_repair_shop_custom_style .=' }';
	}

	// Site Title color
	$computer_repair_shop_site_title_color = get_theme_mod('computer_repair_shop_site_title_color');
	if ( $computer_repair_shop_site_title_color != '') {
		$computer_repair_shop_custom_style .=' h1.site-title a, p.site-title a {';
			$computer_repair_shop_custom_style .=' color:'.esc_attr($computer_repair_shop_site_title_color).';';
		$computer_repair_shop_custom_style .=' }';
	}

	// Site Tagline color
	$computer_repair_shop_site_tagline_color = get_theme_mod('computer_repair_shop_site_tagline_color');
	if ( $computer_repair_shop_site_tagline_color != '') {
		$computer_repair_shop_custom_style .=' p.site-description {';
			$computer_repair_shop_custom_style .=' color:'.esc_attr($computer_repair_shop_site_tagline_color).';';
		$computer_repair_shop_custom_style .=' }';
	}

	// Header Image
	$header_image_url = computer_repair_shop_banner_image( $image_url = '' );
	if( $header_image_url != ''){
		$computer_repair_shop_custom_style .=' #inner-pages-header {';
			$computer_repair_shop_custom_style .=' background-image: url('. esc_url( $header_image_url ).'); background-size: cover; background-repeat: no-repeat;';
		$computer_repair_shop_custom_style .=' }';
		$computer_repair_shop_custom_style .=' .header-overlay {';
			$computer_repair_shop_custom_style .=' position: absolute; 	width: 100%; height: 100%; 	top: 0; left: 0; background: #000; opacity: 0.3;';
		$computer_repair_shop_custom_style .=' }';
	} else {
		$computer_repair_shop_custom_style .=' #inner-pages-header {';
			$computer_repair_shop_custom_style .=' background:linear-gradient(0deg,#ccc,#0a0607 80%) no-repeat; ';
		$computer_repair_shop_custom_style .=' }';
	}

	$computer_repair_shop_headerbg_color = get_theme_mod('computer_repair_shop_headerbg_color');
	if ( $computer_repair_shop_headerbg_color != '') {
		$computer_repair_shop_custom_style .=' .topbar {';
			$computer_repair_shop_custom_style .=' background-color:'.esc_attr($computer_repair_shop_headerbg_color).';';
		$computer_repair_shop_custom_style .=' }';
	}

	$computer_repair_shop_slider_hide_show = get_theme_mod('computer_repair_shop_slider_hide_show',false);
	if( $computer_repair_shop_slider_hide_show == true){
		$computer_repair_shop_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$computer_repair_shop_custom_style .=' display:none;';
		$computer_repair_shop_custom_style .=' }';
	}

	// Copyright padding
	$computer_repair_shop_copyright_padding = get_theme_mod('computer_repair_shop_copyright_padding');
	if( $computer_repair_shop_copyright_padding != ''){
		$computer_repair_shop_custom_style .=' .site-info {';
			$computer_repair_shop_custom_style .=' padding-top: '.esc_attr($computer_repair_shop_copyright_padding).'px; padding-bottom: '.esc_attr($computer_repair_shop_copyright_padding).'px;';
		$computer_repair_shop_custom_style .=' }';
	}
	// Slider color
	$computer_repair_shop_slider_color = get_theme_mod('computer_repair_shop_slider_color');
	if ( $computer_repair_shop_slider_color != '') {
		$computer_repair_shop_custom_style .=' #slider h2 a, #slider p {';
			$computer_repair_shop_custom_style .=' color:'.esc_attr($computer_repair_shop_slider_color).';';
		$computer_repair_shop_custom_style .=' }';
	}

	// Service color
	$computer_repair_shop_service_color = get_theme_mod('computer_repair_shop_service_color');
	if ( $computer_repair_shop_service_color != '') {
		$computer_repair_shop_custom_style .=' .service-box h4 a,.service-content .read-btn a {';
			$computer_repair_shop_custom_style .=' color:'.esc_attr($computer_repair_shop_service_color).';';
		$computer_repair_shop_custom_style .=' }';
	}