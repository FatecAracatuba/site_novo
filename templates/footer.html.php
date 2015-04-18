<footer class="footer">
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
        <form>
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
              <button type="submit" target="modules/send-mail.php" class="btn btn-large btn-warning">Enviar</button>
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
        <a href="login.php" class="btn btn-large btn-warning ">
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
              <li><a href="">O curso</a></li>
              <li><a href="">Docentes</a></li>
              <li><a href="">Disciplinas</a></li>
              <li><a href="">Horario das Aulas</a></li>
              <li><a href="">Atendimento</a></li>
            </ul> 
          </div>
          <div class="col-md-6">
            <h5>ADS</h5>      
            <ul>
              <li><a href="">O curso</a></li>
              <li><a href="">Docentes</a></li>
              <li><a href="">Disciplinas</a></li>
              <li><a href="">Horario das Aulas</a></li>
              <li><a href="">Atendimento</a></li>
            </ul>      
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h5>Faculdade</h5>
            <ul>
              <li><a href="">Quem somos</a></li>      
            </ul>

            <h5>Alunos</h5> 
            <ul>
              <li><a href="">Calendário</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h5>Trabalho de Graduação</h5>
            <ul>
              <li><a href="">Orientação</a></li>
              <li><a href="">Entrega do Boneco</a></li>
              <li><a href="">Apresentação</a></li>
              <li><a href="">Normas de ABNT</a></li>
              <li><a href="">Modelo de Boneco</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <h3>Desenvedores</h3>
        <ul>
          <li>Douglas Xavier</li>
          <li>Luana Santos</li>
          <li>Lucas Anjos</li>
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
</footer>
