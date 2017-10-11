<?php 
include 'header.php';
include 'left_sidebar.php';
if (!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
$haber_id=$_GET['haber_id'];
$habersorgu=mysql_query("select*from haber where haber_id='$haber_id'");
$habercek=mysql_fetch_assoc($habersorgu);
?>
<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line"> HABERLER</h1>
        <h1 class="page-subhead-line">Sitenizdeki haberlri düzenliyorsunuz...</h1>
        <?php 
                            if (isset($_GET['durum'])) {
                           if($_GET['durum']=='ok') 
                                  echo '<h3 class="page-subhead-line" style="color:green;text-align:center;">
         Haber başarılı bir şekilde düzenlendi...</h3>
         '; elseif ($_GET['durum']=='no') { echo '
        <h4 class="page-subhead-line" style="color:red;text-align:center;">Haber düzenlenirken bir hata oluştu!!</h4>
         '; } } ?>
        <form action="islem_admin.php" method="POST">
          <div class="col-md-12">
            <div class="form-group col-md-6">
              <input class="form-control" type="hidden" name="haber_id" value="<?php echo $habercek['haber_id']; ?>"> <label>Haber Başlık</label>
              <input class="form-control" required="" type="text" name="haber_ad" value="<?php echo $habercek['haber_ad']; ?>">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group col-md-12">
              <label>Haber Detayı</label>
              <textarea name="haber_detay" class="ckeditor"><?php echo $habercek['haber_detay']; ?>
              </textarea>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group col-md-12">
            <hr>
            <center><button style="height: 50px; width: 30%; " class="btn btn-success" type="submit" name="haber_düzenle">Haber Düzenle</button></center>
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