<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3, h2{
            display:inline-block
        }
    </style>
</head>
<body>
    <?php
        $numbers = [4,8,15,16,23,42];
        $string = "papa, Maman, Père, Mère, Enfant, Grand-père, Grand-mère";
        $myString = "Bonjour, je m'appelle Copilot";
    ?>
    
    Implode: <?php $createString = implode(" - ", $numbers); 
    echo $createString;?> <br>

    Explode: <?php $myExplode= explode(" ",  $string  ,7);?> 
    <br>
    <?php print_r($myExplode) ?>
    <br>
    <?php foreach($myExplode as $value){echo $value;} ?>



</body>
</html>