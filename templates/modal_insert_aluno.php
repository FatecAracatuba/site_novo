<!--Modal de inserção de aluno-->
<div id="modal_aluno" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inserir Aluno</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="inserir_aluno">

          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Nome</label>
              <input type="text" class="form-control" name="nome">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Arquivo PDF do TG</label>
              <input type="file" class="form-control" name="tg_pdf">
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
                    <option value="<?=$turma['id']?>"><?=$turma['descricao']?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="inserir_aluno" class="btn btn-success btn-lg">Confirmar</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

