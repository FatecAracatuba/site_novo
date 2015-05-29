<!DOCTYPE HTML>
<html>
  <head>
    <?php include "templates/head_content.php" ?>
    <script type="text/javascript">
      $(function(){
        var url = document.location.toString();
        if (url.match('#')){
          $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
          }
        // Change hash for page-reload
        $('.nav-tabs a').on('shown.bs.tab', function (e) {
          window.location.hash = e.target.hash;
        });
      });
    </script>
  </head>
  <body>
    <?php include ("templates/menu.html.php") ?>
    <div class="container main">
			<div class="container">
				<ul class="nav nav-tabs">
          <li role="presentation" class="active">
            <a href="#bio" data-toggle="tab">Biocombustíveis</a>
          </li>
					<li role="presentation">
            <a href="#ads" data-toggle="tab">Análise e Desenvolvimento de Sistemas</a>
          </li>
          <li role="presentation">
            <a href="#gestao" data-toggle="tab">Gestão Empresarial</a>
          </li>
				</ul>
				<div class="tab-content">
          <div class="tab-pane fade in active" id="bio">
						<article class="content">
							<h2 class="h2">Biocombustíveis</h2>


						</article>
					</div>
          <div class="tab-pane fade" id="ads">
						<article class="content">
							<h2 class="h2">Análise e Desenvolvimento de Sistemas</h2>

						</article>
					</div>
				<div class="tab-pane fade" id="gestao">
						<article class="content">
							<h2 class="h2">Gestão Empresarial</h2>


						</article>
					</div>
				</div>
			</div>
		</div>
    <?php include ("templates/footer.html.php") ?>
  </body>
</html>
