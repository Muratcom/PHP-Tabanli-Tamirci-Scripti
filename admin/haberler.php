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
                <h1 class="page-head-line"> HABERLER</h1>
                <h1 class="page-subhead-line">Sitenizdeki haberleri bu sayfadan yönetebilirsiniz...</h1>
                <div class="col-md-12">
                    <a href="haber_ekle.php"><button class="btn btn-success" type="submit" name="haber_ekle">Haber Ekle</button></a>
                    <hr>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Haber Bilgileri
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>
                                     ID
                                </th>
                                <th>
                                     Haber Zaman
                                </th>
                                <th style="width: 250px;">
                                     Haber Başlık
                                </th>
                                <th>
                                     Hit Sayısı
                                </th>
                                <th style="width: 10px;">
                                </th>
                                <th style="width: 10px;">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                                        $habersorgu=mysql_query("select*from haber");
                                        while ($habercek=mysql_fetch_assoc($habersorgu)){?>
                            <tr>
                                <td>
                                    <?php echo $habercek['haber_id']; ?>
                                </td>
                                <td>
                                    <?php echo $habercek['haber_zaman']; ?>
                                </td>
                                <td>
                                    <?php echo $habercek['haber_ad']; ?>
                                </td>
                                <td>
                                    <?php echo $habercek['haber_hit']; ?>
                                </td>
                                <td>
                                    <a href="haber_duzenle.php?haber_id=<?php echo $habercek['haber_id']; ?>"><button class="btn btn-primary" type="submit" name="haber_duzenle">Düzenle</button></a>
                                </td>
                                <td>
                                    <a href="islem_admin.php?haber_id=<?php echo $habercek['haber_id'];?>&habersil=ok&haberresimsil=<?php echo $habercek['haber_resimyol']; ?>
                                    "> <button class="btn btn-danger" type="submit" name="haber_sil">Sil</button></a>
                                </td>
                            </tr>
                            <?php  }?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php   
include 'footer.php';
 ?>