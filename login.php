<!DOCTYPE html>
<html>
<head>
	<title>Login Área Restrita</title>
	<meta charset="utf8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel='stylesheet' href='css/index.css'/>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/stick.js"></script>
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