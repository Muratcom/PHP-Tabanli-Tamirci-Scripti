<?php 
error_reporting(0);
include 'baglan.php';
include 'admin/function.php';
 
 

$ayarsorgu=mysql_query("select*from admin_ayarlar");
$ayarcek=mysql_fetch_assoc($ayarsorgu);



 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<base href="http://tamirciscript.esy.es">
<title> <?php echo $ayarcek['adminayar_title']; ?> </title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/stil.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<div class="extra">
  <div class="main">
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">
            

<img style="margin-left: 59px; margin-top: 30px;" src="<?php echo $ayarcek['adminayar_logo']; ?>">

            <strong class="support"><?php echo $ayarcek['adminayar_telefon']; ?></strong> </div>
        </div>
        <nav>
          <ul  class="menu">
            <li><a class="active" href="index.php">Home</a></li>
            <?php 
              
              $menusorgu=mysql_query("select*from menuler");
              $menusay=mysql_num_rows($menusorgu);
              $say=0;
              
              while($menucek=mysql_fetch_assoc($menusorgu)){ $say++;?>


                <li class="<?php 

                if ( $menusay==$say) {
                 echo "last";
                }

                 ?>"><a href="<?php echo$menucek['menu_link']; ?>"><?php echo$menucek['menu_ad']; ?></a></li>

             <?php } ?> 
  
          </ul>
        </nav>
      </div>
      
    </header>