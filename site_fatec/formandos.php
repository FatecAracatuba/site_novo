<?php include ("index_modules.php"); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript" src="data:application/octet-stream;base64,JChmdW5jdGlvbigpew0KCXZhciB1cmwgPSBkb2N1bWVudC5sb2NhdGlvbi50b1N0cmluZygpOw0KCWlmICh1cmwubWF0Y2goJyMnKSl7DQoJCSQoJy5uYXYtdGFicyBhW2hyZWY9IycrdXJsLnNwbGl0KCcjJylbMV0rJ10nKS50YWIoJ3Nob3cnKTsNCgl9DQoJJCgnLm5hdi10YWJzIGEnKS5vbignc2hvd24uYnMudGFiJywgZnVuY3Rpb24gKGUpIHsNCgkJd2luZG93LmxvY2F0aW9uLmhhc2ggPSBlLnRhcmdldC5oYXNoOw0KCX0pOw0KfSk7DQo=" ></script>
  </head>
  <body>
		<?php
      include ("templates/menu.html.php");
		?>
		<script type="text/javascript">
      /*
      $(document).ready(function(){
        $("#btn_editar_aluno").click(function(){
          $("#modal_editar_aluno").modal('show');
            var id = $(this).data('id_aluno');
            var nome = $(this).data('nome');
            var tg_pdf = $(this).data('tg_pdf')[0].files[0];
            var turma = $(this).data('turma');
            $.ajax({
              type: "POST",
              url: expenses.php,
              data: "id=" + id,
              success : function(data){
                $('#id').val(data)
                modal.find('#input_nome').text(alunos.nome)
                modal.find('#input_antigo_tg_pdf').text(alunos.antigo_tg_pdf)
                modal.find('#input_tg_pdf').text(alunos.tg_pdf)
                modal.find('#input_turma').text(alunos.turma)
              },
              dataType: html
          });
        });
      });


      $(function(){
        $("#modal_editar_aluno").on('show.bs.modal', function (event){
          var button = $(event.relatedTarget)
          var id = button.data('id_aluno')
          var nome = button.data('nome')
          var antigo_tg_pdf = button.data('antigo_tg_pdf')
          var turma = button.data('turma')
          var modal = $(this)
          $.ajax({
            type: "GET",
            url: "formandos.php",
            data: id,
            datatype: 'json',
            success: function(){
              modal.find('#input_nome').text(nome)
              modal.find('#input_antigo_tg_pdf').text(antigo_tg_pdf)
              modal.find('#input_turma').html(turma)
            },
            error: function(data){
              console.log("Error!")
              console.log(data)
            }
          })
        });
      });*/
      
		</script>
    <div class="container main">
			<hr>
			<ul class="nav nav-tabs">
        <?php lista_tabs(); ?>
      </ul>

				<div class="tab-content">
          <?php
            $curso = new curso();
            $cursos = $curso->select_all();

            foreach($cursos as $curso){
              cria_tabs_curso($curso['id']);
            }
          ?>
				</div>
				<div class="row">
					<div class="col-sm-3 col-sm-6 col-md-2 col-lg-2 pull-right">
						<button class="btn btn-link"><a href="formandos_gerencial.php">Painel</a></button>
					</div>
				</div>
			</div>
			</div>

			<?php
        function lista_tabs(){
          $curso = new curso();
          $cursos = $curso->select_all();

          foreach($cursos as $curso){ ?>
            <li role="presentation">
              <a href="#curso_<?=$curso['id']?>" data-toggle="tab"><?=$curso['nome']?></a>
            </li>
          <?php
          }
        }

        function cria_tabs_curso($idcurso){
          //SELECT PARA PEGAR O CURSO
          $cursos = new curso();
          $curso = $cursos->find($idcurso);

          $turma = new Turma();
          $turmas = $turma->select_by_curso($curso['id']);

          ?>
            <div class="tab-pane fade in active" id="curso_<?=$curso['id']?>">
              <article class="content">
                <div class="panel-group col-md-12" id="accordion_<?=$curso['id']?>" role="tablist" aria-multiselectable="true">
                  <?php foreach($turmas as $turma){ ?>
                    <br><br>
                    <div class="panel panel-default accor">
                      <div class="panel-heading" role="tab" id="turma_<?=$turma['id']?>">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion_<?=$curso['id']?>" href="#collapseTurma<?=$turma['id']?>" aria-controls="collapseTurma<?=$turma['id']?>"><?=$turma['descricao']?></a>
                        </h4>
                      </div>
                      <div id="collapseTurma<?=$turma['id']?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="turma_<?=$turma['id']?>">
                        <div class="panel-body">
                          <?php lista_alunos_turmas($turma['id']); ?>
                        </div>
                      </div>
                    </div>
                  <?php	} // FIM DO LOOP DE TURMAS ?>
                </div>
              </article>
            </div>
          <?php
        }

        function lista_alunos_turmas($idturma){
          $aluno = new Aluno();
          $alunos = $aluno->select_by_turma($idturma);
          ?>
            <table class="table table-default table-responsive col-sm-12">
              <thead>
                <th>Aluno</th>
                <th>Trabalho de Graduação</th>
              </thead>
              <tbody>
                <?php foreach ($alunos as $aluno){ ?>
                  <tr>
                    <td><?=$aluno['nome']?></td>
                    <td><a href="<?= $aluno['tg_pdf']?>" target="_blank">Trabalho de Graduação</a></td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          <?php
        }

        include ("templates/footer.html.php");
        include ("templates/modal_edit_aluno.php");
        include ("templates/modal_insert_aluno.php");
        include ("templates/modal_insert_turma.php");
				include ("templates/modal_insert_curso.php");
      ?>
  </body>
</html>
