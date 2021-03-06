<?php

namespace Yoast\WP\SEO\Conditionals\Admin;

use Yoast\WP\SEO\Conditionals\Conditional;

/**
 * Conditional that is only met when on a post overview page or during an ajax request.
 */
class Elementor_Edit_Conditional implements Conditional {

	/**
	 * Returns whether or not this conditional is met.
	 *
	 * @return boolean Whether or not the conditional is met.
	 */
	public function is_met() {
		global $pagenow;

		// Check if we are on an Elementor edit page.
		$get_action = \filter_input( INPUT_GET, 'action', FILTER_SANITIZE_STRING );
		if ( $pagenow === 'post.php' && $get_action === 'elementor' ) {
			return true;
		}

		// Check if we are in our Elementor ajax request.
		$post_action = \filter_input( INPUT_POST, 'action', FILTER_SANITIZE_STRING );
		return \wp_doing_ajax() && $post_action === 'wpseo_elementor_save';
	}
}
