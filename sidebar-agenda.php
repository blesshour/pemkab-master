<!-- Fluid width widget -->        
<div class="panel panel-danger">
    <div class="panel-heading">
        <h5 class="panel-title">
            <span class="glyphicon glyphicon-calendar"></span> 
            Calendar Events
        </h5>
    </div>
    <div class="panel-body">
        <?php
         $events = $this->pocore()->call->podb->from('event')
            ->orderBy('id_event')
            ->fetchAll();
            foreach ($events as $event){
        ?>
        <ul class="media-list">
            <li class="media">
                <div class="media-left">
                    <div class="panel panel-danger text-center date">
                        <div class="panel-heading month">
                            <span class="panel-title strong">
                                Tanggal Event
                            </span>
                        </div>
                        <div class="panel-body day text-danger">
                            <h4><?=$event['date_mulai'];?></h4>
                        </div>
                    </div>
                </div>
                <div class="media-body panel-padding">
                    <h4 class="media-heading " >
                      <?=$event['nama_event'];?>
                    </h4>
                    <p>
                        <?=$event['desc_event'];?>
                    </p>
                </div>
            </li>
        </ul>
    <?php } ?>
        <a href="#" class="btn btn-default btn-block">More Events »</a>
    </div>
</div>
<!-- End fluid width widget --> 
