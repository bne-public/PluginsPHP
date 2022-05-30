<?php

/**
 * The plugin`s option page.
 *
 * @link       http://www.salariobr.com
 * @since      1.0.0
 *
 * @package    BNE
 * @subpackage BNE/admin
 */

/**
 * The plugin`s option page.
 *
 * @package    BNE
 * @subpackage BNE/admin
 * @author     Francisco Ribas <franciscoribas@bne.com.br>
 */
class BNE_Option_Page
{
    
    function __construct()
    {

        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
        add_action( 'admin_init', array( $this, 'register_bne_setting') );
        add_action( 'update_option_' . BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME,
                    array( $this, 'updated_job_search_result_url'), 10, 3 );
        add_action( 'update_option_' . BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME,
                    array( $this, 'updated_job_search_result_page_id'), 10, 3 );
        add_action( 'update_option_' . BNE_Strings::JOB_VIEW_URL_OPTION_NAME,
                    array( $this, 'updated_job_view_url'), 10, 3 );
        add_action( 'update_option_' . BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME,
                    array( $this, 'updated_job_view_page_id'), 10, 3 );
        add_action( 'update_option_' . BNE_Strings::LOGIN_CV_URL_OPTION_NAME,
                    array( $this, 'updated_login_view_url'), 10, 3 );
        add_action( 'update_option_' . BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME,
                    array( $this, 'updated_login_view_page_id'), 10, 3 );
        add_action( 'update_option_' . BNE_Strings::REGISTER_CV_URL_OPTION_NAME,
                    array( $this, 'updated_register_view_url'), 10, 3 );
        add_action( 'update_option_' . BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME,
                    array( $this, 'updated_register_view_page_id'), 10, 3 );
        add_action( 'update_option_' . BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME,
                    array( $this, 'updated_success_register_view_url'), 10, 3 );
        add_action( 'update_option_' . BNE_Strings::SUCCESS_REGISTER_CV_PAGE_ID_OPTION_NAME,
                    array( $this, 'updated_success_register_view_page_id'), 10, 3 );

    }

    /**
     * Register the settings menu item for the admin area.
     *
     * @since    1.0.0
     */
    function admin_menu()
    {
        add_options_page(
            __("Configurações BNE"),
            __("BNE"),
            "manage_options",
            "bne-config",
                array(
                    $this,
                    'settings_page'
                )
        );
    }

    /**
     * Prints plugin`s option page.
     *
     * @since    1.0.0
     */
    function settings_page()
    {
        include(plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/bne-option-page-display.php');
    }

    /**
     * Defines plugin`s option groups.
     *
     * @since    1.0.0
     */
    function register_bne_setting()
    {

        register_setting( 'bne_url_options', BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::JOB_SEARCH_RESULTS_PER_PAGE_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::JOB_VIEW_URL_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::LOGIN_CV_URL_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::REGISTER_CV_URL_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::SUCCESS_REGISTER_CV_PAGE_ID_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::SANDBOX_OPTION_NAME );
        register_setting( 'bne_url_options', BNE_Strings::APIKEY_OPTION_NAME );
    }

    /**
     * Updating rewrite rules when job search result url is modified
     *
     * @since    1.0.0
    */
    function updated_job_search_result_url($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        BNE_Option_Page::update_job_search_result_rewrite($value, $old_value, get_option( BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME ));

        return $value;
    }

    /**
     * Updating rewrite rules when job search result page is modified
     *
     * @since    1.0.0
    */
    function updated_job_search_result_page_id($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        $url = get_option( BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME );
        BNE_Option_Page::update_job_search_result_rewrite($url, $url, $value );

        return $value;
    }
    
    /**
     * Updates rewrite rules for job search result page
     *
     * @since    1.0.0
    */
    public static function update_job_search_result_rewrite($url, $old_url, $page_id)
    {
        // Loading rules
        $rules = get_option( 'rewrite_rules' );

        // Removes old rule
        $rewriteRegex = BNE_Option_Page::get_job_search_result_rewrite_regex($old_url, $page_id, $destin_url);
        if (isset($rewriteRegex)) {
            unset($rewriteRegex);
        }
        
        $rewriteRegex = BNE_Option_Page::get_job_search_result_rewrite_regex($url, $page_id, $destin_url);
        update_option( BNE_Strings::JOB_SEARCH_RESULT_REWRITE_REGEX_OPTION_NAME, $rewriteRegex);
        update_option( BNE_Strings::JOB_SEARCH_RESULT_REWRITE_DESTIN_OPTION_NAME, $destin_url);

        // Flushing rewrite rules
        add_rewrite_rule($rewriteRegex, $destin_url);
        flush_rewrite_rules();
    }

    public static function update_job_search_result_options()
    {
        $url = get_option( BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME );
        $page_id = get_option( BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME );
        
        BNE_Option_Page::update_job_search_result_rewrite($url, $url, $page_id);
    }

    /**
     * Builds the rewrite regex and the rewrite url based on the url pattern in the first parameter
     *
     * @since    1.0.0
    */
    private static function get_job_search_result_rewrite_regex($url, $page_id, &$destin_url)
    {
        
        $destin_url = 'index.php?page_id='.$page_id;
        
        // Removing slashs fro the beginig
        $url = preg_replace('/^\/*/i', "", $url);

        return $url;
    }

    /**
     * Updating rewrite rules when job view url is modified
     *
     * @since    1.0.0
    */
    function updated_job_view_url($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        BNE_Option_Page::update_job_view_rewrite($value, $old_value, get_option( BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME ));

        return $value;
    }

    /**
     * Updating rewrite rules when job view page is modified
     *
     * @since    1.0.0
    */
    function updated_job_view_page_id($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        $url = get_option( BNE_Strings::JOB_VIEW_URL_OPTION_NAME );
        BNE_Option_Page::update_job_view_rewrite($url, $url, $value );

        return $value;
    }
    
    /**
     * Updates rewrite rules for job view page
     *
     * @since    1.0.0
    */
    public static function update_job_view_rewrite($url, $old_url, $page_id)
    {
        // Loading rules
        $rules = get_option( 'rewrite_rules' );

        // Removes old rule
        $rewriteRegex = BNE_Option_Page::get_job_view_rewrite_regex($old_url, $page_id, $destin_url);
        if (isset($rules[$rewriteRegex])) {
            unset($rules[$rewriteRegex]);
        }
        
        $rewriteRegex = BNE_Option_Page::get_job_view_rewrite_regex($url, $page_id, $destin_url);
        update_option( BNE_Strings::JOB_VIEW_REWRITE_REGEX_OPTION_NAME, $rewriteRegex);
        update_option( BNE_Strings::JOB_VIEW_REWRITE_DESTIN_OPTION_NAME, $destin_url);

        // Flushing rewrite rules
        add_rewrite_rule($rewriteRegex, $destin_url, 'top');
        flush_rewrite_rules();
    }

    public static function update_job_view_options()
    {
        $url = get_option( BNE_Strings::JOB_VIEW_URL_OPTION_NAME );
        $page_id = get_option( BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME );
        
        BNE_Option_Page::update_job_view_rewrite($url, $url, $page_id);
    }

    /**
     * Builds the rewrite regex and the rewrite url based on the url pattern in the first parameter
     *
     * @since    1.0.0
    */
    private static function get_job_view_rewrite_regex($url, $page_id, &$destin_url)
    {
        
        $destin_url = 'index.php?page_id='.$page_id.'&job-id=$matches[1]';
                
        // Replacing parameters
        $url = str_replace("%id%", "([0-9]+)", $url);

        // Removing slashs fro the beginig
        $url = preg_replace('/^\/*/i', "", $url);

        return $url;
    }

    /**
     * Updating rewrite rules when login url is modified
     *
     * @since    1.0.0
    */
    function updated_login_view_url($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        BNE_Option_Page::update_login_view_rewrite($value, $old_value, get_option( BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME ));

        return $value;
    }

    /**
     * Updating rewrite rules when login page is modified
     *
     * @since    1.0.0
    */
    function updated_login_view_page_id($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        $url = get_option( BNE_Strings::LOGIN_CV_URL_OPTION_NAME );
        BNE_Option_Page::update_login_view_rewrite($url, $url, $value );

        return $value;
    }
    
    /**
     * Updates rewrite rules for login view page
     *
     * @since    1.0.0
    */
    public static function update_login_view_rewrite($url, $old_url, $page_id)
    {
        // Loading rules
        $rules = get_option( 'rewrite_rules' );

        // Removes old rule
        $rewriteRegex = BNE_Option_Page::get_login_view_rewrite_regex($old_url, $page_id, $destin_url);
        if (isset($rules[$rewriteRegex])) {
            unset($rules[$rewriteRegex]);
        }
        
        $rewriteRegex = BNE_Option_Page::get_login_view_rewrite_regex($url, $page_id, $destin_url);
        update_option( BNE_Strings::LOGIN_CV_REWRITE_REGEX_OPTION_NAME, $rewriteRegex);
        update_option( BNE_Strings::LOGIN_CV_REWRITE_DESTIN_OPTION_NAME, $destin_url);

        // Flushing rewrite rules
        add_rewrite_rule($rewriteRegex, $destin_url, 'top');
        flush_rewrite_rules();
    }

    public static function update_login_view_options()
    {
        $url = get_option( BNE_Strings::LOGIN_CV_URL_OPTION_NAME );
        $page_id = get_option( BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME );
        
        BNE_Option_Page::update_login_view_rewrite($url, $url, $page_id);
    }

    /**
     * Builds the rewrite regex and the rewrite url to login cv
     *
     * @since    1.0.0
    */
    private static function get_login_view_rewrite_regex($url, $page_id, &$destin_url)
    {
        $destin_url = 'index.php?page_id='.$page_id;
                
        return $url;
    }

    /**
     * Updating rewrite rules when register url is modified
     *
     * @since    1.0.0
    */
    function updated_register_view_url($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        BNE_Option_Page::update_register_view_rewrite($value, $old_value, get_option( BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME ));

        return $value;
    }

    /**
     * Updating rewrite rules when register page is modified
     *
     * @since    1.0.0
    */
    function updated_register_view_page_id($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        $url = get_option( BNE_Strings::REGISTER_CV_URL_OPTION_NAME );
        BNE_Option_Page::update_register_view_rewrite($url, $url, $value );

        return $value;
    }
    
    /**
     * Updates rewrite rules for register view page
     *
     * @since    1.0.0
    */
    public static function update_register_view_rewrite($url, $old_url, $page_id)
    {
        // Loading rules
        $rules = get_option( 'rewrite_rules' );

        // Removes old rule
        $rewriteRegex = BNE_Option_Page::get_register_view_rewrite_regex($old_url, $page_id, $destin_url);
        if (isset($rules[$rewriteRegex])) {
            unset($rules[$rewriteRegex]);
        }
        
        $rewriteRegex = BNE_Option_Page::get_register_view_rewrite_regex($url, $page_id, $destin_url);
        update_option( BNE_Strings::REGISTER_CV_REWRITE_REGEX_OPTION_NAME, $rewriteRegex);
        update_option( BNE_Strings::REGISTER_CV_REWRITE_DESTIN_OPTION_NAME, $destin_url);

        // Flushing rewrite rules
        add_rewrite_rule($rewriteRegex, $destin_url, 'top');
        flush_rewrite_rules();
    }

    public static function update_register_view_options()
    {
        $url = get_option( BNE_Strings::REGISTER_CV_URL_OPTION_NAME );
        $page_id = get_option( BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME );
        
        BNE_Option_Page::update_register_view_rewrite($url, $url, $page_id);
    }

    /**
     * Builds the rewrite regex and the rewrite url to register cv
     *
     * @since    1.0.0
    */
    private static function get_register_view_rewrite_regex($url, $page_id, &$destin_url)
    {
        $destin_url = 'index.php?page_id='.$page_id;
        
        // Removing slashs fro the beginig
        $url = preg_replace('/^\/*/i', "", $url);

        return $url;
    }

    /***/

    /**
     * Updating rewrite rules when register success url is modified
     *
     * @since    1.0.0
    */
    function updated_success_register_view_url($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        BNE_Option_Page::update_success_register_view_rewrite($value, $old_value, get_option( BNE_Strings::SUCCESS_REGISTER_CV_PAGE_ID_OPTION_NAME ));

        return $value;
    }

    /**
     * Updating rewrite rules when register success page is modified
     *
     * @since    1.0.0
    */
    function updated_success_register_view_page_id($old_value, $value, $option)
    {
        
        if ($old_value === $value) {
            return $value; // nothing changed, nothing to do
        }

        $url = get_option( BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME );
        BNE_Option_Page::update_success_register_view_rewrite($url, $url, $value );

        return $value;
    }
    
    /**
     * Updates rewrite rules for register success view page
     *
     * @since    1.0.0
    */
    public static function update_success_register_view_rewrite($url, $old_url, $page_id)
    {
        // Loading rules
        $rules = get_option( 'rewrite_rules' );

        // Removes old rule
        $rewriteRegex = BNE_Option_Page::get_success_register_view_rewrite_regex($old_url, $page_id, $destin_url);
        if (isset($rules[$rewriteRegex])) {
            unset($rules[$rewriteRegex]);
        }
        
        $rewriteRegex = BNE_Option_Page::get_success_register_view_rewrite_regex($url, $page_id, $destin_url);
        update_option( BNE_Strings::SUCCESS_REGISTER_CV_REWRITE_REGEX_OPTION_NAME, $rewriteRegex);
        update_option( BNE_Strings::SUCCESS_REGISTER_CV_REWRITE_DESTIN_OPTION_NAME, $destin_url);

        // Flushing rewrite rules
        add_rewrite_rule($rewriteRegex, $destin_url, 'top');
        flush_rewrite_rules();
    }

    public static function update_success_register_view_options()
    {
        $url = get_option( BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME );
        $page_id = get_option( BNE_Strings::SUCCESS_REGISTER_CV_PAGE_ID_OPTION_NAME );
        
        BNE_Option_Page::update_success_register_view_rewrite($url, $url, $page_id);
    }

    /**
     * Builds the rewrite regex and the rewrite url to register success cv
     *
     * @since    1.0.0
    */
    private static function get_success_register_view_rewrite_regex($url, $page_id, &$destin_url)
    {
        $destin_url = 'index.php?page_id='.$page_id;
        
        // Removing slashs fro the beginig
        $url = preg_replace('/^\/*/i', "", $url);

        return $url;
    }

}
