<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
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
					<p>Saiba mais no <a href="pdf/iniciacao-cientifica.pdf">regulamento</a>.<p>
					
					<table class="table table-striped table-responsive col-sm-12 ">
                <thead>
                  <tr>
                    <th>Arquivo</th>
                    <th class="text-center">Pré Visualizar</th>
                    <th class="text-center">Link</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Iniciação Científica</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/iniciacao-cientifica.pdf');" href="#"></a></td>        
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/iniciacao-cientifica.pdf" target="_blank" ></a></td>
                  </tr>
                  <tr>
                </tbody>
              </table>
			</div>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
