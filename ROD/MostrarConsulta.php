	<?php
	session_start();
	if (isset($_GET["StatusCarga"])) {
		if($_GET["CTE"] = ""){
			$_GET["CTE" = "%"
		}
		if($_GET["FIL"]=""){
			$_GET["FIL"]="%"
		}
		if($_GET["SER"]=""){
			$_GET["SER"]="%"
		}
		if($_GET["Destino"]=""){
			$_GET["Destino"]="%";
		}
		if($_GET["StatusCarga"]=""){
			$_GET["StatusCarga"]="%";
		}
		if($_GET["StatusEntrega"]=""){
			$_GET["StatusEntrega"]="%";
		}
		if($_GET["Destinatario"]=""){
			$_GET["Destinatario"]="%";
		}
		if($_GET["Distancia"]=""){
			$_GET["Distancia"]="%";
		}
		if($_GET["dataAgendamento"]=""){
			$_GET["dataAgendamento"]="%";
		}
		if($_GET["tempoAgendamento"]=""){
			$_GET["tempoAgendamento"]="%";
		}
		if($_GET["dataAgendaProg"]=""){
			$_GET["dataAgendaProg"]="%";
		}
		if($_GET["cavaloPt1"]=""){
			$_GET["cavaloPt1"]="%"
		}
		if($_GET["cavaloPt2"]=""){
			$_GET["cavaloPt2"]="%"
		}
		if($_GET["carretaPt1"]=""){
			$_GET["carretaPt1"]="%"
		}
		if($_GET["carretaPt2"]=""){
			$_GET["carretaPt2"]="%"
		}
		if($_GET["nomeFrota"]
		if($_GET["numDT"]=""){
			$_GET["numDT"]="%"
		}
		if($_GET["numKM"]=""){
			$_GET["numKM"]="%"
		}
		if($_GET["horasUteis"]
		if($_GET["filialPt1"]=""){
			$_GET["filialPt1"]="%"
		}
		if($_GET["filialPt2"]=""){
			$_GET["filialPt2"]="%"
		}
			
		
		$conn = new mysqli("localhost", "root", "","rodDB");

		if(!$conn){
			die("Falha de conexão");
		}else{
			$chamada = "SELECT * FROM carga,veiculo WHERE CTE like ('".$_GET["CTE"]."') AND FIL like('".$_GET["FIL"]."') AND SER like ('".$_GET["SER"]."') AND DestinoCarga like ('".$_GET["Destino"]."') AND StatusCarga like ('".$_GET["StatusCarga"]."') AND StatusEntrega like ('".$_GET["StatusEntrega"]."') AND Destinatario like ('".$_GET["Destinatario"]."') AND Distancia like ('".$_GET["Distancia"]."') AND dataAgendamento like ('".$_GET["dataAgendamento"]."') AND tempoAgendamento like ('".$_GET["tempoAgendamento"]."') AND dataAgendaProg like ('".$_GET["dataAgendaProg"]."') AND tempoAgendaProg like ('".$_GET["tempoAgendaProg"]."') AND dataDeTransito like ('".$_GET["dataDeTransito"]."') and tempoDeTransito like ('".$_GET["tempoDeTransito"]."') AND cavalo like ('".$_GET["cavaloPt1"]."-".$_GET["cavaloPt2"]."') AND carreta like ('".$_GET["carretaPt1"]."-".$_GET["carretaPt2"]."') AND Frota like ('".$_GET["nomeFrota"]."') AND DT like ('".$_GET["numDT"]."') AND KM like ('".$_GET["numKM"]."') AND horasUteis like ('".$_GET["horasUteis"]."') AND filial like ('".$_GET["filialPt1"]."- UNILOG -".$_GET["filialPt2"]."')";
			$result = $conn->query($chamada);
			if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {
					$_SESSION["CTE"] = $row["CTE"];
					$_SESSION["FIL"] = $row["FIL"];
					$_SESSION["SER"] = $row["SER"];
					$_SESSION["DestinoCarga"] = $row["DestinoCarga"];
					$_SESSION["StatusCarga"] = $row["StatusCarga"];
					$_SESSION["Destinatario"] = $row["Destinatario"];
					$_SESSION["Distancia"] = $row["Distancia"];
					$_SESSION["dataAgendamento"] = $row["dataAgendamento"];
					$_SESSION["tempoAgendamento"] = $row["tempoAgendamento"];
					$_SESSION["dataAgendaProg"] = $row["dataAgendaProg"];
					$_SESSION["tempoAgendaProg"] = $row["tempoAgendaProg"];
					$_SESSION["dataDeTransito"] = $row["dataDeTransito"];
					$_SESSION["tempoDeTransito"] = $row["tempoDeTransito"];
					$_SESSION["cavalo"] = $row["cavalo"];
					$_SESSION["carreta"] = $row["carreta"];
					$_SESSION["Frota"] = $row["Frota"];
					$_SESSION["DT"] = $row["DT"];
					$_SESSION["KM"] = $row["KM"];
					$_SESSION["horasUteis"] = $row["horasUteis"];
					$_SESSION["filial"] = $row["filial"];
					header("Location: index.php");
					exit();
				}

			}
		} 

	}

	?>