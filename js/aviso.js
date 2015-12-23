function excluir_aviso(id_aviso){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele aviso?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "avisos_painel.php", { operacaoAjax: "apagar_aviso", idaviso: id_aviso }, function( data ) { alert(data); window.location.reload(); }, "html");
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
        $('#modal_editar_aviso').on('show.bs.modal', function (event) {
          $('#modal_editar_aviso').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_aviso = button.data('id')
          var modal = $(this)

          $.post( "avisos_painel.php", { operacaoAjax: "buscar_aviso", idaviso: id_aviso }, function( data ) {
            console.log(data);
						modal.find('#input_id_aviso').val(data.id);
						modal.find('#input_id_usuario').val(data.id_usuario);
						modal.find('#input_titulo_aviso').val(data.titulo);
						modal.find('#input_conteudo_aviso').val(data.conteudo);
						modal.find('#input_ativo').val(data.ativo);
          }, "json");
        });
      });