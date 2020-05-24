<h1 style="text-align:center">Cadastrar cliente</h1>
<form action="?page=salvar-cliente" method="POST">
	<div class="form-group">
		<input type="text" name="usuario_cliente" placeholder="Nome" class="form-control">
	</div>
	<div class="form-group">
		<input type="hidden" name="acao" value="cadastrar">
		<button type="submit" class="btn btn-success">
			Salvar
		</button>
	</div>
</form>