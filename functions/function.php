<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defining function</title>
</head>
<body>
    <?php
     function say_hello($name) {
        echo "{$name} Hello World!<br />";   

    }

        $arrays = array("Cédric", "Mounkala", "Samba");
        reset($arrays);
      
        //Parcours d'un tableau
        while ($array = current($arrays)) {
            echo $array.", ";
            next($arrays);
        }  
    ?>
    <br>
    <?php
    
    say_hello("Promesse");
    
    ?>


    
</body>
</html>