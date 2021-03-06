<?php
/**
 * Renders extra controls for image dimension in the new media UI.
 *
 * @since 1.1.0
 * @package ItalyStrap
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */
if ( !class_exists( 'ItalyStrapAdminMediaSettings' ) ) {

	class ItalyStrapAdminMediaSettings {
		
		function __construct() {

			add_filter( 'image_size_names_choose', array( $this, 'italystrap_get_image_sizes' ), 999 );

		}

		/**
		 * Add list of all image size to administrators in the WordPress Media Library
		 *
		 * @package ItalyStrap
		 *
		 * @link http://codex.wordpress.org/Function_Reference/get_intermediate_image_sizes
		 * @link http://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
		 * @link http://www.deluxeblogtips.com/2011/06/list-registered-image-sizes.html
		 * @link https://wordpress.org/support/topic/image_size_names_choose-not-working
		 * 
		 * @param  array $args Default WordPres image list ('thumbnail', 'medium', 'large')
		 * @return array       New list with custom and standard thumb
		 */
		function italystrap_get_image_sizes( $args ) {

			global $_wp_additional_image_sizes;

			/**
			 * An array of each size value
			 * @var array
			 */
			$sizes = array();

			/**
			 * An array of name of each thumb, custom and standard
			 * @var array
			 */
			$get_intermediate_image_sizes = get_intermediate_image_sizes();

			/**
			 * Create the full array with sizes and crop info
			 */
			foreach( $get_intermediate_image_sizes as $_size ) {

				/**
				 * var $_size string The name of each thumb
				 */
				if ( in_array( $_size, array( 'thumbnail', 'medium', 'large' ) ) ) {

					/**
					 * Get the size of each standard thumb
					 */
					$sizes[ $_size ]['width'] = get_option( $_size . '_size_w' );
					$sizes[ $_size ]['height'] = get_option( $_size . '_size_h' );
	 				$sizes[ $_size ]['crop'] = (bool) get_option( $_size . '_crop' );

				} elseif ( isset( $_wp_additional_image_sizes[ $_size ] ) ) {

					/**
					 * Get the size of each custom thumb
					 */
					$sizes[ $_size ] = array( 
							'width' => $_wp_additional_image_sizes[ $_size ]['width'],
							'height' => $_wp_additional_image_sizes[ $_size ]['height'],
							'crop' =>  $_wp_additional_image_sizes[ $_size ]['crop']
							);

				}

				/**
				 * Add thumb name to administrators in the WordPress Media Library
				 */
				$custom[ $_size ] = ucwords( str_replace( '-', ' ', $_size ) ) . ' ' . $sizes[ $_size ]['width'] . 'x' . $sizes[ $_size ]['height'];

			}

			return array_merge( $args, $custom );
		}

	}

}