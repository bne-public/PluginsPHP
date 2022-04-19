<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    BNE
 * @subpackage BNE/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    BNE
 * @subpackage BNE/includes
 * @author     Your Name <email@example.com>
 */
class BNE_Activator
{

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate()
    {
        BNE_Activator::load_dependencies();
        
        BNE_Activator::set_default_options();
        BNE_Activator::insert_pages();
        BNE_Activator::add_rewrite_rules();
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

    /**
    * Insert default options.
    *
    * Inserts the defatult options to plugin work perfectlly.
    *
    * @since    1.0.0
    */
    static function add_rewrite_rules()
    {
        // Loading rules
        $rules = get_option( 'rewrite_rules' );

        // Adds search results rule
        $rewriteRegex = get_option(BNE_Strings::JOB_SEARCH_RESULT_REWRITE_REGEX_OPTION_NAME);
        if (!isset( $rules[$rewriteRegex] )) {
            add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::JOB_SEARCH_RESULT_REWRITE_DESTIN_OPTION_NAME), 'top');            
        }

        // Adds job view rule
        $rewriteRegex = get_option(BNE_Strings::JOB_VIEW_REWRITE_REGEX_OPTION_NAME);
        if (!isset( $rules[$rewriteRegex] )) {
            add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::JOB_VIEW_REWRITE_DESTIN_OPTION_NAME), 'top');            
        }

        // Adds login view rule
        $rewriteRegex = get_option( BNE_Strings::LOGIN_CV_REWRITE_REGEX_OPTION_NAME );
        if (!isset( $rules[$rewriteRegex] )) {
            add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::LOGIN_CV_REWRITE_DESTIN_OPTION_NAME ), 'top');            
        }

        // Adds register rule
        $rewriteRegex = get_option( BNE_Strings::REGISTER_CV_REWRITE_REGEX_OPTION_NAME );
        if (!isset( $rules[$rewriteRegex] )) {
            add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::REGISTER_CV_REWRITE_DESTIN_OPTION_NAME ), 'top');            
        }

        // Adds register sucess rule
        $rewriteRegex = get_option( BNE_Strings::SUCCESS_REGISTER_CV_REWRITE_REGEX_OPTION_NAME );
        if (!isset( $rules[$rewriteRegex] )) {
            add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::SUCCESS_REGISTER_CV_REWRITE_DESTIN_OPTION_NAME ), 'top');            
        }

        //update_option('rewrite_rules', $rules);
        flush_rewrite_rules();
    }

    /**
    * Insert default options.
    *
    * Inserts the defatult options to plugin work perfectlly.
    *
    * @since    1.0.0
    */
    static function set_default_options()
    {
        // Defining default value for job search result url
        if (empty(get_option( BNE_Strings::SANDBOX_OPTION_NAME ))) {
            update_option( BNE_Strings::SANDBOX_OPTION_NAME, "on" );
        }

        // Defining default value for job search result url
        if (empty(get_option( BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME ))) {
            update_option( BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME,
                BNE_Strings::JOB_SEARCH_RESULT_DEFAULT_URL );
                // Updating all parameters linked with job search result
                BNE_Option_Page::update_job_search_result_options();
        }

        // Defining default value for results per page
        if (empty(get_option( BNE_Strings::JOB_SEARCH_RESULTS_PER_PAGE_OPTION_NAME ))) {
            update_option( BNE_Strings::JOB_SEARCH_RESULTS_PER_PAGE_OPTION_NAME,
                BNE_Strings::JOB_SEARCH_RESULTS_PER_PAGE_DEFAULT_VALUE );
        }

        // Defining default value for job view url
        if (empty(get_option( BNE_Strings::JOB_VIEW_URL_OPTION_NAME ))) {
            update_option( BNE_Strings::JOB_VIEW_URL_OPTION_NAME,
                BNE_Strings::JOB_VIEW_DEFAULT_URL );
                // Updating all parameters linked with job search result
                BNE_Option_Page::update_job_view_options();
        }

        // Defining default value for login url
        if (empty(get_option( BNE_Strings::LOGIN_CV_URL_OPTION_NAME ))) {
            update_option( BNE_Strings::LOGIN_CV_URL_OPTION_NAME,
                BNE_Strings::LOGIN_CV_DEFAULT_URL );
                // Updating all parameters linked with job search result
                BNE_Option_Page::update_login_view_options();
        }

        // Defining default value for register url
        if (empty(get_option( BNE_Strings::REGISTER_CV_URL_OPTION_NAME ))) {
            update_option( BNE_Strings::REGISTER_CV_URL_OPTION_NAME,
                BNE_Strings::REGISTER_CV_DEFAULT_URL );
                // Updating all parameters linked with job search result
                BNE_Option_Page::update_register_view_options();
        }

        // Defining default value for register sucess url
        if (empty(get_option( BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME ))) {
            update_option( BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME,
                BNE_Strings::SUCCESS_REGISTER_CV_DEFAULT_URL );
                // Updating all parameters linked with job search result
                BNE_Option_Page::update_success_register_view_options();
        }
    }

    /**
    * Inserts the defatult pages to plugin work perfectlly.
    *
    * @since    1.0.0
    */
    static function insert_pages()
    {
        // Inserting job results default page
        $created = BNE_Activator::insert_default_page(
            BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME,
            __('Vagas'),
            '['. BNE_Strings::JOB_SEARCH_RESULTS_SHORTCODE_NAME .']');
        if ($created) {
            // Updating all parameters linked with job search result page id
            BNE_Option_Page::update_job_search_result_options();
        }

        // Inserting job view default page
        $created = BNE_Activator::insert_default_page(
            BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME,
            __('Vaga'),
            '['. BNE_Strings::JOB_VIEW_SHORTCODE_NAME .']');
        if ($created) {
            // Updating all parameters linked with job search result page id
            BNE_Option_Page::update_job_view_options();
        }

        // Inserting login view default page
        $created = BNE_Activator::insert_default_page(
            BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME,
            __('Login CV'),
            '['. BNE_Strings::LOGIN_SHORTCODE_NAME .']');
        if ($created) {
            // Updating all parameters linked with login page id
            BNE_Option_Page::update_login_view_options();
        }

        // Inserting register view default page
        $created = BNE_Activator::insert_default_page(
            BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME,
            __('Cadastro CV'),
            '['. BNE_Strings::REGISTER_SHORTCODE_NAME .']');
        if ($created) {
            // Updating all parameters linked with register page id
            BNE_Option_Page::update_register_view_options();
        }

        // Inserting register success view default page
        $created = BNE_Activator::insert_default_page(
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
    * Inserts an default pages if it does not exists.
    *
    * @param    string  $option_name    The option's name that contais the page id.
    * @param    string  $post_title     The post title which the new post must have, if created.
    * @param    string  $content        The post content which the new post must have, if created.
    *
    * @since    1.0.0
    */
    static function insert_default_page($option_name, $post_title, $content)
    {
        // Check if exists some created option
        $page_id = get_option( $option_name );
        // Var to check the page is published
        $post_status = false;

        if (!empty($page_id)) {
            $post_status = get_post_status($page_id);
        }

        if ($post_status === 'publish') {
            return false; // There is a page for job results
        }

        if($post_status === 'draft'){
            $current_post = array(
                'ID' => $page_id,
                'post_status'   => 'publish'
            );
            wp_update_post($current_post);
            return true;
        }

        // Creating the page for job search result
        $my_post = array(
            'post_title'    => $post_title,
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_author'   => get_current_user_id(),
            'post_type'     => 'page'
        );

        // Insert the page into the database
        $page_id = wp_insert_post( $my_post, true );

        // Saving page in options
        update_option( $option_name, $page_id);
        
        return true;
    }
}
