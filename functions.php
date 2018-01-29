<?php
function pylon_featured_image(){
// Include Featured Image Option
add_theme_support('featured_image');
}
add_action('after_setup_theme', 'pylon_featured_image');
// Post length
function post_length(){
	return 24;
}
add_filter ('excerpt_length', 'post_length');
?>