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
		BNE_Deactivator::deactivate_pages();
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

	static function deactivate_pages()
    {
        // Inserting job results default page
        $created = BNE_Deactivator::desactive_default_page(
            BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME,
            __('Vagas'),
            '['. BNE_Strings::JOB_SEARCH_RESULTS_SHORTCODE_NAME .']');
        if ($created) {
            // Updating all parameters linked with job search result page id
            BNE_Option_Page::update_job_search_result_options();
        }

        // Inserting job view default page
        $created = BNE_Deactivator::desactive_default_page(
            BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME,
            __('Vaga'),
            '['. BNE_Strings::JOB_VIEW_SHORTCODE_NAME .']');
        if ($created) {
            // Updating all parameters linked with job search result page id
            BNE_Option_Page::update_job_view_options();
        }

        // Inserting login view default page
        $created = BNE_Deactivator::desactive_default_page(
            BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME,
            __('Login CV'),
            '['. BNE_Strings::LOGIN_SHORTCODE_NAME .']');
        if ($created) {
            // Updating all parameters linked with login page id
            BNE_Option_Page::update_login_view_options();
        }

        // Inserting register view default page
        $created = BNE_Deactivator::desactive_default_page(
            BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME,
            __('Cadastro CV'),
            '['. BNE_Strings::REGISTER_SHORTCODE_NAME .']');
        if ($created) {
            // Updating all parameters linked with register page id
            BNE_Option_Page::update_register_view_options();
        }

        // Inserting register success view default page
        $created = BNE_Deactivator::desactive_default_page(
            BNE_Strings::SUCCESS_REGISTER_CV_PAGE_ID_OPTION_NAME,
            __('Sucesso no Cadastro CV'),
            '<div class="register-cv-success">'.
            '<h1>'. __("O cadastro do seu curriculo foi realizado com sucesso") .'</h1>'.
            '<p>'. __("Aproveite para pesquisar vagas e candidatar-se gratuitamente.") .'</p>'.
            '['. BNE_Strings::JOB_SEARCH_FORM_SHORTCODE_NAME .']'.
            '</div>');
        if ($created) {
            // Updating all parameters linked with register page id
            BNE_Option_Page::update_success_register_view_options();
        }
    }

    /**
     * Desative an default pages if it does not exists.
     *
     * @param    string  $option_name    The option's name that contais the page id.
     * @param    string  $post_title     The post title which the new post must have, if created.
     * @param    string  $content        The post content which the new post must have, if created.
     *
     * @since    1.0.0
     */
    static function desactive_default_page($option_name, $post_title, $content)
    {
        // Check if exists some created option
        $page_id = get_option( $option_name );

        // Delete post
        #wp_delete_post($page_id);

        // Desactive the post
        BNE_Deactivator::change_post_status($page_id, 'draft');
    }

    /*
        $post_id - The ID of the post you'd like to change.
        $status -  The post status publish|pending|draft|private|static|object|attachment|inherit|future|trash.
    */
    static function change_post_status($post_id,$status){
        $current_post = get_post( $post_id, 'ARRAY_A' );
        $current_post['post_status'] = $status;
        return wp_update_post($current_post);
    }

}
