# Swagger\Client\TabelasApi

All URIs are relative to *http://gatewayapi.bne.com.br/apibne*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tabelasAreas**](TabelasApi.md#tabelasAreas) | **GET** /v1.0/Tabelas/Areas | Lista de áreas
[**tabelasCategoriasHabilitacao**](TabelasApi.md#tabelasCategoriasHabilitacao) | **GET** /v1.0/Tabelas/CategoriasHabilitacao | Lista de Categorias de Habilitação
[**tabelasCidadesBynomeParcialnumeroRegistros**](TabelasApi.md#tabelasCidadesBynomeParcialnumeroRegistros) | **GET** /v1.0/Tabelas/Cidades | Lista de Cidades
[**tabelasCursosBynomeParcialnumeroRegistros**](TabelasApi.md#tabelasCursosBynomeParcialnumeroRegistros) | **GET** /v1.0/Tabelas/Cursos | Lista de cursos.
[**tabelasDeficiencias**](TabelasApi.md#tabelasDeficiencias) | **GET** /v1.0/Tabelas/Deficiencias | Lista de Deficiências
[**tabelasEscolaridades**](TabelasApi.md#tabelasEscolaridades) | **GET** /v1.0/Tabelas/Escolaridades | Lista de Escolaridades
[**tabelasEstadosCivis**](TabelasApi.md#tabelasEstadosCivis) | **GET** /v1.0/Tabelas/EstadosCivis | Lista de Estados Civis
[**tabelasFuncoesBynomeParcialnumeroRegistros**](TabelasApi.md#tabelasFuncoesBynomeParcialnumeroRegistros) | **GET** /v1.0/Tabelas/Funcoes | Lista de funções.
[**tabelasIdiomas**](TabelasApi.md#tabelasIdiomas) | **GET** /v1.0/Tabelas/Idiomas | Lista de Idiomas
[**tabelasInstituicoesBynomeParcialnivelCursonumeroRegistros**](TabelasApi.md#tabelasInstituicoesBynomeParcialnivelCursonumeroRegistros) | **GET** /v1.0/Tabelas/Instituicoes | Instituições de insino.
[**tabelasRacas**](TabelasApi.md#tabelasRacas) | **GET** /v1.0/Tabelas/Racas | Lista de Raças
[**tabelasTiposVeiculos**](TabelasApi.md#tabelasTiposVeiculos) | **GET** /v1.0/Tabelas/TiposVeiculos | Lista de Tipos de Veículo


# **tabelasAreas**
> string[] tabelasAreas()

Lista de áreas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();

try {
    $result = $api_instance->tabelasAreas();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasAreas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasCategoriasHabilitacao**
> string[] tabelasCategoriasHabilitacao()

Lista de Categorias de Habilitação

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();

try {
    $result = $api_instance->tabelasCategoriasHabilitacao();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasCategoriasHabilitacao: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasCidadesBynomeParcialnumeroRegistros**
> string[] tabelasCidadesBynomeParcialnumeroRegistros($nome_parcial, $numero_registros)

Lista de Cidades

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();
$nome_parcial = "nome_parcial_example"; // string | Nome parcial para pesquisa de cidades no BNE.
$numero_registros = 56; // int | Número de registros a ser retornado.

try {
    $result = $api_instance->tabelasCidadesBynomeParcialnumeroRegistros($nome_parcial, $numero_registros);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasCidadesBynomeParcialnumeroRegistros: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nome_parcial** | **string**| Nome parcial para pesquisa de cidades no BNE. |
 **numero_registros** | **int**| Número de registros a ser retornado. | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasCursosBynomeParcialnumeroRegistros**
> string[] tabelasCursosBynomeParcialnumeroRegistros($nome_parcial, $numero_registros)

Lista de cursos.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();
$nome_parcial = "nome_parcial_example"; // string | Nome parcial para pesquisa dos cursos do BNE.
$numero_registros = 56; // int | Número de registros a ser retornado.

try {
    $result = $api_instance->tabelasCursosBynomeParcialnumeroRegistros($nome_parcial, $numero_registros);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasCursosBynomeParcialnumeroRegistros: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nome_parcial** | **string**| Nome parcial para pesquisa dos cursos do BNE. |
 **numero_registros** | **int**| Número de registros a ser retornado. | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasDeficiencias**
> string[] tabelasDeficiencias()

Lista de Deficiências

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();

try {
    $result = $api_instance->tabelasDeficiencias();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasDeficiencias: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasEscolaridades**
> string[] tabelasEscolaridades()

Lista de Escolaridades

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();

try {
    $result = $api_instance->tabelasEscolaridades();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasEscolaridades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasEstadosCivis**
> string[] tabelasEstadosCivis()

Lista de Estados Civis

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();

try {
    $result = $api_instance->tabelasEstadosCivis();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasEstadosCivis: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasFuncoesBynomeParcialnumeroRegistros**
> string[] tabelasFuncoesBynomeParcialnumeroRegistros($nome_parcial, $numero_registros)

Lista de funções.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();
$nome_parcial = "nome_parcial_example"; // string | Nome parcial para pesquisa das funções do BNE.
$numero_registros = 56; // int | Número de registros a ser retornado.

try {
    $result = $api_instance->tabelasFuncoesBynomeParcialnumeroRegistros($nome_parcial, $numero_registros);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasFuncoesBynomeParcialnumeroRegistros: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nome_parcial** | **string**| Nome parcial para pesquisa das funções do BNE. |
 **numero_registros** | **int**| Número de registros a ser retornado. | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasIdiomas**
> string[] tabelasIdiomas()

Lista de Idiomas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();

try {
    $result = $api_instance->tabelasIdiomas();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasIdiomas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasInstituicoesBynomeParcialnivelCursonumeroRegistros**
> string[] tabelasInstituicoesBynomeParcialnivelCursonumeroRegistros($nome_parcial, $nivel_curso, $numero_registros)

Instituições de insino.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();
$nome_parcial = "nome_parcial_example"; // string | Nome parcial para pesquisa das instituições.
$nivel_curso = "nivel_curso_example"; // string | Nível do curso a ser considerado. Envie vazio caso seja indiferente.
$numero_registros = 56; // int | Número de registros a ser retornado. Default: 10.

try {
    $result = $api_instance->tabelasInstituicoesBynomeParcialnivelCursonumeroRegistros($nome_parcial, $nivel_curso, $numero_registros);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasInstituicoesBynomeParcialnivelCursonumeroRegistros: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nome_parcial** | **string**| Nome parcial para pesquisa das instituições. |
 **nivel_curso** | **string**| Nível do curso a ser considerado. Envie vazio caso seja indiferente. | [optional]
 **numero_registros** | **int**| Número de registros a ser retornado. Default: 10. | [optional]

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasRacas**
> string[] tabelasRacas()

Lista de Raças

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();

try {
    $result = $api_instance->tabelasRacas();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasRacas: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tabelasTiposVeiculos**
> string[] tabelasTiposVeiculos()

Lista de Tipos de Veículo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TabelasApi();

try {
    $result = $api_instance->tabelasTiposVeiculos();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TabelasApi->tabelasTiposVeiculos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

