<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );

function register_country_post_type() {
    register_post_type('latin_country', array(
        'labels' => array(
            'name' => __('Latin Countries'),
            'singular_name' => __('Latin Country'),
            'add_new' => __('Add New Country'),
            'add_new_item' => __('Add New Latin American Country'),
            "not_found" => __("No countries found."),
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array('title')
    ));
}
add_action('init', 'register_country_post_type');

function add_latin_country_fields() {
    add_meta_box(
        'latin_country_details',
        'Latin American Country Details',
        'display_latin_country_fields',
        'latin_country',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_latin_country_fields');

function display_latin_country_fields($post) {
    $country_name = get_post_meta($post->ID, '_latin_country_name', true);
    $country_capital = get_post_meta($post->ID, '_latin_country_capital', true);

    echo '<label for="latin_country_name">Latin American Country:</label><br>';
    echo '<input type="text" name="latin_country_name" value="' . esc_attr($country_name) . '" style="width:100%;" />';

    echo '<br><br><label for="latin_country_capital">Latin American Capital:</label><br>';
    echo '<input type="text" name="latin_country_capital" value="' . esc_attr($country_capital) . '" style="width:100%;" />';
}

function save_latin_country_fields($post_id) {
    if (array_key_exists('latin_country_name', $_POST)) {
        update_post_meta($post_id, '_latin_country_name', sanitize_text_field($_POST['latin_country_name']));
    }
    if (array_key_exists('latin_country_capital', $_POST)) {
        update_post_meta($post_id, '_latin_country_capital', sanitize_text_field($_POST['latin_country_capital']));
    }
}
add_action('save_post', 'save_latin_country_fields');

add_action('rest_api_init', function () {
    register_rest_route('latin/v1', '/countries', array(
        'methods' => 'GET',
        'callback' => 'get_latin_countries',
    ));
});

function get_latin_countries() {
    $posts = get_posts(array('post_type' => 'latin_country', 'numberposts' => -1));
    $data = array();

    foreach ($posts as $post) {
        $data[] = array(
            'country' => get_post_meta($post->ID, '_latin_country_name', true),
            'capital' => get_post_meta($post->ID, '_latin_country_capital', true)
        );
    }
    return $data;
}

function actioneers_enqueue_vue_assets() {
    if (is_page('countries')) {
        $vue_compiler_url = get_site_url() . '/vue-compiler/';

        wp_enqueue_script(
            'actioneers-vue-app',
            $vue_compiler_url . 'vue/app.bundle.js',
            array(),
            null,
            true
        );

        wp_enqueue_style(
            'actioneers-vue-style',
            $vue_compiler_url . 'vue/style.css',
            array(),
            null
        );
    }
}
add_action('wp_enqueue_scripts', 'actioneers_enqueue_vue_assets');
