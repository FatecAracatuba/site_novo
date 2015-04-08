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
            <a href="#prof" data-toggle="tab">Arquivos do Estágio</a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane fade in active" id="about">
            <article class="content">
              <h2 class="h2">Como funciona o estágio na Fatec de Araçatuba?</h2>
              <hr>
              <p class="lead">O estágio é obrigatório?</p>
              <p>Sim, inclusive é previsto na grade curricular dos cursos. O estudante que não cumpre
                 240 horas, não pode colar grau. 
              </p>
              <hr>
              <p class="lead">Onde posso estagiar?</p>
              <p>O estudante deve realizar o estágio em empresas que possuem afinidade com sua área
                 de formação profissional. Atualmente, a faculdade possui 18 convênios para estágio.
                 (Confira lista no final desta postagem). 
              </p>
              <hr>
              <p class="lead">De que parte a iniciativa para iniciar o estágio?</p>
              <p>Sempre do aluno. O estudante deve observar o mercado para perceber as empresas que
                 se enquadram no seu desejo profissional. Após isso, deve buscar o contato da pessoa
                 responsável pelo Recursos Humanos para o iniciar o diálogo sobre o estágio.  
              </p>
              <hr>
              <p class="lead">A empresa em que desejo estagiar não possui convênio com a Fatec. E agora?</p>
              <p>Neste caso, envie e-mail para <a href="emailto:ota.fatec@gmail.com">ota.fatec@gmail.com</a>. Por meio da comunicação, o
                 coordenador de estágios, Roberto Ota, buscará o diálogo para convênio. Depois do
                 acordo formalizado, o aluno pode retomar o contato para a viabilização do estágio. 
              </p>
              <hr>
              <p class="lead">A partir de qual semestre posso estagiar? </p>
              <p>Quando regularmente matriculado, o aluno pode começar a estagiar no 4º semestre. </p>
              <hr>
              <p class="lead">Todo estágio deve ter um professor orientador? </p>
              <p>Sim, inclusive o professor orientador precisa ser da mesma área em que o aluno vai
                 estagiar. O estudante deve indicar o nome do professor na hora da formalização do
                 contrato.  
              </p>
              <hr>
              <p class="lead">Qual a carga horária do estágio obrigatório? </p>
              <p>Até seis horas diárias e 30 horas semanais. </p>
              <hr>
              <p class="lead">Já escolhi a empresa em que desejo estagiar e obtive resposta positiva do Recursos
              Humanos da organização. O que devo fazer agora?</p>
              
            <ul>  
              <li>
                <b>1º Passo:</b>
                <p>Comunicar o coordenador de estágio pelo <a href="emailto:ota.fatec@gmail.com">ota.fatec@gmail.com</a> e no mesmo e-mail
                solicitar a carta de apresentação da faculdade para ser apresentada na empresa. A
                comunicação de solicitação precisa conter: nome completo, curso e termo. Depois
                disso, o estudante deve procurar o coordenador de estágio, pessoalmente, para adquirir a 
                carta de apresentação assinada por ele. Com a carta em mãos, o estudante procura a
                empresa de interesse e, e se ambas as partes concordarem com os termos do estágio, é
                hora de formalizar o contrato.</p>
              </li>
              
              <li>
                <b>2º Passo:</b>
                <p>Para formalizar o contrato, uma seguradora deve ser indicada: o estudante pode utilizar
                seu próprio seguro de vida pessoal, pode indicar uma seguradora para a garantia do
                seguro de vida, caso ainda não tenha, ou a empresa se responsabiliza pelo seguro. Após
                isso, deve enviar novamente e-mail para o coordenador de estágios, solicitando os
                documentos necessários: ficha de estágio, plano de estágio e o termo de
                compromisso de estágio. Depois de preencher a documentação, é só apresentar
                pessoalmente ao professor Ota e à empresa. As três partes envolvidas devem assinar a
                documentação: empresa, aluno e Fatec.</p>
              </li>
              <li>
                <b>3º Passo:</b>
                <p>Se todos os documentos estiverem certinhos, maravilha! Hora de começar o estágio!
                Sucesso!</p>
              </li>
            </ul>
            <hr>
            <p class="lead">Veja quais são as empresas conveniadas com a Fatec para estágio: </p>
            <ul>
              <li>Alcoazul</li>
              <li>Aralco</li>
              <li>Cia Açucareira De Penápolis</li>
              <li>Cooperhidro</li>
              <li>Decasa</li>
              <li>Acquavita</li>
              <li>Figueira– Usina Grupo Aralco Buritama</li>
              <li>Frigorífico Tilápia Do BrasilHidrau-Ata</li>
              <li>Neth (Núcleo De Evolução Tecnológica E Humna)</li>
              <li>Cervejaria Premium</li>
              <li>Renuka Do Brasil – Brejo Alegre</li>
              <li>Renuka Do Brasil – Promissão</li>
              <li>Servpav Indústria De Materiais Para Pavimentos Ltda</li>
              <li>Unesp Campus Araçatuba – Odontologia</li>
              <li>Unesp Campus Araçatuba – Veterinária</li>
              <li>Unesp Campus Araraquara – Instituto De Química</li>
              <li>Usina Ipê – Pedra Agroindustrial</li>
              <li>Viralcool </li>
            </ul>
            </article>    
          </div>  

          <div class="tab-pane fade" id="prof">
            <article class="content">
              <h2 class="h2">Arquivos do Estágio</h2>
              <hr>
              <table class="table table-striped table-responsive col-sm-12 ">
                <thead>
                  <tr>
                    <th>Arquivo</th>
                    <th class="text-center">Pré Visualizar</th>
                    <th class="text-center">PDF</th>
                    <th class="text-center">Word</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Termo de Compromisso</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/termo_compromisso.pdf');" href="#"></a></td>        
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/termo_compromisso.pdf" target="_blank" ></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="docx/termo_compromisso.docx" target="_blank" ></a></td>
                  </tr>
                  <tr>
                    <td>Ficha de Início e Plano de Atividades</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/ficha_inicio_plano_atividades.pdf');" href="#"></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/ficha_inicio_plano_atividades.pdf" target="_blank" ></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="docx/ficha_inicio_plano_atividades.docx" target="_blank" ></a></td>
                  </tr>
                  <tr>
                    <td>Relatório do Estágio</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/relatorio_estagio.pdf');" href="#"></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/relatorio_estagio.pdf" target="_blank" ></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="docx/relatorio_estagio.pdf" target="_blank" ></a></td>
                  </tr>
                  <tr>
                    <td>Avaliação do Desempenho</td>
                    <td><a class="glyphicon glyphicon-play-circle centralized" onClick="preview('pdf/avaliacao_desempenho.pdf');" href="#"></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="pdf/avaliacao_desempenho.pdf" target="_blank" ></a></td>
                    <td><a class="glyphicon glyphicon-download-alt centralized" href="docx/avaliacao_desempenho.docx" target="_blank" ></a></td>
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
