<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debugging</title>

</head>
<body>
    <?php

       $number = 99;
       $string = "Bug?";
       $array = array(1 =>"Homepage", 2 => "About Us", 3 => "Services");
       var_dump($array);
    ?>
    <br>
    <br>
    <?php
        function say_hello(string $word){
            echo "Hello {$word}! <br>";
            var_dump(debug_backtrace());
        }
        
        say_hello('Everyone');

    ?>
    
</body>
</html>