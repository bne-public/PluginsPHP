<!-- <pre>
  <?= print_r( $cv )?>
</pre> -->

<input type="hidden" name="new_cv" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais')) == null ? 1 : 0 ?>" />
<input type="hidden" name="passo" value="2" />

<ul class="steps desktop">
  <li class="done"><a href="?passo=1"><?= __("Mini Currículo") ?></a></li>
  <li class="active"><p><?= __("Dados pessoais") ?></p></li>
  <li class="undone"><p><?= __("Formação") ?></p></li>
  <li class="undone"><p><?= __("Complemento") ?></p></li>
</ul>
<ul class="steps mobile">
  <li class="done"><a href="?passo=1">1</a></li>
  <li class="active"><p>2</p></li>
  <li class="undone"><p>3</li>
  <li class="undone"><p>4</li>
</ul>

<div class="input-line two-columns">
  <div class="input-container">
    <label for="cpf"><?= __("RG") ?></label>
    <input type="text" name="rg" id="rg" class="input" value="<?= BNE_Util::Try_Get_Int_Bigger_Than_Zero_InArray($cv, array('DadosPessoais', 'NumeroRg')) ?>" >
  </div>
  <div class="input-container">
    <label for="oe"><?= __("Órgão Emissor") ?></label>
    <input type="text" name="oe" id="oe" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'OrgaoEmissorRg')) ?>" >
  </div>
</div>

<div class="input-container">
  <label for="estado_civil" class="required"><?= __("Estado Civil") ?></label>
  <select name="estado_civil" id="estado_civil" required>
    <option disabled selected value> -- <?= __("Selecione seu estado civil") ?> -- </option>
    <?php $estadoCivil = BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'EstadoCivil')) ?>
    <option value="Amasiado(a)" <?= $estadoCivil == "Amasiado(a)" ? "selected"  : '' ?>><?= __("Amasiado(a)") ?></option>
    <option value="Casado(a)" <?= $estadoCivil  == "Casado(a)" ? "selected"  : '' ?>><?= __("Casado(a)") ?></option>
    <option value="Divorciado(a)" <?= $estadoCivil == "Divorciado(a)" ? "selected"  : '' ?>><?= __("Divorciado(a)") ?></option>
    <option value="Separado(a) Judicialmente ou Desquitado(a)" <?= $estadoCivil == "Separado(a) Judicialmente ou Desquitado(a)" ? "selected"  : '' ?>><?= __("Separado(a) Judicialmente ou Desquitado(a)") ?></option>
    <option value="Solteiro(a)" <?= $estadoCivil == "Solteiro(a)" ? "selected"  : '' ?>><?= __("Solteiro(a)") ?></option>
    <option value="Viúvo(a)" <?= $estadoCivil == "Viúvo(a)" ? "selected"  : '' ?>><?= __("Viúvo(a)") ?></option>
    <option value="Outros" <?= $estadoCivil == "Outros" ? "selected"  : '' ?>><?= __("Outros") ?></option>  
  </select>
</div>

<div class="input-line two-columns">
  <div class="input-container">
    <label for="cep" class="required"><?= __("CEP") ?></label>
    <input type="tel" data-mask="00.000-000" name="cep" id="cep" class="input" 
      value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'Endereco', 'Cep')) ?>" required>
  </div>
  <div class="input-container">
  </div>
</div>
<div class="input-line two-columns">
  <div class="input-container">
    <label for="endereco" class="required"><?= __("Endereço") ?></label>
    <input type="text" name="endereco" id="endereco" class="input" 
      value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'Endereco', 'Logradouro')) ?>" required>
  </div>
  <div class="input-container">
    <label for="numero" class="required"><?= __("Número") ?></label>
    <input type="text" name="numero" id="numero" class="input" 
      value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'Endereco', 'Numero'))  ?>" required>
  </div>
</div>
<div class="input-line two-columns">
  <div class="input-container">
    <label for="complemento"><?= __("Complemento") ?></label>
    <input type="text" name="complemento" id="complemento" class="input" 
      value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'Endereco', 'Complemento')) ?>" >
  </div>
  <div class="input-container">
    <label for="bairro" class="required"><?= __("Bairro") ?></label>
    <input type="text" name="bairro" id="bairro" class="input" 
      value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'Endereco', 'Bairro')) ?>" required>
  </div>
</div>
<div class="input-line two-columns">
  <div class="input-container">
    <label for="cep" class="required"><?= __("Cidade") ?></label>
    <input type="tel" name="cidade" id="cidade" class="input" 
      value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'Endereco', 'Cidade')) ?>" required>
  </div>
  <div class="input-container">
  </div>
</div>

<div class="input-line two-columns">
  <div class="input-container">
    <label for="fixo"><?= __("Telefone Fixo") ?></label>
    <input type="tel" data-mask="(00) 0000-0000" name="fixo" id="fixo" class="input" value="<?= BNE_Util::Try_Get_Int_Bigger_Than_Zero_InArray($cv, array('DadosPessoais', 'DDDTelefoneFixo')) . BNE_Util::Try_Get_Int_Bigger_Than_Zero_InArray($cv, array('DadosPessoais', 'NumeroTelefoneFixo')) ?>" >
  </div>
  <div class="input-container"></div>
</div>

<div class="input-line two-columns">
  <div class="input-container">
    <label for="fixo_recado"><?= __("Telefone Fixo para Recado") ?></label>
    <input type="tel" data-mask="(00) 0000-0000" name="fixo_recado" id="fixo_recado" class="input" value="<?= BNE_Util::Try_Get_Int_Bigger_Than_Zero_InArray($cv, array('DadosPessoais', 'DDDTelefoneFixoRecado')) . BNE_Util::Try_Get_Int_Bigger_Than_Zero_InArray($cv, array('DadosPessoais', 'NumeroTelefoneFixoRecado')) ?>" >
  </div>
  <div class="input-container">
    <label for="falar_com_fixo"><?= __("Falar com") ?></label>
    <input type="text" name="falar_com_fixo" id="falar_com_fixo" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'NomeContatoTelefoneFixo')) ?>" >
  </div>
</div>

<div class="input-line two-columns">
  <div class="input-container">
    <label for="celular_recado"><?= __("Celular para Recado") ?></label>
    <input type="tel" data-mask="(00) 0 0000-0000" name="celular_recado" id="celular_recado" class="input" value="<?= BNE_Util::Try_Get_Int_Bigger_Than_Zero_InArray($cv, array('DadosPessoais', 'DDDCelularRecado')) . BNE_Util::Try_Get_Int_Bigger_Than_Zero_InArray($cv, array('DadosPessoais', 'NumeroCelularRecado')) ?>" >
  </div>
  <div class="input-container">
    <label for="falar_com_celular"><?= __("Falar com") ?></label>
    <input type="text" name="falar_com_celular" id="falar_com_celular" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais', 'NomeContatoCelular')) ?>" >
  </div>
</div>

<div class="group experiencias">
  <h2><?= __("Experiências Profissionais") ?></h2>
  <div class="experiencia 0">
    <h3><?= __("Última Empresa (a mais recente)") ?></h3>
    <div class="input-line two-columns">
      <div class="input-container">
        <label for="nome_empresa"><?= __("Nome da Empresa") ?></label>
        <input type="text" name="experiencias[0][nome_empresa]" id="nome_empresa" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('Experiencias', 0, 'NomeEmpresa')) ?>" >
      </div>
      <div class="input-container">
        <label for="area_empresa"><?= __("Empresa trabalha com") ?></label>
        <select name="experiencias[0][area_empresa]" id="area_empresa" >
          <option disabled selected value> -- <?= __("Selecione") ?> -- </option>
          <?php $area = BNE_Util::Try_Get_InArray($cv, array('Experiencias', 0, 'Area')) ?>
          <option value="Acessórios" <?= $area == "Acessórios" ? "selected" : '' ?>><?= __("Acessórios") ?></option> 
          <option value="Administração Pública " <?= $area == "Administração Pública " ? "selected" : '' ?>><?= __("Administração Pública ") ?></option> 
          <option value="Administrativo" <?= $area == "Administrativo" ? "selected" : '' ?>><?= __("Administrativo") ?></option> 
          <option value="Agronegócios" <?= $area == "Agronegócios" ? "selected" : '' ?>><?= __("Agronegócios") ?></option> 
          <option value="Água e Esgoto" <?= $area == "Água e Esgoto" ? "selected" : '' ?>><?= __("Água e Esgoto") ?></option> 
          <option value="Alimentos" <?= $area == "Alimentos" ? "selected" : '' ?>><?= __("Alimentos") ?></option> 
          <option value="Arte e Cultura" <?= $area == "Arte e Cultura" ? "selected" : '' ?>><?= __("Arte e Cultura") ?></option> 
          <option value="Associações e Diversos" <?= $area == "Associações e Diversos" ? "selected" : '' ?>><?= __("Associações e Diversos") ?></option> 
          <option value="Bebidas" <?= $area == "Bebidas" ? "selected" : '' ?>><?= __("Bebidas") ?></option> 
          <option value="Comércio" <?= $area == "Comércio" ? "selected" : '' ?>><?= __("Comércio") ?></option> 
          <option value="Comunicação" <?= $area == "Comunicação" ? "selected" : '' ?>><?= __("Comunicação") ?></option> 
          <option value="Construção" <?= $area == "Construção" ? "selected" : '' ?>><?= __("Construção") ?></option> 
          <option value="Consultoria" <?= $area == "Consultoria" ? "selected" : '' ?>><?= __("Consultoria") ?></option> 
          <option value="Contabilidade" <?= $area == "Contabilidade" ? "selected" : '' ?>><?= __("Contabilidade") ?></option> 
          <option value="Educação" <?= $area == "Educação" ? "selected" : '' ?>><?= __("Educação") ?></option> 
          <option value="Elétrico" <?= $area == "Elétrico" ? "selected" : '' ?>><?= __("Elétrico") ?></option> 
          <option value="Eletrônico" <?= $area == "Eletrônico" ? "selected" : '' ?>><?= __("Eletrônico") ?></option> 
          <option value="Energia" <?= $area == "Energia" ? "selected" : '' ?>><?= __("Energia") ?></option> 
          <option value="Esporte" <?= $area == "Esporte" ? "selected" : '' ?>><?= __("Esporte") ?></option> 
          <option value="Extração" <?= $area == "Extração" ? "selected" : '' ?>><?= __("Extração") ?></option> 
          <option value="Farmacêutico" <?= $area == "Farmacêutico" ? "selected" : '' ?>><?= __("Farmacêutico") ?></option> 
          <option value="Financeiro" <?= $area == "Financeiro" ? "selected" : '' ?>><?= __("Financeiro") ?></option> 
          <option value="Forças Armadas" <?= $area == "Forças Armadas" ? "selected" : '' ?>><?= __("Forças Armadas") ?></option> 
          <option value="Fumo" <?= $area == "Fumo" ? "selected" : '' ?>><?= __("Fumo") ?></option> 
          <option value="Gráfica" <?= $area == "Gráfica" ? "selected" : '' ?>><?= __("Gráfica") ?></option> 
          <option value="Hotelaria e Turismo" <?= $area == "Hotelaria e Turismo" ? "selected" : '' ?>><?= __("Hotelaria e Turismo") ?></option> 
          <option value="Imobiliária" <?= $area == "Imobiliária" ? "selected" : '' ?>><?= __("Imobiliária") ?></option> 
          <option value="Informática" <?= $area == "Informática" ? "selected" : '' ?>><?= __("Informática") ?></option> 
          <option value="Internacional" <?= $area == "Internacional" ? "selected" : '' ?>><?= __("Internacional") ?></option> 
          <option value="Jurídico" <?= $area == "Jurídico" ? "selected" : '' ?>><?= __("Jurídico") ?></option> 
          <option value="Limpeza" <?= $area == "Limpeza" ? "selected" : '' ?>><?= __("Limpeza") ?></option> 
          <option value="Locação" <?= $area == "Locação" ? "selected" : '' ?>><?= __("Locação") ?></option> 
          <option value="Logística" <?= $area == "Logística" ? "selected" : '' ?>><?= __("Logística") ?></option> 
          <option value="Madeira" <?= $area == "Madeira" ? "selected" : '' ?>><?= __("Madeira") ?></option> 
          <option value="Manutenção" <?= $area == "Manutenção" ? "selected" : '' ?>><?= __("Manutenção") ?></option> 
          <option value="Marketing" <?= $area == "Marketing" ? "selected" : '' ?>><?= __("Marketing") ?></option> 
          <option value="Mecânico" <?= $area == "Mecânico" ? "selected" : '' ?>><?= __("Mecânico") ?></option> 
          <option value="Metal Mecânico" <?= $area == "Metal Mecânico" ? "selected" : '' ?>><?= __("Metal Mecânico") ?></option> 
          <option value="Metalurgia" <?= $area == "Metalurgia" ? "selected" : '' ?>><?= __("Metalurgia") ?></option> 
          <option value="Minerais" <?= $area == "Minerais" ? "selected" : '' ?>><?= __("Minerais") ?></option> 
          <option value="Móveis" <?= $area == "Móveis" ? "selected" : '' ?>><?= __("Móveis") ?></option> 
          <option value="Papel " <?= $area == "Papel " ? "selected" : '' ?>><?= __("Papel ") ?></option> 
          <option value="Petróleo" <?= $area == "Petróleo" ? "selected" : '' ?>><?= __("Petróleo") ?></option> 
          <option value="Plástico" <?= $area == "Plástico" ? "selected" : '' ?>><?= __("Plástico") ?></option> 
          <option value="Produção" <?= $area == "Produção" ? "selected" : '' ?>><?= __("Produção") ?></option> 
          <option value="Químico" <?= $area == "Químico" ? "selected" : '' ?>><?= __("Químico") ?></option> 
          <option value="Recursos Humanos" <?= $area == "Recursos Humanos" ? "selected" : '' ?>><?= __("Recursos Humanos") ?></option> 
          <option value="Saúde" <?= $area == "Saúde" ? "selected" : '' ?>><?= __("Saúde") ?></option> 
          <option value="Segurança" <?= $area == "Segurança" ? "selected" : '' ?>><?= __("Segurança") ?></option> 
          <option value="Serviços Domésticos" <?= $area == "Serviços Domésticos" ? "selected" : '' ?>><?= __("Serviços Domésticos") ?></option> 
          <option value="Serviços Pessoais" <?= $area == "Serviços Pessoais" ? "selected" : '' ?>><?= __("Serviços Pessoais") ?></option> 
          <option value="Social" <?= $area == "Social" ? "selected" : '' ?>><?= __("Social") ?></option> 
          <option value="Telecomunicações" <?= $area == "Telecomunicações" ? "selected" : '' ?>><?= __("Telecomunicações") ?></option> 
          <option value="Têxteis" <?= $area == "Têxteis" ? "selected" : '' ?>><?= __("Têxteis") ?></option> 
          <option value="Veículos" <?= $area == "Veículos" ? "selected" : '' ?>><?= __("Veículos") ?></option> 

        </select>
      </div>
    </div>
    <div class="input-line three-columns">
      <div class="input-container">
        <label for="admissao"><?= __("Data de Admissão") ?></label>
        <input type="tel" data-mask="00/00/0000" name="experiencias[0][admissao]" id="admissao" class="input" value="<?= BNE_Util::Try_Get_Date_InArray($cv, array('Experiencias', 0, 'DataAdmissao')) ?>" >
      </div>
      <div class="input-container">
        <label for="demissao"><?= __("Data de Demissão") ?></label>
        <input type="tel" data-mask="00/00/0000" name="experiencias[0][demissao]" id="demissao" class="input" value="<?= BNE_Util::Try_Get_Date_InArray($cv, array('Experiencias', 0, 'DataDemissao')) ?>" >
      </div>
      <div class="input-container">
        <label for="ultimo_salario"><?= __("Último Salário") ?></label>
        <input type="text" data-mask="000.000.000.000.000,00"  data-mask-reverse="true" name="experiencias[0][ultimo_salario]" id="ultimo_salario" class="input" value="<?= BNE_Util::Try_Get_Currency_InArray($cv, array('Experiencias', 0, 'Salario')) ?>" >
      </div>
    </div>
    <div class="input-container">
      <label for="funcao_exercida"><?= __("Função Exercida") ?></label>
      <input type="text" name="experiencias[0][funcao_exercida]" id="funcao_exercida" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('Experiencias', 0, 'Funcao')) ?>" >
    </div>
    <div class="input-container">
      <label for="atribuicoes"><?= __("Atribuições") . " " . __("(Escreva no mínimo 3 tarefas)") ?></label>
      <textarea rows="5" type="text" name="experiencias[0][atribuicoes]" id="atribuicoes" class="input" ><?= BNE_Util::Try_Get_InArray($cv, array('Experiencias', 0, 'Atribuicoes')) ?></textarea>
    </div>
  </div>
  <a href="javascript:void(0)" class="add_experiencia" ><?= __("Adicionar Outra Experiência") ?></a>
</div>