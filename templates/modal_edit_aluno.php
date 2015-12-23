<!--Modal de edição dos dados do aluno -->
<div id="modal_editar_aluno" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Aluno</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="formandos_painel.php" enctype="multipart/form-data">
          <input type="hidden" name="editar_aluno">
          <input type="hidden" name="id_aluno" id="input_id">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Nome</label>
              <input type="text" class="form-control" id="input_nome" name="nome">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Arquivo PDF do TG</label>
							<input type="hidden" id="input_antigo_tg" name="antigo_tg">
              <input type="text" class="form-control" id="input_antigo_tg_pdf" name="antigo_tg_pdf" readonly>
              <input type="file" class="form-control" id="input_tg_pdf" name="tg_pdf">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Turma</label><br>
              <select name="turma" class="form-control" id="input_turma">
                <?php
                  $turma = new Turma();
                  $turmas = $turma->select_all();
                  foreach($turmas as $turma){ ?>
                    <option value="<?= $turma['id']?>"><?= $turma['descricao']?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="editar_aluno" class="btn btn-success btn-lg">Confirmar</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
