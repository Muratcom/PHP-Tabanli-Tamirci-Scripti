<?php 
include 'header.php';
  $haber_id=$_GET['haber_id'];
            $habersorgu=mysql_query("select * from haber where haber_id='$haber_id'");
            $habercek=mysql_fetch_assoc($habersorgu);  
            $haber_hit=$habercek['haber_hit'];
            $haber_hit++;
            $hitsayi=mysql_query("update haber set haber_hit='".$haber_hit."' where haber_id='$haber_id'"); 
 ?>
<section id="content">
<div class="wrapper">
  <article class="col-1">
 

 <figure class="img-indent"><img  style="width: 80%; margin-left: 200px; padding-bottom: 30px;" src="../admin/<?php echo $habercek['haber_resimyol']; ?>" alt=""></figure>
  <div class="indent-left">
    <h3 class="prev-indent-bot"></h3>
    <div class="wrapper prev-indent-bot">
      
      <div class="extra-wrap">
        <h6 style="font-size: 20px; color:#800000; font-weight: bold;" class="prev-indent-bot"><?php echo $habercek['haber_ad'];?>
        </h6>
        </b>
        <?php echo ($habercek['haber_detay']); ?>
      </div>
    </div>
  
  </div>
  <br>
  <br>
  <hr>
 
  <!--while bitis-->
  </article>
  <article class="col-2">
  <b>
  <h4 style="font-size: 20px; " class="p1">En Çok Okunan Haberler</b></h4>
  <ul class="list-1">
    <?php
$habersorgu=mysql_query("select*from haber order by haber_hit desc limit 10");
while ( $habercek=mysql_fetch_assoc($habersorgu)) {
 ?>
    <li><a href="haber_detay.php?haber_id=<?php echo $habercek['haber_id']; ?>""><?php echo $habercek['haber_ad'];?>
    </a></li>
    <?php } ?>
  </ul>
  </article>
</div>
</section>
<!--==============================aside================================-->
<aside>
<div class="block">
</div>
</aside>
</div>
</div>
<?php 
include 'footer.php';
 ?>