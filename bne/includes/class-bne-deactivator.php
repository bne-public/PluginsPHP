<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    BNE
 * @subpackage BNE/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    BNE
 * @subpackage BNE/includes
 * @author     Your Name <email@example.com>
 */
class BNE_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		BNE_Deactivator::load_dependencies();
		BNE_Deactivator::remove_rewrite_rules();
		
	}

	/**
	* Load the required dependencies for plugin activation.
	*
	* @since    1.0.0
	* @access   private
	*/
	private static function load_dependencies()
	{		
		/**
		* The class with the plugin strings.
		*/
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-bne-strings.php';
	}

	private static function remove_rewrite_rules(){
		// Loading rules
		$rules = get_option( 'rewrite_rules' );
		
		// Removes search results rule
		$rewriteRegex = get_option(BNE_Strings::JOB_SEARCH_RESULT_REWRITE_REGEX_OPTION_NAME);
		if (isset( $rules[$rewriteRegex] )) {
				unset( $rules[$rewriteRegex]);
		}

		// Removes job view rule
		$rewriteRegex = get_option(BNE_Strings::JOB_VIEW_REWRITE_REGEX_OPTION_NAME);
		if (isset( $rules[$rewriteRegex] )) {
				unset($rules[$rewriteRegex]);
		}

		// Removes login view rule
		$rewriteRegex = get_option(BNE_Strings::LOGIN_CV_REWRITE_REGEX_OPTION_NAME);
		if (isset( $rules[$rewriteRegex] )) {
				unset($rules[$rewriteRegex]);
		}

		// Removes register view rule
		$rewriteRegex = get_option(BNE_Strings::REGISTER_CV_REWRITE_REGEX_OPTION_NAME);
		if (isset( $rules[$rewriteRegex] )) {
				unset($rules[$rewriteRegex]);
		}

		update_option('rewrite_rules', $rules);
		flush_rewrite_rules();
	}

}
