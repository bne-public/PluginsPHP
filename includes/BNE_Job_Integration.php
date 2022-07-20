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
           $jobs = $bne_jobs;
        }

        return new Job_Search_Result($jobs, $data->TotalRegistros, $data->TotalPaginas);

        $facets = $data->Facets;
    }
}
