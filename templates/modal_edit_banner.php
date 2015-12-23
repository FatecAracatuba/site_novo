<!--Modal de edição dos dados do banner -->
<div id="modal_editar_banner" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Banner</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="banners_painel.php" enctype="multipart/form-data">
          <input type="hidden" name="editar_banner">
          <input type="hidden" name="id_banner" id="input_id_banner">
					<input type="hidden" name="ativo" id="input_ativo">
					<input type="hidden" name="antigo_banner_img" id="input_antigo_banner_img">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Carregue a imagem...</label>
              <input type="file" class="form-control" id="input_banner_img" name="banner_img">
            </div>
          </div>
					<div class="row control-group">
						<div class="form-group col-xs-6">
							<button type="submit" name="editar_banner" class="btn btn-success">Confirmar</button>
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

