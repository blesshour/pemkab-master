<?=$this->layout('index');?>
<div class="container-fluid berita-title">
    <div class="page-title">
        <h1>BERITA & INFO</h1>
    </div>
<div>
    
<section id="berita">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
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

                <div class="row">
                    <?php
                        $sliders_post = $this->post()->getPost('8', 'DESC', WEB_LANG_ID);
                        foreach($sliders_post as $slider_post){
                    ?>
                    <div class="col-sm-12 item">
                        <div class="post-slide12">
                            <div class="row">
                                <div class="col-sm-4 col-xs-12 post-img">
                                    <img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$slider_post['picture'];?>" alt="">
                                </div>
                                <div class="col-sm-8 col-xs-12 post-review">
                                    <h3 class="post-title"><a href="<?=BASE_URL;?>/detailpost/<?=$slider_post['seotitle'];?>"><?=$slider_post['title'];?></a></h3>
                                    <span id="publish_date" class="fa fa-calendar padding-main">&nbsp;<?=$this->pocore()->call->podatetime->tgl_indo($slider_post['date']);?></span>
                                    <span><a href="#comments" class="fa fa-comment padding-main">&nbsp;<?=$this->post()->getCountComment($slider_post['id_post']);?> <?=$this->e($front_comment);?></a></span>
                                    <a href="#"><i class="fa fa-share-alt"></i> Share </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php } ?>        
                </div>
            </div>

            <!-- ./end of col-sm-6 (main) -->

            <aside class="col-sm-4">
                <!-- Insert Sidebar -->
                <?=$this->insert('sidebar-recent-post');?>
                <?=$this->insert('sidebar-ann');?>
                <?=$this->insert('sidebar');?>
            </aside> 

            <!-- <div class="col-sm-12 text-center">
                <ul class="pagination pagination-lg">
                    <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                </ul> -->
                <!--/.pagination-->
            </div>
                            
        </div> 
        <!-- ./end-row -->
    </div>
    <!-- end of container -->
</section>



