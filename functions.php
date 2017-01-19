<?php

// register nav menu
function register_theme_menus() {
  register_nav_menus(
    array(
      'site-menu' => __( 'Site Menu' ),
    )
  );
}
add_action( 'init', 'register_theme_menus' );

// enable thumbnails
add_theme_support( 'post-thumbnails' );

if(!function_exists('diebug')) {

    function diebug($obj, $suppress = false)
    {

        echo '<pre><font size=2>';
        var_dump($obj);
        echo '</font></pre>';

        if(!$suppress) {
            $trace = debug_backtrace();
            echo "<font size=2>" . $trace[0]['file'];
            echo ': ' . $trace[0]['line'] . '</font>';
        }

        die();
    }
}

function get_ID_by_slug($page_slug) {

    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}

function namespace_add_custom_types($query) {

	if(is_category() || is_tag() && empty( $query->query_vars['suppress_filters'])) {

		$query->set( 'post_type', array(
			'post', 'nav_menu_item', 'projects'
		));

		return $query;

	}

}
add_filter('pre_get_posts', 'namespace_add_custom_types');

function baw_hack_wp_title_for_home($title){

  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return get_bloginfo('description') . ' - ' . get_bloginfo('title');
  }
  return $title;

}
add_filter('wp_title', 'baw_hack_wp_title_for_home');

?>
