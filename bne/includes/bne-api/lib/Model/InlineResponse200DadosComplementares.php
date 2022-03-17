<?php
/**
 * InlineResponse200DadosComplementares
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
 * InlineResponse200DadosComplementares Class Doc Comment
 *
 * @category    Class
 * @description Classe com informações complementares
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200DadosComplementares implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_DadosComplementares';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'veiculos' => '\Swagger\Client\Model\InlineResponse200DadosComplementaresVeiculos[]',
        'categoria_cnh' => 'string',
        'numero_cnh' => 'double',
        'outros_conhecimentos' => 'string',
        'observacoes' => 'string',
        'disponibilidades' => 'string[]',
        'disponibilidade_outras_cidades' => 'string[]',
        'raca' => 'string',
        'altura' => 'double',
        'peso' => 'double',
        'possui_filhos' => 'bool',
        'deficiencia' => 'string',
        'complemento_deficiencia' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'veiculos' => null,
        'categoria_cnh' => null,
        'numero_cnh' => 'double',
        'outros_conhecimentos' => null,
        'observacoes' => null,
        'disponibilidades' => null,
        'disponibilidade_outras_cidades' => null,
        'raca' => null,
        'altura' => 'double',
        'peso' => 'double',
        'possui_filhos' => null,
        'deficiencia' => null,
        'complemento_deficiencia' => null
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
        'veiculos' => 'Veiculos',
        'categoria_cnh' => 'CategoriaCNH',
        'numero_cnh' => 'NumeroCnh',
        'outros_conhecimentos' => 'OutrosConhecimentos',
        'observacoes' => 'Observacoes',
        'disponibilidades' => 'Disponibilidades',
        'disponibilidade_outras_cidades' => 'DisponibilidadeOutrasCidades',
        'raca' => 'Raca',
        'altura' => 'Altura',
        'peso' => 'Peso',
        'possui_filhos' => 'PossuiFilhos',
        'deficiencia' => 'Deficiencia',
        'complemento_deficiencia' => 'ComplementoDeficiencia'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'veiculos' => 'setVeiculos',
        'categoria_cnh' => 'setCategoriaCnh',
        'numero_cnh' => 'setNumeroCnh',
        'outros_conhecimentos' => 'setOutrosConhecimentos',
        'observacoes' => 'setObservacoes',
        'disponibilidades' => 'setDisponibilidades',
        'disponibilidade_outras_cidades' => 'setDisponibilidadeOutrasCidades',
        'raca' => 'setRaca',
        'altura' => 'setAltura',
        'peso' => 'setPeso',
        'possui_filhos' => 'setPossuiFilhos',
        'deficiencia' => 'setDeficiencia',
        'complemento_deficiencia' => 'setComplementoDeficiencia'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'veiculos' => 'getVeiculos',
        'categoria_cnh' => 'getCategoriaCnh',
        'numero_cnh' => 'getNumeroCnh',
        'outros_conhecimentos' => 'getOutrosConhecimentos',
        'observacoes' => 'getObservacoes',
        'disponibilidades' => 'getDisponibilidades',
        'disponibilidade_outras_cidades' => 'getDisponibilidadeOutrasCidades',
        'raca' => 'getRaca',
        'altura' => 'getAltura',
        'peso' => 'getPeso',
        'possui_filhos' => 'getPossuiFilhos',
        'deficiencia' => 'getDeficiencia',
        'complemento_deficiencia' => 'getComplementoDeficiencia'
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

    const CATEGORIA_CNH_A = 'A';
    const CATEGORIA_CNH_B = 'B';
    const CATEGORIA_CNH_C = 'C';
    const CATEGORIA_CNH_D = 'D';
    const CATEGORIA_CNH_E = 'E';
    const CATEGORIA_CNH_AB = 'AB';
    const CATEGORIA_CNH_AC = 'AC';
    const CATEGORIA_CNH_AD = 'AD';
    const DISPONIBILIDADES_MANHA = 'Manha';
    const DISPONIBILIDADES_TARDE = 'Tarde';
    const DISPONIBILIDADES_NOITE = 'Noite';
    const DISPONIBILIDADES_SBADO = 'Sábado';
    const DISPONIBILIDADES_DOMINGO = 'Domingo';
    const DISPONIBILIDADES_VIAGEM = 'Viagem';
    const RACA_INDIGENA = 'Indigena';
    const RACA_BRANCA = 'Branca';
    const RACA_NEGRA = 'Negra';
    const RACA_AMARELA = 'Amarela';
    const RACA_PARDA = 'Parda';
    const RACA_NAO_INFORMADO = 'NaoInformado';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCategoriaCnhAllowableValues()
    {
        return [
            self::CATEGORIA_CNH_A,
            self::CATEGORIA_CNH_B,
            self::CATEGORIA_CNH_C,
            self::CATEGORIA_CNH_D,
            self::CATEGORIA_CNH_E,
            self::CATEGORIA_CNH_AB,
            self::CATEGORIA_CNH_AC,
            self::CATEGORIA_CNH_AD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDisponibilidadesAllowableValues()
    {
        return [
            self::DISPONIBILIDADES_MANHA,
            self::DISPONIBILIDADES_TARDE,
            self::DISPONIBILIDADES_NOITE,
            self::DISPONIBILIDADES_SBADO,
            self::DISPONIBILIDADES_DOMINGO,
            self::DISPONIBILIDADES_VIAGEM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRacaAllowableValues()
    {
        return [
            self::RACA_INDIGENA,
            self::RACA_BRANCA,
            self::RACA_NEGRA,
            self::RACA_AMARELA,
            self::RACA_PARDA,
            self::RACA_NAO_INFORMADO,
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
        $this->container['veiculos'] = isset($data['veiculos']) ? $data['veiculos'] : null;
        $this->container['categoria_cnh'] = isset($data['categoria_cnh']) ? $data['categoria_cnh'] : null;
        $this->container['numero_cnh'] = isset($data['numero_cnh']) ? $data['numero_cnh'] : null;
        $this->container['outros_conhecimentos'] = isset($data['outros_conhecimentos']) ? $data['outros_conhecimentos'] : null;
        $this->container['observacoes'] = isset($data['observacoes']) ? $data['observacoes'] : null;
        $this->container['disponibilidades'] = isset($data['disponibilidades']) ? $data['disponibilidades'] : null;
        $this->container['disponibilidade_outras_cidades'] = isset($data['disponibilidade_outras_cidades']) ? $data['disponibilidade_outras_cidades'] : null;
        $this->container['raca'] = isset($data['raca']) ? $data['raca'] : null;
        $this->container['altura'] = isset($data['altura']) ? $data['altura'] : null;
        $this->container['peso'] = isset($data['peso']) ? $data['peso'] : null;
        $this->container['possui_filhos'] = isset($data['possui_filhos']) ? $data['possui_filhos'] : null;
        $this->container['deficiencia'] = isset($data['deficiencia']) ? $data['deficiencia'] : null;
        $this->container['complemento_deficiencia'] = isset($data['complemento_deficiencia']) ? $data['complemento_deficiencia'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getCategoriaCnhAllowableValues();
        if (!in_array($this->container['categoria_cnh'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'categoria_cnh', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getRacaAllowableValues();
        if (!in_array($this->container['raca'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'raca', must be one of '%s'",
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

        $allowed_values = $this->getCategoriaCnhAllowableValues();
        if (!in_array($this->container['categoria_cnh'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getRacaAllowableValues();
        if (!in_array($this->container['raca'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets veiculos
     * @return \Swagger\Client\Model\InlineResponse200DadosComplementaresVeiculos[]
     */
    public function getVeiculos()
    {
        return $this->container['veiculos'];
    }

    /**
     * Sets veiculos
     * @param \Swagger\Client\Model\InlineResponse200DadosComplementaresVeiculos[] $veiculos Veículos do candidato
     * @return $this
     */
    public function setVeiculos($veiculos)
    {
        $this->container['veiculos'] = $veiculos;

        return $this;
    }

    /**
     * Gets categoria_cnh
     * @return string
     */
    public function getCategoriaCnh()
    {
        return $this->container['categoria_cnh'];
    }

    /**
     * Sets categoria_cnh
     * @param string $categoria_cnh Categoria da CNH (Carteira Nacional de Habilitação)
     * @return $this
     */
    public function setCategoriaCnh($categoria_cnh)
    {
        $allowed_values = $this->getCategoriaCnhAllowableValues();
        if (!is_null($categoria_cnh) && !in_array($categoria_cnh, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'categoria_cnh', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['categoria_cnh'] = $categoria_cnh;

        return $this;
    }

    /**
     * Gets numero_cnh
     * @return double
     */
    public function getNumeroCnh()
    {
        return $this->container['numero_cnh'];
    }

    /**
     * Sets numero_cnh
     * @param double $numero_cnh Número da CNH (Carteira Nacional de Habilitação)
     * @return $this
     */
    public function setNumeroCnh($numero_cnh)
    {
        $this->container['numero_cnh'] = $numero_cnh;

        return $this;
    }

    /**
     * Gets outros_conhecimentos
     * @return string
     */
    public function getOutrosConhecimentos()
    {
        return $this->container['outros_conhecimentos'];
    }

    /**
     * Sets outros_conhecimentos
     * @param string $outros_conhecimentos Descrição de outros conhecimentos e habilidades
     * @return $this
     */
    public function setOutrosConhecimentos($outros_conhecimentos)
    {
        $this->container['outros_conhecimentos'] = $outros_conhecimentos;

        return $this;
    }

    /**
     * Gets observacoes
     * @return string
     */
    public function getObservacoes()
    {
        return $this->container['observacoes'];
    }

    /**
     * Sets observacoes
     * @param string $observacoes Outras observações pertinentes
     * @return $this
     */
    public function setObservacoes($observacoes)
    {
        $this->container['observacoes'] = $observacoes;

        return $this;
    }

    /**
     * Gets disponibilidades
     * @return string[]
     */
    public function getDisponibilidades()
    {
        return $this->container['disponibilidades'];
    }

    /**
     * Sets disponibilidades
     * @param string[] $disponibilidades Lista com as disponibilidades de horário de trabalho e viagens
     * @return $this
     */
    public function setDisponibilidades($disponibilidades)
    {
        $allowed_values = $this->getDisponibilidadesAllowableValues();
        if (!is_null($disponibilidades) && array_diff($disponibilidades, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'disponibilidades', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['disponibilidades'] = $disponibilidades;

        return $this;
    }

    /**
     * Gets disponibilidade_outras_cidades
     * @return string[]
     */
    public function getDisponibilidadeOutrasCidades()
    {
        return $this->container['disponibilidade_outras_cidades'];
    }

    /**
     * Sets disponibilidade_outras_cidades
     * @param string[] $disponibilidade_outras_cidades Lista com as cidades para disponibilidade de trabalho.  Nome da cidade no formato \"NomeCidade/SiglaEstado\" (Ex.: São Paulo/SP)
     * @return $this
     */
    public function setDisponibilidadeOutrasCidades($disponibilidade_outras_cidades)
    {
        $this->container['disponibilidade_outras_cidades'] = $disponibilidade_outras_cidades;

        return $this;
    }

    /**
     * Gets raca
     * @return string
     */
    public function getRaca()
    {
        return $this->container['raca'];
    }

    /**
     * Sets raca
     * @param string $raca Raça do candidato de acordo com a tabela do governo
     * @return $this
     */
    public function setRaca($raca)
    {
        $allowed_values = $this->getRacaAllowableValues();
        if (!is_null($raca) && !in_array($raca, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'raca', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['raca'] = $raca;

        return $this;
    }

    /**
     * Gets altura
     * @return double
     */
    public function getAltura()
    {
        return $this->container['altura'];
    }

    /**
     * Sets altura
     * @param double $altura Altura em metros
     * @return $this
     */
    public function setAltura($altura)
    {
        $this->container['altura'] = $altura;

        return $this;
    }

    /**
     * Gets peso
     * @return double
     */
    public function getPeso()
    {
        return $this->container['peso'];
    }

    /**
     * Sets peso
     * @param double $peso Altura em metros
     * @return $this
     */
    public function setPeso($peso)
    {
        $this->container['peso'] = $peso;

        return $this;
    }

    /**
     * Gets possui_filhos
     * @return bool
     */
    public function getPossuiFilhos()
    {
        return $this->container['possui_filhos'];
    }

    /**
     * Sets possui_filhos
     * @param bool $possui_filhos Indica se o candidato possui filhos
     * @return $this
     */
    public function setPossuiFilhos($possui_filhos)
    {
        $this->container['possui_filhos'] = $possui_filhos;

        return $this;
    }

    /**
     * Gets deficiencia
     * @return string
     */
    public function getDeficiencia()
    {
        return $this->container['deficiencia'];
    }

    /**
     * Sets deficiencia
     * @param string $deficiencia Deficiência do candidato  Deve estar presente na tabela Deficiencias
     * @return $this
     */
    public function setDeficiencia($deficiencia)
    {
        $this->container['deficiencia'] = $deficiencia;

        return $this;
    }

    /**
     * Gets complemento_deficiencia
     * @return string
     */
    public function getComplementoDeficiencia()
    {
        return $this->container['complemento_deficiencia'];
    }

    /**
     * Sets complemento_deficiencia
     * @param string $complemento_deficiencia Complemento da deficiência
     * @return $this
     */
    public function setComplementoDeficiencia($complemento_deficiencia)
    {
        $this->container['complemento_deficiencia'] = $complemento_deficiencia;

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


