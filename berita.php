<?=$this->layout('index');?>

<section id="berita">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3">
                <!-- Insert Sidebar -->
                <?=$this->insert('sidebar-banners');?>
			</aside> 
            <!-- ./end of col-md-3 (right widgets) -->

            <div class="col-md-6">
                <div class="news2 owl-carousel">
                    <?php
                        $sliders_post = $this->post()->getPost('8', 'DESC', WEB_LANG_ID);
                        foreach($sliders_post as $slider_post){
                            $slider_category = $this->category()->getCategory($slider_post['id_post'], WEB_LANG_ID);
                    ?>
                        <div class="item post-slide">
                            <div class="post-img sbs-slide">
                                <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>" alt="">
                                <div class="cat-badge">
                                <h4><span class="label label-warning"><?=$slider_category;?></span></h4>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title"><a href="<?=BASE_URL;?>/detailpost/<?=$slider_post['seotitle'];?>"><?=$slider_post['title'];?></a></h3>
                                <ul class="post-bar list-inline">
                                    <li><i class="fa fa-calendar"></i> June 5, 2016</li>
                                    <li>
                                        <i class="fa fa-folder"></i>
                                        <a href="#">Mockup</a>
                                        <a href="#">Graphics</a>
                                        <a href="#">Flayers</a>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="row">
                    <?php
                        $sliders_post = $this->post()->getPost('8', 'DESC', WEB_LANG_ID);
                        foreach($sliders_post as $slider_post){
                            $slider_category = $this->category()->getCategory($slider_post['id_post'], WEB_LANG_ID);
                    ?>
                    <div class="col-md-6">
                        <div class="post-slide">
                            <div class="post-img hrslide">
                                <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>" alt="">
                                <div class="cat-badge">
                                <h4><span class="label label-warning"><?=$slider_category;?></span></h4>
                                </div>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title"><a href="<?=BASE_URL;?>/detailpost/<?=$slider_post['seotitle'];?>"><?=$slider_post['title'];?></a></h3>
                                <ul class="post-bar list-inline">
                                    <li><i class="fa fa-calendar"></i> June 5, 2016</li>
                                    <li>
                                        <i class="fa fa-folder"></i>
                                        <a href="#">Mockup</a>
                                        <a href="#">Graphics</a>
                                        <a href="#">Flayers</a>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                    </div>
                    <?php } ?>        
                </div>
            </div>

            <!-- ./end of col-md-6 (main) -->

            <aside class="col-md-3">
                <!-- Insert Sidebar -->
                <?=$this->insert('sidebar');?>
            </aside> 
                            
        </div> 
        <!-- ./end-row -->
    </div>
    <!-- end of container -->
</section>



