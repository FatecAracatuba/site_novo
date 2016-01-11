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
									<button type="submit" name="alterar" class="btn btn-success btn-lg" onclick="return confirm('Tem certeza que deseja editar o perfil');">Editar</button>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="profile">
						<br>
						<form id="tab2">
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
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label>Confirme a senha</label>
									<input type="password" class="form-control" name="confirme_senha">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-xs-12">
									<button type="submit" name="alterar" class="btn btn-success btn-lg" onclick="return confirm('Tem certeza que deseja editar a senha');">Editar</button>
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

