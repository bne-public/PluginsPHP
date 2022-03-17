<?php
/**
 * InlineResponse200FormacaoCursosComplementares
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
 * InlineResponse200FormacaoCursosComplementares Class Doc Comment
 *
 * @category    Class
 * @description Informações de cursos complementares do candidato
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200FormacaoCursosComplementares implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_Formacao_CursosComplementares';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'instituicao' => 'string',
        'nome_curso' => 'string',
        'cidade' => 'string',
        'ano_conclusao' => 'int',
        'carga_horaria' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'instituicao' => null,
        'nome_curso' => null,
        'cidade' => null,
        'ano_conclusao' => 'int32',
        'carga_horaria' => 'int32'
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
        'instituicao' => 'Instituicao',
        'nome_curso' => 'NomeCurso',
        'cidade' => 'Cidade',
        'ano_conclusao' => 'AnoConclusao',
        'carga_horaria' => 'CargaHoraria'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'instituicao' => 'setInstituicao',
        'nome_curso' => 'setNomeCurso',
        'cidade' => 'setCidade',
        'ano_conclusao' => 'setAnoConclusao',
        'carga_horaria' => 'setCargaHoraria'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'instituicao' => 'getInstituicao',
        'nome_curso' => 'getNomeCurso',
        'cidade' => 'getCidade',
        'ano_conclusao' => 'getAnoConclusao',
        'carga_horaria' => 'getCargaHoraria'
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
        $this->container['instituicao'] = isset($data['instituicao']) ? $data['instituicao'] : null;
        $this->container['nome_curso'] = isset($data['nome_curso']) ? $data['nome_curso'] : null;
        $this->container['cidade'] = isset($data['cidade']) ? $data['cidade'] : null;
        $this->container['ano_conclusao'] = isset($data['ano_conclusao']) ? $data['ano_conclusao'] : null;
        $this->container['carga_horaria'] = isset($data['carga_horaria']) ? $data['carga_horaria'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['instituicao'] === null) {
            $invalid_properties[] = "'instituicao' can't be null";
        }
        if ($this->container['nome_curso'] === null) {
            $invalid_properties[] = "'nome_curso' can't be null";
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

        if ($this->container['instituicao'] === null) {
            return false;
        }
        if ($this->container['nome_curso'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets instituicao
     * @return string
     */
    public function getInstituicao()
    {
        return $this->container['instituicao'];
    }

    /**
     * Sets instituicao
     * @param string $instituicao Nome da instituição
     * @return $this
     */
    public function setInstituicao($instituicao)
    {
        $this->container['instituicao'] = $instituicao;

        return $this;
    }

    /**
     * Gets nome_curso
     * @return string
     */
    public function getNomeCurso()
    {
        return $this->container['nome_curso'];
    }

    /**
     * Sets nome_curso
     * @param string $nome_curso Nome do curso  Recomenda-se o envio de um dos valores presentes na tabela Cursos.
     * @return $this
     */
    public function setNomeCurso($nome_curso)
    {
        $this->container['nome_curso'] = $nome_curso;

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
     * @param string $cidade Nome da cidade onde foi cursado  Formato: \"NomeCidade/SiglaEstado\" (Ex.: São Paulo/SP)
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->container['cidade'] = $cidade;

        return $this;
    }

    /**
     * Gets ano_conclusao
     * @return int
     */
    public function getAnoConclusao()
    {
        return $this->container['ano_conclusao'];
    }

    /**
     * Sets ano_conclusao
     * @param int $ano_conclusao Ano de conclusão do curso. Pode ser passado ou futuro.
     * @return $this
     */
    public function setAnoConclusao($ano_conclusao)
    {
        $this->container['ano_conclusao'] = $ano_conclusao;

        return $this;
    }

    /**
     * Gets carga_horaria
     * @return int
     */
    public function getCargaHoraria()
    {
        return $this->container['carga_horaria'];
    }

    /**
     * Sets carga_horaria
     * @param int $carga_horaria Carga horária do curso
     * @return $this
     */
    public function setCargaHoraria($carga_horaria)
    {
        $this->container['carga_horaria'] = $carga_horaria;

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


