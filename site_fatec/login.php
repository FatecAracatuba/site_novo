<!DOCTYPE html>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
	  <title>Login Área Restrita</title>
  </head>
  <body>
    <div class="container wrap">
      <form method="post" action="validar.php" class="form-signin">
        <h2 class="form-signin-heading">Login</h2>
        <input type="text" placeholder="Usuário" name="usuario" class="form-control" required autofocus>
        <input type="password" placeholder="Senha" name="senha" class="form-control" required>
        <hr>
        <button class="btn btn-lg btn-success btn-block" type="submit">
          <i class="glyphicon glyphicon-log-in"></i>
          Entrar
        </button>
      </form>
    </div>
  </body>
</html>