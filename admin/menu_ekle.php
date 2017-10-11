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
<h1 class="page-subhead-line">Sitenize menü ekliyorsunuz...</h1>

                <?php 
                            if (isset($_GET['durum'])) {
                           if($_GET['durum']=='ok') 
                                  echo '<h3 class="page-subhead-line" style="color:green;text-align:center;">
                 Menü başarılı bir şekilde eklendi...</h3>
                 '; elseif ($_GET['durum']=='no') { echo '
                <h4 class="page-subhead-line" style="color:red;text-align:center;">Menü eklenirken bir hata oluştu!!</h4>
                 '; } } ?>
              

                <form action="islem_admin.php" method="POST">
                    <div class="col-md-12">
                        <div class="form-group col-md-6">
                            <label>Menü Adı</label>
                            <input class="form-control" required="" type="text" name="menu_ad" placeholder="Eklemek istediğiniz menü adını yazınız">
                        </div>   

                         <div class="form-group col-md-6">
                            <label>Menü Linki</label>
                            <input class="form-control" required="" type="text" name="menu_link" placeholder="Eklemek istediğiniz menünün linkini  yazınız">
                        </div>  

                    </div>

                      <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <hr>
                         <center><button style="height: 50px; width: 30%; " class="btn btn-success" type="submit" name="menu_kaydet">Menu Ekle</button></center>

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