<div class="wrap">
<h1><?= __("Configurações BNE") ?></h1>
<form method="post" action="options.php"> 
    <?= settings_fields( 'bne_url_options' ); ?>
    <?= do_settings_sections( 'bne_url_options' ); ?>

    <table class="form-table">
        <tr valign="top" hidden>
            <th scope="row"><?= _("Sandbox") ?></th>
            <td>
                <?php $sandbox = get_option( BNE_Strings::SANDBOX_OPTION_NAME ) ?>
                <input name="<?= BNE_Strings::SANDBOX_OPTION_NAME ?>" 
                    id="<?= BNE_Strings::SANDBOX_OPTION_NAME ?>"  
                    type="checkbox" 
                    <?= $sandbox ? "checked" : "" ?>
                    class="regular-text code"><label for="<?= BNE_Strings::SANDBOX_OPTION_NAME ?>" ><?= __("Ativo") ?></label>
                <p class="description" id="tagline-description"><?= __("Deixe essa opção marcada para efetuar testes. Todas as alterações serão efetuadas no ambiente de testes.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?= _("Api Key") ?></th>
            <td>
                <input name="<?= BNE_Strings::APIKEY_OPTION_NAME ?>"  
                    value="<?= get_option( BNE_Strings::APIKEY_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
                <p class="description" id="tagline-description"><?= __("Coloque aqui a api key recebida. Caso ainda não possua uma, envie um e-mail para contato@bne.com.br.") ?></p>            
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><?= _("URL do resultado da pesquisa de vagas") ?></th>
            <td>
                <code><?= get_home_url() ?></code>
                <input name="<?= BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME ?>"  
                    value="<?= get_option( BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><?= _("Número de vagas por página") ?></th>
            <td>
                <input name="<?= BNE_Strings::JOB_SEARCH_RESULTS_PER_PAGE_OPTION_NAME ?>"  
                    value="<?= get_option( BNE_Strings::JOB_SEARCH_RESULTS_PER_PAGE_OPTION_NAME ) ?>"
                    type="number" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><?= _("Página do resultado de vagas") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => get_option( BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME ),
                    'name'      => BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?= __("Selecione a página a ser utilizada para a exibição do resultado de vagas. O shortcode [". BNE_Strings::JOB_SEARCH_RESULTS_SHORTCODE_NAME ."] deve estar presente nesta página para que o resultado seja exibido.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?= _("URL de detalhes da vaga") ?></th>
            <td>
                <code><?= get_home_url() ?></code>
                <input name="<?= BNE_Strings::JOB_VIEW_URL_OPTION_NAME ?>"  
                    value="<?= get_option( BNE_Strings::JOB_VIEW_URL_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?= _("Página de detalhes da vaga") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => get_option( BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME ),
                    'name'      => BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?= __("Selecione a página a ser utilizada para a exibição dos detalhes de vagas. O shortcode [". BNE_Strings::JOB_SEARCH_RESULTS_SHORTCODE_NAME ."] deve estar presente nesta página para que o resultado seja exibido.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?= _("URL de login do CV") ?></th>
            <td>
                <code><?= get_home_url() ?></code>
                <input name="<?= BNE_Strings::LOGIN_CV_URL_OPTION_NAME ?>"  
                    value="<?= get_option( BNE_Strings::LOGIN_CV_URL_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?= _("Página de login do CV") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => get_option( BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME ),
                    'name'      => BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?= __("Selecione a página a ser utilizada para a exibição do login para o CV. O shortcode [". BNE_Strings::LOGIN_SHORTCODE_NAME ."] deve estar presente nesta página para que o login seja exibido.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?= _("URL para o cadastro do CV") ?></th>
            <td>
                <code><?= get_home_url() ?></code>
                <input name="<?= BNE_Strings::REGISTER_CV_URL_OPTION_NAME ?>"  
                    value="<?= get_option( BNE_Strings::REGISTER_CV_URL_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?= _("Página de cadastro do CV") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => get_option( BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME ),
                    'name'      => BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?= __("Selecione a página a ser utilizada para a exibição do cadastro para o CV. O shortcode [". BNE_Strings::REGISTER_SHORTCODE_NAME ."] deve estar presente nesta página para que o formulário seja exibido.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?= _("URL para o sucesso no cadastro do CV") ?></th>
            <td>
                <code><?= get_home_url() ?></code>
                <input name="<?= BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME ?>"  
                    value="<?= get_option( BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?= _("Página para o sucesso no cadastro do CV") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => get_option( BNE_Strings::SUCCESS_REGISTER_CV_PAGE_ID_OPTION_NAME ),
                    'name'      => BNE_Strings::SUCCESS_REGISTER_CV_PAGE_ID_OPTION_NAME ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?= __("Selecione a página a ser utilizada para a exibição após o cadastro CV.") ?></p>            
            </td>
        </tr>
    </table>

    <?php submit_button(); ?>
</form>
</div>
