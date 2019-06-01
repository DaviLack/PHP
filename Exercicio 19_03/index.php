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
        $x=0;
        $y=0;
        
        if($x>0 && $y>0)
        {
        ?>
        <p>Essas cordenadas pertencem ao Primeiro quadrante</p>
        <?php
        }
        
        if($x>0 && $y<0)
        {
        ?>
        <p>Essas cordenadas pertencem ao Quarto quadrante</p>
        <?php
        }
        if($x<0 && $y>0)
        {
        ?>
        <p>Essas cordenadas pertencem ao Segundo quadrante</p>
        <?php
        }
        if($x<0 && $y<0)
        {
        ?>
        <p>Essas cordenadas pertencem ao Terceiro quadrante</p>
        <?php
        }       
        else{
            
          ?>
        <p>As cordenas se encontram no ponto central dos Quadrantes</p>
        <?php  
       
        }
        
        ?>
    </body>
</html>
