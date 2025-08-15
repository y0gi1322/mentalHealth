<?php

	use PremiumAddons\Includes\Helper_Functions;

	$ecommerce_widgets = array(
		array(
			'key'   => 'woo-products',
			'title' => __( 'Woo Products', 'premium-addons-for-elementor' ),
			'name'  => 'premium-woo-products',
			'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-woocommerce-products/', 'products', 'wp-dash', 'wizard' ),
			'is_freemium' => true
		),
		array(
			'key'   => 'woo-categories',
			'title' => __( 'Woo Categories', 'premium-addons-for-elementor' ),
			'name'  => 'premium-woo-categories',
			'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-woocommerce-categories-widget/', 'cats', 'wp-dash', 'wizard' ),
			'is_freemium' => true
		),
		array(
			'key'   => 'mini-cart',
			'title' => __( 'Woo Mini Cart', 'premium-addons-for-elementor' ),
			'name'  => 'premium-mini-cart',
			'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-woocommerce-mini-cart-widget/', 'mini-cart', 'wp-dash', 'wizard' ),
			'is_freemium' => true
		),
		array(
			'key'   => 'woo-cta',
			'title' => __( 'Woo CTA', 'premium-addons-for-elementor' ),
			'name'  => 'premium-woo-cta',
			'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-woocommerce-cta-widget/', 'woo-cta', 'wp-dash', 'wizard' ),
			'is_freemium' => true
		),
	);

	$blog_widgets = array(
		array(
			'key'   => 'premium-post-ticker',
			'name'  => 'premium-post-ticker',
			'title' => __( 'News Ticker', 'premium-addons-for-elementor' ),
			'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-news-ticker-widget/', 'ticker', 'wp-dash', 'wizard' ),
			'is_freemium' => true
		),
		array(
			'key'   => 'premium-world-clock',
			'name'  => 'premium-world-clock',
			'title' => __( 'World Clock', 'premium-addons-for-elementor' ),
			'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-world-clock-widget/', 'clock', 'wp-dash', 'wizard' ),
			'is_freemium' => true
		),
		array(
			'key'   => 'premium-weather',
			'name'  => 'premium-weather',
			'title' => __( 'Weather', 'premium-addons-for-elementor' ),
			'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-weather-widget/', 'weather', 'wp-dash', 'wizard' ),
			'is_freemium' => true
		),
		array(
			'key'   => 'premium-tcloud',
			'name'  => 'premium-tcloud',
			'title' => __( 'Tags Cloud', 'premium-addons-for-elementor' ),
			'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-tags-cloud-widget/', 'tcloud', 'wp-dash', 'wizard' ),
			'is_freemium' => true
		),
		array(
			'key'    => 'premium-smart-post-listing',
			'name'   => 'premium-smart-post-listing',
			'title'  => __( 'Smart Post Listing', 'premium-addons-for-elementor' ),
			'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-smart-post-listing-widget/', 'spl', 'wp-dash', 'dashboard' ),
			'is_pro' => true,
		),
		array(
			'key'   => 'premium-notifications',
			'name'  => 'premium-notifications',
			'title' => __( 'Recent Posts Notification', 'premium-addons-for-elementor' ),
			'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-recent-posts-notification-widget/', 'notification', 'wp-dash', 'wizard' ),
			'is_freemium' => true
		),
		array(
			'key'   => 'premium-blog',
			'name'  => 'premium-addon-blog',
			'title' => __( 'Blog', 'premium-addons-for-elementor' ),
			'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/blog-widget-for-elementor-page-builder/', 'blog', 'wp-dash', 'wizard' ),
			'type' => 'basic'
		),
	);

	$wizard_elements = array(
		array(
			'title'    => __( 'Content Widgets', 'premium-addons-for-elementor' ),
			'elements' => array(
				array(
					'key'   => 'premium-textual-showcase',
					'name'  => 'premium-textual-showcase',
					'title' => __( 'Textual Showcase', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-textual-showcase-widget/', 'showcase', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'   => 'premium-fancytext',
					'name'  => 'premium-addon-fancy-text',
					'title' => __( 'Animated Text', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-animated-text-widget/', 'fancy-text', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'    => 'premium-unfold',
					'name'   => 'premium-unfold-addon',
					'title'  => __( 'Unfold', 'premium-addons-for-elementor' ),
					'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/unfold-widget-for-elementor-page-builder/', 'unfold', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
				array(
					'key'   => 'premium-icon-list',
					'name'  => 'premium-icon-list',
					'title' => __( 'Bullet List', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-bullet-list-widget/', 'bullet', 'wp-dash', 'wizard' )
				),
				array(
					'key'    => 'premium-tabs',
					'name'   => 'premium-addon-tabs',
					'title'  => __( 'Tabs', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-tabs-widget/', 'tabs', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-tabs'
				),
				array(
					'key'    => 'premium-divider',
					'name'   => 'premium-divider',
					'title'  => __( 'Divider', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/divider-widget-for-elementor-page-builder/', 'divider', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-separator',
				),
				array(
					'key'   => 'premium-person',
					'name'  => 'premium-addon-person',
					'title' => __( 'Team Members', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/persons-widget-for-elementor-page-builder/', 'members', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				),
				array(
					'key'   => 'premium-title',
					'name'  => 'premium-addon-title',
					'title' => __( 'Heading', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/heading-widget-for-elementor-page-builder/', 'heading', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				),
				array(
					'key'   => 'premium-dual-header',
					'name'  => 'premium-addon-dual-header',
					'title' => __( 'Dual Heading', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/dual-header-widget-for-elementor-page-builder/', 'dual', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				)
			),
		),
		array(
			'title'    => __( 'Navigation and Carousel Widgets', 'premium-addons-for-elementor' ),
			'elements' => array(
				array(
					'key'    => 'premium-site-logo',
					'name'   => 'premium-site-logo',
					'title'  => __( 'Site Logo', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-site-logo-widget/', 'logo', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-site-logo'
				),
				array(
					'key'   => 'premium-nav-menu',
					'name'  => 'premium-nav-menu',
					'title' => __( 'Nav/Mega Menu', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-mega-menu-widget/', 'menu', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'   => 'premium-mobile-menu',
					'name'  => 'premium-mobile-menu',
					'title' => __( 'Mobile Menu', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-mobile-menu-widget/', 'mobile-menu', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'   => 'premium-search-form',
					'name'  => 'premium-search-form',
					'title' => __( 'Search Form', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-ajax-search-widget/', 'search', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'   => 'premium-media-wheel',
					'name'  => 'premium-media-wheel',
					'title' => __( 'Advanced Media Carousel', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-advanced-carousel-widget/', 'adv-carousel', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'    => 'premium-content-toggle',
					'name'   => 'premium-addon-content-toggle',
					'title'  => __( 'Content Switcher', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/content-switcher-widget-for-elementor-page-builder/', 'content-switcher', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-content-switcher'
				),
				array(
					'key'   => 'premium-carousel',
					'name'  => 'premium-carousel-widget',
					'title' => __( 'Carousel', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-carousel-widget/', 'carousel', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				)
			),
		),
		array(
			'title'    => __( 'Contact Widgets', 'premium-addons-for-elementor' ),
			'elements' => array(
				array(
					'key'   => 'premium-contactform',
					'name'  => 'premium-contact-form',
					'title' => __( 'Contact Form 7', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/contact-form-7-widget-for-elementor-page-builder/', 'form', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'    => 'premium-whatsapp-chat',
					'name'   => 'premium-whatsapp-chat',
					'title'  => __( 'WhatsApp Chat', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/whatsapp-widget-for-elementor-page-builder/', 'whatsapp', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-whatsapp',
				),
				array(
					'key'   => 'premium-maps',
					'name'  => 'premium-addon-maps',
					'title' => __( 'Google Maps', 'premium-addons-for-elementor' ),
					'type' => 'basic',
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/google-maps-widget-for-elementor-page-builder/', 'maps', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				)
			),
		),
		array(
			'key' => 'blog',
			'title'    => __( 'Blog/Magazine Widgets', 'premium-addons-for-elementor' ),
			'elements' => $blog_widgets,
		),
		array(
			'title'    => __( 'Call-to-Action Widgets', 'premium-addons-for-elementor' ),
			'elements' => array(
				array(
					'key'   => 'premium-image-button',
					'name'  => 'premium-addon-image-button',
					'title' => __( 'Image Button', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-button-widget-for-elementor-page-builder/', 'img-button', 'wp-dash', 'wizard' )
				),
				array(
					'key'   => 'premium-banner',
					'name'  => 'premium-addon-banner',
					'title' => __( 'Banner', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/banner-widget-for-elementor-page-builder/', 'banner', 'wp-dash', 'wizard' )
				),
				array(
					'key'    => 'premium-flipbox',
					'name'   => 'premium-addon-flip-box',
					'title'  => __( '3D Hover Box', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/3d-hover-box-flip-box-widget-for-elementor/', 'hover-box', 'wp-dash', 'wizard' ),
					'is_pro' => true,
				),
				array(
					'key'    => 'premium-iconbox',
					'name'   => 'premium-addon-icon-box',
					'title'  => __( 'Icon Box', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-icon-box-widget/', 'icon-box', 'wp-dash', 'wizard' ),
					'is_pro' => true,
				),
				array(
					'key'    => 'premium-ihover',
					'name'   => 'premium-ihover',
					'title'  => __( 'iHover', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/ihover-widget-for-elementor-page-builder/', 'ihover', 'wp-dash', 'wizard' ),
					'is_pro' => true,
				),
				array(
					'key'   => 'premium-button',
					'name'  => 'premium-addon-button',
					'title' => __( 'Button', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-button-widget/', 'button', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				)
			),
		),
		array(
			'title'    => __( 'Reviews and Social Feed Widgets', 'premium-addons-for-elementor' ),
			'elements' => array(
				array(
					'key'    => 'premium-facebook-reviews',
					'name'   => 'premium-facebook-reviews',
					'title'  => __( 'Facebook Reviews', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-facebook-reviews-widget/', 'fb-reviews', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-facebook-reviews'
				),
				array(
					'key'    => 'premium-google-reviews',
					'name'   => 'premium-google-reviews',
					'title'  => __( 'Google Reviews', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-google-reviews-widget/', 'google-reviews', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-google-reviews',
				),
				array(
					'key'    => 'premium-yelp-reviews',
					'name'   => 'premium-yelp-reviews',
					'title'  => __( 'Yelp Reviews', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-yelp-reviews-widget/', 'yelp', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-yelp-reviews',
				),
				array(
					'key'    => 'premium-facebook-feed',
					'name'   => 'premium-facebook-feed',
					'title'  => __( 'Facebook Feed', 'premium-addons-for-elementor' ),
					'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-facebook-feed-widget/', 'fb-feed', 'wp-dash', 'wizard' ),
					'is_pro' => true,
				),
				array(
					'key'    => 'premium-twitter-feed',
					'name'   => 'premium-twitter-feed',
					'title'  => __( 'Twitter Feed', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/twitter-feed-widget-for-elementor-page-builder/', 'twitter', 'wp-dash', 'wizard' ),
					'is_pro' => true,
				),
				array(
					'key'    => 'premium-instagram-feed',
					'name'   => 'premium-addon-instagram-feed',
					'title'  => __( 'Instagram Feed', 'premium-addons-for-elementor' ),
					'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-instagram-feed-widget/', 'instagram', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
				array(
					'key'   => 'premium-tiktok-feed',
					'name'  => 'premium-tiktok-feed',
					'title' => __( 'Tiktok Feed', 'premium-addons-for-elementor' ),
					'icon'  => 'pa-tiktok',
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-tiktok-feed-widget/', 'tiktok', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'   => 'premium-pinterest-feed',
					'name'  => 'premium-pinterest-feed',
					'title' => __( 'Pinterest Feed', 'premium-addons-for-elementor' ),
					'icon'  => 'pa-pinterest',
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-pinterest-feed-widget/', 'pinterest', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'    => 'premium-behance',
					'name'   => 'premium-behance-feed',
					'title'  => __( 'Behance Feed', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/behance-feed-widget-for-elementor-page-builder/', 'behance', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
				array(
					'key'   => 'premium-testimonials',
					'name'  => 'premium-addon-testimonials',
					'title' => __( 'Testimonials', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/testimonials-widget-for-elementor-page-builder/', 'testimonials', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				)
			),
		),
		array(
			'title'    => __( 'Image and Media Widgets', 'premium-addons-for-elementor' ),
			'elements' => array(
				array(
					'key'   => 'premium-image-scroll',
					'name'  => 'premium-image-scroll',
					'title' => __( 'Image Scroll', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-image-scroll-widget/', 'img-scroll', 'wp-dash', 'wizard' )
				),
				array(
					'key'   => 'premium-image-separator',
					'name'  => 'premium-addon-image-separator',
					'title' => __( 'Image Separator', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-separator-widget-elementor-page-builder/', 'img-separator', 'wp-dash', 'wizard' )
				),
				array(
					'key'    => 'premium-image-comparison',
					'name'   => 'premium-addon-image-comparison',
					'title'  => __( 'Image Comparison', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-comparison-widget-for-elementor-page-builder/', 'img-compare', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
				array(
					'key'    => 'premium-image-hotspots',
					'name'   => 'premium-addon-image-hotspots',
					'title'  => __( 'Image Hotspots', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-image-hotspots-widget/', 'hotspots', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
				array(
					'key'    => 'premium-img-layers',
					'name'   => 'premium-img-layers-addon',
					'title'  => __( 'Image Layers', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/image-layers-widget-for-elementor-page-builder/', 'img-layers', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
				array(
					'key'    => 'premium-image-accordion',
					'name'   => 'premium-image-accordion',
					'title'  => __( 'Image Accordion', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-image-accordion-widget/', 'img-accordion', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
				array(
					'key'   => 'premium-svg-drawer',
					'name'  => 'premium-svg-drawer',
					'title' => __( 'SVG Draw', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-svg-draw-widget/', 'svg', 'wp-dash', 'wizard' )
				),
				array(
					'key'   => 'premium-lottie-widget',
					'name'  => 'premium-lottie',
					'title' => __( 'Lottie Animations', 'premium-addons-for-elementor' ),
					'demo'      => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-lottie-animations-container-addon/', 'lottie-addon', 'wp-dash', 'wizard' )
				),
				array(
					'key'   => 'premium-grid',
					'name'  => 'premium-img-gallery',
					'title' => __( 'Media Grid', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-grid-widget/', 'grid', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				),
				array(
					'key'   => 'premium-videobox',
					'name'  => 'premium-addon-video-box',
					'title' => __( 'Video Box', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-video-box-widget/', 'video-box', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				)
			),
		),
		array(
			'key' => 'ecommerce',
			'title'    => __( 'WooCommerce Widgets', 'premium-addons-for-elementor' ),
			'elements' => $ecommerce_widgets,
		),
		array(
			'title'    => __( 'Tables, Graphs, and Charts  Widgets', 'premium-addons-for-elementor' ),
			'elements' => array(
				array(
					'key'   => 'premium-countdown',
					'name'  => 'premium-countdown-timer',
					'title' => __( 'Countdown', 'premium-addons-for-elementor' ),
					'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-countdown-widget-2/', 'countdown', 'wp-dash', 'wizard' ),
					'is_freemium' => true
				),
				array(
					'key'   => 'premium-progressbar',
					'name'  => 'premium-addon-progressbar',
					'title' => __( 'Progress Bar', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/progress-bar-widget-for-elementor-page-builder/', 'progress', 'wp-dash', 'wizard' )
				),
				array(
					'key'    => 'premium-charts',
					'name'   => 'premium-chart',
					'title'  => __( 'Charts', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-charts-widget/', 'charts', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-charts',
				),
				array(
					'key'    => 'premium-tables',
					'name'   => 'premium-tables-addon',
					'title'  => __( 'Table', 'premium-addons-for-elementor' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-table',
				),
				array(
					'key'   => 'premium-counter',
					'name'  => 'premium-counter',
					'title' => __( 'Counter', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/counter-widget-for-elementor-page-builder/', 'counter', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				),
				array(
					'key'   => 'premium-pricing-table',
					'name'  => 'premium-addon-pricing-table',
					'title' => __( 'Pricing Table', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-pricing-table-widget/', 'pricing', 'wp-dash', 'wizard' ),
					'type' => 'basic'
				)
			),
		),
		array(
			'title'    => __( 'Off-Grid Widgets', 'premium-addons-for-elementor' ),
			'elements' => array(
				array(
					'key'      => 'premium-modalbox',
					'name'     => 'premium-addon-modal-box',
					'title'    => __( 'Modal Box', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/modal-box-widget-for-elementor-page-builder/', 'modal', 'wp-dash', 'wizard' )
				),
				array(
					'key'    => 'premium-notbar',
					'name'   => 'premium-notbar',
					'title'  => __( 'Alert Box', 'premium-addons-for-elementor' ),
					'demo'       => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-alert-box-widget/', 'alert-box', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-notification-bar'
				),
				array(
					'key'    => 'premium-magic-section',
					'name'   => 'premium-addon-magic-section',
					'title'  => __( 'Off Canvas', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-off-canvas-widget/', 'off-canvas', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-magic-section',
				),
				array(
					'key'    => 'premium-prev-img',
					'name'   => 'premium-addon-preview-image',
					'title'  => __( 'Preview Window', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/preview-window-widget-for-elementor-page-builder/', 'preview-window', 'wp-dash', 'wizard' ),
					'is_pro' => true,
					'icon'   => 'pa-pro-preview-window',
				),
			),
		),
		array(
			'title'    => __( 'Scroll-Based Widgets', 'premium-addons-for-elementor' ),
			'elements' => array(
				array(
					'key'    => 'premium-hscroll',
					'name'   => 'premium-hscroll',
					'title'  => __( 'Horizontal Scroll', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-horizontal-scroll-widget/', 'hscroll', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
				array(
					'key'   => 'premium-vscroll',
					'name'  => 'premium-vscroll',
					'title' => __( 'Vertical Scroll', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/vertical-scroll-widget-for-elementor-page-builder/', 'vscroll', 'wp-dash', 'wizard' )
				),
				array(
					'key'    => 'premium-multi-scroll',
					'name'   => 'premium-multi-scroll',
					'title'  => __( 'Multi Scroll', 'premium-addons-for-elementor' ),
					'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/multi-scroll-widget-for-elementor-page-builder/', 'mscroll', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
				array(
					'key'    => 'premium-color-transition',
					'name'   => 'premium-color-transition',
					'title'  => __( 'Background Transition', 'premium-addons-for-elementor' ),
					'demo'   => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-background-transition-widget/', 'background-transition', 'wp-dash', 'wizard' ),
					'is_pro' => true
				),
			),
		),
	);

	$pa_elements = array(
		'basic'     => array(
			array(
				'key'   => 'premium-title',
				'name'  => 'premium-addon-title',
				'title' => __( 'Heading', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/heading-widget-for-elementor-page-builder/', 'heading', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-dual-header',
				'name'  => 'premium-addon-dual-header',
				'title' => __( 'Dual Heading', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/dual-header-widget-for-elementor-page-builder/', 'dual', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-blog',
				'name'  => 'premium-addon-blog',
				'title' => __( 'Blog', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/blog-widget-for-elementor-page-builder/', 'blog', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-maps',
				'name'  => 'premium-addon-maps',
				'title' => __( 'Google Maps', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/google-maps-widget-for-elementor-page-builder/', 'maps', 'wp-dash', 'wizard' ),
				'is_freemium' => true
			),
			array(
				'key'   => 'premium-carousel',
				'name'  => 'premium-carousel-widget',
				'title' => __( 'Carousel', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-carousel-widget/', 'carousel', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-person',
				'name'  => 'premium-addon-person',
				'title' => __( 'Team Members', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/persons-widget-for-elementor-page-builder/', 'members', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-grid',
				'name'  => 'premium-img-gallery',
				'title' => __( 'Media Grid', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-grid-widget/', 'grid', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-videobox',
				'name'  => 'premium-addon-video-box',
				'title' => __( 'Video Box', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-video-box-widget/', 'video-box', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-testimonials',
				'name'  => 'premium-addon-testimonials',
				'title' => __( 'Testimonials', 'premium-addons-for-elementor' ),
				'demo'  => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/testimonials-widget-for-elementor-page-builder/', 'testimonials', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-button',
				'name'  => 'premium-addon-button',
				'title' => __( 'Button', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-button-widget/', 'button', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-pricing-table',
				'name'  => 'premium-addon-pricing-table',
				'title' => __( 'Pricing Table', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/elementor-pricing-table-widget/', 'pricing', 'wp-dash', 'wizard' )
			),
			array(
				'key'   => 'premium-counter',
				'name'  => 'premium-counter',
				'title' => __( 'Counter', 'premium-addons-for-elementor' ),
				'demo'     => Helper_Functions::get_campaign_link( 'https://premiumaddons.com/counter-widget-for-elementor-page-builder/', 'counter', 'wp-dash', 'wizard' )
			),
		),
		'ecommerce' => $ecommerce_widgets,
		'blog'      => array_slice( $blog_widgets, 0, 4 ),
		'wizard'    => $wizard_elements,
	);

	return $pa_elements;
