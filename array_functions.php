<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Array Functions</title>
  </head>
  <body>
    
    <?php $numbers = array(8,23,15,42,16,4); ?>
    
    Count:         <?php echo count($numbers); ?><br />
    Max value:     <?php echo max($numbers);   ?><br />
    Min value:     <?php echo min($numbers);   ?><br />
    <br />
    <pre>
    Sort:          <?php sort($numbers);  print_r($numbers); ?><br />
    Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
    </pre>
    <br />
    Implode:       <?php echo $num_string = implode(" * ", $numbers); ?><br />
    <!--Implode transforms an array into a string -->

    Explode:       <?php print_r(explode(" * ", $num_string)); ?><br />
    <!--Explode transforms a string into an array -->
    <br />

    <?php
    // Exemple de base de la fonction explode    
        $chaine = "Bonjour, je m'appelle Copilot"; 
        $tableau = explode(" ", $chaine); 
        print_r($tableau);
      

      /*  
        Résultat
        Array
        (
            [0] => Bonjour,
            [1] => je
            [2] => m'appelle
            [3] => Copilot
        ) 
      */
        ?>
        <hr>
        <?php
          $students = [
            'Class1' => ['John', 'Mary', 'Karim'],
            'Class2' => ['Jane', 'Richard', 'Anna']
          ];

          foreach($students as $key => $value){
            echo $key;
            echo "<br>";
            foreach($value as $key => $value2){
              echo $value2;
              echo "<br>";
            }
            echo'<br>';
          }
        ?>
        <br>
        Tableau associatifs
        <br>
        <?php
          $isoCodes = [
            'Argentine' => 'AR',
            'Belgique' => 'BE',
            'Chili' => 'CL',
            'Congo' => 'CG',
            'Equateur' => 'EC'
          ];
        ?>




    
    15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?><br />
    19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?><br />
    

  </body>
</html>
