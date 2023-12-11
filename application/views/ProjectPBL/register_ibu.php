                <div class="mb-md-5 mt-md-4 pb-2">
                    <div class="mb-5">
                        <h2 class="font_poppins fw-bold mb-2 text-uppercase">Daftar akun ibu</h2>
                    </div>
                    <!-- <p class="text-black mb-5">Masukkan NIK </p> -->
                    <form action="<?php echo base_url('auth/regis_ibu') ?>" method="post">

                <div class="mb-4 text-start">
                    <input type="text" id="nama" class="form-control" 
                    placeholder="Nama Ibu" name="nama" value="<?= set_value('nama') ?>">
                    <?= form_error('nama','<small class="text-danger" pl-5>','</small>') ?> 
                </div>
                
                <div class="mb-4 text-start">
                    <input type="text" class="form-control"
                    placeholder="NIK" name="nik" value="<?= set_value('nik') ?>">
                    <?= form_error('nik','<small class="text-danger pl-5">','</small>') ?>
                </div>
                
                <div class="mb-4 text-start">
                    <input type="password" id="password" class="form-control" 
                    placeholder="Password" name="password">
                    <?= form_error('password','<small class="text-danger pl-5">','</small>') ?> 
                </div>
                

                <button type="submit" class="button">Daftar</button>
                </div>

                <div>
                <p class="mb-0">Sudah Punya akun? <a href="<?php echo base_url('auth') ?>" class="link">Sign In</a>
                </p>
                </div>
                </form>

            </div>
            </div>
        </div>
        </div>
    </div>
    </section>  
