<?php
	
	// VC element: nm_product_slider
	vc_map( array(
		'name' 			=> __( 'Product Slider', 'nm-framework-admin' ),
		'category' 		=> __( 'WooCommerce', 'nm-framework-admin' ),
		'description'	=> __( 'Display product slider', 'nm-framework-admin' ),
		'base' 			=> 'nm_product_slider',
		'icon' 			=> 'icon-wpb-woocommerce',
		'params' 		=> array(
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Type', 'nm-framework-admin' ),
				'param_name' 	=> 'shortcode',
				'description' 	=> __( 'Select type of products to display.', 'nm-framework-admin' ),
				'value' 		=> array(
					__( 'Recent', 'nm-framework-admin' )				=> 'recent_products',
					__( 'Featured Products', 'nm-framework-admin' )		=> 'featured_products',
					__( 'Sale Products', 'nm-framework-admin' )			=> 'sale_products',
					__( 'Best Selling Products', 'nm-framework-admin' )	=> 'best_selling_products',
					__( 'Top Rated Products', 'nm-framework-admin' )	=> 'top_rated_products',
                    __( 'Product Category', 'nm-framework-admin' )      => 'product_category',
				),
				'std'           => 'recent_products',
                'save_always' 	=> true
			),
            array(
				'type' 			=> 'textfield',
				'heading' 		=> __( 'Category ID', 'nm-framework-admin' ),
				'param_name' 	=> 'category',
				'description'	=> __( 'Enter a <a href="https://docs.woocommerce.com/document/find-product-category-ids/" target="_blank">product category ID</a>.', 'nm-framework-admin' ),
				'dependency'	=> array(
					'element'	=> 'shortcode',
					'value'		=> array( 'product_category' )
				)
			),
			array(
				'type' 			=> 'textfield',
				'heading' 		=> __( 'Per page', 'nm-framework-admin' ),
				'value' 		=> 12,
				'param_name' 	=> 'per_page',
				'description' 	=> __( 'The "per_page" shortcode determines how many products to show on the page', 'nm-framework-admin' ),
				'std'           => '12',
                'save_always'	=> true
			),
			array(
                'type' 			=> 'dropdown',
				'heading' 		=> __( 'Columns', 'nm-framework-admin' ),
				'value' 		=> 4,
				'param_name' 	=> 'columns',
				'description'	=> __( 'The columns attribute controls how many columns wide the products should be before wrapping.', 'nm-framework-admin' ),
				'value' 		=> array(
                    '2' => '2',
                    '3' => '3',
                    '4' => '4',
                    '5' => '5',
                    '6' => '6'
				),
                'std'           => '4',
                'save_always'	=> true
			),
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Order by', 'nm-framework-admin' ),
				'param_name' 	=> 'orderby',
				'description' 	=> sprintf( __( 'Select how to sort retrieved products. More at %s.', 'nm-framework-admin' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
				'value' 		=> array(
					__( 'Date', 'nm-framework-admin' )				=> 'date',
					__( 'ID', 'nm-framework-admin' )				=> 'ID',
					__( 'Author', 'nm-framework-admin' )			=> 'author',
					__( 'Title', 'nm-framework-admin' )			=> 'title',
					__( 'Modified', 'nm-framework-admin' )			=> 'modified',
					__( 'Random', 'nm-framework-admin' )			=> 'rand',
					__( 'Comment count', 'nm-framework-admin' )	=> 'comment_count',
					__( 'Menu order', 'nm-framework-admin' )		=> 'menu_order'
				),
				'std'           => 'date',
                'save_always' 	=> true
			),
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Sort order', 'nm-framework-admin' ),
				'param_name' 	=> 'order',
				'description' 	=> sprintf( __( 'Designates the ascending or descending order. More at %s.', 'nm-framework-admin' ), '<a href="http://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters" target="_blank">WordPress codex page</a>' ),
				'value' 		=> array(
					__( 'Descending', 'nm-framework-admin' )	=> 'DESC',
					__( 'Ascending', 'nm-framework-admin' )	=> 'ASC'
				),
				'std' => 'DESC',
                'save_always' 	=> true
			),
            array(
				'type' 			=> 'checkbox',
				'heading' 		=> __( 'Arrows', 'nm-framework-admin' ),
				'param_name' 	=> 'arrows',
				'description'	=> __( 'Display "prev" and "next" arrows.', 'nm-framework-admin' ),
				'value'			=> array(
					__( 'Enable', 'nm-framework-admin' )	=> '1'
				)
			)
		)
	) );