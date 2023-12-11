

<!-- Content -->
                <div class="mb-md-5 mt-md-4 pb-2">
                <h2 class="font_poppins fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-black mb-5">Masukkan NIK dan Password anda</p>

                

                <form action="<?php echo base_url('auth')?>" method="post">
                    <?= $this->session->flashdata('message')?>
                    <div class="mb-4 text-start">
                        <input type="text" class="form-control"
                        placeholder="NIK" name="nik" value="">
                        <?= form_error('nik', '<small class="text-danger pl-5">','</small>') ?>
                        <div id="nik" class="form-text text-black">
                        
                        </div>
                    </div>

                    <div class="mb-4 text-start">   
                        <input type="password" id="password" class="form-control" 
                        placeholder="Password" name="password">
                        <?= form_error('password', '<small class="text-danger pl-5">','</small>') ?>
                        <div id="password" class="form-text text-black">
                        
                        </div>
                    </div>

                    <button type="submit" class="button">Login</button>
                    </div>

                    <div>
                        <p class="mb-0">Don't have an account? <a href="<?php echo base_url('auth/register')?>" class="link">Sign Up</a></p>
                    </div>
                </form>
<!-- End Content -->

            </div>
            </div>
        </div>
        </div>
    </div>
    </section>  
