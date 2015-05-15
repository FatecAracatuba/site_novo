<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="js/jquery.media.js" ></script>
    <script type="text/javascript">
      $(function() {
          $('a.media').media({width:770, height:700});
      });
    </script>
		<script type="text/javascript">
      $(function(){
				var url = document.location.toString();
				if (url.match('#')){
					$('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
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
            <a href="#sobre" data-toggle="tab">Sobre</a>
          </li>
          <li role="presentation">
            <a href="#horarios" data-toggle="tab">Horários</a>
          </li>
          <li role="presentation">
            <a href="#docentes" data-toggle="tab">Docentes</a>
          </li>
          <li role="presentation">
            <a href="#disciplinas" data-toggle="tab">Disciplinas</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane fade in active" id="sobre">
            <article class="content">
              <h2 class="h2">Sobre</h2>
              <hr>
              <p class="lead">Perfil do Profissional</p>
              <p>O profissional atua nos processo de produção de biocombustíveis (etanol, biodiesel, biogás, biomassa e carvão vegetal), açúcar
              e biomassa explorável para produção de energia. Planeja, executa e gerencia as atividades pertinentes aos processos de utilização
              de biomassa como fonte de energia, numa perspectiva de respeito ao ambiente e de conservação dos recursos naturais, de forma
              sustentada. O Tecnólogo em Biocombustíveis é um profissional habilitado a trabalhar nos diferentes setores da produção de energia
              através do uso da biomassa.</p>
              <hr>
              <p class="lead">Esse profissional deverá ser capaz de:</p>
              <ul>
                <li>Executar e gerenciar o funcionamento de máquinas e equipamentos, bem como processos de análises físico-químicas e biológicas.</li>
                <li>Implementar e gerencia sistemas, coordenando as respectivas equipes técnicas.
                </li>
                <li>
                  Trabalhar na pesquisa de novas tecnologias e de processos de produção de energia e de gestão ambiental.
                </li>
                <li>Elaborar documentação técnica relativa aos processos em que atua, obedecendo a legislação e normas legais,
                nacionais e internacionais.</li>
                <li>Além disso, o tecnólogo em biocombustíveis deve ter como princípios a promoção da sustentabilidade dos
                processos, a conservação ambiental e a inclusão social.</li>


              </ul>
            </article>
          </div>
          <div class="tab-pane fade" id="horarios">
            <article class="content">
              <h2 class="h2">Horários</h2>
              <hr>
              <h3 class="h3">Vespertino</h3>
              <hr>
              <div class="panel-group" id="horarios-vesp">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-vesp" data-target="#hor-pri-sem-vesp">
                          1º Semestre
                        </div>
                    </div>
                    <div id="hor-pri-sem-vesp" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio1v.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-vesp" href="#hor-seg-sem-vesp">
                          2º Semestre
                        </div>
                    </div>
                    <div id="hor-seg-sem-vesp" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio2v.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-vesp" href="#hor-ter-sem-vesp">
                          3º Semestre
                        </div>
                    </div>
                    <div id="hor-ter-sem-vesp" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio3v.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-vesp" href="#hor-qua-sem-vesp">
                          4º Semestre
                        </div>
                    </div>
                    <div id="hor-qua-sem-vesp" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio4v.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-vesp" href="#hor-qui-sem-vesp">
                          5º Semestre
                        </div>
                    </div>
                    <div id="hor-qui-sem-vesp" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio5v.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-vesp" href="#hor-sex-sem-vesp">
                          6º Semestre
                        </div>
                    </div>
                    <div id="hor-sex-sem-vesp" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio6v.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
              </div>


              <hr>
              <h3 class="h3">Noturno</h3>
              <hr>
              <div class="panel-group" id="horarios-not">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-not" data-target="#hor-pri-sem-not">
                          1º Semestre
                        </div>
                    </div>
                    <div id="hor-pri-sem-not" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio1n.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-not" href="#hor-seg-sem-not">
                          2º Semestre
                        </div>
                    </div>
                    <div id="hor-seg-sem-not" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio2n.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-not" href="#hor-ter-sem-not">
                          3º Semestre
                        </div>
                    </div>
                    <div id="hor-ter-sem-not" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio3n.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-not" href="#hor-qua-sem-not">
                          4º Semestre
                        </div>
                    </div>
                    <div id="hor-qua-sem-not" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio4n.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-not" href="#hor-qui-sem-not">
                          5º Semestre
                        </div>
                    </div>
                    <div id="hor-qui-sem-not" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio5n.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios-not" href="#hor-sex-sem-not">
                          6º Semestre
                        </div>
                    </div>
                    <div id="hor-sex-sem-not" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/bio6n.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
              </div>
            </article>
            </div>
          <div class="tab-pane fade" id="docentes">
            <article class="content">
              <h2 class="h2">Docentes</h2>
              <hr>
              <table class="table table-striped table-responsive col-sm-12 ">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th class="text-center">Lattes</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Agatha Stela de Morais, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4489517J3" target="_blank" ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>André Rowe, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4790432E6" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Célia Regina Nugoli Estevam, Dra</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4767220T5" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Euclides Teixeira Neto, Esp</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4443094D4" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Gabriela Cristiane Mendes Rahal, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4240242Z3" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Giuliano Pierre Estevam, Dr</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4734676Y3" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Hildo Costa de Sena, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4757822U2" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Luciana Passos Marcondes Scarsiotta, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4233078A2" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Marcos Alberto Claudio Pandolfi, Esp</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4464970A4" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Marcos Vinicius Cavalcanti Gandolfi, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4258872U8" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Osvaldino Brandão Junior, Dr</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/6929052442931280" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Renato Tadeu Guerreiro, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4758213Z7" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Roberto Outa, Esp</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4499983U1" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Ronaldo da silva Viana, Dr</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4770989H6" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Ronnie Marcos Rillo, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4162048J4" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Rosa Valéria Abreu Rowe, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4798961Y7" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Sandra Maria de Melo, Dra</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4742522A1" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Valéria Garcia Pereira, Dra</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4791319H3" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Wesley Pontes, Dr</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4758983E6" target="_blank"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </article>
          </div>
          <div class="tab-pane fade" id="disciplinas">
            <a class="media" href="pdf/disciplinas-bio.pdf"></a>
          </div>
        </div>
      </div>

    </div>
  <?php include ("templates/footer.html.php") ?>
  </body>
</html>
