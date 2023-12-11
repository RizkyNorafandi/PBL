                <div class="mb-md-5 mt-md-4 pb-2">
                    <div class="mb-5">
                        <h2 class="font_poppins fw-bold mb-2 text-uppercase">Daftar akun Anak</h2>
                    </div>
                    <form action="<?php echo base_url('auth/regis_anak') ?>" method="post">
                    <div class="mb-4 text-start">
                        <input type="text" id="nama" class="form-control" 
                        placeholder="Nama Anak" name="nama" value="<?= set_value('nama')  ?>">
                        <div id="nama" class="form-text text-black">
                        <?= form_error('nama','<small class="text-danger" pl-5>','</small>') ?> 
                        </div>
                    </div>

                    <div class="mb-4 text-start">
                        <input type="text" class="form-control"
                        placeholder="NIK" name="nik" value="<?= set_value('nik')  ?>">
                        <div id="nama" class="form-text text-black">
                        <?= form_error('nik','<small class="text-danger" pl-5>','</small>') ?> 
                    </div>
                </div>
                
                <div class="mb-4 text-start">
                    <input type="password" id="password" class="form-control" 
                    placeholder="Password" name="password">
                    <div id="nama" class="form-text text-black">
                    <?= form_error('password','<small class="text-danger" pl-5>','</small>') ?> 
                    </div>
                </div>

                <div class="mb-5 row">
                    <div class="col-md-6 text-start">
                        <input type="text" class="form-control"
                        placeholder="Berat Badan" name="berat_badan"  value="<?= set_value('berat_badan')  ?>">
                        <div id="nama" class="form-text text-black">
                        <?= form_error('berat_badan','<small class="text-danger" pl-5>','</small>') ?>
                        </div>
                    </div>

                    <div class="col-md-6 text-start">
                        <!-- <label class="form-label">Tinggi Badan</label> -->
                        <input type="text" class="form-control"
                        placeholder="Tinggi Badan" name="tinggi_badan" value="<?= set_value('tinggi_badan')?>">
                        <div id="nama" class="form-text text-black">
                        <?= form_error('tinggi_badan','<small class="text-danger" pl-5>','</small>') ?>
                        </div>  
                    </div>
                </div>

                <button type="submit" class="button">Daftar</button>
                </div>

                <div>
                    <p class="mb-0">Sudah Punya akun? <a href="<?php echo base_url('auth') ?>" class="link">Sign In</a></p>
                </div>
                </form>

            </div>
            </div>
        </div>
        </div>
    </div>
</section>  
