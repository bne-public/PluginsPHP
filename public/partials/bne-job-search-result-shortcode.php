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
<section class="jobs-bne">
    <section class="logo">
        <a href="<?php echo esc_url('https://www.bne.com.br/') ?>" title="Acesse o Banco Nacional de Empregos - BNE" target="_blank"><img src="https://mailing.bne.com.br/repositorio/svg/bne/logos/logo-bne.svg" alt="Vagas de Emprego"></a>
    </section>
    <section class="job-search-form">
        <h1>Filtro de Vagas de Emprego</h1>
        <form action="<?php echo esc_url($job_search_result_url) ?>" method="GET">
            <?php
            $q = (!empty($_GET['q'])) ? $_GET['q'] : '';
            $estado = (!empty($_GET['estado'])) ? $_GET['estado'] : 'Selecione um Estado';
            $cidade = (!empty($_GET['cidade'])) ? $_GET['cidade'] : 'Selecione uma Cidade';
            ?>
            <div class="fields">
                <div class="form-group">
                    <input type="text" name="q" placeholder="Digitar a função (ex.: Vendedor)" />
                    <?php $q = sanitize_text_field( $_POST['q'] );
                    update_post_meta( $post->ID, 'q', $q ); ?>
                </div>
                <div class="form-group">
                    <select name="estado" id="uf">
                    <option disabled selected value><?php echo htmlentities(esc_html( $estado) ) ; ?></option>
                    </select>
                </div>
                <div class="form-group">
                    <select name="cidade" id="cidade">
                        <option disabled selected value><?php echo htmlentities( esc_html($cidade ) ) ; ?></option>
                    </select>
                </div>
            </div>
            <div class="footer">
                <input type="submit" value="<?php echo __("Buscar Vagas") ?>" />
            </div>
        </form>
    </section>
    <section class="jobs">
        <div class="content-jobs">
            <?php if($search_result->getJobs() == null){ ?>
            <h5 style="color: red">Não encontramos nenhuma vaga, por favor, realize novamente a pesquisa!</h5>
            <?php }else{
                foreach ($search_result->getJobs() as $key => $job) {
                    if($job->getshortDescription() == ""){
                        continue;
                    }else{
                    ?>
                <article class="job">
                    <h2 class="job-title"><strong><?php echo esc_html($job->getTitle()) ?></strong></h2>
                    <h3 class="job-location"><i><?php echo esc_html($job->getLocation())?></i></h3>
                    <p class="job-description"><?php echo esc_html($job->getShortDescription()) ?></p>
                    <div class="job-links">
                        <input type="hidden" name="action" value="apply_to_job" >
                        <input type="hidden" name="job_id" value="<?php echo esc_html($job->getId()) ?>" >
                        <a class="btn-details" title="Detalhes da Vaga" href="<?php echo esc_html($job->getUrl()) ?>">Informações da Vaga &#10150;</a>
                    </div>
                </article>
            <?php } }?>
        </div>

        <nav class="pagination"id="pagination">
            <?php if ( $page > 1 ) { ?>
                <a class="prev page-numbers" href="<?php echo esc_url($job_search_result_url) ?>&page_num=<?php echo esc_html($page - 1) ?>">Anterior</a>
            <?php } 

            if ( $page > 4 ) { ?>
                <a class="page-numbers" href="<?php echo esc_url($job_search_result_url) ?>&page_num=1">1</a>
                <span class="page-numbers dots">…</span>
            <?php }

            for ($i= $page > 4 ? $page - 2 : 1; $i < $page && $i > 0; $i++) { ?>
                <a class="page-numbers" href="<?php echo esc_url($job_search_result_url) ?>&page_num=<?php echo esc_html($i) ?>"><?php echo esc_html($i) ?></a>
            <?php } ?>

            <span class="page-numbers current"><?php echo esc_html($page) ?></span>

            <?php 
            $total_pages = $search_result->getPages();        
            for ($i=$page +1; $i <= $page + 2 && $i <= $total_pages; $i++) { ?>
                <a class="page-numbers" href="<?php echo esc_url($job_search_result_url) ?>&page_num=<?php echo esc_html($i) ?>"><?php echo esc_html($i) ?></a>
            <?php } 

            if ( $page + 2 < $total_pages ) { ?>
                <span class="page-numbers dots">…</span>
                <a class="page-numbers" href="<?php echo esc_url($job_search_result_url) ?>&page_num=<?php echo esc_html($total_pages) ?>"><?php echo esc_html($total_pages) ?></a>
            <?php } 

            if ($page < $total_pages) { ?>
                <a class="next page-numbers" href="<?php echo esc_url($job_search_result_url) ?>&page_num=<?php echo esc_html($page + 1) ?>">Próximo</a>
            <?php } }?>
        </nav>
    </section>
</section>