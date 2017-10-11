<?php 
include 'header.php';
include 'left_sidebar.php';
if (!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
giriskontrol();
yetkikontrol();
$ayaradminsorgu=mysql_query("select*from admin_ayarlar");
$ayaradmincek=mysql_fetch_assoc($ayaradminsorgu);
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> SİTE GENEL AYARLARI</h1>
                <?php 
                            if (isset($_GET['durum'])) {
                           if($_GET['durum']=='ok') 
                                  echo '<h3 class="page-subhead-line" style="color:green;text-align:center;">
                 Kayıtlar başarılı bir şekilde güncellendi...</h3>
                 '; elseif ($_GET['durum']=='no') { echo '
                <h4 class="page-subhead-line" style="color:red;text-align:center;">Kayıt güncellenirken bir hata oluştu!!</h4>
                 '; } } ?>
                <form action="islem_admin.php" method="POST">
                    <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Telefon</label>
                            <input class="form-control" type="text" name="adminayar_telefon" value="<?php echo $ayaradmincek['adminayar_telefon']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Site Başlığı</label>
                            <input class="form-control" type="text" name="adminayar_title" value="<?php echo $ayaradmincek['adminayar_title']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-8">
                            <label>Site Açıklaması</label>
                            <input class="form-control" type="text" name="adminayar_description" value="<?php echo $ayaradmincek['adminayar_description']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-8">
                            <label>Site Anahtar Kelimeler</label>
                            <input class="form-control" type="text" name="adminayar_keywords" value="<?php echo $ayaradmincek['adminayar_keywords']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-4">
                            <label>Facebook</label>
                            <input class="form-control" type="text" name="adminayar_facebook" value="<?php echo $ayaradmincek['adminayar_facebook']; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Twitter</label>
                            <input class="form-control" type="text" name="adminayar_twitter" value="<?php echo $ayaradmincek['adminayar_twitter']; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Linkedin</label>
                            <input class="form-control" type="text" name="adminayar_linkedin" value="<?php echo $ayaradmincek['adminayar_linkedin']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-8">
                            <label>Footer Yazı</label>
                            <input class="form-control" type="text" name="adminayar_footer" value="<?php echo $ayaradmincek['adminayar_footer']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Adres</label>
                            <input class="form-control" type="text" name="adminayar_adres" value="<?php echo $ayaradmincek['adminayar_adres']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Mail Adresi</label>
                            <input class="form-control" type="email" name="adminayar_mail" value="<?php echo $ayaradmincek['adminayar_mail']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fax Numarası</label>
                            <input class="form-control" type="text" name="adminayar_fax" value="<?php echo $ayaradmincek['adminayar_fax']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Yedek</label>
                            <input class="form-control" type="text" name="adminayar_yedek" value="<?php echo $ayaradmincek['adminayar_yedek']; ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <input class="btn btn-success" type="submit" name="ayar_kaydet" value="Düzenle">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php   
include 'footer.php';
 ?>