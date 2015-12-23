<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL & ~E_NOTICE);
	
include ("index_modules.php");

if(isset($_POST['inserir_banner'])){
	$Data_envio = date_create("Y/m/d", time());
	$Img = $_FILES['banner_img'];
	$up = new upload();
	$arquivo = $up->banner_upload($Img);
	$banner = new Banner('', $Data_envio, $arquivo, 0);
	//$banner->banner_upload($Banner);
	$banner->save();
}

if(isset($_POST['editar_banner'])){
	$Data_envio = date_create("Y/m/d", time());
	$Banner = $_FILES['banner_img'];
	$banner = new Banner();
	$banner->banner_upload($Banner);
	$banner->update();
}

if(!empty($_POST['operacaoAjax'])){
	if($_POST['operacaoAjax'] == 'apagar_banner'){
    $banner = new Banner();
    $banner->delete($_POST['idbanner']);
    exit;
  }
  if($_POST['operacaoAjax'] == 'buscar_banner'){
    header('Content-Type: application/json');
    $banner = new Banner();
    $banner = $banner->find($_POST['idbanner']);

    echo json_encode($banner);

    exit;
  }
}

?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="data:application/octet-stream;base64,JChmdW5jdGlvbigpew0KCXZhciB1cmwgPSBkb2N1bWVudC5sb2NhdGlvbi50b1N0cmluZygpOw0KCWlmICh1cmwubWF0Y2goJyMnKSl7DQoJCSQoJy5uYXYtdGFicyBhW2hyZWY9IycrdXJsLnNwbGl0KCcjJylbMV0rJ10nKS50YWIoJ3Nob3cnKTsNCgl9DQoJJCgnLm5hdi10YWJzIGEnKS5vbignc2hvd24uYnMudGFiJywgZnVuY3Rpb24gKGUpIHsNCgkJd2luZG93LmxvY2F0aW9uLmhhc2ggPSBlLnRhcmdldC5oYXNoOw0KCX0pOw0KfSk7DQo=" ></script>
  </head>
  <body>
		<?php
      include ("templates/menu.html.php");
		?>
		<script type="text/javascript" src="js/banner.js"></script>
    <div class="container main">
		<div class="container">
			<hr>
			<div class="row">
				<div class="row">
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-left">
						<button class="btn btn-link"><a href="restritos.php">Voltar aos links</a></button>
					</div>
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#modal_banner">Cadastrar Banner</button>
					</div>
				</div>
			</div>
			<hr>
			<ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#banners" data-toggle="tab">Banners</a>
          </li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="banners">
					<hr>
					<?php
							$banner = new Banner();
							$banners = $banner->select_all();
					?>
									<?php 
										foreach($banners as $banner){
									?>
										
											<img src="<?=$banner['banner_img']?>" class="img-responsive" style="height: 400px; width: 600px;"></img>
											<div class="row">
												<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
													<a class="btn btn-info" data-toggle="modal" data-target="#modal_editar_banner" data-id="<?=$banner['id']?>" href="#" id="btn_editar_banner"><i class="glyphicon glyphicon-edit"></i> Editar</a>
												</div>
												<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
													<a class="btn btn-danger" onclick="excluir_banner(<?=$banner['id']?>)" href="#" id="btn_excluir_banner"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
												</div>
											</div>
										
									<?php 
										}
									?>
									
				</div>
				</div>
		</div>
		</div>
          <?php
				include ("templates/modal_insert_banner.php");
				include ("templates/modal_edit_banner.php");
        include ("templates/footer.html.php");
				
      ?>
  </body>
</html>
