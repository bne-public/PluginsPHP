# Vaga

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**idade_min** | **int** | (Opcional) Faixa etária mínima requerida para vaga. | [optional] 
**idade_max** | **int** | (Opcional) Faixa etária máxima requerida para a vaga. | [optional] 
**sexo** | **string** | (Requerido) Sexo requerido pela vaga \&quot;Masculino\&quot;, \&quot;Feminino\&quot; ou  \&quot;Qualquer\&quot;. | [optional] 
**num_ddd** | **string** | Número de DDD do telefone. | [optional] 
**telefone** | **string** | Número de telefone da empresa. | [optional] 
**email** | **string** | Email confidencial de retorno. | [optional] 
**receber_cada_cv** | **bool** | (Obrigatório) Receber CV assim que o candidato se inscrever na vaga. | [optional] 
**receber_todos_cv** | **bool** | (Obrigatório) Receber CV de todos os candidatos inscritos no final do dia. | [optional] 
**perguntas** | [**\Swagger\Client\Model\InlineResponse2005Perguntas[]**](InlineResponse2005Perguntas.md) | (Opcional) Lista de objetos do tipo Pergunta. | [optional] 
**id** | **int** | Identificador da vaga. Considerado somente nas pesquisas.   Será desconsiderado em inserções e atualizações. | [optional] 
**tipo_vinculo** | **string[]** | (Obrigatório) Lista que deve ser composta pelos seguintes valores.  -&amp;gt; Aprendiz  -&amp;gt; Autônomo  -&amp;gt; Efetivo  -&amp;gt; Estágio  -&amp;gt; Freelancer  -&amp;gt; Temporário | [optional] 
**cursos** | **string[]** | Cursos que o estagiário deve estar cursando para a vaga de estágio.  É considerado somente para os tipos de vínculo \&quot;Estágio\&quot; e \&quot;Aprendiz\&quot;. Para os demais vínculos, será desconsiderado.  Na tabela de Cursos é possível ter as sugestões para os cursos informados mas, embora altamente recomendável por questões de filtros, não é obrigatório que um valor presente naquela tabela seja utilizado. | [optional] 
**funcao** | **string** | (Obrigatório) Nome completo da função. | 
**cidade** | **string** | (Obrigatório) Nome completo da cidade seguido de barra mais a sigla do estado. Ex.:”Montes Claros/MG”. | 
**quantidade** | **int** | (Obrigatório) Número de vagas ofertadas. | [optional] 
**escolaridade** | **string** | Algum dos itens listados:  -&amp;gt; Ensino Fundamental Incompleto  -&amp;gt; Ensino Fundamental Completo  -&amp;gt; Ensino Médio Incompleto  -&amp;gt; Ensino Médio Completo  -&amp;gt; Técnico/Pós-Médio Incompleto  -&amp;gt; Técnico/Pós-Médio Completo  -&amp;gt; Tecnólogo Incompleto  -&amp;gt; Superior Incompleto  -&amp;gt; Tecnólogo Completo  -&amp;gt; Superior Completo  -&amp;gt; Pós Graduação / Especialização  -&amp;gt; Mestrado  -&amp;gt; Doutorado | [optional] 
**salario_min** | **double** | (Opcional) Início da faixa salarial ofertada. | [optional] 
**salario_max** | **double** | (Opcional) Final da faixa salarial ofertada. | [optional] 
**beneficios** | **string** | (Opcional) Descrição dos benefícios oferecidos. | [optional] 
**requisitos** | **string** | (Opcional) Requisitos desejados para a vaga. | [optional] 
**atribuicoes** | **string** | (Opcional) Atribuições desejadas para a vaga. | [optional] 
**disponibilidade** | **string[]** | (Opcional) Utilize os itens listados para compor a lista:  -&amp;gt; Manhã  -&amp;gt; Tarde  -&amp;gt; Noite  -&amp;gt; Sábado  -&amp;gt; Domingo  -&amp;gt; Viagem | [optional] 
**nome_fantasia** | **string** | Nome fantasia da empresa. | [optional] 
**confidencial** | **bool** | (Obrigatório) Indica se as informações da empresa são confidênciais. | [optional] 
**deficiencia** | **string** | (Opcional) Se a vaga é para PCD é necessário alguns dos itens:  -&amp;gt; Auditiva  -&amp;gt; Física  -&amp;gt; Mental  -&amp;gt; Múltipla  -&amp;gt; Nenhuma  -&amp;gt; Qualquer  -&amp;gt; Reabilitado  -&amp;gt; Visual | [optional] 
**status** | **string** | Status atual da vaga | [optional] 
**data_cadastro** | [**\DateTime**](\DateTime.md) | Data de abertura da vaga | [optional] 
**sigla_estado** | **string** |  | [optional] 
**data_anuncio** | [**\DateTime**](\DateTime.md) | Data que a vaga começou a aparecer nas pesquisas. | [optional] 
**des_origem** | **string** |  | [optional] 
**tipo_origem** | **int** |  | [optional] 
**bne_recomenda** | **bool** |  | [optional] 
**codigo_vaga** | **string** | Codigo da vaga. | [optional] 
**id_filial** | **int** | Empresa que anunciou a vaga | [optional] 
**bairro** | **string** | /Bairro da vaga | [optional] 
**area** | **string** | Area da vaga. | [optional] 
**url** | **string** | Url da vaga (BNE) | [optional] 
**plano** | **bool** |  | [optional] 
**oferece_cursos** | **bool** |  | [optional] 
**campanha** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


