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
<?php if (isset($_GET["successOnApply"]) && $_GET["successOnApply"]) { ?>
  <p class="message">	<? __("Candidatura efetuada com sucesso.") ?><br></p>
<?php } ?>
<?php if (isset($_GET["successOnApply"]) && !$_GET["successOnApply"]) { ?>
  <div id="login_error"><?= __("Não foi possível efetuar sua candidatura. Por favor, tente mais tarde") ?><br></div>
<?php } ?>
<div class="jobs">
    <?php
    foreach ($search_result->getJobs() as $key => $job) { ?>
        <div class="job">
            <h3 class="job-title"><?= $job->getTitle() ?> </h3>
            <div class="job-location"><?= $job->getLocation() ?> </div>
            <div class="job-description"><?= $job->getShortDescription() ?></div>
            <div class="job-links">
                <!--<form name="loginform" id="loginform" action="<?= esc_url( admin_url('admin-post.php') ) ?>"
                       method="post">-->
                    <input type="hidden" name="action" value="apply_to_job" >
                    <input type="hidden" name="job_id" value="<?= $job->getId() ?>" >
                    <a class="btn-details" href="<?= $job->getUrl() ?>">Mais detalhes</button>
                    <!--<a class="btn-apply" href="javascript:void(0)" onclick="jQuery(this).parent().submit(); return
                    false;">Candidatar-me</a>-->
                <!--</form>-->
            </div>
        </div>
    <?php } ?>

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
        <?php } ?>
    </nav>
</div>
