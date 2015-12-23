<?php include "index_modules.php"; ?>
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

        $('#message').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var _id = button.data('id')
          var modal = $(this)
          $.ajax({
            type: "GET",
            url: "modules/json/mail.json.php",
            dataType: "json",
            data: {id: _id},
            success: function(message){
              console.log(message);
              modal.find('#name').text(message.name)
              modal.find('#phone').text(message.phone)
              modal.find('#day').text(message.day)
              modal.find('#hour').text(message.hour)
              modal.find('#mail').text(message.mail)
              modal.find('#message').text(message.message)
            },
            error: function(data){
              console.log("Error!")
              console.log(data)
            }
          });
        });
      });
    </script>
  </head>
  <body>
    <?php
      include ("templates/menu.html.php");
      if(!isset($_SESSION['logged'])){
        header('Location: ./');
      }

      require_once 'conf.php';
      require_once 'modules/connection.php';
      require_once 'modules/mail.class.php';
    ?>
    <div class="container main">
  		<div class="container">
        <div class="page-header">
          <h1>E-mails da direção</h1>
        </div>
        <?php
          $mail = new Mail();
					$mails = $mail->allMail();

        if ($mails != false):
        ?>
          <table id="to-view" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Mensagem</th>
                <th>Remetente</th>
                <th>Telefone</th>
                <th>Dia</th>
                <th>Hora</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <?php
                for ($i=0; $i < sizeof($mails); $i++) {
                  $id = $mails[$i]['id'];
                  $name = $mails[$i]['name'];
                  $phone = $mails[$i]['phone'];
                  $day = date("d/m/Y", strtotime($mails[$i]['created_at']));
                  $hour = date("H:i:s", strtotime($mails[$i]['created_at']));
                  $mail = $mails[$i]['mail'];
                  echo
                    "<tr>
                      <td> <span class='glyphicon glyphicon-envelope'></span> <a data-id='$id' data-toggle='modal' data-target='#message'> Msg. $id </a> </td>
                      <td> $name </td>
                      <td> $phone </td>
                      <td> $day </td>
                      <td> $hour </td>
                      <td> $mail </td>
                    </tr>";
                }
              ?>
          </table>
        <?php else: ?>
          <h3>Nenhuma mensagem cadastrada :(</h3>
          <hr>
        <?php endif; ?>
					<hr>
				<div class="row">
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-left">
						<button class="btn btn-link"><a href="restritos.php">Voltar aos links</a></button>
					</div>
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-success" data-toggle="modal" data-target="#enviar_messagem">Nova Mensagem</button>
					</div>
				</div>
				</div>
			<hr>
  		</div>
	  </div>
    <div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="messagelabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Nova Mensagem</h4>
          </div>
          <div class="modal-body">
            <h3 id="name"></h3>
            <hr>
            <div class="row">
              <div class="col-xm-4 col-sm-4 col-md-4 col-lg-4"><p><strong>Dia:</strong> <span id="day"></span></p></p></div>
              <div class="col-xm-4 col-sm-4 col-md-4 col-lg-4"><p><strong>Hora:</strong> <span id="hour"></span></p></p></div>
              <div class="col-xm-4 col-sm-4 col-md-4 col-lg-4"><p><strong>Telefone:</strong> <span id="phone"></span></p></p></div>
            </div>
            <div class="row">
              <div class="col-xm-12 col-sm-12 col-md-12 col-lg-12">
                <p class="text-center"><strong>Email:</strong> <span id="mail"></span></p>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-body">
                <p id="message"></p>
              </div>
            </div>
						
          </div>
        </div>
      </div>
    </div>
    <?php 
			include ("templates/modal_insert_mensagem.php");
			include ("templates/footer.html.php") 
		?>
  </body>
</html>
