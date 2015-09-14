<?php 
if(!empty($_POST['nome']))
{
	$nome = isset($_POST['nome'])? $_POST['nome'] : "Não informado";
}
else
{
	$nome = "Não informado";
}
if(!empty($_POST['sobrenome']))
{
	$sobrenome = isset($_POST['sobrenome'])? $_POST['sobrenome'] : "Não informado";
}
else
{
	$sobrenome = " ";
}
if(!empty($_POST['sexo']))
{
	$sexo = isset($_POST['sexo'])? $_POST['sexo'] : "Não informado";
}
else
{
	$sexo = "";
}
if(!empty($_POST['ano']))
{
	$ano = isset($_POST['ano'])? $_POST['ano'] : "Não informado";
}
else
{
	$ano = "Ano Não informado";
}
if(!empty($_POST["emaildesejado"]))
{
	$emaildesejado = isset($_POST["emaildesejado"])? $_POST["emaildesejado"] : "Não informado";
}
else
{
	$emaildesejado = "Email Não informado";	
}
if(!empty($_POST["pais"]))
{
	$pais = isset($_POST["pais"])? $_POST["pais"] : "Não informado";
}
else
{
	$pais = "Pais Não informado";
}
if(!empty($_POST["cep"]))
{
	$cep = isset($_POST["cep"])? $_POST["cep"] : "Não informado";
}
else
{
	$cep = "Não informado";
}

$senha = isset($_POST["senha"])? $_POST["senha"] : 0;
$senhadois = isset($_POST["senhadois"])? $_POST["senhadois"] : -1;
$emailalternativo = isset($_POST["emailalternativo"])? $_POST["emailalternativo"] : "Não informado";
if($sexo=="Masculino")
{
	$bemvindo = "Bem-vindo Sr. ";
}
elseif($sexo=="Feminino")
{
	$bemvindo = "Bem-vinda Sra. ";
}else{
	$bemvindo = " ";
}
if(!empty($_POST['opi']))
{
	$opi = isset($_POST['opi'])? "- " . $_POST['opi'] : ""	;	
}
else
{
	$opi = "Não informado";
}
$opi = isset($_POST['opi'])? "- " . $_POST['opi'] : ""	;
$opr = isset($_POST['opr'])? "- " . $_POST['opr'] : "";
$opt = isset($_POST['opt'])? "- " . $_POST['opt'] : "";
$opa = isset($_POST['opa'])? "- " . $_POST['opa'] : "";

echo "
<div class='well well-sm'>
<h3>$bemvindo $nome $sobrenome</h3>
<p>O nosso site ficou conhecido atráves de $opi $opr $opt $opa</p>
<p>Sua data de nascimento é $ano</p>
<p>Seu email alternativo é $emailalternativo</p>
<p>Reside no(a) $pais cujo CEP é $cep</p>";
if(!empty($senha))
{
	if(!empty($senhadois))
	{
		if((int)$senha===(int)$senhadois)
		{
			echo "<p>Seu login é $emaildesejado@meumail.com</p>";	
		}
		else
		{
			echo "<p>Erro no Cadastro</p>";
		}
	}
	else
	{
		echo "<p>Erro no Cadastro</p>";
	}

}
else
	{
		echo "<p>Erro no Cadastro</p>";
	}
 

 echo "</div>";
 ?>
 