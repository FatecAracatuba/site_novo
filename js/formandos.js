function excluir_curso(id_curso){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele curso?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "formandos_painel.php", { operacaoAjax: "apagar_curso", idcurso: id_curso }, function( data ) { alert(data); window.location.reload(); }, "html");
            },
            cancel: function(button) {

            },
            confirmButton: "Sim, eu tenho.",
            cancelButton: "Melhor não...",
            post: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-default",
            dialogClass: "modal-dialog"
        });
      }

      function editar_curso($id_curso){

      }

      $(function(){
        $('#modal_editar_curso').on('show.bs.modal', function (event) {
          $('#modal_editar_curso').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_curso = button.data('id')
          var modal = $(this)


          $.post( "formandos_painel.php", { operacaoAjax: "buscar_curso", idcurso: id_curso }, function( data ) {
            console.log(data);
						modal.find('#input_id_curso').val(data.id);
            modal.find('#input_nome_curso').val(data.nome);
          }, "json");
        });
      });
			
			/*$(document).on( "click", '.btn_editar_curso',function() {

				var id = $(this).data('id');
        var nome_curso = $(this).data('nome_curso');

        $("#input_id").val(id);
        $("#input_nome_curso").val(nome_curso);
				
				$('#modal_editar_curso').modal('show');

			});*/
			
      function excluir_turma(id_turma){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquela turma?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "formandos_painel.php", { operacaoAjax: "apagar_turma", idturma: id_turma }, function( data ) { alert(data); window.location.reload(); }, "html");
            },
            cancel: function(button) {

            },
            confirmButton: "Sim, eu tenho.",
            cancelButton: "Melhor não...",
            post: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-default",
            dialogClass: "modal-dialog"
        });
      }

      function editar_turma($id_turma){

      }

      $(function(){
        $('#modal_editar_turma').on('show.bs.modal', function (event) {
          $('#modal_editar_turma').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_turma = button.data('id')
          var modal = $(this)


          $.post( "formandos_painel.php", { operacaoAjax: "buscar_turma", idturma: id_turma }, function( data ) {
            console.log(data);
						modal.find('#input_id_turma').val(data.id);
            modal.find('#input_descricao').val(data.descricao);
						modal.find('#input_semestre').val(data.semestre);
            modal.find('#input_data_inicio').val(data.data_inicio);
						modal.find('#input_data_termino').val(data.data_termino);
						modal.find('#input_curso').val(data.id_curso);
          }, "json");
        });
      });
			
			/*$(document).on( "click", '.btn_editar_turma',function() {

				var id = $(this).data('id');
				var descricao = $(this).data('descricao_antiga');
        var semestre = $(this).data('semestre');
        var data_inicio = $(this).data('data_inicio');
				var data_termino = $(this).data('data_termino');
				var curso = $(this).data('curso');

        $("#input_id").val(id);
				$("#input_descricao").val(descricao);
        $("#input_semestre").val(semestre);
        $("#input_data_inicio").val(data_inicio);
				$("#input_data_termino").val(data_termino);
				$("#input_curso").val(curso);

			});*/
			
			function excluir_aluno(id_aluno){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele aluno?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "formandos_painel.php", { operacaoAjax: "apagar_aluno", idaluno: id_aluno }, function( data ) { alert(data); window.location.reload(); }, "html");
            },
            cancel: function(button) {

            },
            confirmButton: "Sim, eu tenho.",
            cancelButton: "Melhor não...",
            post: true,
            confirmButtonClass: "btn-danger",
            cancelButtonClass: "btn-default",
            dialogClass: "modal-dialog"
        });
      }

      function editar_aluno($id_aluno){

      }

      $(function(){
        $('#modal_editar_aluno').on('show.bs.modal', function (event) {
          $('#modal_editar_aluno').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_aluno = button.data('id')
          var modal = $(this)


          $.post( "formandos_painel.php", { operacaoAjax: "buscar_aluno", idaluno: id_aluno }, function( data ) {
            console.log(data);
            modal.find('#input_nome').val(data.nome);
						modal.find('#input_antigo_tg').val(data.tg_pdf);
            modal.find('#input_antigo_tg_pdf').val(data.tg_pdf);
            modal.find('#input_turma').val(data.id_turma);
            modal.find('#input_id').val(data.id);
          }, "json");
        });
      });
			
			/*$(document).on("click", ".btn_editar_aluno", function(){
				var id = $(this).data('id');
        var nome = $(this).data('nome');
        var tg_pdf = $(this).data('tg_pdf')[0].files[0];
				var turma = $(this).data('turma');

        $('.modal-body #input_id').val(id);
        $('.modal-body #input_nome').val(nome);
        $('.modal-body #input_tg_pdf').val(tg_pdf);
				$('.modal-body #input_turma').val(turma);

				$('#modal_editar_aluno').modal('show');
			});*/