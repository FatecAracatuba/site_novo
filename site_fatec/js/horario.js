function excluir_horario(id_horario){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele horário?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "formandos_gerencial.php", { operacaoAjax: "apagar_horario", idhorario: id_horario }, function( data ) { alert(data); window.location.reload(); }, "html");
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
			
			$(function(){
        $('#modal_editar_horario').on('show.bs.modal', function (event) {
          $('#modal_editar_horario').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_hoario = button.data('id')
          var modal = $(this)


          $.post( "formandos_gerencial.php", { operacaoAjax: "buscar_curso", idcurso: id_curso }, function( data ) {
            console.log(data);
						modal.find('#input_id_horario').val(data.id);
            modal.find('#input_curso').val(data.curso);
          }, "json");
        });
      });