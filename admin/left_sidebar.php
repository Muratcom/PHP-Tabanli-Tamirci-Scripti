<?php 
ob_start();
session_start();
include 'baglan_admin.php';

 ?>
<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
    <ul class="nav" id="main-menu">
        <li>
        <div class="user-img-div">
            <img src="assets/img/user.gif" class="img-thumbnail"/>
            <div class="inner-text">
                 Hoşgeldiniz: <?php 
                                    if(isset($_SESSION['admin_kadi'])){
                              echo $_SESSION['admin_kadi'];
                                            }
                                ?>
                <br/>
                <small>last login: 2 weeks ago </small>
            </div>
        </div>
        </li>
        <li>
        <a class="active-menu" href="index.php"><i class="fa fa-home "></i>Anasayfa</a>
        </li>


<?php 
$admin=$_SESSION['admin_kadi'];
$adminsor=mysql_query("select * from admin where admin_kadi='$admin'");
$admincek=mysql_fetch_assoc($adminsor);

if ($admincek['admin_yetki']=="0") {?>


        <li>
        <a href="ayarlar.php"><i class="fa fa-cogs"></i>Ayarlar</a>
        </li>

   <?php  }?>

   


 


        <li>
        <a href="menuler.php"><i class="fa fa-bars"></i> Menüler</a>
        </li>
        <li>
        <a href="slider.php"><i class="fa fa-slideshare"></i> Slider</a>
        </li>

         <li>
        <a href="sayfalar.php"><i class="fa fa-file-text"></i> Sayfalar</a>
        </li>

        <li>
        <a href="haberler.php"><i class="fa fa-file-text"></i> Haberler</a>
        </li>

    </ul>
</div>
</nav>