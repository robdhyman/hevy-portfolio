<?php

// -----------------------------------------
// semplice
// admin/atts/modules/portfoliogrid.php
// -----------------------------------------

$portfoliogrid = array(
	'options' => array(
		'title'  	 => 'Options',
		'hide-title' => true,
		'break'		 => '1,1,2,1',
		'masonry' => array(
			'data-input-type' 	=> 'button',
			'title'		 		=> 'Preview',
			'button-title'		=> 'Apply grid changes',
			'help'				=> 'If you are happy with your settings, just press the regenerate button to generate a new preview with your updated settings.<br /><br />Please note that only published projects are visible in the portfolio grid.',
			'size'		 		=> 'span4',
			'class'				=> 'semplice-button regenerate-masonry',
		),
		'categories' => array(
			'data-input-type' 	=> 'button',
			'title'		 		=> 'Categories',
			'help'				=> 'Select the categories you want to display in your portfolio grid. Leave empty to show all works.',
			'button-title'		=> 'Select Categories',
			'size'		 		=> 'span4',
			'class'				=> 'semplice-button white-button select-categories admin-click-handler',
			'data-handler'		=> 'selectCategories',
		),
		'hor_gutter' => array(
			'title'			=> 'Horizontal Gutter',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 30,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'listen-save',
			//'responsive'	=> true,
		),
		'ver_gutter' => array(
			'title'			=> 'Vertical Gutter',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 30,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'listen-save',
			//'responsive'	=> true,
		),
		'title_visibility' => array(
			'data-input-type' 	=> 'select-box',
			'title'		 		=> 'Project Title Visibility',
			'size'		 		=> 'span4',
			'class'      		=> 'listen-save',
			'default' 	 		=> 'both',
			'select-box-values' => array(
				'both' 			=> 'Show both title and project type',
				'title'			=> 'Show only title',
				'category'		=> 'Show only project type',
				'hidden'		=> 'Hide Both',
			),
		),
	),
	'title_options' => array(
		'title'  	 => 'Title Options',
		'break'		 => '2,2',
		'data-hide-mobile' => true,
		'title_color' => array(
			'title'				=> 'Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> 'transparent',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',	
		),
		'title_font' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'listen-save',
			'default' 	 		=> 'none',
			'select-box-values' => $fonts,
		),
		'title_fontsize' => array(
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 16,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'listen-save',
			'data-style-option' => true,
			'data-has-unit'	=> true,
			//'responsive'	=> true,
		),
		'title_text_transform' => array(
			'title'				=> 'Text Transform',
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'listen-save',
			'default'			=> 'none',
			'select-box-values' => array(
				'none'			=> 'None',
				'uppercase'		=> 'Uppercase',
			),
		),
	),
	'type_options' => array(
		'title'  	 => 'Project Type Options',
		'break'		 => '2,2',
		'data-hide-mobile' => true,
		'category_color' => array(
			'title'				=> 'Color',
			'data-style-option' => true,
			'size'				=> 'span2',
			'data-input-type'	=> 'color',
			'data-target'		=> '.spacer',
			'default'			=> 'transparent',
			'class'				=> 'color-picker admin-listen-handler',
			'data-handler' 		=> 'colorPicker',	
		),
		'category_font' => array(
			'data-input-type' => 'select-fonts',
			'title'		 		=> 'Font Family',
			'size'		 		=> 'span2',
			'class'				=> 'listen-save',
			'default' 	 		=> 'none',
			'select-box-values' => $fonts,
		),
		'category_fontsize' => array(
			'title'			=> 'Font Size',
			'size'			=> 'span2',
			'offset'		=> false,
			'data-input-type' 	=> 'range-slider',
			'default'		=> 14,
			'min'			=> 0,
			'max'			=> 999,
			'class'			=> 'listen-save',
			'data-style-option' => true,
			'data-has-unit'	=> true,
			//'responsive'	=> true,
		),
		'category_text_transform' => array(
			'title'				=> 'Text Transform',
			'size'				=> 'span2',
			'data-input-type'	=> 'select-box',
			'class'				=> 'listen-save',
			'default'			=> 'none',
			'select-box-values' => array(
				'none'			=> 'None',
				'uppercase'		=> 'Uppercase',
			),
		),
	),
);

?>