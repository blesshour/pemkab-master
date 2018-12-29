<section id="bottom">
    <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <ul>
                        <li>
                            <address>
                                <?=htmlspecialchars_decode($this->pocore()->call->posetting[8]['value']);?>
                            </address>
                        </li>
                        <li>
                           <abbr title="Phone Number"><strong>Phone:</strong></abbr> <?=$this->pocore()->call->posetting[6]['value'];?><br>
                            <abbr title="Fax"><strong>Fax:</strong></abbr> <?=$this->pocore()->call->posetting[7]['value'];?><br>
                            <abbr title="Email Address"><strong>Email:</strong></abbr> <?=$this->pocore()->call->posetting[5]['value'];?>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
            <!--/.col-md-3-->
            

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Link Pintas</h3>
                    
                        <?php
                         echo $this->menu()->getFrontMenu(WEB_LANG, 'class="nav navbar-nav"', 'class="dropdown"', 'class="dropdown-menu"');
                         ?>
                    
                    <br>
                </div>
            </div>
            <!--/.col-md-3-->
            

            <div class="col-md-3 col-sm-6">
                <div class="widget">
                    <h3>Berita Populer</h3>
                    <ul>

                    <?php
                        $populars_side = $this->post()->getPopular('3', 'DESC', WEB_LANG_ID);
                        foreach($populars_side as $popular_side){
                    ?>
                        <li><a href="<?=BASE_URL;?>/detailpost/<?=$popular_side['seotitle'];?>">
                            <?=$popular_side['title'];?> <br>
                            <small class = "text-muted"><?=$this->pocore()->call->podatetime->tgl_indo($popular_side['date']);?> - oleh <?=$this->post()->getAuthorName($popular_side['editor']);?></small>
                        </a></li>
                        <hr>
                    <?php } ?>

                    </ul>
                    <br>
                </div>
            </div>
            <!--/.col-md-3-->
            

            <div class="col-md-3 col-sm-6">
                <div class="widget" id="nomor-telepon-penting">
                    <h3>Nomor Telepon Penting</h3>
                    <ul>
                        <li><strong>Pemadam Kebakaran:</strong> <br> 0812 3456 7890</li>
                        <li><strong>Ambulans:</strong> <br> 0812 3456 7890 </li>
                        <li><strong>Polres Minahasa:</strong> <br> 0812 3456 7890</li>
                        <li><strong>Rumah Sakit:</strong> <br> 0812 3456 7890</li>
                        <li><strong>Disdukcapil:</strong> <br> 0812 3456 7890</li>
                    </ul>
                    <br>
                </div>
            </div>
            <!--/.col-md-3-->
        </div>              

    </div>
</section>
<!--/#bottom-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            2018 &copy; Gratification Monkeys 
            </div>
            <div class="col-sm-6">
                <ul class="pull-right cremail">
                    <li>
                        admin@mail.com
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->
