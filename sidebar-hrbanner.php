<section class="wow">
   <div class="container wow fadeInDown">
      <div class="row padding">
         
         <div class="col-sm-12 wow fadeInDown">
         <?php
            $gals = $this->pocore()->call->podb->from('galeri')
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
        <!-- ./end-of-sm-12 -->
      
    </div>
      <!-- ./end-of-row -->
   </div>
   <!-- ./end-of-container -->
</section>
<!-- ./end-of-main-sliders -->
