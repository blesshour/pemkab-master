<!-- Begin fluid width widget -->
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">
            <span class="glyphicon glyphicon-list-alt"></span> Berita Terkiini
        </h3>
    </div>
    <div class="panel-body">
        <ul class="media-list">
            <li class="media">
                <div class="media-body">
                    <?php
                        $recents_side = $this->post()->getRecent('3', 'DESC', WEB_LANG_ID);
                        foreach($recents_side as $recent_side){
                    ?>

                    <h4 class="media-heading">
                                    <a href="#" class="text-info">
                                        <?=$recent_side['title'];?>
                                    </a>
                                </h4>
                    <p class="margin-top-10 margin-bottom-20">
                        <?=$this->post()->getAuthorName($recent_side['editor']);?>
                    </p>
                    <p class="margin-top-10 margin-bottom-20">
                        <?=$this->pocore()->call->podatetime->tgl_indo($recent_side['date']);?>
                    </p>
                    <?php } ?>
                </div>
            </li>
        </ul>
        <a href="<?=BASE_URL.'/berita';?>" class="btn btn-default btn-block">Lihat lebih banyak »</a>
    </div>
</div>
<!-- End fluid width widget -->
</div>
