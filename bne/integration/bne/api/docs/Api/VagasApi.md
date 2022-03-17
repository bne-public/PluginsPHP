# Swagger\Client\VagasApi

All URIs are relative to *http://gatewayapi.bne.com.br/apibne*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vagasAtualizarStatusByidnovoStatusVaga**](VagasApi.md#vagasAtualizarStatusByidnovoStatusVaga) | **PUT** /v1.0/Vagas/AtualizarStatus/{id} | Recupera uma vaga baseada em seu ID
[**vagasCandidatadasBytipoVinculopaginaregistrosPorPagina**](VagasApi.md#vagasCandidatadasBytipoVinculopaginaregistrosPorPagina) | **GET** /v1.0/Vagas/Candidatadas | Consulta a vagas candidatadas.
[**vagasCandidatarByidVagacandidatura**](VagasApi.md#vagasCandidatarByidVagacandidatura) | **POST** /v1.0/Vagas/Candidatar/{idVaga} | Realiza a candidatura a uma vaga.
[**vagasDadosDaEmpresaByidVaga**](VagasApi.md#vagasDadosDaEmpresaByidVaga) | **GET** /v1.0/Vagas/DadosDaEmpresa | Recupera os dados da empresa que anunciou a vaga
[**vagasGetByid**](VagasApi.md#vagasGetByid) | **GET** /v1.0/Vagas/{id} | Recupera uma vaga baseada em seu ID
[**vagasGetBypaginaregistrosPorPaginaquerysalarioMinimosalarioMaximotipoVinculofuncaoareaescolaridadedeficienciadisponibilidadesiglaEstadonomeCidadeempresadataIniciodataFimidOrigemoportunidadeordenacaocursoidCursocurriculoofereceCursofuncaoAgrupadoracidadeRegiaoidfFilialconfidencialcampanhausuarioFilialfacetField**](VagasApi.md#vagasGetBypaginaregistrosPorPaginaquerysalarioMinimosalarioMaximotipoVinculofuncaoareaescolaridadedeficienciadisponibilidadesiglaEstadonomeCidadeempresadataIniciodataFimidOrigemoportunidadeordenacaocursoidCursocurriculoofereceCursofuncaoAgrupadoracidadeRegiaoidfFilialconfidencialcampanhausuarioFilialfacetField) | **GET** /v1.0/Vagas | Pesquisa de vagas
[**vagasGetBypaginaregistrosPorPaginasomenteMinhasVagastipoVinculostatusVaga**](VagasApi.md#vagasGetBypaginaregistrosPorPaginasomenteMinhasVagastipoVinculostatusVaga) | **GET** /v1.0/Vagas/Empresa | Recupera a lista de vagas cadastradas para a api key informada
[**vagasGetEmpresaByid**](VagasApi.md#vagasGetEmpresaByid) | **GET** /v1.0/Vagas/Empresa/{id} | Recupera uma vaga baseada em seu ID
[**vagasObterCandidatosBycodigoVagapaginareturnType**](VagasApi.md#vagasObterCandidatosBycodigoVagapaginareturnType) | **GET** /v1.0/Vagas/ObterCandidatos | Lista os candidatos de uma determinada vaga.
[**vagasObterCurriculosCandidatosBycodigoVagapagina**](VagasApi.md#vagasObterCurriculosCandidatosBycodigoVagapagina) | **GET** /v1.0/Vagas/ObterCurriculosCandidatos | Lista os currículos completos dos candidatos de uma determinada vaga.
[**vagasObterMiniCurriculosCandidatosBycodigoVagapagina**](VagasApi.md#vagasObterMiniCurriculosCandidatosBycodigoVagapagina) | **GET** /v1.0/Vagas/ObterMiniCurriculosCandidatos | Lista os minicurrículos dos candidatos de uma determinada vaga.
[**vagasObterUltimosCandidatosBycodigoVagadatareturnType**](VagasApi.md#vagasObterUltimosCandidatosBycodigoVagadatareturnType) | **GET** /v1.0/Vagas/ObterUltimosCandidatos | Lista os candidatos de uma determinada vaga.
[**vagasObterUltimosCurriculosCandidatosBycodigoVagadata**](VagasApi.md#vagasObterUltimosCurriculosCandidatosBycodigoVagadata) | **GET** /v1.0/Vagas/ObterUltimosCurriculosCandidatos | Lista os currículos candidatos de uma determinada vaga.
[**vagasObterUltimosMiniCurriculosCandidatosBycodigoVagadata**](VagasApi.md#vagasObterUltimosMiniCurriculosCandidatosBycodigoVagadata) | **GET** /v1.0/Vagas/ObterUltimosMiniCurriculosCandidatos | Lista os minicurriculos candidatos de uma determinada vaga.
[**vagasSalvarByidVagavaga**](VagasApi.md#vagasSalvarByidVagavaga) | **PUT** /v1.0/Vagas/Salvar/{idVaga} | Atualiza uma vaga já cadastrada.
[**vagasSalvarByvaga**](VagasApi.md#vagasSalvarByvaga) | **POST** /v1.0/Vagas/Salvar | Cadastra uma nova vaga.


# **vagasAtualizarStatusByidnovoStatusVaga**
> \Swagger\Client\Model\InlineResponse2005Registros vagasAtualizarStatusByidnovoStatusVaga($id, $novo_status_vaga)

Recupera uma vaga baseada em seu ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$id = 56; // int | Id da Vaga a ser recuperada
$novo_status_vaga = "novo_status_vaga_example"; // string | Status a ser assumido pela vaga.               O status \"Inativa\", irá exibir a vaga como oportunidade para o candidato, informando que a vaga está fechada, mas a empresa aceita receber currículos com o perfil da vaga.              Para o status \"Arquivada\", A vaga deixará de ser exibida para os candidatos.

try {
    $result = $api_instance->vagasAtualizarStatusByidnovoStatusVaga($id, $novo_status_vaga);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasAtualizarStatusByidnovoStatusVaga: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id da Vaga a ser recuperada |
 **novo_status_vaga** | **string**| Status a ser assumido pela vaga.               O status \&quot;Inativa\&quot;, irá exibir a vaga como oportunidade para o candidato, informando que a vaga está fechada, mas a empresa aceita receber currículos com o perfil da vaga.              Para o status \&quot;Arquivada\&quot;, A vaga deixará de ser exibida para os candidatos. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005Registros**](../Model/InlineResponse2005Registros.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasCandidatadasBytipoVinculopaginaregistrosPorPagina**
> \Swagger\Client\Model\InlineResponse2008 vagasCandidatadasBytipoVinculopaginaregistrosPorPagina($tipo_vinculo, $pagina, $registros_por_pagina)

Consulta a vagas candidatadas.

As vagas serão retornadas para o usuário informado na ApiKey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$tipo_vinculo = "tipo_vinculo_example"; // string | Tipo do vínculo das vagas candidatadas
$pagina = 56; // int | Pagina a ser retornada
$registros_por_pagina = 56; // int | Informações adicionais para a candidatura

try {
    $result = $api_instance->vagasCandidatadasBytipoVinculopaginaregistrosPorPagina($tipo_vinculo, $pagina, $registros_por_pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasCandidatadasBytipoVinculopaginaregistrosPorPagina: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tipo_vinculo** | **string**| Tipo do vínculo das vagas candidatadas | [optional]
 **pagina** | **int**| Pagina a ser retornada | [optional]
 **registros_por_pagina** | **int**| Informações adicionais para a candidatura | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasCandidatarByidVagacandidatura**
> object vagasCandidatarByidVagacandidatura($id_vaga, $candidatura)

Realiza a candidatura a uma vaga.

A candidatura será efetuada para o usuário informado na ApiKey

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$id_vaga = 56; // int | Identificador da vaga
$candidatura = new \Swagger\Client\Model\Candidatura(); // \Swagger\Client\Model\Candidatura | Informações adicionais para a candidatura

try {
    $result = $api_instance->vagasCandidatarByidVagacandidatura($id_vaga, $candidatura);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasCandidatarByidVagacandidatura: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_vaga** | **int**| Identificador da vaga |
 **candidatura** | [**\Swagger\Client\Model\Candidatura**](../Model/Candidatura.md)| Informações adicionais para a candidatura |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasDadosDaEmpresaByidVaga**
> \Swagger\Client\Model\InlineResponse2007 vagasDadosDaEmpresaByidVaga($id_vaga)

Recupera os dados da empresa que anunciou a vaga

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$id_vaga = 56; // int | 

try {
    $result = $api_instance->vagasDadosDaEmpresaByidVaga($id_vaga);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasDadosDaEmpresaByidVaga: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_vaga** | **int**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasGetByid**
> \Swagger\Client\Model\InlineResponse2005Registros vagasGetByid($id)

Recupera uma vaga baseada em seu ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$id = 56; // int | Id da Vaga a ser recuperada

try {
    $result = $api_instance->vagasGetByid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasGetByid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id da Vaga a ser recuperada |

### Return type

[**\Swagger\Client\Model\InlineResponse2005Registros**](../Model/InlineResponse2005Registros.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasGetBypaginaregistrosPorPaginaquerysalarioMinimosalarioMaximotipoVinculofuncaoareaescolaridadedeficienciadisponibilidadesiglaEstadonomeCidadeempresadataIniciodataFimidOrigemoportunidadeordenacaocursoidCursocurriculoofereceCursofuncaoAgrupadoracidadeRegiaoidfFilialconfidencialcampanhausuarioFilialfacetField**
> \Swagger\Client\Model\InlineResponse2006 vagasGetBypaginaregistrosPorPaginaquerysalarioMinimosalarioMaximotipoVinculofuncaoareaescolaridadedeficienciadisponibilidadesiglaEstadonomeCidadeempresadataIniciodataFimidOrigemoportunidadeordenacaocursoidCursocurriculoofereceCursofuncaoAgrupadoracidadeRegiaoidfFilialconfidencialcampanhausuarioFilialfacetField($pagina, $registros_por_pagina, $query, $salario_minimo, $salario_maximo, $tipo_vinculo, $funcao, $area, $escolaridade, $deficiencia, $disponibilidade, $sigla_estado, $nome_cidade, $empresa, $data_inicio, $data_fim, $id_origem, $oportunidade, $ordenacao, $curso, $id_curso, $curriculo, $oferece_curso, $funcao_agrupadora, $cidade_regiao, $idf_filial, $confidencial, $campanha, $usuario_filial, $facet_field)

Pesquisa de vagas

Endpoint para pesquisa de vagas.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$pagina = 56; // int | Página a ser retornada. Iniciando em 1.
$registros_por_pagina = 56; // int | Número de registros por página
$query = "query_example"; // string | Pesquisa textual
$salario_minimo = 1.2; // double | Salário mínimo oferecido pela vaga
$salario_maximo = 1.2; // double | Salário máximo oferecido pela vaga
$tipo_vinculo = array("tipo_vinculo_example"); // string[] | Tipo de vínculo desejado
$funcao = array("funcao_example"); // string[] | Funcão da vaga
$area = array("area_example"); // string[] | Área de atuação
$escolaridade = array("escolaridade_example"); // string[] | Escolaridade
$deficiencia = array("deficiencia_example"); // string[] | Deficiência para vagas BNE
$disponibilidade = array("disponibilidade_example"); // string[] | Disponibilidade requerida para a vaga
$sigla_estado = array("sigla_estado_example"); // string[] | Nomes das cidades desejadas
$nome_cidade = array("nome_cidade_example"); // string[] | Nomes das cidades desejadas
$empresa = array("empresa_example"); // string[] | Nomes das empresas anunciantes
$data_inicio = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Limite inferior para a abertura da vaga
$data_fim = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Limite superior para a abertura da vaga
$id_origem = array(56); // int[] | Origem das vagas, empresas que possuem STC
$oportunidade = true; // bool | Trazer oportunidade (vagas abertas a mais de 60 dias)
$ordenacao = "ordenacao_example"; // string | Ordenação ex: \"Dta_Abertura asc, Des_Funcao desc\"
$curso = array("curso_example"); // string[] | Cursos pesquisados com like
$id_curso = array(56); // int[] | Pesquisa acertiva dos curso
$curriculo = 56; // int | Curriculo do BNE - para não trazer as vagas da empresa que o candidato bloqueou.
$oferece_curso = true; // bool | Vagas de empresa que oferecem curso
$funcao_agrupadora = 56; // int | Vai retoranar as vagas com funções similares a pesquisada.
$cidade_regiao = 56; // int | Alem das vaga da cidade ira trazer as vagas da região metropolitana.
$idf_filial = 56; // int | Buscar vagas da filial
$confidencial = true; // bool | Mostrar vagas Confidenciais (vaga de Empresas que optaram a não aparecer como anunciante na vaga)
$campanha = true; // bool | Vaga de campanha
$usuario_filial = array(56); // int[] | Quem Anunciou a vaga.
$facet_field = array("facet_field_example"); // string[] | Campos para os quais a totalização deve ser retornada

try {
    $result = $api_instance->vagasGetBypaginaregistrosPorPaginaquerysalarioMinimosalarioMaximotipoVinculofuncaoareaescolaridadedeficienciadisponibilidadesiglaEstadonomeCidadeempresadataIniciodataFimidOrigemoportunidadeordenacaocursoidCursocurriculoofereceCursofuncaoAgrupadoracidadeRegiaoidfFilialconfidencialcampanhausuarioFilialfacetField($pagina, $registros_por_pagina, $query, $salario_minimo, $salario_maximo, $tipo_vinculo, $funcao, $area, $escolaridade, $deficiencia, $disponibilidade, $sigla_estado, $nome_cidade, $empresa, $data_inicio, $data_fim, $id_origem, $oportunidade, $ordenacao, $curso, $id_curso, $curriculo, $oferece_curso, $funcao_agrupadora, $cidade_regiao, $idf_filial, $confidencial, $campanha, $usuario_filial, $facet_field);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasGetBypaginaregistrosPorPaginaquerysalarioMinimosalarioMaximotipoVinculofuncaoareaescolaridadedeficienciadisponibilidadesiglaEstadonomeCidadeempresadataIniciodataFimidOrigemoportunidadeordenacaocursoidCursocurriculoofereceCursofuncaoAgrupadoracidadeRegiaoidfFilialconfidencialcampanhausuarioFilialfacetField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagina** | **int**| Página a ser retornada. Iniciando em 1. | [optional]
 **registros_por_pagina** | **int**| Número de registros por página | [optional]
 **query** | **string**| Pesquisa textual | [optional]
 **salario_minimo** | **double**| Salário mínimo oferecido pela vaga | [optional]
 **salario_maximo** | **double**| Salário máximo oferecido pela vaga | [optional]
 **tipo_vinculo** | [**string[]**](../Model/string.md)| Tipo de vínculo desejado | [optional]
 **funcao** | [**string[]**](../Model/string.md)| Funcão da vaga | [optional]
 **area** | [**string[]**](../Model/string.md)| Área de atuação | [optional]
 **escolaridade** | [**string[]**](../Model/string.md)| Escolaridade | [optional]
 **deficiencia** | [**string[]**](../Model/string.md)| Deficiência para vagas BNE | [optional]
 **disponibilidade** | [**string[]**](../Model/string.md)| Disponibilidade requerida para a vaga | [optional]
 **sigla_estado** | [**string[]**](../Model/string.md)| Nomes das cidades desejadas | [optional]
 **nome_cidade** | [**string[]**](../Model/string.md)| Nomes das cidades desejadas | [optional]
 **empresa** | [**string[]**](../Model/string.md)| Nomes das empresas anunciantes | [optional]
 **data_inicio** | **\DateTime**| Limite inferior para a abertura da vaga | [optional]
 **data_fim** | **\DateTime**| Limite superior para a abertura da vaga | [optional]
 **id_origem** | [**int[]**](../Model/int.md)| Origem das vagas, empresas que possuem STC | [optional]
 **oportunidade** | **bool**| Trazer oportunidade (vagas abertas a mais de 60 dias) | [optional]
 **ordenacao** | **string**| Ordenação ex: \&quot;Dta_Abertura asc, Des_Funcao desc\&quot; | [optional]
 **curso** | [**string[]**](../Model/string.md)| Cursos pesquisados com like | [optional]
 **id_curso** | [**int[]**](../Model/int.md)| Pesquisa acertiva dos curso | [optional]
 **curriculo** | **int**| Curriculo do BNE - para não trazer as vagas da empresa que o candidato bloqueou. | [optional]
 **oferece_curso** | **bool**| Vagas de empresa que oferecem curso | [optional]
 **funcao_agrupadora** | **int**| Vai retoranar as vagas com funções similares a pesquisada. | [optional]
 **cidade_regiao** | **int**| Alem das vaga da cidade ira trazer as vagas da região metropolitana. | [optional]
 **idf_filial** | **int**| Buscar vagas da filial | [optional]
 **confidencial** | **bool**| Mostrar vagas Confidenciais (vaga de Empresas que optaram a não aparecer como anunciante na vaga) | [optional]
 **campanha** | **bool**| Vaga de campanha | [optional]
 **usuario_filial** | [**int[]**](../Model/int.md)| Quem Anunciou a vaga. | [optional]
 **facet_field** | [**string[]**](../Model/string.md)| Campos para os quais a totalização deve ser retornada | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasGetBypaginaregistrosPorPaginasomenteMinhasVagastipoVinculostatusVaga**
> \Swagger\Client\Model\InlineResponse2005 vagasGetBypaginaregistrosPorPaginasomenteMinhasVagastipoVinculostatusVaga($pagina, $registros_por_pagina, $somente_minhas_vagas, $tipo_vinculo, $status_vaga)

Recupera a lista de vagas cadastradas para a api key informada

Endpoint utilizado para acesso às vagas da empresa. As vagas retornadas serão filtradas baseadas nas informações presentes na APIKey passada.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$pagina = 56; // int | Página que deve ser retornada. A primeira página é \"1\".
$registros_por_pagina = 56; // int | Número de registros a ser retornado por página. Default: 10
$somente_minhas_vagas = true; // bool | Se true, retorna somente as vagas que foram anunciadas pelo CPF presente na ApiKey. Se false, retorna as vagas cadastradas para a empresa informada no APIKey.
$tipo_vinculo = "tipo_vinculo_example"; // string | Tipo de vínculo utilizado para filtrar as vagas.
$status_vaga = "status_vaga_example"; // string | Status da vaga.

try {
    $result = $api_instance->vagasGetBypaginaregistrosPorPaginasomenteMinhasVagastipoVinculostatusVaga($pagina, $registros_por_pagina, $somente_minhas_vagas, $tipo_vinculo, $status_vaga);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasGetBypaginaregistrosPorPaginasomenteMinhasVagastipoVinculostatusVaga: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pagina** | **int**| Página que deve ser retornada. A primeira página é \&quot;1\&quot;. | [optional]
 **registros_por_pagina** | **int**| Número de registros a ser retornado por página. Default: 10 | [optional]
 **somente_minhas_vagas** | **bool**| Se true, retorna somente as vagas que foram anunciadas pelo CPF presente na ApiKey. Se false, retorna as vagas cadastradas para a empresa informada no APIKey. | [optional]
 **tipo_vinculo** | **string**| Tipo de vínculo utilizado para filtrar as vagas. | [optional]
 **status_vaga** | **string**| Status da vaga. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasGetEmpresaByid**
> \Swagger\Client\Model\InlineResponse2005Registros vagasGetEmpresaByid($id)

Recupera uma vaga baseada em seu ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$id = 56; // int | Id da Vaga a ser recuperada

try {
    $result = $api_instance->vagasGetEmpresaByid($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasGetEmpresaByid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id da Vaga a ser recuperada |

### Return type

[**\Swagger\Client\Model\InlineResponse2005Registros**](../Model/InlineResponse2005Registros.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasObterCandidatosBycodigoVagapaginareturnType**
> \Swagger\Client\Model\InlineResponse20012 vagasObterCandidatosBycodigoVagapaginareturnType($codigo_vaga, $pagina, $return_type)

Lista os candidatos de uma determinada vaga.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$codigo_vaga = 56; // int | Código da vaga.
$pagina = 56; // int | Número da página que deseja acessar. O valor padrão é 1
$return_type = "return_type_example"; // string | Formato desejado para os currículos candidatos. O valor padrão é 'Minicurriculo'

try {
    $result = $api_instance->vagasObterCandidatosBycodigoVagapaginareturnType($codigo_vaga, $pagina, $return_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasObterCandidatosBycodigoVagapaginareturnType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codigo_vaga** | **int**| Código da vaga. |
 **pagina** | **int**| Número da página que deseja acessar. O valor padrão é 1 | [optional]
 **return_type** | **string**| Formato desejado para os currículos candidatos. O valor padrão é &#39;Minicurriculo&#39; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasObterCurriculosCandidatosBycodigoVagapagina**
> \Swagger\Client\Model\InlineResponse20011 vagasObterCurriculosCandidatosBycodigoVagapagina($codigo_vaga, $pagina)

Lista os currículos completos dos candidatos de uma determinada vaga.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$codigo_vaga = 56; // int | Código da vaga.
$pagina = 56; // int | Número da página que deseja acessar. O valor padrão é 1

try {
    $result = $api_instance->vagasObterCurriculosCandidatosBycodigoVagapagina($codigo_vaga, $pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasObterCurriculosCandidatosBycodigoVagapagina: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codigo_vaga** | **int**| Código da vaga. |
 **pagina** | **int**| Número da página que deseja acessar. O valor padrão é 1 | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasObterMiniCurriculosCandidatosBycodigoVagapagina**
> \Swagger\Client\Model\InlineResponse20010 vagasObterMiniCurriculosCandidatosBycodigoVagapagina($codigo_vaga, $pagina)

Lista os minicurrículos dos candidatos de uma determinada vaga.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$codigo_vaga = 56; // int | Código da vaga.
$pagina = 56; // int | Número da página que deseja acessar. O valor padrão é 1

try {
    $result = $api_instance->vagasObterMiniCurriculosCandidatosBycodigoVagapagina($codigo_vaga, $pagina);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasObterMiniCurriculosCandidatosBycodigoVagapagina: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codigo_vaga** | **int**| Código da vaga. |
 **pagina** | **int**| Número da página que deseja acessar. O valor padrão é 1 | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasObterUltimosCandidatosBycodigoVagadatareturnType**
> \Swagger\Client\Model\InlineResponse20012Curriculos[] vagasObterUltimosCandidatosBycodigoVagadatareturnType($codigo_vaga, $data, $return_type)

Lista os candidatos de uma determinada vaga.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$codigo_vaga = 56; // int | Código da vaga.
$data = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Data e hora a partir de qual as candidaturas devem ser recuperadas.
$return_type = "return_type_example"; // string | Formato desejado para os currículos candidatos. O valor padrão é 'Minicurriculo'

try {
    $result = $api_instance->vagasObterUltimosCandidatosBycodigoVagadatareturnType($codigo_vaga, $data, $return_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasObterUltimosCandidatosBycodigoVagadatareturnType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codigo_vaga** | **int**| Código da vaga. |
 **data** | **\DateTime**| Data e hora a partir de qual as candidaturas devem ser recuperadas. |
 **return_type** | **string**| Formato desejado para os currículos candidatos. O valor padrão é &#39;Minicurriculo&#39; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012Curriculos[]**](../Model/InlineResponse20012Curriculos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasObterUltimosCurriculosCandidatosBycodigoVagadata**
> \Swagger\Client\Model\InlineResponse2002[] vagasObterUltimosCurriculosCandidatosBycodigoVagadata($codigo_vaga, $data)

Lista os currículos candidatos de uma determinada vaga.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$codigo_vaga = 56; // int | Código da vaga.
$data = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Data e hora a partir de qual as candidaturas devem ser recuperadas.

try {
    $result = $api_instance->vagasObterUltimosCurriculosCandidatosBycodigoVagadata($codigo_vaga, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasObterUltimosCurriculosCandidatosBycodigoVagadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codigo_vaga** | **int**| Código da vaga. |
 **data** | **\DateTime**| Data e hora a partir de qual as candidaturas devem ser recuperadas. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002[]**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasObterUltimosMiniCurriculosCandidatosBycodigoVagadata**
> \Swagger\Client\Model\InlineResponse2003Curriculos[] vagasObterUltimosMiniCurriculosCandidatosBycodigoVagadata($codigo_vaga, $data)

Lista os minicurriculos candidatos de uma determinada vaga.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$codigo_vaga = 56; // int | Código da vaga.
$data = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Data e hora a partir de qual as candidaturas devem ser recuperadas.

try {
    $result = $api_instance->vagasObterUltimosMiniCurriculosCandidatosBycodigoVagadata($codigo_vaga, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasObterUltimosMiniCurriculosCandidatosBycodigoVagadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **codigo_vaga** | **int**| Código da vaga. |
 **data** | **\DateTime**| Data e hora a partir de qual as candidaturas devem ser recuperadas. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003Curriculos[]**](../Model/InlineResponse2003Curriculos.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasSalvarByidVagavaga**
> \Swagger\Client\Model\InlineResponse2009 vagasSalvarByidVagavaga($id_vaga, $vaga)

Atualiza uma vaga já cadastrada.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$id_vaga = 56; // int | Identificador da vaga a ser atualizada
$vaga = new \Swagger\Client\Model\Vaga1(); // \Swagger\Client\Model\Vaga1 | Vaga que será publicada na filial do usuário.

try {
    $result = $api_instance->vagasSalvarByidVagavaga($id_vaga, $vaga);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasSalvarByidVagavaga: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_vaga** | **int**| Identificador da vaga a ser atualizada |
 **vaga** | [**\Swagger\Client\Model\Vaga1**](../Model/Vaga1.md)| Vaga que será publicada na filial do usuário. |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vagasSalvarByvaga**
> \Swagger\Client\Model\InlineResponse2009 vagasSalvarByvaga($vaga)

Cadastra uma nova vaga.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\VagasApi();
$vaga = new \Swagger\Client\Model\Vaga(); // \Swagger\Client\Model\Vaga | Vaga que será publicada na filial do usuário.

try {
    $result = $api_instance->vagasSalvarByvaga($vaga);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VagasApi->vagasSalvarByvaga: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vaga** | [**\Swagger\Client\Model\Vaga**](../Model/Vaga.md)| Vaga que será publicada na filial do usuário. |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

