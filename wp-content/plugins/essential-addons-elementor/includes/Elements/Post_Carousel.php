<?php

namespace Essential_Addons_Elementor\Pro\Elements;

use \Elementor\Controls_Manager;
use Elementor\Group_Control_Background;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Image_Size;
use \Elementor\Group_Control_Typography;
use \Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use \Elementor\Widget_Base;
use \Essential_Addons_Elementor\Classes\Helper;

if (!defined('ABSPATH')) {
	exit;
}
// Exit if accessed directly

class Post_Carousel extends Widget_Base
{

	use \Essential_Addons_Elementor\Traits\Template_Query;

	public function get_name()
	{
		return 'eael-post-carousel';
	}

	public function get_title()
	{
		return __('Post Carousel', 'essential-addons-elementor');
	}

	public function get_icon()
	{
		return 'eaicon-post-carousel';
	}

	public function get_categories()
	{
		return ['essential-addons-elementor'];
	}

	public function get_keywords()
	{
		return [
			'post carousel',
			'ea post carousel',
			'ea post slider',
			'ea post navigation',
			'blog post',
			'bloggers',
			'blog',
			'carousel',
			'ea',
			'essential addons',
		];
	}

	public function has_widget_inner_wrapper(): bool {
        return ! Helper::eael_e_optimized_markup();
    }

	public function get_custom_help_url()
	{
		return 'https://essential-addons.com/elementor/docs/post-carousel/';
	}

	public function get_style_depends()
	{
		return [
			'font-awesome-5-all',
			'font-awesome-4-shim',
            'e-swiper'
		];
	}

	public function get_script_depends()
	{
		return [
			'font-awesome-4-shim',
		];
	}

	protected function register_controls()
	{
		$this->start_controls_section(
            'eael_section_post_carousel_layout',
            [
                'label' => __('Layout', 'essential-addons-for-elementor-lite'),
            ]
        );

		$this->add_control(
			'eael_dynamic_template_Layout',
			[
				'label'   => esc_html__( 'View', 'textdomain' ),
				'type'    => Controls_Manager::HIDDEN,
				'default' => 'default',		
		// 		'options' => $this->get_template_list_for_dropdown(),

			]
		);

		$image_path = EAEL_PRO_PLUGIN_URL . 'assets/admin/images/layout-previews/post-carousel-';
		$this->add_control(
			'eael_post_carousel_preset_style',
			[
				'label'       => esc_html__( 'Skin', 'essential-addons-for-elementor-lite' ),
				'type'        => Controls_Manager::CHOOSE,
				'options'     => [
					'one' => [
						'title' => esc_html__('Default', 'essential-addons-for-elementor-lite'),
						'image' => $image_path . 'one.png'
					],
					'two' => [
						'title' => esc_html__('Two', 'essential-addons-for-elementor-lite'),
						'image' => $image_path . 'two.png'
					],
					'three' => [
						'title' => esc_html__('Three', 'essential-addons-for-elementor-lite'),
						'image' => $image_path . 'three.png'
					],
				],
				'default'     => 'one',
				'label_block' => true,
				'toggle'      => false,
				'image_choose'=> true,
			]
		);

		$this->add_control(
			'eael_post_carousel_item_style',
			[
				'label'   => esc_html__('Item Style', 'essential-addons-for-elementor-lite'),
				'type'    => Controls_Manager::SELECT,
				'default' => 'eael-cards',
				'options' => [
					'eael-overlay' => esc_html__('Overlay', 'essential-addons-for-elementor-lite'),
					'eael-cards'   => esc_html__('Cards', 'essential-addons-for-elementor-lite'),
				],
			]
		);

		$this->add_control(
			'eael_show_title_heading',
			[
				'label'     => esc_html__( 'Title', 'textdomain' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
            'eael_show_title',
            [
                'label'        => __('Show', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off'    => __('No', 'essential-addons-for-elementor-lite'),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'title_tag',
            [
                'label'       => __('Html Tag', 'essential-addons-for-elementor-lite'),
				'label_block' => true,
				'type'        => Controls_Manager::CHOOSE,
				'options'     => [
					'h1' => [
						'title' => esc_html__( 'H1', 'essential-addons-for-elementor-lite' ),
						'icon'  => 'eicon-editor-h1',
					],
					'h2' => [
						'title' => esc_html__( 'H2', 'essential-addons-for-elementor-lite' ),
						'icon'  => 'eicon-editor-h2',
					],
					'h3' => [
						'title' => esc_html__( 'H3', 'essential-addons-for-elementor-lite' ),
						'icon'  => 'eicon-editor-h3',
					],
					'h4' => [
						'title' => esc_html__( 'H4', 'essential-addons-for-elementor-lite' ),
						'icon'  => 'eicon-editor-h4',
					],
					'h5' => [
						'title' => esc_html__( 'H5', 'essential-addons-for-elementor-lite' ),
						'icon'  => 'eicon-editor-h5',
					],
					'h6' => [
						'title' => esc_html__( 'H6', 'essential-addons-for-elementor-lite' ),
						'icon'  => 'eicon-editor-h6',
					],
					'div' => [
						'title' => esc_html__( 'Div', 'essential-addons-for-elementor-lite' ),
						'text'  => 'div',
					],
					'span' => [
						'title' => esc_html__( 'Span', 'essential-addons-for-elementor-lite' ),
						'text'  => 'span',
					],
					'p' => [
						'title' => esc_html__( 'P', 'essential-addons-for-elementor-lite' ),
						'text'  => 'P',
					],
				],
                'default'   => 'h2',
				'toggle'    => false,
                'condition' => [
                    'eael_show_title' => 'yes',
                ],
			]
		);

		$this->add_control(
			'eael_title_length',
			[
				'label'     => __('Title Length', 'essential-addons-for-elementor-lite'),
				'type'      => Controls_Manager::NUMBER,
				'condition' => [
					'eael_show_title' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_show_excerpt_heading',
			[
				'label'     => esc_html__( 'Excerpt', 'textdomain' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
            'eael_show_excerpt',
            [
                'label'        => __('Show', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off'    => __('No', 'essential-addons-for-elementor-lite'),
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

		$this->add_control(
			'eael_excerpt_length',
			[
				'label'     => __('Length', 'essential-addons-for-elementor-lite'),
				'type'      => Controls_Manager::NUMBER,
				'default'   => 10,
				'condition' => [
					'eael_show_excerpt' => 'yes',
				],
			]
		);

		$this->add_control(
			'excerpt_expanison_indicator',
			[
				'label'       => esc_html__('Expansion Indicator', 'essential-addons-for-elementor-lite'),
				'type'        => Controls_Manager::TEXT,
				'dynamic'     => [ 'active'      =>true ],
				'ai'          => [ 'active'      =>false ],
				'label_block' => false,
				'default'     => esc_html__('...', 'essential-addons-for-elementor-lite'),
				'condition'   => [
					'eael_show_excerpt' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_show_read_more_heading',
			[
				'label'     => esc_html__( 'Read More Text', 'textdomain' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'eael_show_read_more_button',
			[
				'label'        => __('Show', 'essential-addons-for-elementor-lite'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-for-elementor-lite'),
				'label_off'    => __('No', 'essential-addons-for-elementor-lite'),
				'return_value' => 'yes',
				'default'      => 'yes',
			]
		);

		$this->add_control(
			'read_more_button_text',
			[
				'label'     => __('Text', 'essential-addons-for-elementor-lite'),
				'type'      => Controls_Manager::TEXT,
				'dynamic'   => [ 'active'      =>true ],
				'ai'        => ['active'       =>false],
				'default'   => __('Read More', 'essential-addons-for-elementor-lite'),
				'condition' => [
					'eael_show_read_more_button' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_show_post_terms_heading',
			[
				'label'     => esc_html__( 'Post Terms', 'textdomain' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'eael_show_image' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_show_post_terms',
			[
				'label'        => __('Show', 'essential-addons-for-elementor-lite'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-for-elementor-lite'),
				'label_off'    => __('No', 'essential-addons-for-elementor-lite'),
				'return_value' => 'yes',
				'condition'    => [
					'eael_show_image' => 'yes',
				],
			]
		);

		$post_types = Helper::get_post_types();
		unset(
			$post_types['post'],
			$post_types['page'],
			$post_types['product']
		);
		$taxonomies     = get_taxonomies( [], 'objects' );
		$post_types_tax = [];

		foreach ( $taxonomies as $taxonomy => $object ) {
			if( isset( $object->object_type ) && is_array( $object->object_type ) && count( $object->object_type ) ){
				foreach( $object->object_type as $object_type ){
					if ( ! in_array( $object_type, array_keys( $post_types ) ) ) { 
						continue;
					}
					$post_types_tax[ $object_type ][ $taxonomy ] = $object->label;
				}
			}
		}

		foreach ( $post_types as $post_type => $post_taxonomies ) {
			$this->add_control(
				'eael_' . $post_type . '_terms',
				[
					'label'     => __( 'Show Terms From', 'essential-addons-for-elementor-lite' ),
					'type'      => Controls_Manager::SELECT,
					'options'   => isset( $post_types_tax[ $post_type ] ) ? $post_types_tax[ $post_type ] : [],
					'default'   => isset( $post_types_tax[ $post_type ] ) ? key( $post_types_tax[ $post_type ] ) : '',
					'condition' => [
						'eael_show_image'             => 'yes',
						'eael_show_post_terms'        => 'yes',
						'post_type'                   => $post_type,
					],
				]
			);
		}

		$this->add_control(
			'eael_post_terms',
			[
				'label'   => __('Show Terms From', 'essential-addons-for-elementor-lite'),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'category' => __('Category', 'essential-addons-for-elementor-lite'),
					'tags'     => __('Tags', 'essential-addons-for-elementor-lite'),
				],
				'default'   => 'category',
				'condition' => [
					'eael_show_image'      => 'yes',
					'eael_show_post_terms' => 'yes',
					'post_type'            => [ 'post', 'page', 'product', 'by_id', 'source_dynamic' ]
				],
			]
		);

		$this->add_control(
			'eael_post_terms_max_length',
			[
				'label'   => __('Max Terms to Show', 'essential-addons-for-elementor-lite'),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					1 => __('1', 'essential-addons-for-elementor-lite'),
					2 => __('2', 'essential-addons-for-elementor-lite'),
					3 => __('3', 'essential-addons-for-elementor-lite'),
				],
				'default'   => 1,
				'condition' => [
					'eael_show_image'      => 'yes', 
					'eael_show_post_terms' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_show_meta_heading',
			[
				'label'     => esc_html__( 'Mata', 'textdomain' ),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'eael_show_meta',
			[
				'label'        => __('Show', 'essential-addons-for-elementor-lite'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-for-elementor-lite'),
				'label_off'    => __('No', 'essential-addons-for-elementor-lite'),
				'return_value' => 'yes',
				'default'      => 'yes',
			]
		);

		$this->add_control(
			'meta_position',
			[
				'label'   => esc_html__('Position', 'essential-addons-for-elementor-lite'),
				'type'    => Controls_Manager::SELECT,
				'default' => 'meta-entry-footer',
				'options' => [
					'meta-entry-header' => esc_html__('Entry Header', 'essential-addons-for-elementor-lite'),
					'meta-entry-footer' => esc_html__('Entry Footer', 'essential-addons-for-elementor-lite'),
				],
				'condition' => [
					'eael_show_meta' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_show_avatar',
			[
				'label'        => __('Avatar', 'essential-addons-for-elementor-lite'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Show', 'essential-addons-for-elementor-lite'),
				'label_off'    => __('Hide', 'essential-addons-for-elementor-lite'),
				'return_value' => 'yes',
				'default'      => 'yes',
				'condition'    => [
					'meta_position' => 'meta-entry-footer',
					'eael_show_meta' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_show_author',
			[
				'label'        => __('Author Name', 'essential-addons-for-elementor-lite'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Show', 'essential-addons-for-elementor-lite'),
				'label_off'    => __('Hide', 'essential-addons-for-elementor-lite'),
				'return_value' => 'yes',
				'default'      => 'yes',
				'condition'    => [
					'eael_show_meta' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_show_date',
			[
				'label'        => __('Date', 'essential-addons-for-elementor-lite'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Show', 'essential-addons-for-elementor-lite'),
				'label_off'    => __('Hide', 'essential-addons-for-elementor-lite'),
				'return_value' => 'yes',
				'default'      => 'yes',
				'condition'    => [
					'eael_show_meta' => 'yes',
				],
			]
		);

        $this->end_controls_section();

		/**
		 * Query And Layout Controls!
		 * @source includes/elementor-helper.php
		 */
		do_action('eael/controls/query', $this);

		//Image controll
		$this->start_controls_section(
            'eael_section_post_carousel_image',
            [
                'label' => __('Image', 'essential-addons-for-elementor-lite'),
            ]
        );

		$this->add_control(
			'eael_show_image',
			[
				'label'        => __('Show Image', 'essential-addons-for-elementor-lite'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Show', 'essential-addons-for-elementor-lite'),
				'label_off'    => __('Hide', 'essential-addons-for-elementor-lite'),
				'return_value' => 'yes',
				'default'      => 'yes',
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name'      => 'image',
				'exclude'   => ['custom'],
				'default'   => 'medium',
				'condition' => [
					'eael_show_image' => 'yes',
				],
			]
		);

		$this->add_control(
			'enable_post_carousel_image_ratio',
			[
				'label' => __('Enable Image Ratio', 'essential-addons-for-elementor-lite'),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __('Yes', 'essential-addons-for-elementor-lite'),
				'label_off' => __('No', 'essential-addons-for-elementor-lite'),
				'return_value' => 'yes',
				'default' => '',
				'condition' => [
					'eael_show_image' => 'yes',
				],
			]
		);

		$this->add_responsive_control(
			'post_carousel_image_ratio',
			[
				'label'      => __('Image Ratio', 'essential-addons-for-elementor-lite'),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min'  => 0.1,
						'max'  => 2,
						'step' => 0.01,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 0.66,
				],
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} div.eael-entry-thumbnail' => 'padding-bottom: calc({{SIZE}} * 100%);height: auto !important;',
				],
				'condition' => [
					'eael_show_image' => 'yes',
					'enable_post_carousel_image_ratio' => 'yes',
				],
			]
		);

		$this->add_control(
            'eael_show_fallback_img',
            [
                'label'        => __('Fallback Image', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __('Show', 'essential-addons-for-elementor-lite'),
                'label_off'    => __('Hide', 'essential-addons-for-elementor-lite'),
                'return_value' => 'yes',
                'default'      => '',
                'condition'    => [
                    'eael_show_image' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'eael_post_carousel_fallback_img',
            [
                'label'     => '',
                'type'      => Controls_Manager::MEDIA,
                'condition' => [
                    'eael_show_image' => 'yes',
                ],
                'ai' => [
                    'active' => false,
                ],
            ]
        );

        $this->end_controls_section();

		/**
		 * Content Tab: Carousel Settings
		 */

		$this->start_controls_section(
			'section_additional_options',
			[
				'label' => __('Carousel', 'essential-addons-elementor'),
			]
		);

		$this->add_control(
			'carousel_effect',
			[
				'label'       => __('Effect', 'essential-addons-elementor'),
				'description' => __('Sets transition effect', 'essential-addons-elementor'),
				'type'        => Controls_Manager::SELECT,
				'default'     => 'slide',
				'options'     => [
					'slide'     => __('Slide', 'essential-addons-elementor'),
					'fade'      => __('Fade', 'essential-addons-elementor'),
					'cube'      => __('Cube', 'essential-addons-elementor'),
					'coverflow' => __('Coverflow', 'essential-addons-elementor'),
					'flip'      => __('Flip', 'essential-addons-elementor'),
				],
			]
		);

		$this->add_responsive_control(
			'items',
			[
				'label'          => __('Visible Items', 'essential-addons-elementor'),
				'type'           => Controls_Manager::SLIDER,
				'default'        => ['size' => 3],
				'tablet_default' => ['size' => 2],
				'mobile_default' => ['size' => 1],
				'frontend_available' => true,
				'range'          => [
					'px' => [
						'min'  => 1,
						'max'  => 10,
						'step' => 1,
					],
				],
				'size_units'     => '',
				'condition'      => [
					'carousel_effect' => ['slide', 'coverflow'],
				],
			]
		);

		$this->add_responsive_control(
			'margin',
			[
				'label'      => __('Items Gap', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'default'    => ['size' => 10],
				'range'      => [
					'px' => [
						'min'  => 0,
						'max'  => 100,
						'step' => 1,
					],
				],
				'size_units' => '',
				'condition'  => [
					'carousel_effect' => ['slide', 'coverflow'],
				],
			]
		);

		$this->add_responsive_control(
			'post_image_height',
			[
				'label'      => __('Image Height', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'default'    => ['size' => 350],
				'range'      => [
					'px' => [
						'min'  => 0,
						'max'  => 600,
						'step' => 1,
					],
				],
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .eael-entry-thumbnail' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'slider_speed',
			[
				'label'              => __( 'Slider Speed', 'essential-addons-elementor' ),
				'description'        => __( 'Duration of transition between slides (in ms)', 'essential-addons-elementor' ),
				'type'               => Controls_Manager::SLIDER,
				'default'            => [ 'size' => 400 ],
				'range'              => [
					'px' => [
						'min'  => 100,
						'max'  => 10000,
						'step' => 1,
					],
				],
				'size_units'         => '',
			]
		);

		$this->add_control(
			'autoplay',
			[
				'label'        => __('Autoplay', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => 'yes',
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
			]
		);

		$this->add_control(
			'enable_marquee',
			[
				'label'        => __( 'Enable Marquee', 'essential-addons-elementor' ),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __( 'Yes', 'essential-addons-elementor' ),
				'label_off'    => __( 'No', 'essential-addons-elementor' ),
				'default'      => 'no',
				'return_value' => 'yes',
				'condition'    => [
					'autoplay' => 'yes',
					'carousel_effect' => [ 'slide', 'coverflow' ],
				],
			]
		);

		$this->add_control(
			'autoplay_speed',
			[
				'label'      => __('Autoplay Speed', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'default'    => ['size' => 2000],
				'range'      => [
					'px' => [
						'min'  => 500,
						'max'  => 5000,
						'step' => 1,
					],
				],
				'size_units' => '',
				'condition'  => [
					'autoplay' => 'yes',
					'enable_marquee!' => 'yes',
				],
			]
		);

		$this->add_control(
			'pause_on_hover',
			[
				'label'        => __('Pause On Hover', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '',
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
				'condition'    => [
					'autoplay' => 'yes',
					'enable_marquee!' => 'yes',
				],
			]
		);

		$this->add_control(
			'infinite_loop',
			[
				'label'        => __('Infinite Loop', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => 'yes',
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
			]
		);

		$this->add_control(
			'grab_cursor',
			[
				'label'        => __('Grab Cursor', 'essential-addons-elementor'),
				'description'  => __('Shows grab cursor when you hover over the slider', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '',
				'label_on'     => __('Show', 'essential-addons-elementor'),
				'label_off'    => __('Hide', 'essential-addons-elementor'),
				'return_value' => 'yes',
			]
		);

		$this->add_control(
			'navigation_heading',
			[
				'label'     => __('Navigation', 'essential-addons-elementor'),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control( 
			'eael_global_warning_text', [
			'type'            => Controls_Manager::RAW_HTML,
			'raw'             => __( 'Arrows & Dots are not available on <strong>Marquee</stong> Mode.', 'essential-addons-elementor' ),
			'content_classes' => 'eael-warning',
			'condition'  => [
				'autoplay' => 'yes',
				'enable_marquee' => 'yes',
				'carousel_effect' => [ 'slide', 'coverflow' ],
			],
		] );

		$this->add_control(
			'arrows',
			[
				'label'        => __('Arrows', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => 'yes',
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
			]
		);

		$this->add_control(
			'dots',
			[
				'label'        => __('Dots', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => 'yes',
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
			]
		);

		$this->end_controls_section();

		/**
		 * Content Tab: Links
		 */

		$this->start_controls_section(
			'section_post_carousel_links',
			[
				'label' => __('Links', 'essential-addons-elementor'),
				'conditions' => [
					'relation' => 'or',
					'terms' => [
						[
							'name' => 'eael_show_image',
							'operator' => '==',
							'value' => 'yes',
						],
						[
							'name' => 'eael_show_title',
							'operator' => '==',
							'value' => 'yes',
						],
						[
							'name' => 'eael_show_read_more_button',
							'operator' => '==',
							'value' => 'yes',
						],

					],
				],
			]
		);

		$this->add_control(
			'image_link_heading',
			[
				'label'     => __('Image', 'essential-addons-elementor'),
				'type'      => Controls_Manager::HEADING,
				'condition' => [
					'eael_show_image' => 'yes',
				],
			]
		);

		$this->add_control(
			'image_link',
			[
				'label'        => __('Enable', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
				'default' 	   => 'yes',
				'condition'    => [
					'eael_show_image' => 'yes',
				],
			]
		);

		$this->add_control(
			'image_link_nofollow',
			[
				'label'        => __('No Follow', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'true',
				'condition'    => [
					'eael_show_image' => 'yes',
					'image_link'      => 'yes',
				],
			]
		);

		$this->add_control(
			'image_link_target_blank',
			[
				'label'        => __('Open in New Tab', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'true',
				'condition'    => [
					'eael_show_image' => 'yes',
					'image_link'      => 'yes',
				],
				'separator' => 'after',
			]
		);

		$this->add_control(
			'title_link_heading',
			[
				'label'     => __('Title', 'essential-addons-elementor'),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'eael_show_title' => 'yes',
				],
			]
		);

		$this->add_control(
			'title_link',
			[
				'label'        => __('Enable', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
				'default' 	   => 'yes',
				'condition'    => [
					'eael_show_image' => 'yes',
				],
			]
		);

		$this->add_control(
			'title_link_nofollow',
			[
				'label'        => __('No Follow', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'true',
				'condition'    => [
					'eael_show_title' => 'yes',
					'title_link'      => 'yes',
				],
			]
		);

		$this->add_control(
			'title_link_target_blank',
			[
				'label'        => __('Open in New Tab', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'true',
				'condition'    => [
					'eael_show_title' => 'yes',
					'title_link'      => 'yes',
				],
			]
		);

		$this->add_control(
			'read_more_link',
			[
				'label'     => __('Read More', 'essential-addons-elementor'),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'eael_show_read_more_button' => 'yes',
				],
			]
		);

		$this->add_control(
			'read_more_link_nofollow',
			[
				'label' => __('No Follow', 'essential-addons-elementor'),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __('Yes', 'essential-addons-elementor'),
				'label_off' => __('No', 'essential-addons-elementor'),
				'return_value' => 'true',
				'condition' => [
					'eael_show_read_more_button' => 'yes',
				],
			]
		);

		$this->add_control(
			'read_more_link_target_blank',
			[
				'label' => __('Open in New Tab', 'essential-addons-elementor'),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => __('Yes', 'essential-addons-elementor'),
				'label_off' => __('No', 'essential-addons-elementor'),
				'return_value' => 'true',
				'condition' => [
					'eael_show_read_more_button' => 'yes',
				],
			]
		);

		$this->end_controls_section();

		//General styling
		$this->start_controls_section(
			'eael_section_post_grid_wrapper_style',
			[
				'label' => __('General', 'essential-addons-elementor'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'     => 'eael_section_post_grid_container_background',
				'types'    => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}}.elementor-widget-eael-post-carousel',
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'     => 'eael_section_post_grid_container_border',
				'selector' => '{{WRAPPER}}.elementor-widget-eael-post-carousel',
			]
		);

		$this->add_control(
			'eael_section_post_grid_container_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'essential-addons-elementor' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors'  => [
					'{{WRAPPER}}.elementor-widget-eael-post-carousel' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'eael_section_post_grid_container_padding',
			[
				'label'      => esc_html__( 'Padding', 'essential-addons-elementor' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors'  => [
					'{{WRAPPER}}.elementor-widget-eael-post-carousel' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'eael_section_post_grid_container_margin',
			[
				'label'      => esc_html__( 'Margin', 'essential-addons-elementor' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors'  => [
					'{{WRAPPER}}.elementor-widget-eael-post-carousel' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		//Carousel styling
		$this->start_controls_section(
			'eael_section_post_grid_carousel_style',
			[
				'label' => __('Carousel', 'essential-addons-elementor'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'     => 'eael_section_post_grid_wrapper_background',
				'types'    => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .eael-post-carousel-wrap .eael-post-carousel',
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'     => 'eael_section_post_grid_wrapper_border',
				'selector' => '{{WRAPPER}} .eael-post-carousel-wrap .eael-post-carousel',
			]
		);

		$this->add_control(
			'eael_section_post_grid_wrapper_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'essential-addons-elementor' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors'  => [
					'{{WRAPPER}} .eael-post-carousel-wrap .eael-post-carousel' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'eael_section_post_grid_wrapper_padding',
			[
				'label'      => esc_html__( 'Padding', 'essential-addons-elementor' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors'  => [
					'{{WRAPPER}} .eael-post-carousel-wrap .eael-post-carousel' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'eael_section_post_grid_wrapper_margin',
			[
				'label'      => esc_html__( 'Margin', 'essential-addons-elementor' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors'  => [
					'{{WRAPPER}} .eael-post-carousel-wrap .eael-post-carousel' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();


		// Styleing post items
		$this->start_controls_section(
			'eael_section_post_grid_style',
			[
				'label' => __('Post', 'essential-addons-elementor'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'eael_post_carousel_is_gradient_bg',
			[
				'label'        => __('Use Gradient Background?', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'      => 'eael_post_grid_bg_color',
				'label'     => __('Background', 'essential-addons-elementor'),
				'types'     => ['classic', 'gradient'],
				'selector'  => '{{WRAPPER}} .eael-grid-post-holder',
				'condition' => [
					'eael_post_carousel_is_gradient_bg' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_post_grid_bg_color',
			[
				'label'     => __('Background Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#fff',
				'selectors' => [
					'{{WRAPPER}} .eael-grid-post-holder' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'eael_post_carousel_is_gradient_bg' => '',
				],

			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'     => 'eael_post_grid_border',
				'label'    => esc_html__('Border', 'essential-addons-elementor'),
				'selector' => '{{WRAPPER}} .eael-grid-post-holder',
			]
		);

		$this->add_control(
			'eael_post_grid_border_radius',
			[
				'label'     => esc_html__('Border Radius', 'essential-addons-elementor'),
				'type'      => Controls_Manager::DIMENSIONS,
				'selectors' => [
					'{{WRAPPER}} .eael-grid-post-holder' => 'border-radius: {{TOP}}px {{RIGHT}}px {{BOTTOM}}px {{LEFT}}px;',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'eael_post_grid_box_shadow',
				'selector' => '{{WRAPPER}} .eael-grid-post-holder',
			]
		);
		$this->add_control(
			'eael_post_grid_box_hover',
			[
				'label'     => __('Hover Effect', 'essential-addons-elementor'),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'     => 'eael_post_grid_box_hover_background',
				'label'    => __('Background', 'essential-addons-elementor'),
				'types'    => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .eael-grid-post-holder:hover',
			]
		);

		$this->end_controls_section();

		/**
		 * Section Title Style
		 */
		$this->start_controls_section(
			'eael_carousel_title_style',
			[
				'label' => __('Carousel Title', 'essential-addons-elementor'),
				'tab'   => Controls_Manager::TAB_STYLE,
				'condition' => [
					'eael_post_carousel_title!' => '',
				],
			]
		);

		$this->add_control(
			'eael_carousel_title_alignment',
			[
				'label'   => esc_html__( 'Alignment', 'essential-addons-elementor' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'essential-addons-elementor' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'essential-addons-elementor' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'essential-addons-elementor' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default'   => 'center',
				'toggle'    => false,
				'selectors' => [
					'{{WRAPPER}} .eael-post-carousel-title' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'eael_carousel_title_background',
				'types' => [ 'classic', 'gradient' ],
				'exclude' => [ 'image' ],
				'selector' => '{{WRAPPER}} .eael-post-carousel-title',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'eael_carousel_title_typography',
				'selector' => '{{WRAPPER}} .eael-post-carousel-title',
			]
		);

		$this->add_control(
			'eael_carousel_title_color',
			[
				'label'     => esc_html__( 'Text Color', 'eael-post-carousel-title' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .eael-post-carousel-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'eael_carousel_title_border',
				'selector' => '{{WRAPPER}} .eael-post-carousel-title',
			]
		);

		$this->add_control(
			'eael_carousel_title_border_radius',
			[
				'label'      => esc_html__( 'Border Radius', 'eael-post-carousel-title' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors'  => [
					'{{WRAPPER}} .eael-post-carousel-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'eael_carousel_title_padding',
			[
				'label'      => esc_html__( 'Padding', 'eael-post-carousel-title' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors'  => [
					'{{WRAPPER}} .eael-post-carousel-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'eael_carousel_title_margin',
			[
				'label'      => esc_html__( 'Margin', 'eael-post-carousel-title' ),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem' ],
				'selectors'  => [
					'{{WRAPPER}} .eael-post-carousel-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();
		
		/**
		 * Thumbnail Style
		 */
		$this->start_controls_section(
			'eael_section_thumbnail_style',
			[
				'label' => __('Thumbnail', 'essential-addons-elementor'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'eael_post_grid_bg_hover_icon_new',
			[
				'label'            => __('Post Hover Icon', 'essential-addons-elementor'),
				'type'             => Controls_Manager::ICONS,
				'fa4compatibility' => 'eael_post_grid_bg_hover_icon',
				'default'          => [
					'value'   => 'fas fa-long-arrow-alt-right',
					'library' => 'fa-solid',
				],
				'condition'      => [
					'eael_post_carousel_item_style!' => 'eael-overlay',
				],
			]
		);
		$this->add_control(
			'eael_post_block_hover_animation',
			[
				'label'       => __('Hover Style', 'essential-addons-elementor'),
				'type'        => Controls_Manager::SELECT,
				'label_block' => true,
				'default'     => 'fade-in',
				'options'     => [
					'none'     => esc_html__('None', 'essential-addons-elementor'),
					'fade-in'  => esc_html__('FadeIn', 'essential-addons-elementor'),
					'zoom-in'  => esc_html__('ZoomIn', 'essential-addons-elementor'),
					'slide-up' => esc_html__('SlideUp', 'essential-addons-elementor'),
				],
			]
		);

		$this->add_control(
			'eael_thumbnail_is_gradient_background',
			[
				'label'        => __('Use Gradient Background?', 'essential-addons-elementor'),
				'type'         => \Elementor\Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'      => 'eael_thumbnail_overlay_color',
				'label'     => __('Background', 'essential-addons-elementor'),
				'types'     => ['classic', 'gradient'],
				'selector'  => '{{WRAPPER}} .eael-entry-overlay',
				'condition' => [
					'eael_thumbnail_is_gradient_background' => 'yes',
				],
			]
		);

		$this->add_control(
			'eael_thumbnail_overlay_color',
			[
				'label'     => __('Overlay Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => 'rgba(0,0,0, .75)',
				'selectors' => [
					'{{WRAPPER}} .eael-entry-overlay' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'eael_thumbnail_is_gradient_background' => '',
					'eael_post_carousel_item_style!' => 'eael-overlay',
				],
			]
		);

		$this->add_control(
			'eael_thumbnail_overlay_color_overlay',
			[
				'label'     => __('Overlay Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#BDC3C8AD',
				'selectors' => [
					'{{WRAPPER}} .eael-entry-overlay' => 'background-color: {{VALUE}}',
				],
				'condition' => [
					'eael_thumbnail_is_gradient_background' => '',
					'eael_post_carousel_item_style' => 'eael-overlay',
				],
			]
		);

		$this->add_control(
			'eael_thumbnail_border_radius',
			[
				'label'      => __('Border Radius', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors'  => [
					'{{WRAPPER}} .eael-post-carousel .eael-entry-thumbnail img, {{WRAPPER}} .eael-post-carousel .eael-entry-overlay' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'eael_post_carousel_thumbnail_margin',
			[
				'label'      => __('Margin', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors'  => [
					'{{WRAPPER}} .eael-post-carousel .eael-entry-media' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		/**
		 * Read More Button Controls
		 */
		do_action('eael/controls/read_more_button_style', $this);
		/**
		 * Color & Typography Controls
		 */
		$this->start_controls_section(
			'eael_section_typography',
			[
				'label' => __('Color & Typography', 'essential-addons-elementor'),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'eael_post_grid_title_style',
			[
				'label'     => __('Title', 'essential-addons-elementor'),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'eael_post_grid_title_color',
			[
				'label'     => __('Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#303133',
				'selectors' => [
					'{{WRAPPER}} .eael-entry-title, {{WRAPPER}} .eael-entry-title a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'eael_post_grid_title_hover_color',
			[
				'label'     => __('Hover Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#23527c',
				'selectors' => [
					'{{WRAPPER}} .eael-entry-title:hover, {{WRAPPER}} .eael-entry-title a:hover' => 'color: {{VALUE}};',
				],
				'condition' => [
					'eael_post_carousel_item_style!' => 'eael-overlay',
				],
			]
		);

		$this->add_responsive_control(
			'eael_post_grid_title_alignment',
			[
				'label'     => __('Alignment', 'essential-addons-elementor'),
				'type'      => Controls_Manager::CHOOSE,
				'options'   => [
					'left'   => [
						'title' => __('Left', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-left',
					],
					'center' => [
						'title' => __('Center', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-center',
					],
					'right'  => [
						'title' => __('Right', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .eael-entry-title' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'eael_post_grid_title_typography',
				'label'    => __('Typography', 'essential-addons-elementor'),
				'global' => [
					'default' => Global_Typography::TYPOGRAPHY_PRIMARY
				],
				'selector' => '{{WRAPPER}} .eael-entry-title, {{WRAPPER}} .eael-entry-title > a',
			]
		);

		$this->add_control(
			'eael_post_carousel_title_margin',
			[
				'label'      => __('Margin', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors'  => [
					'{{WRAPPER}} .eael-entry-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'eael_post_grid_excerpt_style',
			[
				'label'     => __('Excerpt', 'essential-addons-elementor'),
				'type'      => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'eael_post_grid_excerpt_color',
			[
				'label'     => __('Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .eael-grid-post-excerpt p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'eael_post_grid_excerpt_alignment',
			[
				'label'     => __('Alignment', 'essential-addons-elementor'),
				'type'      => Controls_Manager::CHOOSE,
				'options'   => [
					'left'    => [
						'title' => __('Left', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-left',
					],
					'center'  => [
						'title' => __('Center', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-center',
					],
					'right'   => [
						'title' => __('Right', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-right',
					],
					'justify' => [
						'title' => __('Justified', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-justify',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .eael-grid-post-excerpt p'                                => 'text-align: {{VALUE}};',
					'{{WRAPPER}} .eael-grid-post-excerpt .eael-post-elements-readmore-btn' => 'text-align: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'eael_post_grid_excerpt_typography',
				'label'    => __('Typography', 'essential-addons-elementor'),
				'global' => [
					'default' => Global_Typography::TYPOGRAPHY_TEXT
				],
				'selector' => '{{WRAPPER}} .eael-grid-post-excerpt p',
			]
		);

		$this->add_control(
			'eael_post_carousel_excerpt_margin',
			[
				'label'      => __('Margin', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors'  => [
					'{{WRAPPER}} .eael-grid-post-excerpt p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		/**
		 * Style tab: terms style
		 */
		$this->start_controls_section(
			'section_terms_style',
			[
				'label'     => __('Terms Style', 'essential-addons-elementor'),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'eael_show_post_terms' => 'yes',
				],
			]
		);
		$this->add_control(
			'eael_post_grid_terms_color',
			[
				'label'     => __('Terms Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .post-carousel-categories li a, {{WRAPPER}} .post-meta-categories li, {{WRAPPER}} .post-meta-categories li a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'eael_post_grid_terms_typography',
				'label'    => __('Meta Typography', 'essential-addons-elementor'),
				'global' => [
					'default' => Global_Typography::TYPOGRAPHY_TEXT
				],
				'selector' => '{{WRAPPER}} .post-carousel-categories li a, {{WRAPPER}} .post-meta-categories li, {{WRAPPER}} .post-meta-categories li a',
			]
		);

		$this->add_control(
			'eael_post_carousel_terms_margin',
			[
				'label'      => __('Margin', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors'  => [
					'{{WRAPPER}} .post-carousel-categories, {{WRAPPER}} .post-meta-categories' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		/**
		 * Style tab: Meta Date style
		 */
		$this->start_controls_section(
			'section_meta_date_style',
			[
				'label'     => __('Meta Date Style', 'essential-addons-elementor'),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'eael_post_carousel_preset_style' => ['three'],
					'eael_show_meta'                  => 'yes',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name'     => 'eael_post_grid_meta_date_background',
				'label'    => __('Background', 'essential-addons-elementor'),
				'types'    => ['classic', 'gradient'],
				'selector' => '{{WRAPPER}} .eael-meta-posted-on',
			]
		);

		$this->add_control(
			'eael_post_grid_meta_date_color',
			[
				'label'     => __('Meta Date Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .eael-meta-posted-on' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'eael_post_grid_meta_date_typography',
				'label'    => __('Meta Date Typography', 'essential-addons-elementor'),
				'global' => [
					'default' => Global_Typography::TYPOGRAPHY_TEXT
				],
				'selector' => '{{WRAPPER}} .eael-meta-posted-on',
			]
		);

		$this->add_control(
			'eael_post_carousel_meta_date_margin',
			[
				'label'      => __('Margin', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors'  => [
					'{{WRAPPER}} .eael-meta-posted-on' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'      => 'eael_post_carousel_meta_date_shadow',
				'label'     => __('Shadow', 'essential-addons-elementor'),
				'selector'  => '{{WRAPPER}} .eael-meta-posted-on',
				'condition' => [
					'eael_post_carousel_preset_style' => ['three'],
				],
			]
		);
		$this->end_controls_section();

		/**
		 * Style Tab: Meta Date Position
		 */
		do_action(
			'eael/controls/custom_positioning',
			$this,
			'eael_meta_date_position_',
			__('Meta Date Position', 'essential-addons-elementor'),
			'.eael-meta-posted-on',
			[
				'eael_post_carousel_preset_style' => ['three'],
				'eael_show_meta'                  => 'yes',
			]
		);

		/**
		 * Style tab: Meta Style
		 */
		$this->start_controls_section(
			'section_meta_style_style',
			[
				'label'     => __('Meta Style', 'essential-addons-elementor'),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'eael_show_meta' => 'yes',
				],
			]
		);
		$this->add_control(
			'eael_post_grid_meta_color',
			[
				'label'     => __('Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .eael-entry-meta, .eael-entry-meta a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'eael_post_grid_meta_alignment',
			[
				'label'     => __('Alignment', 'essential-addons-elementor'),
				'type'      => Controls_Manager::CHOOSE,
				'options'   => [
					'flex-start' => [
						'title' => __('Left', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-left',
					],
					'center'     => [
						'title' => __('Center', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-center',
					],
					'flex-end'   => [
						'title' => __('Right', 'essential-addons-elementor'),
						'icon'  => 'eicon-text-align-right',
					],
				],
				'default'   => 'center',
				'selectors' => [
					'{{WRAPPER}} .eael-grid-post .eael-entry-footer, {{WRAPPER}} .eael-grid-post .eael-entry-meta' => 'justify-content: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name'     => 'eael_post_grid_meta_header_typography',
				'label'    => __('Typography', 'essential-addons-elementor'),
				'global' => [
					'default' => Global_Typography::TYPOGRAPHY_TEXT
				],
				'selector' => '{{WRAPPER}} .eael-entry-meta > span,{{WRAPPER}} .eael-entry-meta > .eael-posted-by,{{WRAPPER}} .eael-entry-meta > .eael-posted-on',
			]
		);

		$this->add_control(
			'eael_post_carousel_meta_margin',
			[
				'label'      => __('Margin', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%', 'em'],
				'selectors'  => [
                    '{{WRAPPER}} .eael-entry-header .eael-entry-meta' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .eael-entry-footer' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		/**
		 * Style Tab: Meta Position
		 */
		do_action(
			'eael/controls/custom_positioning',
			$this,
			'eael_meta_footer_',
			__('Meta Position', 'essential-addons-elementor'),
			'.eael-grid-post .eael-entry-footer',
			[
				'eael_show_meta' => 'yes',
				'meta_position'  => ['meta-entry-footer'],
			]
		);

		do_action(
			'eael/controls/custom_positioning',
			$this,
			'eael_meta_header_',
			__('Meta Position', 'essential-addons-elementor'),
			'.eael-grid-post .eael-entry-meta',
			[
				'eael_show_meta' => 'yes',
				'meta_position'  => ['meta-entry-header'],
			]
		);

		/**
		 * Style Tab: Arrows
		 */
		$this->start_controls_section(
			'section_arrows_style',
			[
				'label'     => __('Arrows', 'essential-addons-elementor'),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'arrows' => 'yes',
				],
			]
		);

		$this->add_control(
			'arrow',
			[
				'label'       => __('Type', 'essential-addons-elementor'),
				'type'        => Controls_Manager::SELECT,
				'label_block' => true,
				'default'     => 'fa fa-angle-right',
				'options'     => [
					'fa fa-angle-right'          => __('Angle', 'essential-addons-elementor'),
					'fa fa-angle-double-right'   => __('Double Angle', 'essential-addons-elementor'),
					'fa fa-chevron-right'        => __('Chevron', 'essential-addons-elementor'),
					'fa fa-chevron-circle-right' => __('Chevron Circle', 'essential-addons-elementor'),
					'fa fa-arrow-right'          => __('Arrow', 'essential-addons-elementor'),
					'fa fa-long-arrow-right'     => __('Long Arrow', 'essential-addons-elementor'),
					'fa fa-caret-right'          => __('Caret', 'essential-addons-elementor'),
					'fa fa-caret-square-o-right' => __('Caret Square', 'essential-addons-elementor'),
					'fa fa-arrow-circle-right'   => __('Arrow Circle', 'essential-addons-elementor'),
					'fa fa-arrow-circle-o-right' => __('Arrow Circle O', 'essential-addons-elementor'),
					'fa fa-toggle-right'         => __('Toggle', 'essential-addons-elementor'),
					'fa fa-hand-o-right'         => __('Hand', 'essential-addons-elementor'),
				],
			]
		);

		$this->add_responsive_control(
			'arrows_size',
			[
				'label'      => __('Size', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'default'    => ['size' => '22'],
				'range'      => [
					'px' => [
						'min'  => 15,
						'max'  => 100,
						'step' => 1,
					],
				],
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'left_arrow_position',
			[
				'label'      => __('Align Left', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min'  => -100,
						'max'  => 40,
						'step' => 1,
					],
				],
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'left: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'right_arrow_position',
			[
				'label'      => __('Align Right', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min'  => -100,
						'max'  => 40,
						'step' => 1,
					],
				],
				'size_units' => ['px'],
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-next' => 'right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->start_controls_tabs('tabs_arrows_style');

		$this->start_controls_tab(
			'tab_arrows_normal',
			[
				'label' => __('Normal', 'essential-addons-elementor'),
			]
		);

		$this->add_control(
			'arrows_bg_color_normal',
			[
				'label'     => __('Background Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'arrows_color_normal',
			[
				'label'     => __('Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'        => 'arrows_border_normal',
				'label'       => __('Border', 'essential-addons-elementor'),
				'placeholder' => '1px',
				'default'     => '1px',
				'selector'    => '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev',
			]
		);

		$this->add_control(
			'arrows_border_radius_normal',
			[
				'label'      => __('Border Radius', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_arrows_hover',
			[
				'label' => __('Hover', 'essential-addons-elementor'),
			]
		);

		$this->add_control(
			'arrows_bg_color_hover',
			[
				'label'     => __('Background Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-next:hover, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev:hover' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'arrows_color_hover',
			[
				'label'     => __('Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-next:hover, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'arrows_border_color_hover',
			[
				'label'     => __('Border Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-next:hover, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_responsive_control(
			'arrows_padding',
			[
				'label'      => __('Padding', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator'  => 'before',
			]
		);

		$this->end_controls_section();

		/**
		 * Style Tab: Dots
		 */
		$this->start_controls_section(
			'section_dots_style',
			[
				'label'     => __('Dots', 'essential-addons-elementor'),
				'tab'       => Controls_Manager::TAB_STYLE,
				'condition' => [
					'dots' => 'yes',
				],
			]
		);

		$this->add_control(
			'dots_position',
			[
				'label'   => __('Position', 'essential-addons-elementor'),
				'type'    => Controls_Manager::SELECT,
				'options' => [
					'inside'  => __('Inside', 'essential-addons-elementor'),
					'outside' => __('Outside', 'essential-addons-elementor'),
				],
				'default' => 'outside',
			]
		);

		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name'      => 'dots_background',
				'types'     => [ 'classic', 'gradient' ],
				'exclude'   => [ 'image' ],
				'selector'  => '{{WRAPPER}} .swiper-container-wrap .swiper-pagination',
				'condition' => [
					'dots_position' => 'outside'
				]
			]
		);

		$this->add_control(
			'is_use_dots_custom_width_height',
			[
				'label'        => __('Use Custom Width/Height?', 'essential-addons-elementor'),
				'type'         => Controls_Manager::SWITCHER,
				'label_on'     => __('Yes', 'essential-addons-elementor'),
				'label_off'    => __('No', 'essential-addons-elementor'),
				'return_value' => 'yes',
			]
		);

		$this->add_responsive_control(
			'dots_width',
			[
				'label'      => __('Width', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min'  => 2,
						'max'  => 100,
						'step' => 1,
					],
				],
				'size_units' => '',
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet' => 'width: {{SIZE}}{{UNIT}}',
				],
				'condition'  => [
					'is_use_dots_custom_width_height' => 'yes',
				],
			]
		);

		$this->add_responsive_control(
			'dots_height',
			[
				'label'      => __('Height', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min'  => 2,
						'max'  => 100,
						'step' => 1,
					],
				],
				'size_units' => '',
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}}',
				],
				'condition'  => [
					'is_use_dots_custom_width_height' => 'yes',
				],
			]
		);

		$this->add_responsive_control(
			'dots_size',
			[
				'label'      => __('Size', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min'  => 2,
						'max'  => 100,
						'step' => 1,
					],
				],
				'size_units' => '',
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}',
				],
				'condition'  => [
					'is_use_dots_custom_width_height' => '',
				],
			]
		);

		$this->add_responsive_control(
			'dots_spacing',
			[
				'label'      => __('Spacing', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min'  => 1,
						'max'  => 30,
						'step' => 1,
					],
				],
				'size_units' => '',
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet' => 'margin-left: {{SIZE}}{{UNIT}}; margin-right: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name'        => 'dots_border_normal',
				'label'       => __('Border', 'essential-addons-elementor'),
				'exclude'     => [ 'color' ],
				'selector'    => '{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet',
			]
		);

		$this->add_control(
			'dots_border_radius_normal',
			[
				'label'      => __('Border Radius', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'dots_padding',
			[
				'label'              => __('Padding', 'essential-addons-elementor'),
				'type'               => Controls_Manager::DIMENSIONS,
				'size_units'         => ['px', 'em', '%'],
				'allowed_dimensions' => 'vertical',
				'placeholder'        => [
					'top'    => '',
					'right'  => 'auto',
					'bottom' => '',
					'left'   => 'auto',
				],
				'selectors'          => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullets' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->start_controls_tabs('tabs_dots_style');

		$this->start_controls_tab(
			'tab_dots_normal',
			[
				'label' => __('Normal', 'essential-addons-elementor'),
			]
		);

		$this->add_control(
			'dots_color_normal',
			[
				'label'     => __('Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet:not(.swiper-pagination-bullet-active)' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'dots_border_normal_color',
			[
				'label'     => __('Border Color', 'essential-addons-for-elementor-lite'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet' => 'border-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_dots_hover',
			[
				'label' => __('Hover', 'essential-addons-elementor'),
			]
		);

		$this->add_control(
			'dots_color_hover',
			[
				'label'     => __('Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet:hover' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'dots_border_color_hover',
			[
				'label'     => __('Border Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_dots_active',
			[
				'label' => __('Active', 'essential-addons-elementor'),
			]
		);
		
		$this->add_control(
			'active_dot_color_normal',
			[
				'label'     => __('Color', 'essential-addons-elementor'),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet-active' => 'background: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'active_dots_width',
			[
				'label'      => __('Width', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min'  => 2,
						'max'  => 100,
						'step' => 1,
					],
				],
				'size_units' => '',
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet-active' => 'width: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$this->add_responsive_control(
			'active_dots_height',
			[
				'label'      => __('Height', 'essential-addons-elementor'),
				'type'       => Controls_Manager::SLIDER,
				'range'      => [
					'px' => [
						'min'  => 2,
						'max'  => 100,
						'step' => 1,
					],
				],
				'size_units' => '',
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet-active' => 'height: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$this->add_control(
			'active_dots_radius',
			[
				'label'      => __('Border Radius', 'essential-addons-elementor'),
				'type'       => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors'  => [
					'{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet-active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name'     => 'active_dots_shadow',
				'label'    => __('Shadow', 'essential-addons-elementor'),
				'selector' => '{{WRAPPER}} .swiper-container-wrap .swiper-pagination-bullet-active',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();
	}

	protected function eael_print_link_attributes ( $settings ) {
		if( ! empty( $settings['title_link'] ) ) {
			$link_attributes = [
				'class' => 'eael-grid-post-link',
				'href'  => get_permalink(),
				'title' => strip_tags( get_the_title() ),
			];
			
			if ( !empty( $settings['title_link_nofollow'] ) ) {
				$link_attributes['rel'] = 'nofollow';
			}

			if ( !empty( $settings['title_link_target_blank'] ) ) {
				$link_attributes['target'] = '_blank';
			}
			$attrString = '';
			foreach ( $link_attributes as $key => $value ) {
				$attrString .= sprintf( ' %s="%s"', $key, esc_attr( $value ) );
			}

			printf( '<a%s>', $attrString );
		}
	}

	protected function print_entry_content_style_1( $settings ) {
		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		} // Exit if accessed directly

		if ( $settings['eael_show_title'] || $settings['eael_show_meta'] || $settings['eael_show_excerpt'] ):
			echo '<div class="eael-entry-wrapper">';

			$metaMarkup = '';
			$metaMarkup .= '<div class="eael-entry-meta">';
			if ( $settings['eael_show_author'] === 'yes' ) {
				$metaMarkup .= '<span class="eael-posted-by">' . get_the_author_posts_link() . '</span>';
			}
			if ( $settings['eael_show_date'] === 'yes' ) {
				$metaMarkup .= '<span class="eael-posted-on"><time datetime="' . get_the_date() . '">' . get_the_date() . '</time></span>';
			}
			$metaMarkup .= '</div>';

			// render
			echo '<header class="eael-entry-header">';
			$html = '';
			if ( $settings['eael_show_title'] ) {
				$html .= '<' . Helper::eael_validate_html_tag( $settings['title_tag'] ) . ' class="eael-entry-title">';
				
				//Print Link
				$this->eael_print_link_attributes( $settings );
				
				
				if ( empty( $settings['eael_title_length'] ) ) {
					$html .= get_the_title();
				} else {
					$html .= implode( " ", array_slice( explode( " ", get_the_title() ), 0, $settings['eael_title_length'] ) );
				}
				$html .= '</a%s>';
				$html .= '</' . Helper::eael_validate_html_tag( $settings['title_tag'] ) . '>';
			}
			if ( $settings['eael_show_meta'] && $settings['meta_position'] == 'meta-entry-header' ) {
				$html .= $metaMarkup;
			}
			echo wp_kses( $html, Helper::eael_allowed_tags() );
			echo '</header>';

			echo '</div>';


			echo '<div class="eael-entry-content">
				<div class="eael-grid-post-excerpt">';
				if ( $settings['eael_show_excerpt'] ) {
					if ( empty( $settings['eael_excerpt_length'] ) ) {
						$content = strip_shortcodes( get_the_excerpt() ? get_the_excerpt() : get_the_content() );
						echo '<p>' . wp_kses( $content, Helper::eael_allowed_tags() ) . '</p>';
					} else {
						$read_more = $settings['expanison_indicator'] . '<a href="' . esc_url( get_the_permalink() ) . '" class="eael-post-elements-readmore-btn"' . ( $settings['read_more_link_nofollow'] ? 'rel="nofollow"' : '' ) . ( $settings['read_more_link_target_blank'] ? 'target="_blank"' : '' ) . '>' . esc_attr( $settings['read_more_button_text'] ) . '</a>';
						if ( class_exists( 'WooCommerce' ) && $settings['post_type'] == 'product' ) {
							$read_more = $settings['expanison_indicator'];
						}
						$content = wp_trim_words( strip_shortcodes( get_the_excerpt() ? get_the_excerpt() : get_the_content() ), $settings['eael_excerpt_length'], $read_more );
						echo '<p>' . wp_kses( $content, Helper::eael_allowed_tags() ) . '</p>';
					}
				}
			
				if ( class_exists( 'WooCommerce' ) && $settings['post_type'] == 'product' ) {
					echo '<p class="eael-entry-content-btn">';
					woocommerce_template_loop_add_to_cart();
					echo '</p>';
				}
				echo '</div>
			</div>';


			if ( $settings['eael_show_meta'] && $settings['meta_position'] == 'meta-entry-footer' ) {
				
				$entry_footer = '<div class="eael-entry-footer">';
				if ( $settings['eael_show_avatar'] === 'yes' ) {
					$author_id = get_the_author_meta('ID');
					$author_name = get_the_author_meta( 'nicename', $author_id  );
					$entry_footer .= '<div class="eael-author-avatar">
						<a href="' . get_author_posts_url( $author_id ) . '" aria-label="' . esc_attr( $author_name ) . '">' . get_avatar( $author_id, 96 ) . '</a>
					</div>';
				}
				$entry_footer .= '<div class="eael-entry-meta">';
				if ( $settings['eael_show_author'] === 'yes' ) {
					$entry_footer .= '<div class="eael-posted-by">' . get_the_author_posts_link() . '</div>';
				}
				if ( $settings['eael_show_date'] === 'yes' ) {
					$entry_footer .= '<div class="eael-posted-on"><time datetime="' . get_the_date() . '">' . get_the_date() . '</time></div>';
				}
				$entry_footer .= '</div>';
				$entry_footer .= '</div>';
				echo wp_kses( $entry_footer, Helper::eael_allowed_tags( [ 'a' => [ 'aria-label' => [] ] ] ) );
			}
		endif;
	}

	protected function print_entry_content_style_2( $settings ) {
		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		} // Exit if accessed directly

		if ( $settings['eael_show_title'] || $settings['eael_show_meta'] || $settings['eael_show_excerpt'] ):
			echo '<div class="eael-entry-wrapper">';

			echo '<header class="eael-entry-header">';

			if ( $settings['eael_show_meta'] && $settings['meta_position'] == 'meta-entry-header' ) {


				echo '<div class="eael-entry-meta">';
				if ( $settings['eael_show_date'] === 'yes' ) {
					echo '<span class="eael-meta-posted-on"><i class="far fa-clock"></i><time datetime="' . get_the_date() . '">' . get_the_date() . '</time></span>';
				}
				if ( $settings['eael_show_post_terms'] === 'yes' ) {
					if ( $settings['eael_post_terms'] === 'category' ) {
						$terms = get_the_category();
					}
					if ( $settings['eael_post_terms'] === 'tags' ) {
						$terms = get_the_tags();
					}
					if ( ! empty( $terms ) ) {
						$html  = '<ul class="post-meta-categories">';
						$count = 0;
						foreach ( $terms as $term ) {
							if ( $count === intval( $settings['eael_post_terms_max_length'] ) ) {
								break;
							}
							if ( $count === 0 ) {
								$html .= '<li class="meta-cat-icon"><i class="far fa-folder-open"></i></li>';
							}
							$link = ( $settings['eael_post_terms'] === 'category' ) ? get_category_link( $term->term_id ) : get_tag_link( $term->term_id );
							$html .= '<li>';
							$html .= '<a href="' . esc_url( $link ) . '">';
							$html .= $term->name;
							$html .= '</a>';
							$html .= '</li>';
							$count++;
						}
						$html .= '</ul>';
						echo wp_kses( $html, Helper::eael_allowed_tags() );
					}
				}
				echo '</div>';


			}

			if ( $settings['eael_show_title'] ) {
				$title = '<' . Helper::eael_validate_html_tag( $settings['title_tag'] ) . ' class="eael-entry-title">';
				
				//Print Link
				$this->eael_print_link_attributes( $settings );

				if ( empty( $settings['eael_title_length'] ) ) {
					$title .= get_the_title();
				} else {
					$title .= implode( " ", array_slice( explode( " ", get_the_title() ), 0, $settings['eael_title_length'] ) );
				}
				$title .= '</a>';
				$title .= '</' . Helper::eael_validate_html_tag( $settings['title_tag'] ) . '>';
				echo wp_kses( $title, Helper::eael_allowed_tags() );
			}

			echo '</header>';


			echo '</div>';

			echo '<div class="eael-entry-content">
			<div class="eael-grid-post-excerpt">';
			if ( $settings['eael_show_excerpt'] ) {
				if ( empty( $settings['eael_excerpt_length'] ) ) {
					$content = strip_shortcodes( get_the_excerpt() ? get_the_excerpt() : get_the_content() );
					echo '<p>' . wp_kses( $content, Helper::eael_allowed_tags() ) . '</p>';
				} else {
					$read_more = $settings['expanison_indicator'] . '<a href="' . esc_url( get_the_permalink() ) . '" class="eael-post-elements-readmore-btn"' . ( $settings['read_more_link_nofollow'] ? 'rel="nofollow"' : '' ) . ( $settings['read_more_link_target_blank'] ? 'target="_blank"' : '' ) . '>' . esc_attr( $settings['read_more_button_text'] ) . '</a>';
					if ( class_exists( 'WooCommerce' ) && $settings['post_type'] == 'product' ) {
						$read_more = $settings['expanison_indicator'];
					}
					$content = wp_trim_words( strip_shortcodes( get_the_excerpt() ? get_the_excerpt() : get_the_content() ), $settings['eael_excerpt_length'], $read_more );
					echo '<p>' . wp_kses( $content, Helper::eael_allowed_tags() ) . '</p>';
				}
			}
			if ( class_exists( 'WooCommerce' ) && $settings['post_type'] == 'product' ) {
				echo '<p class="eael-entry-content-btn">';
				woocommerce_template_loop_add_to_cart();
				echo '</p>';
			}
			echo '</div>
				</div>';

			if ( $settings['eael_show_meta'] && $settings['meta_position'] == 'meta-entry-footer' ) {
				echo '<div class="eael-entry-footer-two">';

				echo '<div class="eael-entry-meta">';
				if ( $settings['eael_show_date'] === 'yes' ) {
					echo '<span class="eael-meta-posted-on"><i class="far fa-clock"></i><time datetime="' . get_the_date() . '">' . get_the_date() . '</time></span>';
				}
				if ( $settings['eael_show_post_terms'] === 'yes' ) {
					if ( $settings['eael_post_terms'] === 'category' ) {
						$terms = get_the_category();
					}

					if ( $settings['eael_post_terms'] === 'tags' ) {
						$terms = get_the_tags();
					}

					if ( ! empty( $terms ) ) {
						$html  = '<ul class="post-meta-categories">';
						$count = 0;
						foreach ( $terms as $term ) {
							if ( $count === intval( $settings['eael_post_terms_max_length'] ) ) {
								break;
							}
							if ( $count === 0 ) {
								$html .= '<li class="meta-cat-icon"><i class="far fa-folder-open"></i></li>';
							}
							$link = ( $settings['eael_post_terms'] === 'category' ) ? get_category_link( $term->term_id ) : get_tag_link( $term->term_id );
							$html .= '<li>';
							$html .= '<a href="' . esc_url( $link ) . '">';
							$html .= $term->name;
							$html .= '</a>';
							$html .= '</li>';
							$count++;
						}
						$html .= '</ul>';
						echo wp_kses( $html, Helper::eael_allowed_tags() );
					}
				}
				echo '</div>';

				echo '</div>';
			}
		endif;
	}

	protected function print_entry_content_style_3( $settings ) {
		if ( ! defined( 'ABSPATH' ) ) {
			exit;
		} // Exit if accessed directly

		if ( $settings['eael_show_title'] || $settings['eael_show_meta'] || $settings['eael_show_excerpt'] ):
			echo '<div class="eael-entry-wrapper">';

			echo '<header class="eael-entry-header">';

			if ( $settings['eael_show_title'] ) {
				$title = '';
				$title .= '<' . Helper::eael_validate_html_tag( $settings['title_tag'] ) . ' class="eael-entry-title">';
				
				//Print Link
				$this->eael_print_link_attributes( $settings );
				
				if ( empty( $settings['eael_title_length'] ) ) {
					$title .= get_the_title();
				} else {
					$title .= implode( " ", array_slice( explode( " ", get_the_title() ), 0, $settings['eael_title_length'] ) );
				}
				$title .= '</a>';
				$title .= '</' . Helper::eael_validate_html_tag( $settings['title_tag'] ) . '>';
				echo wp_kses( $title, Helper::eael_allowed_tags() );
			}

			echo '</header>';

			echo '</div>';


			echo '<div class="eael-entry-content">
				<div class="eael-grid-post-excerpt">';
				if ( $settings['eael_show_excerpt'] ) {
					if ( empty( $settings['eael_excerpt_length'] ) ) {
						$content = strip_shortcodes( get_the_excerpt() ? get_the_excerpt() : get_the_content() );
						echo '<p>' . wp_kses( $content, Helper::eael_allowed_tags() ) . '</p>';
					} else {
						$read_more = $settings['expanison_indicator'] . '<a href="' . esc_url( get_the_permalink() ) . '" class="eael-post-elements-readmore-btn"' . ( $settings['read_more_link_nofollow'] ? 'rel="nofollow"' : '' ) . ( $settings['read_more_link_target_blank'] ? 'target="_blank"' : '' ) . '>' . esc_attr( $settings['read_more_button_text'] ) . '</a>';
						if ( class_exists( 'WooCommerce' ) && $settings['post_type'] == 'product' ) {
							$read_more = $settings['expanison_indicator'];
						}
						$content = wp_trim_words( strip_shortcodes( get_the_excerpt() ? get_the_excerpt() : get_the_content() ), $settings['eael_excerpt_length'], $read_more );
						echo '<p>' . wp_kses( $content, Helper::eael_allowed_tags() ) . '</p>';
					}
				}

				if ( class_exists( 'WooCommerce' ) && $settings['post_type'] == 'product' ) {
					echo '<p class="eael-entry-content-btn">';
					woocommerce_template_loop_add_to_cart();
					echo '</p>';
				}
				echo '</div>
			</div>';
		endif;
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		$settings = Helper::fix_old_query($settings);
		$args = Helper::get_query_args($settings);
		$args = Helper::get_dynamic_args($settings, $args);

		if ( ! in_array( $settings['post_type'], [ 'post', 'page', 'product', 'by_id', 'source_dynamic' ] ) ) {
            $settings['eael_post_terms'] = $settings["eael_{$settings['post_type']}_terms"];
        } elseif ( $settings['post_type'] === 'product' ) {
            $settings['eael_post_terms'] = $settings['eael_post_terms'] === 'category' ? 'product_cat' : ( $settings['eael_post_terms'] === 'tags' ? 'product_tag' : $settings['eael_post_terms'] );
        }

		$this->add_render_attribute(
			'eael-post-carousel-container',
			[
				'class' => [
					'swiper-container-wrap',
					'eael-post-grid-container',
					'eael-post-carousel-wrap',
					'eael-post-carousel-style-' . ($settings['eael_post_carousel_preset_style'] !== "" ? $settings['eael_post_carousel_preset_style'] : 'default'),
				],
				'id'    => 'eael-post-grid-' . esc_attr($this->get_id()),
			]
		);

		if ($settings['dots_position']) {
			$this->add_render_attribute('eael-post-carousel-container', 'class', 'swiper-container-wrap-dots-' . $settings['dots_position']);
		}

		$this->add_render_attribute(
			'eael-post-carousel-wrap',
			[
				'class'           => [
					'swiper',
					'swiper-8',
					'eael-post-carousel',
					'eael-post-grid',
					'swiper-container-' . esc_attr($this->get_id()),
					'eael-post-appender-' . esc_attr($this->get_id()),
				],
				'data-pagination' => '.swiper-pagination-' . esc_attr($this->get_id()),
				'data-arrow-next' => '.swiper-button-next-' . esc_attr($this->get_id()),
				'data-arrow-prev' => '.swiper-button-prev-' . esc_attr($this->get_id()),
			]
		);

		if ($settings['eael_show_read_more_button']) {
			$this->add_render_attribute(
				'eael-post-carousel-wrap',
				'class',
				'show-read-more-button'
			);
		}
		if ( method_exists( \Elementor\Plugin::$instance->breakpoints, 'get_breakpoints_config' ) && ! empty( $breakpoints = \Elementor\Plugin::$instance->breakpoints->get_breakpoints_config() ) ) {
            foreach ( $breakpoints as $key => $breakpoint ){
                if ($breakpoint['is_enabled']) {
                    if (!empty($settings['items_'.$key]['size'])) {
                        $this->add_render_attribute('eael-post-carousel-wrap', 'data-items-'.$key, $settings['items_'.$key]['size']);
                    }
                    if (!empty($settings['margin_'.$key]['size'])) {
                        $this->add_render_attribute('eael-post-carousel-wrap', 'data-margin-'.$key, $settings['margin_'.$key]['size']);
                    }
                }
            }
        }
		if (!empty($settings['items']['size'])) {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-items', $settings['items']['size']);
		}
		if (!empty($settings['margin']['size'])) {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-margin', $settings['margin']['size']);
		}
		if ($settings['carousel_effect']) {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-effect', $settings['carousel_effect']);
		}
		if (!empty($settings['slider_speed']['size'])) {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-speed', $settings['slider_speed']['size']);
		}

		if( 'yes' === $settings['enable_marquee'] ){
			$this->add_render_attribute( 'eael-post-carousel-wrap', 'data-autoplay', '0.001' );
			$this->add_render_attribute( 'eael-post-carousel-wrap', 'class', 'eael-marquee-carousel' );
		}
		else if ($settings['autoplay'] == 'yes' && !empty($settings['autoplay_speed']['size'])) {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-autoplay', $settings['autoplay_speed']['size']);
		} else {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-autoplay', '0');
		}

		if ($settings['pause_on_hover'] == 'yes') {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-pause-on-hover', 'true');
		}

		if ($settings['infinite_loop'] == 'yes') {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-loop', '1');
		}
		if ($settings['grab_cursor'] == 'yes') {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-grab-cursor', '1');
		}
		if ($settings['arrows'] == 'yes') {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-arrows', '1');
		}
		if ($settings['dots'] == 'yes') {
			$this->add_render_attribute('eael-post-carousel-wrap', 'data-dots', '1');
		}

		$settings = [
			'eael_show_image'                  => $settings['eael_show_image'],
			'enable_post_carousel_image_ratio' => $settings['enable_post_carousel_image_ratio'],
			'post_block_hover_animation'       => $settings['eael_post_block_hover_animation'],
			'eael_post_grid_bg_hover_icon_new' => isset($settings['__fa4_migrated']['eael_post_grid_bg_hover_icon_new']) ? $settings['eael_post_grid_bg_hover_icon_new'] : ( ! empty($settings['eael_post_grid_bg_hover_icon']) ? $settings['eael_post_grid_bg_hover_icon'] : '' ),
			'eael_post_carousel_item_style'    => ! empty( $settings['eael_post_carousel_item_style'] ) ? $settings['eael_post_carousel_item_style'] : '',
			'eael_post_carousel_title'    	   => ! empty( $settings['eael_post_carousel_title'] ) ? $settings['eael_post_carousel_title'] : '',
			'eael_post_carousel_title_tag'     => ! empty( $settings['eael_post_carousel_title_tag'] ) ? $settings['eael_post_carousel_title_tag'] : '',
			'eael_show_fallback_img'    	   => ! empty( $settings['eael_show_fallback_img'] ) ? $settings['eael_show_fallback_img'] : '',
			'eael_post_carousel_fallback_img'  => ! empty( $settings['eael_post_carousel_fallback_img'] ) ? $settings['eael_post_carousel_fallback_img'] : '',
			'image_size'                       => $settings['image_size'],
			'eael_show_title'                  => $settings['eael_show_title'],
			'eael_show_meta'                   => $settings['eael_show_meta'],
			'meta_position'                    => $settings['meta_position'],
			'eael_show_excerpt'                => $settings['eael_show_excerpt'],
			'eael_excerpt_length'              => $settings['eael_excerpt_length'],
			'eael_show_read_more_button'       => $settings['eael_show_read_more_button'],
			'read_more_button_text'            => $settings['read_more_button_text'],
			'post_type'                        => $settings['post_type'],
			'expanison_indicator'              => $settings['excerpt_expanison_indicator'],
			'eael_show_post_terms'             => $settings['eael_show_post_terms'],
			'eael_post_terms'                  => $settings['eael_post_terms'],
			'eael_post_terms_max_length'       => $settings['eael_post_terms_max_length'],
			'eael_show_avatar'                 => $settings['eael_show_avatar'],
			'eael_show_author'                 => $settings['eael_show_author'],
			'eael_show_date'                   => $settings['eael_show_date'],
			'title_tag'                        => $settings['title_tag'],
			'eael_title_length'                => $settings['eael_title_length'],
			'eael_post_carousel_preset_style'  => $settings['eael_post_carousel_preset_style'],
			'image_link'              		   => $settings['image_link'],
			'image_link_nofollow'              => $settings['image_link_nofollow'] ? 'rel="nofollow"' : '',
			'image_link_target_blank'          => $settings['image_link_target_blank'] ? 'target="_blank"' : '',
			'title_link'              		   => $settings['title_link'],
			'title_link_nofollow'              => $settings['title_link_nofollow'] ? 'rel="nofollow"' : '',
			'title_link_target_blank'          => $settings['title_link_target_blank'] ? 'target="_blank"' : '',
			'read_more_link_nofollow'          => $settings['read_more_link_nofollow'] ? 'rel="nofollow"' : '',
			'read_more_link_target_blank'      => $settings['read_more_link_target_blank'] ? 'target="_blank"' : '',
		];
		?>
        <div <?php $this->print_render_attribute_string('eael-post-carousel-container'); ?>>
			<?php if( ! empty( $settings['eael_post_carousel_title'] ) ) {
				$title_tag = Helper::eael_validate_html_tag( $settings['eael_post_carousel_title_tag'] );
				printf( '<%1$s class="eael-post-carousel-title">%2$s</%1$s>', esc_attr( $title_tag ), esc_html( $settings['eael_post_carousel_title'] ) );
			} ?>
            <div <?php $this->print_render_attribute_string('eael-post-carousel-wrap'); ?>>
                <div class="swiper-wrapper">
					<?php

					$template = $this->get_template($this->get_settings('eael_dynamic_template_Layout'));
					if (file_exists($template)) {
						$query = new \WP_Query($args);

						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
								include($template);
							}
						} else {
							?><p class="no-posts-found"><?php esc_html_e( 'No posts found!', 'essential-addons-elementor' ); ?></p><?php
						}
						wp_reset_postdata();
					} else {
						?><p class="no-posts-found"><?php esc_html_e( 'No layout found!', 'essential-addons-elementor' ); ?></p><?php
					}
					?>
                </div>
            </div>
            <div class="clearfix"></div>
			<?php

			/**
			 * Render Slider Dots!
			 */
			$this->render_dots();

			/**
			 * Render Slider Navigations!
			 */
			$this->render_arrows();
			?>
        </div>
		<?php
	}
	//changes
	protected function render_dots()
	{
		$settings = $this->get_settings_for_display();

		if ( 'yes' === $settings['dots'] && 'yes' !== $settings['enable_marquee'] ) { ?>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-<?php echo esc_attr($this->get_id()); ?>"></div>
		<?php }
	}

	/**
	 * Render logo carousel arrows output on the frontend.
	 */
	protected function render_arrows()
	{
		$settings = $this->get_settings_for_display();

		if ( 'yes' === $settings['arrows'] && 'yes' !== $settings['enable_marquee']) { ?>
			<?php
			if ($settings['arrow']) {
				$pa_next_arrow = $settings['arrow'];
				$pa_prev_arrow = str_replace("right", "left", $settings['arrow']);
			} else {
				$pa_next_arrow = 'fa fa-angle-right';
				$pa_prev_arrow = 'fa fa-angle-left';
			}
			?>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-next-<?php echo esc_attr($this->get_id()); ?>">
                <i class="<?php echo esc_attr($pa_next_arrow); ?>"></i>
            </div>
            <div class="swiper-button-prev swiper-button-prev-<?php echo esc_attr($this->get_id()); ?>">
                <i class="<?php echo esc_attr($pa_prev_arrow); ?>"></i>
            </div>
			<?php
		}
	}

	protected function content_template()
	{
	}
}
