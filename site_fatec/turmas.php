<!-- Lista de Turmas -->
<hr>
<h1 class="text-center">Turmas</h1>
<hr>
<table class="table table-default table-responsive col-sm-12 ">
  <thead>
    <th>Turma</th>
    <th>&nbsp;</th>
  </thead>
  <tbody>
  <?php
    $Turma = new turma('', '', '', '', '');
    $lista_turmas = $Turma->select_all();
    while($rs_lista_turmas = mysql_fetch_array($lista_turmas)){
  ?>
    <tr>
      <td><?=$rs_lista_turmas['descricao']?></td>
      <td>
        <ul class="list-inline list-unstyled">
          <li>
            <small>
              <a data-toggle="modal"
              data-nome="<?=$rs_lista_turmas['descricao']?>"
              data-semestre="<?=$rs_lista_turmas['semestre']?>"
              data-data_inicio="<?=$rs_lista_turmas['data_inicio']?>"
              data-data_termino="<?=$rs_lista_turmas['data_termino']?>"
              data-curso="<?=$rs_lista_turmas['curso']?>"
              data-toggle="modal" data-target="#modal_editar_turma" id="btn_editar_turma"><span class="glyphicon glyphicon-edit"></span> Editar</a>
            </small>
          </li>
          <li>
            <small>
              <a href="?excluir_turma=<?=$rs_lista_turmas['id']?>" onclick="return confirm('Tem certeza que deseja excluir o registro da turma?');"><span class="glyphicon glyphicon-remove"></span> Excluir</a>
            </small>
          </li>
        </ul>
      </td>
    </tr>
  <?php
    }
  ?>
  </tbody>
</table>
<hr>
