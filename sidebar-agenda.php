<!-- Fluid width widget -->        
<div class="panel panel-danger" id="agenda">
    <div class="panel-heading">
        <h5 class="panel-title">
            <span class="glyphicon glyphicon-calendar"></span> 
            Calendar Events
        </h5>
    </div>
    <div class="panel-body">
        <?php
         $events = $this->pocore()->call->podb->from('event')
            ->where('tampilkan', 'Y')
            ->orderBy('id_event DESC')
            ->limit(3)
            ->fetchAll();
            foreach ($events as $event){
        ?>
        <ul class="media-list">
            <li class="media">
                <div class="media-left">
                    <div class="panel panel-danger text-center date start pull-left">
                        <div class="panel-heading month">
                            <span class="panel-title strong">Mulai</span>
                        </div>
                        <div class="panel-body day text-danger">
                            <h6><?=$event['date_mulai'];?></h6>
                        </div>
                    </div>
                    <div class="panel panel-danger text-center date end pull-right">
                        <div class="panel-heading month">
                            <span class="panel-title strong">Berakhir</span>
                        </div>
                        <div class="panel-body day text-danger">
                            <h6><?=$event['date_akhir'];?></h6>
                        </div>
                    </div>
                </div>
                <div class="media-body text-center panel-padding">
                    <h4 class="media-heading"><?=$event['nama_event'];?></h4>
                    <p><?=$event['desc_event'];?></p>
                </div>
            </li>
        </ul>
        <hr>
    <?php } ?>
        <!-- <a href="#" class="btn btn-default btn-block">More Events »</a> -->
    </div>
</div>
<!-- End fluid width widget --> 
