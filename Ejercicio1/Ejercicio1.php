<!DOCTYPE html>
<html lang="es">
	<head>
		<title></title>
		<meta charset ="utf-8">
			<meta name="viewport" content="width=device-width,Initial-scale=1,Maximum-scal=1">
	</head>
	<body>
		<header>
		</header>
		<nav>
		</nav>
		<aside>
		</aside>
		<section>
                    <form method="POST" action="#">
                        Numero:<input type="text" name="num">
                        <input type="submit" name="Enviar" value="Enviar">
                    </form>
                    <?php
                    if (isset($_REQUEST['Enviar'])) {
                       $num = $_REQUEST['num'];
                       $factorial = 1;
                        for ($x=$num; $x>=1; $x--){
                             $factorial = $factorial * $x;
                            }
                        echo "El factorial de $num es $factorial";
                        
                    }
                    ?>
		</section>
		<footer>
		</footer>
	</body>
</html>

