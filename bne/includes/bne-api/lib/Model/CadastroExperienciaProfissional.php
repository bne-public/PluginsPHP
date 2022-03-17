<?php
/**
 * CadastroExperienciaProfissional
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
 * CadastroExperienciaProfissional Class Doc Comment
 *
 * @category    Class
 * @description Classe com as informações de experiências profissionais
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CadastroExperienciaProfissional implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CadastroExperienciaProfissional';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'nome_empresa' => 'string',
        'area' => 'string',
        'data_admissao' => '\DateTime',
        'data_demissao' => '\DateTime',
        'funcao' => 'string',
        'atribuicoes' => 'string',
        'salario' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'nome_empresa' => null,
        'area' => null,
        'data_admissao' => 'date-time',
        'data_demissao' => 'date-time',
        'funcao' => null,
        'atribuicoes' => null,
        'salario' => 'double'
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
        'area' => 'Area',
        'data_admissao' => 'DataAdmissao',
        'data_demissao' => 'DataDemissao',
        'funcao' => 'Funcao',
        'atribuicoes' => 'Atribuicoes',
        'salario' => 'Salario'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'nome_empresa' => 'setNomeEmpresa',
        'area' => 'setArea',
        'data_admissao' => 'setDataAdmissao',
        'data_demissao' => 'setDataDemissao',
        'funcao' => 'setFuncao',
        'atribuicoes' => 'setAtribuicoes',
        'salario' => 'setSalario'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'nome_empresa' => 'getNomeEmpresa',
        'area' => 'getArea',
        'data_admissao' => 'getDataAdmissao',
        'data_demissao' => 'getDataDemissao',
        'funcao' => 'getFuncao',
        'atribuicoes' => 'getAtribuicoes',
        'salario' => 'getSalario'
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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['data_admissao'] = isset($data['data_admissao']) ? $data['data_admissao'] : null;
        $this->container['data_demissao'] = isset($data['data_demissao']) ? $data['data_demissao'] : null;
        $this->container['funcao'] = isset($data['funcao']) ? $data['funcao'] : null;
        $this->container['atribuicoes'] = isset($data['atribuicoes']) ? $data['atribuicoes'] : null;
        $this->container['salario'] = isset($data['salario']) ? $data['salario'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['nome_empresa'] === null) {
            $invalid_properties[] = "'nome_empresa' can't be null";
        }
        if ($this->container['area'] === null) {
            $invalid_properties[] = "'area' can't be null";
        }
        if ($this->container['data_admissao'] === null) {
            $invalid_properties[] = "'data_admissao' can't be null";
        }
        if ($this->container['funcao'] === null) {
            $invalid_properties[] = "'funcao' can't be null";
        }
        if ($this->container['atribuicoes'] === null) {
            $invalid_properties[] = "'atribuicoes' can't be null";
        }
        if ($this->container['salario'] === null) {
            $invalid_properties[] = "'salario' can't be null";
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

        if ($this->container['nome_empresa'] === null) {
            return false;
        }
        if ($this->container['area'] === null) {
            return false;
        }
        if ($this->container['data_admissao'] === null) {
            return false;
        }
        if ($this->container['funcao'] === null) {
            return false;
        }
        if ($this->container['atribuicoes'] === null) {
            return false;
        }
        if ($this->container['salario'] === null) {
            return false;
        }
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
     * @param string $nome_empresa Nome da empresa da experiência
     * @return $this
     */
    public function setNomeEmpresa($nome_empresa)
    {
        $this->container['nome_empresa'] = $nome_empresa;

        return $this;
    }

    /**
     * Gets area
     * @return string
     */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
     * Sets area
     * @param string $area Área de atuação da empresa.  Valor informado deve estar presente na tabela Areas
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets data_admissao
     * @return \DateTime
     */
    public function getDataAdmissao()
    {
        return $this->container['data_admissao'];
    }

    /**
     * Sets data_admissao
     * @param \DateTime $data_admissao Data de entrada na empresa
     * @return $this
     */
    public function setDataAdmissao($data_admissao)
    {
        $this->container['data_admissao'] = $data_admissao;

        return $this;
    }

    /**
     * Gets data_demissao
     * @return \DateTime
     */
    public function getDataDemissao()
    {
        return $this->container['data_demissao'];
    }

    /**
     * Sets data_demissao
     * @param \DateTime $data_demissao Data de saída da empresa
     * @return $this
     */
    public function setDataDemissao($data_demissao)
    {
        $this->container['data_demissao'] = $data_demissao;

        return $this;
    }

    /**
     * Gets funcao
     * @return string
     */
    public function getFuncao()
    {
        return $this->container['funcao'];
    }

    /**
     * Sets funcao
     * @param string $funcao Função exercida na experiência
     * @return $this
     */
    public function setFuncao($funcao)
    {
        $this->container['funcao'] = $funcao;

        return $this;
    }

    /**
     * Gets atribuicoes
     * @return string
     */
    public function getAtribuicoes()
    {
        return $this->container['atribuicoes'];
    }

    /**
     * Sets atribuicoes
     * @param string $atribuicoes Descrição das atividades exercidas
     * @return $this
     */
    public function setAtribuicoes($atribuicoes)
    {
        $this->container['atribuicoes'] = $atribuicoes;

        return $this;
    }

    /**
     * Gets salario
     * @return double
     */
    public function getSalario()
    {
        return $this->container['salario'];
    }

    /**
     * Sets salario
     * @param double $salario Valor do último salário recebido
     * @return $this
     */
    public function setSalario($salario)
    {
        $this->container['salario'] = $salario;

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

