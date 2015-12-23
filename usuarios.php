<?php 
	ini_set('display_errors', 1);
	ini_set('log_errors', 1);
	ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
	error_reporting(E_ALL & ~E_NOTICE);
	
	include "index_modules.php"; 
	
	if(isset($_POST['inserir_usuario'])){
		$Name = $_POST['nome'];
		$Email = $_POST['email'];
		$Username = $_POST['username'];
		$Password = $_POST['senha'];
		$Photo = $_FILES['foto']['name'];
		$Up = new upload($Photo);
		$Arquivo = $Up->user_photo_upload();
		$Type = $_POST['tipo'];
		$Phone = $_POST['telefone'];
		$usuario = new User('', $Name, $Email, $Username, $Password, $Arquivo, $Type, $Phone);
		$usuario->save();
		header("Location: usuarios.php");
	}
	
	if(isset($_POST['editar_usuario'])){
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
		header("Location: usuarios.php");
	}
	
	if(isset($_POST['editar_senha'])){
		$Id = $_POST['id_usuario_senha'];
		if(!empty($_POST['nova_senha'])){
			$Password = $_POST['nova_senha'];
		} else {
			$Password = $_POST['antiga_senha'];
		}
		$usuario = new User($Id, '', '', '', $Password, '', '', '');
		$usuario->update_password();
		header("Location: usuarios.php");
	}
	
if(!empty($_POST['operacaoAjax'])){
		
	if($_POST['operacaoAjax'] == 'apagar_usuario'){
		$Id = $_POST['idusuario'];
    $usuario = new User();
    $usuario->delete($Id);
    exit;
  }

  if($_POST['operacaoAjax'] == 'buscar_usuario'){
    header('Content-Type: application/json');
    $usuario = new User();
    $usuario = $usuario->find($_POST['idusuario']);

    echo json_encode($usuario);

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
    <link rel="stylesheet" type="text/css" href="js/datatables/dataTables.bootstrap.css">
    <script type="text/javascript" language="javascript" src="js/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
      $(function(){
        $('#to-view').DataTable({
          "language": { "url": "js/datatables/pt-BR.json" },
          "order": [[ 4, 'desc' ], [ 3, 'desc' ]]
        });

        $('#dados_usuario').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var _id = button.data('id')
          var modal = $(this)
          $.ajax({
            type: "GET",
            url: "modules/json/user.json.php",
            dataType: "json",
            data: {id: _id},
            success: function(message){
              console.log(message);
							//modal.find('#photo').text(message.foto)
							modal.find('#username').text(message.username)
              modal.find('#name').text(message.nome)
							modal.find('#mail').text(message.email)
							modal.find('#password').text(message.senha)
							modal.find('#type').text(message.tipo)
              modal.find('#phone').text(message.telefone)
              //modal.find('#day').text(message.day)
             // modal.find('#hour').text(message.hour)
              //modal.find('#message').text(message.message)
            },
            error: function(data){
              console.log("Error!")
              console.log(data)
            }
          });
        });
      });
    </script>
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
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#modal_usuario">Novo Usuário</button>
					</div>
				</div>
				<hr>
        <div class="page-header">
          <h1>Usuários</h1>
        </div>
        <?php
          $usuario = new User();
					$usuarios = $usuario->select_all();

        if ($usuarios != false):
        ?>
          <table id="to-view" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Detalhes</th>
                <th>Foto</th>
                <th>Usuário</th>
								<th>Nome</th>
                <th>Email</th>
								<th>Senha</th>
								<th>Tipo</th>
								<th>Telefone</th>
								<th></th>
								<th></th>
              </tr>
            </thead>
            <tbody>
              <?php
                for ($i=0; $i < sizeof($usuarios); $i++) {
                  $id = $usuarios[$i]['id'];
									$photo = $usuarios[$i]['foto'];
									$username = $usuarios[$i]['username'];
                  $name = $usuarios[$i]['nome'];
									$mail = $usuarios[$i]['email'];
									$password = $usuarios[$i]['senha'];
									$type = $usuarios[$i]['tipo'];
                  $phone = $usuarios[$i]['telefone'];
                  //$day = date("d/m/Y", strtotime($mails[$i]['created_at']));
                  //$hour = date("H:i:s", strtotime($mails[$i]['created_at']));
                  echo
                    "<tr>
                      <td> <span class='glyphicon glyphicon-user'></span> <a data-id='$id' data-toggle='modal' data-target='#dados_usuario'> Detalhes </a> </td>
                      <td> <img class='img-responsive' src='$photo'></img> </td>
                      <td> $username </td>
                      <td> $name </td>
                      <td> $mail </td>
                      <td> $password </td>
											<td> $type </td>
											<td> $phone </td>
											<td> <a data-toggle='modal' data-target='#modal_editar_usuario' data-id='$id' href='#'>Editar</a> </td>
											<td> <a onclick='excluir_usuario($id)' href='#'>Apagar</a> </td>
                    </tr>";
                }
              ?>
          </table>
        <?php else: ?>
          <h3>Nenhum Usuário :(</h3>
          <hr>
        <?php endif; ?>
				</div>
			<hr>
  		</div>
	  </div>
    <?php 
			include ("templates/modal_dados_usuario.php");
			include ("templates/modal_insert_usuario.php");
			include ("templates/modal_edit_usuario.php");
			include ("templates/footer.html.php") 
		?>
  </body>
</html>
