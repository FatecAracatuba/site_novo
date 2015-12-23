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
          <input type="hidden" name="id_banner" id="input_id">
					<input type="hidden" name="ativo" id="input_ativo">
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Carregue a imagem...</label>
              <input type="file" class="form-control" id="input_banner_img" name="banner_img">
            </div>
          </div>
          <div class="row control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>...Ou use uma destas abaixo...</label><br>
								<content id="content-carrousel">
									<div id="top-carousel" class="carousel slide" style="height: 300px;" data-ride="carousel">
										<!--bullets-->
										<ol class="carousel-indicators">
											<li data-target="#top-carousel" data-slide-to="0" class="active"></li>
											<li data-target="#top-carousel" data-slide-to="1"></li>
											<li data-target="#top-carousel" data-slide-to="2"></li>
										</ol>

										<!--imagens-->

										<div class="carousel-inner" role="listbox">
										<?php
											$banner = new Banner();
											$banners = $banner->select_all();
											foreach($banners as $banner){ ?>
											
											<div class="item">
												<img src="<?=$banner['banner_img']?>" alt="banner_<?=$banner['id']?>">
												<div class="carousel-caption">				
													<a href="" target="" class="btn btn-primary btn-large" role="button">Escolher esta</a>
												</div>
											</div>
									<?php
										}
									?>
									</div>
									<!--Setas Laterais-->

									<a class="left carousel-control" href="#top-carousel" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Voltar</span>
									</a>
									<a class="right carousel-control" href="#top-carousel" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Avançar</span>
									</a>
								</div>
							</div>
						</content>
						</div>
						<div class="row control-group">
					<div class="form-group col-xs-6">
						<button type="submit" name="editar_horario" class="btn btn-success">Confirmar</button>
					</div>
					<div class="form-group col-xs-6 pull-right">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					</div>
				</div>
				</form>
         </div>
          <hr>
      </div>
      <div class="modal-footer">
				
      </div>
    </div>
  </div>

