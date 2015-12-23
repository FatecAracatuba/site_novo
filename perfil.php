<?php 
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL & ~E_NOTICE);
	
	include "index_modules.php"; 
	
	if(isset($_POST['editar_perfil'])){
		$Id = $_POST['id'];
		$Name = $_POST['nome'];
		$Email = $_POST['email'];
		$Username = $_POST['username'];
		$Photo = $_FILES['foto_usuario']['name'];
		if(!empty($_FILES['foto_usuario']['name'])){
			$Up = new upload($Photo);
			$Arquivo = $Up->user_photo_upload();
		} else {
			$Arquivo = $_POST['antiga_foto'];
		}
		$Type = $_POST['tipo'];
		$Phone = $_POST['telefone'];
		$usuario = new User($Id, $Name, $Email, $Username, '', $Arquivo, $Type, $Phone);
		$usuario->update();
		header("Location: perfil.php");
	}
	
	if(isset($_POST['editar_senha'])){
		$Id = $_POST['id'];
		if(!empty($_POST['nova_senha'])){
			$Password = $_POST['nova_senha'];
		} else {
			$Password = $_POST['antiga_senha'];
		}
		$usuario = new User($Id, '', '', '', $Password, '', '', '');
		$usuario->update_password();
		header("Location: perfil.php");
	}
	
if(!empty($_POST['operacaoAjax'])){
		
	if($_POST['operacaoAjax'] == 'apagar_perfil'){
    $perfil = new User();
    $perfil->delete($_POST['idperfil']);
    exit;
  }

  if($_POST['operacaoAjax'] == 'buscar_perfil'){
    header('Content-Type: application/json');
    $perfil = new User();
    $perfil = $perfil->find($_POST['idperfil']);

    echo json_encode($perfil);

    exit;
  }
	
}
?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="js/grid.js"></script>
  	<link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
  	<link rel="stylesheet" href="css/owl-carousel/owl.theme.css">
  	<script src="css/owl-carousel/owl.carousel.min.js"></script>
		<script src="js/usuarios.js"></script>
	</head>
  <body>
    <?php
      include ("templates/menu.html.php");
      if(!isset($_SESSION['logged'])){
        header('Location: ./');
      }
    ?>
    <div class="container main">
  		<div class="container">
			<hr>
			<div class="row">
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-left">
						<button class="btn btn-link"><a href="restritos.php">Voltar aos links</a></button>
					</div>
				</div>
				<hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
					<?php 
							$perfil = new User();
							$Id = $_SESSION['id'];
							$Perfil = $perfil->select_find($Id);
							foreach($Perfil as $perfil){
					?>
					<h3>Perfil</h3>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?=$perfil['nome']?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="<?=$perfil['nome']?>" src="<?=$perfil['foto']?>" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Username:</td>
                        <td><?=$perfil['username']?></td>
                      </tr>
                      <tr>
                        <td>Nome:</td>
                        <td><?=$perfil['nome']?></td>
                      </tr>
											<tr>
                        <td>Tipo:</td>
                        <td><?=$perfil['tipo']?></td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><a href=""><?=$perfil['email']?></a></td>
                      </tr>
                        <td>Telefone:</td>
                        <td><?=$perfil['telefone']?><br>
                        </td>    
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
							<div class="panel-footer">
								<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                <span class="pull-right">
									<a data-toggle="modal" data-target="#modal_editar_perfil" class="btn btn-sm btn-warning" data-id="<?=$perfil['id']?>" href="#"><i class="glyphicon glyphicon-edit"></i> Editar Perfil</a>
                  <a class="btn btn-sm btn-danger" onclick="excluir_perfil(<?=$perfil['id']?>);"><i class="glyphicon glyphicon-remove"></i>Apagar Perfil</a>
								</span>
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
			include ("templates/modal_edit_perfil.php");
			include ("templates/footer.html.php") 
		?>
  </body>
</html>
