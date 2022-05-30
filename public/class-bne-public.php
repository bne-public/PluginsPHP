<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    BNE
 * @subpackage BNE/public
 */

use Swagger\Client;
use Swagger\Client\Api;

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the bne, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    BNE
 * @subpackage BNE/public
 * @author     Your Name <email@example.com>
 */
class BNE_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $BNE    The ID of this plugin.
     */
    private $BNE;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * The integrator that's responsible integrations
     *
     * @since    1.0.0
     * @access   protected
     * @var      I_Job_Integration    $integrator    Maintains and registers all hooks for the plugin.
     */
    protected $integrator;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $BNE       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     * @param      I_Job_Integration    $integrator    The integrator object.
     */
    public function __construct($BNE, $version, $integrator)
    {
        $this->BNE = $BNE;
        $this->version = $version;
        $this->integrator = $integrator;
    }

    public function add_rewrite_rule()
    {
        // Loading rules
        $rules = get_option( 'rewrite_rules' );
        
        // Adds job view rule
        $rewriteRegex = get_option(BNE_Strings::JOB_VIEW_REWRITE_REGEX_OPTION_NAME);
        add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::JOB_VIEW_REWRITE_DESTIN_OPTION_NAME), 'top');

        // Adds search results rule
        $rewriteRegex = get_option(BNE_Strings::JOB_SEARCH_RESULT_REWRITE_REGEX_OPTION_NAME);
        add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::JOB_SEARCH_RESULT_REWRITE_DESTIN_OPTION_NAME), 'top');

        // Adds login view rule
        $rewriteRegex = get_option( BNE_Strings::LOGIN_CV_REWRITE_REGEX_OPTION_NAME );
        add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::LOGIN_CV_REWRITE_DESTIN_OPTION_NAME ), 'top');            

        // Adds register rule
        $rewriteRegex = get_option( BNE_Strings::REGISTER_CV_REWRITE_REGEX_OPTION_NAME );
        add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::REGISTER_CV_REWRITE_DESTIN_OPTION_NAME ), 'top');

        // Adds success register rule
        $rewriteRegex = get_option( BNE_Strings::SUCCESS_REGISTER_CV_REWRITE_REGEX_OPTION_NAME );
        add_rewrite_rule($rewriteRegex,  get_option(BNE_Strings::SUCCESS_REGISTER_CV_REWRITE_DESTIN_OPTION_NAME ), 'top');  

        //update_option('rewrite_rules', $rules);
        flush_rewrite_rules();
    }

    /**
     * Defines the rewrite rules
    */
    public function insert_rewrite_rules($rules)
    {
        $newrules = array();
        $newrules[get_option(BNE_Strings::JOB_SEARCH_RESULT_REWRITE_REGEX_OPTION_NAME)+'/?\?$q=([^&]+)'] = get_option( BNE_Strings::JOB_SEARCH_RESULT_REWRITE_DESTIN_OPTION_NAME );
        return $newrules + $rules;
    }

    function when_rewrite_rules($wp_rewrite)
    {
        $new_rules = array();
        $new_rules[get_option(BNE_Strings::JOB_SEARCH_RESULT_REWRITE_REGEX_OPTION_NAME)] = get_option( BNE_Strings::JOB_SEARCH_RESULT_REWRITE_DESTIN_OPTION_NAME );
        $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
    }
    
    /**
     * flush_rules() if our rules are not yet included
    */
    function flush_rewrite_rules()
    {
        $rules = get_option( 'rewrite_rules' );

        if (! isset( $rules[get_option(BNE_Strings::JOB_SEARCH_RESULT_REWRITE_REGEX_OPTION_NAME)] )) {
            global $wp_rewrite;
            $wp_rewrite->flush_rules();
        }
    }

    /**
     * Adding the id var so that WP recognizes it
    */
    function insert_query_vars($vars)
    {
        array_push($vars, 'q', 'page_num', 'job-id', 'estado', 'cidade');
        return $vars;
    }

    /**
     * Job Search form shortcode callback.
     *
     * @since    1.0.0
     */
    public function job_search_form_shortcode()
    {
        $job_search_result_url = get_home_url() . get_option( BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME ) ;

        ob_start();
        include(plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/bne-job-search-form-shortcode.php');
        $content = ob_get_clean();
        return $content;
    }

    /**
     * Job Search Result shortcode callback.
     *
     * @since    1.0.0
     */
    public function job_search_result_shortcode()
    {
      
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/lib/class-job-post.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/lib/class-job-search-result.php';
        
        $query = get_query_var('q');
		$sigla_estados = get_query_var('estado');
	    $cidade = get_query_var('cidade');
        $job_search_result_url = get_home_url() .
          get_option( BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME ) .
          "?q=" . urlencode($query);
        $page = get_query_var('page_num');
        if (empty($page)) {
            $page = 1;
        }

        $job_view_url = get_site_url() . get_option( BNE_Strings::JOB_VIEW_URL_OPTION_NAME );
                
        $search_result =  $this->integrator->GetJobs($query, $page, get_option( BNE_Strings::JOB_SEARCH_RESULTS_PER_PAGE_OPTION_NAME ), $sigla_estados, $cidade );

        wp_enqueue_style('bne-job-search-result-style', plugin_dir_url( __FILE__ ) . 'css/bne-public.css' );
        wp_enqueue_script('bne-job-search-result-script', plugin_dir_url( __FILE__ ) . 'js/cidade-estados.js', '', '', true );
        ob_start();
        include(plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/bne-job-search-result-shortcode.php');
        $content = ob_get_clean();
        return $content;
    }

    /**
     * Job View shortcode callback.
     *
     * @since    1.0.0
     */
    public function job_view_shortcode()
    {

        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/lib/class-job-post.php';
         
        $id = get_query_var('job-id');
        $job_post = $this->integrator->GetJob( $id );
 
        wp_enqueue_style('bne-job-search-result-style', plugin_dir_url( __FILE__ ) . 'css/bne-public.css' );

        ob_start();
        include(plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/bne-job-view-shortcode.php');
        $content = ob_get_clean();
        return $content;
    }

    /**
     * Login shortcode callback.
     *
     * @since    1.0.0
     */
    public function login_shortcode()
    {
        $content = "";

        if (isset($_GET["loginToApply"]) && $_GET["loginToApply"]) {
            $content .= '<p class="message">	'. __("Você precisa efetuar o login para se candidatar.") .'<br></p>';
        }

        if (isset($_GET["loginFailed"]) && $_GET["loginFailed"]) {
            $content .= '<div id="login_error">	'.
                            __("Não foi possível efetuar o login. Verifique as informações ou ") . '<a href="'. BNE_Public::get_register_link() .'">'. __("Cadastre seu currículo.") .'</a><br>
                        </div>';
        }

        $content .= '<form name="loginform" id="loginform" action="' . esc_url( admin_url('admin-post.php') ) . '" method="post">
                        <input type="hidden" name="action" value="login_cv" >
                        <input type="hidden" name="redirect_to" value="'. (array_key_exists('HTTP_REFERER', $_SERVER) ? $_SERVER["HTTP_REFERER"] : '') .'">';

        $content .= $this->integrator->GetLoginFields();

        $content .= '<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever">'.  __("Lembrar meu login") . '</label></p>
                        <p class="login-submit">
                            <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="'.  __("Log In") . '">
                        </p>
                    </form>
                    <p id="nav">
                        <a href="'. BNE_Public::get_register_link() .'">'. __("Cadastre seu currículo") .'</a>
                    </p>';
        return $content;
    }

    /**
     * Register shortcode callback.
     *
     * @since    1.0.0
     */
    public function register_shortcode()
    {
        $content = "";

        
        if (isset($_GET["loginToApply"]) && $_GET["loginToApply"]) {
            $content .= '<p class="message">	'. __("Você precisa efetuar o login para se candidatar.") .'<br></p>';
        }

        if (isset($_GET["loginFailed"]) && $_GET["loginFailed"]) {
            $content .= '<div id="login_error">	'.
                            __("Não foi possível efetuar o login. Verifique as informações ou ") . '<a href="'. BNE_Public::get_register_link() .'">'. __("Cadastre seu currículo.") .'</a><br>
                        </div>';
        }

        $content .= '<form name="register_cv_form" id="register_cv_form" action="' . esc_url( admin_url('admin-post.php') ) . '" method="post">
                        <input type="hidden" name="action" value="register_cv" >';

        $content .= $this->integrator->GetRegisterCvFields();

        $content .= '<p class="login-submit">
                            <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="'.  __("Salvar") . '">
                        </p>
                    </form>';
        

        return $content;
    }

    /**
     * Login post callback.
     *
     * @since    1.0.0
     */
    public function login_post()
    {
        $errors = array();
        $login = $this->integrator->Login($errors);

        if (isset($login) && $login) {
            if(isset($_REQUEST['redirect_to'])){
                wp_safe_redirect($_REQUEST['redirect_to']);
            }else{
                wp_safe_redirect($this->get_job_search_result_link(""));
            }
        } else {
            $this->redirect_to_login("loginFailed=true");
        }
    }

    /**
    * Login post callback.
    *
    * @since    1.0.0
    */
    public function register_cv_post()
    {
        $errors = array();
        if($this->integrator->SaveRegisterCV()){
            $this->redirect_to_success_register();
        }
    }

    /**
     * Login post callback.
     *
     * @since    1.0.0
     */
    public function apply_to_job_post()
    {
        if (!$this->integrator->IsLoggedIn()) {
            $this->redirect_to_login("loginToApply=true&redirectTo");
            return;
        }

        if(isset($_REQUEST['job_id']) && $this->integrator->ApplyToJob($_REQUEST['job_id'])){
            $this->redirect_to_job_view($_REQUEST['job_id'], "?successOnApply=true");
            return;
        }

        $this->redirect_to_job_view($_REQUEST['job_id'], "?successOnApply=false");
    }

    /**
    * Redirects to the login page
    *
    * @since    1.0.0
    */
    public function redirect_to_login($queryString = "")
    {
        wp_redirect($this->get_login_link($queryString));        
    }

    /**
    * Redirects to the redirect page
    *
    * @since    1.0.0
    */
    public function redirect_to_register($queryString = "")
    {
        wp_redirect(BNE_Public::get_register_link($queryString));
    }

    /**
    * Redirects to the redirect success page
    *
    * @since    1.0.0
    */
    public function redirect_to_success_register($queryString = "")
    {
        wp_redirect(BNE_Public::get_success_register_link($queryString));
    }

    /**
    * Redirects to the redirect success page
    *
    * @since    1.0.0
    */
    public function redirect_to_job_view($job_id, $queryString = "")
    {
        wp_redirect(BNE_Public::get_job_link($job_id, $queryString));
    }

    /**
    * Gets the register link
    *
    * @since    1.0.0
    * @param    string  $queryString    The query string to be append.
    * @return   string  Get the register link.
    */
    public static function get_register_link($queryString = "")
    {
        $register_url = get_site_url() . '/' . get_option( BNE_Strings::REGISTER_CV_REWRITE_REGEX_OPTION_NAME );

        if (!empty($queryString)) {
            $register_url .= "?" . $queryString;
        }

        return $register_url;
    }

    /**
    * Gets the register success link
    *
    * @since    1.0.0
    * @param    string  $queryString    The query string to be append.
    * @return   string  Get the register link.
    */
    public static function get_success_register_link($queryString = "")
    {
        $register_url = get_site_url() . '/' . get_option( BNE_Strings::SUCCESS_REGISTER_CV_REWRITE_REGEX_OPTION_NAME );

        if (!empty($queryString)) {
            $register_url .= "?" . $queryString;
        }

        return $register_url;
    }

    /**
    * Gets the login link
    *
    * @since    1.0.0
    * @param    string  $queryString    The query string to be append.
    * @return   string  The login url.
    */
    public function get_login_link($queryString = "")
    {
        $login_url = get_site_url() . '/' . get_option( BNE_Strings::LOGIN_CV_REWRITE_REGEX_OPTION_NAME );

        if (!empty($queryString)) {
            $login_url .= "?" . $queryString;
        }

        return $login_url;
    }

    /**
    * Gets the job view link
    *
    * @since    1.0.0
    * @param    int     $job_id         The job post id.
    * @param    string  $queryString    The query string to be append.
    * @return   string  The login url.
    */
    public static function get_job_link($job_id, $queryString = "")
    {
        $job_view_url = get_site_url() . '/' . get_option( BNE_Strings::JOB_VIEW_URL_OPTION_NAME );
        $job_view_url = str_replace('%id%', $job_id, $job_view_url);

        if (!empty($queryString)) {
            $job_view_url .= "?" . $queryString;
        }

        return $job_view_url;
    }

    /**
    * Gets the job search result link
    *
    * @since    1.0.0
    * @param    string  $query          The search to be performed.
    * @param    string  $queryString    The query string to be append.
    * @return   string  The job search result url.
    */
    public function get_job_search_result_link($query, $queryString = "")
    {
        $job_search_results_url = get_site_url() . '/' . get_option( BNE_Strings::JOB_SEARCH_RESULT_REWRITE_REGEX_OPTION_NAME );
        $job_search_results_url .= "?q=" . $query;

        if (!empty($queryString)) {
            $job_search_results_url .= "&" . $queryString;
        }

        return $job_search_results_url;
    }
}
