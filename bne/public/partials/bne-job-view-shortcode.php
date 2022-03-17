<?php

/**
 * Prints the job details
 *
 *
 * @link       http://www.bne.com.br
 * @since      1.0.0
 *
 * @package    BNE
 * @subpackage BNE/public/partials
 */
?>
<?php if (isset($_GET["successOnApply"]) && $_GET["successOnApply"] == "true") { ?>
  <p class="message">	<?= __("Candidatura efetuada com sucesso.") ?><br></p>
<?php } ?>
<?php if (isset($_GET["successOnApply"]) && $_GET["successOnApply"] == "false") { ?>
  <div id="login_error"><?= __("Não foi possível efetuar sua candidatura. Por favor, tente mais tarde") ?><br></div>
<?php } ?>
<div class="job-view">
  <h1 class="job-title"><?= $job_post->GetTitle() ?></h1>
  <div class="job-location"><?= $job_post->GetLocation() ?></div>
  <div class="job-description"><?= $job_post->getDescription() ?></div>
  <div class="job-links">
    <form name="loginform" id="loginform" action="<?= esc_url( admin_url('admin-post.php') ) ?>" method="post">
      <input type="hidden" name="action" value="apply_to_job" >
      <input type="hidden" name="job_id" value="<?= $job_post->getId() ?>" >
      <a class="btn-apply active" href="javascript:void(0)" onclick="jQuery(this).parent().submit(); return false;">Candidatar-me</a>
    </form>
  </div>
</div>