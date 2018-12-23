<section class="" id="main-sliders">
   <div class="container">
      <div class="row padding">

         <div class="col-sm-9">
            <div class="pic-slider owl-carousel">
               
               <div class="item">
                  <img class="img-responsive" src="<?=$this->asset('/images/uploads/ror-11.jpg')?>" alt="">
                  <div class="overlay">
                        <div class="item-inner">
                           <a class="preview" href="<?=$this->asset('/images/uploads/ror-11.jpg')?>" rel="prettyPhoto">this is the picture caption, Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, possimus?</a>
                        </div>
                  </div>
               </div>
               <div class="item">
                  <img class="img-responsive" src="<?=$this->asset('/images/uploads/ror-111.jpg')?>" alt="">
                  <div class="overlay">
                        <div class="item-inner">
                           <a class="preview" href="<?=$this->asset('/images/uploads/ror-111.jpg')?>" rel="prettyPhoto">this is the picture caption, Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, possimus?</a>
                        </div>
                  </div>
               </div>

            </div>
         </div>
         <!-- ./end-of-col-sm-9 -->

         <aside class="col-sm-3">
                <!-- Insert Sidebar -->
                <?=$this->insert('sidebar-banners');?>
			</aside> 
         <!-- ./end-of-col-sm-3 -->
    </div>
    <!-- ./end-of-row -->

    <div class="row running-text padding">
        <div class="marquee">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi voluptatum tempore vitae. Sed, aliquam alias. Sint dignissimos accusantium maiores numquam?</p>
        </div>
    </div>
    <!-- ./end-of-row -->

    <div class="row padding">
         <div class="col-sm-12 fadeInDown">
            <div class="hrbanner owl-carousel">
                <div class="item"><img src="<?=$this->asset('/images/uploads/bannernatal.png')?>" alt=""></div>
            </div>
        </div>
        <!-- ./end-of-sm-12 -->
      
    </div>
      <!-- ./end-of-row -->
   </div>
   <!-- ./end-of-container -->
</section>
<!-- ./end-of-main-sliders -->
