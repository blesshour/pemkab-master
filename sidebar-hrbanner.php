<div class="banner owl-carousel" id="hrbanner">
    <?php
        $gals = $this->pocore()->call->podb->from('galeri')
            ->where('tampilkan', 'Y')
            ->orderBy('id_foto DESC')
            ->fetchAll();
            foreach($gals as $gal){ 
                if ($gal['id_album_gal'] == 7) {
    ?>
    <div class="item">
        <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['file_foto'];?>" alt="">
    </div>
    <?php }
    } ?>
</div>