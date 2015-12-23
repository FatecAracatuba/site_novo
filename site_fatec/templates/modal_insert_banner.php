<!--Modal de inserção de banner-->
<div id="modal_banner" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inserir Banner</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="inserir_banner">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Carregue a imagem</label>
              <input type="file" class="form-control" name="banner_img">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="inserir_banner" class="btn btn-success btn-lg">Confirmar</button>
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

