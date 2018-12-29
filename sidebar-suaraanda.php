<div class="suara-anda-slider owl-carousel owl-theme">
<?php
   $sa = $this->pocore()->call->podb->from('suaraanda')
      ->where('tampilkan', 'Y')
      ->select('kategori_sa.kategori_sa')
      ->Join('kategori_sa ON kategori_sa.id_kategori_sa = suaraanda.id_kategori_sa')
      ->where('kategori_sa.id_kategori_sa = suaraanda.id_kategori_sa')
      ->orderBy('id_suaraanda DESC')
      ->fetchAll();
      foreach($sa as $s){ ?>
         <div class="single-slide">
            <div class="box fadeInRight">
               <div class="q">
                  <p>dari <strong style="font-style: italic;"><?=$s['nama'];?></strong>
                  <small class="text-muted">kategori: <?=$s['kategori_sa'];?> || <?=$s['date']?> </small></p>
                  <p><?=$s['suaraanda'];?></p>
               </div>
               <hr>

               <?php
               switch($s['jawaban'] || $s['jawaban_dr']){
                  case NULL:
                  if ($s['id_kategori_sa'] == 1 || $s['id_kategori_sa'] == 3 ) { ?>
                     <div class="a">
                        <p style="font-style: italic;">Belum ada balasan. <?=$s['kategori_sa'];?> anda sementara di proses. Mohon bersabar, terima kasih!</p>
                     </div>
                  <?php 
                  } else if ($s['id_kategori_sa'] == 2 || $s['id_kategori_sa'] == 4 ) { ?>
                     <div class="a">
                        <p style="font-style: italic;"><?=$s['kategori_sa'];?> anda sudah kami terima, terima kasih!</p>
                     </div>
                  <?php 
                  } else { ?>
                     <div class="a">
                        <p style="font-style: italic;">Terima kasih telah memberikan "Suara Anda"!</p>
                     </div>
                  <?php 
                  };
                     break;
                  case !NULL:
                  ?>
                     <div class="a">
                        <p>dijawab oleh <strong style="color: #da251d; font-style: italic;"><?=$s['jawaban_dr'];?></strong>
                        <!-- <small class="text-muted">Senin, 10 Oktober 2018 </small></p> -->
                        <p><?=$s['jawaban'];?></p>
                     </div>
                  <?php
                     break;
               }; ?>
            </div>
         </div>
      <?php }; ?>
</div>
<!-- ./end-of-suara-anda-slider -->