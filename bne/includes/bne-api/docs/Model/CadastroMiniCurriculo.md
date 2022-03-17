# CadastroMiniCurriculo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Email do candidato | [optional] 
**cpf** | **double** | CPF do candidato | 
**data_nascimento** | [**\DateTime**](\DateTime.md) | Data dde nascimento do candidato | 
**ddd_celular** | **int** | DDD do celular do candidato | 
**numero_celular** | **double** | Número do celular do candidato | 
**nome** | **string** | Nome do candidato | 
**sexo** | **string** | Sexo do candidato | 
**cidade** | **string** | Nome da cidade no formato \&quot;NomeCidade/SiglaEstado\&quot; (Ex.: São Paulo/SP) | 
**escolaridade** | **string** | Um dos valores presentes na tabela Escolaridades.  Caso o valor não esteja presente nesta tabela, será desconsiderado. | 
**aceito_estagio** | **bool** | Flag indicando se o candidato aceita trabalhar como estagiário  Considerados somente para as escolaridades \&quot;Ensino Médio Incompleto\&quot;,   \&quot;Técnico/Pós Médio Incompleto\&quot;, \&quot;Tecnólogo Incompleto\&quot; e \&quot;Superior Incompleto\&quot; | [optional] 
**funcoes_pretendidas** | [**\Swagger\Client\Model\InlineResponse200MiniCurriculoFuncoesPretendidas[]**](InlineResponse200MiniCurriculoFuncoesPretendidas.md) | Funções pretendidas pelo candidato | [optional] 
**pretensao_salarial** | **double** | Pretensão salarial do candidato | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


