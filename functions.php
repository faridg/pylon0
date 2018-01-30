<?php
function pylon_theme_setup(){
// Include Featured Image Option
add_theme_support('featured_image');
// Menu 
register_nav_menus(array(
'primary' => __('Main Menu')
));
}
add_action('after_setup_theme', 'pylon_theme_setup');
// Post length
function post_length(){
	return 24;
}
add_filter ('excerpt_length', 'post_length');
// Widget Setup
function fire_widgets($id){
	register_sidebar(array(
		'name' => 'Sidebar Widget Area',
		'id' => 'sidebar',
		'before_widget' => '<div class="sidebar-widgets">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}
add_action('widgets_init', 'fire_widgets');
?>