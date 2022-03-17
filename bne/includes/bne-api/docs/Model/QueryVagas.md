# QueryVagas

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pagina** | **int** | Página a ser retornada. Iniciando em 1. | [optional] 
**registros_por_pagina** | **int** | Número de registros por página | [optional] 
**query** | **string** | Pesquisa textual | [optional] 
**salario_minimo** | **double** | Salário mínimo oferecido pela vaga | [optional] 
**salario_maximo** | **double** | Salário máximo oferecido pela vaga | [optional] 
**tipo_vinculo** | **string[]** | Tipo de vínculo desejado | [optional] 
**funcao** | **string[]** | Funcão da vaga | [optional] 
**area** | **string[]** | Área de atuação | [optional] 
**escolaridade** | **string[]** | Escolaridade | [optional] 
**deficiencia** | **string[]** | Deficiência para vagas BNE | [optional] 
**disponibilidade** | **string[]** | Disponibilidade requerida para a vaga | [optional] 
**sigla_estado** | **string[]** | Nomes das cidades desejadas | [optional] 
**nome_cidade** | **string[]** | Nomes das cidades desejadas | [optional] 
**empresa** | **string[]** | Nomes das empresas anunciantes | [optional] 
**data_inicio** | [**\DateTime**](\DateTime.md) | Limite inferior para a abertura da vaga | [optional] 
**data_fim** | [**\DateTime**](\DateTime.md) | Limite superior para a abertura da vaga | [optional] 
**id_origem** | **int[]** | Origem das vagas, empresas que possuem STC | [optional] 
**oportunidade** | **bool** | Trazer oportunidade (vagas abertas a mais de 60 dias) | [optional] 
**ordenacao** | **string** | Ordenação ex: \&quot;Dta_Abertura asc, Des_Funcao desc\&quot; | [optional] 
**curso** | **string[]** | Cursos pesquisados com like | [optional] 
**id_curso** | **int[]** | Pesquisa acertiva dos curso | [optional] 
**curriculo** | **int** | Curriculo do BNE - para não trazer as vagas da empresa que o candidato bloqueou. | [optional] 
**oferece_curso** | **bool** | Vagas de empresa que oferecem curso | [optional] 
**funcao_agrupadora** | **int** | Vai retoranar as vagas com funções similares a pesquisada. | [optional] 
**cidade_regiao** | **int** | Alem das vaga da cidade ira trazer as vagas da região metropolitana. | [optional] 
**idf_filial** | **int** | Buscar vagas da filial | [optional] 
**confidencial** | **bool** | Mostrar vagas Confidenciais (vaga de Empresas que optaram a não aparecer como anunciante na vaga) | [optional] 
**campanha** | **bool** | Vaga de campanha | [optional] 
**usuario_filial** | **int[]** | Quem Anunciou a vaga. | [optional] 
**facet_field** | **string[]** | Campos para os quais a totalização deve ser retornada | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


