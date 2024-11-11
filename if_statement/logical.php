<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical</title>
</head>
<body>
    <?php  //Only welcome new users
        $new_user = true;
        if ($new_user) {    
            echo "<h1>Welcome new user</h1>";
            echo "<p>We are glad you decided to join us.</p>";            
        }
    ?>

    <br>

    <?php  //Don't divide by zero
        $numerator = 20;
        $denominator = -25; 
        $result = 0;

        if ($denominator > 0) {
            $result = $numerator / $denominator;              
            echo "Result: {$result}";  
        }elseif($denominator === 0) {  
            echo "Can't divide by zero";
        }else {
            echo "Can't divide by negative number";
        }   
        
            

    ?>
    
</body>
</html>