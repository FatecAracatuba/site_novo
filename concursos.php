<?php include "index_modules.php"; ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="js/tabs-links.js" ></script>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container main">
			<div class="container">
				<ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#sobre" data-toggle="tab">Como funciona</a>
          </li>
          <li role="presentation">
            <a href="#inscricoes" data-toggle="tab">Inscrições</a>
          </li>
          <li role="presentation">
            <a href="#datas" data-toggle="tab">Datas</a>
          </li>
          <li role="presentation">
            <a href="#aprovados" data-toggle="tab">Aprovados</a>
          </li>
        </ul>
				<div class="tab-content">
          <div class="tab-pane fade in active" id="sobre">
						<article class="content">
							<h2>Como funciona</h2>
							<hr>
						</article>
					</div>
					<div class="tab-pane fade" id="horarios">
						<article class="content">
							<h2>Inscrições</h2>
							<hr>
						</article>
					</div>
					<div class="tab-pane fade" id="datas">
						<article class="content">
							<h2>Datas</h2>             
              <p class="lead text-center">Não existem concursos abertos</p>
							<hr>
						</article>
					</div>
					<div class="tab-pane fade" id="aprovados">
						<article class="content">
							<h2>Aprovados</h2>
							<hr>
						</article>
					</div>
				</div>
			</div>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
