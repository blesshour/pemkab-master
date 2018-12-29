<!-- Fluid width widget -->        
<div class="panel panel-danger">
    <div class="panel-heading">
        <h5 class="panel-title">
            <span class="glyphicon glyphicon-exclamation-sign"></span> 
            Pengumuman
        </h5>
    </div>
    <div class="sidebar-ann owl-carousel owl-theme">
     <?php
         $anns = $this->pocore()->call->podb->from('pengumuman')
             ->where('tampilkan', 'Y')
             ->orderBy('id_pengumuman DESC')
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