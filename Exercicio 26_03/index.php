<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>tabom</title>
        <style>
        
            div{
                width:100px;
                border:3px solid #000;
                float:left;
                margin:20px;
            }
        
        
        
        </style>
    </head>
    <body>
        
        <?php
        
        
        for ($o=1;$o<=10;$o+=1){
            echo "<div>";
            echo "<br>"."Tabuada do $o "."<br>"."<br>";
            
	for($i=1;$i<=10;$i+=1){
       
            
           $jorge = $i * $o;

            echo "$o x $i = $jorge";?><br><?php
            
		
	}
        
        echo "</div>";
        }

     ?>
    </body>
</html>
