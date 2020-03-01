<?php
 /**
  * A very simple example of setting up a nested template
  */

add_action( 'init', 'sidetrack_audio_post_type_layout' );
function sidetrack_audio_post_type() {
	$args = array(
		'public'        => true,
		'label'         => 'Audio Layout',
		'show_in_rest'  => true,
		// 'template_lock' => 'all', /*locks your blocks*/
		'template_lock' => 'insert', /*prevents adding but allows moving*/
		$template = array(
			array(
				'core/paragraph',
				array(
					'placeholder' => 'Add a root-level paragraph',
				),
			),
			array(
				'core/columns',
				array(),
				array(
					array(
						'core/column',
						array(),
						array(
							array( 'core/image', array() ),
						),
					),
					array(
						'core/column',
						array(),
						array(
							array(
								'core/audio',
								array(
									'placeholder' => 'Adds an audio player',
								),
							),
						),
					),
				),
			),
		);
	register_post_type( 'audio-layout', $args );
}
