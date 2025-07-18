    <main>
        <section class="hero-banner">
            <h2>Berita & Informasi</h2>
            <p>Dapatkan informasi terkini seputar kegiatan akademik dan kemahasiswaan STAIN KEPRI</p>
        </section>

        <section class="news-content">
            <div class="search-filter-container">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Cari berita...">
                </div>
                <div class="filter-tags">
                    <button class="active"><i class="fa-solid fa-tag"></i>Semua</button>
                    <button><i class="fa-solid fa-tag"></i>Pendaftaran</button>
                    <button><i class="fa-solid fa-tag"></i>Wisuda</button>
                    <button><i class="fa-solid fa-tag"></i>Seminar</button>
                    <button><i class="fa-solid fa-tag"></i>KKN</button>
                    <button><i class="fa-solid fa-tag"></i>Akademik</button>
                </div>
            </div>

            <div class="news-grid">
                <article class="news-card">
                    <div class="card-image-placeholder"><i class="fa-solid fa-image"></i></div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="card-date"><i class="fa-solid fa-calendar-days"></i> 15/1/2024</span>
                            <span class="card-tag">Pendaftaran</span>
                        </div>
                        <h3 class="card-title">Penerimaan Mahasiswa Baru Tahun Akademik 2024/2025</h3>
                        <p class="card-excerpt">STAIN KEPRI membuka pendaftaran mahasiswa baru dengan berbagai program studi unggulan untuk tahun akademik 2024/2025.</p>
                        <div class="card-footer">
                            <span>By Admin Akademik</span>
                            <a href="<?php echo base_url('berita/detailberita')?>" class="read-more-link">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>

                <article class="news-card">
                    <div class="card-image-placeholder"><i class="fa-solid fa-image"></i></div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="card-date"><i class="fa-solid fa-calendar-days"></i> 10/1/2024</span>
                            <span class="card-tag">Wisuda</span>
                        </div>
                        <h3 class="card-title">Wisuda Sarjana Periode Genap 2023/2024</h3>
                        <p class="card-excerpt">Selamat kepada 150 mahasiswa yang telah menyelesaikan studi dan akan diwisuda pada ceremoni wisuda periode genap.</p>
                        <div class="card-footer">
                            <span>By Humas STAIN</span>
                            <a href="#" class="read-more-link">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>
                
                <article class="news-card">
                    <div class="card-image-placeholder"><i class="fa-solid fa-image"></i></div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="card-date"><i class="fa-solid fa-calendar-days"></i> 5/1/2024</span>
                            <span class="card-tag">Seminar</span>
                        </div>
                        <h3 class="card-title">Seminar Nasional Kewirausahaan Digital di Era 5.0</h3>
                        <p class="card-excerpt">Mengundang para pakar untuk membahas tantangan dan peluang kewirausahaan di tengah perkembangan teknologi digital.</p>
                        <div class="card-footer">
                            <span>By BEM STAIN</span>
                            <a href="#" class="read-more-link">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </main>

</body>
</html>