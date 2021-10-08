<html>

<head>

	<title>Cadastro de Profissional - Etapa 3</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>

<body id="bg">

	<div id="etapas"><a href="etapa2.php">
			<< /a>
	</div>

	<div id="profissional_todo">

		<div class="container">

			<div class="col-lg-12">

				<div class="row">

					<div class="col-lg-6">

						<form id="formulario_cadastro_final" method="post">
							<h1>Revisão do Cadastro</h1>
							<div class="form-group">
								<label>Nome Completo</label>
								<input type="text" class="form-control" name="nome" minlength="3" maxlength="48">
							</div>
							<input type="submit" value="Cadastrar Profissional">
							<a href="#" id="editcadastro">Editar Cadastro</a>
						</form>

					</div>
					<!--col-lg=6--->

					<div class="col-lg-6">
						<div id="imagem_etapa3"></div>
					</div>
					<!--col-lg=6--->
				</div> <!-- row--->
			</div>
			<!--col-lg-12-->
		</div>
		<!--container-->
	</div>
	<!--profissional_todo-->


</body>


</html>