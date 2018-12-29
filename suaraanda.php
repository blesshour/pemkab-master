<?=$this->layout('index');?>
<div class="page-title">
    <h1>Suara Anda</h1>
</div>
<section id="page-suara-anda">
    <div class="container">
        <div class="row suaraanda-wrap">
            <div class="col-md-6 col-sm-12">
                <?=htmlspecialchars_decode($this->e($alertmsg));?>
                <form id="main-suaraanda-form" class="suaraanda-form" name="main-suaraandaform" action="<?=BASE_URL;?>/suaraanda" method="post">
                    <div class="form-group">
                        <label for="nama" >Nama *</label>
                        <input type="text" name="nama" id="nama" value="<?=(isset($_POST['nama']) ? $_POST['nama'] : '');?>" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="text" name="email" id="email" value="<?=(isset($_POST['email']) ? $_POST['email'] : '');?>" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="telp">Nomor Telepon</label>
                        <input type="text" name="telp" id="telp" value="<?=(isset($_POST['telp']) ? $_POST['telp'] : '');?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori Suara Anda *</label>
						<select class="form-control" id="kategori" name="kategori" required="required">
                            <option value="">-Pilih Jenis-</option>
                            <?php
                                $kat_sas = $this->pocore()->call->podb->from('kategori_sa')
                                    ->orderBy('id_kategori_sa')
                                    ->fetchAll();
                                    foreach($kat_sas as $kat_sa){
                            ?>
                            <option value="<?=$kat_sa['id_kategori_sa'];?>"><?=$kat_sa['kategori_sa'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="suaraanda">Suara Anda *</label>
                        <textarea name="suaraanda" id="suaraanda" required="required" class="form-control" rows="8"><?=(isset($_POST['suaraanda']) ? $_POST['suaraanda'] : '');?></textarea>
                    </div>
                    <div class="col_full hidden">
						<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
					</div>                        
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" type="submit" name="suaraanda_submit" value="submin" id="suaraandaform-submit">Kirim</button>
                    </div>
                </form>
                <script type="text/javascript">
					$("#main-suaraanda-form").validate();
				</script>
            </div>
            
            <div class="col-md-6 col-sm-12 display">
                <?=$this->insert('sidebar-suaraanda');?>        
            </div>
        </div>
    </div><!--/.container-->
</section>

