

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
  	   		<input type="text" name="cant" placeholder="Hasta que numero desea llegar">
  	   		<input type="submit" name="b1">
  	   	</form>
  	   	<?php 
  	   		if (isset($_GET["b1"])) {
  	   			$cant = $_GET["cant"];
  	   			$num=2;
  	   			$cont1=1;
  	   			$cont2=2;
  	   			$comp=1;
  	   			$total=2;
  	   			$suma1=0;
  	   			$suma2=0;
  	   			echo $num;
  	   			while ($num<$cant) {
  	   				if ($cont1==$comp) {
  	   					$num = $num+3;
  	   					echo "<br>".$num;
  	   					$cont1= $cont1+2;
  	   					$suma1=$suma1+$num;
  	   				}
  	   				if ($cont2==$comp) {
  	   					$num = $num+2;
  	   					echo "<br>".$num;
  	   					$cont2=$cont2+2;
  	   					$suma2=$suma2+$num;
  	   				}
  	   				$comp++;
  	   			}
  	   			$total= $suma1+$suma2+2;
  	   			echo "<br>la respuesta: ".$total;
  	   		}
  	   	 ?>
  	   </section>
  	   <footer>
  	   </footer>
  	</body>
</html> 