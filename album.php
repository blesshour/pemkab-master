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
                $gallerys = $this->gallery()->getGallery('12', 'id_gallery', $album, $this->e($page));
                foreach($gallerys as $gal){
            ?>
                <div class="galeri-item apps col-xs-12 col-sm-4 col-md-3 single-work">
                    <div class="recent-work-wrap">
                        <a href="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['picture'];?>">
							<img src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['picture'];?>" alt="<?=$gal['title'];?>">
                        </a>                        
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['picture'];?>" rel="prettyPhoto"><?=$gal['title'];?></i></a>
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
