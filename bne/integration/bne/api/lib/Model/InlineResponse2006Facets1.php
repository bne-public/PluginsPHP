<?php
/**
 * InlineResponse2006Facets1
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
 * InlineResponse2006Facets1 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2006Facets1 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_6_Facets_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'field_name' => 'string',
        'facets' => '\Swagger\Client\Model\InlineResponse2006Facets[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'field_name' => null,
        'facets' => null
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
        'field_name' => 'FieldName',
        'facets' => 'Facets'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'field_name' => 'setFieldName',
        'facets' => 'setFacets'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'field_name' => 'getFieldName',
        'facets' => 'getFacets'
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

    const FIELD_NAME_SIGLA_ESTADO = 'SiglaEstado';
    const FIELD_NAME_NOME_CIDADE = 'NomeCidade';
    const FIELD_NAME_NOME_EMPRESA = 'NomeEmpresa';
    const FIELD_NAME_AREA = 'Area';
    const FIELD_NAME_ESCOLARIDADE = 'Escolaridade';
    const FIELD_NAME_CURSO = 'Curso';
    const FIELD_NAME_DEFICIENCIA = 'Deficiencia';
    const FIELD_NAME_FUNCAO = 'Funcao';
    const FIELD_NAME_TIPO_VINCULO = 'TipoVinculo';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFieldNameAllowableValues()
    {
        return [
            self::FIELD_NAME_SIGLA_ESTADO,
            self::FIELD_NAME_NOME_CIDADE,
            self::FIELD_NAME_NOME_EMPRESA,
            self::FIELD_NAME_AREA,
            self::FIELD_NAME_ESCOLARIDADE,
            self::FIELD_NAME_CURSO,
            self::FIELD_NAME_DEFICIENCIA,
            self::FIELD_NAME_FUNCAO,
            self::FIELD_NAME_TIPO_VINCULO,
        ];
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
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['facets'] = isset($data['facets']) ? $data['facets'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getFieldNameAllowableValues();
        if (!in_array($this->container['field_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'field_name', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getFieldNameAllowableValues();
        if (!in_array($this->container['field_name'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets field_name
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     * @param string $field_name Campo solicitado para sumarização
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $allowed_values = $this->getFieldNameAllowableValues();
        if (!is_null($field_name) && !in_array($field_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'field_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets facets
     * @return \Swagger\Client\Model\InlineResponse2006Facets[]
     */
    public function getFacets()
    {
        return $this->container['facets'];
    }

    /**
     * Sets facets
     * @param \Swagger\Client\Model\InlineResponse2006Facets[] $facets Lista de valores e quantidades de ocorrência
     * @return $this
     */
    public function setFacets($facets)
    {
        $this->container['facets'] = $facets;

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


