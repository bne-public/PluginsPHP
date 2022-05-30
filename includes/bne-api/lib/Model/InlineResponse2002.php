<?php
/**
 * InlineResponse2002
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
 * InlineResponse2002 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2002 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'foto' => 'string',
        'vip' => 'bool',
        'cpf' => 'double',
        'dta_atualizacao' => 'string',
        'dta_nascimento' => 'string',
        'ddd_celular' => 'string',
        'num_celular' => 'string',
        'ddd_telefone' => 'string',
        'num_telefone' => 'string',
        'email' => 'string',
        'nome_completo' => 'string',
        'sexo' => 'string',
        'estado_civil' => 'string',
        'idade' => 'int',
        'funcoes' => 'string',
        'pretensao' => 'double',
        'escolaridade' => 'string',
        'observacoes' => 'string',
        'aceita_estagio' => 'bool',
        'cep_endereco' => 'string',
        'logradouro_endereco' => 'string',
        'numero_endereco' => 'string',
        'complemento_endereco' => 'string',
        'bairro_endereco' => 'string',
        'cidade' => 'string',
        'estado' => 'string',
        'carteira' => 'string',
        'id_curriculo' => 'int',
        'numero_rg' => 'string',
        'orgao_expeditor' => 'string',
        'deficiente' => 'string',
        'caracteristicas_pessoais' => 'string',
        'outros_conhecimento' => 'string',
        'flag_viagem' => 'bool',
        'list_experiencia_profissional' => '\Swagger\Client\Model\InlineResponse2002ListExperienciaProfissional[]',
        'idiomas' => '\Swagger\Client\Model\InlineResponse2002Idiomas[]',
        'formacoes' => '\Swagger\Client\Model\InlineResponse2002Formacoes[]',
        'data_hora_candidatura' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'foto' => null,
        'vip' => null,
        'cpf' => 'double',
        'dta_atualizacao' => null,
        'dta_nascimento' => null,
        'ddd_celular' => null,
        'num_celular' => null,
        'ddd_telefone' => null,
        'num_telefone' => null,
        'email' => null,
        'nome_completo' => null,
        'sexo' => null,
        'estado_civil' => null,
        'idade' => 'int32',
        'funcoes' => null,
        'pretensao' => 'double',
        'escolaridade' => null,
        'observacoes' => null,
        'aceita_estagio' => null,
        'cep_endereco' => null,
        'logradouro_endereco' => null,
        'numero_endereco' => null,
        'complemento_endereco' => null,
        'bairro_endereco' => null,
        'cidade' => null,
        'estado' => null,
        'carteira' => null,
        'id_curriculo' => 'int32',
        'numero_rg' => null,
        'orgao_expeditor' => null,
        'deficiente' => null,
        'caracteristicas_pessoais' => null,
        'outros_conhecimento' => null,
        'flag_viagem' => null,
        'list_experiencia_profissional' => null,
        'idiomas' => null,
        'formacoes' => null,
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
        'foto' => 'foto',
        'vip' => 'vip',
        'cpf' => 'cpf',
        'dta_atualizacao' => 'dtaAtualizacao',
        'dta_nascimento' => 'dtaNascimento',
        'ddd_celular' => 'dddCelular',
        'num_celular' => 'numCelular',
        'ddd_telefone' => 'dddTelefone',
        'num_telefone' => 'numTelefone',
        'email' => 'email',
        'nome_completo' => 'nomeCompleto',
        'sexo' => 'sexo',
        'estado_civil' => 'estadoCivil',
        'idade' => 'idade',
        'funcoes' => 'funcoes',
        'pretensao' => 'pretensao',
        'escolaridade' => 'escolaridade',
        'observacoes' => 'observacoes',
        'aceita_estagio' => 'aceitaEstagio',
        'cep_endereco' => 'cepEndereco',
        'logradouro_endereco' => 'logradouroEndereco',
        'numero_endereco' => 'numeroEndereco',
        'complemento_endereco' => 'complementoEndereco',
        'bairro_endereco' => 'bairroEndereco',
        'cidade' => 'cidade',
        'estado' => 'estado',
        'carteira' => 'carteira',
        'id_curriculo' => 'idCurriculo',
        'numero_rg' => 'numeroRG',
        'orgao_expeditor' => 'orgaoExpeditor',
        'deficiente' => 'deficiente',
        'caracteristicas_pessoais' => 'caracteristicasPessoais',
        'outros_conhecimento' => 'outrosConhecimento',
        'flag_viagem' => 'FlagViagem',
        'list_experiencia_profissional' => 'listExperienciaProfissional',
        'idiomas' => 'idiomas',
        'formacoes' => 'formacoes',
        'data_hora_candidatura' => 'DataHoraCandidatura'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'foto' => 'setFoto',
        'vip' => 'setVip',
        'cpf' => 'setCpf',
        'dta_atualizacao' => 'setDtaAtualizacao',
        'dta_nascimento' => 'setDtaNascimento',
        'ddd_celular' => 'setDddCelular',
        'num_celular' => 'setNumCelular',
        'ddd_telefone' => 'setDddTelefone',
        'num_telefone' => 'setNumTelefone',
        'email' => 'setEmail',
        'nome_completo' => 'setNomeCompleto',
        'sexo' => 'setSexo',
        'estado_civil' => 'setEstadoCivil',
        'idade' => 'setIdade',
        'funcoes' => 'setFuncoes',
        'pretensao' => 'setPretensao',
        'escolaridade' => 'setEscolaridade',
        'observacoes' => 'setObservacoes',
        'aceita_estagio' => 'setAceitaEstagio',
        'cep_endereco' => 'setCepEndereco',
        'logradouro_endereco' => 'setLogradouroEndereco',
        'numero_endereco' => 'setNumeroEndereco',
        'complemento_endereco' => 'setComplementoEndereco',
        'bairro_endereco' => 'setBairroEndereco',
        'cidade' => 'setCidade',
        'estado' => 'setEstado',
        'carteira' => 'setCarteira',
        'id_curriculo' => 'setIdCurriculo',
        'numero_rg' => 'setNumeroRg',
        'orgao_expeditor' => 'setOrgaoExpeditor',
        'deficiente' => 'setDeficiente',
        'caracteristicas_pessoais' => 'setCaracteristicasPessoais',
        'outros_conhecimento' => 'setOutrosConhecimento',
        'flag_viagem' => 'setFlagViagem',
        'list_experiencia_profissional' => 'setListExperienciaProfissional',
        'idiomas' => 'setIdiomas',
        'formacoes' => 'setFormacoes',
        'data_hora_candidatura' => 'setDataHoraCandidatura'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'foto' => 'getFoto',
        'vip' => 'getVip',
        'cpf' => 'getCpf',
        'dta_atualizacao' => 'getDtaAtualizacao',
        'dta_nascimento' => 'getDtaNascimento',
        'ddd_celular' => 'getDddCelular',
        'num_celular' => 'getNumCelular',
        'ddd_telefone' => 'getDddTelefone',
        'num_telefone' => 'getNumTelefone',
        'email' => 'getEmail',
        'nome_completo' => 'getNomeCompleto',
        'sexo' => 'getSexo',
        'estado_civil' => 'getEstadoCivil',
        'idade' => 'getIdade',
        'funcoes' => 'getFuncoes',
        'pretensao' => 'getPretensao',
        'escolaridade' => 'getEscolaridade',
        'observacoes' => 'getObservacoes',
        'aceita_estagio' => 'getAceitaEstagio',
        'cep_endereco' => 'getCepEndereco',
        'logradouro_endereco' => 'getLogradouroEndereco',
        'numero_endereco' => 'getNumeroEndereco',
        'complemento_endereco' => 'getComplementoEndereco',
        'bairro_endereco' => 'getBairroEndereco',
        'cidade' => 'getCidade',
        'estado' => 'getEstado',
        'carteira' => 'getCarteira',
        'id_curriculo' => 'getIdCurriculo',
        'numero_rg' => 'getNumeroRg',
        'orgao_expeditor' => 'getOrgaoExpeditor',
        'deficiente' => 'getDeficiente',
        'caracteristicas_pessoais' => 'getCaracteristicasPessoais',
        'outros_conhecimento' => 'getOutrosConhecimento',
        'flag_viagem' => 'getFlagViagem',
        'list_experiencia_profissional' => 'getListExperienciaProfissional',
        'idiomas' => 'getIdiomas',
        'formacoes' => 'getFormacoes',
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
        $this->container['foto'] = isset($data['foto']) ? $data['foto'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
        $this->container['cpf'] = isset($data['cpf']) ? $data['cpf'] : null;
        $this->container['dta_atualizacao'] = isset($data['dta_atualizacao']) ? $data['dta_atualizacao'] : null;
        $this->container['dta_nascimento'] = isset($data['dta_nascimento']) ? $data['dta_nascimento'] : null;
        $this->container['ddd_celular'] = isset($data['ddd_celular']) ? $data['ddd_celular'] : null;
        $this->container['num_celular'] = isset($data['num_celular']) ? $data['num_celular'] : null;
        $this->container['ddd_telefone'] = isset($data['ddd_telefone']) ? $data['ddd_telefone'] : null;
        $this->container['num_telefone'] = isset($data['num_telefone']) ? $data['num_telefone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['nome_completo'] = isset($data['nome_completo']) ? $data['nome_completo'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['estado_civil'] = isset($data['estado_civil']) ? $data['estado_civil'] : null;
        $this->container['idade'] = isset($data['idade']) ? $data['idade'] : null;
        $this->container['funcoes'] = isset($data['funcoes']) ? $data['funcoes'] : null;
        $this->container['pretensao'] = isset($data['pretensao']) ? $data['pretensao'] : null;
        $this->container['escolaridade'] = isset($data['escolaridade']) ? $data['escolaridade'] : null;
        $this->container['observacoes'] = isset($data['observacoes']) ? $data['observacoes'] : null;
        $this->container['aceita_estagio'] = isset($data['aceita_estagio']) ? $data['aceita_estagio'] : null;
        $this->container['cep_endereco'] = isset($data['cep_endereco']) ? $data['cep_endereco'] : null;
        $this->container['logradouro_endereco'] = isset($data['logradouro_endereco']) ? $data['logradouro_endereco'] : null;
        $this->container['numero_endereco'] = isset($data['numero_endereco']) ? $data['numero_endereco'] : null;
        $this->container['complemento_endereco'] = isset($data['complemento_endereco']) ? $data['complemento_endereco'] : null;
        $this->container['bairro_endereco'] = isset($data['bairro_endereco']) ? $data['bairro_endereco'] : null;
        $this->container['cidade'] = isset($data['cidade']) ? $data['cidade'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['carteira'] = isset($data['carteira']) ? $data['carteira'] : null;
        $this->container['id_curriculo'] = isset($data['id_curriculo']) ? $data['id_curriculo'] : null;
        $this->container['numero_rg'] = isset($data['numero_rg']) ? $data['numero_rg'] : null;
        $this->container['orgao_expeditor'] = isset($data['orgao_expeditor']) ? $data['orgao_expeditor'] : null;
        $this->container['deficiente'] = isset($data['deficiente']) ? $data['deficiente'] : null;
        $this->container['caracteristicas_pessoais'] = isset($data['caracteristicas_pessoais']) ? $data['caracteristicas_pessoais'] : null;
        $this->container['outros_conhecimento'] = isset($data['outros_conhecimento']) ? $data['outros_conhecimento'] : null;
        $this->container['flag_viagem'] = isset($data['flag_viagem']) ? $data['flag_viagem'] : null;
        $this->container['list_experiencia_profissional'] = isset($data['list_experiencia_profissional']) ? $data['list_experiencia_profissional'] : null;
        $this->container['idiomas'] = isset($data['idiomas']) ? $data['idiomas'] : null;
        $this->container['formacoes'] = isset($data['formacoes']) ? $data['formacoes'] : null;
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
     * Gets foto
     * @return string
     */
    public function getFoto()
    {
        return $this->container['foto'];
    }

    /**
     * Sets foto
     * @param string $foto
     * @return $this
     */
    public function setFoto($foto)
    {
        $this->container['foto'] = $foto;

        return $this;
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
     * Gets dta_atualizacao
     * @return string
     */
    public function getDtaAtualizacao()
    {
        return $this->container['dta_atualizacao'];
    }

    /**
     * Sets dta_atualizacao
     * @param string $dta_atualizacao
     * @return $this
     */
    public function setDtaAtualizacao($dta_atualizacao)
    {
        $this->container['dta_atualizacao'] = $dta_atualizacao;

        return $this;
    }

    /**
     * Gets dta_nascimento
     * @return string
     */
    public function getDtaNascimento()
    {
        return $this->container['dta_nascimento'];
    }

    /**
     * Sets dta_nascimento
     * @param string $dta_nascimento
     * @return $this
     */
    public function setDtaNascimento($dta_nascimento)
    {
        $this->container['dta_nascimento'] = $dta_nascimento;

        return $this;
    }

    /**
     * Gets ddd_celular
     * @return string
     */
    public function getDddCelular()
    {
        return $this->container['ddd_celular'];
    }

    /**
     * Sets ddd_celular
     * @param string $ddd_celular
     * @return $this
     */
    public function setDddCelular($ddd_celular)
    {
        $this->container['ddd_celular'] = $ddd_celular;

        return $this;
    }

    /**
     * Gets num_celular
     * @return string
     */
    public function getNumCelular()
    {
        return $this->container['num_celular'];
    }

    /**
     * Sets num_celular
     * @param string $num_celular
     * @return $this
     */
    public function setNumCelular($num_celular)
    {
        $this->container['num_celular'] = $num_celular;

        return $this;
    }

    /**
     * Gets ddd_telefone
     * @return string
     */
    public function getDddTelefone()
    {
        return $this->container['ddd_telefone'];
    }

    /**
     * Sets ddd_telefone
     * @param string $ddd_telefone
     * @return $this
     */
    public function setDddTelefone($ddd_telefone)
    {
        $this->container['ddd_telefone'] = $ddd_telefone;

        return $this;
    }

    /**
     * Gets num_telefone
     * @return string
     */
    public function getNumTelefone()
    {
        return $this->container['num_telefone'];
    }

    /**
     * Sets num_telefone
     * @param string $num_telefone
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
     * Gets nome_completo
     * @return string
     */
    public function getNomeCompleto()
    {
        return $this->container['nome_completo'];
    }

    /**
     * Sets nome_completo
     * @param string $nome_completo
     * @return $this
     */
    public function setNomeCompleto($nome_completo)
    {
        $this->container['nome_completo'] = $nome_completo;

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
     * Gets observacoes
     * @return string
     */
    public function getObservacoes()
    {
        return $this->container['observacoes'];
    }

    /**
     * Sets observacoes
     * @param string $observacoes
     * @return $this
     */
    public function setObservacoes($observacoes)
    {
        $this->container['observacoes'] = $observacoes;

        return $this;
    }

    /**
     * Gets aceita_estagio
     * @return bool
     */
    public function getAceitaEstagio()
    {
        return $this->container['aceita_estagio'];
    }

    /**
     * Sets aceita_estagio
     * @param bool $aceita_estagio
     * @return $this
     */
    public function setAceitaEstagio($aceita_estagio)
    {
        $this->container['aceita_estagio'] = $aceita_estagio;

        return $this;
    }

    /**
     * Gets cep_endereco
     * @return string
     */
    public function getCepEndereco()
    {
        return $this->container['cep_endereco'];
    }

    /**
     * Sets cep_endereco
     * @param string $cep_endereco
     * @return $this
     */
    public function setCepEndereco($cep_endereco)
    {
        $this->container['cep_endereco'] = $cep_endereco;

        return $this;
    }

    /**
     * Gets logradouro_endereco
     * @return string
     */
    public function getLogradouroEndereco()
    {
        return $this->container['logradouro_endereco'];
    }

    /**
     * Sets logradouro_endereco
     * @param string $logradouro_endereco
     * @return $this
     */
    public function setLogradouroEndereco($logradouro_endereco)
    {
        $this->container['logradouro_endereco'] = $logradouro_endereco;

        return $this;
    }

    /**
     * Gets numero_endereco
     * @return string
     */
    public function getNumeroEndereco()
    {
        return $this->container['numero_endereco'];
    }

    /**
     * Sets numero_endereco
     * @param string $numero_endereco
     * @return $this
     */
    public function setNumeroEndereco($numero_endereco)
    {
        $this->container['numero_endereco'] = $numero_endereco;

        return $this;
    }

    /**
     * Gets complemento_endereco
     * @return string
     */
    public function getComplementoEndereco()
    {
        return $this->container['complemento_endereco'];
    }

    /**
     * Sets complemento_endereco
     * @param string $complemento_endereco
     * @return $this
     */
    public function setComplementoEndereco($complemento_endereco)
    {
        $this->container['complemento_endereco'] = $complemento_endereco;

        return $this;
    }

    /**
     * Gets bairro_endereco
     * @return string
     */
    public function getBairroEndereco()
    {
        return $this->container['bairro_endereco'];
    }

    /**
     * Sets bairro_endereco
     * @param string $bairro_endereco
     * @return $this
     */
    public function setBairroEndereco($bairro_endereco)
    {
        $this->container['bairro_endereco'] = $bairro_endereco;

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
     * Gets numero_rg
     * @return string
     */
    public function getNumeroRg()
    {
        return $this->container['numero_rg'];
    }

    /**
     * Sets numero_rg
     * @param string $numero_rg
     * @return $this
     */
    public function setNumeroRg($numero_rg)
    {
        $this->container['numero_rg'] = $numero_rg;

        return $this;
    }

    /**
     * Gets orgao_expeditor
     * @return string
     */
    public function getOrgaoExpeditor()
    {
        return $this->container['orgao_expeditor'];
    }

    /**
     * Sets orgao_expeditor
     * @param string $orgao_expeditor
     * @return $this
     */
    public function setOrgaoExpeditor($orgao_expeditor)
    {
        $this->container['orgao_expeditor'] = $orgao_expeditor;

        return $this;
    }

    /**
     * Gets deficiente
     * @return string
     */
    public function getDeficiente()
    {
        return $this->container['deficiente'];
    }

    /**
     * Sets deficiente
     * @param string $deficiente
     * @return $this
     */
    public function setDeficiente($deficiente)
    {
        $this->container['deficiente'] = $deficiente;

        return $this;
    }

    /**
     * Gets caracteristicas_pessoais
     * @return string
     */
    public function getCaracteristicasPessoais()
    {
        return $this->container['caracteristicas_pessoais'];
    }

    /**
     * Sets caracteristicas_pessoais
     * @param string $caracteristicas_pessoais
     * @return $this
     */
    public function setCaracteristicasPessoais($caracteristicas_pessoais)
    {
        $this->container['caracteristicas_pessoais'] = $caracteristicas_pessoais;

        return $this;
    }

    /**
     * Gets outros_conhecimento
     * @return string
     */
    public function getOutrosConhecimento()
    {
        return $this->container['outros_conhecimento'];
    }

    /**
     * Sets outros_conhecimento
     * @param string $outros_conhecimento
     * @return $this
     */
    public function setOutrosConhecimento($outros_conhecimento)
    {
        $this->container['outros_conhecimento'] = $outros_conhecimento;

        return $this;
    }

    /**
     * Gets flag_viagem
     * @return bool
     */
    public function getFlagViagem()
    {
        return $this->container['flag_viagem'];
    }

    /**
     * Sets flag_viagem
     * @param bool $flag_viagem
     * @return $this
     */
    public function setFlagViagem($flag_viagem)
    {
        $this->container['flag_viagem'] = $flag_viagem;

        return $this;
    }

    /**
     * Gets list_experiencia_profissional
     * @return \Swagger\Client\Model\InlineResponse2002ListExperienciaProfissional[]
     */
    public function getListExperienciaProfissional()
    {
        return $this->container['list_experiencia_profissional'];
    }

    /**
     * Sets list_experiencia_profissional
     * @param \Swagger\Client\Model\InlineResponse2002ListExperienciaProfissional[] $list_experiencia_profissional
     * @return $this
     */
    public function setListExperienciaProfissional($list_experiencia_profissional)
    {
        $this->container['list_experiencia_profissional'] = $list_experiencia_profissional;

        return $this;
    }

    /**
     * Gets idiomas
     * @return \Swagger\Client\Model\InlineResponse2002Idiomas[]
     */
    public function getIdiomas()
    {
        return $this->container['idiomas'];
    }

    /**
     * Sets idiomas
     * @param \Swagger\Client\Model\InlineResponse2002Idiomas[] $idiomas
     * @return $this
     */
    public function setIdiomas($idiomas)
    {
        $this->container['idiomas'] = $idiomas;

        return $this;
    }

    /**
     * Gets formacoes
     * @return \Swagger\Client\Model\InlineResponse2002Formacoes[]
     */
    public function getFormacoes()
    {
        return $this->container['formacoes'];
    }

    /**
     * Sets formacoes
     * @param \Swagger\Client\Model\InlineResponse2002Formacoes[] $formacoes
     * @return $this
     */
    public function setFormacoes($formacoes)
    {
        $this->container['formacoes'] = $formacoes;

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

