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
         $QI = 70;
         
         if($QI>=0 && $QI<= 30)
         {
             ?>
        <p>Você tem o QI na categoria Ameba<p>
             <?php
         }
            
         else if($QI>30 && $QI<=50)
         {
              ?>
        <p>Você tem o QI na categoria Débil Mental<p>
             <?php
             
         }
             
         else if($QI>50 && $QI<=70)                        
         {
              ?>
        <p>Você tem o QI na categoria Regular<p>
             <?php
         }
             
         else if($QI>70 && $QI<=100)
         {
              ?>
        <p>Você tem o QI na categoria Normal<p>
             <?php
         }
             
         else if($QI>100 && $QI<=150)  
         {
              ?>
        <p>Você tem o QI na categoria Gênio<p>
             <?php
         }
        
         else{
              ?>
        <p>QI Inválido<p>
             <?php
         }        
        ?>
    </body>
</html>