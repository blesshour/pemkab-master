    <section id="headslider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#headslider" data-slide-to="0" class="active"></li>
                <li data-target="#headslider" data-slide-to="1"></li>
                <li data-target="#headslider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <?php
                $gals = $this->pocore()->call->podb->from('galeri')
                    ->orderBy('id_foto DESC')
                    ->fetchAll();
                    foreach($gals as $gal){ ?>

                <div class="item" style="background-image: url(<?=BASE_URL;?>/<?=DIR_CON;?>/uploads/<?=$gal['file_foto'];?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">
                                    <!-- <h1 class="animation animated-item-1">Help Finding Information Online</h1> -->
                                    <div class="animation animated-item-1">
                                        Every new computer that’s brought home from the store has an operating system installed onto it.
                                    </div>
                                    <!-- <a class="btn-slide animation animated-item-" href="#">Learn More</a> -->
                                    <!-- <a class="btn-slide white animation animated-item-3" href="#">Get Started</a> -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!--/.item-->
            <?php } ?>
            </div>
            <!--/.carousel-inner-->
        </div>
        <!--/.carousel-->
        <a class="prev hidden-xs hidden-sm" href="#headslider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs hidden-sm" href="#headslider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <!--/#headslider-->