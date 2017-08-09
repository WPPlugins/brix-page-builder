<?php if ( ! defined( 'ABSPATH' ) ) die( 'Forbidden' );

/**
 * Brix Lite badge.
 *
 * @since 1.1.3
 * @param string $label The label string.
 * @return string
 */
function brix_lite_badge( $label ) {
	$label .= sprintf( '<span class="brix-logo-label-badge brix-tooltip" data-title="%s">%s</span>',
		esc_attr__( 'Upgrade to premium', 'brix' ),
		esc_html__( 'Lite', 'brix' )
	);

	return $label;
}

add_filter( 'brix_logo_label', 'brix_lite_badge' );

/* Lite folder. */
define( 'BRIX_LITE_FOLDER', trailingslashit( dirname( __FILE__ ) ) );

/* Pro promo page. */
require_once( BRIX_LITE_FOLDER . 'pages/pro.php' );

/**
 * Admin body classes.
 *
 * @since 1.2
 * @param string $classes The body classes.
 * @return string
 */
function brix_lite_admin_body_class( $classes ) {
	$classes .= ' brix-lite-enabled';

	return $classes;
}

add_filter( 'admin_body_class', 'brix_lite_admin_body_class' );

/**
 * Declare administration pages.
 *
 * @since 1.1.3
 */
function brix_admin_lite_pages() {
	if ( ! is_admin() ) {
		return;
	}

	if ( ! class_exists( 'Brix_Framework' ) ) {
		return;
	}

	if ( ! brix_install_check() ) {
		return;
	}

	$registration_submenu_page = new Brix_BrixSubmenuPage( 'brix', 'brix_pro', __( 'Upgrade to premium', 'brix' ), array(), array(
		'group' => 'brix'
	) );
}

add_action( 'init', 'brix_admin_lite_pages', 51 );


/**
 * Remove unnecessary admin bar items.
 */
function brix_lite_admin_bar_items( $wp_admin_bar ) {
	if ( ! brix_install_check() ) {
		return;
	}

	$upgrade_url = admin_url( 'admin.php?page=brix_pro' );

    $args = array(
        'id'    => 'brix_buy',
        'title' => "<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:sketch='http://www.bohemiancoding.com/sketch/ns' width='19' height='19' viewBox='0 0 19 19' version='1.1'><title>wp menu logo 19</title><desc>Created with Sketch.</desc><g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' sketch:type='MSPage'><g id='wp-menu-logo-19' sketch:type='MSArtboardGroup' fill='#FFFFFF'><g id='Polygon-1-+-Rectangle-1-+-Rectangle-1' sketch:type='MSLayerGroup' transform='translate(1.000000, 0.000000)'><g id='Page-1' sketch:type='MSShapeGroup'><g id='logo'><g id='Group'><g id='Polygon-1-+-Rectangle-1-+-Rectangle-1'><path d='M7.62 0.19C7.97-0.02 8.55-0.02 8.91 0.19L15.86 4.21C16.22 4.41 16.51 4.91 16.51 5.33L16.51 13.37C16.51 13.78 16.22 14.28 15.86 14.49L8.91 18.51C8.55 18.71 7.97 18.71 7.62 18.51L0.66 14.49C0.3 14.28 0.01 13.78 0.01 13.37L0.01 5.33C0.01 4.91 0.3 4.41 0.66 4.21L7.62 0.19 7.62 0.19ZM7.94 1.49C8.12 1.39 8.4 1.39 8.58 1.49L14.9 5.14C15.08 5.24 15.22 5.49 15.22 5.7L15.22 13C15.22 13.2 15.08 13.45 14.9 13.56L8.58 17.2C8.4 17.31 8.12 17.31 7.94 17.2L1.62 13.56C1.44 13.45 1.3 13.2 1.3 13L1.3 5.7C1.3 5.49 1.44 5.24 1.62 5.14L7.94 1.49 7.94 1.49Z' id='Polygon-1'/><path d='M8.24 12.11L5.86 10.73 5.86 7.96 10.63 5.18 12.72 6.4C12.9 6.5 13.05 6.75 13.05 6.95L13.05 11.74C13.05 11.95 12.9 12.2 12.72 12.3L8.24 14.89 8.24 12.11 8.24 12.11Z' id='Rectangle-1'/><path d='M3.78 6.78C3.6 6.67 3.6 6.51 3.78 6.4L7.94 4C8.12 3.9 8.41 3.9 8.58 4L12.74 6.4C12.92 6.51 12.92 6.67 12.74 6.78L8.26 9.37 3.78 6.78 3.78 6.78Z' id='Rectangle-1'/></g></g></g></g></g></g></g></svg> " . __( 'Upgrade to premium', 'brix' ),
        'href'  => $upgrade_url,
        'meta'  => array( 'class' => 'brix-buy' )
    );
    $wp_admin_bar->add_node( $args );
}

add_action( 'admin_bar_menu', 'brix_lite_admin_bar_items', 999 );

/**
 * Add meta information to the plugin row in the Plugins screen in WordPress admin.
 *
 * @since 1.0.0
 * @param array  $plugin_meta An array of the plugin's metadata,
 *                            including the version, author,
 *                            author URI, and plugin URI.
 * @param string $plugin_file Path to the plugin file, relative to the plugins directory.
 * @param array  $plugin_data An array of plugin data.
 * @param string $status      Status of the plugin. Defaults are 'All', 'Active',
 *                            'Inactive', 'Recently Activated', 'Upgrade', 'Must-Use',
 *                            'Drop-ins', 'Search'.
 * @return array
 */
function brix_lite_plugin_row_meta( $plugin_meta, $plugin_file, $plugin_data, $status ) {
	if ( ! brix_install_check() ) {
		return $plugin_meta;
	}

	$framework_data = get_plugin_data( BRIX_PLUGIN_FILE );
	$check = array( 'Name', 'PluginURI', 'AuthorName', 'AuthorURI', 'Version', 'TextDomain' );

	/* If this is not our plugin, exit. */
	foreach ( $check as $key ) {
		if ( $plugin_data[$key] !== $framework_data[$key] ) {
			return $plugin_meta;
		}
	}

	$upgrade_url = admin_url( 'admin.php?page=brix_pro' );

	if ( $upgrade_url !== '' ) {
		$plugin_meta[] = sprintf( '<a data-upgrade-pro href="%s">%s</a>',
			esc_attr( $upgrade_url ),
			esc_html( __( 'Upgrade to premium', 'brix' ) )
		);
	}

	return $plugin_meta;
}

add_action( 'plugin_row_meta', 'brix_lite_plugin_row_meta', 11, 4 );

/**
 * Enqueue scripts on admin.
 *
 * @since 1.1.3
 */
function brix_lite_enqueue_admin_scripts() {
	global $pagenow;

	$is_pro_page = true;

	$base = BRIX_ADMIN_ASSETS_URI . 'lite/';

	/* Scripts. */
	if ( $is_pro_page ) {
		wp_enqueue_script( 'brix-lite-magnific-popup', $base . 'jquery.magnific-popup.min.js', array( 'jquery' ), false, true );
	}

	wp_enqueue_script( 'brix-lite', $base . 'lite.js', array(), false, true );

	/* Styles. */
	if ( $is_pro_page ) {
		wp_enqueue_style( 'brix-lite-magnific-popup', $base . 'magnific-popup.css' );
	}
}

add_action( 'admin_enqueue_scripts', 'brix_lite_enqueue_admin_scripts' );

/**
 * Admin footer content.
 *
 * @since 1.2
 */
function brix_lite_admin_footer() {
	echo '<script type="text/template" data-template="brix-frontend-editing-promo">';
		brix_template( BRIX_ADMIN_ASSETS_FOLDER . 'lite/frontend_editing_promo' );
	echo '</script>';
}

add_action( 'admin_footer', 'brix_lite_admin_footer' );

/**
 * Custom enqueued data.
 *
 * @since 1.1.3
 * @param array $data The data.
 * @return array
 */
function brix_lite_custom_enqueued_data( $data ) {
	$data['brix_pro_page'] = admin_url( 'admin.php?page=brix_pro' );

	return $data;
}

add_filter( 'brix_custom_enqueued_data', 'brix_lite_custom_enqueued_data' );

/**
 * Display a notice to warn the user if both the premium and Lite version of the
 * plugin are active in the current installation.
 *
 * @since 1.2
 */
function brix_lite_pro_warning() {
	$active_plugins = get_option( 'active_plugins' );

	if ( ! in_array( 'brix/brix.php', $active_plugins ) ) {
		return;
	}

	printf( '<div class="brix-auto-update-notice notice"><p>%s</p></div>',
		esc_html__( 'Both Brix premium and Brix Lite are active in this installation: deactivate the Lite version of the plugin, in order to unlock premium functionality.', 'brix' )
	);
}

add_action( 'admin_notices', 'brix_lite_pro_warning' );