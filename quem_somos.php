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
            <a href="#fotos" data-toggle="tab">Fotos</a>
          </li>
        </ul>
				<div class="tab-content">
          <div class="tab-pane fade in active" id="sobre">
						<article class="content">
							<h2>A Fatec de Araçatuba</h2>
							<hr>
								Gerida pelo <a href="http://www.centropaulasouza.sp.gov.br/">Centro Paula Souza</a>, a Fatec (Faculdade de Tecnologia) Araçatuba Professor Fernando de Amaral de Almeida
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
						</article>
					</div>
				</div>
			</div>
		</div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
