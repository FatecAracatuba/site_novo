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
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container main">  
      <div class="container">
        <ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#about" data-toggle="tab">Sobre</a>
          </li>
          <li role="presentation">
            <a href="#schedule" data-toggle="tab">Horários</a>
          </li>
          <li role="presentation">
            <a href="#prof" data-toggle="tab">Docentes</a>
          </li>
          <li role="presentation">
            <a href="#discipline" data-toggle="tab">Disciplinas</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane fade in active" id="about">
            <article class="content">
              <h2 class="h2">Sobre</h2>
              <hr>
              <p class="lead">Perfil do Profissional</p>
              <p>O profissional formado pelo Curso Superior de Tecnologia em Análise e Desenvolvimento de Sistemas deverá estar sempre atento às oportunidades que o mercado oferece aproveitando o surgimento de novas tecnologias e os ensinamentos adquiridos para vislumbrar nichos de atuação correspondentes à sua capacidade. Esse profissional estará voltado às tecnologias que surgem quase que diariamente na área de sistemas de informação, procurando soluções adequadas e compatíveis entre as mesmas evitando, por meio de seus projetos, o desperdício de tempo e de recursos financeiros.</p>
              <hr>
              <p class="lead">Esse profissional deverá ser capaz de:</p>
              <ul>
                <li>Propor e coordenar mudanças organizacionais, definir políticas e diretrizes decorrentes da tecnologia da informação.</li>
                <li>Analisar as áreas funcionais da empresa e suas necessidades em relação aos sistemas de informação.
                </li>
                <li>
                  Planejar e desenvolver o modelo de dados que atendam às necessidades atuais e futuras da empresa.
                </li>
                <li>Elaborar os planos de desenvolvimento de sistemas de informação focalizando todas as áreas de negócio da empresa.</li>
                <li>Organizar e apresentar de maneira clara aos usuários os processos envolvidos nos sistemas.</li>
                <li>Transformar o potencial dos sistemas de informação em suporte para toda a empresa.</li>
                <li>Avaliar os modelos de organização das empresas garantindo a sua sobrevivência em ambiente interconectado e competitivo.</li>
                <li>Conhecer técnicas de avaliação da qualidade dos processos empresariais.</li>
                <li>Avaliar os sistemas oferecidos pelo mercado e indicá-los quando convenientes para a empresa.</li>
                <li>Identificar oportunidades para futuros empreendimentos.</li>
                <li>Avaliar os sistemas operacionais e gerenciadores de banco de dados oferecidos pelo mercado e indicá-los quando convenientes para a empresa.</li>
                <li>Avaliar a infra-estrutura e propor soluções técnicas adequadas às necessidades das instituições.</li>
                <li>Planejar a implementação do modelo de dados especificados pelo administrador de dados que atendam às necessidades atuais e futuras da empresa.</li>
                <li>Planejar e desenvolver redes que atendam às necessidades atuais e futuras da empresa.</li>
                <li>Identificar e avaliar os dispositivos e padrões de comunicação, reconhecendo suas implicações nos ambientes de rede.</li>
                <li>Integrar os sistemas de informação da empresa otimizando o uso das bases de dados e dos recursos em rede.</li>
                <li>Garantir segurança, integridade e performance do sistema operacional, das bases de dados e das redes utilizadas nas empresas.</li>
                <li>Conhecer as restrições impostas às redes pelos sistemas de telecomunicações.</li>
                <li>Elaborar planos de contingências para manter os sistemas em funcionamento.</li>
                <li>Facilitar a comunicação entre as diversas áreas de negócio da empresa e os profissionais de tecnologia da informação.</li>
              </ul>
            </article>    
          </div>
          <div class="tab-pane fade" id="schedule">
            <article class="content">
              <h2 class="h2">Horários</h2>
              <hr>
              <h3 class="h3">Diurno</h3>
              <hr>
              <div class="panel-group" id="horarios">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios" data-target="#hor-pri-sem">
                          1º Semestre
                        </div>
                    </div>
                    <div id="hor-pri-sem" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/ads1.png" class="centralized img-responsive" >  
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios" href="#hor-seg-sem">
                          2º Semestre
                        </div>
                    </div>
                    <div id="hor-seg-sem" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/ads2.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios" href="#hor-ter-sem">
                          3º Semestre
                        </div>
                    </div>
                    <div id="hor-ter-sem" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/ads3.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios" href="#hor-qua-sem">
                          4º Semestre
                        </div>
                    </div>
                    <div id="hor-qua-sem" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/ads4.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios" href="#hor-qui-sem">
                          5º Semestre
                        </div>
                    </div>
                    <div id="hor-qui-sem" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/ads5.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title" data-toggle="collapse" data-parent="#horarios" href="#hor-sex-sem">
                          6º Semestre
                        </div>
                    </div>
                    <div id="hor-sex-sem" class="panel-collapse collapse">
                        <div class="panel-body">
                          <img src="images/horarios/ads6.png" class="centralized img-responsive" >
                      </div>
                    </div>
                  </div>
              </div>  
            </article>
            </div>        
          <div class="tab-pane fade" id="prof">
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
                    <td>Alexandre Marcelino da Silva, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" href="http://lattes.cnpq.br/7604126895382911" target="_blank" ></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Célia Regina Nugoli Estevam, Dra</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/2936172213611219" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Euclides Teixeira Neto, Esp</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/4500925161423594" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Fernando Cesar Balbino, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/2571435611020296" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Gabriela Cristiane Mendes Rahal, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/9152928525800668" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Luciana Passos Marcondes Scarsiotta, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/0804789469499768" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Lucilena de Lima, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/0062050183642603" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Marcos Danilo Graciano, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/8008895489996719" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Micheli Chichinelli, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/3955365069881598" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Renata de Freitas Góis Comparoni, Dra</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/9232792979341504" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Ronnie Marcos Rillo, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/6929052442931280" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Samuel Stábile, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/2774643693224937" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Saulo Felício Fernandes Zambotti, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/8281371622293408" target="_blank"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </article>
          </div>
          <div class="tab-pane fade" id="discipline">
            <a class="media" href="pdf/disciplinas-ads.pdf"></a> 
          </div>
        </div>
      </div>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>