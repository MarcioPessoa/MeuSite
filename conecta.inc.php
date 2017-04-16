<?php
	
	
	//conectando ao servidor
	$conexao = mysqli_connect("localhost","root","");
	
	if($conexao){
		echo "Conexao feita com sucesso!!<br><br>";
	}else{
		echo "Erro ao estabelecer coneção";
	}
	//conectando ao Banco 
	$db = mysqli_select_db($conexao, "meusite");
	
	if($db){
		echo "Banco de dados selecionado com sucesso!!!";
	} else {
		echo "Banco de dados não encontrado";
	}
	
	//criando uma tabela no BD
/*	$query = mysqli_query($conexao,
		"CREATE TABLE pessoas
			(id int PRIMARY KEY AUTO_INCREMENT,
			nome VARCHAR(100),
			telefone int,
			email VARCHAR(200),
			assunto VARCHAR(50),
			mensagem text
			);"
	);
		//inserindo dados no BD
	$query = mysqli_query($conexao,
		"INSERT INTO faleconosco
			(nome, telefone, email, assunto, mensagem)
			values ('Daniel', 88992233, 'daniel@gmail.com', 'Envio Fale Conosco', 'Envio via site...'
			);"
	);*/
	
	$dados = mysqli_query($conexao,"SELECT * FROM faleconosco");
	
	while($tabela = mysqli_fetch_array($dados)){
		
		echo $tabela['id'].'<br>';
		echo $tabela['nome'].'<br>';
		echo $tabela['email'].'<br>';		
		echo $tabela['telefone'].'<br>';
		echo $tabela['assunto'].'<br>';
		echo $tabela['mensagem'].'<br>';
		echo '<hr>';
	}
	
	
?>