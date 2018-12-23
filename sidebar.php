<div class="widget categories">
    <h3><?=$this->e($front_categories);?></h3>
    <div class="row">
        <div class="col-sm-6">
            <ul class="blog_category">
                <?php
                $categorys_side = $this->category()->getAllCategory(WEB_LANG_ID);
                foreach($categorys_side as $category_side){
                    ?>
                    <li><a href="<?=BASE_URL;?>/category/<?=$category_side['seotitle'];?>"><?=$category_side['title'];?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>                     
</div><!--/.categories-->

        <div class="widget tags">
            <h3><?=$this->e($front_tag);?></h3>
            <ul class="tag-cloud">
                <?=$this->post()->getAllTag('RAND()', '30', '&nbsp;', true, '<li>', '</li>', 'btn btn-xs btn-primary');?>
            </ul>
        </div><!--/.tags-->
        
        <!--sosmed-->
        <div class="sidebar-widgets-wrap clearfix">
        <div class="widget clearfix">
                <div class="col_one_third nobottommargin">
                    <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                        <i class="fa fa-facebook-square fa-2x"></i>
                    </a>
                    <small style="display: block; margin-top: 3px;"><strong><div class="counter counter-inherit"><span data-from="500" data-to="<?=$this->oauth()->getFacebookCount("http://www.popojicms.org");?>" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div></strong>Share</small>
                </div>
                <div class="col_one_third nobottommargin">
                    <a href="#" class="social-icon si-dark si-colored si-twitter nobottommargin" style="margin-right: 10px;">
                        <i class="fa fa-twitter-square fa-2x"></i>
                    </a>
                    <small style="display: block; margin-top: 3px;"><strong><div class="counter counter-inherit"><span data-from="500" data-to="<?=$this->oauth()->getTwitterCount("DwiraSurvivor");?>" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div></strong>Followers</small>
                </div>
                <div class="col_one_third nobottommargin col_last">
                    <a href="#" class="social-icon si-dark si-colored si-youtube nobottommargin" style="margin-right: 10px;">
                        <i class="fa fa-youtube fa-2x"></i>
                    </a>
                    <small style="display: block; margin-top: 3px;"><strong><div class="counter counter-inherit"><span data-from="500" data-to="<?=$this->oauth()->getSubscribeCount();?>" data-refresh-interval="50" data-speed="2500" data-comma="true"></span></div></strong>Subscribe</small>
                </div>
            </div>
            </div>
            <!--sosmed end-->
