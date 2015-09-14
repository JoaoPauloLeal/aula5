<table class="table table-bordered table-hover">
<tr>
	<th>Operações</th>
	<td>Numero Um</td>
	<td>Numero Dois</td>
	<td>Resultado</td>
</tr>
<?php 
$a = 2;
$b = 10;
$soma = $a+$b;
$sub = $a-$b;
$mul = $a*$b;
$div = $a/$b;
echo "<tr>
		<td>Soma</td>
		<td>$a</td>
		<td>$b</td>
		<td>$soma</td>
	  </tr>";
echo "<tr>
		<td>Subtração</td>
		<td>$a</td>
		<td>$b</td>
		<td>$sub</td>
	  </tr>";
echo "<tr>
		<td>Multiplicação</td>
		<td>$a</td>
		<td>$b</td>
		<td>$mul</td>
	  </tr>";
echo "<tr>
		<td>Divisão</td>
		<td>$a</td>
		<td>$b</td>
		<td>$div</td>
	  </tr>";

 ?>

</table>