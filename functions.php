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

// register work custom post type
function videos_register() {
 
	$labels = array(
		'name' => _x('Videos', 'post type general name'),
		'singular_name' => _x('Video', 'post type singular name'),
		'add_new' => _x('Add New', 'Video'),
		'add_new_item' => __('Add New Video'),
		'edit_item' => __('Edit Video'),
		'new_item' => __('New Video'),
		'view_item' => __('View Video'),
		'search_items' => __('Search Videos'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => "video",
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => true,
		'menu_position' => null,
		'supports' => array('title','editor','custom-fields','page-attributes', 'author', 'excerpt','thumbnail'),
		'taxonomies' => array('category', 'post_tag')
	  );
 
	register_post_type( 'video' , $args );
}
add_action('init', 'videos_register');

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

function namespace_add_custom_types($query) {

	if(is_category() || is_tag() && empty( $query->query_vars['suppress_filters'])) {
	
		$query->set( 'post_type', array(
			'post', 'nav_menu_item', 'video'
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