

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<!DOCTYPE html>
	<html lang="es">
  	<head>
  		<title></title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width,Initial-scale=1,Maximun-scale=1">	
        
  	</head>
  	<body>
     
  	   <header>
  	   </header>
  	   <nav>
  	   </nav>
  	   <aside>
  	   </aside>
  	   <section>
  	   	<form action="#" method="get">

  	   		<input type="submit" name="b1" value="Mostrar numeros primos"><br>
  	   		<input type="submit" name="b2" value="Mostrar años biciestos">
  	   	</form>
  	   	
  	   		<?php 

  	   			if (isset($_GET["b1"])) {
  	   				for ($i=1; $i <= 1000 ; $i++) { 
  	   				$cont=0;
  	   				for ($j=1; $j <=$i ; $j++) { 
  	   					if ($i%$j==0) {
  	   						$cont++;
  	   					}
  	   				}
  	   				if ($cont==2) {
  	   					echo "<br>".$i;
  	   				}
  	   			}
  	   			}
  	   			
  	   			if (isset($_GET["b2"])) {
  	   				$año=2000;
  	   				while ($año <= 3000) {
  	   					if ($año%4==0) {
  	   						echo "<br>El año es biciesto: ".$año;
  	   					}
  	   					$año++;
  	   				}
  	   			}
  	   		 ?>
  	   </section>
  	   <footer>
  	   </footer>
  	</body>
</html> 

