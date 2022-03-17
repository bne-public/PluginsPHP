# Swagger\Client\EmpresaApi

All URIs are relative to *http://gatewayapi.bne.com.br/apibne*

Method | HTTP request | Description
------------- | ------------- | -------------
[**empresaObterSelecionadoraBycpfnascimento**](EmpresaApi.md#empresaObterSelecionadoraBycpfnascimento) | **GET** /v1.0/Empresa/ObterSelecionadora | Retorna uma selecionadora a partir do CPF e Data de Nascimento.


# **empresaObterSelecionadoraBycpfnascimento**
> \Swagger\Client\Model\InlineResponse2004 empresaObterSelecionadoraBycpfnascimento($cpf, $nascimento)

Retorna uma selecionadora a partir do CPF e Data de Nascimento.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EmpresaApi();
$cpf = 1.2; // double | Cpf da selecionadora desejado
$nascimento = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Data de nascimento do currículo desejado

try {
    $result = $api_instance->empresaObterSelecionadoraBycpfnascimento($cpf, $nascimento);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmpresaApi->empresaObterSelecionadoraBycpfnascimento: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cpf** | **double**| Cpf da selecionadora desejado |
 **nascimento** | **\DateTime**| Data de nascimento do currículo desejado |

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

