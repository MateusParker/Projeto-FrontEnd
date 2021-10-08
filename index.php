<html>

<head>

	<title>Cadastro de Profissional - Etapa 1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mask.js"></script>


</head>

<body id="bg">

	<div id="profissional_todo">

		<div class="container">

			<div class="col-lg-12">

				<div class="row">

					<div class="col-lg-6">

						<form id="formulario_cadastro" method="post" action="etapa2.php">
							<h1>Sobre o Profissional</h1>
							<h2>Dados do Profissional</h2>

							<div class="form-group">
								<label>Nome Completo*</label>
								<input type="text" class="form-control" name="nome" id="nomecompleto" minlength="3" maxlength="48">
							</div>

							<div class="form-group">
								<label>CPF*</label>
								<input type="text" class="form-control" name="cpf" id="cpf" data-mask="999.999.909-99">
							</div>

							<div class="form-group">
								<label>Número de Celular*</label>
								<input type="tel" class="form-control" name="celular" id="tel">
							</div>

							<div class="row">
								<div class="col-lg-6">

									<div class="form-group">
										<label>Estado*</label>
										<select id="estado" onchange="buscaCidades(this.value)">
											<option value="">Selecione o Estado</option>
											<option value="PR">Parana</option>
											<option value="RS">Rio Grande do Sul</option>
											<option value="SC">Santa Catarina</option>
										</select>
									</div>

								</div>

								<div class="col-lg-6">
									<div class="form-group">
										<label>Cidade*</label>
										<select id="cidade">
											<option value="">Selecione a Cidade</option>
										</select>
									</div>
								</div>

							</div>
							<input type="submit" value="Próximo">
						</form>
					</div>

					<div class="col-lg-6">
						<div id="imagem_etapa1"></div>
					</div>

				</div>
			</div>
		</div>
	</div>


</body>

</html>



<script type="text/javascript" src="js/estados.js"></script>
<script type="text/javascript">
	new FormMask(document.querySelector("#cpf"), "___.___.___-__", "_", [".", "-"])
	new FormMask(document.querySelector("#tel"), "(__)_____-____", "_", ["(", ")", "-"])
</script>