<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_filter( 'the_content', 'my_aside_to_infinity_and_beyond', 9 ); // run before wpautop


// a function to add the infinit symbol to the end of an aside post, when it's in the homepage
function my_aside_to_infinity_and_beyond( $content ) {

	if ( has_post_format( 'aside' ) && !is_singular() )
		$content .= ' <a href="' . get_permalink() . '" class="infinit-permalink">&#8734;</a>';

	return $content;
}
?>