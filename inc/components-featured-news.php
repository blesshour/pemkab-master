
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
