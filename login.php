<?php require_once 'app/App.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, max-scale=1">
	<meta name="theme-color" content="#3e8fea">
	<meta name="apple-mobile-web-app-status-bar-style" content="#3e8fea">

	<meta name="author" content="Jonnie Henrique | https://jonniehenrique.com.br">
	<meta name="description" content="">
	<meta name="keywords" content="">

	<title>SysEJC | Sistema de Gerenciamento de Encontro de Jovens</title>

	<meta property="og:url" content="www.sysejc.com.br">
	<meta property="og:title" content="SysEJC - Sistema de Gerenciamento de Encontro de Jovens">
	<meta property="og:site_name" content="SysEJC">
	<meta property="og:type" content="website">
	<meta property="og:description" content="SysEJC - Sistema de Gerenciamento de Encontro de Jovens">
	<meta property="og:image" content="">

	<link rel="icon" type="image/png" href="/favicon.png">

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat">

	<link rel="stylesheet" href="<?php echo APP_URL . 'assets/css/bulma.css' ?>">
	<link rel="stylesheet" href="<?php echo APP_URL . 'assets/css/style.css' ?>">
</head>
<body>

	<section class="hero hero-login">
		<div class="hero-body">
			<div class="container">

				<form action="#" class="login-form">
					<div class="column">

						<div class="field">
							<label for="login" class="label"> Login  </label>
							<div class="control">
								<input type="text" class="input" name="login">
							</div>
						</div>

						<div class="field">
							<label for="senha" class="label"> Senha </label>
							<div class="control">
								<input type="email" class="input" name="senha">
							</div>
						</div>
						
						<div class="buttons is-centered">
							<button class="button is-primary"> Logar </button>
						</div>

					</div> 

				</form>

			</div>
		</div>
	</section>



</body>
</html>