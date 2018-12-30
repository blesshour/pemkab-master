
<?=$this->layout('index');?>

<!-- MAIN SLIDER -->
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
<!-- AKHIR MAIN SLIDER -->


<!-- SERVICE -->
<section id="service">
    <div class="row text-center">
        <div class="col-xs-6 col-xs-offset-3 service">
          <div class="row">
            <div class="col-xs-4 item" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="service-wrap">
                    <a href="#nomor-telepon-penting">
                        <div class="capt wow fadeInLeft">
                            <h2><span class="icon"><i class="fa fa-phone"></i></span> Nomor Penting</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-4 item" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="service-wrap">
                    <a href="<?=BASE_URL.'/layanan-publik';?>">
                        <div class="capt wow fadeInDown">
                        <h2><span class="icon"><i class="fa fa-handshake-o"></i></span> Layanan Publik</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-4 item" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="service-wrap">
                    <a href="#suara-anda">
                        <div class="capt wow fadeInRight">
                        <h2><span class="icon"><i class="fa fa-commenting"></i></i></span> Suara Anda</h2>
                        </div>
                    </a>
                </div>
            </div>
          </div>
        </div>
      </div>
</section>
<!-- AKHIR SERVICE -->


<!-- FEATURE NEWS -->
<section class="" id="featured-news">
    <div class="row running-text padding">
        <div class="runinfo owl-carousel">
        <?php
            $runinfos = $this->pocore()->call->podb->from('runninginfo')
                ->orderBy('id_runinfo')
                ->fetchAll();
                foreach($runinfos as $runinfo){
        ?>
            <div class="item text-center"><p><span class="label label-warning">NEWS!</span> <?=$runinfo['info'];?></p></div>
        <?php } ?>
        </div>
    </div>
    
    <aside class="col-sm-12 wow zoomIn">
        <?=$this->insert('sidebar-hrbanner');?>
    </aside>

    <div class="container">
        <div class="center fadeInDown">
            <h2>INFO & BERITA</h2>
        </div>

        <div class="row">
            <aside class="col-sm-3 wow fadeInLeft">
                <?=$this->insert('sidebar-banners2');?>
                <?=$this->insert('sidebar-banners');?>
            </aside>
            <div class="col-sm-6 wow zoomIn">
                <div class="row">
                    <div class="col-sm-12 bigtwo">
                        <div class="news2 owl-carousel">
                        <?php
                            $sliders_post = $this->post()->getPost('8', 'DESC', WEB_LANG_ID);
                            foreach($sliders_post as $slider_post){
                                $slider_category = $this->category()->getCategory($slider_post['id_post'], WEB_LANG_ID);
                        ?>
                            <div class="item post-slide">
                                <div class="post-img sbs-slide">
                                    <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>" alt="">
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title"><a href="<?=BASE_URL;?>/detailpost/<?=$slider_post['seotitle'];?>"><?=$slider_post['title'];?></a></h3>
                                    <span id="publish_date" class="fa fa-calendar padding-main">&nbsp;<?=$this->pocore()->call->podatetime->tgl_indo($slider_post['date']);?></span>
                                    <span><a href="#comments" class="fa fa-comment padding-main">&nbsp;<?=$this->post()->getCountComment($slider_post['id_post']);?> <?=$this->e($front_comment);?></a></span>
                                    <a href="#"><i class="fa fa-share-alt"></i> Share </a>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div id="news-slider2" class="owl-carousel">
                            <?php
                                $sliders_post = $this->post()->getPost('10', 'DESC', WEB_LANG_ID);
                                foreach($sliders_post as $slider_post){
                                    $slider_category = $this->category()->getCategory($slider_post['id_post'], WEB_LANG_ID);
                            ?>
                                <div class="post-slide">
                                    <div class="post-img hrslide">
                                        <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>" alt="">
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title"><a href="<?=BASE_URL;?>/detailpost/<?=$slider_post['seotitle'];?>"><?=$slider_post['title'];?></a></h3>
                                        <span id="publish_date" class="fa fa-calendar padding-main">&nbsp;<?=$this->pocore()->call->podatetime->tgl_indo($slider_post['date']);?></span>
                                        <span><a href="#comments" class="fa fa-comment padding-main">&nbsp;<?=$this->post()->getCountComment($slider_post['id_post']);?> <?=$this->e($front_comment);?></a></span>
                                        <a href="#"><i class="fa fa-share-alt"></i> Share </a>  
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <a href="<?=BASE_URL.'/berita';?>" class="btn btn-primary">Lihat lebih banyak</a>
                    </div>          
                </div>
            </div>
            <aside class="col-sm-3 wow fadeInRight">
                <?=$this->insert('sidebar-ann');?>
                <?=$this->insert('sidebar-agenda');?>
            </aside>
        </div>
        <!-- /.endrow -->
    </div>
    <!--/.container-->
</section>
<!-- AKHIR FEATURE NEWS -->


<!-- SI TERPADU -->
<section class="" id="si-terpadu">
   <div class="container">
        <div class="center fadeInDown">
            <h2>SISTEM INFORMASI TERPADU</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="1000ms">
                <div class="box fadeInRight">
                  <a href="">
                     <div class="pull-left icon text-center">
                           <i class="fa fa-cutlery"></i>
                     </div>
                     <div class="caption">
                           <h3>Sistem Informasi</h5>
                           <h2>PANGAN</h2>
                     </div>
                  </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="1500ms">
                <div class="box fadeInRight">
                  <a href="">
                     <div class="pull-left icon col-3 text-center">
                        <i class="fa fa-medkit"></i>
                     </div>
                     <div class="caption col-9">
                           <h3>Sistem Informasi</h5>
                           <h2>KESEHATAN</h2>
                     </div>
                  </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="2000ms">
                <div class="box fadeInRight">
                  <a href="">
                        <div class="pull-left icon col-3 text-center">
                           <i class="fa fa-unlock"></i>
                        </div>
                        <div class="caption col-9">
                           
                                 <h3>Sistem Informasi</h5>
                              <h2>KEAMANAN</h2>
                           
                        </div>
                  </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="2500ms">
                <div class="box fadeInRight">
                  <a href="">
                     <div class="pull-left icon col-3 text-center">
                        <i class="fa fa-ambulance"></i>
                     </div>
                     <div class="caption col-9">
                           <h3>Sistem Informasi</h5>
                           <h2>AMBULANCE</h2>
                     </div>
                  </a>
                </div>
            </div>              
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>
<!-- AKHIR SI TERPADU -->

<!-- SUARA ANDA -->
<section class="wow fadeInDown" id="suara-anda">
   <div class="container wow fadeInDown">
      <div class="center">
         <h2>SUARA ANDA</h2>
         <p>Pengunjung yang terhormat, jika anda memiliki pertanyaan, kritikan, ataupun ucapan untuk Pemerintah Kabupaten Minahasa silahkan berikan "Suara Anda" <a href="<?=BASE_URL.'/suara-anda';?>">disini.</a> 
            <br>
         Apabila anda telah men-submit "Suara Anda" (khusus untuk kategori Pertanyaan), periksa e-mail anda atau kunjungi website Pemerintah Kabupaten Minahsa secara berkala untuk melihat jawaban/balasan dari kami.
            <br>
         Terima Kasih!
         </p>
      </div>
   </div>

   <div class="container wow fadeInDown">
      <?=$this->insert('sidebar-suaraanda');?>
   </div>
   <!-- ./end-of-container-display-suara-anda    -->
</section>
<!-- AKHIR SUARA ANDA -->

<!-- SOCMED -->
<section class="" id="socmed">
   <div class="center wow fadeInDown">
      <h2>Social Media</h2>
   </div>

   <div class="socmed center">
      <ul>
         <li class="wow zoomIn" data-wow-duration="1000ms">
            <a href="#"><i class="logo fa fa-facebook-square  fa-2x" data-wow-duration="1000ms " data-wow-delay="900ms"></i></a>
         </li>
         <li class="wow zoomIn" data-wow-duration="1500ms">
            <a href="#"><i class="logo fa fa-twitter-square fa-2x" data-wow-duration="1500ms " data-wow-delay="900ms"></i></a>
         </li>
         <li class="wow zoomIn" data-wow-duration="2000ms">
            <a href="#"><i class="logo fa fa-instagram fa-2x" data-wow-duration="2000ms " data-wow-delay="900ms"></i></a>
         </li>
         <li class="wow zoomIn" data-wow-duration="2500ms">
            <a href="#"><i class="logo fa fa-google-plus fa-2x" data-wow-duration="2500ms " data-wow-delay="900ms"></i></a>
         </li>
         <li class="wow zoomIn" data-wow-duration="3000ms">
            <a href="#"><i class="logo fa fa-youtube fa-2x" data-wow-duration="3000ms " data-wow-delay="900ms"></i></a>
         </li>
      </ul>
   </div>
</section>
<!-- AKHIR SOCMED -->
