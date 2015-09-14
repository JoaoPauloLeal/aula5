<form>
<fieldset><legend>Question 1</legend>
	<label class="text-justify">Uma empresa comercializa computadores e para tal, a partir do preço inicial, acrescido de 45%, obtém o valor final. Além disso, o vendedor tem seu salário mensal calculado a partir do salário base, acrescido de 20% de comissão e descontado de 8% de imposto de renda.
	Calcule o preço final do computador e o salário mensal do vendedor e mostre os resultados (formatados com duas casas decimais) em duas tabelas. Utilize variáveis com valores prédefinidos (escrever inclusive os valores das variáveis).</label>
</fieldset>
<table class="table table-bordered table-hover">
<tr>
	<td>Quantidade</td>
	<td>Valor Unitario</td>
	<td>Valor Final</td>
	<td>comissão</td>
</tr>

<?php 
$qtd = 1;
$valor = 1500;
$precofinal =$valor*(1.45);
$com = $precofinal*0.20;
echo "
<tr>
	<td>$qtd</td>
	<td>$valor</td>
	<td>$precofinal</td>
	<td>$com</td>
</tr>

"
  ?>

</table>

<table class="table table-bordered table-hover">
<tr>
	<td>Vendedor</td>
	<td>Salario Mensal</td>
	<td>Salaro Parcial</td>
	<td>Salaro Final</td>
</tr>

<?php 

$vendedor = "João";
$salariob = 800;
//Comissão estava aqui, Movi para cima para mostrar na tabela referente
$salariom = $salariob + (0.20*$com);
$desc = $salariom*0.08;
$sfinal = $salariom-$desc;
echo "
<tr>
	<td>$vendedor</td>
	<td>$salariob</td>
	<td>$salariom</td>
	<td>$sfinal</td>
</tr>
";
  ?>

</table>

</form>

