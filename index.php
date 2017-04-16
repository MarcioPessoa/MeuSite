<html>
    <head>
        <title>MeuSite.com</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    </head>
    <body>
		<div>
			<?php
				include_once("topo.php");
				include_once("menu.php");
				
				$var = "conteudo.php";
			
				if(empty($_SERVER["QUERY_STRING"])){
					$var = "conteudo.php";
					include_once("$var");
				} else{
					$pg = $_GET['pg'];
					include_once("$pg.php");
				}
			
				//Pesquisar funções da variável $_SERVER.
				//Não usar o @ para ambientes de produção.
			
				include_once("conteudo.php");
			
			
			
				include_once("rodape.php");
			?>
		</div>
    </body>
</html>