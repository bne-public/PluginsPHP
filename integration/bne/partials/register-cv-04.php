<input type="hidden" name="new_cv" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosComplementares')) == null ? 1 : 0 ?>" />
<input type="hidden" name="passo" value="4" />

<ul class="steps desktop">
  <li class="done"><a href="?passo=1"><?= __("Mini Currículo") ?></a></li>
  <li class="done"><a href="?passo=2"><?= __("Dados pessoais") ?></a></li>
  <li class="done"><a href="?passo=3"><?= __("Formação") ?></a></li>
  <li class="active"><p><?= __("Complemento") ?></p></li>
</ul>
<ul class="steps mobile">
  <li class="done"><a href="?passo=1">1</a></li>
  <li class="done"><a href="?passo=2">2</a></li>
  <li class="done"><a href="?passo=3">3</a></li>
  <li class="active"><p>4</li>
</ul>

<div class="group veiculos">
  <h2><?= __("Veículos") ?></h2>
  <div class="form">
    <div class="input-line three-columns">
      <div class="input-container">
        <label for="tipo_veiculo" class="required"><?= __("Tipo Veículo") ?></label>
        <select name="tipo_veiculo" id="tipo_veiculo" required>
          <option disabled selected value> -- <?= __("Selecione") ?> -- </option>
          <option value="Caminhão" ><?= __("Caminhão") ?></option> 
          <option value="Carro" ><?= __("Carro") ?></option> 
          <option value="Motocicleta" ><?= __("Motocicleta") ?></option> 
          <option value="Ônibus" ><?= __("Ônibus") ?></option> 
          <option value="Outros" ><?= __("Outros") ?></option> 
          <option value="Utilitário" ><?= __("Utilitário") ?></option>         
        </select>
      </div>
      <div class="input-container">
        <label for="modelo_veiculo" class="required"><?= __("Modelo (ex.: Fusca)") ?></label>
        <input type="text" name="modelo_veiculo" id="modelo_veiculo" class="input" value="" required>
      </div>
      <div class="input-container">
        <label for="ano_veiculo" class="required"><?= __("Ano") ?></label>
        <input type="text" data-mask="0000" name="ano_veiculo" id="ano_veiculo" class="input" value="" required>
      </div>
    </div>
  </div>
  <a href="javascript:void(0)" class="add_veiculo" ><?= __("Adicionar Veículo") ?></a>
  <table class="veiculos">
    <tbody>
      <tr>
        <th><?= __("Tipo Veículo") ?></th>
        <th><?= __("Modelo") ?></th>
        <th><?= __("Ano") ?></th>
        <th>&nbsp;</th>
      </tr>
      <?php 
      $veiculos = BNE_Util::Try_Get_InArray($cv, array("DadosComplementares", "Veiculos")); 
      if ($veiculos != null):
        for ($i=0; $i < count($veiculos); $i++):
          $tipo = BNE_Util::Try_Get_InArray($veiculos, array($i, 'TipoVeiculo'));
          $modelo = BNE_Util::Try_Get_InArray($veiculos, array($i, 'DescricaoModelo'));
          $ano = BNE_Util::Try_Get_InArray($veiculos, array($i, 'Ano'));
          ?>
          <tr class="veiculo" data-veiculo-key="<?= $i ?>">
            <td><input type="hidden" name="veiculo[<?= $i ?>][tipo]" value="<?= $tipo ?>" /><?= $tipo ?></td>
            <td><input type="hidden" name="veiculo[<?= $i ?>][modelo]" value="<?= $modelo ?>" /><?= $modelo ?></td>
            <td><input type="hidden" name="veiculo[<?= $i ?>][ano]" value="<?= $ano ?>" /><?= $ano ?></td>
            <td><a class="remover" href="javascript:void(0)">Excluir</a></td>
          </tr>
        <?php endfor; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>
<h2><?= __("Habilitação (CNH)") ?></h2>
<div class="input-line two-columns">
  <div class="input-container">
    <label for="categoria_habilitacao"><?= __("Categoria") ?></label>
    <?php $categoria = BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'CategoriaCNH')) ?>
    <select name="categoria_habilitacao" id="categoria_habilitacao" >
      <option disabled selected value> -- <?= __("Selecione") ?> -- </option>
      <option value="A" <?= $categoria == "A" ? "selected" : '' ?>><?= __("A") ?></option>
      <option value="AB" <?= $categoria == "AB" ? "selected" : '' ?>><?= __("AB") ?></option>
      <option value="AC" <?= $categoria == "AC" ? "selected" : '' ?>><?= __("AC") ?></option>
      <option value="AD" <?= $categoria == "AD" ? "selected" : '' ?>><?= __("AD") ?></option>
      <option value="AE" <?= $categoria == "AE" ? "selected" : '' ?>><?= __("AE") ?></option>
      <option value="B" <?= $categoria == "B" ? "selected" : '' ?>><?= __("B") ?></option>
      <option value="C" <?= $categoria == "C" ? "selected" : '' ?>><?= __("C") ?></option>
      <option value="D" <?= $categoria == "D" ? "selected" : '' ?>><?= __("D") ?></option>
      <option value="E" <?= $categoria == "E" ? "selected" : '' ?>><?= __("E") ?></option>
    </select>
  </div>
  <div class="input-container">
    <label for="numero_habilitacao" ><?= __("Número do Registro da CNH") ?></label>
    <input type="text" name="numero_habilitacao" id="numero_habilitacao" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'NumeroCnh')) ?>" >
  </div>
</div>

<h2><?= __("Outros Conhecimentos") ?><a class="help" href="javascript:void(0)" title="Informe aqui suas habilidades e conhecimentos importantes para a função. Ex: (Vendedor) Facilidade em negociações comerciais, prospecção e reativação de carteira de clientes.">?</a></h2>
<div class="input-container">
  <textarea rows="5" type="text" name="outros_conhecimentos" id="outros_conhecimentos" class="input" ><?= BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'OutrosConhecimentos')) ?></textarea>
</div>

<h2><?= __("Observações") ?><a class="help" href="javascript:void(0)" title="Utilize este campo para descrever dados como, religião, trabalhos temporários/ free lancer, outras experiências profissionais, trabalho voluntário hobbies etc.">?</a></h2>
<div class="input-container">
  <textarea rows="5" type="text" name="observacoes" id="observacoes" class="input" ><?= BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'Observacoes')) ?></textarea>
</div>

<h2><?= __("Horário Disponível para Trabalho") ?></h2>
<?php 
$disponibilidades = BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'Disponibilidades'));
if($disponibilidades == null){
  $disponibilidades = array();
}
?>
<div class="input-container">
  <input type="checkbox" name="disponibilidade[]" value="Manha" id="Manha" <?= in_array("Manha", $disponibilidades) ? "checked"  : '' ?> /><label class="for-checkbox" for="Manha"><?= _("Manhã") ?></label>
  <input type="checkbox" name="disponibilidade[]" value="Tarde" id="Tarde" <?= in_array("Tarde", $disponibilidades) ? "checked"  : '' ?> /><label class="for-checkbox" for="Tarde"><?= _("Tarde") ?></label>
  <input type="checkbox" name="disponibilidade[]" value="Noite" id="Noite" <?= in_array("Noite", $disponibilidades) ? "checked"  : '' ?> /><label class="for-checkbox" for="Noite"><?= _("Noite") ?></label>
  <input type="checkbox" name="disponibilidade[]" value="Sábado" id="Sabado" <?= in_array("Sábado", $disponibilidades) ? "checked"  : '' ?> /><label class="for-checkbox" for="Sabado"><?= _("Sábado") ?></label>
  <input type="checkbox" name="disponibilidade[]" value="Domingo" id="Domingo" <?= in_array("Domingo", $disponibilidades) ? "checked"  : '' ?> /><label class="for-checkbox" for="Domingo"><?= _("Domingo") ?></label>
</div>
<div class="input-container">
  <input type="checkbox" name="disponibilidade[]" value="Viagem" id="Viagem" <?= in_array("Viagem", $disponibilidades) ? "checked"  : '' ?> /><label class="for-checkbox" for="Viagem"><?= _("Disponibilidade para Viagem") ?></label>
</div>

<h2><?= __("Características Pessoais") ?></h2>
<div class="input-container">
  <label for="raca"><?= __("Escolha sua raça de acordo com a tabela do governo") ?></label>
  <?php $raca = BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'Raca')) ?>
  <select name="raca" id="raca" >
    <option disabled selected value> -- <?= __("Selecione") ?> -- </option>
    <option value="Amarela" <?= $raca == "Amarela" ? "selected" : '' ?>><?= __("Amarela") ?></option> 
    <option value="Branca" <?= $raca == "Branca" ? "selected" : '' ?>><?= __("Branca") ?></option> 
    <option value="Indigena" <?= $raca == "Indigena" ? "selected" : '' ?>><?= __("Indígena") ?></option> 
    <option value="NaoInformado" <?= $raca == "NaoInformado" ? "selected" : '' ?>><?= __("Não Informado") ?></option> 
    <option value="Negra" <?= $raca == "Negra" ? "selected" : '' ?>><?= __("Negra") ?></option> 
    <option value="Parda" <?= $raca == "Parda" ? "selected" : '' ?>><?= __("Parda") ?></option>       
  </select>
</div>
<div class="input-line three-columns">
  <div class="input-container">
    <label for="altura" ><?= __("Altura") ?></label>
    <input type="text" data-mask="0,00" data-mask-reverse="true" name="altura" id="altura" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'Altura')) ?>" >
  </div>
  <div class="input-container">
    <label for="peso" ><?= __("Peso") ?></label>
    <input type="text" data-mask="000" name="peso" id="peso" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'Peso')) ?>" >
  </div>
  <div class="input-container">
    <label for="filhos"><?= __("Filhos?") ?></label>
    <?php $filhos = BNE_Util::Try_Get_Boolean_InArray($cv, array('DadosComplementares', 'PossuiFilhos')) ?>
    <select name="filhos" id="filhos" >
      <option disabled selected value> -- <?= __("Selecione") ?> -- </option>
      <option value="1" <?= $filhos === true ? "selected" : '' ?>><?= __("Sim") ?></option> 
      <option value="0" <?= $filhos === false ? "selected" : '' ?>><?= __("Não") ?></option> 
    </select>
  </div>
</div>

<h2><?= __("Profissional possui deficiência?") ?></h2>
<div class="input-line two-columns">
  <div class="input-container">
    <label for="tipo_deficiencia"><?= __("Tipo de Deficiência") ?></label>
    <?php $tipo = BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'Deficiencia')) ?>
    <select name="tipo_deficiencia" id="tipo_deficiencia" >
      <option disabled selected value> -- <?= __("Selecione") ?> -- </option>
      <option value="Auditiva" <?= $tipo == "Auditiva" ? "selected" : '' ?>><?= __("Auditiva") ?></option> 
      <option value="Física" <?= $tipo == "Física" ? "selected" : '' ?>><?= __("Física") ?></option>
      <option value="Mental" <?= $tipo == "Mental" ? "selected" : '' ?>><?= __("Mental") ?></option>
      <option value="Múltipla" <?= $tipo == "Múltipla" ? "selected" : '' ?>><?= __("Múltipla") ?></option>
      <option value="Nenhuma" <?= $tipo == "Nenhuma" ? "selected" : '' ?>><?= __("Nenhuma") ?></option>
      <option value="Qualquer" <?= $tipo == "Qualquer" ? "selected" : '' ?>><?= __("Qualquer") ?></option>
      <option value="Reabilitado" <?= $tipo == "Reabilitado" ? "selected" : '' ?>><?= __("Reabilitado") ?></option>
      <option value="Visual" <?= $tipo == "Visual" ? "selected" : '' ?>><?= __("Visual") ?></option>
    </select>
  </div>
  <div class="input-container">
    <label for="complemento_deficiencia" ><?= __("Complemento") ?></label>
    <input type="text" name="complemento_deficiencia" id="complemento_deficiencia" class="input" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosComplementares', 'ComplementoDeficiencia')) ?>" >
  </div>
</div>