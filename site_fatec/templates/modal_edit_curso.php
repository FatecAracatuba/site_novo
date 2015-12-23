<!--Modal de edição de curso-->
<div id="modal_editar_curso" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Curso</h4>
      </div>
      <div class="modal-body">
        <form method="post">
          <input type="hidden" name="editar_curso">
					<input type="hidden" name="id_curso" id="input_id_curso">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Nome</label>
              <input type="text" id="input_nome_curso" class="form-control" name="nome_curso">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="editar_curso" class="btn btn-success btn-lg">Confirmar</button>
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
