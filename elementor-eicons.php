<?php
/**
 * Plugin Name: Elementor Eicons
 * Plugin URI: https://webevasion.net/elementor-materialize/
 * Description: Add Elementor Icons to icon selector
 * Author: Webévasion
 * Version: 1.0.0
 * Author URI: https://webevasion.net/
 *
 * Text Domain: elementor-eicons
 */

class ElementorEIcons {
	public function __construct() {
		add_action('elementor/controls/controls_registered', array($this, 'icons_filters'), 10, 1);
	}

	public function icons_filters($controls_registry) {
		//Get Elementor icons array
		$icons = $controls_registry->get_control('icon')->get_settings('options');
		//List of eicons classes
		$eicons = ['editor-link', 'editor-unlink', 'editor-external-link', 'editor-close', 'editor-list-ol', 'editor-list-ul', 'editor-bold', 'editor-italic', 'editor-underline', 'editor-paragraph', 'editor-quote', 'editor-code', 'elementor', 'elementor-square', 'pojome', 'plus', 'menu-bar', 'apps', 'accordion', 'alert', 'animation-text', 'animation', 'banner', 'blockquote', 'button', 'call-to-action', 'captcha', 'carousel', 'checkbox', 'columns', 'countdown', 'counter', 'date', 'divider-shape', 'divider', 'download-button', 'dual-button', 'email-field', 'facebook-comments', 'facebook-like-box', 'form-horizontal', 'form-vertical', 'gallery-grid', 'gallery-group', 'gallery-justified', 'gallery-masonry', 'icon-box', 'image-before-after', 'image-box', 'image-hotspot', 'image-rollover', 'info-box', 'inner-section', 'mailchimp', 'menu-card', 'navigation-horizontal', 'nav-menu', 'navigation-vertical', 'number-field', 'parallax', 'post-list', 'post-slider', 'post', 'posts-carousel', 'posts-grid', 'posts-group', 'posts-justified', 'posts-masonry', 'posts-ticker', 'price-list', 'price-table', 'radio', 'rtl', 'scroll', 'search', 'select', 'share', 'sidebar', 'skill-bar', 'slider-album', 'slider-device', 'slider-full-screen', 'slider-push', 'slider-vertical', 'slider-video', 'slideshow', 'social-icons', 'spacer', 'table', 'tabs', 'tel-field', 'text-area', 'text-field', 'thumbnails-down', 'thumbnails-half', 'thumbnails-right', 'time-line', 'toggle', 'url', 'type-tool', 'wordpress', 'align-left', 'anchor', 'bullet-list', 'coding', 'favorite', 'google-maps', 'image', 'photo-library', 'woocommerce', 'youtube', 'flip-box', 'settings', 'headphones', 'testimonial', 'counter-circle', 'person', 'chevron-right', 'chevron-left', 'close', 'file-download', 'save', 'zoom-in', 'shortcode', 'nerd', 'device-desktop', 'device-tablet', 'device-mobile', 'document-file', 'folder', 'hypster', 'h-align-left', 'h-align-right', 'h-align-center', 'h-align-stretch', 'v-align-top', 'v-align-bottom', 'v-align-middle', 'v-align-stretch', 'pro-icon', 'mail', 'lock-user', 'testimonial-carousel', 'media-carousel', 'section', 'column', 'edit', 'clone', 'trash', 'play', 'angle-right', 'angle-left', 'animated-headline', 'menu-toggle', 'fb-embed', 'fb-feed', 'twitter-embed', 'twitter-feed', 'sync', 'import-export', 'check-circle', 'library-save', 'library-download', 'insert', 'preview', 'sort-down', 'sort-up', 'heading', 'logo', 'meta-data', 'post-content', 'post-excerpt', 'post-navigation', 'yoast', 'nerd-chuckle', 'nerd-wink', 'comments', 'download-circle-o', 'library-upload', 'save-o', 'upload-circle-o', 'ellipsis-h', 'ellipsis-v', 'arrow-left', 'arrow-right', 'arrow-up', 'arrow-down', 'play-o', 'archive-posts', 'archive-title', 'featured-image', 'post-info', 'post-title', 'site-logo', 'site-search', 'site-title', 'plus-square', 'minus-square', 'cloud-check', 'drag-n-drop', 'welcome', 'handle', 'cart', 'product-add-to-cart', 'product-breadcrumbs', 'product-categories', 'product-description', 'product-images', 'product-info', 'product-meta', 'product-pages', 'product-price', 'product-rating', 'product-related', 'product-stock', 'product-tabs', 'product-title', 'product-upsell', 'products', 'bag-light', 'bag-medium', 'bag-solid', 'basket-light', 'basket-medium', 'basket-solid', 'cart-light', 'cart-medium', 'cart-solid', 'exchange', 'eye', 'laptop', 'collapse', 'expand', 'navigator', 'plug', 'dashboard', 'font', 'info', 'integration', 'plus-circle', 'rating', 'review', 'tools', 'loading', 'sitemap', 'click', 'clock', 'library-open', 'warning', 'flow'];

		//Create the display name based on eicon class + add to Elementor icons array
		foreach ($eicons as $icon) {
			if(!isset($icons['eicon-'.$icon]))
			$icons['eicon-'.$icon] = ucwords(str_replace('-', ' ', $icon));
		}
		
		//Save icons controls to Elementor
		$controls_registry->get_control('icon')->set_settings('options', $icons);
	}
}
$ElementorEIcons = new ElementorEIcons();
