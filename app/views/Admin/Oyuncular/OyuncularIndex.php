
<?php require VDIR.'/Admin/header.php' ?>

<div class="container">
        <div class="row">
            <div class="col-sm-6" style="overflow-y: scroll;height:500px" >
            <?php 
                        if($uyari){
                            echo $uyari;
                        }

                        ?>
                        <?php 

                        if($result)
                        {
                            echo $result;
                        }

                        ?>
                        <br>
            <div class="card" >
            <div class="card-body">
                      <div class="table-responsive" style="align:left">
                          <table class="table table-hover ">
                              <?php foreach($posts  as $oyuncu) { ?>
                                      <tr>
                                          <td>
                                          <?php echo $oyuncu->oyuncuAd; ?>
                                          </td>
                                          <td>
                                            <form action="./?url=Oyuncular/OyuncuSilPost" method="Post">
                                            <button type="Submit" name="OyuncuSil" value=<?php echo $oyuncu->oyuncu_id; ?> class="btn btn-primary">Sil</button>
                                            </form> 
                                          </td>
                                      </tr>
                                <?php } ?>
                          </table>
                      </div>
                       <br>
                     
            </div>
                  
                </div>
            </div>
            <div class="col-sm-6">
              <br>
                <div class="alert alert-info" role="alert">
                    Oyuncu listesi yan tarafta yer almaktadır.
                </div>
                <div class="alert alert-info" role="alert">
                   Oyuncu eklemek için Oyuncu Ekle Menüsünü kullanabilirisin.z
                </div>
            </div>
        </div>
    </div>

<?php require VDIR.'/Admin/footer.php' ?>
