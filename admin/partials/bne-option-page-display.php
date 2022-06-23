<div class="wrap">
<h1><?php echo __("Configurações BNE") ?></h1>
<form method="post" action="options.php"> 
    <?php echo settings_fields( 'bne_url_options' ); ?>
    <?php echo do_settings_sections( 'bne_url_options' ); ?>

    <table class="form-table">
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("Sandbox") ?></th>
            <td>
                <?php $sandbox = get_option( BNE_Strings::SANDBOX_OPTION_NAME ) ?>
                <input name="<?php echo BNE_Strings::SANDBOX_OPTION_NAME ?>" 
                    id="<?php echo BNE_Strings::SANDBOX_OPTION_NAME ?>"  
                    type="checkbox" 
                    <?php echo $sandbox ? "checked" : "" ?>
                    class="regular-text code"><label for="<?php echo BNE_Strings::SANDBOX_OPTION_NAME ?>" ><?php echo __("Ativo") ?></label>
                <p class="description" id="tagline-description"><?php echo __("Deixe essa opção marcada para efetuar testes. Todas as alterações serão efetuadas no ambiente de testes.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("Api Key") ?></th>
            <td>
                <input name="<?php echo BNE_Strings::APIKEY_OPTION_NAME ?>"  
                    value="<?php echo get_option( BNE_Strings::APIKEY_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
                <p class="description" id="tagline-description"><?php echo __("Coloque aqui a api key recebida. Caso ainda não possua uma, envie um e-mail para contato@bne.com.br.") ?></p>            
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><?php echo _("URL do resultado da pesquisa de vagas") ?></th>
            <td>
                <code><?php echo esc_html(get_home_url()) ?></code>
                <input name="<?php echo esc_html(BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME) ?>"  
                    value="<?php echo esc_html(get_option( BNE_Strings::JOB_SEARCH_RESULT_URL_OPTION_NAME )) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><?php echo _("Número de vagas por página") ?></th>
            <td>
                <input name="<?php echo esc_html(BNE_Strings::JOB_SEARCH_RESULTS_PER_PAGE_OPTION_NAME) ?>"  
                    value="<?php echo esc_html(get_option( BNE_Strings::JOB_SEARCH_RESULTS_PER_PAGE_OPTION_NAME )) ?>"
                    type="number" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top">
            <th scope="row"><?php echo _("Página do resultado de vagas") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => esc_html(get_option( BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME )),
                    'name'      => esc_html(BNE_Strings::JOB_SEARCH_RESULT_PAGE_ID_OPTION_NAME) ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?php echo __("Selecione a página a ser utilizada para a exibição do resultado de vagas. O shortcode [". BNE_Strings::JOB_SEARCH_RESULTS_SHORTCODE_NAME ."] deve estar presente nesta página para que o resultado seja exibido.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("URL de detalhes da vaga") ?></th>
            <td>
                <code><?php echo get_home_url() ?></code>
                <input name="<?php echo BNE_Strings::JOB_VIEW_URL_OPTION_NAME ?>"  
                    value="<?php echo get_option( BNE_Strings::JOB_VIEW_URL_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("Página de detalhes da vaga") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => get_option( BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME ),
                    'name'      => BNE_Strings::JOB_VIEW_PAGE_ID_OPTION_NAME ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?php echo __("Selecione a página a ser utilizada para a exibição dos detalhes de vagas. O shortcode [". BNE_Strings::JOB_SEARCH_RESULTS_SHORTCODE_NAME ."] deve estar presente nesta página para que o resultado seja exibido.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("URL de login do CV") ?></th>
            <td>
                <code><?php echo get_home_url() ?></code>
                <input name="<?php echo BNE_Strings::LOGIN_CV_URL_OPTION_NAME ?>"  
                    value="<?php echo get_option( BNE_Strings::LOGIN_CV_URL_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("Página de login do CV") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => get_option( BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME ),
                    'name'      => BNE_Strings::LOGIN_CV_PAGE_ID_OPTION_NAME ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?php echo __("Selecione a página a ser utilizada para a exibição do login para o CV. O shortcode [". BNE_Strings::LOGIN_SHORTCODE_NAME ."] deve estar presente nesta página para que o login seja exibido.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("URL para o cadastro do CV") ?></th>
            <td>
                <code><?php echo get_home_url() ?></code>
                <input name="<?php echo BNE_Strings::REGISTER_CV_URL_OPTION_NAME ?>"  
                    value="<?php echo get_option( BNE_Strings::REGISTER_CV_URL_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("Página de cadastro do CV") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => get_option( BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME ),
                    'name'      => BNE_Strings::REGISTER_CV_PAGE_ID_OPTION_NAME ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?php echo __("Selecione a página a ser utilizada para a exibição do cadastro para o CV. O shortcode [". BNE_Strings::REGISTER_SHORTCODE_NAME ."] deve estar presente nesta página para que o formulário seja exibido.") ?></p>            
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("URL para o sucesso no cadastro do CV") ?></th>
            <td>
                <code><?php echo get_home_url() ?></code>
                <input name="<?php echo BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME ?>"  
                    value="<?php echo get_option( BNE_Strings::SUCCESS_REGISTER_CV_URL_OPTION_NAME ) ?>"
                    type="text" 
                    class="regular-text code">
            </td>
        </tr>
        <tr valign="top" hidden>
            <th scope="row"><?php echo _("Página para o sucesso no cadastro do CV") ?></th>
            <td>
                <?php wp_dropdown_pages(array(
                    'selected'  => get_option( BNE_Strings::SUCCESS_REGISTER_CV_PAGE_ID_OPTION_NAME ),
                    'name'      => BNE_Strings::SUCCESS_REGISTER_CV_PAGE_ID_OPTION_NAME ,
                    'class'     => "regular-text code"
                )); ?>
                <p class="description" id="tagline-description"><?php echo __("Selecione a página a ser utilizada para a exibição após o cadastro CV.") ?></p>            
            </td>
        </tr>
    </table>

    <?php submit_button(); ?>
</form>
</div>
