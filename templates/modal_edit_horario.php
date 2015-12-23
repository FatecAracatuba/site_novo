<!--Modal de edição dos dados do horario -->
<div id="modal_editar_horario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Horário</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_horario" id="input_id_horario">
					<input type="hidden" name="antigo_horario" id="input_antigo_horario">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Arquivo PDF do Horário</label>
              <input type="text" class="form-control" id="input_antigo_horario_pdf" name="antigo_horario_pdf" readonly>
              <input type="file" class="form-control" id="input_horario_pdf" name="horario_pdf">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
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
              <button type="submit" name="editar_horario" class="btn btn-success btn-lg">Confirmar</button>
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
