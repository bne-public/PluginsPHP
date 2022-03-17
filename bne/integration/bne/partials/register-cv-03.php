<input type="hidden" name="new_cv" value="<?= BNE_Util::Try_Get_InArray($cv, array('DadosPessoais')) == null ? 1 : 0 ?>" />
<input type="hidden" name="passo" value="3" />

<ul class="steps desktop">
  <li class="done"><a href="?passo=1"><?= __("Mini Currículo") ?></a></li>
  <li class="done"><a href="?passo=2"><?= __("Dados pessoais") ?></a></li>
  <li class="active"><p><?= __("Formação") ?></p></li>
  <li class="undone"><p><?= __("Complemento") ?></p></li>
</ul>
<ul class="steps mobile">
  <li class="done"><a href="?passo=1">1</a></li>
  <li class="done"><a href="?passo=2">2</a></li>
  <li class="active"><p>3</li>
  <li class="undone"><p>4</li>
</ul>

<div class="group formacao">
  <h2><?= __("Formação") ?></h2>
  <div class="form">
    <div class="input-container">
      <label for="nivel_formacao" class="required"><?= __("Nível de Formação") ?></label>
      <select name="nivel_formacao" id="nivel_formacao" required>
        <option disabled selected value> -- <?= __("Selecione o nível de formação") ?> -- </option>
        <option value="Ensino Fundamental Incompleto" ><?= __("Ensino Fundamental Incompleto") ?></option> 
        <option value="Ensino Fundamental Completo" ><?= __("Ensino Fundamental Completo") ?></option> 
        <option value="Ensino Médio Incompleto" ><?= __("Ensino Médio Incompleto") ?></option> 
        <option value="Ensino Médio Completo" ><?= __("Ensino Médio Completo") ?></option> 
        <option value="Técnico/Pós-Médio Incompleto" ><?= __("Técnico/Pós-Médio Incompleto") ?></option> 
        <option value="Técnico/Pós-Médio Completo" ><?= __("Técnico/Pós-Médio Completo") ?></option> 
        <option value="Tecnólogo Incompleto" ><?= __("Tecnólogo Incompleto") ?></option> 
        <option value="Superior Incompleto" ><?= __("Superior Incompleto") ?></option> 
        <option value="Tecnólogo Completo" ><?= __("Tecnólogo Completo") ?></option> 
        <option value="Superior Completo" ><?= __("Superior Completo") ?></option>         
      </select>
    </div>
    <div class="input-line two-columns">
      <div class="input-container" style="display:none;">
        <label for="instituicao" class="required"><?= __("Instituição de Ensino") ?></label>
        <input type="text" name="instituicao" id="instituicao" class="input" value="" required>
      </div>
      <div class="input-container" style="display:none;">
        <label for="curso" class="required"><?= __("Nome do Curso") ?></label>
        <input type="text" name="curso" id="curso" class="input" value="" required>
      </div>
    </div>
    <div class="input-line three-columns">
      <div class="input-container" style="display:none;">
        <label for="cidade" class="required"><?= __("Cidade") ?></label>
        <input type="text" name="cidade" id="cidade" class="input" value="" required>
      </div>
      <div class="input-container" style="display:none;">
        <label for="situacao" class="required"><?= __("Situação") ?></label>
        <select name="situacao" id="situacao" required>
          <option disabled selected value> -- <?= __("Selecione") ?> -- </option>
          <option value="Cursando" ><?= __("Cursando") ?></option> 
          <option value="Trancado" ><?= __("Trancado") ?></option> 
          <option value="Cancelado" ><?= __("Cancelado") ?></option> 
        </select>
      </div>
      <div class="input-container" style="display:none;">
        <label for="periodo" class="required"><?= __("Período") ?></label>
        <input type="text" data-mask="00" name="periodo" id="periodo" class="input" value="" required>
      </div>
      <div class="input-container" style="display:none;">
        <label for="ano_conclusao" class="required"><?= __("Ano de Conclusão") ?></label>
        <input type="tel" data-mask="0000" name="ano_conclusao" id="ano_conclusao" class="input" value="" required>
      </div>
    </div>
  </div>
  <a href="javascript:void(0)" class="add_formacao" ><?= __("Adicionar Formação") ?></a>
  <table class="formacao">
    <tbody>
      <tr>
        <th>Nível</th>
        <th>Curso</th>
        <th>Instituição</th>
        <th>Conclusão</th>
        <th>&nbsp;</th>
      </tr>
      <?php 
      $niveis = array(
        "Ensino Fundamental Incompleto",
        "Ensino Fundamental Completo",
        "Ensino Médio Incompleto",
        "Ensino Médio Completo",
        "Técnico/Pós-Médio Incompleto",
        "Técnico/Pós-Médio Completo",
        "Tecnólogo Incompleto",
        "Superior Incompleto",
        "Tecnólogo Completo",
        "Superior Completo");
      $formacoes = BNE_Util::Try_Get_InArray($cv, array("Formacao", "CursosFormacao")); 
      if ($formacoes != null):
        for ($i=0; $i < count($formacoes); $i++):
          if (in_array($formacoes[$i]["NivelFormacao"], $niveis)):
            $nivel = BNE_Util::Try_Get_InArray($formacoes, array($i, 'NivelFormacao'));
            $curso = BNE_Util::Try_Get_InArray($formacoes, array($i, 'NomeCurso'));
            $instituicao = BNE_Util::Try_Get_InArray($formacoes, array($i, 'Instituicao'));
            $ano_conclusao = BNE_Util::Try_Get_InArray($formacoes, array($i, 'AnoDeConclusao'));
            $cidade = BNE_Util::Try_Get_InArray($formacoes, array($i, 'Cidade'));
            $situacao = BNE_Util::Try_Get_InArray($formacoes, array($i, 'Situacao'));
            $periodo = BNE_Util::Try_Get_InArray($formacoes, array($i, 'Periodo'));
            ?>
            <tr class="formacao" data-formacao-key="<?= $i ?>">
              <td><input type="hidden" name="formacao[<?= $i ?>][nivel]" value="<?= $nivel ?>" /><?= $nivel ?></td>
              <td><input type="hidden" name="formacao[<?= $i ?>][curso]" value="<?= $curso ?>" /><?= $curso ?></td>
              <td><input type="hidden" name="formacao[<?= $i ?>][instituicao]" value="<?= $instituicao ?>" /><?= $instituicao ?></td>
              <td><input type="hidden" name="formacao[<?= $i ?>][ano_conclusao]" value="<?= $ano_conclusao ?>" /><?= $ano_conclusao ?></td>
              <td><a class="remover" href="javascript:void(0)">Excluir</a></td>
              <input type="hidden" name="formacao[<?= $i ?>][cidade]" value="<?= $cidade ?>" />
              <input type="hidden" name="formacao[<?= $i ?>][situacao]" value="<?= $situacao ?>" />
              <input type="hidden" name="formacao[<?= $i ?>][periodo]" value="<?= $periodo ?>" />
            </tr>
          <?php endif; ?>
        <?php endfor; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<div class="group especializacao">
  <h2><?= __("Especialização") ?></h2>
  <div class="form">
    <div class="input-container">
      <label for="nivel_especializacao" class="required"><?= __("Nível de Especialização") ?></label>
      <select name="nivel_especializacao" id="nivel_especializacao" required>
        <option disabled selected value> -- <?= __("Selecione") ?> -- </option>
        <option value="Pós Graduação / Especialização" ><?= __("Pós Graduação / Especialização") ?></option> 
        <option value="Mestrado" ><?= __("Mestrado") ?></option> 
        <option value="Doutorado" ><?= __("Doutorado") ?></option> 
        <option value="Pós-Doutorado" ><?= __("Pós-Doutorado") ?></option>       
      </select>
    </div>
    <div class="input-line two-columns">
      <div class="input-container" style="display:none;">
        <label for="instituicao_especializacao" class="required"><?= __("Instituição de Ensino") ?></label>
        <input type="text" name="instituicao_especializacao" id="instituicao_especializacao" class="input" value="" required>
      </div>
      <div class="input-container" style="display:none;">
        <label for="curso_especializacao" class="required"><?= __("Nome do Curso") ?></label>
        <input type="text" name="curso_especializacao" id="curso_especializacao" class="input" value="" required>
      </div>
    </div>
    <div class="input-line two-columns">
      <div class="input-container" style="display:none;">
        <label for="cidade_especializacao"><?= __("Cidade") ?></label>
        <input type="text" name="cidade_especializacao" id="cidade_especializacao" class="input" value="" >
      </div>
      <div class="input-container" style="display:none;">
        <label for="ano_conclusao_especializacao" class="required"><?= __("Ano de conclusão") ?></label>
        <input type="tel" data-mask="0000" name="ano_conclusao_especializacao" id="ano_conclusao_especializacao" class="input" value="" required>
      </div>
    </div>
  </div>
  <a href="javascript:void(0)" class="add_especializacao" ><?= __("Adicionar Especialização") ?></a>
  <table class="especializacao">
    <tbody>
      <tr>
        <th>Nível</th>
        <th>Curso</th>
        <th>Instituição</th>
        <th>Conclusão</th>
        <th>&nbsp;</th>
      </tr>
      <?php 
      $niveis = array(
        "Pós Graduação / Especialização",
        "Mestrado",
        "Doutorado",
        "Pós-Doutorado");
      if ($formacoes != null):
        for ($i=0; $i < count($formacoes); $i++):
          if (in_array($formacoes[$i]["NivelFormacao"], $niveis)):
            $nivel = BNE_Util::Try_Get_InArray($formacoes, array($i, 'NivelFormacao'));
            $curso = BNE_Util::Try_Get_InArray($formacoes, array($i, 'NomeCurso'));
            $instituicao = BNE_Util::Try_Get_InArray($formacoes, array($i, 'Instituicao'));
            $ano_conclusao = BNE_Util::Try_Get_InArray($formacoes, array($i, 'AnoDeConclusao'));
            $cidade = BNE_Util::Try_Get_InArray($formacoes, array($i, 'Cidade'));
            ?>
            <tr class="especializacao" data-especializacao-key="<?= $i ?>">
              <td><input type="hidden" name="especializacao[<?= $i ?>][nivel]" value="<?= $nivel ?>" /><?= $nivel ?></td>
              <td><input type="hidden" name="especializacao[<?= $i ?>][curso]" value="<?= $curso ?>" /><?= $curso ?></td>
              <td><input type="hidden" name="especializacao[<?= $i ?>][instituicao]" value="<?= $instituicao ?>" /><?= $instituicao ?></td>
              <td><input type="hidden" name="especializacao[<?= $i ?>][ano_conclusao]" value="<?= $ano_conclusao ?>" /><?= $ano_conclusao ?></td>
              <td><a class="remover" href="javascript:void(0)">Excluir</a></td>
              <input type="hidden" name="especializacao[<?= $i ?>][cidade]" value="<?= $cidade ?>" />
            </tr>
          <?php endif; ?>
        <?php endfor; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>

<div class="group cursos_complementares">
  <h2><?= __("Cursos Complementares") ?></h2>
  <div class="form">
    <div class="input-line two-columns">
      <div class="input-container">
        <label for="instituicao_curso_complementar" class="required"><?= __("Instituição de Ensino") ?></label>
        <input type="text" name="instituicao_curso_complementar" id="instituicao_curso_complementar" class="input" value="" required>
      </div>
      <div class="input-container">
        <label for="curso_curso_complementar" class="required"><?= __("Nome do Curso") ?></label>
        <input type="text" name="curso_curso_complementar" id="curso_curso_complementar" class="input" value="" required>
      </div>
    </div>
    <div class="input-line three-columns">
      <div class="input-container">
        <label for="cidade_curso_complementar"><?= __("Cidade") ?></label>
        <input type="text" name="cidade_curso_complementar" id="cidade_curso_complementar" class="input" value="" >
      </div>
      <div class="input-container">
        <label for="ano_conclusao_curso_complementar"><?= __("Ano de conclusão") ?></label>
        <input type="tel" data-mask="0000" name="ano_conclusao_curso_complementar" id="ano_conclusao_curso_complementar" class="input" value="" >
      </div>
      <div class="input-container">
        <label for="carga_curso_complementar"><?= __("Carga Horária") ?></label>
        <input type="tel" data-mask="0000" name="carga_curso_complementar" id="carga_curso_complementar" class="input" value="" >
      </div>
    </div>
  </div>
  <a href="javascript:void(0)" class="add_curso_complementar" ><?= __("Adicionar Curso Complementar") ?></a>
  <table class="cursos_complementares">
    <tbody>
      <tr>
        <th>Curso</th>
        <th>Instituição</th>
        <th>Conclusão</th>
        <th>&nbsp;</th>
      </tr>
    </tbody>
    <?php 
      $complementares = BNE_Util::Try_Get_InArray($cv, array("Formacao", "CursosComplementares")); 
      if ($complementares != null):
        for ($i=0; $i < count($complementares); $i++):
          $instituicao = BNE_Util::Try_Get_InArray($complementares, array($i, 'Instituicao'));
          $curso = BNE_Util::Try_Get_InArray($complementares, array($i, 'NomeCurso'));
          $cidade = BNE_Util::Try_Get_InArray($complementares, array($i, 'Cidade'));
          $ano_conclusao = BNE_Util::Try_Get_InArray($complementares, array($i, 'AnoConclusao'));
          $carga = BNE_Util::Try_Get_InArray($complementares, array($i, 'CargaHoraria'));
          ?>
          <tr class="curso_complementar" data-curso-complementar-key="<?= $i ?>">
            <td><input type="hidden" name="curso_complementar[<?= $i ?>][curso]" value="<?= $curso ?>" /><?= $curso ?></td>
            <td><input type="hidden" name="curso_complementar[<?= $i ?>][instituicao]" value="<?= $instituicao ?>" /><?= $instituicao ?></td>
            <td><input type="hidden" name="curso_complementar[<?= $i ?>][ano_conclusao]" value="<?= $ano_conclusao ?>" /><?= $ano_conclusao ?></td>
            <td><a class="remover" href="javascript:void(0)">Excluir</a></td>
            <input type="hidden" name="curso_complementar[<?= $i ?>][cidade]" value="<?= $cidade ?>" />
            <input type="hidden" name="curso_complementar[<?= $i ?>][carga]" value="<?= $carga ?>" />
          </tr>
        <?php endfor; ?>
      <?php endif; ?>
  </table>
</div>

<div class="group idiomas">
  <h2><?= __("Idiomas") ?></h2>
  <div class="form">
    <div class="input-container">
      <label for="idioma" class="required"><?= __("Idioma") ?></label>
      <select name="idioma" id="idioma" required>
        <option disabled selected value> -- <?= __("Selecione") ?> -- </option>
        <option value="Alemão" ><?= __("Alemão") ?></option> 
        <option value="Chinês Mandarim" ><?= __("Chinês Mandarim") ?></option> 
        <option value="Espanhol" ><?= __("Espanhol") ?></option> 
        <option value="Francês" ><?= __("Francês") ?></option> 
        <option value="Inglês" ><?= __("Inglês") ?></option> 
        <option value="Italiano" ><?= __("Italiano") ?></option> 
        <option value="Japonês" ><?= __("Japonês") ?></option> 
        <option value="Português" ><?= __("Português") ?></option> 
        <option value="Russo" ><?= __("Russo") ?></option>      
      </select>
    </div>
    <div class="input-container">
      <label for="nivel_idioma" class="required"><?= __("Nível") ?></label>
      <input type="radio" name="nivel_idioma" value="Basico" required><?= __("Básico") ?></input>
      <input type="radio" name="nivel_idioma" value="Intermediario" ><?= __("Intermediário") ?></input>
      <input type="radio" name="nivel_idioma" value="Avancado" ><?= __("Avançado") ?></input>
      <input type="radio" name="nivel_idioma" value="Fluente" ><?= __("Fluente") ?></input>
      <label for="nivel_idioma" class="error" style="display: none;">Please select your gender</label>
    </div>
  </div>
  <a href="javascript:void(0)" class="add_idioma" ><?= __("Adicionar Idioma") ?></a>
  <table class="idiomas">
    <tbody>
      <tr>
        <th><?= __("Idioma") ?></th>
        <th><?= __("Nível Idioma") ?></th>
        <th><?= __("&nbsp;") ?></th>
      </tr>
      <?php 
      $idiomas = BNE_Util::Try_Get_InArray($cv, array("Formacao", "Idiomas")); 
      if ($idiomas != null):
        for ($i=0; $i < count($idiomas); $i++):
          $idioma = BNE_Util::Try_Get_InArray($idiomas, array($i, 'DescricaoIdioma'));
          $nivel = BNE_Util::Try_Get_InArray($idiomas, array($i, 'NivelIdioma'));
          ?>
          <tr class="idioma" data-idioma-key="<?= $i ?>">
            <td><input type="hidden" name="idioma[<?= $i ?>][idioma]" value="<?= $idioma ?>" /><?= $idioma ?></td>
            <td><input type="hidden" name="idioma[<?= $i ?>][nivel_idioma]" value="<?= $nivel ?>" /><?= $nivel ?></td>
            <td><a class="remover" href="javascript:void(0)">Excluir</a></td>
          </tr>
        <?php endfor; ?>
      <?php endif; ?>
    </tbody>
  </table>
</div>