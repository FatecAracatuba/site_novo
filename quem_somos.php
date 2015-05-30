<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <link rel='stylesheet' href='css/ResponsiveImageGrid/css/style.css'/>
    <!--[if lt IE 9]><link rel='stylesheet' href='css/ResponsiveImageGrid/css/fallback.css'/><![endif]-->
    <script type="text/javascript" src="css/ResponsiveImageGrid/js/modernizr.custom.26633.js"></script>
    <script type="text/javascript" src="css/ResponsiveImageGrid/js/jquery.gridrotator.js"></script>
    <script type="text/javascript" src="js/grid.js"></script>
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
            <a href="#fotos" data-toggle="tab">Fotos</a>
          </li>
        </ul>
				<div class="tab-content">
          <div class="tab-pane fade in active" id="sobre">
						<article class="content">
							<h2>A Fatec de Araçatuba</h2>
							<hr>
								Gerida pelo <a href="http://www.centropaulasouza.sp.gov.br/" target="_blank">Centro Paula Souza</a>, a Fatec (Faculdade de Tecnologia) Araçatuba Professor Fernando de Amaral de Almeida
								Prado é uma instituição pública de ensino superior, mantida pelo Governo do Estado de São Paulo. A unidade local, assim com as demais 63 espalhadas pelo
								estado, atua na formação de tecnólogos, profissionais de nível superior que atuam no eixo tecnológico. A instituição iniciou suas atividades em 2008,
								com a graduação de Bicombustíveis, em 2011, passou a oferecer o curso superior de Análise e Desenvolvimento de Sistemas. No ano de 2015, foi implantada
								a graduação a distância de Gestão Empresarial.
						</article>
					</div>
					 <div class="tab-pane fade" id="fotos">
						<article class="content">
							<h2>Fotos da Instituição</h2>
							<hr>
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-body">
										</div>
									</div>
								</div>
							</div>
							<div id="ri-grid" class="ri-grid ri-grid-size-2 ri-shadow">
								<ul>
									<li><a href=""><img src="photos/foto-fatec-0.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
									<li><a href=""><img src="photos/foto-fatec-1.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
									<li><a href=""><img src="photos/foto-fatec-2.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
									<li><a href=""><img src="photos/foto-fatec-3.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
									<li><a href=""><img src="photos/foto-fatec-4.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
									<li><a href=""><img src="photos/foto-fatec-5.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
									<li><a href=""><img src="photos/foto-fatec-6.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
									<li><a href=""><img src="photos/foto-fatec-7.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
                  <li><a href=""><img src="photos/foto-fatec-8.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
                  <li><a href=""><img src="photos/foto-fatec-9.jpg" alt="Foto-Fatec-Araçatuba"></a></li>
								</ul>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
