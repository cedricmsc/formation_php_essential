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
<h1>Waiting for ...</h1>
    <?php
        
        function hello_to(string $name, int $age = 25) {
            return "hello {$name}, your are $age years old";
        }
    ?>
    <h2>
    <?php    
    phpinfo()

    ?>
    </h2>
</body>
</html>