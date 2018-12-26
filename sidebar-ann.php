<!-- Fluid width widget -->        
<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title text-center">
            PENGUMUMAN
        </h3>
    </div>
    <div class="sidebar-ann owl-carousel owl-theme">
     <?php
         $anns = $this->pocore()->call->podb->from('pengumuman')
             ->orderBy('id_pengumuman')
             ->fetchAll();
         foreach($anns as $ann){
     ?>
        <div class="single-slide">
            <div class="fadeInRight">
                <small class="text-muted"><?=$ann['date'];?></small></p>
                <p><?=$ann['pengumuman'];?></p>
            </div>
        </div>
     <?php } ?>
    </div>
</div>
<!-- End fluid width widget -->