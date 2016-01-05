<!--Modal de inserção de horario de curso-->
<div id="modal_horario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inserir Horário</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="inserir_horario">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Arquivo PDF do Horário</label>
              <input type="file" class="form-control" name="horario_pdf">
            </div>
          </div>
					<div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Semestre</label><br>
              <select name="semestre" class="form-control" id="input_semestre">
								<option value="1">1º Semestre</option>
								<option value="2">2º Semestre</option>
              </select>
            </div>
          </div>
					<div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Ano</label>
              <input type="text" class="form-control" name="ano" id="input_ano">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Curso</label><br>
              <select name="curso" class="form-control" id="input_curso">
                <?php
                  $curso = new Curso();
                  $cursos = $curso->select_all();
                  foreach($cursos as $curso){ ?>
                    <option value="<?=$curso['id']?>"><?=$curso['nome']?></option>
                <?php
                  }
                ?>
              </select>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="inserir_horario" class="btn btn-success btn-lg">Confirmar</button>
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

