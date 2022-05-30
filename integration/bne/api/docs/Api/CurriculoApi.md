# Swagger\Client\CurriculoApi

All URIs are relative to *http://gatewayapi.bne.com.br/apibne*

Method | HTTP request | Description
------------- | ------------- | -------------
[**curriculoDownloadArquivoBycpf**](CurriculoApi.md#curriculoDownloadArquivoBycpf) | **GET** /v1.0/Curriculo/DownloadArquivo | 
[**curriculoGetCadastroCVBycpf**](CurriculoApi.md#curriculoGetCadastroCVBycpf) | **GET** /v1.0/Curriculo/CadastroCV | Obtem os dados do cadastro do currículo.
[**curriculoObterCVByIdCurriculoFlgDadosdeContato**](CurriculoApi.md#curriculoObterCVByIdCurriculoFlgDadosdeContato) | **GET** /v1.0/Curriculo/ObterCV | Retorna o curriculo selecionado pelo usuario a partir do IdCurriculo.
[**curriculoObterCVPorCpfBycpfnascimento**](CurriculoApi.md#curriculoObterCVPorCpfBycpfnascimento) | **GET** /v1.0/Curriculo/ObterCVPorCpf | Retorna o curriculo selecionado pelo usuario a partir do CPF e Data de Nascimento.
[**curriculoObterCadastroCVByIdCurriculoFlgDadosdeContato**](CurriculoApi.md#curriculoObterCadastroCVByIdCurriculoFlgDadosdeContato) | **GET** /v1.0/Curriculo/ObterCadastroCV | Retorna o cadastro do curriculo selecionado pelo usuario a partir do IdCurriculo.
[**curriculoPesquisaAvancadaByfiltros**](CurriculoApi.md#curriculoPesquisaAvancadaByfiltros) | **POST** /v1.0/Curriculo/PesquisaAvancada | Retorna uma lista de currículos baseada nos parâmetros informados.
[**curriculoPostCadastroCVBycurriculo**](CurriculoApi.md#curriculoPostCadastroCVBycurriculo) | **POST** /v1.0/Curriculo/CadastroCV | Cadastra um novo currículo
[**curriculoPostFotoByfile**](CurriculoApi.md#curriculoPostFotoByfile) | **POST** /v1.0/Curriculo/Foto | Atualiza a foto do currículo
[**curriculoPutCadastroCVBycurriculo**](CurriculoApi.md#curriculoPutCadastroCVBycurriculo) | **PUT** /v1.0/Curriculo/CadastroCV | Atualiza um currículo
[**curriculoValidateImageByba**](CurriculoApi.md#curriculoValidateImageByba) | **POST** /v1.0/Curriculo/ValidateImage | Valida o MimeType de uma imagem, ou se consegue abrir o arquivo corretamente usando o objeto Image


# **curriculoDownloadArquivoBycpf**
> object curriculoDownloadArquivoBycpf($cpf)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$cpf = 1.2; // double | 

try {
    $result = $api_instance->curriculoDownloadArquivoBycpf($cpf);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoDownloadArquivoBycpf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cpf** | **double**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **curriculoGetCadastroCVBycpf**
> \Swagger\Client\Model\InlineResponse200 curriculoGetCadastroCVBycpf($cpf)

Obtem os dados do cadastro do currículo.

Endpoint utilizado para a obtenção dos dados de cadastro do candidato.              O currículo retornado será o pertencente ao CPF informado na apikey ou do CPF informado na query string.              Esse endpoint deve ser utilizado para a exibição dos dados exclusivamente aos candidatos ou para sistemas internos do BNE.              Para a exibição de currículos às empresas, o endpoint /v1.0/Curriculo/ObterCV deve ser utilizado.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$cpf = 1.2; // double | CPF do currículo a ser carregado. Somente usuários administradores podem informar esse parâmetro.

try {
    $result = $api_instance->curriculoGetCadastroCVBycpf($cpf);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoGetCadastroCVBycpf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cpf** | **double**| CPF do currículo a ser carregado. Somente usuários administradores podem informar esse parâmetro. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **curriculoObterCVByIdCurriculoFlgDadosdeContato**
> \Swagger\Client\Model\InlineResponse2002 curriculoObterCVByIdCurriculoFlgDadosdeContato($id_curriculo, $flg_dadosde_contato)

Retorna o curriculo selecionado pelo usuario a partir do IdCurriculo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$id_curriculo = 56; // int | Id do currículo a ser retornado.
$flg_dadosde_contato = true; // bool | Indica se deseja que os dados de contato devem ser retornados. Se true, a consulta será contabilizada como visualização do currículo e será descontada do plano do cliente.

try {
    $result = $api_instance->curriculoObterCVByIdCurriculoFlgDadosdeContato($id_curriculo, $flg_dadosde_contato);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoObterCVByIdCurriculoFlgDadosdeContato: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_curriculo** | **int**| Id do currículo a ser retornado. |
 **flg_dadosde_contato** | **bool**| Indica se deseja que os dados de contato devem ser retornados. Se true, a consulta será contabilizada como visualização do currículo e será descontada do plano do cliente. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **curriculoObterCVPorCpfBycpfnascimento**
> \Swagger\Client\Model\InlineResponse2002 curriculoObterCVPorCpfBycpfnascimento($cpf, $nascimento)

Retorna o curriculo selecionado pelo usuario a partir do CPF e Data de Nascimento.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$cpf = 1.2; // double | Cpf do curriculo desejado
$nascimento = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Data de nascimento do currículo desejado

try {
    $result = $api_instance->curriculoObterCVPorCpfBycpfnascimento($cpf, $nascimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoObterCVPorCpfBycpfnascimento: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cpf** | **double**| Cpf do curriculo desejado |
 **nascimento** | **\DateTime**| Data de nascimento do currículo desejado |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **curriculoObterCadastroCVByIdCurriculoFlgDadosdeContato**
> \Swagger\Client\Model\InlineResponse200 curriculoObterCadastroCVByIdCurriculoFlgDadosdeContato($id_curriculo, $flg_dadosde_contato)

Retorna o cadastro do curriculo selecionado pelo usuario a partir do IdCurriculo.

Esse endpoint deve ser utilizado para que a selecionadora tenha acesso às mesmas informações do cadastro do currículo do candidato.  Para recuperar as informações do currículos para o CPF informado na apikey, utilize o endpoint CadastroCv com o method GET.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$id_curriculo = 56; // int | Id do currículo a ser retornado.
$flg_dadosde_contato = true; // bool | Indica se deseja que os dados de contato devem ser retornados. Se true, a consulta será contabilizada como visualização do currículo e será descontada do plano do cliente.

try {
    $result = $api_instance->curriculoObterCadastroCVByIdCurriculoFlgDadosdeContato($id_curriculo, $flg_dadosde_contato);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoObterCadastroCVByIdCurriculoFlgDadosdeContato: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_curriculo** | **int**| Id do currículo a ser retornado. |
 **flg_dadosde_contato** | **bool**| Indica se deseja que os dados de contato devem ser retornados. Se true, a consulta será contabilizada como visualização do currículo e será descontada do plano do cliente. |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **curriculoPesquisaAvancadaByfiltros**
> \Swagger\Client\Model\InlineResponse2003 curriculoPesquisaAvancadaByfiltros($filtros)

Retorna uma lista de currículos baseada nos parâmetros informados.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$filtros = new \Swagger\Client\Model\Filtros(); // \Swagger\Client\Model\Filtros | Objeto com os filtros a serem aplicados na pesquisa de curriculos

try {
    $result = $api_instance->curriculoPesquisaAvancadaByfiltros($filtros);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoPesquisaAvancadaByfiltros: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filtros** | [**\Swagger\Client\Model\Filtros**](../Model/Filtros.md)| Objeto com os filtros a serem aplicados na pesquisa de curriculos |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **curriculoPostCadastroCVBycurriculo**
> \Swagger\Client\Model\InlineResponse2001 curriculoPostCadastroCVBycurriculo($curriculo)

Cadastra um novo currículo

Endpoint utilizado somente para a inserção de novos currículos.               Se um currículo já existe for informado, a chamada será respondida com um erro.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$curriculo = new \Swagger\Client\Model\Curriculo1(); // \Swagger\Client\Model\Curriculo1 | 

try {
    $result = $api_instance->curriculoPostCadastroCVBycurriculo($curriculo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoPostCadastroCVBycurriculo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **curriculo** | [**\Swagger\Client\Model\Curriculo1**](../Model/Curriculo1.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **curriculoPostFotoByfile**
> \Swagger\Client\Model\InlineResponse2001 curriculoPostFotoByfile($file)

Atualiza a foto do currículo

A foto será definida para o pertencente ao CPF informado na apikey.              O tamanho mínimo para uma imagem é de 100px X 100px.              Para apagar a foto presente no currículo, efetue um POST sem nenhum dado.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $api_instance->curriculoPostFotoByfile($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoPostFotoByfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **curriculoPutCadastroCVBycurriculo**
> \Swagger\Client\Model\InlineResponse2001 curriculoPutCadastroCVBycurriculo($curriculo)

Atualiza um currículo

Endpoint utilizado somente para a atualiza de currículos.               O currículo alterado será o pertencente ao CPF informado na apikey.              As propriedades são opcionais e não serão atualizadas caso não sejam informadas.              Para apagar o valor da propriedade, indique um valor vazio na atualização.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$curriculo = new \Swagger\Client\Model\Curriculo(); // \Swagger\Client\Model\Curriculo | Dados do currículo para atualização

try {
    $result = $api_instance->curriculoPutCadastroCVBycurriculo($curriculo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoPutCadastroCVBycurriculo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **curriculo** | [**\Swagger\Client\Model\Curriculo**](../Model/Curriculo.md)| Dados do currículo para atualização |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **curriculoValidateImageByba**
> bool curriculoValidateImageByba($ba)

Valida o MimeType de uma imagem, ou se consegue abrir o arquivo corretamente usando o objeto Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CurriculoApi();
$ba = "ba_example"; // string | A imagem

try {
    $result = $api_instance->curriculoValidateImageByba($ba);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurriculoApi->curriculoValidateImageByba: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ba** | **string**| A imagem |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

