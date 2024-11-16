<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pointers</title>
</head>
<body>
    <?php $ages = array(4,8,15,16,23,42);
        //Current: current pointer value; 
        echo "1: ".current($ages)."<br>";

        //next: move the pointer forward
        //Similar to using 'continue' inside a loop
        next($ages);
        echo "2: ".current($ages)."<br>";

        //prev: move the pointer <backward>
        prev($ages);
        echo "3: ".current($ages)."<br>";

        //end: move the pointer to the end of the array
        end($ages);
        echo "4: ".current($ages)."<br>";

        //reset: move the pointer to the beginning of the array
        reset($ages);
        echo "5: ".current($ages)."<br>";

        //count: returns the number of elements in an array
        echo "6: ".count($ages)."<br>";

        //sizeof: returns the number of elements in an array
        echo "7: ".sizeof($ages)."<br>";

        //key: returns the key of the current element
        echo "8: ".key($ages)."<br>";
        

        reset($ages);


        //While loop moves the array pointer
        //Similar to foreach
        while($age = current($ages)) {
            echo  $age . ", ";
            next($ages);
        }

    ?><br>
    
</body>
</html> 