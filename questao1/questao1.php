<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Questão 1</title>

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
	<h2>Notas dos alunos</h2>
	
		<div class="container">
			<form action="calculo.php" method="post"> 
				
				<label for="aluno">
							<span>Alunos:</span>
							<select id="aluno" name="aluno" required>
							  <option value="Renato">Renato</option>
							  <option value="Marcos">Marcos</option>
							  <option value="Fábio">Fábio</option>
							  <option value="Priscila">Priscila</option>
							  <option value="Ana">Ana</option>
							</select>
				</label><br>
				
				<label>Nota 1:</label> 
				<input type="text" class="form-control" id="nota1" value = "10" name="nota1" style="width:100px;"><br>
				
				<label>Nota 2:</label> 
				<input type="text" class="form-control" id="nota" value = "10" name="nota" style="width:100px;"><br>
				
				<button type="submit" class="btn btn-default">Enviar</button>
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
