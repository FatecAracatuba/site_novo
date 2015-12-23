<?php include "index_modules.php"; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="js/jquery.media.js" ></script>
    <script type="text/javascript">
      function preview(link){
        $('div.media').remove();
        $('.content').append('<a href="#" class="media"></a>')
        $('a.media').attr("href", link);
        $('a.media').media({width:770, height:1000});
      };
    </script>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container main">
      <div class="container">
				<h2>Iniciação Científica</h2>
				<hr>
				<p class="lead">O aluno interessado em se tornar um orientando em iniciação científica deve atender aos seguintes pré-requisitos:</p>
				<ul>
					<li>No início do projeto de iniciação científica, o aluno já deverá ter cursado o 1º período do curso;</li>
					<li>No início do projeto de iniciação científica, o aluno não poderá estar cursando o último período do curso, ou ser aluno concluinte;</li>
					<li>O aluno, preferencialmente, não deve ter reprovação nas disciplinas cursadas;</li>
					<li>O aluno deve ter disponibilidade semanal de 10 horas para o desenvolvimento do projeto.</li>
				</ul>
				<br>
				<p>Saiba mais no <a onClick="preview('pdf/iniciacao-cientifica.pdf');" href="#" >regulamento</a>.<p>
        <div class="content"></div>
			</div>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
