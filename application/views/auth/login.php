
        <a href="#" class="back-link">
            <i class="bi bi-arrow-left"></i>
            Kembali ke Beranda
        </a>

        <div class="login-card">
            <div class="icon-container">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <h1>Login Portal Layanan Akademik</h1>
            <p class="subtitle">STAIN Sultan Abdurrahman Kepulauan Riau</p>
            
            <?php echo $this->session->flashdata('message');?>
            
            <form action="<?php echo base_url('auth')?>" method="post">
                <div class="form-group">
                    <label for="username">Username / NIM / NIP</label>
                    <input type="text" name="username" id="username" placeholder="Masukkan username Anda" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input type="password" name="password" id="password" placeholder="Masukkan password Anda" required>
                    </div>
                </div>
                <button type="submit" class="btn-login">Masuk</button>
            </form>

            <!-- <div class="extra-links">
                <a href="#">Lupa Password?</a>
                <p class="mt-2">Belum punya akun? <a href="#">Daftar di sini</a></p>
            </div> -->
        </div>

        <p class="support-link">
            Untuk bantuan teknis, hubungi: <a href="mailto:akademik@stainkepri.ac.id">akademik@stainkepri.ac.id</a>
        </p>
    </main>
