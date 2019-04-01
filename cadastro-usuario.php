<?php include_once 'template/header.php'; ?>

<div class="container">

	<form action="#" class="form">

		<h3 class="label is-large"> Cadastro de usuário </h3><br>
		
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

			</div> 

			<div class="column">

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

				<div class="field">
					<label for="funcao" class="label"> Função </label>
					<div class="control">
						<input type="text" class="input" name="funcao">
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