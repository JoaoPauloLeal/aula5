<?php 
	if(!empty($_POST["nome"]))
	{
		$nome = isset($_POST["nome"])? $_POST["nome"] : "Não Informado";
	}
	else
	{
		$nome = "Não Informado";
	}
	if(!empty($_POST["anonasc"]))
	{
		$ano = isset($_POST["anonasc"])? $_POST["anonasc"] : 0; 
		$date = new DateTime($ano);
		$interval = $date->diff( new DateTime(  date('Y/m/d') ) ); 
		$diferenca = $interval->format('%Y Anos, %m Meses e %d Dias');
		$diferencaMeses = (($interval->format('%Y'))*12)+($interval->format('%m'))+(($interval->format('%d'))/30);
		$diferencaDias = ((($interval->format('%Y'))*12)*30)+(($interval->format('%m'))*30)+($interval->format('%d'));
	}
	else
	{
		$ano = 0;
		$diferenca = 0;
		$diferencaMeses = 0;
		$diferencaDias = 0;
	}
	echo "
	<div class='well well-sm'>
	<table class='table'>
		<tr>
			<td>Nome</td>
			<td>Ano de Nascimento</td>
			<td>Tempo de Vida</td>
		</tr>
		<tr>
			<td>$nome</td>
			<td>$ano</td>
			<td>$diferenca<br>Aproximadamente $diferencaDias Dias<br>Aproximadamente $diferencaMeses Meses</td>
		</tr>
	</table>
	</div>
	";
?>