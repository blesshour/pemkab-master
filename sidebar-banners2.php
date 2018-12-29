<div class="small-banner-slider owl-carousel">
    <?php
        $gals = $this->pocore()->call->podb->from('galeri')
            ->orderBy('id_foto DESC')
            ->fetchAll();
            foreach($gals as $gal){ 
                if ($gal['id_album_gal'] == 8) {
    ?>
    <div class="item">
        <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['file_foto'];?>" alt="">
    </div>
    <?php }
    } ?>
</div>