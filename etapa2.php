<html>

<head>

  <title>Cadastro de Profissional - Etapa 2</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</head>

<body id="bg">

  <div id="etapas"><a href="index.php">
      << /a>
  </div>

  <div id="profissional_todo">

    <div class="container">

      <div class="col-lg-12">

        <div class="row">

          <div class="col-lg-6">

            <form id="formulario_cadastro" method="post" action="etapa3.php">

              <h1>Sobre o Atendimento</h1>
              <h2>Detalhes do Atendimento</h2>
              <div class="form-group">
                <label>Especialidade Principal*</label>
                <select name="especialidade">
                  <option value="0">Selecione uma Especialidade</option>
                  <option value="1">Cardiologia</option>
                  <option value="2">Neurologia</option>
                  <option value="3">Oftalmologia</option>
                  <option value="4">Psiquiatria</option>
                  <option value="5">Urologia</option>
                </select>
              </div>

              <div class="form-group">
                <label>Informe o Preço da Consulta*</label>
                <p><input type="text" class="form-control" id="precodaconsulta"></p>
              </div>

              <div class="form-group" id="formadepagamento">
                <ul class="list-group list-group-flush">

                  <li class="list-group-item">
                    <label class="checkbox"><input type="checkbox" /><span class="default"></span></label>Em Dinheiro
                  </li>

                  <li class="list-group-item">
                    <label class="checkbox"><input type="checkbox" /><span class="default"></span></label>PIX
                  </li>

                  <div class="accordion-body">
                    <div class="accordion">
                      <div class="container">
                        <div class="label">
                          <label class="checkbox"> <input type="checkbox" /> <span class="default"></span> </label> Cartão de Crédito
                        </div>
                        <div class="content">
                          <h3>Parcelamento</h3>
                          <p><label class="checkbox"><input type="checkbox" /><span class="default"></span></label>1x, Sem Juros</p>
                          <p><label class="checkbox"><input type="checkbox" /><span class="default"></span></label>2x, Sem Juros</p>
                          <p><label class="checkbox"><input type="checkbox" /><span class="default"></span></label>3x, Sem Juros</p>
                        </div> <!-- content-->
                      </div> <!-- container-->
                    </div> <!-- accordion-->
                  </div>
                  <!--accordion-body-->
                </ul>
              </div>
              <!--form-group-->
              <input type="submit" value="PRÓXIMO">
            </form>
          </div>
          <!--col-lg=6--->

          <div class="col-lg-6">
            <div id="imagem_etapa2"></div>
          </div>

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


<script type="text/javascript">
  const accordion = document.getElementsByClassName('container');

  for (i = 0; i < accordion.length; i++) {
    accordion[i].addEventListener('click', function() {
      this.classList.toggle('active')
    })
  }
</script>