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

$val1 =1;
$val2 = 2;
$val3 = 3;
$maior = 0;
 
if($val1>=$val2 && $val1>=$val3)
{
$maior = $val1; 
}
 
if($val2>=$val1 && $val2>=$val3)
{
$maior = $val2;
 
}
 
if($val3>=$val1 && $val3>=$val2)
{
$maior = $val3;

}else{
    
}


?>
        <p> O maior valor é: <?php echo "$maior";?></p>
</body>
 
</html>
