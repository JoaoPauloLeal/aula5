<html>
<head>
<meta charset="utf-8"/>
<title>Estrutura de Página Tableless</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

<link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div id="principal">
<div id="cabecalho">
	<img id="imgcapa" src="img/7.jpg" class="img-responsive" alt="Imagem de Capa">
</div>

<div id="corpo">
	
	<div id="esquerda">			
		<a class="btn btn-info col-lg-12" href="?m=m">Home</a><br>
		<a class="btn btn-info col-lg-12" href="?m=h">Lista (Aula 1-1)</a><br>
		<a class="btn btn-info col-lg-12" href="?m=t">Tabela (Aula 1-2)</a><br>
		<a class="btn btn-info col-lg-12" href="?m=f">Formulário (Aula 1-3)</a><br>
		<a class="btn btn-info col-lg-12" href="?m=r1">Resultado (Aula 3-1)</a><br>
		<a class="btn btn-info col-lg-12" href="?m=r2">Resultado (Aula 3-2)</a><br>
		<a class="btn btn-info col-lg-12" href="?m=x">Dias vividos (Aula 4-1)</a><br>
		<a class="btn btn-info col-lg-12" href="?m=cm">Média (Aula 4-2)</a><br>
		<a class="btn btn-info col-lg-12" href="?m=mail">Criar Email (Aula 5)</a><br>
		<a class="btn btn-info col-lg-12" href="?m=lc">Clientes (Aula 6)</a><br>
		<!-- substituir os href por href="?m=h" sendo que "m" é a variavel do módulo e "h" a pagina que se deseja chamar-->
			
	</div>

	<div id="centro" class="col-lg-12">
		<!-- colocar o conteúdo do módulo na div CENTRO  -->
		<?php 
			if(!isset($_GET['m']))
				require_once('pags/home.php');
			else{
				switch($_REQUEST['m']){
								
					case 'h':
					require_once('pags/lista.html');
					break;

					case 't':
					require_once('pags/tabela.html');
					break;

					case 'f':
					require_once('pags/formulario.html');
					break;

					case 'r1':
					require_once('pags/segunda.php');
					break;

					case 'r2':
					require_once('pags/question1.php');
					break;
					
					case 'x':
					require_once('pags/diasvividos.php');
					break;

					case 'r':
					require_once('pags/diasvividosresult.php');
					break;					
					
					case 'rm':
					require_once('pags/calculamedia.php');
					break;			
				
					case 'cm':
					require_once('pags/media.php');
					break;	

					case 'm':
					require_once('pags/home.php');
					break;
					
					case 'mail':
					require_once('pags/cadastrodeemail.php');
					break;

					case 'mailc':
					require_once('pags/cadastramento.php');
					break;

					case 'lc':
					require_once('pags/listaclientes.php');
					break;
					
					case 'dc':
					require_once('pags/listaclientesdetalhado.php');
					break;
					
				}
			}
		?>
	</div>
	
	<div style="clear: both;"></div>
	
</div>

<div id="rodape">	
	<div id="info-rodape">
		Exercicios Feitos em Aula<br/>
		João Paulo Leal<br/>		
	</div>
</div>

</div>

</body>
</html>


