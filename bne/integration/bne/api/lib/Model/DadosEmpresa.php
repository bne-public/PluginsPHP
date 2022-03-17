<?php
/**
 * DadosEmpresa
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
 * DadosEmpresa Class Doc Comment
 *
 * @category    Class
 * @description Dados da empresa
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DadosEmpresa implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DadosEmpresa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nome_empresa' => 'string',
        'quantidade_funcionarios' => 'int',
        'numero_telefone' => 'string',
        'cidade' => 'string',
        'bairro' => 'string',
        'data_cadastro' => '\DateTime',
        'quantidade_vagas_divulgadas' => 'int',
        'numero_cnpj' => 'double',
        'des_area_bne' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nome_empresa' => null,
        'quantidade_funcionarios' => 'int32',
        'numero_telefone' => null,
        'cidade' => null,
        'bairro' => null,
        'data_cadastro' => 'date-time',
        'quantidade_vagas_divulgadas' => 'int32',
        'numero_cnpj' => 'double',
        'des_area_bne' => null
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
        'nome_empresa' => 'NomeEmpresa',
        'quantidade_funcionarios' => 'QuantidadeFuncionarios',
        'numero_telefone' => 'NumeroTelefone',
        'cidade' => 'Cidade',
        'bairro' => 'Bairro',
        'data_cadastro' => 'DataCadastro',
        'quantidade_vagas_divulgadas' => 'QuantidadeVagasDivulgadas',
        'numero_cnpj' => 'NumeroCNPJ',
        'des_area_bne' => 'DesAreaBne'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'nome_empresa' => 'setNomeEmpresa',
        'quantidade_funcionarios' => 'setQuantidadeFuncionarios',
        'numero_telefone' => 'setNumeroTelefone',
        'cidade' => 'setCidade',
        'bairro' => 'setBairro',
        'data_cadastro' => 'setDataCadastro',
        'quantidade_vagas_divulgadas' => 'setQuantidadeVagasDivulgadas',
        'numero_cnpj' => 'setNumeroCnpj',
        'des_area_bne' => 'setDesAreaBne'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'nome_empresa' => 'getNomeEmpresa',
        'quantidade_funcionarios' => 'getQuantidadeFuncionarios',
        'numero_telefone' => 'getNumeroTelefone',
        'cidade' => 'getCidade',
        'bairro' => 'getBairro',
        'data_cadastro' => 'getDataCadastro',
        'quantidade_vagas_divulgadas' => 'getQuantidadeVagasDivulgadas',
        'numero_cnpj' => 'getNumeroCnpj',
        'des_area_bne' => 'getDesAreaBne'
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
        $this->container['nome_empresa'] = isset($data['nome_empresa']) ? $data['nome_empresa'] : null;
        $this->container['quantidade_funcionarios'] = isset($data['quantidade_funcionarios']) ? $data['quantidade_funcionarios'] : null;
        $this->container['numero_telefone'] = isset($data['numero_telefone']) ? $data['numero_telefone'] : null;
        $this->container['cidade'] = isset($data['cidade']) ? $data['cidade'] : null;
        $this->container['bairro'] = isset($data['bairro']) ? $data['bairro'] : null;
        $this->container['data_cadastro'] = isset($data['data_cadastro']) ? $data['data_cadastro'] : null;
        $this->container['quantidade_vagas_divulgadas'] = isset($data['quantidade_vagas_divulgadas']) ? $data['quantidade_vagas_divulgadas'] : null;
        $this->container['numero_cnpj'] = isset($data['numero_cnpj']) ? $data['numero_cnpj'] : null;
        $this->container['des_area_bne'] = isset($data['des_area_bne']) ? $data['des_area_bne'] : null;
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
     * Gets nome_empresa
     * @return string
     */
    public function getNomeEmpresa()
    {
        return $this->container['nome_empresa'];
    }

    /**
     * Sets nome_empresa
     * @param string $nome_empresa Nome da empresa
     * @return $this
     */
    public function setNomeEmpresa($nome_empresa)
    {
        $this->container['nome_empresa'] = $nome_empresa;

        return $this;
    }

    /**
     * Gets quantidade_funcionarios
     * @return int
     */
    public function getQuantidadeFuncionarios()
    {
        return $this->container['quantidade_funcionarios'];
    }

    /**
     * Sets quantidade_funcionarios
     * @param int $quantidade_funcionarios Quantidade de funcionários
     * @return $this
     */
    public function setQuantidadeFuncionarios($quantidade_funcionarios)
    {
        $this->container['quantidade_funcionarios'] = $quantidade_funcionarios;

        return $this;
    }

    /**
     * Gets numero_telefone
     * @return string
     */
    public function getNumeroTelefone()
    {
        return $this->container['numero_telefone'];
    }

    /**
     * Sets numero_telefone
     * @param string $numero_telefone Número de telefone da empresa
     * @return $this
     */
    public function setNumeroTelefone($numero_telefone)
    {
        $this->container['numero_telefone'] = $numero_telefone;

        return $this;
    }

    /**
     * Gets cidade
     * @return string
     */
    public function getCidade()
    {
        return $this->container['cidade'];
    }

    /**
     * Sets cidade
     * @param string $cidade Cidade da empresa
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->container['cidade'] = $cidade;

        return $this;
    }

    /**
     * Gets bairro
     * @return string
     */
    public function getBairro()
    {
        return $this->container['bairro'];
    }

    /**
     * Sets bairro
     * @param string $bairro Bairro da empresa
     * @return $this
     */
    public function setBairro($bairro)
    {
        $this->container['bairro'] = $bairro;

        return $this;
    }

    /**
     * Gets data_cadastro
     * @return \DateTime
     */
    public function getDataCadastro()
    {
        return $this->container['data_cadastro'];
    }

    /**
     * Sets data_cadastro
     * @param \DateTime $data_cadastro Data de cadastro da empresa
     * @return $this
     */
    public function setDataCadastro($data_cadastro)
    {
        $this->container['data_cadastro'] = $data_cadastro;

        return $this;
    }

    /**
     * Gets quantidade_vagas_divulgadas
     * @return int
     */
    public function getQuantidadeVagasDivulgadas()
    {
        return $this->container['quantidade_vagas_divulgadas'];
    }

    /**
     * Sets quantidade_vagas_divulgadas
     * @param int $quantidade_vagas_divulgadas Quantidade de vagas divulgadas pela empresa
     * @return $this
     */
    public function setQuantidadeVagasDivulgadas($quantidade_vagas_divulgadas)
    {
        $this->container['quantidade_vagas_divulgadas'] = $quantidade_vagas_divulgadas;

        return $this;
    }

    /**
     * Gets numero_cnpj
     * @return double
     */
    public function getNumeroCnpj()
    {
        return $this->container['numero_cnpj'];
    }

    /**
     * Sets numero_cnpj
     * @param double $numero_cnpj CNPJ da empresa
     * @return $this
     */
    public function setNumeroCnpj($numero_cnpj)
    {
        $this->container['numero_cnpj'] = $numero_cnpj;

        return $this;
    }

    /**
     * Gets des_area_bne
     * @return string
     */
    public function getDesAreaBne()
    {
        return $this->container['des_area_bne'];
    }

    /**
     * Sets des_area_bne
     * @param string $des_area_bne Área de atuação da empresa
     * @return $this
     */
    public function setDesAreaBne($des_area_bne)
    {
        $this->container['des_area_bne'] = $des_area_bne;

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


