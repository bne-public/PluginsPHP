<?php

/**
 * Prints the job search form
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
        <input type="text" name="q" value="" placeholder="Digitar vaga e cidade desejadas (ex.: Vendedor em São Paulo)" />
        <input type="submit" value="<?= __("Buscar Vagas") ?>" /> 
    </form>
</div>