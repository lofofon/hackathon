<?php //Iniciando o php
session_start();
echo $_POST["login"];

if(isset($_POST["login"])){
    $conn = new mysqli("localhost", "root", "","rodDB");
    
    if(!$conn){
        die("Falha de conexão");
    }else{
        $chamada = "SELECT * FROM usuario";
        $result = $conn->query($chamada);
        $autorizacao= false;
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                if(md5($_POST["login"]) == $row["login"] && md5($_POST["senha"]) == $row["senha"]){
                    $_SESSION["Nome"] = $row["nome"];
                    $_SESSION["nome_Empresa"] = $row["nome_Empresa"];
                    $autorizacao = true;
                }
            }
            if($autorizacao==true){
                echo $_SESSION["Nome"];
                echo $_SESSION["nome_Empresa"];
                $_SESSION["autorizacao"] = $autorizacao;
                header("Location: index.php"); 
                exit();
                
            }else{
                header("Location: login.php"); 
                exit();
                
            }
        } 
    }
    
}

 //Finalizando o php?>
 