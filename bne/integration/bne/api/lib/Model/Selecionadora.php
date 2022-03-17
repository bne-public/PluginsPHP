<?php
/**
 * Selecionadora
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Selecionadora Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Selecionadora implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Selecionadora';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_pessoa' => 'int',
        'cpf' => 'double',
        'nome' => 'string',
        'sexo' => 'string',
        'nascimento' => 'string',
        'ddd_celular' => 'int',
        'num_celular' => 'int',
        'ddd_telefone' => 'int',
        'num_telefone' => 'int',
        'email' => 'string',
        'empresas' => '\Swagger\Client\Model\InlineResponse2004Empresas[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_pessoa' => 'int32',
        'cpf' => 'double',
        'nome' => null,
        'sexo' => null,
        'nascimento' => null,
        'ddd_celular' => 'int32',
        'num_celular' => 'int32',
        'ddd_telefone' => 'int32',
        'num_telefone' => 'int32',
        'email' => null,
        'empresas' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id_pessoa' => 'IdPessoa',
        'cpf' => 'Cpf',
        'nome' => 'Nome',
        'sexo' => 'Sexo',
        'nascimento' => 'Nascimento',
        'ddd_celular' => 'DDDCelular',
        'num_celular' => 'NumCelular',
        'ddd_telefone' => 'DDDTelefone',
        'num_telefone' => 'NumTelefone',
        'email' => 'Email',
        'empresas' => 'Empresas'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id_pessoa' => 'setIdPessoa',
        'cpf' => 'setCpf',
        'nome' => 'setNome',
        'sexo' => 'setSexo',
        'nascimento' => 'setNascimento',
        'ddd_celular' => 'setDddCelular',
        'num_celular' => 'setNumCelular',
        'ddd_telefone' => 'setDddTelefone',
        'num_telefone' => 'setNumTelefone',
        'email' => 'setEmail',
        'empresas' => 'setEmpresas'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id_pessoa' => 'getIdPessoa',
        'cpf' => 'getCpf',
        'nome' => 'getNome',
        'sexo' => 'getSexo',
        'nascimento' => 'getNascimento',
        'ddd_celular' => 'getDddCelular',
        'num_celular' => 'getNumCelular',
        'ddd_telefone' => 'getDddTelefone',
        'num_telefone' => 'getNumTelefone',
        'email' => 'getEmail',
        'empresas' => 'getEmpresas'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id_pessoa'] = isset($data['id_pessoa']) ? $data['id_pessoa'] : null;
        $this->container['cpf'] = isset($data['cpf']) ? $data['cpf'] : null;
        $this->container['nome'] = isset($data['nome']) ? $data['nome'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['nascimento'] = isset($data['nascimento']) ? $data['nascimento'] : null;
        $this->container['ddd_celular'] = isset($data['ddd_celular']) ? $data['ddd_celular'] : null;
        $this->container['num_celular'] = isset($data['num_celular']) ? $data['num_celular'] : null;
        $this->container['ddd_telefone'] = isset($data['ddd_telefone']) ? $data['ddd_telefone'] : null;
        $this->container['num_telefone'] = isset($data['num_telefone']) ? $data['num_telefone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['empresas'] = isset($data['empresas']) ? $data['empresas'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id_pessoa
     * @return int
     */
    public function getIdPessoa()
    {
        return $this->container['id_pessoa'];
    }

    /**
     * Sets id_pessoa
     * @param int $id_pessoa
     * @return $this
     */
    public function setIdPessoa($id_pessoa)
    {
        $this->container['id_pessoa'] = $id_pessoa;

        return $this;
    }

    /**
     * Gets cpf
     * @return double
     */
    public function getCpf()
    {
        return $this->container['cpf'];
    }

    /**
     * Sets cpf
     * @param double $cpf
     * @return $this
     */
    public function setCpf($cpf)
    {
        $this->container['cpf'] = $cpf;

        return $this;
    }

    /**
     * Gets nome
     * @return string
     */
    public function getNome()
    {
        return $this->container['nome'];
    }

    /**
     * Sets nome
     * @param string $nome
     * @return $this
     */
    public function setNome($nome)
    {
        $this->container['nome'] = $nome;

        return $this;
    }

    /**
     * Gets sexo
     * @return string
     */
    public function getSexo()
    {
        return $this->container['sexo'];
    }

    /**
     * Sets sexo
     * @param string $sexo
     * @return $this
     */
    public function setSexo($sexo)
    {
        $this->container['sexo'] = $sexo;

        return $this;
    }

    /**
     * Gets nascimento
     * @return string
     */
    public function getNascimento()
    {
        return $this->container['nascimento'];
    }

    /**
     * Sets nascimento
     * @param string $nascimento
     * @return $this
     */
    public function setNascimento($nascimento)
    {
        $this->container['nascimento'] = $nascimento;

        return $this;
    }

    /**
     * Gets ddd_celular
     * @return int
     */
    public function getDddCelular()
    {
        return $this->container['ddd_celular'];
    }

    /**
     * Sets ddd_celular
     * @param int $ddd_celular
     * @return $this
     */
    public function setDddCelular($ddd_celular)
    {
        $this->container['ddd_celular'] = $ddd_celular;

        return $this;
    }

    /**
     * Gets num_celular
     * @return int
     */
    public function getNumCelular()
    {
        return $this->container['num_celular'];
    }

    /**
     * Sets num_celular
     * @param int $num_celular
     * @return $this
     */
    public function setNumCelular($num_celular)
    {
        $this->container['num_celular'] = $num_celular;

        return $this;
    }

    /**
     * Gets ddd_telefone
     * @return int
     */
    public function getDddTelefone()
    {
        return $this->container['ddd_telefone'];
    }

    /**
     * Sets ddd_telefone
     * @param int $ddd_telefone
     * @return $this
     */
    public function setDddTelefone($ddd_telefone)
    {
        $this->container['ddd_telefone'] = $ddd_telefone;

        return $this;
    }

    /**
     * Gets num_telefone
     * @return int
     */
    public function getNumTelefone()
    {
        return $this->container['num_telefone'];
    }

    /**
     * Sets num_telefone
     * @param int $num_telefone
     * @return $this
     */
    public function setNumTelefone($num_telefone)
    {
        $this->container['num_telefone'] = $num_telefone;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets empresas
     * @return \Swagger\Client\Model\InlineResponse2004Empresas[]
     */
    public function getEmpresas()
    {
        return $this->container['empresas'];
    }

    /**
     * Sets empresas
     * @param \Swagger\Client\Model\InlineResponse2004Empresas[] $empresas
     * @return $this
     */
    public function setEmpresas($empresas)
    {
        $this->container['empresas'] = $empresas;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


