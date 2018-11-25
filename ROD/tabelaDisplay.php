<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<tr>
		<th class="displayTabela">Status</th> <!--  -->
		<th class="displayTabela">Data Ocorrência</th> <!--   -->
		<th class="displayTabela">Fil/SerCT-e</th><!--  -->
		<th class="displayTabela">Data</th><!--   -->
		<th class="displayTabela">Filial</th><!--  -->
		<th class="displayTabela">NF</th>
		<th class="displayTabela">Origem</th>
		<th class="displayTabela">Destino</th>
		<th class="displayTabela">Detinatário</th>
		<th class="displayTabela">Data agendamento</th>
		<th class="displayTabela">Data agenda Prog</th>
		<th class="displayTabela">Tempo de Trânsito</th>
		<th class="displayTabela">Distância</th>
		<th class="displayTabela">Motorista</th>
		<th class="displayTabela">Cavalo</th>
		<th class="displayTabela">Carreta</th>
		<th class="displayTabela">Frota</th>
		<th class="displayTabela">DT</th>
		<th class="displayTabela">Ocorrências</th>
		<th class="displayTabela">Posições</th>
		<th class="displayTabela">Status</th>
		<th class="displayTabela">KM</th>
		<th class="displayTabela">Hrs Uteis</th>
		<?php
		session_start();
		if (isset($_GET["StatusCarga"])) {

			$conn = new mysqli("localhost", "root", "","rodDB");

			if(!$conn){
				die("Falha de conexão");
			}else{
				if ($result->num_rows > 0) {

					while($row = $result->fetch_assoc()) {
						echo "<tr>
						<th class='displayTabela'>".$_SESSION["CTE"]."</th>
						<th class='displayTabela'>".$_SESSION["FIL"]."</th>
						<th class='displayTabela'>".$_SESSION["SER"]."</th>
						<th class='displayTabela'>".$_SESSION["DestinoCarga"]."</th>
						<th class='displayTabela'>".$_SESSION["StatusCarga"]."</th>
						<th class='displayTabela'>".$_SESSION["Destinatario"]."</th>
						<th class='displayTabela'>".$_SESSION["Distancia"]."</th>
						<th class='displayTabela'>".$_SESSION["dataAgendamento"]."</th>
						<th class='displayTabela'>".$_SESSION["tempoAgendamento"]."</th>
						<th class='displayTabela'>".$_SESSION["dataAgendaProg"]."</th>
						<th class='displayTabela'>".$_SESSION["dataDeTransito"]."</th>
						<th class='displayTabela'>".$_SESSION["tempoDeTransito"]."</th>
						<th class='displayTabela'>".$_SESSION["cavalo"]."</th>
						<th class='displayTabela'>".$_SESSION["carreta"]."</th>
						<th class='displayTabela'>".$_SESSION["Frota"]."</th>
						<th class='displayTabela'>".$_SESSION["DT"]."</th>
						<th class='displayTabela'>".$_SESSION["KM"]."</th>
						<th class='displayTabela'>".$_SESSION["horasUteis"]."</th>
						<th class='displayTabela'>".$_SESSION["horasUteis"]."</th>
						<th class='displayTabela'>".$_SESSION["filial"]."</th>
						</tr>";
					}
				}
			} 

		}

		?>
	</tr>

</body>
</html>