<?=$this->layout('index');?>

<section id="page-suara-anda">
    <div class="page-title">
        <h1>Suara Anda</h1>
        <div class="status alert alert-success" style="display: none" role="alert">
        </div>
    </div>
    <div class="container">
        <div class="row contact-wrap">
            <div class="col-md-6 col-sm-12">
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="form-group">
                        <label>Nama *</label>
                        <input type="text" name="name" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kategori Suara Anda *</label>
                        <select type="text" name="category" class="form-control" required="required">
                            <option>Pertanyaan</option>
                            <option>Kritikan</option>
                            <option>Saran</option>
                            <option>Ucapan</option>
                            <option>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                    </div>                        
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                    </div>
                </form>
            </div>
            
            <div class="col-md-6 col-sm-12 display">
                <div class="suara-anda-slider owl-carousel owl-theme">
                    <div class="single-slide">
                        <div class="box fadeInRight">
                        <div class="q">
                            <p>dari <strong>John Doe</strong>
                            <small class="text-muted">kategori: Pertanyaan || Senin, 10 Oktober 2018 </small></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, maxime?</p>
                        </div>
                        <hr>
                        <div class="a">
                            <p>dijawab oleh <strong>Admin</strong>
                            <small class="text-muted">Senin, 10 Oktober 2018 </small></p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex architecto quas provident quia perspiciatis commodi ipsum quaerat autem est sequi.</p>
                        </div>
                        </div>
                    </div>

                    <div class="single-slide">
                        <div class="box fadeInRight">
                            <p>dari <strong>Gloria Borger</strong>
                            <small class="text-muted">kategori: Kritikan || Senin, 10 Oktober 2018 </small></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quos atque eveniet. Vitae distinctio, numquam laboriosam nisi ullam ipsam. Magni, dolorem adipisci illum nostrum incidunt voluptatibus rem accusantium distinctio sit!</p>
                        </div>
                    </div>

                    <div class="single-slide">
                        <div class="box fadeInRight">
                            <p>dari <strong>Susan Tong</strong>
                            <small class="text-muted">kategori: Ucapan Selamat || Senin, 10 Oktober 2018 </small></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam suscipit asperiores qui minus exercitationem recusandae.</p>
                        </div>
                    </div> 
                </div>
                <!-- ./end-of-suara-anda-slider -->
            
            </div>
        </div>
    </div><!--/.container-->
</section>

