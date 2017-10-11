<?php 
include 'header.php';
include 'left_sidebar.php';
if (!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> SİTE GENEL AYARLARI</h1>
<h1 class="page-subhead-line">Sitenize sayfa ekliyorsunuz...</h1>

                <?php 
                            if (isset($_GET['durum'])) {
                           if($_GET['durum']=='ok') 
                                  echo '<h3 class="page-subhead-line" style="color:green;text-align:center;">
                 Sayfa başarılı bir şekilde eklendi...</h3>
                 '; elseif ($_GET['durum']=='no') { echo '
                <h4 class="page-subhead-line" style="color:red;text-align:center;">Sayfa eklenirken bir hata oluştu!!</h4>
                 '; } } ?>
              

                <form action="islem_admin.php" method="POST">
                    <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Sayfa Adı</label>
                            <input class="form-control" required="" type="text" name="sayfa_ad" placeholder="Eklemek istediğiniz sayfa adını yazınız">
                        </div>   
                    </div>

                    <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <label>Sayfa İçeriği</label>
                            <textarea name="sayfa_icerik" class="ckeditor"></textarea>
                        </div>   
                    </div>

                     <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Sayfa Sıra</label>
                            <input class="form-control" required="" type="text" name="sayfa_sira" placeholder="Eklemek istediğiniz sayfa sırasını giriniz">
                        </div>   
                    </div>

                      <div class="col-md-12">
                      <div class="form-group col-md-6">
                                            <label>Anasayfada Göster</label>
                                            <select name="sayfa_anasayfa" class="form-control">
                                                <option value="0">HAYIR</option>
                                                <option value="1">EVET</option>
                                                
                                            </select>
                                        </div>
                                        </div>

                      <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <hr>
                         <center><button style="height: 50px; width: 30%; " class="btn btn-success" type="submit" name="sayfa_kaydet">Sayfa Ekle</button></center>

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