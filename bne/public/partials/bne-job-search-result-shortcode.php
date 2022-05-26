<?php

/**
 * Prints the job search result
 *
 *
 * @link       http://www.bne.com.br
 * @since      1.0.0
 *
 * @package    BNE
 * @subpackage BNE/public/partials
 */
?>
<div class="job-search-form">
    <form action="<?= $job_search_result_url ?>" method="GET">
        <input type="text" name="q" value="" placeholder="Digitar a função (ex.: Vendedor)" />
        <select name="estado" id="uf">
            <option disabled selected value>Selecione</option>
        </select>
        <select name="cidade" id="cidade">
        <option disabled selected value>Selecione</option>   
        </select>
        <input type="submit" value="<?= __("Buscar Vagas") ?>" />
    </form>
</div>
<div class="jobs">
    <?php if($search_result->getJobs() == null){ ?>
    <h5 style="color: red">Não encontramos nenhuma vaga, por favor, realize novamente a pesquisa!</h5>
    <?php }else{
        foreach ($search_result->getJobs() as $key => $job) {
            if($job->getshortDescription() == ""){
                continue;
            }else{
            ?>
        <div class="job">
            <h3 class="job-title"><?= $job->getTitle() ?> </h3>
            <div class="job-location"><?= $job->getLocation() ?> </div>
            <div class="job-description"><?= $job->getShortDescription() ?></div>
            <div class="job-links">
                <input type="hidden" name="action" value="apply_to_job" >
                <input type="hidden" name="job_id" value="<?= $job->getId() ?>" >
                <a class="btn-details" href="<?= $job->getUrl() ?>">Mais detalhes</button></a>
            </div>
        </div>
    <?php } }?>

    <nav id="pagination">
        <?php if ( $page > 1 ) { ?>
            <a class="prev page-numbers" href="<?= $job_search_result_url ?>&page_num=<?= $page - 1 ?>">Anterior</a>
        <?php } 

        if ( $page > 4 ) { ?>
            <a class="page-numbers" href="<?= $job_search_result_url ?>&page_num=1">1</a>
            <span class="page-numbers dots">…</span>
        <?php }

        for ($i= $page > 4 ? $page - 2 : 1; $i < $page && $i > 0; $i++) { ?>
            <a class="page-numbers" href="<?= $job_search_result_url ?>&page_num=<?= $i ?>"><?= $i ?></a>
        <?php } ?>

        <span class="page-numbers current"><?= $page ?></span>

        <?php 
        $total_pages = $search_result->getPages();        
        for ($i=$page +1; $i <= $page + 2 && $i <= $total_pages; $i++) { ?>
            <a class="page-numbers" href="<?= $job_search_result_url ?>&page_num=<?= $i ?>"><?= $i ?></a>
        <?php } 

        if ( $page + 2 < $total_pages ) { ?>
            <span class="page-numbers dots">…</span>
            <a class="page-numbers" href="<?= $job_search_result_url ?>&page_num=<?= $total_pages ?>"><?= $total_pages ?></a>
        <?php } 

        if ($page < $total_pages) { ?>
            <a class="next page-numbers" href="<?= $job_search_result_url ?>&page_num=<?= $page + 1 ?>">Próximo</a>
        <?php } }?>
    </nav>
</div>