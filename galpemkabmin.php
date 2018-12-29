<?=$this->layout('index');?>
    <div class="page-title">
        <h1>Galeri</h1>
    </div>

<section id="galeri">
    <div class="container">
        <!--/#galeri-filter-->
        
        <div class="row">
            <div class="galeri-items">
            <?php
                $gals = $this->pocore()->call->podb->from('galeri')
                    ->orderBy('id_foto DESC')
                    ->fetchAll();
                    foreach($gals as $gal){ 
                        $excp = [6,7,8];
                        if (!( $gal['id_album_gal'] == 8 || 
                               $gal['id_album_gal'] == 7 || 
                               $gal['id_album_gal'] == 6 ) ) {
            ?>
                <div class="galeri-item apps col-xs-12 col-sm-4 col-md-3 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['file_foto'];?>" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['file_foto'];?>" rel="prettyPhoto"><?=$gal['caption'];?></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.galeri-item-->
            <?php } 
             } ?>
            </div>
        </div>
    </div>
</section>
