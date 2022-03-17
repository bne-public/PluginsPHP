<?php
/**
 * InlineResponse200DadosComplementaresVeiculos
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
 * InlineResponse200DadosComplementaresVeiculos Class Doc Comment
 *
 * @category    Class
 * @description Classe com informações sobre veículos
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200DadosComplementaresVeiculos implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_DadosComplementares_Veiculos';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tipo_veiculo' => 'string',
        'descricao_modelo' => 'string',
        'ano' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tipo_veiculo' => null,
        'descricao_modelo' => null,
        'ano' => 'int32'
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
        'tipo_veiculo' => 'TipoVeiculo',
        'descricao_modelo' => 'DescricaoModelo',
        'ano' => 'Ano'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'tipo_veiculo' => 'setTipoVeiculo',
        'descricao_modelo' => 'setDescricaoModelo',
        'ano' => 'setAno'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'tipo_veiculo' => 'getTipoVeiculo',
        'descricao_modelo' => 'getDescricaoModelo',
        'ano' => 'getAno'
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
        $this->container['tipo_veiculo'] = isset($data['tipo_veiculo']) ? $data['tipo_veiculo'] : null;
        $this->container['descricao_modelo'] = isset($data['descricao_modelo']) ? $data['descricao_modelo'] : null;
        $this->container['ano'] = isset($data['ano']) ? $data['ano'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['tipo_veiculo'] === null) {
            $invalid_properties[] = "'tipo_veiculo' can't be null";
        }
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

        if ($this->container['tipo_veiculo'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets tipo_veiculo
     * @return string
     */
    public function getTipoVeiculo()
    {
        return $this->container['tipo_veiculo'];
    }

    /**
     * Sets tipo_veiculo
     * @param string $tipo_veiculo Tipo do veículo.  Deve conter um dos valores presentes na tabela TiposVeiculos
     * @return $this
     */
    public function setTipoVeiculo($tipo_veiculo)
    {
        $this->container['tipo_veiculo'] = $tipo_veiculo;

        return $this;
    }

    /**
     * Gets descricao_modelo
     * @return string
     */
    public function getDescricaoModelo()
    {
        return $this->container['descricao_modelo'];
    }

    /**
     * Sets descricao_modelo
     * @param string $descricao_modelo Descrição do modelo do veículo
     * @return $this
     */
    public function setDescricaoModelo($descricao_modelo)
    {
        $this->container['descricao_modelo'] = $descricao_modelo;

        return $this;
    }

    /**
     * Gets ano
     * @return int
     */
    public function getAno()
    {
        return $this->container['ano'];
    }

    /**
     * Sets ano
     * @param int $ano Ano de fabricação do veículo
     * @return $this
     */
    public function setAno($ano)
    {
        $this->container['ano'] = $ano;

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


