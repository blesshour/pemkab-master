<?=$this->layout('index');?>

<div class="page-title">
    <h1>Suara Anda</h1>
</div>

<section id="page-suara-anda">
    <div class="container">
        <div class="row contact-wrap">
            <div class="col-md-6 col-sm-12">
            <?=htmlspecialchars_decode($this->e($alertmsg));?>
            <form class="nobottommargin" id="template-contactform" name="template-contactform" action="<?=BASE_URL;?>/tanyajawab" method="post">
					<div class="col_one_third">
						<label for="template-contactform-name"><?=$this->e($contact_name);?> <small>*</small></label>
						<input type="text" id="template-contactform-name" name="contact_name" value="<?=(isset($_POST['contact_name']) ? $_POST['contact_name'] : '');?>" class="sm-form-control required" />
					</div>
					<div class="col_one_third">
						<label for="template-contactform-email"><?=$this->e($contact_email);?> <small>*</small></label>
						<input type="email" id="template-contactform-email" name="contact_email" value="<?=(isset($_POST['contact_email']) ? $_POST['contact_email'] : '');?>" class="required email sm-form-control" />
					</div>
					<div class="col_one_third col_last">
						<label for="template-contactform-subject"><?=$this->e($contact_subject);?> <small>*</small></label>
						<select class="required sm-form-control" id="template-contactform-subject" name="contact_subject">
							<option value="">-Pilih Jenis-</option>
							<option value="pertanyaan">Pertanyaan</option>
							<option value="pengaduan">Pengaduan</option>
							<option value="kritiksaran">Kritik dan Saran</option>
							<option value="ucapanselamat">Ucapan Selamat</option>
							<option value="lainnya">Lainnya</option>
							</select>

						<!--<input type="text" id="template-contactform-subject" name="contact_subject" value="<?=(isset($_POST['contact_subject']) ? $_POST['contact_subject'] : '');?>" class="required sm-form-control" />-->
					</div>
					<div class="clear"></div>
					<div class="col_full">
						<label for="template-contactform-message"><?=$this->e($contact_message);?> <small>*</small></label>
						<textarea class="required sm-form-control" id="template-contactform-message" name="contact_message" rows="6" cols="30"><?=(isset($_POST['contact_message']) ? $_POST['contact_message'] : '');?></textarea>
					</div>
					<div class="col_full hidden">
						<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
					</div>
					<div class="col_full">
						<button class="button button-3d nomargin" type="submit" id="template-contactform-submit" name="contact_submit" value="submit">Kirim</button>
					</div>
				</form>
				<script type="text/javascript">
					$("#template-contactform").validate();
				</script>

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

