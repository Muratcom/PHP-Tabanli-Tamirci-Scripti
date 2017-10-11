<div class="wrapper">
        <div class="slider">
          <ul class="items">

              <?php 
              
              $resimsorgu=mysql_query("select*from slider order by slider_sira DESC");
              
              
              while($resimcek=mysql_fetch_assoc($resimsorgu)){ ?>

            <li><img src="../admin/<?php echo $resimcek['slider_resimyol']; ?>" alt="slider resmi">
</li>  <?php } ?> 
           
          </ul>
        </div>
        <a class="prev">prev</a> <a class="next">next</a>
        <div class="banner1-bg"></div>
        <div class="banner-1"></div>
      </div>