<?php
/**
 * InlineResponse2006
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
 * InlineResponse2006 Class Doc Comment
 *
 * @category    Class
 * @description Classe para o retorno de pesquisa de vagas
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2006 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_6';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'registros' => '\Swagger\Client\Model\InlineResponse2006Registros[]',
        'facets' => '\Swagger\Client\Model\InlineResponse2006Facets1[]',
        'total_registros' => 'int',
        'total_paginas' => 'int',
        'pagina' => 'int',
        'registros_por_pagina' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'registros' => null,
        'facets' => null,
        'total_registros' => 'int32',
        'total_paginas' => 'int32',
        'pagina' => 'int32',
        'registros_por_pagina' => 'int32'
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
        'registros' => 'Registros',
        'facets' => 'Facets',
        'total_registros' => 'TotalRegistros',
        'total_paginas' => 'TotalPaginas',
        'pagina' => 'Pagina',
        'registros_por_pagina' => 'RegistrosPorPagina'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'registros' => 'setRegistros',
        'facets' => 'setFacets',
        'total_registros' => 'setTotalRegistros',
        'total_paginas' => 'setTotalPaginas',
        'pagina' => 'setPagina',
        'registros_por_pagina' => 'setRegistrosPorPagina'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'registros' => 'getRegistros',
        'facets' => 'getFacets',
        'total_registros' => 'getTotalRegistros',
        'total_paginas' => 'getTotalPaginas',
        'pagina' => 'getPagina',
        'registros_por_pagina' => 'getRegistrosPorPagina'
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
        $this->container['registros'] = isset($data['registros']) ? $data['registros'] : null;
        $this->container['facets'] = isset($data['facets']) ? $data['facets'] : null;
        $this->container['total_registros'] = isset($data['total_registros']) ? $data['total_registros'] : null;
        $this->container['total_paginas'] = isset($data['total_paginas']) ? $data['total_paginas'] : null;
        $this->container['pagina'] = isset($data['pagina']) ? $data['pagina'] : null;
        $this->container['registros_por_pagina'] = isset($data['registros_por_pagina']) ? $data['registros_por_pagina'] : null;
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
     * Gets registros
     * @return \Swagger\Client\Model\InlineResponse2006Registros[]
     */
    public function getRegistros()
    {
        return $this->container['registros'];
    }

    /**
     * Sets registros
     * @param \Swagger\Client\Model\InlineResponse2006Registros[] $registros
     * @return $this
     */
    public function setRegistros($registros)
    {
        $this->container['registros'] = $registros;

        return $this;
    }

    /**
     * Gets facets
     * @return \Swagger\Client\Model\InlineResponse2006Facets1[]
     */
    public function getFacets()
    {
        return $this->container['facets'];
    }

    /**
     * Sets facets
     * @param \Swagger\Client\Model\InlineResponse2006Facets1[] $facets Lista com a sumarização dos campos solicitados
     * @return $this
     */
    public function setFacets($facets)
    {
        $this->container['facets'] = $facets;

        return $this;
    }

    /**
     * Gets total_registros
     * @return int
     */
    public function getTotalRegistros()
    {
        return $this->container['total_registros'];
    }

    /**
     * Sets total_registros
     * @param int $total_registros Total de registros da pesquisa.
     * @return $this
     */
    public function setTotalRegistros($total_registros)
    {
        $this->container['total_registros'] = $total_registros;

        return $this;
    }

    /**
     * Gets total_paginas
     * @return int
     */
    public function getTotalPaginas()
    {
        return $this->container['total_paginas'];
    }

    /**
     * Sets total_paginas
     * @param int $total_paginas Total de páginas geradas na busca.
     * @return $this
     */
    public function setTotalPaginas($total_paginas)
    {
        $this->container['total_paginas'] = $total_paginas;

        return $this;
    }

    /**
     * Gets pagina
     * @return int
     */
    public function getPagina()
    {
        return $this->container['pagina'];
    }

    /**
     * Sets pagina
     * @param int $pagina Página atual.
     * @return $this
     */
    public function setPagina($pagina)
    {
        $this->container['pagina'] = $pagina;

        return $this;
    }

    /**
     * Gets registros_por_pagina
     * @return int
     */
    public function getRegistrosPorPagina()
    {
        return $this->container['registros_por_pagina'];
    }

    /**
     * Sets registros_por_pagina
     * @param int $registros_por_pagina Número de registros presentes em cada página.
     * @return $this
     */
    public function setRegistrosPorPagina($registros_por_pagina)
    {
        $this->container['registros_por_pagina'] = $registros_por_pagina;

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


