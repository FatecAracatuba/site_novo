<!--Modal de edição de usuario-->
<div id="modal_editar_usuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Usuário</h4>
      </div>
      <div class="modal-body">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Perfil</a></li>
      <li><a href="#profile" data-toggle="tab">Senha</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active in" id="home">
				<br>
        <form method="post" enctype="multipart/form-data">
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<input type="hidden" name="id" id="id">
							<input type="hidden" name="antiga_foto" id="before_photo">
							<label>Nome</label>
              <input type="text" class="form-control" name="nome" id="name">
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Username</label>
              <input type="text" class="form-control" name="username" id="username">
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
							<label>Email</label>
              <input type="text" class="form-control" name="email" id="email">
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Telefone</label>
              <input type="text" class="form-control" name="telefone" id="phone">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-12">
							<button type="submit" name="editar_usuario" class="btn btn-success btn-lg" onclick="return confirm('Tem certeza que deseja editar o perfil daquele usuário?');">Editar</button>
						</div>
					</div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile">
			<br>
    	<form method="post">
					<input type="hidden" name="id_usuario_senha" id="id_usuario_senha">
        	<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Antiga senha</label>
              <input type="password" class="form-control" name="antiga_senha" id="password">
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 floating-label-form-group controls">
							<label>Nova senha</label>
              <input type="password" class="form-control" name="nova_senha">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-xs-12">
							<button type="submit" name="editar_senha" class="btn btn-success btn-lg" onclick="return confirm('Tem certeza que deseja editar a senha daquele usuário?');">Editar</button>
						</div>
					</div>
    	</form>
      </div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

