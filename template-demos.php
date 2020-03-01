<?php
/**
 * Plugin Name: Gutenberg Post Layouts
 * Author: Sidetrack Studio, @itsjusteileen, @pbrocks
 * Description: A delicious plugin demonstrating creating post templates with must use core blocks.
 * Version: 1.0
 */

 /**
  * A very simple example of setting up a template as a Post Type
  */


add_action( 'init', 'sidetrack_audio_post_type' );
function sidetrack_audio_post_type() {
	$args = array(
		'public'        => true,
		'label'         => 'Audio',
		'show_in_rest'  => true,
		/** locks your blocks*/
		'template_lock' => 'all',
		'template'      => array(
			array(
				'core/image',
				array(
					// 'align' => 'left',
				),
			),
			array(
				'core/audio',
				array(
					'placeholder' => 'Add placeholder...',
				),
			),
			array(
				'core/heading',
				array(
					'placeholder' => 'Add Lyrics',
				),
			),
			array(
				'core/paragraph',
				array(
					'placeholder' => 'Add Lyrics...',
				),
			),
		),
	);
	register_post_type( 'audio', $args );
}
