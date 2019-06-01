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
          $nota1=5;
          $nota2=4;
          
          $media=($nota1 + $nota2)/2;
          
          if($media >= 6){
            
          
          ?>
        <p>Você foi Aprovado</p>
        <?php
        }
            else{
                
           ?>
        <p>Você foi Reprovado</p>    
        <?php
            }
            ?>
        <p>Primeira nota: <?php 
          echo"$nota1"
               ?></p>
                <p>Segunda Nota: <?php 
          echo"$nota2"
               ?></p>
                        <p>Media: <?php 
          echo"$media"
               ?></p>
        
    </body>
</html>
