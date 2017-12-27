<?php
/**
 * Plugin Name:  WP-get-attachment-image-lazy-Slick
 * Plugin URI:   https://github.com/HeikoMamerow/wp-get-attachment-image-lazy-slick
 * Description:  Set attachment image markup for Slick lazy loading.
 * Version:      1.0.0
 * Author:       Heiko Mamerow
 * Author URI:   https://heikomamerow.de
 * License:      GPL2
 * License URI:  https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:  wp-get-attachment-image-lazy-slick
 * Domain Path:  /languages
 */


/**
 * Blocking direct access.
 */

defined( 'ABSPATH' ) or die();


/**
 * WP-get-attachment-image-lazy-Slick
 * Get attachment image for slick.
 *
 * Slick slider needs a special markup for his lazy loading.
 * We use the origin function wp_get_attachment_image() but
 * filter 'src' to 'data-lazy' and 'srcset' to 'data-srcset'.
 *
 *
 * @param int $attachment_id Image attachment ID.
 * @param string|array $size Optional. Image size.
 *        Accepts any valid image size, or an array of width and height values in pixels (in that order).
 *        Default 'thumbnail'.
 * @param bool $icon Optional. Whether the image should be treated as an icon. Default false.
 * @param string|array $attr Optional. Attributes for the image markup. Default empty.
 *
 * @return string HTML img element or empty string on failure.
 *
 */

function wp_get_attachment_image_lazy_slick( $attachment_id, $size, $icon, $attr ) {

	/**
	 * Change origin attributes 'src' to 'data-lazy' and 'srcset' to 'data-srcset'.
	 *
	 * Source: https://jhtechservices.com/changing-your-image-markup-in-wordpress/
	 *
	 *
	 * @param $attributes
	 *
	 * @return mixed
	 */

	if ( ! function_exists( 'gs_change_attachment_image_markup' ) ) {

		function gs_change_attachment_image_markup( $attributes ) {

			if ( isset( $attributes['src'] ) ) {
				$attributes['data-lazy'] = $attributes['src'];
				$attributes['src']       = '';
			}

			if ( isset( $attributes['srcset'] ) ) {
				$attributes['data-srcset'] = $attributes['srcset'];
				$attributes['srcset']      = '';
			}

			return $attributes;
		}
	}
	add_filter( 'wp_get_attachment_image_attributes', 'gs_change_attachment_image_markup' );

	return wp_get_attachment_image( $attachment_id, $size, $icon, $attr );
}
