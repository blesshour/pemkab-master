<?=$this->layout('index');?>
<style>
    nav, #bottom, footer {
        display: none;
    }

    #error, .overlay {
        position: absolute;
        left: 0 !important;
        top: 0;
        width: 100%;
        height: 100%;
        display: flex !important;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -webkit-box-pack: center;
        justify-content: center;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
    }

   .overlay {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        vertical-align: middle;
        padding: 30px;
        text-align: center; 
    }

    h1 {
        font-size: 50px;
        color: #fff;
    }

    
</style>

<section class="window-height" id="error" style="background-image: url(<?=$this->asset('/images/logominahasa.png')?>)">
    <div class="overlay">
        <div class="container">
            <h1>404</h1>
            <p><?=$this->e($front_404_text);?></p>
            <a class="btn btn-primary" href="<?=BASE_URL;?>">Kembali ke-Beranda</a>
        </div>
    </div>
</section><!--/#error-->
