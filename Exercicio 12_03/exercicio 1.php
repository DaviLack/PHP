<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $val1=4;
       $val2=5;
       $val3=3;     

     if($val1 == $val2 && $val2 == $val3)
         {
         ?> <p> O triangulo é equilátero </p>   
         <?php
         }
         
     else if($val1 != $val2  && $val1 != $val3 && $val2 != $val3)
         {
        ?>
         <p> O triangulo é escaleno </p>
         <?php
         }
         
     else if($val1 == $val2 && $val1 !=$val3 or $val2 == $val3 && $val2 !=$val1 or $val1 == $val3 && $val1 !=$val2 )
         {
         ?>
         <p> O triangulo é isosceles </p>
         <?php
        } 
        else {
                       
     }
         
     ?>
    </body>
</html>
