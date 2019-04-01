<?php include_once 'template/header.php'; ?>

<div class="container">

	<form action="#" class="form">

		<h3 class="label is-large"> Cadastro de paróquia </h3><br>

		<div class="columns">

			<div class="column is-6">

				<div class="field">
					<label for="nome" class="label"> Nome  </label>
					<div class="control">
						<input type="text" class="input" name="nome">
					</div>
				</div>

				<div class="field">
					<label for="email" class="label"> Email </label>
					<div class="control">
						<input type="email" class="input" name="email">
					</div>
				</div>

				<div class="field">
					<label for="telefone" class="label"> Telefone </label>
					<div class="control">
						<input type="text" class="input" name="telefone">
					</div>
				</div>

				<div class="columns">

					<div class="column field">
						<label for="login" class="label"> Login </label>
						<div class="control">
							<input type="text" class="input" name="login">
						</div>
					</div>

					<div class="column field">
						<label for="senha" class="label"> Senha </label>
						<div class="control">
							<input type="password" class="input" name="senha">
						</div>
					</div>

				</div>
				
			</div> 

			<div class="column">

				<div class="field">
					<label for="padre" class="label"> Padre Responsável </label>
					<div class="control">
						<input type="text" class="input" name="padre">
					</div>
				</div>

				<div class="columns">
					<div class="column is-10 field">
						<label for="endereco" class="label"> Endereço </label>
						<div class="control">
							<input type="text" class="input" name="endereco">
						</div>
					</div>
					<div class="column is-2 field">
						<label for="numero" class="label"> Número </label>
						<div class="control">
							<input type="text" class="input" name="numero">
						</div>
					</div>
				</div>

				<div class="columns">
					<div class="column is-5 field">
						<label for="bairro" class="label"> Bairro </label>
						<div class="control">
							<input type="text" class="input" name="bairro">
						</div>
					</div>
					<div class="column is-5 field">
						<label for="cidade" class="label"> Cidade </label>
						<div class="control">
							<input type="text" class="input" name="cidade">
						</div>
					</div>
					<div class="column is-2 field">
						<label for="uf" class="label"> UF </label>
						<div class="control">
							<input type="text" class="input" name="uf">
						</div>
					</div>
				</div>

			</div>

		</div>

		<div class="column is-12">
			<div class="form-footer buttons is-right">
				<button type="cancel" class="button is-danger"> Cancelar </button>
				<button type="button" class="button is-primary"> Cadastrar </button>
			</div>
		</div>	
	</form>

</div>

<?php include_once 'template/footer.php'; ?>