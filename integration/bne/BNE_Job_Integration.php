<?php
use Swagger\Client;
use Swagger\Client\Api;
use Swagger\Client\Model;

/**
 * The job integration for BNE.
 *
 * @package    BNE
 * @subpackage BNE/public;lib
 * @author     Fabrício Pereira<fabriciopereira@bne.com.br>
 */
class BNE_Job_Integration implements I_Job_Integration
{

    /**
    * The bne ajax handler
    *
    * @since    1.0.0
    * @access   protected
    * @var      BNE_Ajax_Handlers    $ajax    Maintains the ajax handler object.
    */
    protected $ajax;

    /**
    * The bne api manager
    *
    * @since    1.0.0
    * @access   protected
    * @var      BNE_Api_Manager    $apiManager    Maintains the bne api manager.
    */
    protected $apiManager;

    public function __construct()
    {
        /**
        * The class thar contains the strings with the names used in plugin
        */
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'bne/api/autoload.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'bne/api/lib/ApiException.php';
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'bne/BNE_Util.php';        

        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'bne/BNE_Api_Manager.php';
        $this->apiManager = new BNE_Api_Manager();
        
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'bne/BNE_Ajax_Handlers.php';
        $this->ajax = new BNE_Ajax_Handlers($this->apiManager);
    }

    /**
    * Gets the job posts in bne database
    *
    * @since    1.0.0
    * @param int $id Job Id
    * @return Job_Post
    */
    public function GetJob($id)
    {
        $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
        $vagas_api = new \Swagger\Client\Api\VagasApi($api_client);

        $bne_job = $vagas_api->vagasGetByid($id);

        $job_post = $this->GetJobPostFromVagaBne($bne_job);

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
    public function GetJobs($query, $page, $results_per_page, $sigla_estados, $cidade)
    {
        $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
        $vagas_api = new \Swagger\Client\Api\VagasApi($api_client);

		$qEmployer = (trim($query) != "") ? $query : "";
		$qsigla_estado = (trim($sigla_estados) != "") ? $sigla_estados : null;
		$qcidades = (trim($cidade) != "") ? $cidade : null;

        $result = $vagas_api->vagasGet($page, $results_per_page, $qEmployer, $salario_minimo = null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        $qsigla_estado,
        $qcidades,
        null,
        null,
        null,
        null,
        "true" );
        
        $jobs = array();
        $bne_jobs = $result->getRegistros();
        foreach ($bne_jobs as $key => $bne_job) {
            array_push($jobs, BNE_Job_Integration::GetJobPostFromVagaBne($bne_job) );
        }

        return new Job_Search_Result($jobs, $result->getTotalRegistros(), $result->getTotalPaginas());

        $facets = $result->getFacets();
    }

    public function GetJobPostFromVagaBne($bne_job)
    {
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
    public function GetStringAggregation($array, $separator)
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

    /**
    * Apply to job
    *
    * @since    1.0.0
    * @param int $id Job Id
    * @return bool  True if the apply occured successfully
    */
    public function ApplyToJob($id)
    {
        $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
        $vagas_api = new \Swagger\Client\Api\VagasApi($api_client);

        $candidatura = new \Swagger\Client\Model\Candidatura();
        $candidatura->setRespostas(array()); // \Swagger\Client\Model\V10VagasCandidataridVagaRespostas

        try{
            $vagas_api->vagasCandidatarByidVagacandidatura($id, $candidatura);
        }catch(Exception $e){
            return false;
        }

        return true;
    }

    /**
    * Saves the cv.
    *
    * @since    1.0.0
    * @return   bool
    */
    public function SaveRegisterCV(){
        echo esc_html("SaveRegisterCV<br>");

        $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
        $curriculo_api = new \Swagger\Client\Api\CurriculoApi($api_client);

        $logInInfo = $this->apiManager->GetLoggedInInfo();
        try{
            $curriculo = $curriculo_api->curriculoGetCadastroCVBycpf(null);
            $curriculo->getMiniCurriculo()->setCpf($logInInfo->CPF);
            $curriculo->getMiniCurriculo()->setDataNascimento($logInInfo->DataNascimento);
        }catch (\Swagger\Client\ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                case 404:
                    $curriculo = new \Swagger\Client\Model\InlineResponse200();
                    $curriculo->setMiniCurriculo(new \Swagger\Client\Model\InlineResponse200MiniCurriculo());
                    break;
                default:
                    throw $e;
            }
        }

        echo esc_html("Curriculo recuperado<br>");

        if(isset($_REQUEST['passo']) && $_REQUEST['passo'] == 1){
            $curriculo->setMiniCurriculo($this->GetMiniCurriculoFromRequest());
            $curriculo->setDadosPessoais(null);
            $curriculo->setExperiencias(null);
            $curriculo->setFormacao(null);
            $curriculo->setDadosComplementares(null);
        }elseif (wp_kses_post($_REQUEST["passo"]) == 2) {
            $curriculo->setDadosPessoais($this->GetDadosPessoaisFromRequest());
            $curriculo->setExperiencias($this->GetExperienciasFromRequest());
            $curriculo->setFormacao(null);
            $curriculo->setDadosComplementares(null);
        }elseif (wp_kses_post($_REQUEST["passo"]) == 3) {
            $curriculo->setFormacao($this->GetFormacaoFromRequest());
            $curriculo->setDadosPessoais(null);
            $curriculo->setExperiencias(null);
            $curriculo->setDadosComplementares(null);
        }elseif (wp_kses_post($_REQUEST["passo"]) == 4) {
            $curriculo->setDadosComplementares($this->GetDadosComplementaresFromRequest());
            $curriculo->setDadosPessoais(null);
            $curriculo->setExperiencias(null);
            $curriculo->setFormacao(null);
        }

        echo esc_html("Objeto completado<br>");        

        try{
            if($this->IsLoggedIn()){
                $response = $curriculo_api->curriculoPutCadastroCVBycurriculo($curriculo);
            }else{
                $response = $curriculo_api->curriculoPostCadastroCVBycurriculo($curriculo);
                $miniCurriculo = $curriculo->getMiniCurriculo();
                $cpf = $miniCurriculo->getCpf();
                $dn = $miniCurriculo->getDataNascimento();
                $this->apiManager->StoreApiKey($cpf, $dn);
            }
            $passoAtual = isset($_REQUEST['passo']) ? $_REQUEST['passo'] : 1;
            
            echo esc_html("passo = " . $passoAtual);

            if($passoAtual < 4){
                wp_redirect(BNE_Public::get_register_link("?passo=" . ($passoAtual + 1) ) );
                return false;
            }
            return true;

        }catch(Exception $e){
            throw $e;
        }

    }

    /**
    * Gets a Mini Curriculo instance from the $_REQUEST
    *
    * @since    1.0.0
    * @return   \Swagger\Client\Model\InlineResponse200MiniCurriculo
    */
    protected function GetMiniCurriculoFromRequest(){
        $miniCurriculo = new \Swagger\Client\Model\InlineResponse200MiniCurriculo();
        
        $miniCurriculo->setNome(wp_kses_post($_REQUEST['nome']));

        $cpf = 0;
        $dn = "";

        if($this->IsLoggedIn()){
            $logInInfo = $this->apiManager->GetLoggedInInfo();
            $cpf = $logInInfo->CPF;
            $dn = $logInInfo->DataNascimento;
        }else{
            $cpf = floatval(preg_replace("/[^0-9]/", "", wp_kses_post($_REQUEST['cpf'])));
            $dn = BNE_Util::GetJsonFormatDate(wp_kses_post($_REQUEST['dn']));
        }     
        $miniCurriculo->setCpf($cpf);
        $miniCurriculo->setDataNascimento($dn);
        
        $miniCurriculo->setEmail(wp_kses_post($_REQUEST['email']));

        $celular = preg_replace("/[^()0-9]/", "", wp_kses_post($_REQUEST['celular']));
        $reCelular = '/(?P<ddd>\([0-9]{2}\))(?P<numero>[0-9]{8,9})/';
        $matches = array();
        preg_match($reCelular, $celular, $matches);
        $ddd = preg_replace("/[^0-9]/", "", $matches['ddd']);
        $numCel = $matches['numero'];
        $miniCurriculo->setDddCelular($ddd);
        $miniCurriculo->setNumeroCelular($numCel);

        $miniCurriculo->setSexo(wp_kses_post($_REQUEST['sexo']));
        $miniCurriculo->setCidade(wp_kses_post($_REQUEST['cidade']));
        $miniCurriculo->setEscolaridade(wp_kses_post($_REQUEST['escolaridade']));
        $miniCurriculo->setAceitoEstagio(BNE_Util::Try_Get_Boolean_InArray($_REQUEST, array('aceitaEstagio')));

        $funcoesPretendidas = array();

        for ($i=0; $i < 3; $i++) {     
            if(!empty(intval($_REQUEST['funcao_pretendida_'.($i+1)]))){
                $funcaoPretendida = new \Swagger\Client\Model\InlineResponse200MiniCurriculoFuncoesPretendidas();
                $funcaoPretendida->setFuncao(int_val($_REQUEST['funcao_pretendida_'.($i+1)]));
                $anos = intval($_REQUEST['anos_experiencia_'.($i+1)]);
                $meses = intval($_REQUEST['meses_experiencia_'.($i+1)]);
                $funcaoPretendida->setMesesDeExperiencia(intval($anos * 12 + $meses));
                array_push($funcoesPretendidas, $funcaoPretendida);
            }
        }

        $miniCurriculo->setFuncoesPretendidas($funcoesPretendidas);

        $pretensao = str_replace(".","",wp_kses_post($_REQUEST['pretensao']));
        $pretensao = str_replace(",",".",$pretensao);

        $miniCurriculo->setPretensaoSalarial($pretensao);
        
        return $miniCurriculo;
    }

    /**
    * Gets a Dados Pessoais from the $_REQUEST
    *
    * @since    1.0.0
    * @return   \Swagger\Client\Model\InlineResponse200MiniCurriculo
    */
    protected function GetDadosPessoaisFromRequest(){
        $dadosPessoais = new \Swagger\Client\Model\InlineResponse200DadosPessoais();
        
        $dadosPessoais->setNumeroRg(wp_kses_post($_REQUEST['rg']));
        $dadosPessoais->setOrgaoEmissorRg(wp_kses_post($_REQUEST['oe']));
        $dadosPessoais->setEstadoCivil(wp_kses_post($_REQUEST['estado_civil']));

        $endereco = new \Swagger\Client\Model\InlineResponse200DadosPessoaisEndereco();
        $endereco->setCep(wp_kses_post($_REQUEST['cep']));
        $endereco->setLogradouro(wp_kses_post($_REQUEST['endereco']));
        $endereco->setNumero(wp_kses_post($_REQUEST['numero']));
        $endereco->setComplemento(wp_kses_post($_REQUEST['complemento']));
        $endereco->setBairro(wp_kses_post($_REQUEST['bairro']));
        $endereco->setCidade(wp_kses_post($_REQUEST['cidade']));
        $dadosPessoais->setEndereco($endereco);
        
        $split = BNE_Util::Split_Telefone(wp_kses_post($_REQUEST['fixo']));
        $dadosPessoais->setDddTelefoneFixo(array_key_exists('ddd', $split) ? $split['ddd'] : 0);
        $dadosPessoais->setNumeroTelefoneFixo(array_key_exists('numero', $split) ? $split['numero'] : 0);

        $split = BNE_Util::Split_Telefone(wp_kses_post($_REQUEST['fixo_recado']));
        $dadosPessoais->setDddTelefoneFixoRecado(array_key_exists('ddd', $split) ? $split['ddd'] : 0);
        $dadosPessoais->setNumeroTelefoneFixoRecado(array_key_exists('numero', $split) ? $split['numero'] : 0);
        $dadosPessoais->setNomeContatoTelefoneFixo(wp_kses_post($_REQUEST['falar_com_fixo']));

        $split = BNE_Util::Split_Telefone(wp_kses_post($_REQUEST['celular_recado']));
        $dadosPessoais->setDddCelularRecado(array_key_exists('ddd', $split) ? $split['ddd'] : 0);
        $dadosPessoais->setNumeroCelularRecado(array_key_exists('numero', $split) ? $split['numero'] : 0);
        $dadosPessoais->setNomeContatoCelular(wp_kses_post($_REQUEST['falar_com_celular']));

        return $dadosPessoais;
    }

    /**
    * Gets a list of Experiencias from the $_REQUEST
    *
    * @since    1.0.0
    * @return   \Swagger\Client\Model\InlineResponse200MiniCurriculo
    */
    protected function GetExperienciasFromRequest(){
        $experiencias = array();
        
        //\Swagger\Client\Model\InlineResponse200Experiencias

        if(!array_key_exists('experiencias', $_REQUEST)){
            return $experiencias;
        }

        foreach (wp_kses_post($_REQUEST['experiencias']) as $key => $value) {
            $experiencia = new \Swagger\Client\Model\InlineResponse200Experiencias();

            if(!isset($value['nome_empresa']) || $value['nome_empresa'] == null || strlen($value['nome_empresa']) <= 0)
                continue;

            $experiencia->setNomeEmpresa($value['nome_empresa']);
            $experiencia->setArea($value['area_empresa']);
            $experiencia->setDataAdmissao(BNE_Util::GetJsonFormatDate($value['admissao']));
            $experiencia->setDataDemissao(BNE_Util::GetJsonFormatDate($value['demissao']));
            $experiencia->setSalario(BNE_Util::GetJsonFormatCurrency($value['ultimo_salario']));
            $experiencia->setFuncao($value['funcao_exercida']);
            $experiencia->setAtribuicoes($value['atribuicoes']);
            
            array_push($experiencias, $experiencia);
        }

        return $experiencias;
    }

    /**
    * Gets a Formacao instance from the $_REQUEST
    *
    * @since    1.0.0
    * @return   \Swagger\Client\Model\InlineResponse200Formacao
    */
    protected function GetFormacaoFromRequest(){
        $formacao = new \Swagger\Client\Model\InlineResponse200Formacao();

        $cursosFormacao = array();
        if(array_key_exists('formacao', $_REQUEST)){
            foreach (wp_kses_post($_REQUEST['formacao']) as $key => $value) {
                $curso = new \Swagger\Client\Model\InlineResponse200FormacaoCursosFormacao();

                $curso->setNivelFormacao($value['nivel']);
                $curso->setNomeCurso($value['curso']);
                $curso->setInstituicao($value['instituicao']);
                $curso->setAnoDeConclusao($value['ano_conclusao']);
                $curso->setCidade($value['cidade']);
                $curso->setSituacao(empty($value['situacao']) ? null : $value['situacao']);
                $curso->setPeriodo($value['periodo']);

                array_push($cursosFormacao, $curso);
            }
        }

        if(array_key_exists('especializacao', $_REQUEST)){
            foreach (wp_kses_post($_REQUEST['especializacao']) as $key => $value) {
                $curso = new \Swagger\Client\Model\InlineResponse200FormacaoCursosFormacao();

                $curso->setNivelFormacao($value['nivel']);
                $curso->setNomeCurso($value['curso']);
                $curso->setInstituicao($value['instituicao']);
                $curso->setAnoDeConclusao($value['ano_conclusao']);
                $curso->setCidade($value['cidade']);

                array_push($cursosFormacao, $curso);
            }
        }
        $formacao->setCursosFormacao($cursosFormacao);
        
        $cursosComplementares = array();
        if(array_key_exists('curso_complementar', $_REQUEST)){
            foreach (wp_kses_post($_REQUEST['curso_complementar']) as $key => $value) {
                $curso = new \Swagger\Client\Model\InlineResponse200FormacaoCursosComplementares();

                $curso->setNomeCurso($value['curso']);
                $curso->setInstituicao($value['instituicao']);
                $curso->setCidade($value['cidade']);
                $curso->setCargaHoraria($value['carga']);
                $curso->setAnoConclusao($value['ano_conclusao']);                
                
                array_push($cursosComplementares, $curso);
            }
        }
        $formacao->setCursosComplementares($cursosComplementares);

        $idiomas = array();
        if(array_key_exists('idioma', $_REQUEST)){
            foreach (wp_kses_post($_REQUEST['idioma']) as $key => $value) {
                $idioma = new \Swagger\Client\Model\InlineResponse200FormacaoIdiomas();

                $idioma->setDescricaoIdioma($value['idioma']);               
                $idioma->setNivelIdioma($value['nivel_idioma']);               
                
                array_push($idiomas, $idioma);
            }
        }
        $formacao->setIdiomas($idiomas);

        return $formacao;
    }

    /**
    * Gets a DadosComlementares instance from the $_REQUEST
    *
    * @since    1.0.0
    * @return   \Swagger\Client\Model\InlineResponse200Formacao
    */
    protected function GetDadosComplementaresFromRequest(){
        $dadosComplementares = new \Swagger\Client\Model\InlineResponse200DadosComplementares();

        $veiculos = array();
        if(array_key_exists("veiculo", $_REQUEST)){
            foreach (wp_kses_post($_REQUEST['veiculo']) as $key => $value) {
                $veiculo = new \Swagger\Client\Model\InlineResponse200DadosComplementaresVeiculos();

                $veiculo->setTipoVeiculo($value['tipo']);
                $veiculo->setDescricaoModelo($value['modelo']);
                $veiculo->setAno($value['ano']);

                array_push($veiculos, $veiculo);
            }
        }
        $dadosComplementares->setVeiculos($veiculos);

        $dadosComplementares->setCategoriaCnh(BNE_Util::Try_Get_InArray($_REQUEST, array('categoria_habilitacao')));
        $dadosComplementares->setNumeroCnh(BNE_Util::Try_Get_InArray($_REQUEST, array('numero_habilitacao')));
        $dadosComplementares->setOutrosConhecimentos(BNE_Util::Try_Get_InArray($_REQUEST, array('outros_conhecimentos')));
        $dadosComplementares->setObservacoes(BNE_Util::Try_Get_InArray($_REQUEST, array('observacoes')));
        $dadosComplementares->setRaca(BNE_Util::Try_Get_InArray($_REQUEST, array('raca')));
        $dadosComplementares->setAltura(BNE_Util::GetJsonFormatCurrency(BNE_Util::Try_Get_InArray($_REQUEST, array('altura'))));
        $dadosComplementares->setPeso(BNE_Util::Try_Get_InArray($_REQUEST, array('peso')));
        $dadosComplementares->setPossuiFilhos(BNE_Util::Try_Get_Boolean_InArray($_REQUEST, array('filhos')));
        $dadosComplementares->setDeficiencia(BNE_Util::Try_Get_InArray($_REQUEST, array('tipo_deficiencia')));
        $dadosComplementares->setComplementoDeficiencia(BNE_Util::Try_Get_InArray($_REQUEST, array('complemento_deficiencia')));
        $dadosComplementares->setDisponibilidades(BNE_Util::Try_Get_InArray($_REQUEST, array('disponibilidade')));
        
        return $dadosComplementares;
    }

    /**
    * Gets the cv of the logged in user
    *
    * @since    1.0.0
    * @return Job_Post
    */
    public function GetLoggedInCV(){
        if(!$this->IsLoggedIn()){
            return null;
        }

        $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
        $curriculo_api = new \Swagger\Client\Api\CurriculoApi($api_client);

        try{
            return $curriculo_api->curriculoGetCadastroCVBycpf(null);
        }catch(Exception $e){
            return null;
        }
    }

    /**
    * Returns a string with the register cv fields
    *
    * @since    1.0.0
    */
    public function GetRegisterCvFields(){
        
        $this->ajax->Configure();
        $cvModel = $this->GetLoggedInCV();      
        $cv = null;

        if(BNE_Util::Try_Get_Boolean_InArray($_REQUEST, array('login_register_cv'))){
            $message = __("Seu currículo já existe em nossa base de dados. Por favor atualize seus dados.");
        }

        if(isset($cvModel)){
            $cv = json_decode($cvModel->__toString(), true);

            // calculando meses e anos das experiencias
            if(isset($cv['MiniCurriculo']['FuncoesPretendidas'])){
                for ($i=0; $i < 3; $i++) { 
                    if(isset($cv['MiniCurriculo']['FuncoesPretendidas'][$i])){
                        $cv['MiniCurriculo']['FuncoesPretendidas'][$i]['Anos'] = floor ( $cv['MiniCurriculo']['FuncoesPretendidas'][$i]['MesesDeExperiencia'] / 12 );
                        $cv['MiniCurriculo']['FuncoesPretendidas'][$i]['Meses'] = $cv['MiniCurriculo']['FuncoesPretendidas'][$i]['MesesDeExperiencia'] - $cv['MiniCurriculo']['FuncoesPretendidas'][$i]['Anos'] *  12;
                    }   
                }
            }
            
        }

        wp_enqueue_script( 'jquery.validate', plugin_dir_url( __FILE__ )  . '../../public/js/jquery.validate.min.js', array('jquery'), null, true);
        wp_enqueue_script( 'jquery.validate.pt-br', plugin_dir_url( __FILE__ )  . '../../public/js/localization/messages_pt_BR.min.js', array('jquery'), null, true);
        wp_enqueue_script( 'jquery.validate.methods-pt', plugin_dir_url( __FILE__ )  . '../../public/js/localization/methods_pt.min.js', array('jquery'), null, true);
        wp_enqueue_script( 'jquery.mask', plugin_dir_url( __FILE__ )  . '../../public/js/jquery.mask.min.js', array('jquery'), null, true);
        wp_enqueue_script( 'bne-register-cv', plugin_dir_url( __FILE__ ) . 'js/bne-register-cv.js', array( 'jquery', 'jquery-ui-autocomplete', 'jquery-ui-tooltip' ), null, true );
        
        wp_register_style( 'jquery-ui-styles', plugin_dir_url( __FILE__ )  . 'css/jquery-ui.min.css');
        wp_enqueue_style( 'jquery-ui-styles' );
        wp_enqueue_style('bne-register-cv', plugin_dir_url( __FILE__ )  . 'css/bne-register-cv.css');
        
        $content = "";
        if(!array_key_exists('passo', $_REQUEST) || $_REQUEST['passo'] == 1){
            ob_start();
            include(plugin_dir_path( dirname( __FILE__ ) ) . 'bne/partials/register-cv-01.php');
            $content = ob_get_clean();
        }elseif(wp_kses_post($_REQUEST['passo']) == 2){
            ob_start();
            include(plugin_dir_path( dirname( __FILE__ ) ) . 'bne/partials/register-cv-02.php');
            $content = ob_get_clean();
        }elseif(wp_kses_post($_REQUEST['passo']) == 3){
            ob_start();
            include(plugin_dir_path( dirname( __FILE__ ) ) . 'bne/partials/register-cv-03.php');
            $content = ob_get_clean();
        }elseif(wp_kses_post($_REQUEST['passo']) == 4){
            ob_start();
            include(plugin_dir_path( dirname( __FILE__ ) ) . 'bne/partials/register-cv-04.php');
            $content = ob_get_clean();
        }


        return $content;
    }

    /**
    * Returns a string with the login fields
    *
    * @since    1.0.0
    */
    public function GetLoginFields()
    {
        wp_enqueue_script( 'jquery.mask', plugin_dir_url( __FILE__ )  . '../../public/js/jquery.mask.min.js', array('jquery'), null, true);
        
        return '<p class="login-username">
                    <label for="cpf">' . __("CPF") .' </label>
                    <input type="tel" data-mask="000.000.000-00" name="cpf" id="cpf" class="input" value="" size="20">
                </p>
                <p class="login-password">
                    <label for="dn"> ' .  __("Data de Nascimento") . '</label>
                    <input type="tel" data-mask="00/00/0000" name="dn" id="dn" class="input" value="" size="20">
                </p>';
    }

    /**
    * Log in
    *
    * @since    1.0.0
    * @param    string[]    $errors     A list with errors, if ocurred.
    * @return   bool    True if the user was logged in successfully
    */
    public function Login(&$errors)
    {
        $errors = array();

        $api_client = new \Swagger\Client\ApiClient($this->apiManager->configuration);
        $curriculo_api = new \Swagger\Client\Api\CurriculoApi($api_client);

        if (!isset($_REQUEST['cpf'])) {
            array_push($errors, __("O CPF não foi informado"));
        }

        if (!isset($_REQUEST['dn'])) {
            array_push($errors, __("A data de nascimento não foi informada"));
        }

        if (count($errors) > 0) {
            return null;
        }

        $split = explode("/", wp_kses_post($_REQUEST['dn']));

        $dn = "{$split[2]}-{$split[1]}-{$split[0]}";
        $cpf = floatval(preg_replace("/[^0-9]/", "", wp_kses_post($_REQUEST['cpf'])));

        $this->apiManager->SetApiKeyHeader($cpf, $dn);
        try {
            $curriculo = $curriculo_api->curriculoObterCVPorCpfBycpfnascimento($cpf, $dn);
        } catch (\Swagger\Client\ApiException $e) {
            switch ($e->getCode()) {
                case 404:
                    return false;
                    break;
                case 403:
                    return false;
                    break;
            }

        }

        $rememberMe = false;
        if(isset($_REQUEST['rememberme']) && $_REQUEST['rememberme']){
            $rememberMe = true;
        }

        $this->apiManager->StoreApiKey($cpf, $dn, $rememberMe);
        
        return true;
    }

    /**
    * Check if the current user is logged in for the integration
    *
    * @since    1.0.0
    * @return   bool    True, if the user is logged in.
    */
    public function IsLoggedIn()
    {
        $key = $this->apiManager->GetStoredApiKey();
        if($key == null){
            return false;
        }

        return true;
    }
}
