<div class="banner">
  <img src="images/banner_blue.png" alt="">
</div>
<nav class="navbar navbar-default text-center">
  <div class="container">
    <div class="col-sm-2">
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fatec-menu">
        <span class="sr-only">Alternar Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">
        <img src="images/logo-fatec.svg" alt="Fatec Araçatuba" width="30" height="30">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="fatec-menu">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Instituição <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="quem_somos.php">Quem Somos</a></li>
            <li><a href="biblioteca.php">Biblioteca</a></li>
      			<li><a href="monitoria.php">Monitoria</a></li>
						<li><a href="servidores.php">Servidores</a></li>
      			<li><a href="iniciacao.php">Iniciação Científica</a></li>
      			<li><a href="concursos.php">Concursos</a></li>
          </ul>
        </li>
        <li><a href="http://www.vestibularfatec.com.br/home" target="_blank">Vestibular</a></li>
        <li class="dropdown">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Graduação <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="curso_ads.php">ADS</a></li>
            <li><a href="curso_bio.php">Biocombustíveis</a></li>
            <li><a href="curso_gestao.php">Gestão Empresarial</a></li>
          </ul>
        </li>
        <li><a href="trabalho_graduacao.php">Trabalho de Graduação</a></li>
        <li><a href="estagio.php">Estágio</a></li>
				<li><a href="formandos.php">Formandos</a></li>
		    <li><a href="https://www.sigacentropaulasouza.com.br/fatec/login.aspx" target="_blank">Siga</a></li>
				<li>
					<?php
						if(isset($_SESSION)){
							echo '<a href="logout.php">Sair</a>';
						}
					?>
				</li>
      </ul>
    </div>
  </div>
</nav>
