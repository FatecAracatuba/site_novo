<!--Modal de inserção de turma-->
<div id="modal_turma" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inserir Turma</h4>
      </div>
      <div class="modal-body">
        <form method="post">
          <input type="hidden" name="inserir_turma">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Semestre de Início</label><br>
              <select class="form-control" name="semestre">
                <option>1º Semestre</option>
                <option>2º Semestre</option>
              </select>
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Data Início</label>
              <input type="date" class="form-control" name="data_inicio">
            </div>
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Data Término</label>
              <input type="date" class="form-control" name="data_termino">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Curso</label><br>
              <select name="curso" class="form-control" id="input_turma">
                <?php
                  $curso = new Curso();
                  $cursos = $curso->select_all();
                  foreach($cursos as $curso){ ?>
                    <option value="<?= $curso['id']?>"><?= $curso['nome']?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="inserir_turma" class="btn btn-success btn-lg">Confirmar</button>
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
