function excluir_horario(id_horario){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele horário?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "horarios_painel.php", { operacaoAjax: "apagar_horario", idhorario: id_horario }, function( data ) { alert(data); window.location.reload(); }, "html");
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
			
function ativar_horario(id_horario, id_curso){
        $.confirm({
            text: "Você possui a certeza de que deseja ativar aquele horário?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "horarios_painel.php", { operacaoAjax: "ativar_horario", idhorario: id_horario, idcurso: id_curso }, function( data ) { alert(data); window.location.reload(); }, "html");
            },
            cancel: function(button) {

            },
            confirmButton: "Sim, eu tenho.",
            cancelButton: "Melhor não...",
            post: true,
            confirmButtonClass: "btn-info",
            cancelButtonClass: "btn-default",
            dialogClass: "modal-dialog"
        });
      }
			
function desativar_horario(id_horario){
        $.confirm({
            text: "Você possui a certeza de que deseja desativar aquele horário?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "horarios_painel.php", { operacaoAjax: "desativar_horario", idhorario: id_horario }, function( data ) { alert(data); window.location.reload(); }, "html");
            },
            cancel: function(button) {

            },
            confirmButton: "Sim, eu tenho.",
            cancelButton: "Melhor não...",
            post: true,
            confirmButtonClass: "btn-info",
            cancelButtonClass: "btn-default",
            dialogClass: "modal-dialog"
        });
      }
			
			$(function(){
        $('#modal_editar_horario').on('show.bs.modal', function (event) {
          $('#modal_editar_horario').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_horario = button.data('id')
          var modal = $(this) 

          $.post( "horarios_painel.php", { operacaoAjax: "buscar_horario", idhorario: id_horario }, function( data ) {
            console.log(data);
						modal.find('#input_id_horario').val(data.id);
						modal.find('#input_antigo_horario').val(data.horario_pdf);
						modal.find('#input_antigo_horario_pdf').val(data.horario_pdf); // Este valor veio de um campo somente leitura. Deve ser por isso que não é enviado ao servidor caso ocorra cadastro sem upload de arquivo
            modal.find('#input_curso').val(data.id_curso);
          }, "json");
        });
      });