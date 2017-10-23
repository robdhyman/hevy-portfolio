<?php

// -----------------------------------------
// semplice
// admin/atts/styles.php
// -----------------------------------------

// vp button options
$vp_button_options = get_vp_button_options(false);

$styles = array(
	// section styles
	'section' => array(
		// padding
		'padding' => array(
			'title' => 'Paddings',
			'padding-top' => array(
				'title'			=> 'Top',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.content-block',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'style',
			),
			'padding-bottom' => array(
				'title'			=> 'Bottom',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.content-block',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'style',
			),
		),
		'margin' => array(
			'title' => 'Margin',
			'margin-top' => array(
				'title'			=> 'Top',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.content-block',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-negative' => true,
				'data-range-slider' => 'style',
			),
			'margin-right' => array(
				'title'			=> 'Right',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.content-block',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-negative' => true,
				'data-range-slider' => 'style',
			),
			'margin-bottom' => array(
				'title'			=> 'Bottom',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.content-block',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-negative' => true,
				'data-range-slider' => 'style',
			),
			'margin-left' => array(
				'title'			=> 'Left',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.content-block',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-negative' => true,
				'data-range-slider' => 'style',
			),
		),
		// background
		'background-color' => array(
				'title' => 'Background',
				'break'	=> '1,2',
				'data-hide-mobile' => true,
			'background-color' => array(
				'title'			=> 'Color',
				'hide-title'	=> true,
				'size'			=> 'span4',
				'data-input-type'	=> 'color',
				'data-target'	=> '.content-block',
				'default'		=> 'transparent',
				'class'			=> 'color-picker admin-listen-handler',
				'data-picker'	=> 'style',
				'data-handler'  => 'colorPicker',
			),
		),
		'background-type' => array(
			'title' => 'Background Type',
			'break' => '1',
			'hide-title' => true,
			'background_type' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Background Type',
				'hide-title'				=> true,
				'size'		 				=> 'span4',
				'data-visibility-switch' 	=> true,
				'data-visibility-values' 	=> 'img,vid',
				'data-visibility-prefix'	=> 'ov-bg-type',
				'default' 	 				=> 'img',
				'class'						=> 'listen-background-video',
				'switch-values' => array(
					'img'  	=> 'Image',
					'vid'	=> 'Video',
				),
			),
		),
		'background-image' => array(
			'title'		   => 'Background Image',
			'hide-title'   => true,
			'break'		   => '2',
			'background-image' => array(
				'title'			=> 'Image',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'data-input-type'	=> 'editor-image-upload',
				'data-target'	=> '.content-block',
				'default'		=> '',
				'class'			=> 'listen-hidden',
				'style-class'		=> 'ov-bg-type-img',
				'data-upload'	=> 'stylesBackground',
			),
			'background-size' => array(
				'title'			=> 'Options',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical-start',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.content-block',
				'default'		=> 'auto',
				'style-class'		=> 'ov-bg-type-img',
				'select-box-values' => array(
					'auto'		=> 'No Scale',
					'cover' 	=> 'Cover (full width)',
				),
			),
			'background-position' => array(
				'title'			=> 'Position',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.content-block',
				'default'		=> '0% 0%',
				'style-class'		=> 'ov-bg-type-img',
				'select-box-values' => array(
					'0% 0%' 	=> 'Top Left',
					'50% 0%' 	=> 'Top Center',
					'100% 0%' 	=> 'Top Right',
					'0% 50%' 	=> 'Middle Left',
					'50% 50%' 	=> 'Middle Center',
					'100% 50%' 	=> 'Middle Right',
					'0% 100%' 	=> 'Bottom Left',
					'50% 100%' 	=> 'Bottom Center',
					'100% 100%' => 'Bottom Right'
				),
				'responsive'	=> true,
			),
			'background-repeat' => array(
				'title'			=> 'Repeat',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical-end',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.content-block',
				'default'		=> 'no-repeat',
				'style-class'		=> 'ov-bg-type-img',
				'select-box-values' => array(
					'no-repeat' => 'No Repeat',
					'repeat-x' 	=> 'Repeat horizontal',
					'repeat-y' 	=> 'Repeat vertical',
					'repeat' 	=> 'Repeat both'
				),
			),
		),
		'background-video' => array(
			'title'			=> 'Background Video',
			'hide-title'	=> true,
			'break'			=> '1,1,2',
			'bg_video' => array(
				'title'			=> 'Video Upload',
				'size'			=> 'span4',
				'data-input-type' => 'video-upload',
				'default'		=> '',
				'class'			=> 'listen-background-video',
				'style-class'	=> 'ov-bg-type-vid',
				'data-upload'	=> 'bgVideo',
			),
			'bg_video_url' => array(
				'data-input-type'	=> 'input-text',
				'title'		 	=> 'Video Url',
				'help'			=> 'If your video is to big for a upload into the WordPress media library or you just want to include it from an external source (like a cdn), you can paste the link here.',
				'size'		 	=> 'span4',
				'placeholder'	=> 'http://my.cdn.com/video.mp4',
				'default'		=> '',
				'class'			=> 'listen-background-video',
				'style-class'	=> 'ov-bg-type-vid',
			),
			'bg_video_fallback' => array(
				'title'			=> 'Fallback Image',
				'help'			=> 'This fallback image will be displayed on mobile devices instead of your video and it will be a placeholder in the editor.',
				'size'			=> 'span2',
				'data-input-type'	=> 'admin-image-upload',
				'data-target'	=> '.background-video',
				'default'		=> '',
				'class'			=> 'listen-background-video',
				'style-class'		=> 'ov-bg-type-vid',
				'data-upload'	=> 'bgVideoFallback',
			),
			'bg_video_opacity' => array(
				'title'			=> 'Video Opacity',
				'size'			=> 'span2',
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.background-video',
				'default'		=> 100,
				'min'			=> 0,
				'max'			=> 100,
				'class'			=> 'listen-background-video',
				'data-divider'  => 100,
				'style-class'		=> 'ov-bg-type-vid',
				'data-range-slider' => 'bgVideoOpacity'
			),
		),
		// border
		'border' => array(
			'title' => 'Border',
			'break'	=> false,
			'border-color' => array(
				'title'			=> 'Color',
				'size'			=> 'span1',
				'data-input-type' 	=> 'color',
				'data-target'	=> '.content-block',
				'default'		=> '#000000',
				'class'			=> 'color-picker admin-listen-handler',
				'data-handler'  => 'colorPicker',
				'data-picker'	=> 'style',
				'responsive'	=> true,
			),
			'border-width' => array(
				'title'			=> 'Width',
				'size'			=> 'span1',
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.content-block',
				'default'		=> '0',
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'=> true,	
				'data-range-slider' => 'style',
			),
			'border-style' => array(
				'title'			=> 'Style',
				'size'			=> 'span2',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.content-block',
				'default'		=> 'solid',
				'select-box-values' => array(
					'solid'		=> 'Solid',
					'dashed' 	=> 'Dashed',
					'dotted'	=> 'Dotted',
				),
				'responsive'	=> true,
			),
		),
		'miscellaneous' => array(
			'title'			=> 'Miscellaneous',
			'break'			=> '2',
			'data-hide-mobile' => true,
			'z-index' => array(
				'title'			=> 'Z-Index',
				'help'			=> 'The z-index defines the stack order of your elements. An element with greater stack order is always in front of an element with a lower stack order. You only need to define this if you for example give a something a negative margin and it gets hidden behind another element.',
				'size'			=> 'span2',
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.content-block',
				'default'		=> 1,
				'min'			=> 0,
				'max'			=> 1000000,
				'class'			=> 'listen',
				'data-range-slider' => 'style',
			),
			'css_classes' => array(
				'data-input-type'	=> 'input-text',
				'title'		 	=> 'Classes',
				'help'			=> 'Add your custom css classes, seperated by a space. Example: class1 class2 class3',
				'size'		 	=> 'span2',
				'placeholder'	=> 'my-class my-cass-2',
				'default'		=> '',
				'class'			=> 'listen-cssclass-save',
			),
		),
	),

	// column styles
	'column' => array(
		'mobile-styles' => '',
		// padding
		'padding' => array(
			'title' => 'Paddings',
			'padding-top' => array(
				'title'			=> 'Top',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'style',
			),
			'padding-bottom' => array(
				'title'			=> 'Bottom',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'style',
			),
		),
		// background
		'background-color' => array(
				'title' => 'Background',
				'break'	=> '1,2',
				'data-hide-mobile' => true,
			'background-color' => array(
				'title'			=> 'Color',
				'hide-title'	=> true,
				'size'			=> 'span4',
				'data-input-type'	=> 'color',
				'data-target'	=> '.column',
				'default'		=> 'transparent',
				'class'			=> 'color-picker admin-listen-handler',
				'data-handler'  => 'colorPicker',
				'data-picker'	=> 'style',
			),
		),
		'background-type' => array(
			'title' => 'Background Type',
			'break' => '1',
			'hide-title' => true,
			'background_type' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Background Type',
				'hide-title'				=> true,
				'size'		 				=> 'span4',
				'data-visibility-switch' 	=> true,
				'data-visibility-values' 	=> 'img,vid',
				'data-visibility-prefix'	=> 'ov-bg-type-column',
				'default' 	 				=> 'img',
				'class'						=> 'listen-background-video',
				'switch-values' => array(
					'img'  	=> 'Image',
					'vid'	=> 'Video',
				),
			),
		),
		'background-image' => array(
				'title' => 'Background',
				'break'	=> '2',
				'hide-title'   => true,
			'background-image' => array(
				'title'			=> 'Image',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'data-input-type'	=> 'editor-image-upload',
				'data-target'	=> '.column',
				'default'		=> '',
				'class'			=> 'listen-hidden',
				'style-class'	=> 'ov-bg-type-column-img',
				'data-upload'	=> 'stylesBackground',
			),
			'background-size' => array(
				'title'			=> 'Options',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical-start',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.column',
				'default'		=> 'auto',
				'style-class'	=> 'ov-bg-type-column-img',
				'select-box-values' => array(
					'auto'		=> 'No Scale',
					'cover' 	=> 'Cover (full width)',
				),
			),
			'background-position' => array(
				'title'			=> 'Position',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.column',
				'default'		=> '0% 0%',
				'select-box-values' => array(
					'0% 0%' 	=> 'Top Left',
					'50% 0%' 	=> 'Top Center',
					'100% 0%' 	=> 'Top Right',
					'0% 50%' 	=> 'Middle Left',
					'50% 50%' 	=> 'Middle Center',
					'100% 50%' 	=> 'Middle Right',
					'0% 100%' 	=> 'Bottom Left',
					'50% 100%' 	=> 'Bottom Center',
					'100% 100%' => 'Bottom Right'
				),
				'responsive'	=> true,
				'style-class'	=> 'ov-bg-type-column-img',
			),
			'background-repeat' => array(
				'title'			=> 'Repeat',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical-end',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.column',
				'default'		=> 'no-repeat',
				'style-class'	=> 'ov-bg-type-column-img',
				'select-box-values' => array(
					'no-repeat' => 'No Repeat',
					'repeat-x' 	=> 'Repeat horizontal',
					'repeat-y' 	=> 'Repeat vertical',
					'repeat' 	=> 'Repeat both'
				),
			),
		),
		'background-video' => array(
			'title'			=> 'Background Video',
			'hide-title'	=> true,
			'break'			=> '1,1,2',
			'bg_video' => array(
				'title'			=> 'Video Upload',
				'size'			=> 'span4',
				'data-input-type' => 'video-upload',
				'default'		=> '',
				'class'			=> 'listen-background-video',
				'style-class'	=> 'ov-bg-type-column-vid',
				'data-upload'	=> 'bgVideo',
			),
			'bg_video_url' => array(
				'data-input-type'	=> 'input-text',
				'title'		 	=> 'Video Url',
				'help'			=> 'If your video is to big for a upload into the WordPress media library or you just want to include it from an external source (like a cdn), you can paste the link here.',
				'size'		 	=> 'span4',
				'placeholder'	=> 'http://my.cdn.com/video.mp4',
				'default'		=> '',
				'class'			=> 'listen-background-video',
				'style-class'	=> 'ov-bg-type-column-vid',
			),
			'bg_video_fallback' => array(
				'title'			=> 'Fallback Image',
				'help'			=> 'This fallback image will be displayed on mobile devices instead of your video and it will be a placeholder in the editor.',
				'size'			=> 'span2',
				'data-input-type'	=> 'admin-image-upload',
				'data-target'	=> '.background-video',
				'default'		=> '',
				'class'			=> 'listen-background-video',
				'style-class'		=> 'ov-bg-type-column-vid',
				'data-upload'	=> 'bgVideoFallback',
			),
			'bg_video_opacity' => array(
				'title'			=> 'Video Opacity',
				'size'			=> 'span2',
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.background-video',
				'default'		=> 100,
				'min'			=> 0,
				'max'			=> 100,
				'class'			=> 'listen-background-video',
				'data-divider'  => 100,
				'style-class'		=> 'ov-bg-type-column-vid',
				'data-range-slider'	=> 'bgVideoOpacity'
			),
		),
		// border
		'border' => array(
			'title' => 'Border',
			'break'	=> false,
			'border-color' => array(
				'title'			=> 'Color',
				'size'			=> 'span1',
				'data-input-type' 	=> 'color',
				'data-target'	=> '.column',
				'default'		=> '#000000',
				'class'			=> 'color-picker admin-listen-handler',
				'data-handler'  => 'colorPicker',
				'responsive'	=> true,
				'data-picker'	=> 'style',
			),
			'border-width' => array(
				'title'			=> 'Width',
				'size'			=> 'span1',
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column',
				'default'		=> '0',
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'=> true,	
				'data-range-slider' => 'style',
			),
			'border-style' => array(
				'title'			=> 'Style',
				'size'			=> 'span2',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.column',
				'default'		=> 'solid',
				'select-box-values' => array(
					'solid'		=> 'Solid',
					'dashed' 	=> 'Dashed',
					'dotted'	=> 'Dotted',
				),
				'responsive'	=> true,
			),
		),
		'miscellaneous' => array(
			'title'			=> 'Miscellaneous',
			'break'			=> '1',
			'data-hide-mobile' => true,
			'css_classes' => array(
				'data-input-type'	=> 'input-text',
				'title'		 	=> 'Classes',
				'help'			=> 'Add your custom css classes, seperated by a space. Example: class1 class2 class3',
				'size'		 	=> 'span4',
				'placeholder'	=> 'my-class my-cass-2',
				'default'		=> '',
				'class'			=> 'listen-cssclass-save',
			),
		),
	),

	// content styles
	'content' => array(

		// padding
		'padding' => array(
			'title' => 'Padding',
			'padding-top' => array(
				'title'			=> 'Top',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'style',
			),
			'padding-right' => array(
				'title'			=> 'Right',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'style',	
			),
			'padding-bottom' => array(
				'title'			=> 'Bottom',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'style',	
			),
			'padding-left' => array(
				'title'			=> 'Left',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'style',
			),
		),
		'margin' => array(
			'title' => 'Margin',
			'margin-top' => array(
				'title'			=> 'Top',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-negative' => true,
				'data-range-slider' => 'style',
			),
			'margin-right' => array(
				'title'			=> 'Right',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-negative' => true,
				'data-range-slider' => 'style',
			),
			'margin-bottom' => array(
				'title'			=> 'Bottom',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-negative' => true,
				'data-range-slider' => 'style',
			),
			'margin-left' => array(
				'title'			=> 'Left',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-negative' => true,
				'data-range-slider' => 'style',
			),
		),
		// background
		'background' => array(
				'title' => 'Background',
				'break'	=> '1,2',
				'data-hide-mobile' => true,
			'background-color' => array(
				'title'			=> 'Color',
				'hide-title'	=> true,
				'size'			=> 'span4',
				'data-input-type'	=> 'color',
				'data-target'	=> '.column-content',
				'default'		=> 'transparent',
				'class'			=> 'color-picker admin-listen-handler',
				'data-handler'  => 'colorPicker',
				'data-picker'	=> 'style',
			),
			'background-image' => array(
				'title'			=> 'Image',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'data-input-type'	=> 'editor-image-upload',
				'data-target'	=> '.column-content',
				'default'		=> '',
				'class'			=> 'listen-hidden',
				'data-upload'	=> 'stylesBackground',
			),
			'background-size' => array(
				'title'			=> 'Options',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical-start',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.column-content',
				'default'		=> 'auto',
				'select-box-values' => array(
					'auto'		=> 'No Scale',
					'cover' 	=> 'Cover (full width)',
				),
			),
			'background-position' => array(
				'title'			=> 'Position',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.column-content',
				'default'		=> '0% 0%',
				'select-box-values' => array(
					'0% 0%' 	=> 'Top Left',
					'50% 0%' 	=> 'Top Center',
					'100% 0%' 	=> 'Top Right',
					'0% 50%' 	=> 'Middle Left',
					'50% 50%' 	=> 'Middle Center',
					'100% 50%' 	=> 'Middle Right',
					'0% 100%' 	=> 'Bottom Left',
					'50% 100%' 	=> 'Bottom Center',
					'100% 100%' => 'Bottom Right'
				),
				'responsive'	=> true,
			),
			'background-repeat' => array(
				'title'			=> 'Repeat',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical-end',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.column-content',
				'default'		=> 'no-repeat',
				'select-box-values' => array(
					'no-repeat' => 'No Repeat',
					'repeat-x' 	=> 'Repeat horizontal',
					'repeat-y' 	=> 'Repeat vertical',
					'repeat' 	=> 'Repeat both'
				),
			),
		),
		// box shadow
		'box-shadow' => array(
			'title' => 'Drop Shadow',
			'break'	=> '4,2',
			'box-shadow-color' => array(
				'title'			=> 'Color',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'color',
				'data-target'	=> '.is-content',
				'default'		=> '#000000',
				'class'			=> 'color-picker admin-listen-handler',
				'data-handler'  => 'colorPicker',
				'responsive'	=> true,
				'data-picker'	=> 'style',
			),
			'box-shadow-h-length' => array(
				'title'			=> 'H Length',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.is-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen-box-shadow',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'boxShadow',
			),
			'box-shadow-v-length' => array(
				'title'			=> 'V Length',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.is-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen-box-shadow',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'boxShadow',
			),
			'box-shadow-blur-radius' => array(
				'title'			=> 'Blur',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.is-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen-box-shadow',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'boxShadow',
			),
			'box-shadow-spread-radius' => array(
				'title'			=> 'Spread',
				'size'			=> 'span1',
				'offset'		=> 'offset1',
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.is-content',
				'default'		=> 0,
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen-box-shadow',
				'responsive'	=> true,
				'data-has-unit'	=> true,
				'data-range-slider' => 'boxShadow',
			),
			'box-shadow-opacity' => array(
				'title'			=> 'Opacity',
				'size'			=> 'span1',
				'offset'		=> false,
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.is-content',
				'min'			=> 0,
				'max'			=> 100,
				'default'		=> 100,
				'class'			=> 'listen-box-shadow',
				'responsive'	=> true,
				'data-range-slider' => 'boxShadow',
			),
		),
		// border
		'border' => array(
			'title' => 'Border',
			'break'	=> false,
			'border-color' => array(
				'title'			=> 'Color',
				'size'			=> 'span1',
				'data-input-type' 	=> 'color',
				'data-target'	=> '.is-content',
				'default'		=> '#000000',
				'class'			=> 'color-picker admin-listen-handler',
				'data-handler'  => 'colorPicker',
				'responsive'	=> true,
				'data-picker'	=> 'style',
			),
			'border-width' => array(
				'title'			=> 'Width',
				'size'			=> 'span1',
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.is-content',
				'default'		=> '0',
				'min'			=> 0,
				'max'			=> 999,
				'class'			=> 'listen',
				'responsive'	=> true,
				'data-has-unit'=> true,
				'data-range-slider' => 'style',
			),
			'border-style' => array(
				'title'			=> 'Style',
				'size'			=> 'span2',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.is-content',
				'default'		=> 'solid',
				'select-box-values' => array(
					'solid'		=> 'Solid',
					'dashed' 	=> 'Dashed',
					'dotted'	=> 'Dotted',
				),
				'responsive'	=> true,
			),
		),
		'miscellaneous' => array(
			'title'			=> 'Miscellaneous',
			'break'			=> '2,1',
			'data-hide-mobile' => true,
			'opacity' => array(
				'title'				=> 'Opacity',
				'help'				=> 'Please note that this settings gets overwritten if you add \'Opacity\' to the motion effects.',
				'size'				=> 'span2',
				'data-input-type' 	=> 'range-slider',
				'data-target'		=> '.column-content',
				'data-divider'		=> 100,
				'default'			=> 1,
				'min'				=> 0,
				'max'				=> 100,
				'class' 			=> 'listen',
				'data-range-slider' => 'style',
			),
			'z-index' => array(
				'title'			=> 'Z-Index',
				'help'			=> 'The z-index defines the stack order of your elements. An element with greater stack order is always in front of an element with a lower stack order. You only need to define this if you for example give a something a negative margin and it gets hidden behind another element.',
				'size'			=> 'span2',
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.column-content',
				'default'		=> 1,
				'min'			=> 0,
				'max'			=> 1000000,
				'class'			=> 'listen',
				'data-range-slider' => 'style',
			),
			'css_classes' => array(
				'data-input-type'	=> 'input-text',
				'title'		 	=> 'Classes',
				'help'			=> 'Add your custom css classes, seperated by a space. Example: class1 class2 class3',
				'size'		 	=> 'span4',
				'placeholder'	=> 'my-class my-cass-2',
				'default'		=> '',
				'class'			=> 'listen-cssclass-save',
			),
		),
	),

	// cover styles
	'cover' => array(
		// background
		'background-color' => array(
				'title' => 'Cover Background',
				'break'	=> '1,2',
				'data-hide-mobile' => true,
			'background-color' => array(
				'title'			=> 'Color',
				'hide-title'	=> true,
				'size'			=> 'span4',
				'data-input-type'	=> 'color',
				'data-target'	=> '.content-block',
				'default'		=> 'transparent',
				'class'			=> 'color-picker admin-listen-handler',
				'data-handler'  => 'colorPicker',
				'data-picker'	=> 'style',
			),
		),
		'background-type' => array(
			'title' => 'Background Type',
			'break' => '1',
			'hide-title' => true,
			'background_type' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Background Type',
				'hide-title'				=> true,
				'size'		 				=> 'span4',
				'data-visibility-switch' 	=> true,
				'data-visibility-values' 	=> 'img,vid',
				'data-visibility-prefix'	=> 'ov-bg-type',
				'default' 	 				=> 'img',
				'class'						=> 'listen-background-video',
				'switch-values' => array(
					'img'  	=> 'Image',
					'vid'	=> 'Video',
				),
			),
		),
		'background-image' => array(
			'title'		   => 'Background Image',
			'hide-title'   => true,
			'break'		   => '2',
			'background-image' => array(
				'title'			=> 'Image',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'data-input-type'	=> 'editor-image-upload',
				'data-target'	=> '.content-block',
				'default'		=> '',
				'class'			=> 'listen-hidden',
				'style-class'		=> 'ov-bg-type-img',
				'data-upload'	=> 'stylesBackground',
			),
			'background-size' => array(
				'title'			=> 'Options',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical-start',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.content-block',
				'default'		=> 'auto',
				'style-class'		=> 'ov-bg-type-img',
				'select-box-values' => array(
					'auto'		=> 'No Scale',
					'cover' 	=> 'Cover (full width)',
				),
			),
			'background-position' => array(
				'title'			=> 'Position',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.content-block',
				'default'		=> '0% 0%',
				'style-class'		=> 'ov-bg-type-img',
				'select-box-values' => array(
					'0% 0%' 	=> 'Top Left',
					'50% 0%' 	=> 'Top Center',
					'100% 0%' 	=> 'Top Right',
					'0% 50%' 	=> 'Middle Left',
					'50% 50%' 	=> 'Middle Center',
					'100% 50%' 	=> 'Middle Right',
					'0% 100%' 	=> 'Bottom Left',
					'50% 100%' 	=> 'Bottom Center',
					'100% 100%' => 'Bottom Right'
				),
				'responsive'	=> true,
			),
			'background-repeat' => array(
				'title'			=> 'Repeat',
				'hide-title'	=> true,
				'size'			=> 'span2',
				'stack'			=> 'vertical-end',
				'data-input-type'    => 'select-box',
				'class' 		=> 'listen',
				'data-target'	=> '.content-block',
				'default'		=> 'no-repeat',
				'style-class'		=> 'ov-bg-type-img',
				'select-box-values' => array(
					'no-repeat' => 'No Repeat',
					'repeat-x' 	=> 'Repeat horizontal',
					'repeat-y' 	=> 'Repeat vertical',
					'repeat' 	=> 'Repeat both'
				),
			),
		),
		'background-video' => array(
			'title'			=> 'Background Video',
			'hide-title'	=> true,
			'break'			=> '1,1,2',
			'bg_video' => array(
				'title'			=> 'Video Upload',
				'size'			=> 'span4',
				'data-input-type' => 'video-upload',
				'default'		=> '',
				'class'			=> 'listen-background-video',
				'style-class'	=> 'ov-bg-type-vid',
				'data-upload'	=> 'bgVideo',
			),
			'bg_video_url' => array(
				'data-input-type'	=> 'input-text',
				'title'		 	=> 'Video Url',
				'help'			=> 'If your video is to big for a upload into the WordPress media library or you just want to include it from an external source (like a cdn), you can paste the link here.',
				'size'		 	=> 'span4',
				'placeholder'	=> 'http://my.cdn.com/video.mp4',
				'default'		=> '',
				'class'			=> 'listen-background-video',
				'style-class'	=> 'ov-bg-type-vid',
			),
			'bg_video_fallback' => array(
				'title'			=> 'Fallback Image',
				'help'			=> 'This fallback image will be displayed on mobile devices instead of your video and it will be a placeholder in the editor.',
				'size'			=> 'span2',
				'data-input-type'	=> 'admin-image-upload',
				'data-target'	=> '.background-video',
				'default'		=> '',
				'class'			=> 'listen-background-video',
				'style-class'		=> 'ov-bg-type-vid',
				'data-upload'	=> 'bgVideoFallback',
			),
			'bg_video_opacity' => array(
				'title'			=> 'Video Opacity',
				'size'			=> 'span2',
				'data-input-type' 	=> 'range-slider',
				'data-target'	=> '.background-video',
				'default'		=> 100,
				'min'			=> 0,
				'max'			=> 100,
				'class'			=> 'listen-background-video',
				'data-divider'  => 100,
				'style-class'		=> 'ov-bg-type-vid',
				'data-range-slider' => 'bgVideoOpacity',
			),
		),
		'cover-options' => array(
			'title'			=> 'Cover Settings',
			'break'			=> '1,1,1,1',
			'data-hide-mobile' => true,
			'parallax' => array(
				'data-input-type' => 'onoff-switch',
				'title'		 => 'Parallax Effect',
				'help'		 => 'Select if you want a parallax effect on your background image while scrolling',
				'hide-title' => true,
				'size'		 => 'span4',
				'class'      => 'listen',
				'default' 	 => 'off',
				'style-class'=> 'first-switch-with-title ov-bg-type-img',
				'switch-values' => array(
					'on'	 => 'On',
					'off'	 => 'Off',
				),
			),
			'zoom' => array(
				'data-input-type' => 'onoff-switch',
				'title'		 => 'Cover Zoom',
				'help'		 => 'Select if you want a cover zoom effect on your background image. <br /><br /><b>Note:</b> The parallax effect is disabled for cover zoom.',
				'hide-title' => true,
				'size'		 => 'span4',
				'class'      => 'listen',
				'default' 	 => 'off',
				'style-class'=> 'ov-bg-type-img',
				'switch-values' => array(
					'on'	 => 'On',
					'off'	 => 'Off',
				),
			),
			'mute' => array(
				'data-input-type' => 'onoff-switch',
				'title'		 => 'Mute Video',
				'hide-title' => true,
				'size'		 => 'span4',
				'class'      => 'listen',
				'default' 	 => 'off',
				'style-class'=> 'first-switch-with-title ov-bg-type-vid',
				'switch-values' => array(
					'on'	 => 'On',
					'off'	 => 'Off',
				),
			),
		),
		'scroll-down-arrow' => array(
			'title'			=> 'Scroll down arrow',
			'break'			=> '2',
			'data-hide-mobile' => true,
			'arrow_visibility' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Visibility',
				'size'		 				=> 'span2',
				'data-visibility-switch' 	=> true,
				'data-visibility-values' 	=> 'visible,hidden',
				'data-visibility-prefix'	=> 'ov-cover-arrow',
				'default' 	 				=> 'visible',
				'class'						=> 'listen',
				'switch-values' => array(
					'visible'  	=> 'Visible',
					'hidden'	=> 'Hidden',
				),
			),
			'arrow_color' => array(
				'title'			=> 'Color',
				'size'			=> 'span2',
				'data-input-type'	=> 'color',
				'data-target'	=> '.content-block',
				'default'		=> 'transparent',
				'class'			=> 'color-picker admin-listen-handler',
				'data-handler'  => 'colorPicker',
				'data-picker'	=> 'style',
			),
		),
		'vp-button-switch' => array(
			'title'  	 => 'View Project Button',
			'break'		 => '1,1',
			'help'		 => 'If you are using this cover in a coverslider you can customize the \'View Project\' button here. If set to \'Default\' it will use the default view project button from the coverslider.',
			'data-hide-mobile' => true,
			'vp_button_type' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'View Project Button',
				'hide-title'				=> true,
				'size'		 				=> 'span4',
				'data-visibility-switch' 	=> true,
				'data-visibility-values' 	=> 'default,custom',
				'data-visibility-prefix'	=> 'ov-vp-button',
				'default' 	 				=> 'default',
				'class'						=> 'listen',
				'switch-values' => array(
					'default'  	=> 'Default',
					'custom'	=> 'Custom',
				),
			),
			'vp_button_visibility' => array(
				'data-input-type' 			=> 'switch',
				'switch-type'				=> 'twoway',
				'title'		 				=> 'Visibility',
				'size'		 				=> 'span4',
				'default' 	 				=> 'visible',
				'class'						=> 'listen',
				'style-class'				=> 'ov-vp-button-custom',
				'switch-values' => array(
					'visible'  	=> 'Visible',
					'hidden'	=> 'Hidden',
				),
			),
		),
		// coverslider view project button
		'vp-button-general' => $vp_button_options['general'],
		'vp-button-link'	=> $vp_button_options['link'],
		'vp-button-hover'	=> $vp_button_options['hover'],
	),

	'responsive-column-sm' => get_responsive_column_styles('sm', 'Tablet Portrait'),
	'responsive-column-xs' => get_responsive_column_styles('xs', 'Phone'),
);

?>