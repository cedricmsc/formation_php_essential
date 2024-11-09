<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortie dynamique PHP</title>
</head>
<body>
    <?php 
       $first = "The quick brown fox ";
       $second = "jumps over the lazy dog.";
       $third = $first;
       $third .=  $second;
       echo $third.'<br>';       
       echo ucwords($third);
    ?>
    
    <br>
    Lower case: <?php echo strtolower($third); ?><br>
    Uppercase: <?php echo strtoupper($third); ?><br>
    Uppercase first: <?php echo ucfirst($third); ?><br>
    Uppercase word: <?php echo ucwords($third); ?><br>
    <hr>

    Length: <?php echo strlen($third); ?><br>
    Trim: <?php echo "A".trim(" B C D ")."E"; ?><br>
    Find: <?php echo strstr($third, "brown"); ?><br>
    Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br>
    <hr>
    Repeat: <?php echo str_repeat($third, 2); ?><br>
    Make substring: <?php echo substr($third, 5, 10); ?><br>
    Find position: <?php echo strpos($third, "brown"); ?><br>
    Find character: <?php echo strchr($third, "z"); ?><br>


    <script>
        const _NAME_ = "Mounkala";
        document.write(_NAME_.length);
    </script>
</body>
</html>