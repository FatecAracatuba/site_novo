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
		<script type="text/javascript">
      $(function() {
          $('a.media').media({width:770, height:700});
      });
    </script>
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
            <a href="#arquivos" data-toggle="tab">Arquivos do TG</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane fade in active" id="sobre" data-toggle="tab">
            <article class="content">
              <h2 class="h2">O que é o TG?</h2>
              <hr>
              <p class="lead">Definição</p>
              <p>O Trabalho de Graduação é uma atividade curricular obrigatória dos Cursos Superiores das
                  Faculdades de Tecnologia do Centro Estadual de Educação Tecnológica Paula Souza, instituído
                  pela Deliberação CEETEPS -12, de 14/12/2009.
              </p>
              <p>
                É uma atividade orientada por docente interno,
                desenvolvida por meio de um trabalho monográfico, de uma pesquisa científico-tecnológica, da
                publicação de contribuições na área ou da participação de eventos com apresentação de trabalho
                acadêmico, com carga horária computada para a integralização do curso.
              </p>
              <hr>
              <p class="lead">Quais os objetivos do Trabalho de Graduação?</p>
              <ul>
                <li>Colocar os alunos em contato com problemas reais do mercado de trabalho nas áreas dos cursos.</li>
                <li>Possibilitar a pesquisa científica tecnológica, em trabalho apropriado, de que o aluno
                    desenvolveu uma habilidade investigativa, conseguindo aplicar uma síntese dos conhecimentos
                    obtidos no curso.
                </li>
              </ul>
            </article>
          </div>
          <div class="tab-pane fade" id="arquivos" data-toggle="tab">
            <article class="content">
              <h2 class="h2">Arquivos do TG</h2>
              <hr>
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
                    <td>Declaração de Orientação</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/declaracao_orientacao.pdf');" href="#"></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/declaracao_orientacao.pdf" target="_blank" ></a></td>
                  </tr>
                  <tr>
                    <td>Declaração da Entrega de Boneco</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/declaracao_boneco.pdf');" href="#"></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/declaracao_boneco.pdf" target="_blank" ></a></td>
                  </tr>
                  <tr>
                    <td>Manual de Apres. de Trabalho de Graduação</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/manual_apresentacao_tg.pdf');" href="#"></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/manual_apresentacao_tg.pdf" target="_blank" ></a></td>
                  </tr>
                  <tr>
                    <td>Normas ABNT</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/manual_normas_abnt.pdf');" href="#"></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/manual_normas_abnt.pdf" target="_blank" ></a></td>
                  </tr>
                  <tr>
                    <td>Modelo de Boneco</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/modelo_boneco_2014.pdf');" href="#"></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/modelo_boneco_2014.pdf" target="_blank" ></a></td>
                  </tr>
                </tbody>
              </table>
            </article>
          </div>
        </div>
      </div>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
