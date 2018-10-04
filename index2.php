<html>
	<head>
		<title>Curso de PHP</title>
		<meta charset="UTF-8"> <!-- Pacote de caracteres especiais -->
	</head>
	<body>
		<?php
			$i = 0;
				for($i=1; $i<=10; $i++){
					for($j=1; $j<=10; $j++){
						echo $i." * ".$j." = ".($i*$j)."<br>";
					}
					echo "<br>";
				}
		?>		
	</body>
</html>