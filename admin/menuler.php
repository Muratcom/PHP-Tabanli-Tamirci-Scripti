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
                <h1 class="page-subhead-line">Sitenizdeki menüleri bu sayfadan yönetebilirsiniz...</h1>

<div class="col-md-12">
	
<a href="menu_ekle.php"><button  class="btn btn-success" type="submit" name="menu_ekle">Menu Ekle</button></a>

<hr>

</div>

            </div>
           <div class="col-md-12">
                   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Menü Bilgileri
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th style="width: 400px;">Menü Adı</th>
                                            <th style="width: 400px;">Menü Linki</th>
                                            <th style="width: 10px;"></th>
                                            <th style="width: 10px;"></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 

                                    	$menuadminsorgu=mysql_query("select*from menuler");
                                    	while ($menuadmincek=mysql_fetch_assoc($menuadminsorgu)){?>
                                    		<tr>
                                            <td><?php echo $menuadmincek['menu_id']; ?></td>
                                            <td><?php echo $menuadmincek['menu_ad']; ?></td>
                                            <td><?php echo $menuadmincek['menu_link']; ?></td>
                                         
                                            <td> <a href="menu_duzenle.php?menu_id=<?php echo $menuadmincek['menu_id']; ?>"><button class="btn btn-primary" type="submit" name="duzenle">Düzenle</button></a> </td>
                                            <td>
                                            <td><a href="islem_admin.php?menu_id=<?php echo  $menuadmincek['menu_id'];?>&menusil=ok"> <button class="btn btn-danger" type="submit" name="menu_sil">Sil</button></a> </td>
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