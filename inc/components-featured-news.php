<section class="" id="featured-news">
   <div class="container">
        <div class="center fadeInDown">
            <h2>INFO & BERITA</h2>
        </div>

        <div class="row">
            <div class="col-sm-6 bigtwo">
                <div class="news2 owl-carousel">
                <?php
                    $post_by_categorys = $this->post()->getPostByCategory('1', '5', 'DESC', WEB_LANG_ID);
                    foreach($post_by_categorys as $list_post){
                        $post_category = $this->category()->getCategory($list_post['id_post'], WEB_LANG_ID);
                ?>
                    <div class="item post-slide">
                        <div class="post-img sbs-slide">
                            <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$list_post['picture'];?>" alt="">
                            <div class="cat-badge">
                               <h4><span class="label label-warning"><?=$post_category;?></span></h4>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>"><?=$list_post['title'];?></a></h3>
                            <ul class="post-bar list-inline">
                                <li><i class="fa fa-calendar"></i> <?=$this->pocore()->call->podatetime->tgl_indo($list_post['date']);?></li>
                                <li>
                                    <i class="fa fa-folder"></i>
                                    <?=$this->post()->getCountComment($list_post['id_post']);?>
                                    <i class="fa fa-folder"></i>
                                    <?=$list_post['hits'];?>
                                </li>
                            </ul> 
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            <div class="col-sm-6 bigtwo">
                <div class="news2 owl-carousel">
                <?php
                    $post_by_categorys = $this->post()->getPostByCategory('5', '5', 'DESC', WEB_LANG_ID);
                    foreach($post_by_categorys as $list_post){
                        $post_category = $this->category()->getCategory($list_post['id_post'], WEB_LANG_ID);
                ?>
                    <div class="item post-slide">
                        <div class="post-img sbs-slide">
                            <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$list_post['picture'];?>" alt="">
                            <div class="cat-badge">
                               <h4><span class="label label-warning"><?=$post_category;?></span></h4>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title"><a href="<?=BASE_URL;?>/detailpost/<?=$list_post['seotitle'];?>"><?=$list_post['title'];?></a></h3>
                            <ul class="post-bar list-inline">
                                <li><i class="fa fa-calendar"></i> <?=$this->pocore()->call->podatetime->tgl_indo($list_post['date']);?></li>
                                <li>
                                    <i class="fa fa-folder"></i>
                                    <?=$this->post()->getCountComment($list_post['id_post']);?>
                                    <i class="fa fa-folder"></i>
                                    <?=$list_post['hits'];?>
                                </li>
                            </ul> 
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
                </div>
            </div>
            

        </div>
        <!-- /.endrow -->
        <div class="text-center">
            <a href="berita.php" class="btn btn-primary">Lihat lebih banyak</a>
        </div>
    </div>
    <!--/.container-->
</section>
