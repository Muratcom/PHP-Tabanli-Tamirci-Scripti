<?php 

$username="root";

$password="";

$sunucu="localhost";

$database="tamirci_admin";



$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");

if(!$baglan){

	echo "BAglanti hatasi: ".mysql_errno();
	exit();
}

$db=mysql_select_db($database);
if (!$db) {
	echo "Veritabanı hatası:".mysql_error(); echo "<br>";

	echo "Veritabanı bağlantı bilgileri: baglan.php dosyası üzerinden düzenleyebilirsiniz...";
	exit();
}

 ?>



 				