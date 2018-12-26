<div class="widget tags">
    <h3><?=$this->e($front_tag);?></h3>
    <ul class="tag-cloud">
        <?=$this->post()->getAllTag('RAND()', '30', '&nbsp;', true, '<li>', '</li>', 'btn btn-xs btn-primary');?>
    </ul>
</div><!--/.tags-->

<!--sosmed-->
        <div class="sidebar-widgets-wrap clearfix">
        <div class="widget clearfix">
            <div class="row">
                <div class="col-xs-4">
                    <div align="center">
                    <a href="#" class="nobottommargin">
                        <i class="fa fa-facebook-square fa-2x"></i>
                    </a>
                    </div>

                    <div align="center">
                        <small style="display: block; margin-top: 3px; text-align: center;"><strong><div class="counter counter-inherit"><span data-from="500" data-to="<?=$this->oauth()->getFacebookCount("http://www.popojicms.org");?>" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div></strong>Share</small>
                    </div>
                </div>

                <div class="col-xs-4">
                    <div align="center">
                    <a href="#" class="nobottommargin">
                        <i class="fa fa-twitter-square fa-2x"></i>
                    </a>
                    </div>

                    <div>
                        <small style="display: block; margin-top: 3px; text-align: center;"><strong><div class="counter counter-inherit"><span data-from="500" data-to="<?=$this->oauth()->getTwitterCount("DwiraSurvivor");?>" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div></strong>Followers</small>
                    </div>
                </div>

                <div class="col-xs-4 col_last">
                    <div align="center">
                    <a href="#" class="nobottommargin">
                        <i class="fa fa-youtube fa-2x"></i>
                    </a>
                    </div>

                    <div>
                        <small style="display: block; margin-top: 3px; text-align: center;"><strong><div class="counter counter-inherit"><span data-from="500" data-to="<?=$this->oauth()->getSubscribeCount();?>" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div></strong>Subscribe</small>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <!--sosmed end-->
