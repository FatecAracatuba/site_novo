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
              <p>O tecnólogo desta área elabora e implementa planos de negócios, utilizando métodos e técnicas de gestão na formação e organização empresarial
							especificamente  nos processos de comercialização,  suprimento,  armazenamento,  movimentação  de materiais e no gerenciamento  de recursos
							financeiros e humanos. A habilidade para lidar com pessoas, a capacidade de comunicação, o trabalho em equipe, liderança, negociação, busca
							de informações, tomada de decisão em contextos econômicos, políticos, culturais e sociais distintos são requisitos importantes a esse
							profissional.</p>
              <hr>
              <p class="lead">Mercado de trabalho</p>
              <p>
								Em negócio próprio (consultoria, turismo, comércio, indústria etc.); médias e pequenas empresas; setor público e em entidades
								particulares, tais como cooperativas e associações.
							</p>
            </article>    
          </div>
          <div class="tab-pane fade" id="prof">
            <article class="content">
              <h2 class="h2"> Docentes</h2>
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
                    <td>Luciane Berti Ribeiro, Esp</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="" target="_blank"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Lucilena de Lima, Me</td>
                    <td>
                      <a class="glyphicon glyphicon-link centralized" aria-hidden="true" href="http://lattes.cnpq.br/0062050183642603" target="_blank"></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </article>
          </div>
          <div class="tab-pane fade" id="discipline">
            <a class="media" href="pdf/disciplinas-gestao.pdf"></a>
          </div>
        </div>
      </div>
    </div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
