<?=$this->layout('index');?>

<div class="container-fluid">
    <div class="page-title">
        <h1>Galeri</h1>
    </div>
</div>

<section id="galeri">
    <div class="container">
        <!--/#galeri-filter-->
        
        <div class="row">
            <div class="galeri-items">
            <?php
                $albums = $this->gallery()->getAlbum('8', 'id_album ASC', $this->e($page));
                foreach($albums as $alb){
            ?>
                <div class="galeri-item apps col-xs-12 col-sm-4 col-md-3 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$alb['picture'];?>" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$alb['picture'];?>" rel="prettyPhoto"><?=$alb['title'];?></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.galeri-item-->
            <?php } ?>
            </div>
        </div>
    </div>
</section>
