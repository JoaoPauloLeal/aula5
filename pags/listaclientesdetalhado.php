<?php 
	include 'cls/clienteClass.php';
	include 'cls/conexaoClass.php';
  
  	$id = $_GET["cod"];

 	$cliente = new clienteClass();
 	$cliente -> getOne($id);
 ?>
 <br>
 <table class="table table-hover">
 	<?php 
 		$result = $cliente -> getConsulta();
 		if ($linha = $result->fetch_assoc())
 		{
 	?>
 	<tr>
 		<td>Código</td>
 		<td><?php  echo $linha['idCliente'];?></td>
 	</tr>
 	<tr>
 	 	<td>Nome</td>
 	 	<td><?php  echo $linha['nome'];?></td>
 	 </tr>
 	 <tr>
		<td>Endereço</td>
		<td><?php  echo $linha['endereco'];?></td>
 	 </tr>
 	 <tr>
 	 	<td>Telefone</td>
 	 	<td><?php  echo $linha['telefone'];?></td>
 	 </tr>
 	 <tr>
 	 	<td>Email</td>
 	 	<td><?php  echo $linha['email'];?></td>
 	 </tr>
 	<?php
 		}
 	 ?>
 	 
 </table>