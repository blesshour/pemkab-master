<style>


</style>

<section class="" id="main-sliders">
   <div class="container-fluid">
      <div class="row padding">

         <div class="col-sm-12 holder">
            <div class="pic-slider owl-carousel">
            <?php
                $gals = $this->pocore()->call->podb->from('galeri')
                    ->orderBy('id_foto DESC')
                    ->fetchAll();
                    foreach($gals as $gal){ 
                     if ($gal['id_album_gal'] == 9) {
                  ?>
               <div class="item">
                  <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['file_foto'];?>" alt="">
                  <div class="overlay">
                        <div class="item-inner">
                           <a class="preview" href="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['file_foto'];?>" rel="prettyPhoto"><?=$gal['caption'];?></a>
                        </div>
                  </div>
               </div>
            <?php
            }
          } ?>
            </div>
         </div>
         <!-- ./end-of-col-sm-12 -->
    </div>
    <!-- ./end-of-row -->

    </div>
      <!-- ./end-of-row -->
   </div>
   <!-- ./end-of-container -->
</section>
<!-- ./end-of-main-sliders -->
