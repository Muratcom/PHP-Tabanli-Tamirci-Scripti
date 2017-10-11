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
                <h1 class="page-head-line"> Admin Paneline Hoşgeldiniz...</h1>
                <h1 class="page-subhead-line">Sitenizdeki sayfaları bu sayfadan yönetebilirsiniz...</h1>
                <div class="col-md-12">
                    <a href="sayfa_ekle.php"><button class="btn btn-success" type="submit" name="sayfa_ekle">Sayfa Ekle</button></a>
                    <hr>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Sayfa Bilgileri
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
                                     Eklendiği Tarih
                                </th>
                                <th style="width: 250px;">
                                     Sayfa Adı
                                </th>
                                <th>
                                     Anasayfada Göster
                                </th>
                                <th style="width: 10px;">
                                </th>
                                <th style="width: 10px;">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                                        $sayfasorgu=mysql_query("select*from sayfalar");
                                        while ($sayfacek=mysql_fetch_assoc($sayfasorgu)){?>
                            <tr>
                                <td>
                                    <?php echo $sayfacek['sayfa_id']; ?>
                                </td>
                                <td>
                                    <?php echo $sayfacek['sayfa_tarih']; ?>
                                </td>
                                <td>
                                    <?php echo $sayfacek['sayfa_ad']; ?>
                                </td>
                                <td>
                                    <?php 
                                             if ($sayfacek['sayfa_anasayfa']=='0') {
                                                echo "HAYIR";
                                             }
                                                else
                                                    echo "EVET";
                                             ?>
                                </td>
                                <td>
                                    <a href="sayfa_duzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><button class="btn btn-primary" type="submit" name="sayfa_duzenle">Düzenle</button></a>
                                </td>
                                <td>
                                    <a href="islem_admin.php?sayfa_id=<?php echo $sayfacek['sayfa_id'];?>&sayfasil=ok"> <button class="btn btn-danger" type="submit" name="sayfa_sil">Sil</button></a>
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