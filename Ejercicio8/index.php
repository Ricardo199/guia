<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Numeros Enteros</title>
    </head>
    <body>
        <form method="POST" action="#">
            Ingrese la cantidad de numeros enteros a evaluar por favor: <input type="number" name="n">
            <input type="submit" name="btn" value="Enviar">
        </form>
        <?php
        if(isset($_REQUEST['btn'])){
            $n=$_REQUEST['n'];
            $i=1;
            while ($i<=$n){
                echo '<form method="POST" action="#">';
                echo 'Ingrese el numero por favor <input type="number" name="num[]"><br>';                
                $i++;
            }
            echo '<input type="submit" name="btn2" value="Enviar">';
            echo '</form><br>';
        }
        if (isset($_REQUEST['btn2'])){
            $vector=$_REQUEST['num'];
            $tpos=0;
            $npos=0;
            $tneg=0;
            foreach ($vector as $num){
                if($num>0){
                    $npos++;
                    $tpos=$tpos+$num;
                }else{
                    $tneg=$tneg+$num;
                }
            }
            echo 'La cantidad de numeros mayores a cero es: '.$npos.'<br>';
            echo 'Total de positivos: '.$tpos.'<br>';
            echo 'El promedio de numeros positivos es: '.$tpos/$npos.'<br>';
            echo 'Total de negativos: '.$tneg.'<br>';
            echo 'El promedio de todos los numeros es: '. array_sum($vector)/ count($vector);
        }
        ?>
    </body>
</html>
