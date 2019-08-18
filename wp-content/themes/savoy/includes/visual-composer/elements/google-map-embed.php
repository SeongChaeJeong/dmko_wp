<?php
	
	// VC element: nm_gmap
	vc_map( array(
	   'name'			=> __( 'Google Map Embed', 'nm-framework-admin' ),
	   'category'		=> __( 'Content', 'nm-framework-admin' ),
	   'description'	=> __( 'Embed a Google Map (no API key needed)', 'nm-framework-admin' ),
	   'base'			=> 'nm_gmap_embed',
	   'icon'			=> 'nm_gmap',
	   'params'			=> array(
           array(
				'type' 			=> 'textfield',
				'heading' 		=> __( 'Address', 'nm-framework-admin' ),
				'param_name' 	=> 'address',
				'description'	=> __( 'Address for the map marker (you can type it in any language).', 'nm-framework-admin' ),
				'value' 		=> 'Amsterdam, The Netherlands'
			),
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Map Type', 'nm-framework-admin' ),
				'param_name' 	=> 'map_type',
				'description'	=> __( 'Select a map type.', 'nm-framework-admin' ),
				'value' 		=> array(
					'Roadmap'      => '',
					'Satellite'    => 'k'
				)
			),
			array(
				'type' 			=> 'textfield',
				'heading' 		=> __( 'Map Height', 'nm-framework-admin' ),
				'param_name' 	=> 'height',
				'description'	=> __( 'Enter a map height.', 'nm-framework-admin' )
			),
			array(
				'type' 			=> 'textfield',
				'heading' 		=> __( 'Zoom Level', 'nm-framework-admin' ),
				'param_name' 	=> 'zoom',
				'description' 	=> __( 'Default map zoom level (1 - 20).', 'nm-framework-admin' ),
				'value' 		=> '10',
			)
	   )
	) );
	