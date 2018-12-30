<?=$this->layout('index');?>

<style>
    .breadcrumb {
        background: none;
    }

</style>    

<section class="header-selayang" id="header-visi-dan-misi">
   <div class="jumbotron" style="background-image: url(<?=$this->asset('/images/gallery/gallery7.jpg')?>)">
    <div class="container wow fadeIn">
     <h1>Galeri</h1>
     <ol class="breadcrumb">
        <li><a href="<?=BASE_URL;?>"><?=$this->e($front_home);?></a></li>
        <li class="active"><?=$this->e($page_title);?></li>
    </ol>
    </div>
   </div>
 </section>


<section id="galeri">
    <div class="container">

        <div class="row">
            <div class="galeri-items">
            <?php
                $gals = $this->pocore()->call->podb->from('galeri')
                    ->orderBy('id_foto DESC')
                    ->fetchAll();
                    foreach($gals as $gal){ 
                        $excp = [6,7,8,9];
                        if (!( $gal['id_album_gal'] == 9 || 
                               $gal['id_album_gal'] == 8 || 
                               $gal['id_album_gal'] == 7 || 
                               $gal['id_album_gal'] == 6 ) ) {
            ?>
                <div class="galeri-item apps col-xs-12 col-sm-4 col-md-3 single-work">
                    <div class="recent-work-wrap">
                        <img class="img-responsive" src="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['file_foto'];?>" alt="">
                        <div class="overlay">
                            <div class="recent-work-inner">
                                <a class="preview" href="<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['file_foto'];?>" rel="prettyPhoto"><?=$gal['caption'];?></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.galeri-item-->
            <?php } 
             } ?>
            </div>
        </div>
    </div>
</section>
