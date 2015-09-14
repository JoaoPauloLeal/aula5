<form action="?m=rm" method="POST">
	<fieldset><legend>Calculadora de Media</legend>
		<div class="form-group">
			<label>Nome do Professor</label>
			<input type="text" class="form-control" name="prof" placeholder="Professor">
		</div>
		<div class="form-group">
			<label>Disciplina</label>
			<input type="text" class="form-control" name="disciplina" placeholder="Disciplina/Materia">
		</div>
		<div class="form-group col-lg-4">
			<label>Nota 1</label>
			<input type="number" class="form-control" name="notaum" placeholder="Primeira Nota">
			<label>Peso Nota 1</label>
			<input type="number" class="form-control" name="pesoum" placeholder="Escolha o Peso da Nota um">
		</div>
		<div class="form-group col-lg-4">
			<label>Nota 2</label>
			<input type="number" class="form-control" name="notadois" placeholder="Segunda Nota">
			<label>Peso Nota 2</label>
			<input type="number" class="form-control" name="pesodois" placeholder="Escolha o Peso da Nota dois">
		</div>
		<div class="form-group col-lg-4">
			<label>Nota 3</label>
			<input type="number" class="form-control" name="notatres" placeholder="Terceira Nota">
			<label>Peso Nota 3</label>
			<input type="number" class="form-control" name="pesotres" placeholder="Escolha o Peso da Nota três">
		</div>
		<button type="submit" class="btn btn-success col-lg-12">Confirmar Dados do Aluno</button>
	</fieldset>
</form>