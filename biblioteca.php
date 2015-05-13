<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript">
      $(function(){
        var url = document.location.toString();
        if (url.match('#')){
          $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show');
        }
        // Change hash for page-reload
        $('.nav-tabs a').on('shown.bs.tab', function (e) {
          window.location.hash = e.target.hash;
        });
      });
    </script>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container main">
			<div class="container">
				<ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#sobre" data-toggle="tab">A biblioteca</a>
          </li>
          <li role="presentation">
            <a href="#servicos" data-toggle="tab">Serviços</a>
          </li>
          <li role="presentation">
            <a href="#funcionamento" data-toggle="tab">Funcionamento</a>
          </li>
          <li role="presentation">
            <a href="#contato" data-toggle="tab">Contato</a>
          </li>
        </ul>
				<div class="tab-content">
          <div class="tab-pane fade in active" id="sobre">
						<article class="content">
							<h2>A biblioteca</h2>
							<hr>
							<p>A <strong>Biblioteca da FATEC</strong> atende aos alunos, professores e funcionários. Seu principal objetivo é oferecer apoio didático,
							científico e pedagógico, atendendo a comunidade escolar (docentes discentes e funcionários). Também é disponibilizado consulta
							aos materiais e acesso a internet para a comunidade externa.</p>
							<p>A Biblioteca é um ambiente propício para leitura e pesquisa, tendo diversas fontes de informação. Seu principal objetivo
							é incentivar os alunos à leitura e despertar o interesse e gosto por ela.</p>
							<p>Nosso acervo é de livre acesso, com livros, monografias, revistas, jornais, CD-ROM.</p>
							<p>A biblioteca tem a disposição 10 computadores com acesso à internet para realização de pesquisas e trabalhos escolares.
							O acesso ao acervo da biblioteca é livre, onde o aluno poderá dirigir-se diretamente aos materiais ou solicitar aos funcionários.</p>
							<p>Consulta ao acervo da biblioteca pela internet : <a href="http://www.biblioceeteps.com.br/">http://www.biblioceeteps.com.br/</a></p>
						</article>
					</div>
					<div class="tab-pane fade" id="servicos">
						<article class="content">
							<h2>Serviços</h2>
							<hr>
							<ul>
								<li>Consulta e Empréstimo com prazo definido pela categoria de usuários: </li>
									<ul>
										<li>Aluno/Funcionários: 3 documentos/ 7 dias </li>
										<li>Professor/ Coordenação: 5 documento/ 15 dias </li>
									</ul>
								<li>Levantamento Bibliográfico; </li>
								<li>Treinamento na utilização da Biblioteca </li>
								<li>Ficha Catalográfica; </li>
								<li>Comutação Bibliográfica. </li>
								<li>Auxílio na Normalização Bibliográfica.</li>
							</ul>

						</article>
					</div>
					<div class="tab-pane fade" id="funcionamento">
						<article class="content">
							<h2 class="text-center">Horário de Funcionamento</h2>
							<hr>
							<p class="text-center"><strong>Segunda à Sexta:</strong> 07h00 às 21h50</p>
							<p class="text-center"><strong>Sábados:</strong> 09h00 às 12h00</p>
						</article>
					</div>
					<div class="tab-pane fade" id="contato">
						<article class="content">
							<h2 class="text-center">Contato</h2>
							<hr>
              <p class="text-center"><span class="glyphicon glyphicon-envelope"></span> e.aracatuba.bibli@centropaulasouza.sp.gov.br</p>

						</article>
					</div>
				</div>
			</div>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
