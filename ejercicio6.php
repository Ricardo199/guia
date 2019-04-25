

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
  	   			<input type="text" name="num">
  	   			<input type="submit" name="b1">
  	   		</form>

  	   		<?php 
  	   			if (isset($_GET["b1"])) {
  	   				$num= $_GET["num"];
  	   				echo "<br>".$num;
  	   				while ($num!=1) {
  	   					if ($num%2==0) {
  	   						$num = $num/2;
  	   					}else{
  	   						$num = $num*3+1;
  	   					}
  	   					echo "<br>".$num;
  	   				}
  	   			}
  	   		 ?>
  	   </section>
  	   <footer>
  	   </footer>
  	</body>
</html> 