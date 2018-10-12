<!DOCTYPE html>
<html>
	<head>
		<title>Questão 1</title>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.css">
	</head>
	
	<body>
		<div class="container">		
					<form action="#.html" method="post"> 
					
						<label>Nota do aluno:</label> 		
					
							<?php
								$primeiranota = $_POST["nota1"];
								$segundanota = $_POST["nota"];
								$calculo = ($primeiranota+$segundanota)/2;
								
								echo $calculo;
							?>
		
					</form>	
		</div>

	</body>
</html>		
	