<?php
use Swagger\Client;
use Swagger\Client\Api;

/**
 * The job search for BNE api.
 *
 * Defines the properties to job posts.
 *
 * @package    BNE
 * @subpackage BNE/public;lib
 * @author     Francisco Ribas <franciscoribas@bne.com.br>
 */
class BNE_Job_Integration
{

    /**
    * Gets the configuration to consume api
    *
    * @since    1.0.0
    * @param      string    $query              The query.
    * @param      int       $page               The page to be retrieved (first page = 1)
    * @param      int       $results_per_page   The number of records per page
    */
    public static function Configure()
    {
        /**
        * The class thar contains the strings with the names used in plugin
        */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . '../includes/bne-api/autoload.php';
        
        $configuration = new \Swagger\Client\Configuration();
        // Adding authentication header
        $configuration->addDefaultHeader("apiKey", "eyJTaXN0ZW1hIjoiOUI0Nzc1MDktREM5RC00MDcwLTk1QzMtNkQxRkYwOUM1RDcxIn0=");
        // Defining the api url
        $configuration->setHost("http://gatewayapi.bne.com.br/apibneinterna");

        return $configuration;
    }

    /**
    * Gets the job posts in bne database
    *
    * @since    1.0.0
    * @param int $id Job Id
    * @return Job_Post
    */
    public static function GetJob($id)
    {
        $configuration = BNE_Job_Integration::Configure();
        
        $api_client = new \Swagger\Client\ApiClient($configuration);
        $vagas_api = new \Swagger\Client\Api\VagasApi($api_client);

        $bne_job = $vagas_api->vagasGetByid($id);

        $job_post = BNE_Job_Integration::GetJobPostFromVagaBne($bne_job);

        return $job_post;
    }

    /**
    * Gets the job posts in bne database
    *
    * @since    1.0.0
    * @param      string    $query              The query.
    * @param      int       $page               The page to be retrieved (first page = 1)
    * @param      int       $results_per_page   The number of records per page
    */
    public static function GetJobs($query, $page, $results_per_page)
    {
        $configuration = BNE_Job_Integration::Configure();

        $api_client = new \Swagger\Client\ApiClient($configuration);
        $vagas_api = new \Swagger\Client\Api\VagasApi($api_client);
	
	$qEmployer = "employer+{$query}";

        $result = $vagas_api->vagasGet($page, $results_per_page, $qEmployer, $salario_minimo = null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        "false" );
        
        $jobs = array();
        $bne_jobs = $result->getRegistros();
        foreach ($bne_jobs as $key => $bne_job) {
            array_push($jobs, BNE_Job_Integration::GetJobPostFromVagaBne($bne_job) );
        }

        return new Job_Search_Result($jobs, $result->getTotalRegistros(), $result->getTotalPaginas());

        $facets = $result->getFacets();
    }

    public static function GetJobPostFromVagaBne($bne_job){
        $title = $bne_job->getFuncao();
        if ($bne_job->getQuantidade() > 1) {
            $title .= '('. $bne_job->getQuantidade() .' '. __("Vagas") .')';
        }

        $location = $bne_job->getCidade();
        $url = $bne_job->getUrl();

        $description = "";

        // Building company
        if (!$bne_job->getConfidencial() && !empty($bne_job->getNomeFantasia())) {
            $description .= '<div class="description-title company">'.__("Empresa").'</div>'.
            '<div class="description-text company">' . BNE_Job_Integration::GetStringAggregation($bne_job->getNomeFantasia(), ', ') . '</div>';
        }

        // Building disabilities
        if (!empty($bne_job->getDeficiencia())) {
            $description .= '<div class="description-title disabilities">'.__("Deficiência").'</div>'.
            '<div class="description-text disabilities">' . BNE_Job_Integration::GetStringAggregation($bne_job->getDeficiencia(), ', ') . '</div>';
        }

        // Salary
        if (!empty($bne_job->getSalarioMin()) || !empty($bne_job->getSalarioMax())) {
            $description .= '<div class="description-title salary">'.__("Salário").'</div>';
            
            $description .= '<div class="description-text salary">';
            if (!empty($bne_job->getSalarioMin()) && !empty($bne_job->getSalarioMax())) {
                $description .= _("De ") . number_format ( $bne_job->getSalarioMin(), 2, ',', '.' ) .
                                _(" até ") . number_format ( $bne_job->getSalarioMax(), 2, ',', '.' );
            } elseif (!empty($bne_job->getSalarioMin())) {
                $description .= _("A partir de ") . number_format ( $bne_job->getSalarioMin(), 2, ',', '.' );
            } else {
                $description .= _("Até ") . number_format ( $bne_job->getSalarioMax(), 2, ',', '.' );
            }
            $description .= '</div>';
        }

        // Building assignments
        if (!empty($bne_job->getAtribuicoes())) {
            $description .= '<div class="description-title assignments">'.__("Atribuições").'</div>'.
            '<div class="description-text assignments">' . BNE_Job_Integration::GetStringAggregation($bne_job->getAtribuicoes(), ', ') . '</div>';
        }

        // Building requirements
        if (!empty($bne_job->getRequisitos())) {
            $description .= '<div class="description-title requirements">'.__("Requisitos").'</div>'.
            '<div class="description-text requirements">' . BNE_Job_Integration::GetStringAggregation($bne_job->getRequisitos(), ', ') . '</div>';
        }

        // Building contract type
        if (!empty($bne_job->getTipoVinculo())) {
            $description .= '<div class="description-title contract_type">'.__("Tipo do Vínculo").'</div>'.
            '<div class="description-text contract_type">' . BNE_Job_Integration::GetStringAggregation($bne_job->getTipoVinculo(), ', ') . '</div>';
        }

        // Building courses
        if (!empty($bne_job->getCursos())) {
            $description .= '<div class="description-title courses">'.__("Cursos").'</div>'.
            '<div class="description-text courses">' . BNE_Job_Integration::GetStringAggregation($bne_job->getCursos(), ', ') . '</div>';
        }

        // Building scholarity
        if (!empty($bne_job->getEscolaridade())) {
            $description .= '<div class="description-title scholarity">'.__("Escolaridade").'</div>'.
            '<div class="description-text scholarity">' . BNE_Job_Integration::GetStringAggregation($bne_job->getEscolaridade(), ', ') . '</div>';
        }

        // Building benefits
        if (!empty($bne_job->getBeneficios())) {
            $description .= '<div class="description-title benefits">'.__("Benefícios").'</div>'.
            '<div class="description-text benefits">'.BNE_Job_Integration::GetStringAggregation($bne_job->getBeneficios(), ', ') . '</div>';
        }

        // Building availability
        if (!empty($bne_job->getDisponibilidade())) {
            $description .= '<div class="description-title availability">'.__("Disponibilidade").'</div>'.
            '<div class="description-text availability">'.BNE_Job_Integration::GetStringAggregation($bne_job->getDisponibilidade(), ', ') . '</div>';
        }

        return new Job_Post($bne_job->getId(), $title, $location, $description, $bne_job->getAtribuicoes(), $url);
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
