<?php
use Swagger\Client;
use Swagger\Client\Api;
use Swagger\Client\Model;

/**
 * The job with the ajax handlers for BNE.
 *
 * @package    BNE
 * @author     Fabrício Pereira<fabriciopereira@bne.com.br>
 */
class BNE_Ajax_Handlers
{

  /**
  * The bne api manager
  *
  * @since    1.0.0
  * @access   protected
  * @var      BNE_Api_Manager    $apiManager    Maintains the bne api manager.
  */
  protected $apiManager;

  /**
  * Returns a string with the register cv fields
  *
  * @since  1.0.0
  * @param  BNE_Api_Manager $apiManager Maintains the bne api manager.
  */
  public function __construct($apiManager){
    add_action( 'wp_ajax_autocomplete_cidade', array($this, 'cidade_ajax_handler') ); 
    add_action( 'wp_ajax_nopriv_autocomplete_cidade', array($this, 'cidade_ajax_handler') ); 
    add_action( 'wp_ajax_autocomplete_funcao', array($this, 'funcao_ajax_handler') ); 
    add_action( 'wp_ajax_nopriv_autocomplete_funcao', array($this, 'funcao_ajax_handler') ); 
    add_action( 'wp_ajax_autocomplete_instituicao', array($this, 'instituicao_ajax_handler') ); 
    add_action( 'wp_ajax_nopriv_autocomplete_instituicao', array($this, 'instituicao_ajax_handler') ); 
    add_action( 'wp_ajax_autocomplete_curso', array($this, 'curso_ajax_handler') ); 
    add_action( 'wp_ajax_nopriv_autocomplete_curso', array($this, 'curso_ajax_handler') ); 
    add_action( 'wp_ajax_check_cpf_dn', array($this, 'check_cpf_dn_ajax_handler') );
    add_action( 'wp_ajax_nopriv_check_cpf_dn', array($this, 'check_cpf_dn_ajax_handler') );
    $this->apiManager = $apiManager; 
  }

  public function Configure()
  {
    wp_enqueue_script( 'bne-ajax', plugin_dir_url( __FILE__ ) . 'js/bne-ajax.js', array( 'jquery', 'jquery-ui-autocomplete' ), null, true );

    wp_localize_script( 'bne-ajax', 'bne_ajax_obj', array(
      'ajax_url' => admin_url( 'admin-ajax.php' ),
      'nonce'    => wp_create_nonce( 'bne-ajax-nonce' ),
    ) );
  }

  /**
  * Handles ajax requests for city
  *
  * @since    1.0.0
  */
  function cidade_ajax_handler()
  {
      check_ajax_referer( 'bne-ajax-nonce' );

      $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
      $tabelas_api = new \Swagger\Client\Api\TabelasApi($api_client);

      $cidades = $tabelas_api->tabelasCidadesBynomeParcialnumeroRegistros($_REQUEST['partial'], 10);

      wp_send_json( $cidades );
  }

  /**
  * Handles ajax requests for cities
  *
  * @since    1.0.0
  */
  function funcao_ajax_handler()
  {
      check_ajax_referer( 'bne-ajax-nonce' );

      $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
      $tabelas_api = new \Swagger\Client\Api\TabelasApi($api_client);

      $cidades = $tabelas_api->tabelasFuncoesBynomeParcialnumeroRegistros($_REQUEST['partial'], 10);

      wp_send_json( $cidades );
  }

  /**
  * Handles ajax requests for education instituition
  *
  * @since    1.0.0
  */
  function instituicao_ajax_handler()
  {
      check_ajax_referer( 'bne-ajax-nonce' );

      $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
      $tabelas_api = new \Swagger\Client\Api\TabelasApi($api_client);

      $instituicoes = $tabelas_api->tabelasInstituicoesBynomeParcialnivelCursonumeroRegistros($_REQUEST['partial'], null, 10);

      wp_send_json( $instituicoes );
  }

  /**
  * Handles ajax requests for course
  *
  * @since    1.0.0
  */
  function curso_ajax_handler()
  {
      check_ajax_referer( 'bne-ajax-nonce' );

      $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
      $tabelas_api = new \Swagger\Client\Api\TabelasApi($api_client);

      $instituicoes = $tabelas_api->tabelasCursosBynomeParcialnumeroRegistros($_REQUEST['partial'], 10);

      wp_send_json( $instituicoes );
  }

  /**
  * Handles ajax requests for cpf and dn
  *
  * @since    1.0.0
  */
  function check_cpf_dn_ajax_handler()
  {
      check_ajax_referer( 'bne-ajax-nonce' );

      $dn = BNE_Util::GetJsonFormatDate($_REQUEST['dn']);
      $cpf = floatval(preg_replace("/[^0-9]/", "", $_REQUEST['cpf']));

      $this->apiManager->SetApiKeyHeader($cpf, $dn);      
      $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
      $curriculo_api = new \Swagger\Client\Api\CurriculoApi($api_client);

      $retorno = false;
      try {
          $curriculo = $curriculo_api->curriculoObterCVPorCpfBycpfnascimento($cpf, $dn);
          $this->apiManager->StoreApiKey($cpf, $dn);
          $retorno = array( "error" => false, "login" => true, "message" => __("O currículo já existe em nossa base de dados. Por favor atualize suas informações.") );
      } catch (\Swagger\Client\ApiException $e) {
          switch ($e->getCode()) {
              case 404:
                $retorno = array( "error" => false, "login" => false, "message" => "" );
                break;
              case 403:
                $message = $e->getResponseBody()->Message;
                if($message == "Falha na autenticação. Data de nascimento não confere com a cadastrada."){
                    $retorno = array( "error" => true, "login" => false, "message" => __("Currículo existe em nossa base, mas a Data de Nascimento não confere. Por favor revise seus dados.") );
                }else{
                    $retorno = array( "error" => false, "login" => false, "message" => "");
                }
                break;
          }

      }

      wp_send_json( json_encode($retorno) );
  }
}
