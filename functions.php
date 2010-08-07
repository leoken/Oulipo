<?php 
if ( function_exists( 'add_theme_support' )) {
  add_theme_support('post-thumbnails');
  set_post_thumbnail_size( 59, 59, true );
}

if ( function_exists('register_sidebar') )
    register_sidebar();

$GLOBALS['content_width'] = 470;

add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}

?>