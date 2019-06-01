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
         $nota1=0;
         $nota2=0;
         $nota3=0;
         $media= ($nota1 + $nota2 + $nota3) / 3;         
         
         if($media<5){
             ?>
        <p>Seu conceito final é I </p>
        <?php
         }
         
         if($media<7 && $media>4){
             ?>
        <p>Seu conceito final é R </p>
        <?php
         }
         
         if($media<9 && $media>=7){
             ?>
        <p>Seu conceito final é B </p>
        <?php
         }
         
         if($media<=10 && $media>8){
             ?>
        <p>Seu conceito final é MB </p>
        <?php
         }
         
         
        ?>
 </body>
</html>