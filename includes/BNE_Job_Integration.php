<?php

/**
 * The job integration for BNE.
 *
 * @package    BNE
 * @subpackage BNE/public;lib
 * @author     Fabrício Pereira<fabriciopereira@bne.com.br>
 */
class BNE_Job_Integration implements I_Job_Integration
{
	public function __construct() {}

    /**
    * Gets the job posts in bne database
    *
    * @since    1.0.0
    * @param      string    $query              The query.
    * @param      int       $page               The page to be retrieved (first page = 1)
    * @param      int       $results_per_page   The number of records per page
    */
    public function GetJobs($query, $page, $results_per_page, $sigla_estados, $cidade)
    {
	    $url = BNE_Strings::URL_PROD_OPTION_NAME."?pagina=$page&registrosPorPagina=$results_per_page&oportunidade=false";

		if(trim($query) != "")
			$url = $url . "&query=$query";
		if(trim($sigla_estados) != "")
			$url = $url . "&siglaEstado=$sigla_estados";
	    if(trim($cidade) != "")
		    $url = $url . "&nomeCidade=$cidade";

		$ch = curl_init($url);
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch,CURLOPT_PROXY_SSL_VERIFYPEER, false);
		$data = json_decode(curl_exec($ch));

		if($data == null) return null;

        $jobs = array();
        $bne_jobs = $data->Registros;
        foreach ($bne_jobs as $key => $bne_job) {
	        array_push($jobs, BNE_Job_Integration::GetJobPostFromVagaBne($bne_job) );
        }

        return new Job_Search_Result($jobs, $data->TotalRegistros, $data->TotalPaginas);

        $facets = $data->Facets;
    }

	public static function GetJobPostFromVagaBne($bne_job){
		$title = $bne_job->Funcao;
		if ($bne_job->Quantidade > 1) {
			$title .= '('. $bne_job->Quantidade .' '. __("Vagas") .')';
		}

		$location = $bne_job->Cidade;
		$url = $bne_job->Url;

		$description = "";

		// Building company
		if (!$bne_job->Confidencial && !empty($bne_job->NomeFantasia)) {
			$description .= '<div class="description-title company">'.__("Empresa").'</div>'.
			                '<div class="description-text company">' . BNE_Job_Integration::GetStringAggregation($bne_job->NomeFantasia, ', ') . '</div>';
		}

		// Building disabilities
		if (!empty($bne_job->Deficiencia)) {
			$description .= '<div class="description-title disabilities">'.__("Deficiência").'</div>'.
			                '<div class="description-text disabilities">' . BNE_Job_Integration::GetStringAggregation($bne_job->Deficiencia, ', ') . '</div>';
		}

		// Salary
		if (!empty($bne_job->SalarioMin) || !empty($bne_job->SalarioMax)) {
			$description .= '<div class="description-title salary">'.__("Salário").'</div>';

			$description .= '<div class="description-text salary">';
			if (!empty($bne_job->SalarioMin) && !empty($bne_job->SalarioMax)) {
				$description .= _("De ") . number_format ( $bne_job->SalarioMin, 2, ',', '.' ) .
				                _(" até ") . number_format ( $bne_job->SalarioMax, 2, ',', '.' );
			} elseif (!empty($bne_job->SalarioMin)) {
				$description .= _("A partir de ") . number_format ( $bne_job->SalarioMin, 2, ',', '.' );
			} else {
				$description .= _("Até ") . number_format ( $bne_job->SalarioMax, 2, ',', '.' );
			}
			$description .= '</div>';
		}

		// Building assignments
		if (!empty($bne_job->Atribuicoes)) {
			$description .= '<div class="description-title assignments">'.__("Atribuições").'</div>'.
			                '<div class="description-text assignments">' . BNE_Job_Integration::GetStringAggregation($bne_job->Atribuicoes, ', ') . '</div>';
		}

		// Building requirements
		if (!empty($bne_job->Requisitos)) {
			$description .= '<div class="description-title requirements">'.__("Requisitos").'</div>'.
			                '<div class="description-text requirements">' . BNE_Job_Integration::GetStringAggregation($bne_job->Requisitos, ', ') . '</div>';
		}

		// Building contract type
		if (!empty($bne_job->TipoVinculo)) {
			$description .= '<div class="description-title contract_type">'.__("Tipo do Vínculo").'</div>'.
			                '<div class="description-text contract_type">' . BNE_Job_Integration::GetStringAggregation($bne_job->TipoVinculo, ', ') . '</div>';
		}

		// Building courses
		if (!empty($bne_job->Cursos)) {
			$description .= '<div class="description-title courses">'.__("Cursos").'</div>'.
			                '<div class="description-text courses">' . BNE_Job_Integration::GetStringAggregation($bne_job->Cursos, ', ') . '</div>';
		}

		// Building scholarity
		if (!empty($bne_job->Escolaridade)) {
			$description .= '<div class="description-title scholarity">'.__("Escolaridade").'</div>'.
			                '<div class="description-text scholarity">' . BNE_Job_Integration::GetStringAggregation($bne_job->Escolaridade, ', ') . '</div>';
		}

		// Building benefits
		if (!empty($bne_job->Beneficios)) {
			$description .= '<div class="description-title benefits">'.__("Benefícios").'</div>'.
			                '<div class="description-text benefits">'.BNE_Job_Integration::GetStringAggregation($bne_job->Beneficios, ', ') . '</div>';
		}

		// Building availability
		if (!empty($bne_job->Disponibilidade)) {
			$description .= '<div class="description-title availability">'.__("Disponibilidade").'</div>'.
			                '<div class="description-text availability">'.BNE_Job_Integration::GetStringAggregation($bne_job->Disponibilidade, ', ') . '</div>';
		}

		$shortDescription = $bne_job->DescricaoGeral == null ? "$bne_job->Atribuicoes"."$bne_job->Requisitos"."$bne_job->Beneficios" : $bne_job->DescricaoGeral;

		if(empty($shortDescription))
			return null;

		return new Job_Post($bne_job->Id, $title, $location, $description, $shortDescription, $url);
	}

	/**
	 * Aggregates an string array
	 *
	 * @since    1.0.0
	 * @param    string[]    $query      The string array to be aggregate.
	 * @param    string      $separator  The string to aggregate string.
	 */
	public static function GetStringAggregation($array, $separator)
	{

		$result = '';

		// Building contract type
		if (!empty($array)) {
			if (is_array($array) && count($array) > 0) {
				foreach ($array as $key => $value) {
					$result .= $value . $separator;
				}
				// Removing the last separator of the string
				$result = substr($result, 0, -strlen($separator));
			} else {
				$result .= $array;
			}
		}

		return $result;
	}
}
