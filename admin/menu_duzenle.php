<?php 
include 'header.php';
include 'left_sidebar.php';
if (!isset($_SESSION['admin_kadi'])) {
    header("Location:login.php");
}

$id=$_GET['menu_id'];
$menuduzensorgu=mysql_query("select*from menuler where menu_id='$id'");
$menuduzencek=mysql_fetch_assoc($menuduzensorgu);
?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line"> SİTE GENEL AYARLARI</h1>
<h1 class="page-subhead-line">Sitenizdeki menü düzenlemelerini bu sayafadan yapabilirsiniz</h1>

                <?php 
                            if (isset($_GET['durum'])) {
                           if($_GET['durum']=='ok') 
                                  echo '<h3 class="page-subhead-line" style="color:green;text-align:center;">
                 Menü başarılı bir şekilde düzenlendi...</h3>
                 '; elseif ($_GET['durum']=='no') { echo '
                <h4 class="page-subhead-line" style="color:red;text-align:center;">Menü düzenlenirken bir hata oluştu!!</h4>
                 '; } } ?>
              

                <form action="islem_admin.php" method="POST">
                    <div class="col-md-12">

                    <div class="form-group col-md-0">
                    
                            <input class="form-control"  type="hidden" name="menu_id" value="<?php echo $menuduzencek['menu_id']; ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Menü Adı</label>
                            <input class="form-control"  type="text" name="menu_ad" value="<?php echo $menuduzencek['menu_ad']; ?>">
                        </div>   

                         <div class="form-group col-md-6">
                            <label>Menü Linki</label>
                            <input class="form-control"  type="text" name="menu_link" value="<?php echo $menuduzencek['menu_link']; ?>">
                        </div>  

                    </div>

                      <div class="col-md-12">
                        <div class="form-group col-md-12">
                            <hr>
                         <center><button style="height: 50px; width: 30%; " class="btn btn-success" type="submit" name="menu_düzen">Menu Düzenle</button></center>

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




