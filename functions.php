<?php if ( function_exists('register_sidebar') )register_sidebar(0); 
add_theme_support( 'post-thumbnails' ); 

function wpb_custom_new_menu() {
	register_nav_menu('menu-gauche',__( 'menu gauche' ));}
	add_action( 'init', 'wpb_custom_new_menu' );

//Exclude pages from WordPress Search
function wpb_search_filter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}
	
add_filter('pre_get_posts','wpb_search_filter');

?>

