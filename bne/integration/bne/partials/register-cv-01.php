<input type="hidden" name="new_cv" value="<?=BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo')) == null ? 1 : 0 ?>" />
<input type="hidden" name="passo" value="1" />


<p class="register-cv message" <?= empty($message) ? 'style="display: none;"' : '' ?> ><?= empty($message) ? '' : $message ?><br></p>
<p class="register-cv error" <?= empty($error) ? 'style="display: none;"' : '' ?> ><?=  empty($error) ? '' : $error ?><br></p>

<ul class="steps desktop">
  <li class="active"><p><?= __("Mini Currículo") ?></p></li>
  <li class="undone"><p><?= __("Dados pessoais") ?></p></li>
  <li class="undone"><p><?= __("Formação") ?></p></li>
  <li class="undone"><p><?= __("Complemento") ?></p></li>
</ul>
<ul class="steps mobile">
  <li class="active"><p>1</p></li>
  <li class="undone"><p>2</p></li>
  <li class="undone"><p>3</li>
  <li class="undone"><p>4</li>
</ul>

<div class="input-line two-columns">
  <div class="input-container">
    <label for="cpf" class="required"><?= __("CPF") ?></label>
    <?php $cpf = BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'Cpf')); ?>
    <input type="tel" data-mask="000.000.000-00" name="cpf" id="cpf" class="input" <?= $cpf != null ? "disabled" : "" ?> value="<?= $cpf != null ? str_pad($cpf, 11, "0", STR_PAD_LEFT) : '' ?>" required>
  </div>
  <div class="input-container">
    <label for="dn" class="required"><?= __("Data de Nascimento") ?></label>
    <?php $dn = BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'DataNascimento')); ?>
    <input type="tel" data-mask="00/00/0000" name="dn" id="dn" class="input" <?= $dn != null ? "disabled" : "" ?> value="<?= $dn != null ? date_format(date_create($dn), 'd/m/Y') : '' ?>" required>
  </div>
</div>

<div class="input-container">
  <label for="nome" class="required"><?= __("Nome") ?></label>
  <input type="text" name="nome" id="nome" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'Nome')) ?>" required>
</div>

<div class="input-line two-columns">
  <div class="input-container">
    <label for="email" class="required"><?= __("E-mail") ?></label>
    <input type="email" name="email" id="email" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'Email')) ?>" required>
  </div>
  <div class="input-container">
    <label for="celular" class="required"><?= __("Celular") ?></label>
    <input type="tel" data-mask="(00) 0 0000-0000" name="celular" id="celular" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'DDDCelular')) . BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'NumeroCelular')) ?>" required>
  </div>
</div>

<div class="input-container">
  <?php $sexo = BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'Sexo')); ?>
  <label for="sexo" class="required"><?= __("Sexo") ?></label>
  <input type="radio" name="sexo" value="Masculino" <?= $sexo == "Masculino" ? "checked"  : '' ?> required> Masculino</input>
  <input type="radio" name="sexo" value="Feminino" <?= $sexo == "Feminino" ? "checked"  : '' ?> /> Feminino
  <label for="gender" class="error" style="display: none;">Please select your gender</label>
</div>

<div class="input-container">
  <label for="cidade" class="required"><?= __("Cidade") ?></label>
  <input type="text" name="cidade" id="cidade" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'Cidade')) ?>" required>
</div>

<div class="input-container">
  <?php $escolaridade = BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'Escolaridade')); ?>
  <label for="escolaridade" class="required"><?= __("Escolaridade") ?></label>
  <select name="escolaridade" id="escolaridade" required>
  <option disabled selected value> -- <?= __("Selecione sua escolaridade") ?> -- </option>
    <option value="Ensino Fundamental Incompleto" <?= $escolaridade == "Ensino Fundamental Incompleto" ? "selected"  : '' ?>><?= __("Ensino Fundamental Incompleto") ?></option>
    <option value="Ensino Fundamental Completo" <?= $escolaridade == "Ensino Fundamental Completo" ? "selected"  : '' ?>><?= __("Ensino Fundamental Completo") ?></option>
    <option value="Ensino Médio Incompleto" data-aceita-estagio="true" <?= $escolaridade == "Ensino Médio Incompleto" ? "selected"  : '' ?>><?= __("Ensino Médio Incompleto") ?></option>
    <option value="Ensino Médio Completo" <?= $escolaridade == "Ensino Médio Completo" ? "selected"  : '' ?>><?= __("Ensino Médio Completo") ?></option>
    <option value="Técnico/Pós-Médio Incompleto" data-aceita-estagio="true" <?= $escolaridade == "Técnico/Pós-Médio Incompleto" ? "selected"  : '' ?>><?= __("Técnico/Pós-Médio Incompleto") ?></option>
    <option value="Técnico/Pós-Médio Completo" <?= $escolaridade == "Técnico/Pós-Médio Completo" ? "selected"  : '' ?>><?= __("Técnico/Pós-Médio Completo") ?></option>
    <option value="Tecnólogo Incompleto" data-aceita-estagio="true" <?= $escolaridade == "Tecnólogo Incompleto" ? "selected"  : '' ?>><?= __("Tecnólogo Incompleto") ?></option>
    <option value="Superior Incompleto" data-aceita-estagio="true" <?= $escolaridade == "Superior Incompleto" ? "selected"  : '' ?>><?= __("Superior Incompleto") ?></option>
    <option value="Tecnólogo Completo" <?= $escolaridade == "Tecnólogo Completo" ? "selected"  : '' ?>><?= __("Tecnólogo Completo") ?></option>
    <option value="Superior Completo" <?= $escolaridade == "Superior Completo" ? "selected"  : '' ?>><?= __("Superior Completo") ?></option>
    <option value="Pós Graduação / Especialização" <?= $escolaridade == "Pós Graduação / Especialização" ? "selected"  : '' ?>><?= __("Pós Graduação / Especialização") ?></option>
    <option value="Mestrado" <?= $escolaridade == "Mestrado" ? "selected"  : '' ?>><?= __("Mestrado") ?></option>
    <option value="Doutorado" <?= $escolaridade == "Doutorado" ? "selected"  : '' ?>><?= __("Doutorado") ?></option>
    <option value="Pós-Doutorado" <?= $escolaridade == "Pós-Doutorado" ? "selected"  : '' ?>><?= __("Pós-Doutorado") ?></option>
  </select>
</div>

<div class="input-container aceitaEstagio" style="display: none;">
  <input type="checkbox" name="aceitaEstagio" <?= BNE_Util::Try_Get_Boolean_InArray($cv, array('MiniCurriculo', 'AceitoEstagio'))  ? "checked"  : '' ?> ><?= __("Aceito atuar como Estagiário.") ?></input>
</div>

<?php for ($i=0; $i < 3; $i++) : ?>
<div class="input-container">
  <label for="funcao_pretendida_<?= $i+1 ?>" <?= $i == 0 ? ' class="required"' : "" ?>><?= __("Função Pretendida") . " " . ($i+1) ?></label>
  <div class="input-line two-columns">
    <div class="input-container">
      <input type="text" name="funcao_pretendida_<?= $i+1 ?>" id="funcao_pretendida_<?= $i+1 ?>" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('MiniCurriculo', 'FuncoesPretendidas', $i, 'Funcao')) ?>" <?= $i == 0 ? "required" : "" ?> >
    </div>
    <div class="input-container">
      <div class="input-line five-columns experiencia">
        <div class="col1"><?= __("Experiência:") ?></div>
        <input type="text" data-mask="00" name="anos_experiencia_<?= $i+1 ?>" id="anos_experiencia_<?= $i+1 ?>" class="input col2" value="<?= BNE_Util::Try_Get_Int_Bigger_Than_Zero_InArray($cv, array('MiniCurriculo', 'FuncoesPretendidas', $i, 'Anos')) ?>" size="2" >
        <span class="col3"><?= __("anos e ") ?></span>
        <input type="text" data-mask="00" name="meses_experiencia_<?= $i+1 ?>" id="meses_experiencia_<?= $i+1 ?>" class="input col4" value="<?= BNE_Util::Try_Get_Int_Bigger_Than_Zero_InArray($cv, array('MiniCurriculo', 'FuncoesPretendidas', $i, 'Meses'))?>" size="2" >
        <span class="col5"><?= __("meses.") ?></span>
      </div>
    </div>
  </div>
</div>
<?php endfor; ?>

<div class="input-line two-columns">
  <div class="input-container">
    <label for="pretensao" class="required"><?= __("Pretensão Salarial") ?></label>
    <input type="text" data-mask="000.000.000.000.000,00"  data-mask-reverse="true" name="pretensao" id="pretensao" class="input" value="<?= BNE_Util::Try_Get_Currency_InArray($cv, array('MiniCurriculo', 'PretensaoSalarial')) ?>" required>
  </div>
  <div class="input-container">&nbsp;</div>
</div>