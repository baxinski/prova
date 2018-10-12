<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Questão 2</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/round-about.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"style="position:relative ;">Questão 2</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        </div>
      </div>
    </nav>
	
	<body>
		<div class="container">
				<p>Preencha o formulário abaixo para formalizar o contrato do plano.</p>
		
					<form action="confirm.html" method="post"> 
					
						<label>Plano escolhido:</label> 
							<?php
								echo $_POST["plano"];
							?><br>
					
						<label>Nome:</label> 
						<input type="text" class="form-control" required id="nome" name="nome"  style="width:700px;"><br>
					
						<label>Endereço:</label> 
						<input type="text" class="form-control" required id="endereco" name="endereco" style="width:700px;"><br>
				
						<label>E-mail:</label> 
						<input type="email" class="form-control" required id="email" name="email"  style="width:700px;"><br>
				
						<label>Telefone:</label> 
						<input type="text" class="form-control" id="telefone" name="telefone" style="width:700px;"><br>
	
						<script>
							function validaForm() {
								alert("Dados recebidos!");
							}
						</script>
	
						<button type="submit" class="btn btn-default" onClick="validaForm()">Enviar</button>
					</form>	
		</div>

	  <!-- Footer -->
    <footer class="py-5 bg-dark" style="margin-top:200px;">
      <div class="container">
        <p class="m-0 text-center text-white">PROVA SOBRE HTML, CSS, PHP E FORMULÁRIOS  </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
