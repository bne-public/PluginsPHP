# InlineResponse200FormacaoCursosFormacao

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nivel_formacao** | **string** | Nível atual da formação   Um dos valores presentes na tabela Escolaridades. | 
**instituicao** | **string** | Nome da instituição onde está cursando ou foi cursado  Obrigatório quando o NivelFormacao igual a   \&quot;Técnico/Pós-Médio Incompleto\&quot;,  \&quot;Técnico/Pós-Médio Completo\&quot;,  \&quot;Tecnólogo Incompleto\&quot;,  \&quot;Superior Incompleto\&quot;,  \&quot;Tecnólogo Completo\&quot;,  \&quot;Superior Completo\&quot;,  \&quot;Pós Graduação / Especialização\&quot;,  \&quot;Mestrado\&quot;,  \&quot;Doutorado\&quot; | [optional] 
**nome_curso** | **string** | Nome do curso  Recomenda-se o envio de um dos valores presentes na tabela Cursos.  Obrigatório quando o NivelFormacao igual a   \&quot;Técnico/Pós-Médio Incompleto\&quot;,  \&quot;Técnico/Pós-Médio Completo\&quot;,  \&quot;Tecnólogo Incompleto\&quot;,  \&quot;Superior Incompleto\&quot;,  \&quot;Tecnólogo Completo\&quot;,  \&quot;Superior Completo\&quot;,  \&quot;Pós Graduação / Especialização\&quot;,  \&quot;Mestrado\&quot;,  \&quot;Doutorado\&quot; | [optional] 
**cidade** | **string** | Nome da cidade onde foi cursado  Formato: \&quot;NomeCidade/SiglaEstado\&quot; (Ex.: São Paulo/SP)  Obrigatório quando o NivelFormacao igual a   \&quot;Técnico/Pós-Médio Incompleto\&quot;,  \&quot;Técnico/Pós-Médio Completo\&quot;,  \&quot;Tecnólogo Incompleto\&quot;,  \&quot;Superior Incompleto\&quot;,  \&quot;Tecnólogo Completo\&quot;,  \&quot;Superior Completo\&quot;,  \&quot;Pós Graduação / Especialização\&quot;,  \&quot;Mestrado\&quot;,  \&quot;Doutorado\&quot; | [optional] 
**ano_de_conclusao** | **int** | Ano de conclusão do curso.  Obrigatório quando o NivelFormacao igual a   \&quot;Ensino Médio Completo\&quot;,  \&quot;Técnico/Pós-Médio Completo\&quot;,  \&quot;Tecnólogo Completo\&quot;,  \&quot;Superior Completo\&quot;,  \&quot;Pós Graduação / Especialização\&quot;,  \&quot;Mestrado\&quot;,  \&quot;Doutorado\&quot; | [optional] 
**situacao** | **string** | Atual situação do curso.  Obrigatório quando o NivelFormacao é igual a   \&quot;Ensino Médio Incompleto\&quot;,  \&quot;Técnico/Pós-Médio Incompleto\&quot;,  \&quot;Tecnólogo Incompleto\&quot;,  \&quot;Superior Incompleto\&quot; | [optional] 
**periodo** | **int** | Período atual do curso.  Obrigatório quando o NivelFormacao é igual a   \&quot;Tecnólogo Incompleto\&quot;,  \&quot;Superior Incompleto\&quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


