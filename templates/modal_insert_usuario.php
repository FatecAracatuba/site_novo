<!--Modal de inserção de usuario-->
<div id="modal_usuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inserir Usuário</h4>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="inserir_usuario">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Nome</label>
              <input type="text" class="form-control" name="nome">
            </div>
          </div>
					<div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Username</label>
              <input type="text" class="form-control" name="username">
            </div>
          </div>
					<div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Senha</label>
              <input type="password" class="form-control" name="senha">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Foto</label>
              <input type="file" class="form-control" name="foto_usuario">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Tipo</label><br>
              <select name="tipo" class="form-control" id="input_tipo">
								<option value="administrador">Administrador</option>
								<option value="usuario">Usuário</option>
              </select>
            </div>
          </div>
					<div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Telefone</label>
              <input type="text" class="form-control" name="telefone">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="form-group col-xs-12">
              <button type="submit" name="inserir_usuario" class="btn btn-success btn-lg">Confirmar</button>
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

