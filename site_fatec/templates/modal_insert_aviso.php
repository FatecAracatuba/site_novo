<!--Modal de inserção de aviso-->
<div id="modal_aviso" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inserir Aviso</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="inserir_aviso">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Título</label>
              <input type="text" class="form-control" name="titulo">
            </div>
          </div>
					<div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Conteúdo</label>
              <textarea rows="5" class="form-control" name="conteudo"></textarea>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="inserir_aviso" class="btn btn-success btn-lg">Confirmar</button>
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

