<?php

// Enviando os registros do formulário para o banco de dados

if(isset($_POST["email"])){//Checa se o email teve um valor definido
	$conn = new mysqli("localhost", "root", "","rodDB");
	if (!$conn) {
		die("Falha de conexão: " . $conn->connect_error);
	} else{
		$chamada = "INSERT INTO usuario (nome,CPF,nome_Empresa,CNPJ,email,login,senha) VALUES ('".$_POST["nome"]."',".$_POST["CPF"].",'".$_POST["nome_Empresa"]."',".$_POST["CNPJ"].",'".$_POST["email"]."','".md5($_POST["login"])."','".md5($_POST["senha"])."')"; //Insere os dados do usuário no banco de dados
		//echo "<br><br><br><br><br>".$chamada;
		if (!mysqli_query($conn, $chamada)){// Checa o funcionamento da chamda sql
			die("Falha no cadastro. Tente novamente.");
		}
	}
	mysqli_close($conn);
}else{
}
	//Redirecionando o usuário para a página de login
header("Location: login.php");
exit();
?>