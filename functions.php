<?php
function pylon_theme_setup(){
// Include Featured Image Option
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'pylon_theme_setup');
?>