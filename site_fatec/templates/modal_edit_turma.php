<!--Modal de inserção de turma-->
<div id="modal_editar_turma" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Turma</h4>
      </div>
      <div class="modal-body">
        <form method="post">
					<input type="hidden" id="input_id_turma" name="id_turma">
          <input type="hidden" name="editar_turma">
					<div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Descrição</label>
              <input type="text" class="form-control" id="input_descricao" name="descricao_antiga" readonly>
            </div>
            </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Semestre de Início</label><br>
              <select class="form-control" id="input_semestre" name="semestre">
                <option>1º Semestre</option>
                <option>2º Semestre</option>
              </select>
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Data Início</label>
              <input type="date" class="form-control" id="input_data_inicio" name="data_inicio">
            </div>
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Data Término</label>
              <input type="date" class="form-control" id="input_data_termino" name="data_termino">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Curso</label><br>
              <select name="curso" class="form-control" id="input_curso">
                <?php
                  $curso = new curso();
                  $cursos = $curso->select_all();
                  foreach($cursos as $curso){ ?>
                    <option value="<?= $curso['id']?>"><?=$curso['nome']?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="editar_turma" class="btn btn-success btn-lg">Confirmar</button>
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
