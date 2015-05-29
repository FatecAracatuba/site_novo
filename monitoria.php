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
            <a href="#sobre" data-toggle="tab">Sobre</a>
          </li>
					<li role="presentation">
            <a href="#aulas" data-toggle="tab">Disciplinas com monitoria</a>
          </li>
          <li role="presentation">
            <a href="#monitores" data-toggle="tab">Email dos monitores</a>
          </li>
          <li role="presentation">
            <a href="#horarios" data-toggle="tab">Horários de monitoria</a>
          </li>
        </ul>
				<div class="tab-content">
          <div class="tab-pane fade in active" id="sobre">
						<article class="content">
							<h2 class="h2">O que é monitoria</h2>


						</article>
					</div>
          <div class="tab-pane fade" id="aulas">
						<article class="content">
							<h2 class="h2">Disciplinas com monitoria</h2>

						</article>
					</div>
				<div class="tab-pane fade" id="monitores">
						<article class="content">
							<h2 class="h2">Email dos monitores</h2>


						</article>
					</div>
					<div class="tab-pane fade" id="horarios">
						<article class="content">
							<h2 class="h2">Horários de monitoria</h2>


						</article>
					</div>
				</div>
			</div>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
