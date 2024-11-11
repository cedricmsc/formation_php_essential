<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Array Functions</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

      @import "https://use.fontawesome.com/releases/v5.7.2/css/all.css";

      :root{
          --myRed-color: hsl(12, 94%, 50%); 
          --myBlack-color: #000000;
          --myBlue-color: #0d09f0;
      }
      *{
          margin: 0;
          padding: 0; 
          box-sizing: border-box;
      }

      .myRed{
          color: var(--myBlue-color);
      }
    </style>
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




    <?php // $numbers = array(8,23,15,42,16,4);  ?>
    <span class="myRed">in array?:</span> <?php echo in_array(15, $numbers); // returns T/F ?><br />
    <span class="myRed"> in array?:</span> <?php echo in_array(19, $numbers); // returns T/F ?><br />
    <br />
    
    <span class="myRed">is_array: </span><?php  echo  is_array($numbers); // returns T/F  //is_array returns true if the variable is an array?><br /> 
    <span class="myRed">array_unique:</span> <?php  echo  print_r(array_unique($numbers)); // returns T/F  // array_unique returns an array without duplicate values ?><br /> 
    
    <br />

    <hr>

    <?php
        $films =['Princess Mononoke', 'Matrix', 'Children of Men', 'Matrix', 'Moon']; 

        foreach($films as $key => $value){ // foreach is used to loop through an array
          echo $value;
          echo "<br>";
        }


        function unifyAndSortToString($list) {  // function to unify and sort an array
        if (!is_array($list)) {
        return;
        };
        $listUnified = array_unique($list);
        sort($listUnified);
        return implode(', ', $listUnified);
        };

       ?> <Strong style="color: red;">Tableau trié:</Strong> <?php echo unifyAndSortToString($films);

      ?>

      <hr>
      <br><h3>Comprendre Array_map</h3>
      <span class="myRed">array_map($callback, $array) : </span> <br>
      function double($n){  <br>
         return $n * 2;     <br>
       }                    <br>
       $notes = [12, 20, 13, 16]; <br>

       $array_map = array_map("double", $notes); <br>
       print_r($array_map);<br>
      <br>
      <?php  

       function double(int $n, int $n2){
         return $n + $n2;
       }
       $notes = [4, 20, 12, 30];
       $notes2 = [2, 20, 13, 16];

       $array_map = array_map("double", $notes, $notes2);
       print_r($array_map);

      ?>
      <hr>
      <br><h3>Comprendre Array_filter</h3>

      <span class="myRed"> array_filter($array, $callback)</span><br>
      array array_filter(array $array, callable $callback = null, int $mode = 0)

      <br>
      function is_even($n){ <br>
        return $n % 2 === 0;<br>
      }<br>

      $numbers = [1, 2, 3, 4, 5, 6]; <br>
      $pairs = array_filter($numbers, 'is_even'); <br>
      print_r($pairs);<br>
      <?php
      function is_even($n){
        return $n % 2 === 0;
      }

      $numbers = [1, 2, 3, 4, 5, 6]; 
      $pairs = array_filter($numbers, "is_even"); 
      print_r($pairs);
      ?>



    
    
    

  </body>
</html>
