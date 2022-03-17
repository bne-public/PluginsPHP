<?php
/**
 * MiniCurriculo
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
 * MiniCurriculo Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MiniCurriculo implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MiniCurriculo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vip' => 'bool',
        'nome' => 'string',
        'sexo' => 'string',
        'estado_civil' => 'string',
        'idade' => 'int',
        'escolaridade' => 'string',
        'pretensao' => 'double',
        'bairro' => 'string',
        'cidade' => 'string',
        'estado' => 'string',
        'funcoes' => 'string',
        'experiencia' => 'string',
        'carteira' => 'string',
        'id_curriculo' => 'int',
        'data_hora_candidatura' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vip' => null,
        'nome' => null,
        'sexo' => null,
        'estado_civil' => null,
        'idade' => 'int32',
        'escolaridade' => null,
        'pretensao' => 'double',
        'bairro' => null,
        'cidade' => null,
        'estado' => null,
        'funcoes' => null,
        'experiencia' => null,
        'carteira' => null,
        'id_curriculo' => 'int32',
        'data_hora_candidatura' => 'date-time'
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
        'vip' => 'Vip',
        'nome' => 'Nome',
        'sexo' => 'Sexo',
        'estado_civil' => 'EstadoCivil',
        'idade' => 'Idade',
        'escolaridade' => 'Escolaridade',
        'pretensao' => 'Pretensao',
        'bairro' => 'Bairro',
        'cidade' => 'Cidade',
        'estado' => 'Estado',
        'funcoes' => 'Funcoes',
        'experiencia' => 'Experiencia',
        'carteira' => 'Carteira',
        'id_curriculo' => 'IDCurriculo',
        'data_hora_candidatura' => 'DataHoraCandidatura'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'vip' => 'setVip',
        'nome' => 'setNome',
        'sexo' => 'setSexo',
        'estado_civil' => 'setEstadoCivil',
        'idade' => 'setIdade',
        'escolaridade' => 'setEscolaridade',
        'pretensao' => 'setPretensao',
        'bairro' => 'setBairro',
        'cidade' => 'setCidade',
        'estado' => 'setEstado',
        'funcoes' => 'setFuncoes',
        'experiencia' => 'setExperiencia',
        'carteira' => 'setCarteira',
        'id_curriculo' => 'setIdCurriculo',
        'data_hora_candidatura' => 'setDataHoraCandidatura'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'vip' => 'getVip',
        'nome' => 'getNome',
        'sexo' => 'getSexo',
        'estado_civil' => 'getEstadoCivil',
        'idade' => 'getIdade',
        'escolaridade' => 'getEscolaridade',
        'pretensao' => 'getPretensao',
        'bairro' => 'getBairro',
        'cidade' => 'getCidade',
        'estado' => 'getEstado',
        'funcoes' => 'getFuncoes',
        'experiencia' => 'getExperiencia',
        'carteira' => 'getCarteira',
        'id_curriculo' => 'getIdCurriculo',
        'data_hora_candidatura' => 'getDataHoraCandidatura'
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
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
        $this->container['nome'] = isset($data['nome']) ? $data['nome'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['estado_civil'] = isset($data['estado_civil']) ? $data['estado_civil'] : null;
        $this->container['idade'] = isset($data['idade']) ? $data['idade'] : null;
        $this->container['escolaridade'] = isset($data['escolaridade']) ? $data['escolaridade'] : null;
        $this->container['pretensao'] = isset($data['pretensao']) ? $data['pretensao'] : null;
        $this->container['bairro'] = isset($data['bairro']) ? $data['bairro'] : null;
        $this->container['cidade'] = isset($data['cidade']) ? $data['cidade'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['funcoes'] = isset($data['funcoes']) ? $data['funcoes'] : null;
        $this->container['experiencia'] = isset($data['experiencia']) ? $data['experiencia'] : null;
        $this->container['carteira'] = isset($data['carteira']) ? $data['carteira'] : null;
        $this->container['id_curriculo'] = isset($data['id_curriculo']) ? $data['id_curriculo'] : null;
        $this->container['data_hora_candidatura'] = isset($data['data_hora_candidatura']) ? $data['data_hora_candidatura'] : null;
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
     * Gets vip
     * @return bool
     */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
     * Sets vip
     * @param bool $vip
     * @return $this
     */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;

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
     * Gets estado_civil
     * @return string
     */
    public function getEstadoCivil()
    {
        return $this->container['estado_civil'];
    }

    /**
     * Sets estado_civil
     * @param string $estado_civil
     * @return $this
     */
    public function setEstadoCivil($estado_civil)
    {
        $this->container['estado_civil'] = $estado_civil;

        return $this;
    }

    /**
     * Gets idade
     * @return int
     */
    public function getIdade()
    {
        return $this->container['idade'];
    }

    /**
     * Sets idade
     * @param int $idade
     * @return $this
     */
    public function setIdade($idade)
    {
        $this->container['idade'] = $idade;

        return $this;
    }

    /**
     * Gets escolaridade
     * @return string
     */
    public function getEscolaridade()
    {
        return $this->container['escolaridade'];
    }

    /**
     * Sets escolaridade
     * @param string $escolaridade
     * @return $this
     */
    public function setEscolaridade($escolaridade)
    {
        $this->container['escolaridade'] = $escolaridade;

        return $this;
    }

    /**
     * Gets pretensao
     * @return double
     */
    public function getPretensao()
    {
        return $this->container['pretensao'];
    }

    /**
     * Sets pretensao
     * @param double $pretensao
     * @return $this
     */
    public function setPretensao($pretensao)
    {
        $this->container['pretensao'] = $pretensao;

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
     * @param string $bairro
     * @return $this
     */
    public function setBairro($bairro)
    {
        $this->container['bairro'] = $bairro;

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
     * @param string $cidade
     * @return $this
     */
    public function setCidade($cidade)
    {
        $this->container['cidade'] = $cidade;

        return $this;
    }

    /**
     * Gets estado
     * @return string
     */
    public function getEstado()
    {
        return $this->container['estado'];
    }

    /**
     * Sets estado
     * @param string $estado
     * @return $this
     */
    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;

        return $this;
    }

    /**
     * Gets funcoes
     * @return string
     */
    public function getFuncoes()
    {
        return $this->container['funcoes'];
    }

    /**
     * Sets funcoes
     * @param string $funcoes
     * @return $this
     */
    public function setFuncoes($funcoes)
    {
        $this->container['funcoes'] = $funcoes;

        return $this;
    }

    /**
     * Gets experiencia
     * @return string
     */
    public function getExperiencia()
    {
        return $this->container['experiencia'];
    }

    /**
     * Sets experiencia
     * @param string $experiencia
     * @return $this
     */
    public function setExperiencia($experiencia)
    {
        $this->container['experiencia'] = $experiencia;

        return $this;
    }

    /**
     * Gets carteira
     * @return string
     */
    public function getCarteira()
    {
        return $this->container['carteira'];
    }

    /**
     * Sets carteira
     * @param string $carteira
     * @return $this
     */
    public function setCarteira($carteira)
    {
        $this->container['carteira'] = $carteira;

        return $this;
    }

    /**
     * Gets id_curriculo
     * @return int
     */
    public function getIdCurriculo()
    {
        return $this->container['id_curriculo'];
    }

    /**
     * Sets id_curriculo
     * @param int $id_curriculo
     * @return $this
     */
    public function setIdCurriculo($id_curriculo)
    {
        $this->container['id_curriculo'] = $id_curriculo;

        return $this;
    }

    /**
     * Gets data_hora_candidatura
     * @return \DateTime
     */
    public function getDataHoraCandidatura()
    {
        return $this->container['data_hora_candidatura'];
    }

    /**
     * Sets data_hora_candidatura
     * @param \DateTime $data_hora_candidatura Data e hora da candidatura. Propriedade somente será preenchida quando retornado pelos endpoints de recuperação de candidatura
     * @return $this
     */
    public function setDataHoraCandidatura($data_hora_candidatura)
    {
        $this->container['data_hora_candidatura'] = $data_hora_candidatura;

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


