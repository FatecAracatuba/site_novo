<footer class="footer">
  <?php
    require_once 'conf.php';
    require_once 'modules/connection.php';
    require_once 'modules/mail.class.php';
  ?>
  <script type="text/javascript" language="javascript">
    $(document).ready(function() {
      /// Quando usuário clicar em salvar será feito todos os passo abaixo
      $('#save').click(function() {
        var data = $('#sendMail').serialize();
        $.ajax({
          type: 'POST',
          dataType: 'json',
          url: 'modules/savemail.php',
          data: data,
          success: function(response) {
            resp = response;
            if(response.error)
              alert(response.error)

            if(response.success){
              alert("Mensagem enviada com sucesso, obrigado.");
              $('#nomeCompleto').val('');
              $('#Mail').val('');
              $('#Phone').val('');
              $('#message').val('');
            }
          },
          error: function(response){
            console.log(response);
          }
        });
          return false;
      });
    });
  </script>
  <div class="container">
    <div class="row down">
      <center><span class="glyphicon glyphicon-chevron-down"></span></center>
    </div>
    <div class="row">
      <div class="col-md-4 message-form">
        <div class="row">
          <div class="page-header">
            <h3>Fale Com a Direção</h3>
          </div>
        </div>
        <form id="sendMail">
          <div class="row">
            <div class="col-md-11">
              <div class="input-group">
                <span class="input-group-addon" id="NameAddon"><span class="glyphicon glyphicon-user"></span></span>
                <input name="name" type="name" class="form-control" id="nomeCompleto" placeholder="Insira o nome completo" aria-describedby="NameAddon">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-11">
              <div class="input-group">
                <span class="input-group-addon" id="MailAddon"><span class="glyphicon glyphicon-envelope"></span></span>
                <input name="mail" type="tel" class="form-control" id="Mail" placeholder="algumacoisa@email.com" aria-describedby="MailAddon">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-11">
              <div class="input-group">
                <span class="input-group-addon" id="PhoneAddon"><span class="glyphicon glyphicon-phone"></span></span>
                <input name="phone" type="tel" class="form-control" id="Phone" placeholder="(xx)xxxx-xxxx" aria-describedby="PhoneAddon">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-11">
              <div class="input-group">
                <span class="input-group-addon" id="MessageAddon"><span class="glyphicon glyphicon-pencil"></span></span>
                <textarea name="message" type="text" class="form-control" id="message" placeholder="Digite aqui sua mensagem para a direção." rows="4" aria-describedby="MessageAddon"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-11">
              <button type="submit" class="btn btn-large btn-warning" id="save">Enviar</button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="page-header">
            <h3>Contato e Atendimento</h3>
          </div>
        </div>
        <p><span class="glyphicon glyphicon-pushpin"></span> Av. Prestes Maia, 1764 - Jd. Ipanema, Araçatuba/SP</p>
        <p><span class="glyphicon glyphicon-time"></span> Segunda à Sexta-feira das 7:30 às 22:30</p>
        <p><span class="glyphicon glyphicon-envelope"></span> falecom@fatecaracatuba.edu.br</p>
        <p><span class="glyphicon glyphicon-phone-alt"></span> (18) 3625-9917</p>
        <a type="button" class="btn btn-large btn-warning text-center" href="mapa.php">Veja o Mapa</a>
        <a type="button" class="btn btn-large btn-warning text-center" data-toggle="modal" data-target="#loginForm">
          <i class="glyphicon glyphicon-log-in"></i>
          Área Restrita
        </a>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="page-header">
            <h3>Mapa do site</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h5>Biocombustíveis</h5>
            <ul>
              <li><a href="curso_bio.php#sobre">O curso</a></li>
              <li><a href="curso_bio.php#docentes">Docentes</a></li>
              <li><a href="curso_bio.php#disciplinas">Disciplinas</a></li>
              <li><a href="curso_bio.php#horarios">Horario das Aulas</a></li>
              <li><a href="curso_bio.php">Atendimento</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h5>ADS</h5>
            <ul>
              <li><a href="curso_ads.php#sobre">O curso</a></li>
              <li><a href="curso_ads.php#docentes">Docentes</a></li>
              <li><a href="curso_ads.php#disciplinas">Disciplinas</a></li>
              <li><a href="curso_ads.php#horarios">Horario das Aulas</a></li>
              <li><a href="curso_ads.php">Atendimento</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h5>Estágio</h5>
            <ul>
              <li><a href="estagio.php#sobre">Sobre</a></li>
							<li><a href="estagio.php#arquivos">Termo de Compromisso</a></li>
              <li><a href="estagio.php#arquivos">Ficha de Início e Plano de Atividades</a></li>
              <li><a href="estagio.php#arquivos">Relatório do Estágio</a></li>
              <li><a href="estagio.php#arquivos">Avaliação do Desempenho</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h5>Trabalho de Graduação</h5>
            <ul>
							<li><a href="trabalho_graduacao.php#sobre">Sobre</a></li>
              <li><a href="trabalho_graduacao.php#arquivos">Orientação</a></li>
              <li><a href="trabalho_graduacao.php#arquivos">Entrega do Boneco</a></li>
              <li><a href="trabalho_graduacao.php#arquivos">Apresentação</a></li>
              <li><a href="trabalho_graduacao.php#arquivos">Normas de ABNT</a></li>
              <li><a href="trabalho_graduacao.php#arquivos">Modelo de Boneco</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <h3>Desenvolvedores</h3>
        <ul>
          <li>Douglas Xavier da Silva</li>
          <li>Luana I. S. Santos</li>
          <li>Lucas Anjos dos Santos</li>
          <li>Prof. Me. Saulo F. F. Zambotti</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3>Participar do site</h3>
        <p>Teve alguma ideia para o site? Gostaria de implementar?</p>
        <p>Acesse nossa página no <a href="https://github.com/FatecAracatuba/site_fatec_aracatuba" target="_blank">Github</a> e compartilhe a ideia!</p>
        <p>Aprenda a utilizar o GitHub. Clique <a href="http://rogerdudler.github.io/git-guide/index.pt_BR.html">aqui</a>. </p>
      </div>
      <div class="col-md-4">
        <h3>Fatec no Facebook</h3>
        <div class="fb-page" data-href="https://www.facebook.com/fatecaracatuba?fref=ts" data-width="300" data-height="130" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
        <?php include ("templates/page-plugin.html.php") ?>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <center>
          <p>© 2015
            <a href="http://fatecaracatuba.edu.br/site/" class="link_faculdade_rodape">Fatec Fernando Amaral de Almeida Prado - Araçatuba</a>.
          </p>
        <center>
      </div>
    </div>
  </div>
  <div class="modal fade bs-example-modal-sm" id="loginForm" aria-labelledby="myModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <form method="post" action="./modules/login.php">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Login</h4>
          </div>
          <div class="modal-body">
            <div class="col-md-3"></div>
            <div class="col-md-6">z
              <div class="input-group">
                <span class="input-group-addon" id="user-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" name="user" required placeholder="Usuário" aria-describedby="user-addon" autofocus/>
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="pass-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" class="form-control" name="pwd" required placeholder="Senha" aria-describedby="pass-addon"/>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
          <div class="modal-footer">
            <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <button type="submit" class="btn btn-success">Entrar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</footer>
