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
                <h1 class="page-subhead-line">Sitenizdeki sliderlerin resimlerini bu sayfadan yönetebilirsiniz...</h1>

<div class="col-md-12">
    
<a href="slider_ekle.php"><button  class="btn btn-success" type="submit" name="slider_ekle">Slider Ekle</button></a>

<hr>

</div>

            </div>
           <div class="col-md-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Slider Bilgileri
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Slider Adı</th>
                                            <th >Slider Resimyol</th>
                                            <th >Slider Url</th>
                                            <th>Slider Sıra</th>
                                            <th style="width: 10px;"></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 

                                        $slideradminsorgu=mysql_query("select*from slider");
                                        while ($slideradmincek=mysql_fetch_assoc($slideradminsorgu)){?>
                                            <tr>
                                            <td><?php echo $slideradmincek['slider_id']; ?></td>
                                            <td><?php echo $slideradmincek['slider_ad']; ?></td>
                                            <td>
                                            <img width="200px;" src="<?php echo $slideradmincek['slider_resimyol']; ?>" alt="slider resmi">


                                            </td>
                                            <td><?php echo $slideradmincek['slider_url']; ?></td>
                                           
                                           <form action="islem_admin.php" method="POST">
                                            <td>


                                            <input type="text" name="slider_sira" value="<?php echo $slideradmincek['slider_sira']; ?>">

                                                <input type="hidden" name="slider_id" id="slider_id" value="<?php echo $slideradmincek['slider_id'];?>"></input>

                                            
                                            <button class="btn btn-primary" type="submit" name="slider_duzenle">Düzenle</button>

                                          


                                            </td>
                                         </form>
                                            
                                            <td><a href="islem_admin.php?slider_id=<?php echo  $slideradmincek['slider_id'];?>&slidersil=ok&sliderresimsil=<?php echo $slideradmincek['slider_resimyol']; ?>"> <button class="btn btn-danger" type="submit" name="slider_sil">Sil</button></a> </td>
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