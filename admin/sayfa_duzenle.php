<?php 
include 'header.php';
include 'left_sidebar.php';
if (!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
$sayfa_id=$_GET['sayfa_id'];
$sayfasorgu=mysql_query("select*from sayfalar where sayfa_id='$sayfa_id'");
$sayfacek=mysql_fetch_assoc($sayfasorgu);
?>
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line"> SİTE GENEL AYARLARI</h1>
        <h1 class="page-subhead-line">Sitenizdeki sayfaları düzenliyorsunuz...</h1>
        <?php 
                            if (isset($_GET['durum'])) {
                           if($_GET['durum']=='ok') 
                                  echo '<h3 class="page-subhead-line" style="color:green;text-align:center;">
         Sayfa başarılı bir şekilde düzenlendi...</h3>
         '; elseif ($_GET['durum']=='no') { echo '
        <h4 class="page-subhead-line" style="color:red;text-align:center;">Sayfa düzenlenirken bir hata oluştu!!</h4>
         '; } } ?>
        <form action="islem_admin.php" method="POST">
          <div class="col-md-12">
            <div class="form-group col-md-6">
              <input class="form-control" type="hidden" name="sayfa_id" value="<?php echo $sayfacek['sayfa_id']; ?>"> <label>Sayfa Adı</label>
              <input class="form-control" required="" type="text" name="sayfa_ad" value="<?php echo $sayfacek['sayfa_ad']; ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group col-md-12">
              <label>Sayfa İçeriği</label>
              <textarea name="sayfa_icerik" class="ckeditor"><?php echo $sayfacek['sayfa_icerik']; ?>
              </textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group col-md-6">
              <label>Sayfa Sıra</label>
              <input class="form-control" type="text" name="sayfa_sira" value="<?php echo $sayfacek['sayfa_sira']; ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group col-md-6">
              <label>Anasayfada Göster</label>
              <select name="sayfa_anasayfa" class="form-control">
                <?php 
                                                  if ($sayfacek['sayfa_anasayfa']=='0') {?>
                <option value="0">HAYIR</option>
                <option value="1">EVET</option>
                <?php } elseif ($sayfacek['sayfa_anasayfa']=='1') {?>
                <option value="1">EVET</option>
                <option value="0">HAYIR</option>
                <?php  }?>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group col-md-12">
              <hr>
              <center><button style="height: 50px; width: 30%; " class="btn btn-success" type="submit" name="sayfa_düzenle">Sayfa Düzenle</button></center>
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