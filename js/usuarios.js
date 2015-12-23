//Funções para perfil embaixo

function excluir_perfil(id_perfil){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele perfil?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "perfil.php", { operacaoAjax: "apagar_perfil", idperfil: id_perfil }, function( data ) { alert(data); window.location.reload(); }, "html");
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

      function editar_perfil($id_perfil){

      }

      $(function(){
        $('#modal_editar_perfil').on('show.bs.modal', function (event) {
          $('#modal_editar_perfil').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_perfil = button.data('id')
          var modal = $(this)


          $.post( "perfil.php", { operacaoAjax: "buscar_perfil", idperfil: id_perfil }, function( data ) {
            console.log(data);
						modal.find('#id').val(data.id)
						modal.find('#id_perfil_senha').val(data.id)
            modal.find('#username').val(data.username)
						modal.find('#before_photo').val(data.foto)
            modal.find('#name').val(data.nome)
						modal.find('#mail').val(data.email)
						modal.find('#password').val(data.senha)
						modal.find('#type').val(data.tipo)
            modal.find('#phone').val(data.telefone)
          }, "json");
        });
      });
			

// Funções para usuários abaixo

function excluir_usuario(id_usuario){
        $.confirm({
            text: "Você possui a certeza de que deseja apagar aquele usuário?",
            title: "Confirmação necessária!",
            confirm: function(button) {
              $.post( "usuarios.php", { operacaoAjax: "apagar_usuario", idusuario: id_usuario }, function( data ) { alert(data); window.location.reload(); }, "html");
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

      function editar_usuario($id_usuario){

      }

      $(function(){
        $('#modal_editar_usuario').on('show.bs.modal', function (event) {
          $('#modal_editar_usuario').addClass('loading')
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id_usuario = button.data('id')
          var modal = $(this)


          $.post( "usuarios.php", { operacaoAjax: "buscar_usuario", idusuario: id_usuario }, function( data ) {
            console.log(data);
						modal.find('#id').val(data.id)
						modal.find('#id_usuario_senha').val(data.id)
            modal.find('#username').val(data.username)
						modal.find('#before_photo').val(data.foto)
            modal.find('#name').val(data.nome)
						modal.find('#mail').val(data.email)
						modal.find('#password').val(data.senha)
						modal.find('#type').val(data.tipo)
            modal.find('#phone').val(data.telefone)
          }, "json");
        });
      });