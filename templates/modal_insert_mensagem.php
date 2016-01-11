<!--Modal de envio de mensagens de email-->
<div class="modal fade" id="enviar_mensagem" class="modal fade" role="dialog">
  <div class="modal-dialog">
		<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Nova Mensagem</h4>
      </div>
      <div class="modal-body">
				<form method="post" enctype="multipart/form-data">
          <input type="hidden" name="enviar_mensagem">
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Nome</label>
							<input type="text" class="form-control" name="name" id="name">
						</div>
					</div>
					<div class="row control-group">
            <div class="form-group col-xs-6 floating-label-form-group controls">
              <label>Email</label>
              <input type="text" class="form-control" name="mail" id="mail">
            </div>
						<div class="form-group col-xs-6 floating-label-form-group controls">
              <label>Telefone</label>
              <input type="text" class="form-control" name="phone" id="phone">
            </div>
          </div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Mensagem</label>
              <textarea rows="7" class="form-control" name="message" id="message"></textarea>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="enviar_mensagem" class="btn btn-success btn-lg">Confirmar</button>
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