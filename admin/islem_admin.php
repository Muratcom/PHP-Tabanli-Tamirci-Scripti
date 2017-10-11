<?php 
include 'baglan_admin.php';
ob_start();
session_start();
//Ayarlar.php sayfasındaki güncellemelerin kontrol edildiği kod parçacıkları//
if (isset($_POST['ayar_kaydet'])) {
	$id=1;
	$ayarguncelle=mysql_query("update admin_ayarlar set adminayar_telefon='".$_POST['adminayar_telefon']."',adminayar_title='".$_POST['adminayar_title']."',adminayar_description='".$_POST['adminayar_description']."',adminayar_keywords='".$_POST['adminayar_keywords']."',adminayar_facebook='".$_POST['adminayar_facebook']."',adminayar_twitter='".$_POST['adminayar_twitter']."',adminayar_linkedin='".$_POST['adminayar_linkedin']."',adminayar_footer='".$_POST['adminayar_footer']."',adminayar_adres='".$_POST['adminayar_adres']."',adminayar_mail='".$_POST['adminayar_mail']."',adminayar_fax='".$_POST['adminayar_fax']."',adminayar_yedek='".$_POST['adminayar_yedek']."' where adminayar_id='$id'");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:ayarlar.php?durum=ok");
}
else
	header("Location:ayarlar.php?durum=no");
}
//Login giriş sayfasının işlemleri//
if (isset($_POST['loggin'])) {
	$admin_kadi=$_POST['admin_kadi'];
	$admin_sifre=md5($_POST['admin_sifre']);
	if ($admin_kadi && $admin_sifre) {
		$sorgula=mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_sifre='$admin_sifre'  ");
		$verisay=mysql_num_rows($sorgula);// Eğer kayıt varsa kaç tane kayıt olduğunu döndürür. Varsa "1" ,yoksa "0" döndürür.
		if ($verisay>
0) {
			$_SESSION['admin_kadi']=$admin_kadi;//Burada oturum açmış oluyoz hostta. Biz tarayıcıyı kapatana kadar oturum bilgileri burada tutulur.
			header("Location:index.php");
		}
		else
			header("Location:login.php?Login=no");
	}
}
//Menü Ekleme İşlemleri
if (isset($_POST['menu_kaydet'])) {
$menuekle=mysql_query("insert into menuler (menu_ad,menu_link) VALUES('".$_POST['menu_ad']."','".$_POST['menu_link']."') ");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:menu_ekle.php?durum=ok");
}
else 
	header("Location:menu_ekle.php?durum=no");
} 
//Menü Düzenleme İşlemleri
if (isset($_POST['menu_düzen'])) {
	$id=$_POST['menu_id'];
	$menuguncelle=mysql_query("update menuler set menu_ad='".$_POST['menu_ad']."',menu_link='".$_POST['menu_link']."' where menu_id='$id'");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:menu_duzenle.php?durum=ok&menu_id=$id");
}
else
	header("Location:menu_duzenle.php?durum=no&menu_id=$id");
}
// Menü Silme işlemi
if ($_GET['menusil']=='ok') {
	$menusil=mysql_query("delete from menuler where menu_id='".$_GET['menu_id']."'");
	if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:menuler.php");
}
}
//SLİDER EKLEME İŞLEMİ
if (isset($_POST['slider_kaydet'])) {
	$uploads_dir='uploads';
	$tmp_name=$_FILES['slidegorsel']["tmp_name"];
	$name=$_FILES['slidegorsel']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$sliderekle=mysql_query("insert into slider (slider_resimyol,slider_url,slider_sira,slider_ad)  VALUES ('".$refimgyol."','".$_POST['slider_url']."','".$_POST['slider_sira']."','".$_POST['slider_ad']."')");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:slider_ekle.php?durum=ok");
}
else
	header("Location:slider_ekle.php?durum=no");
}
//SLİDER SİLME İŞLEMİ
if ($_GET['slidersil']=='ok') {
	$slidersil=mysql_query("delete from slider where slider_id='".$_GET['slider_id']."'");
	if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
		$slidersil=$_GET['sliderresimsil'];
		unlink("$slidersil");
	header("Location:slider.php");
}
}
//SLİDER DÜZENLEME İŞLEMİ
if (isset($_POST['slider_duzenle'])) {
	$id=$_POST['slider_id'];
	$ayarguncelle=mysql_query("update slider set slider_sira='".$_POST['slider_sira']."' where slider_id='$id'");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:slider.php?durum=ok");
}
else
	header("Location:slider.php?durum=no");
}
//SAYFA EKLEME İŞLEMİ
if (isset($_POST['sayfa_kaydet'])) {
	$zaman=date('Y-m-d H:i');
$sayfaekle=mysql_query("insert into sayfalar (sayfa_ad,sayfa_icerik,sayfa_sira,sayfa_anasayfa,sayfa_tarih) VALUES('".$_POST['sayfa_ad']."','".$_POST['sayfa_icerik']."','".$_POST['sayfa_sira']."','".$_POST['sayfa_anasayfa']."','".$zaman."') ");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:sayfalar.php?durum=ok");
}
else 
	header("Location:sayfalar.php?durum=no");
} 
//SAYFA SİLME İŞLEMİ
if ($_GET['sayfasil']=='ok') {
	$sayfasil=mysql_query("delete from sayfalar where sayfa_id='".$_GET['sayfa_id']."'");
	if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:sayfalar.php");
}
}
//SAYFA DÜZENLEME İŞLEMİ
if (isset($_POST['sayfa_düzenle'])) {
	$id=$_POST['sayfa_id'];
	$sayfaguncelle=mysql_query("update sayfalar set sayfa_ad='".$_POST['sayfa_ad']."',sayfa_icerik='".$_POST['sayfa_icerik']."',sayfa_sira='".$_POST['sayfa_sira']."',sayfa_anasayfa='".$_POST['sayfa_anasayfa']."' where sayfa_id='$id'");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:sayfa_duzenle.php?durum=ok&sayfa_id=$id");
}
else
	header("Location:sayfa_duzenle.php?durum=no&sayfa_id=$id");
}
//HABER SİLME İŞLEMİ
if ($_GET['habersil']=='ok') {
	$habersil=mysql_query("delete from haber where haber_id='".$_GET['haber_id']."'");
	if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
			$habersil=$_GET['haberresimsil'];
		unlink("$habersil");
	header("Location:haberler.php");
}
}
//HABER EKLEME İŞLEMİ
if (isset($_POST['haber_kaydet'])) {
	$haber_zaman=date('Y-m-d H:i');
	$uploads_dir='uploadshaber';
	$tmp_name=$_FILES['haber_resimyol']["tmp_name"];
	$name=$_FILES['haber_resimyol']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir, 0)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");
	$haberekle=mysql_query("insert into haber (haber_ad,haber_detay,haber_resimyol,haber_zaman)  VALUES ('".$_POST['haber_ad']."','".$_POST['haber_detay']."','".$refimgyol."','".$haber_zaman."')");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:haber_ekle.php?durum=ok");
}
else
	header("Location:haber_ekle.php?durum=no");
}
//HABER DÜZENLEME İŞLEMİ
if (isset($_POST['haber_düzenle'])) {
	$id=$_POST['haber_id'];
	$sayfaguncelle=mysql_query("update haber set haber_ad='".$_POST['haber_ad']."',haber_detay='".$_POST['haber_detay']."' where haber_id='$id'");
if (mysql_affected_rows()) { //İşlem başarılı ise ayarlar.php sayfasını aç.Sayfada girilen yeni değerler gelir.//
	header("Location:haber_duzenle.php?durum=ok&sayfa_id=$id");
}
else
	header("Location:haber_duzenle.php?durum=no&sayfa_id=$id");
}



//deneme mail

if (isset($_POST['gonder'])) {
$ad_soyad     = $_POST["ad_soyad"];
$tel         = $_POST["tel"];
$email         = $_POST["email"];
$mesaj        = $_POST["mesaj"];
$adres        = "murat.3878@hotmail.com"; // Buraya e-postanin gonderilecegi mail adresini yaziniz
$konu        = "Iletisim Formu";
$tarih        = date('Y-m-d');
$ip_adresi    = $_SERVER['REMOTE_ADDR'];
 
if(($ad_soyad=="") or ($tel =="") or ($email=="") or ($mesaj=="")){
 
echo "<center>Lutfen Ad Soyad, Telefon, E-Mail ve Mesaj alanlarini bos birakmayiniz.<br><a href=index.php>Geri don</a></center>";
 
}
else
{
 
$mesajveri.="ILETISIM FORMU MESAJI<br/><br/>";
$mesajveri.="E-Mail:  ".$email."<br/>";
$mesajveri.="Telefon:  ".$tel."<br/>";
$mesajveri.="Tarih:  ".$tarih."<br/>";
$mesajveri.="IP Adresi   :".$ip_adresi."<br/>";
$mesajveri.="Mesaj:  ".$mesaj;
 
$mesajyolla = mail($adres, $konu, $mesajveri, "Content-type: text/html; charset=utf-8\r\n");
 
if($mesajyolla)
{
 
echo "<center>Iletisim mailiniz bize ulasti, en kisa surede cevaplanacaktir. Ilginiz icin tesekkur ederiz.<br><a href=index.php>Anasayfa</a></center>";
 
}
else
{
 
echo "<center>E-Mail gonderilirken hata olustu! Lutfen daha sonra tekrar deneyiniz.</center>";
 
}
}
	

 

}






?>