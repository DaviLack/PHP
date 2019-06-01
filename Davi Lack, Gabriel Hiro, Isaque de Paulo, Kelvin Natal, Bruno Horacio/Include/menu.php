<div class="depto"><nav>
     <?php while($rsdepto = mysqli_fetch_array($sqldepto)){ ?>
          <ul>
               <li><a href="#"><?php echo $rsdepto['nome_depto'] ?> </a></li>
     </ul><?php }?>
</div></nav>
