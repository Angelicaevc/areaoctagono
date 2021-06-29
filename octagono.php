<html>
    <head>
        <meta charset="utf-8">
        <title>CALCULO DEL AREA DE UN OCTAGONO REGULAR</title>
    </head>
    <body>
        <?php

        if(isset($_POST['btn']) && $_POST['btn']=='Calcular'){
            $longitud=$_POST['longitud'];
            $apotema=null;
            $area=null;
        }
        if(isset($_POST['longitud']) && !empty($_POST['longitud'])){
            echo "<h2 align='center'>Octágono Regular</h3>";
            echo "<h3 align='center'>Longitud: " .$longitud. "</h3>";
            
            $apotema=($longitud/(2*0.414213562));
            $area=(4*$longitud*$apotema);

            echo "<h3 align='center'>El apotema del Octágono Regular es: " .$apotema. "</h3>";
            echo "<h3 align='center'>El área del Octágono Regular es: " .$area. "</h3>";
            echo"<br/>";
            echo "<a href='datos.html'>Volver al Inicio</a>";
            unset($_POST['btn']);
            unset($_POST['longitud']);
        }
        else{
            echo "<h2 align='center'>Octágono Regular</h2>";
            echo "<h3 align='center'>Vacio. Por favor Verifique</h3>";
            echo"<br/>";
            echo "<a href='datos.html'>Volver al Inicio</a>";
            unset($_POST['btn']);
            unset($_POST['longitud']);
        }
        ?>
    </body>
</html>