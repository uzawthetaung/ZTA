<?php


$lms_education_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$lms_education_text_transform = get_theme_mod( 'menu_text_transform_lms_education','UPPERCASE');
    if($lms_education_text_transform == 'CAPITALISE'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='text-transform: capitalize ; font-size: 15px;';

		$lms_education_custom_css .='}';

	}else if($lms_education_text_transform == 'UPPERCASE'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='text-transform: uppercase ; font-size: 15px;';

		$lms_education_custom_css .='}';

	}else if($lms_education_text_transform == 'LOWERCASE'){

		$lms_education_custom_css .='#main-menu ul li a{';

			$lms_education_custom_css .='text-transform: lowercase ; font-size: 15px;';

		$lms_education_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$lms_education_container_width = get_theme_mod('lms_education_container_width');

		$lms_education_custom_css .='body{';

			$lms_education_custom_css .='width: '.esc_attr($lms_education_container_width).'%; margin: auto';

		$lms_education_custom_css .='}';

	/*---------------------------Slider-content-alignment-------------------*/

$lms_education_slider_content_alignment = get_theme_mod( 'lms_education_slider_content_alignment','CENTER-ALIGN');

 if($lms_education_slider_content_alignment == 'LEFT-ALIGN'){

		$lms_education_custom_css .='.content_inner_box{';

			$lms_education_custom_css .='text-align:left;';

		$lms_education_custom_css .='}';


	}else if($lms_education_slider_content_alignment == 'CENTER-ALIGN'){

		$lms_education_custom_css .='.content_inner_box{';

			$lms_education_custom_css .='text-align:center;';

		$lms_education_custom_css .='}';


	}else if($lms_education_slider_content_alignment == 'RIGHT-ALIGN'){

		$lms_education_custom_css .='.content_inner_box{';

			$lms_education_custom_css .='text-align:right;';

		$lms_education_custom_css .='}';

	}

	/*---------------------------Copyright Text alignment-------------------*/

$lms_education_copyright_text_alignment = get_theme_mod( 'lms_education_copyright_text_alignment','CENTER-ALIGN');

 if($lms_education_copyright_text_alignment == 'LEFT-ALIGN'){

		$lms_education_custom_css .='.copy-text p{';

			$lms_education_custom_css .='text-align:left;';

		$lms_education_custom_css .='}';


	}else if($lms_education_copyright_text_alignment == 'CENTER-ALIGN'){

		$lms_education_custom_css .='.copy-text p{';

			$lms_education_custom_css .='text-align:center;';

		$lms_education_custom_css .='}';


	}else if($lms_education_copyright_text_alignment == 'RIGHT-ALIGN'){

		$lms_education_custom_css .='.copy-text p{';

			$lms_education_custom_css .='text-align:right;';

		$lms_education_custom_css .='}';

	}

	/*---------------------------related Product Settings-------------------*/


$lms_education_related_product_setting = get_theme_mod('lms_education_related_product_setting',true);

	if($lms_education_related_product_setting == false){

		$lms_education_custom_css .='.related.products, .related h2{';

			$lms_education_custom_css .='display: none;';

		$lms_education_custom_css .='}';
	}

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$lms_education_scroll_top_position = get_theme_mod( 'lms_education_scroll_top_position','Right');

	if($lms_education_scroll_top_position == 'Right'){

		$lms_education_custom_css .='.scroll-up{';

			$lms_education_custom_css .='right: 20px;';

		$lms_education_custom_css .='}';

	}else if($lms_education_scroll_top_position == 'Left'){

		$lms_education_custom_css .='.scroll-up{';

			$lms_education_custom_css .='left: 20px;';

		$lms_education_custom_css .='}';

	}else if($lms_education_scroll_top_position == 'Center'){

		$lms_education_custom_css .='.scroll-up{';

			$lms_education_custom_css .='right: 50%;left: 50%;';

		$lms_education_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$lms_education_pagination_setting = get_theme_mod('lms_education_pagination_setting',true);

	if($lms_education_pagination_setting == false){

		$lms_education_custom_css .='.nav-links{';

			$lms_education_custom_css .='display: none;';

		$lms_education_custom_css .='}';
	}
