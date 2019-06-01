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
        
        $massa = 10;
        $tempo = 0;
        
        for($tempo=0; $massa > 0.5;){
            
        $massa = $massa / 2;
          
        $tempo = $tempo + 50;      
        
      
        
        }
        
          echo "A massa será $massa gramas em $tempo segundos";
        
        
       
        ?>
    </body>
</html>
