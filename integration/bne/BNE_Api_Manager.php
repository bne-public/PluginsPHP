<?php
use Swagger\Client;
use Swagger\Client\Api;
use Swagger\Client\Model;

/**
 * The manger for BNE api keys.
 *
 * @package    BNE
 * @subpackage BNE/public;lib
 * @author     Fabrício Pereira<fabriciopereira@bne.com.br>
 */
class BNE_Api_Manager
{

  /**
  * The BNE Api configuration
  *
  * @since    1.0.0
  * @access   public
  * @var      \Swagger\Client\Configuration    $configuration    Maintains the api configuration.
  */
  public $configuration;

  /**
  * The system key
  *
  * @since    1.0.0
  * @access   protected
  * @var      BNE_Job_Integration    $systemKey    Maintains the system key.
  */
  protected $systemKey;
    
  /**
  * The system key
  *
  * @since    1.0.0
  * @access   protected
  * @var      string    $authCookieName    Maintains the bne auth cookie name.
  */
  protected $authCookieName = 'BNE_Auth_1231231245568';

  public function __construct(){

    $this->systemKey = "144380b8-f989-49c3-9d78-3f2d6b35a47e";

    $this->configuration = new \Swagger\Client\Configuration();
    // TODO: change the api to 'apibne'
    // Defining the api url
    //$this->configuration->setHost("http://gatewayapi.bne.com.br/apibneinterna");
    //$this->configuration->setHost("http://gatewayapiteste.bne.com.br/apibne");
    $sandbox = get_option( BNE_Strings::SANDBOX_OPTION_NAME );
    if($sandbox){
        $this->configuration->setHost(BNE_Strings::URL_SANDBOX_OPTION_NAME);        
    }else{
        $this->configuration->setHost(BNE_Strings::URL_PROD_OPTION_NAME);        
    }
    //$this->configuration->setHost("http://localhost:9001/apibne");

    $this->SetApiKeyHeader(null, null);
  }

  /**
  * Set the api key header
  *
  * @since    1.0.0
  * @param    float  $cpf User`s cpf
  * @param    date   $dn  User`s birth date
  */
  public function SetApiKeyHeader($cpf, $dn)
  {
    $apiKey = $this->GetStoredApiKey();

    if (!isset($apiKey) || (isset($cpf) && isset($dn))) {
        $apiKey = $this->BuildApiKey($cpf, $dn);
    }

    // Adding authentication header
    $this->configuration->addDefaultHeader("apiKey", $apiKey);    
  }

  /**
  * Builds the api key
  *
  * @since    1.0.0
  * @param    float  $cpf User`s cpf
  * @param    date   $dn  User`s birth date
  * @return   string  The generated api key
  */
  public function BuildApiKey($cpf, $dn)
  {
      $key = "";

      if (isset($cpf) && isset($dn)) {
          $key = '{"CPF":'. $cpf .',"DataNascimento":"'. $dn .'","Sistema":"'. $this->systemKey .'"}';
      } else {
          $key = '{"Sistema":"'. $this->systemKey .'"}';
      }

      return base64_encode($key);
  }

  /**
  * Store api key
  *
  * @since    1.0.0
  * @param    float  $cpf User`s cpf
  * @param    date   $dn  User`s birth date
  */
  public function StoreApiKey($cpf, $dn, $rememberMe = false)
  {
      $expires = 0;

      if ($rememberMe) {
          // setting the expiration for 30 days
          $expires = 30 * DAYS_IN_SECONDS;
      }

      $urlparts = parse_url(site_url());
      $domain = $urlparts['host'];

      setcookie($this->authCookieName, $this->BuildApiKey($cpf, $dn), $expires, "/", "", false, true);
  }

  /**
  * Gets the stored api key
  *
  * @since    1.0.0
  * @return   string The stored api key. Null if there`s no key stored
  */
  public function GetStoredApiKey()
  {
      if (isset($_COOKIE[$this->authCookieName])) {
          return urldecode($_COOKIE[$this->authCookieName]);
      }

      return null;
  }

  /**
  * Gets the stored api key
  *
  * @since    1.0.0
  * @return   string The stored api key. Null if there`s no key stored
  */
  public function GetLoggedInInfo()
  {
      if (!isset($_COOKIE[$this->authCookieName])) {
          return null;
      }

      $json = base64_decode(urldecode($_COOKIE[$this->authCookieName]));
      $obj = json_decode($json);
      return $obj;
  }

  /**
  * Clean the stored api key
  *
  * @since    1.0.0
  * @return   string The stored api key. Null if there`s no key stored
  */
  public function CleanStoredApiKey()
  {
      unset( $_COOKIE[$this->authCookieName] );
      setcookie( $this->authCookieName, '', time() - ( 15 * 60 ) );
  }
}
