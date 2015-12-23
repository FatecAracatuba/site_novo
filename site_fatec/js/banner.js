function excluir_banner(id_banner){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele banner?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "banners_painel.php", { operacaoAjax: "apagar_banner", idbanner: id_banner }, function( data ) { alert(data); window.location.reload(); }, "html");
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
        $('#modal_banner').on('show.bs.modal', function (event) {
          $('#banner_preview').attr('src', $('#imageresource').attr('src'));
        });
      });
			
			$(function(){
        $('#modal_editar_banner').on('show.bs.modal', function (event) {
          $('#modal_editar_banner').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_banner = button.data('id')
          var modal = $(this)


          $.post( "banners_painel.php", { operacaoAjax: "buscar_banner", idbanner: id_banner }, function( data ) {
            console.log(data);
						modal.find('#input_id_banner').val(data.id);
						modal.find('#input_ativo').val(data.ativo);
            modal.find('#input_banner_img').val(data.banner_img);
          }, "json");
        });
      });