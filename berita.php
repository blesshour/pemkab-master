<?=$this->layout('index');?>

<style>
    .breadcrumb {
        background: none;
    }

</style>    

<section class="header-selayang">
   <div class="jumbotron" style="background-image: url(<?=$this->asset('/images/gallery/gallery7.jpg')?>)">
    <div class="container wow fadeIn">
     <h1>Berita</h1>
     <ol class="breadcrumb">
        <li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
        <li class="active"><?=$this->e($page_title);?></li>
    </ol>
    </div>
   </div>
 </section>

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
            </div>
                            
        </div> 
        <!-- ./end-row -->
    </div>
    <!-- end of container -->
</section>
