	<?php 
	 	
	 	$prof = isset($_POST['prof'])? $_POST['prof'] : "Professor Não Informado";
	 	$nome = isset($_POST['nome'])? $_POST['nome'] : "Nome Não Informado";
 		
echo 'Seja bem-vindo(a) ' . $nome . '!';

		//$prof = $_POST["prof"];
		$disc = isset($_POST['disciplina'])? $_POST['disciplina'] : "Não Informado";
		if(!empty($_POST["notaum"]))
		{
			$nota1 = isset($_POST["notaum"])? $_POST["notaum"] : 0;
		}
		else
		{
			$nota1 = 0;
		}
		if(!empty($_POST["pesoum"]))
		{
			$peso1 = isset($_POST["pesoum"])? $_POST["pesoum"] : 0;
		}
		else
		{
			$peso1 = 0;
		}
		
		$nota2 = isset($_POST["notadois"])? $_POST["notadois"] : 0;
		$peso2 = isset($_POST["pesodois"])? $_POST["pesodois"] : 0;
		$nota3 = isset($_POST["notatres"])? $_POST["notatres"] : 0;
		$peso3 = isset($_POST["pesotres"])? $_POST["pesotres"] : 0;
		$divi = $peso1+$peso2+$peso3;
		if($divi != 0)
		{
			$media = (($nota1*$peso1)+($nota2*$peso2)+($nota3*$peso3))/$divi;
		}
		else
		{
			$media = 0;
		}
		$media = number_format($media,2);
		echo "
		<div class='well well-sm'>
		<table class='table'>
			<tr>
				<td>Nome do Professor</td>
				<td>Nome da Disciplina</td>
				<td>Media</td>
			</tr>
			<tr>
				<td>$prof</td>
				<td>$disc</td>
				<td>$media</td>
			</tr>
		</table>
		</div>
		";
	?>