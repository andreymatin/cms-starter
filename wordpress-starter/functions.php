<?php

/**
 * Register our sidebars and widgetized areas.
 */
function tf_widgets_init() {
	register_sidebar( array(
		'name' => 'Main',
		'id' => 'column-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div></div>",
		'before_title' => '<h3>',
		'after_title' => '</h3><div class="widget-content">',
	));

}
add_action( 'widgets_init', 'tf_widgets_init' );


/**
 * WP header tuning
 */
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );  
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );

// Theme support
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
}

/**
 * Filters the page title appropriately depending on the current page
 *
 * This function is attached to the 'wp_title' fiilter hook.
 *
 * @uses	get_bloginfo()
 * @uses	is_home()
 * @uses	is_front_page()
 */
add_filter( 'wp_title', 'filter_wp_title' );
function filter_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	$site_description = get_bloginfo( 'description' );

	$filtered_title = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}