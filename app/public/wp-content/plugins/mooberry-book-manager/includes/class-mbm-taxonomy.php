<?php

/**
 * The Mooberry Book Manager Taxonomy class is the base class responsible for creating and managing
 * taxonomies
 *
 * @package MBM
 */

/**
 * The Mooberry Book Manager Taxonomy class is the base class responsible for creating and managing
 * taxonomies
 *
 *
 *
 * @since    4.0.0
 */
class Mooberry_Book_Manager_Taxonomy {

	protected $slug;

	protected $post_type;

	protected $singular_name;

	protected $plural_name;

	protected $args;

	public function __construct( $slug, $post_type, $singular_name = '', $plural_name = '', $args = array() ) {

		$this->slug = $slug;

		$this->post_type = $post_type;

		$this->singular_name = ( $singular_name != '' ? $singular_name : $slug );

		$this->plural_name = ( $plural_name != ''? $plural_name :  $this->singular_name );

		$defaults = array(
				'rewrite' => array(	'slug' => 'mbdb_' . $this->plural_name ),
				'public' => true,
				'show_admin_column' => true,
				'show_in_quick_edit'	=> 	true,
				'update_count_callback' => '_update_post_term_count',
				'capabilities'	=> array(
					'manage_terms' => 'manage_categories',
					'edit_terms'   => 'manage_categories',
					'delete_terms' => 'manage_categories',
				),
				'labels' => array(
					'name' => $this->plural_name ,
					'singular_name' => $this->singular_name,
					'search_items' => __( 'Search ' , 'mooberry-book-manager' ) .  $this->plural_name ,
					'all_items' =>  __( 'All ', 'mooberry-book-manager' ) .  $this->plural_name ,
					'parent_item' =>   __( 'Parent ' , 'mooberry-book-manager' ) . $this->singular_name ,
					'parent_item_colon' =>  __( 'Parent %s:' , 'mooberry-book-manager' ), $this->singular_name ,
					'edit_item' =>   __( 'Edit ' , 'mooberry-book-manager' ) . $this->singular_name ,
					'update_item' =>   __( 'Update ' , 'mooberry-book-manager' ) .  $this->singular_name ,
					'add_new_item' =>   __( 'Add New ' , 'mooberry-book-manager' ) . $this->singular_name ,
					'new_item_name' => sprintf(  __( 'New %s Name' , 'mooberry-book-manager' ), $this->singular_name ),
					'menu_name' =>  $this->plural_name ,
					'popular_items' =>  __( 'Popular ', 'mooberry-book-manager' ) . $this->plural_name ,
					'separate_items_with_commas' => sprintf( __( 'Separate %s with commas', 'mooberry-book-manager' ), strtolower($this->plural_name ) ),
					'add_or_remove_items' => __( 'Add or remove ', 'mooberry-book-manager' ) . strtolower( $this->plural_name ) ,
					'choose_from_most_used' =>  __( 'Choose from the most used ', 'mooberry-book-manager' ) . strtolower( $this->plural_name ) ,
					'not_found' => sprintf( __( 'No %s found', 'mooberry-book-manager' ), strtolower( $this->plural_name ) ),
					'items_list_navigation' => sprintf( __( '%s navigation', 'mooberry-book-manager' ), $this->singular_name ),
					'items_list'            => sprintf( __( '%s list', 'mooberry-book-manager' ), $this->singular_name ),
					'back_to_items' => sprintf( __( 'Back to %s', 'mooberry-book-manager' ), strtolower( $this->plural_name ) ),

		)
			);

		$this->args = apply_filters($this->slug . '_tax_args', wp_parse_args( $args, $defaults ));

	}

	public function register() {

		register_taxonomy( $this->slug, $this->post_type, apply_filters( $this->slug . '_taxonomy', $this->args )	);
	}


	/**
	 * Magic __get function to dispatch a call to retrieve a private property
	 *
	 * @since 1.0
	 */
	public function __get( $key ) {

		if( method_exists( $this, 'get_' . $key ) ) {

			return call_user_func( array( $this, 'get_' . $key ) );

		} else {

			if ( property_exists( $this, $key ) ) {

				$ungettable_properties = array( 'db_object' );

				if ( !in_array( $key, $ungettable_properties ) ) {

					return $this->$key;

				}

			}

		}

		return new WP_Error( 'mbdb-invalid-property', sprintf( __( 'Can\'t get property %s', 'mooberry-book-manager' ), $key ) );

	}

}
