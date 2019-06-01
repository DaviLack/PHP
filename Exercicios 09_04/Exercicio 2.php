<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php              
               
          $val3 = 0;
          $val4 = 0;
          $val6 = 0;
          $val5 = 0;
          
        
                
        for ($val=1; $val<= 100;$val+=2){
            
            $val3 = $val3 + $val;
          
              
        }
        
        echo "A soma dos numéros impares é: $val3";?><br><?php 
           
        for ($val2=0;$val2<=100;$val2+=2){
            
            $val4 = $val4 + $val2;
           
        }
        
        echo "A soma dos numéros pares é: $val4";?><br><?php
        
       
        $val5 = ($val4 + $val3);
        
        echo "A mediá total dos numeros e dé: $val5";?><br><?php
        ?>
    </body>
</html>
