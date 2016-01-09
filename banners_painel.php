<?php
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL & ~E_NOTICE);
	
include ("index_modules.php");

if(isset($_POST['inserir_banner'])){
	$Data_envio = date('d/m/Y H:i:s');
	$Img = $_FILES['banner_img']['name'];
	$up = new upload($Img);
	$arquivo = $up->banner_upload();
	$banner = new Banner('', $Data_envio, $arquivo, 0);
	//$banner->banner_upload($Banner);
	$banner->save();
	header("Location: banners_painel.php");
}

if(isset($_POST['editar_banner'])){
	$id = $_POST['id_banner'];
	$Img = $_FILES['banner_img']['name'];
	if(!empty($_FILES['banner_img']['name'])){
		$up = new upload($Img);
		$arquivo = $up->banner_upload();
	} else {
		$arquivo = $_POST["antigo_banner_img"];
	}
	$banner = new Banner($id, '', $arquivo, 0);
	$banner->update();
	header("Location: banners_painel.php");
}

if(!empty($_POST['operacaoAjax'])){
	if($_POST['operacaoAjax'] == 'apagar_banner'){
    $banner = new Banner();
    $banner->delete($_POST['idbanner']);
    exit;
  }
	
	if($_POST['operacaoAjax'] == 'ativar_banner'){
    $banner = new Banner();
    $banner->activate($_POST['idbanner']);
    exit;
  }
	
	if($_POST['operacaoAjax'] == 'desativar_banner'){
    $banner = new Banner();
    $banner->disactivate($_POST['idbanner']);
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
    <?php 
			include "templates/head_content.php";
		?>
		<link rel="stylesheet" href="css/banner_painel.css"></link>
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
            <a href="#banner_recente" data-toggle="tab">Banner Recente</a>
          </li>
					<li role="presentation">
            <a href="#banners" data-toggle="tab">Outros Banners</a>
          </li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane fade in active" id="banner_recente">
					<hr>
					<?php
						$banner = new Banner();
						$banners_ativo = $banner->select_ativo();
					?>
					<!-- Eu iria colocar alguma coisa em HTML aqui, mas não lembro o quê...-->
					<?php 
						foreach($banners_ativo as $banner){
					?>
							<div class="row">
								<?php botoes_banner($banner['id'], $banner['ativo']); ?>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<img src="<?=$banner['banner_img']?>" class="banner_img img-responsive"></img>
								</div>
							</div>
					<?php 
						}
					?>
				</div>
				<div class="tab-pane fade in" id="banners">
					<hr>
					<?php
						$banner = new Banner();
						$banners = $banner->select_all();
					?>
					<?php 
						foreach($banners as $banner){
					?>
							<div class="row">
								<?php botoes_banner($banner['id'], $banner['ativo']); ?>
							</div>
							<br>
							<div class="row">
								<div class="col-sm-12">
									<img src="<?=$banner['banner_img']?>" class="banner_img img-responsive"></img>
								</div>
							</div>		
							<hr>											
							<?php 
								}
							?>			
					</div>
				</div>
			</div>
		</div>
    <?php
			function botoes_banner($id_banner, $ativo){
				$banner_ativo = new Banner();
				$banners_ativos = $banner_ativo->select_qtde_ativo();
				if($ativo == 0){
					if($banners_ativos < 1){
		?>
					<div class="col-sm-2 col-md-2 col-lg-2">
						<a class="btn btn-success" onclick="ativar_banner(<?=$id_banner?>)" href="#" id="btn_ativar_banner"><i class="glyphicon glyphicon-edit"></i> Ativar</a>
					</div>
				<?php 
					}
				?>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<a class="btn btn-info" data-toggle="modal" data-target="#modal_editar_banner" data-id="<?=$id_banner?>" href="#" id="btn_editar_banner"><i class="glyphicon glyphicon-edit"></i> Editar</a>
			</div>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<a class="btn btn-danger" onclick="excluir_banner(<?=$id_banner?>)" href="#" id="btn_excluir_banner"><i class="glyphicon glyphicon-remove"></i> Excluir</a>
			</div>
			<?php 
				} else {
			?>
			<div class="col-sm-2 col-md-2 col-lg-2">
				<a class="btn btn-warning" onclick="desativar_banner(<?=$id_banner?>)" href="#" id="btn_desativar_banner"><i class="glyphicon glyphicon-edit"></i> Desativar</a>
			</div> 
			<?php 
				}
		}
		
				include ("templates/modal_insert_banner.php");
				include ("templates/modal_edit_banner.php");
        include ("templates/footer.html.php");		
  ?>
  </body>
</html>
