<?php require VDIR.'/header.php' ?>

<div class="container">
        <div class="row">
            <div class="col-sm-12" >
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
                          <thead>
                                <tr>
                                    <th>Film</th>
                                    <th>Süresi</th>
                                    <th>Vizyon Tarihi</th>
                                    <th>Fiyat</th>
                                    <th>Yönetmen</th>
                                    <th>Tür</th>
                                    <th>Kategori</th>
                                    <th>Oyuncular</th>
                                    <th>Özet</th>
                                </tr>
                            </thead>
                              <?php foreach($film as $filmler) { ?>
                                      <tr>
                                          <td>
                                          <?php echo $filmler->filmAd; ?>
                                          </td>
                                          <td>
                                          <?php echo $filmler->filmSuresi; ?>
                                          </td>
                                          <td>
                                          <?php echo $filmler->vizyonTarihi; ?>
                                          </td>
                                          <td>
                                          <?php echo $filmler->filmFiyat;?>
                                          </td>
                                          <td>
                                          <?php     $db = Db::getInstance();
                                                    $req = $db->query("SELECT yonetmenAd FROM yonetmenler where yonetmen_id='".$filmler->yonetmen_id."'");
                                                    $name = $req->fetch(PDO::FETCH_ASSOC);
                                                    echo $name['yonetmenAd'];
                                                    ?>
                                          </td>
                                          <td>
                                          <?php 
                                           $db = Db::getInstance();
                                           $req = $db->query("SELECT filmTurAd FROM film_turleri where tur_id='".$filmler->filmTuru_id."'");
                                           $name = $req->fetch(PDO::FETCH_ASSOC);
                                           echo $name['filmTurAd'];
                                          ?>
                                          </td>
                                          <td>
                                          <?php $db = Db::getInstance();
                                           $req = $db->query("SELECT kategoriAd FROM kategoriler where kategori_id='".$filmler->kategori_id."'");
                                           $name = $req->fetch(PDO::FETCH_ASSOC);
                                           echo $name['kategoriAd'];?>
                                          </td>
                                          <td>
                                          <?php ?>
                                          </td>
                                          <td>
                                          <?php echo $filmler->filmOzet; ?>
                                          </td>
                                          
                                      </tr>
                                <?php } ?>
                          </table>
                      </div>
                      <br>
                     
        </div>
                </div>
            </div>
        </div>
    </div>

<?php require VDIR.'/footer.php' ?>

