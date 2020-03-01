<?php
/**
 * Plugin Name: Gutenberg Post Layouts
 * Author: Sidetrack Studio, @itsjusteileen, @pbrocks
 * Description: A delicious plugin demonstrating creating post templates with must use core blocks.
 * Version: 1.0
 */

 /**
  * A very simple example of setting up a php-based template
  */

function sidetrack_register__php_template() {
	$post_type_object           = get_post_type_object( 'post' );
	$post_type_object->template = array(
		array( 'core/image' ),
		array( 'core/audio' ),
		array( 'core/head' ),
		array( 'core/paragraph' ),
	);
}
  add_action( 'init', 'sidetrack_register__php_template' );
