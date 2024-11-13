<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Loops: while</title>
  </head>
  <body>

    <?php
      $count = 0;
      while ($count <= 10) {
        if ($count == 5) {
          echo "FIVE, ";
        } else {
          echo $count . ", ";
        }
        $count++;  // increment by 1
      }
      echo "<br />";
      echo "Count: {$count}";
    ?>

    <br />
    <br />
    <?php // On your own exercise
    
      $count = 1;
      while ($count < 20) {
        if($count % 2 == 0) {
          echo "{$count} is even<br />";
        } else {
          echo "{$count} is odd<br />";
        }
        $count++;
      }    
    ?>

    <br>
    <hr>
    <h3>For loop</h3>
    for($i = 1; $i <= 5; $i++) { <br>
        echo " $i: Je t'aime Promesse".'<br>';
      } <br>
    <?php
      for($i = 1; $i <= 5; $i++) {
        echo " $i: Je t'aime Promesse".'<br>';
      }
    ?>

<br>
    <hr>
    <h3>While loop Or Do While</h3>
    $i = 1;<br>
      while($i <= 10) {<br>
        echo $i;<br>
        $i++;<br>
        
      } <br>
    <br>
    <?php
      $i = 1;
      while($i <= 10) {
        echo $i;
        $i++;
        
      }
    ?>

<br>
    <hr>
    <h3>Break instruction</h3>

    <?php
      $nom = "Cédric MOUNKALA-SAMBA";
      echo "Prière d'appeler {$nom} afin qu'il programme les travaux prévu à cet effe
      Afin que chacun de nous puisse prendre ses responsabilités en temps voulu.<br>";
    ?>

  </body>
</html>
