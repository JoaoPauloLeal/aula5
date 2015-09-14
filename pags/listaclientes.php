<?php 
	include 'cls/clienteClass.php';
	include 'cls/conexaoClass.php';
  
 	$cliente = new clienteClass();
 	$cliente -> mostrar();
 ?>
 <br>
 <a class="btn btn-default"href="?m=ic">Inserir um novo Cliente</a>
 <br>
 <br>
 <table class="table table-hover">
 	<tr>
 		<td>Código</td>
 		<td>Nome</td>
 		<td>E-mail</td>
 		<td>Telefone</td>
 		<td>Endereço</td>
		<td></td>
 	</tr>
 	<?php 
 		$result = $cliente -> getConsulta();
 		while ($linha = $result->fetch_assoc())
 		{
 	?>
 	<tr>
 		<?php 
 		$id = $linha['idCliente'];
 		?>
 	 	<td><?php  echo $linha['idCliente'];?></td>
 	 	<td><?php  echo $linha['nome'];?></td>
 	 	<td><?php  echo $linha['endereco'];?></td>
 	 	<td><?php  echo $linha['telefone'];?></td>
 	 	<td><?php  echo $linha['email'];?></td>
 	 	<td><a href="?m=dc&cod=<?php echo $linha['idCliente']?>" name="cod" class="btn btn-default">Detalhes</a></td>
 	 </tr>
 	<?php
 		}
 	 ?>
 	 
 </table>