<?php
/**
 * InlineResponse2006Registros
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
 * InlineResponse2006Registros Class Doc Comment
 *
 * @category    Class
 * @description Representa uma vaga de emprego no BNE.
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2006Registros implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_6_Registros';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'tipo_vinculo' => 'string[]',
        'cursos' => 'string[]',
        'funcao' => 'string',
        'cidade' => 'string',
        'quantidade' => 'int',
        'escolaridade' => 'string',
        'salario_min' => 'double',
        'salario_max' => 'double',
        'beneficios' => 'string',
        'requisitos' => 'string',
        'atribuicoes' => 'string',
        'disponibilidade' => 'string[]',
        'nome_fantasia' => 'string',
        'confidencial' => 'bool',
        'perguntas' => '\Swagger\Client\Model\InlineResponse2006Perguntas[]',
        'deficiencia' => 'string',
        'status' => 'string',
        'data_cadastro' => '\DateTime',
        'sigla_estado' => 'string',
        'data_anuncio' => '\DateTime',
        'des_origem' => 'string',
        'tipo_origem' => 'int',
        'bne_recomenda' => 'bool',
        'codigo_vaga' => 'string',
        'id_filial' => 'int',
        'bairro' => 'string',
        'area' => 'string',
        'url' => 'string',
        'plano' => 'bool',
        'oferece_cursos' => 'bool',
        'campanha' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'tipo_vinculo' => null,
        'cursos' => null,
        'funcao' => null,
        'cidade' => null,
        'quantidade' => 'int32',
        'escolaridade' => null,
        'salario_min' => 'double',
        'salario_max' => 'double',
        'beneficios' => null,
        'requisitos' => null,
        'atribuicoes' => null,
        'disponibilidade' => null,
        'nome_fantasia' => null,
        'confidencial' => null,
        'perguntas' => null,
        'deficiencia' => null,
        'status' => null,
        'data_cadastro' => 'date-time',
        'sigla_estado' => null,
        'data_anuncio' => 'date-time',
        'des_origem' => null,
        'tipo_origem' => 'int32',
        'bne_recomenda' => null,
        'codigo_vaga' => null,
        'id_filial' => 'int32',
        'bairro' => null,
        'area' => null,
        'url' => null,
        'plano' => null,
        'oferece_cursos' => null,
        'campanha' => null
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
        'id' => 'Id',
        'tipo_vinculo' => 'TipoVinculo',
        'cursos' => 'Cursos',
        'funcao' => 'Funcao',
        'cidade' => 'Cidade',
        'quantidade' => 'Quantidade',
        'escolaridade' => 'Escolaridade',
        'salario_min' => 'SalarioMin',
        'salario_max' => 'SalarioMax',
        'beneficios' => 'Beneficios',
        'requisitos' => 'Requisitos',
        'atribuicoes' => 'Atribuicoes',
        'disponibilidade' => 'Disponibilidade',
        'nome_fantasia' => 'NomeFantasia',
        'confidencial' => 'Confidencial',
        'perguntas' => 'Perguntas',
        'deficiencia' => 'Deficiencia',
        'status' => 'Status',
        'data_cadastro' => 'DataCadastro',
        'sigla_estado' => 'SiglaEstado',
        'data_anuncio' => 'DataAnuncio',
        'des_origem' => 'DesOrigem',
        'tipo_origem' => 'TipoOrigem',
        'bne_recomenda' => 'BNERecomenda',
        'codigo_vaga' => 'CodigoVaga',
        'id_filial' => 'IdFilial',
        'bairro' => 'Bairro',
        'area' => 'Area',
        'url' => 'Url',
        'plano' => 'Plano',
        'oferece_cursos' => 'Oferece_Cursos',
        'campanha' => 'Campanha'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'tipo_vinculo' => 'setTipoVinculo',
        'cursos' => 'setCursos',
        'funcao' => 'setFuncao',
        'cidade' => 'setCidade',
        'quantidade' => 'setQuantidade',
        'escolaridade' => 'setEscolaridade',
        'salario_min' => 'setSalarioMin',
        'salario_max' => 'setSalarioMax',
        'beneficios' => 'setBeneficios',
        'requisitos' => 'setRequisitos',
        'atribuicoes' => 'setAtribuicoes',
        'disponibilidade' => 'setDisponibilidade',
        'nome_fantasia' => 'setNomeFantasia',
        'confidencial' => 'setConfidencial',
        'perguntas' => 'setPerguntas',
        'deficiencia' => 'setDeficiencia',
        'status' => 'setStatus',
        'data_cadastro' => 'setDataCadastro',
        'sigla_estado' => 'setSiglaEstado',
        'data_anuncio' => 'setDataAnuncio',
        'des_origem' => 'setDesOrigem',
        'tipo_origem' => 'setTipoOrigem',
        'bne_recomenda' => 'setBneRecomenda',
        'codigo_vaga' => 'setCodigoVaga',
        'id_filial' => 'setIdFilial',
        'bairro' => 'setBairro',
        'area' => 'setArea',
        'url' => 'setUrl',
        'plano' => 'setPlano',
        'oferece_cursos' => 'setOfereceCursos',
        'campanha' => 'setCampanha'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'tipo_vinculo' => 'getTipoVinculo',
        'cursos' => 'getCursos',
        'funcao' => 'getFuncao',
        'cidade' => 'getCidade',
        'quantidade' => 'getQuantidade',
        'escolaridade' => 'getEscolaridade',
        'salario_min' => 'getSalarioMin',
        'salario_max' => 'getSalarioMax',
        'beneficios' => 'getBeneficios',
        'requisitos' => 'getRequisitos',
        'atribuicoes' => 'getAtribuicoes',
        'disponibilidade' => 'getDisponibilidade',
        'nome_fantasia' => 'getNomeFantasia',
        'confidencial' => 'getConfidencial',
        'perguntas' => 'getPerguntas',
        'deficiencia' => 'getDeficiencia',
        'status' => 'getStatus',
        'data_cadastro' => 'getDataCadastro',
        'sigla_estado' => 'getSiglaEstado',
        'data_anuncio' => 'getDataAnuncio',
        'des_origem' => 'getDesOrigem',
        'tipo_origem' => 'getTipoOrigem',
        'bne_recomenda' => 'getBneRecomenda',
        'codigo_vaga' => 'getCodigoVaga',
        'id_filial' => 'getIdFilial',
        'bairro' => 'getBairro',
        'area' => 'getArea',
        'url' => 'getUrl',
        'plano' => 'getPlano',
        'oferece_cursos' => 'getOfereceCursos',
        'campanha' => 'getCampanha'
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

    const STATUS_EM_PUBLICACAO = 'EmPublicacao';
    const STATUS_ATIVA = 'Ativa';
    const STATUS_ARQUIVADA = 'Arquivada';
    const STATUS_INATIVA = 'Inativa';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_EM_PUBLICACAO,
            self::STATUS_ATIVA,
            self::STATUS_ARQUIVADA,
            self::STATUS_INATIVA,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tipo_vinculo'] = isset($data['tipo_vinculo']) ? $data['tipo_vinculo'] : null;
        $this->container['cursos'] = isset($data['cursos']) ? $data['cursos'] : null;
        $this->container['funcao'] = isset($data['funcao']) ? $data['funcao'] : null;
        $this->container['cidade'] = isset($data['cidade']) ? $data['cidade'] : null;
        $this->container['quantidade'] = isset($data['quantidade']) ? $data['quantidade'] : null;
        $this->container['escolaridade'] = isset($data['escolaridade']) ? $data['escolaridade'] : null;
        $this->container['salario_min'] = isset($data['salario_min']) ? $data['salario_min'] : null;
        $this->container['salario_max'] = isset($data['salario_max']) ? $data['salario_max'] : null;
        $this->container['beneficios'] = isset($data['beneficios']) ? $data['beneficios'] : null;
        $this->container['requisitos'] = isset($data['requisitos']) ? $data['requisitos'] : null;
        $this->container['atribuicoes'] = isset($data['atribuicoes']) ? $data['atribuicoes'] : null;
        $this->container['disponibilidade'] = isset($data['disponibilidade']) ? $data['disponibilidade'] : null;
        $this->container['nome_fantasia'] = isset($data['nome_fantasia']) ? $data['nome_fantasia'] : null;
        $this->container['confidencial'] = isset($data['confidencial']) ? $data['confidencial'] : null;
        $this->container['perguntas'] = isset($data['perguntas']) ? $data['perguntas'] : null;
        $this->container['deficiencia'] = isset($data['deficiencia']) ? $data['deficiencia'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['data_cadastro'] = isset($data['data_cadastro']) ? $data['data_cadastro'] : null;
        $this->container['sigla_estado'] = isset($data['sigla_estado']) ? $data['sigla_estado'] : null;
        $this->container['data_anuncio'] = isset($data['data_anuncio']) ? $data['data_anuncio'] : null;
        $this->container['des_origem'] = isset($data['des_origem']) ? $data['des_origem'] : null;
        $this->container['tipo_origem'] = isset($data['tipo_origem']) ? $data['tipo_origem'] : null;
        $this->container['bne_recomenda'] = isset($data['bne_recomenda']) ? $data['bne_recomenda'] : null;
        $this->container['codigo_vaga'] = isset($data['codigo_vaga']) ? $data['codigo_vaga'] : null;
        $this->container['id_filial'] = isset($data['id_filial']) ? $data['id_filial'] : null;
        $this->container['bairro'] = isset($data['bairro']) ? $data['bairro'] : null;
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['plano'] = isset($data['plano']) ? $data['plano'] : null;
        $this->container['oferece_cursos'] = isset($data['oferece_cursos']) ? $data['oferece_cursos'] : null;
        $this->container['campanha'] = isset($data['campanha']) ? $data['campanha'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['funcao'] === null) {
            $invalid_properties[] = "'funcao' can't be null";
        }
        if ((strlen($this->container['funcao']) > 200)) {
            $invalid_properties[] = "invalid value for 'funcao', the character length must be smaller than or equal to 200.";
        }

        if ((strlen($this->container['funcao']) < 4)) {
            $invalid_properties[] = "invalid value for 'funcao', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['cidade'] === null) {
            $invalid_properties[] = "'cidade' can't be null";
        }
        if ((strlen($this->container['cidade']) > 200)) {
            $invalid_properties[] = "invalid value for 'cidade', the character length must be smaller than or equal to 200.";
        }

        if ((strlen($this->container['cidade']) < 5)) {
            $invalid_properties[] = "invalid value for 'cidade', the character length must be bigger than or equal to 5.";
        }

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

        if ($this->container['funcao'] === null) {
            return false;
        }
        if (strlen($this->container['funcao']) > 200) {
            return false;
        }
        if (strlen($this->container['funcao']) < 4) {
            return false;
        }
        if ($this->container['cidade'] === null) {
            return false;
        }
        if (strlen($this->container['cidade']) > 200) {
            return false;
        }
        if (strlen($this->container['cidade']) < 5) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Identificador da vaga. Considerado somente nas pesquisas.   Será desconsiderado em inserções e atualizações.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets tipo_vinculo
     * @return string[]
     */
    public function getTipoVinculo()
    {
        return $this->container['tipo_vinculo'];
    }

    /**
     * Sets tipo_vinculo
     * @param string[] $tipo_vinculo (Obrigatório) Lista que deve ser composta pelos seguintes valores.  -&gt; Aprendiz  -&gt; Autônomo  -&gt; Efetivo  -&gt; Estágio  -&gt; Freelancer  -&gt; Temporário
     * @return $this
     */
    public function setTipoVinculo($tipo_vinculo)
    {
        $this->container['tipo_vinculo'] = $tipo_vinculo;

        return $this;
    }

    /**
     * Gets cursos
     * @return string[]
     */
    public function getCursos()
    {
        return $this->container['cursos'];
    }

    /**
     * Sets cursos
     * @param string[] $cursos Cursos que o estagiário deve estar cursando para a vaga de estágio.  É considerado somente para os tipos de vínculo \"Estágio\" e \"Aprendiz\". Para os demais vínculos, será desconsiderado.  Na tabela de Cursos é possível ter as sugestões para os cursos informados mas, embora altamente recomendável por questões de filtros, não é obrigatório que um valor presente naquela tabela seja utilizado.
     * @return $this
     */
    public function setCursos($cursos)
    {
        $this->container['cursos'] = $cursos;

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
     * @param string $funcao (Obrigatório) Nome completo da função.
     * @return $this
     */
    public function setFuncao($funcao)
    {
        if ((strlen($funcao) > 200)) {
            throw new \InvalidArgumentException('invalid length for $funcao when calling InlineResponse2006Registros., must be smaller than or equal to 200.');
        }
        //if ((strlen($funcao) < 4)) {
        //  throw new \InvalidArgumentException('invalid length for $funcao when calling InlineResponse2006Registros., must be bigger than or equal to 4.');
        //}

        $this->container['funcao'] = $funcao;

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
     * @param string $cidade (Obrigatório) Nome completo da cidade seguido de barra mais a sigla do estado. Ex.:”Montes Claros/MG”.
     * @return $this
     */
    public function setCidade($cidade)
    {
        if ((strlen($cidade) > 200)) {
            throw new \InvalidArgumentException('invalid length for $cidade when calling InlineResponse2006Registros., must be smaller than or equal to 200.');
        }
        if ((strlen($cidade) < 5)) {
            throw new \InvalidArgumentException('invalid length for $cidade when calling InlineResponse2006Registros., must be bigger than or equal to 5.');
        }

        $this->container['cidade'] = $cidade;

        return $this;
    }

    /**
     * Gets quantidade
     * @return int
     */
    public function getQuantidade()
    {
        return $this->container['quantidade'];
    }

    /**
     * Sets quantidade
     * @param int $quantidade (Obrigatório) Número de vagas ofertadas.
     * @return $this
     */
    public function setQuantidade($quantidade)
    {
        $this->container['quantidade'] = $quantidade;

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
     * @param string $escolaridade Algum dos itens listados:  -&gt; Ensino Fundamental Incompleto  -&gt; Ensino Fundamental Completo  -&gt; Ensino Médio Incompleto  -&gt; Ensino Médio Completo  -&gt; Técnico/Pós-Médio Incompleto  -&gt; Técnico/Pós-Médio Completo  -&gt; Tecnólogo Incompleto  -&gt; Superior Incompleto  -&gt; Tecnólogo Completo  -&gt; Superior Completo  -&gt; Pós Graduação / Especialização  -&gt; Mestrado  -&gt; Doutorado
     * @return $this
     */
    public function setEscolaridade($escolaridade)
    {
        $this->container['escolaridade'] = $escolaridade;

        return $this;
    }

    /**
     * Gets salario_min
     * @return double
     */
    public function getSalarioMin()
    {
        return $this->container['salario_min'];
    }

    /**
     * Sets salario_min
     * @param double $salario_min (Opcional) Início da faixa salarial ofertada.
     * @return $this
     */
    public function setSalarioMin($salario_min)
    {
        $this->container['salario_min'] = $salario_min;

        return $this;
    }

    /**
     * Gets salario_max
     * @return double
     */
    public function getSalarioMax()
    {
        return $this->container['salario_max'];
    }

    /**
     * Sets salario_max
     * @param double $salario_max (Opcional) Final da faixa salarial ofertada.
     * @return $this
     */
    public function setSalarioMax($salario_max)
    {
        $this->container['salario_max'] = $salario_max;

        return $this;
    }

    /**
     * Gets beneficios
     * @return string
     */
    public function getBeneficios()
    {
        return $this->container['beneficios'];
    }

    /**
     * Sets beneficios
     * @param string $beneficios (Opcional) Descrição dos benefícios oferecidos.
     * @return $this
     */
    public function setBeneficios($beneficios)
    {
        $this->container['beneficios'] = $beneficios;

        return $this;
    }

    /**
     * Gets requisitos
     * @return string
     */
    public function getRequisitos()
    {
        return $this->container['requisitos'];
    }

    /**
     * Sets requisitos
     * @param string $requisitos (Opcional) Requisitos desejados para a vaga.
     * @return $this
     */
    public function setRequisitos($requisitos)
    {
        $this->container['requisitos'] = $requisitos;

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
     * @param string $atribuicoes (Opcional) Atribuições desejadas para a vaga.
     * @return $this
     */
    public function setAtribuicoes($atribuicoes)
    {
        $this->container['atribuicoes'] = $atribuicoes;

        return $this;
    }

    /**
     * Gets disponibilidade
     * @return string[]
     */
    public function getDisponibilidade()
    {
        return $this->container['disponibilidade'];
    }

    /**
     * Sets disponibilidade
     * @param string[] $disponibilidade (Opcional) Utilize os itens listados para compor a lista:  -&gt; Manhã  -&gt; Tarde  -&gt; Noite  -&gt; Sábado  -&gt; Domingo  -&gt; Viagem
     * @return $this
     */
    public function setDisponibilidade($disponibilidade)
    {
        $this->container['disponibilidade'] = $disponibilidade;

        return $this;
    }

    /**
     * Gets nome_fantasia
     * @return string
     */
    public function getNomeFantasia()
    {
        return $this->container['nome_fantasia'];
    }

    /**
     * Sets nome_fantasia
     * @param string $nome_fantasia Nome fantasia da empresa.
     * @return $this
     */
    public function setNomeFantasia($nome_fantasia)
    {
        $this->container['nome_fantasia'] = $nome_fantasia;

        return $this;
    }

    /**
     * Gets confidencial
     * @return bool
     */
    public function getConfidencial()
    {
        return $this->container['confidencial'];
    }

    /**
     * Sets confidencial
     * @param bool $confidencial (Obrigatório) Indica se as informações da empresa são confidênciais.
     * @return $this
     */
    public function setConfidencial($confidencial)
    {
        $this->container['confidencial'] = $confidencial;

        return $this;
    }

    /**
     * Gets perguntas
     * @return \Swagger\Client\Model\InlineResponse2006Perguntas[]
     */
    public function getPerguntas()
    {
        return $this->container['perguntas'];
    }

    /**
     * Sets perguntas
     * @param \Swagger\Client\Model\InlineResponse2006Perguntas[] $perguntas (Opcional) Lista de objetos do tipo Pergunta.
     * @return $this
     */
    public function setPerguntas($perguntas)
    {
        $this->container['perguntas'] = $perguntas;

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
     * @param string $deficiencia (Opcional) Se a vaga é para PCD é necessário alguns dos itens:  -&gt; Auditiva  -&gt; Física  -&gt; Mental  -&gt; Múltipla  -&gt; Nenhuma  -&gt; Qualquer  -&gt; Reabilitado  -&gt; Visual
     * @return $this
     */
    public function setDeficiencia($deficiencia)
    {
        $this->container['deficiencia'] = $deficiencia;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status atual da vaga
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

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
     * @param \DateTime $data_cadastro Data de abertura da vaga
     * @return $this
     */
    public function setDataCadastro($data_cadastro)
    {
        $this->container['data_cadastro'] = $data_cadastro;

        return $this;
    }

    /**
     * Gets sigla_estado
     * @return string
     */
    public function getSiglaEstado()
    {
        return $this->container['sigla_estado'];
    }

    /**
     * Sets sigla_estado
     * @param string $sigla_estado 
     * @return $this
     */
    public function setSiglaEstado($sigla_estado)
    {
        $this->container['sigla_estado'] = $sigla_estado;

        return $this;
    }

    /**
     * Gets data_anuncio
     * @return \DateTime
     */
    public function getDataAnuncio()
    {
        return $this->container['data_anuncio'];
    }

    /**
     * Sets data_anuncio
     * @param \DateTime $data_anuncio Data que a vaga começou a aparecer nas pesquisas.
     * @return $this
     */
    public function setDataAnuncio($data_anuncio)
    {
        $this->container['data_anuncio'] = $data_anuncio;

        return $this;
    }

    /**
     * Gets des_origem
     * @return string
     */
    public function getDesOrigem()
    {
        return $this->container['des_origem'];
    }

    /**
     * Sets des_origem
     * @param string $des_origem 
     * @return $this
     */
    public function setDesOrigem($des_origem)
    {
        $this->container['des_origem'] = $des_origem;

        return $this;
    }

    /**
     * Gets tipo_origem
     * @return int
     */
    public function getTipoOrigem()
    {
        return $this->container['tipo_origem'];
    }

    /**
     * Sets tipo_origem
     * @param int $tipo_origem 
     * @return $this
     */
    public function setTipoOrigem($tipo_origem)
    {
        $this->container['tipo_origem'] = $tipo_origem;

        return $this;
    }

    /**
     * Gets bne_recomenda
     * @return bool
     */
    public function getBneRecomenda()
    {
        return $this->container['bne_recomenda'];
    }

    /**
     * Sets bne_recomenda
     * @param bool $bne_recomenda 
     * @return $this
     */
    public function setBneRecomenda($bne_recomenda)
    {
        $this->container['bne_recomenda'] = $bne_recomenda;

        return $this;
    }

    /**
     * Gets codigo_vaga
     * @return string
     */
    public function getCodigoVaga()
    {
        return $this->container['codigo_vaga'];
    }

    /**
     * Sets codigo_vaga
     * @param string $codigo_vaga Codigo da vaga.
     * @return $this
     */
    public function setCodigoVaga($codigo_vaga)
    {
        $this->container['codigo_vaga'] = $codigo_vaga;

        return $this;
    }

    /**
     * Gets id_filial
     * @return int
     */
    public function getIdFilial()
    {
        return $this->container['id_filial'];
    }

    /**
     * Sets id_filial
     * @param int $id_filial Empresa que anunciou a vaga
     * @return $this
     */
    public function setIdFilial($id_filial)
    {
        $this->container['id_filial'] = $id_filial;

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
     * @param string $bairro /Bairro da vaga
     * @return $this
     */
    public function setBairro($bairro)
    {
        $this->container['bairro'] = $bairro;

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
     * @param string $area Area da vaga.
     * @return $this
     */
    public function setArea($area)
    {
        $this->container['area'] = $area;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url Url da vaga (BNE)
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets plano
     * @return bool
     */
    public function getPlano()
    {
        return $this->container['plano'];
    }

    /**
     * Sets plano
     * @param bool $plano 
     * @return $this
     */
    public function setPlano($plano)
    {
        $this->container['plano'] = $plano;

        return $this;
    }

    /**
     * Gets oferece_cursos
     * @return bool
     */
    public function getOfereceCursos()
    {
        return $this->container['oferece_cursos'];
    }

    /**
     * Sets oferece_cursos
     * @param bool $oferece_cursos 
     * @return $this
     */
    public function setOfereceCursos($oferece_cursos)
    {
        $this->container['oferece_cursos'] = $oferece_cursos;

        return $this;
    }

    /**
     * Gets campanha
     * @return bool
     */
    public function getCampanha()
    {
        return $this->container['campanha'];
    }

    /**
     * Sets campanha
     * @param bool $campanha 
     * @return $this
     */
    public function setCampanha($campanha)
    {
        $this->container['campanha'] = $campanha;

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


