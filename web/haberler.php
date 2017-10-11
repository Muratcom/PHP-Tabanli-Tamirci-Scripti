<?php 
include 'header.php';
seo($s);
$habersorgu=mysql_query("select*from haber");
$habercek=mysql_fetch_assoc($habersorgu);
 ?>
<section id="content">
<div class="wrapper">
  <article class="col-1">
  <?php

$sayfada=2;//sayfada gösterilecek içerik miktarı.Bu aradaki php ile sayfalama işlemine başlıyoz...
$sorgu=mysql_query("select * from haber");
$toplam_icerik=mysql_num_rows($sorgu);

$toplam_sayfa=ceil($toplam_icerik/$sayfada);

//eğer sayfa girilmemişse 1 varsayalım

$sayfa=isset($_GET['sayfa'])? (int)$_GET['sayfa']:1;

//eğer 1 den küçük bir sayfa sayısı girildiyse onu 1 yapalım

if ($sayfa<1) {
  $sayfa=1;
}

//toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım

if ($sayfa>$toplam_sayfa) {
  $sayfa=$toplam_sayfa;
}
$limit=($sayfa-1) * $sayfada;

$habersorgu=mysql_query("select*from haber order by haber_id desc limit $limit,$sayfada");//sayfalama işlemi için veritabanı sorgusuna birkaç ekleme daha yaptım.
while ( $habercek=mysql_fetch_assoc($habersorgu)) {
 ?>
  <div class="indent-left">
    <h3 class="prev-indent-bot"></h3>
    <div class="wrapper prev-indent-bot">
      <figure class="img-indent"><img src="../admin/<?php echo $habercek['haber_resimyol']; ?>" alt=""></figure>
      <div class="extra-wrap">
        <h6 style="font-size: 20px; color:#800000; font-weight: bold;" class="prev-indent-bot"><?php echo $habercek['haber_ad'];?>
        </h6>
        </b>
        <?php echo substr($habercek['haber_detay'], 0,300); ?>
      </div>
    </div>
    <a style="float: right; padding-bottom: 15px;" class="button-2" 
    href="haber_detay/<?=seo($habercek['haber_ad']).'/'.$habercek['haber_id']?>">Devamını oku</a>
  </div>
  <br>
  <br>
  <hr>
  <?php } ?>
  <!--while bitis-->


    <!--sayfalama baslama-->

    <!--sayfalama için görsel olarak sayfaların gösterildiği yerler burada başlıyor.-->

    <div align="right" class="col-md-12">
      
                            <ul class="pagination">
<?php 
$i=0;
if ($i<$toplam_sayfa) { 
  $i++;
?>

                           
  <li><a href="haberler.php?sayfa=<?php echo $i; ?>">&laquo;</a></li> <?php } ?>


    <?php 

      $s=0;
      while ($s<$toplam_sayfa) {
        $s++; ?>

  <li><a href="haberler.php?sayfa=<?php echo $s; ?>""><?php echo $s; ?></a></li>
  
  
        <!--<a href="haberler.php?sayfa=<?php echo $s; ?>"> <?php echo $s; ?> </a>-->
    <?php  } ?>  

<?php 
$i=0;
if ($i<$toplam_sayfa) { 
  $i=$toplam_sayfa;
?>

    <li><a href=""haberler.php?sayfa=<?php echo $i; ?>"">&raquo;</a></li> <?php } ?>


</ul>
    </div>

<!--sayfalama bitiş-->

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