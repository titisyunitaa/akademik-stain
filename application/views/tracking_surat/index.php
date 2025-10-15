<main>
    <section class="hero-banner">
        <h2>Tracking Surat</h2>
        <p>Pantau status pengajuan surat Anda secara real-time. Masukkan nomor resi untuk melihat progress dan estimasi selesai.</p>
    </section>
</main>
    
    <div class="container tracking-container my-5">
        <div class="tracking-card mb-5">
            <h2 class="h4 card-title"><i class="bi bi-search"></i>Lacak Status Surat</h2>
            <p class="card-subtitle">Masukkan nomor resi yang Anda terima saat pengajuan surat</p>
            <hr class="my-4">
            <form id="trackingForm">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <label for="nomorResi" class="form-label" name ="">Nomor Resi</label>
                    </div>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" id="nomorResi" placeholder="Contoh: STK-2024-001234" required>
                            <button class="btn btn-primary btn-lg btn-track" type="submit">
                                <i class="bi bi-search me-1"></i> Lacak
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="text-end mt-2">
                <a href="<?php echo base_url('tracking/cari_resi')?>" class="btn-lupa-resi-link">
                    <i class="bi bi-question-circle"></i>
                    <span>Lupa Nomor Resi?</span>
                </a>
            </div>
        </div>

        <div id="statusResult" class="status-card d-none">
            <div class="status-header">
                
                <h3 id="statusTitle"></h3>
                <p id="statusSubtitle"></p>
            </div>
            
            <ul class="timeline">
                <li class="timeline-item is-done">
                    <div class="timeline-icon"><i class="bi bi-check-lg"></i></div>
                    <div class="timeline-content">
                        <h4 class="title">Pengajuan Diterima</h4>
                        <div class="date">15 Juli 2025, 10:30 WIB</div>
                        <p class="description">Dokumen telah diterima dan memenuhi persyaratan</p>
                    </div>
                </li>
                <li class="timeline-item is-done">
                    <div class="timeline-icon"><i class="bi bi-arrow-repeat"></i></div>
                    <div class="timeline-content">
                        <h4 class="title">Sedang Diproses</h4>
                        <div class="date">16 Juli 2025, 09:00 WIB</div>
                        <p class="description">Surat sedang dalam tahap pembuatan dan verifikasi</p>
                    </div>
                </li>
                <li class="timeline-item is-pending">
                    <div class="timeline-icon"><i class="bi bi-clock-history"></i></div>
                    <div class="timeline-content">
                        <h4 class="title">Menunggu Tanda Tangan</h4>
                        <div class="date">Estimasi: 17 Juli 2025</div>
                        <p class="description">Menunggu persetujuan dan tanda tangan pejabat</p>
                    </div>
                </li>
                <li class="timeline-item is-pending">
                    <div class="timeline-icon"><i class="bi bi-file-earmark-arrow-down"></i></div>
                    <div class="timeline-content">
                        <h4 class="title">Siap Diambil</h4>
                        <div class="date">Estimasi: 18 Juli 2025</div>
                        <p class="description">Surat siap untuk diambil atau dikirim</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <!-- Modal Survey -->
<div class="modal fade" id="modalSurveyLayanan" tabindex="-1" aria-labelledby="modalSurveyLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form id="formSurveyLayanan">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSurveyLabel">Survey Kepuasan Layanan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
        </div>
        <div class="modal-body">
          <p>Sebelum mengunduh <strong id="surveyNamaFile">dokumen</strong>, mohon isi survei berikut:</p>
          <input type="hidden" name="pengajuan_id" id="surveyPengajuanId" value="">

          <!-- Rating -->
          <div class="mb-3">
            <label class="form-label">
              A. Saya merasa layanan pengajuan surat berbasis web ini memberikan kualitas pelayanan yang baik.
            </label>
            <div class="rating-group">
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kualitas1" name="kualitas" value="1">
                <label for="kualitas1">1. Sangat Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kualitas2" name="kualitas" value="2">
                <label for="kualitas2">2. Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kualitas3" name="kualitas" value="3">
                <label for="kualitas3">3. Cukup Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kualitas4" name="kualitas" value="4">
                <label for="kualitas4">4. Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kualitas5" name="kualitas" value="5">
                <label for="kualitas5">5. Sangat Puas</label>
              </div>
            </div>
          </div>


          <div class="mb-3">
            <label class="form-label">
              B. Proses pengajuan dan penyelesaian surat melalui sistem ini berlangsung dengan cepat.
            </label>
            <div class="rating-group">
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kecepatan1" name="kecepatan" value="1">
                <label for="kecepatan1">1. Sangat Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kecepatan2" name="kecepatan" value="2">
                <label for="kecepatan2">2. Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kecepatan3" name="kecepatan" value="3">
                <label for="kecepatan3">3. Cukup Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kecepatan4" name="kecepatan" value="4">
                <label for="kecepatan4">4. Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kecepatan5" name="kecepatan" value="5">
                <label for="kecepatan5">5. Sangat Puas</label>
              </div>
            </div>
          </div>


          <div class="mb-3">
            <label class="form-label">
              C. Sistem pengajuan surat berbasis web mudah digunakan dan dipahami.
            </label>
            <div class="rating-group">
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kemudahan1" name="kemudahan" value="1">
                <label for="kemudahan1">1. Sangat Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kemudahan2" name="kemudahan" value="2">
                <label for="kemudahan2">2. Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kemudahan3" name="kemudahan" value="3">
                <label for="kemudahan3">3. Cukup Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kemudahan4" name="kemudahan" value="4">
                <label for="kemudahan4">4. Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kemudahan5" name="kemudahan" value="5">
                <label for="kemudahan5">5. Sangat Puas</label>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">
              D. Informasi mengenai alur pengajuan, status, dan hasil surat jelas dan mudah diakses.
            </label>
            <div class="rating-group">
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kejelasan1" name="kejelasan" value="1">
                <label for="kejelasan1">1. Sangat Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kejelasan2" name="kejelasan" value="2">
                <label for="kejelasan2">2. Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kejelasan3" name="kejelasan" value="3">
                <label for="kejelasan3">3. Cukup Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kejelasan4" name="kejelasan" value="4">
                <label for="kejelasan4">4. Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kejelasan5" name="kejelasan" value="5">
                <label for="kejelasan5">5. Sangat Puas</label>
              </div>
            </div>
          </div>


          <div class="mb-3">
            <label class="form-label">
              E. Surat yang diajukan melalui sistem selalu diproses dengan benar tanpa ada kesalahan.
            </label>
            <div class="rating-group">
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="keandalan1" name="keandalan" value="1">
                <label for="keandalan1">1. Sangat Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="keandalan2" name="keandalan" value="2">
                <label for="keandalan2">2. Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="keandalan3" name="keandalan" value="3">
                <label for="keandalan3">3. Cukup Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="keandalan4" name="keandalan" value="4">
                <label for="keandalan4">4. Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="keandalan5" name="keandalan" value="5">
                <label for="keandalan5">5. Sangat Puas</label>
              </div>
            </div>
          </div>


          <div class="mb-3">
            <label class="form-label">
              F. Secara keseluruhan, saya puas dengan layanan pengajuan surat berbasis web ini.
            </label>
            <div class="rating-group">
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kepuasan1" name="kepuasan" value="1">
                <label for="kepuasan1">1. Sangat Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kepuasan2" name="kepuasan" value="2">
                <label for="kepuasan2">2. Tidak Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kepuasan3" name="kepuasan" value="3">
                <label for="kepuasan3">3. Cukup Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kepuasan4" name="kepuasan" value="4">
                <label for="kepuasan4">4. Puas</label>
              </div>
              <div>
                &nbsp;&nbsp;&nbsp;<input type="radio" id="kepuasan5" name="kepuasan" value="5">
                <label for="kepuasan5">5. Sangat Puas</label>
              </div>
            </div>
          </div>

          <!-- Saran -->
          <div class="mb-3">
            <label for="saran" class="form-label">Saran dan Masukan (Opsional)</label>
            <textarea name="saran" class="form-control" rows="3" placeholder="Berikan saran atau masukan untuk perbaikan layanan..."></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Kirim & Unduh Surat</button>
        </div>
      </form>
    </div>
  </div>
</div>


    <script>
        document.getElementById('trackingForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const nomorResiInput = document.getElementById('nomorResi');
            const statusResultDiv = document.getElementById('statusResult');
            const statusTitleH3 = document.getElementById('statusTitle');
            const statusSubtitleP = document.getElementById('statusSubtitle');
            const nomorResi = nomorResiInput.value.trim();
            if (!nomorResi) {
                alert('Silakan masukkan Nomor Resi terlebih dahulu.');
                return;
            }
            // Bersihkan hasil sebelumnya
            statusTitleH3.textContent = '';
            statusSubtitleP.textContent = '';
            document.querySelector('.timeline').innerHTML = '';
            let notFoundMsg = document.getElementById('notFoundMsg');
            if (notFoundMsg) notFoundMsg.remove();
            let downloadBtn = document.getElementById('downloadSuratBtn');
            if (downloadBtn) downloadBtn.remove();

            fetch('<?= base_url('tracking/tracking_surat/') ?>' + encodeURIComponent(nomorResi))
                .then(res => res.json())
                .then(data => {
                    if (data.status === 'not_found') {
                        let msg = document.createElement('div');
                        msg.id = 'notFoundMsg';
                        msg.className = 'alert alert-danger mt-3 text-center';
                        msg.innerHTML = '<i class="bi bi-exclamation-circle"></i> Nomor resi tidak ditemukan. Pastikan Anda memasukkan nomor resi dengan benar.';
                        statusResultDiv.appendChild(msg);
                        statusResultDiv.classList.remove('d-none');
                        return;
                    }
                    // Judul dan subjudul

                    // Tampilkan status utama dengan warna merah jika ditolak
                    if (data.surat.status && data.surat.status.toLowerCase() === 'ditolak') {
                        statusTitleH3.innerHTML = `<span class="text-danger">Status: <i class='bi bi-x-circle-fill'></i> ${data.surat.status}</span>`;
                    } else {
                        statusTitleH3.textContent = `Status: ${data.surat.status}`;
                    }
                    statusSubtitleP.textContent = `${data.surat.nama_surat} - ${data.surat.nama_mahasiswa}`;
                    // Gabungkan nama surat, nama mahasiswa, dan kode resi
                    let kodeResi = data.surat.nomor_resi ? data.surat.nomor_resi : nomorResi;
                    statusSubtitleP.textContent = `${data.surat.nama_surat} - ${data.surat.nama_mahasiswa} - ${kodeResi}`;

                    // Timeline
                    let timelineHtml = '';
                    if (data.timeline && data.timeline.length > 0) {
                        data.timeline.forEach(function(item) {
                            let isDitolak = (item.status && item.status.toLowerCase() === 'ditolak');
                            let iconClass = isDitolak ? 'bi-x-circle-fill text-danger' : 'bi-check-lg';
                            let titleClass = isDitolak ? 'text-danger' : '';
                            timelineHtml += `<li class="timeline-item">
                                <div class="timeline-icon"><i class="bi ${iconClass}"></i></div>
                                <div class="timeline-content">
                                    <h4 class="title ${titleClass}">${item.status}</h4>
                                    <div class="date">${item.timestamp}</div>
                                    <p class="description">${item.keterangan ? item.keterangan : ''}</p>
                                </div>
                            </li>`;
                        });
                    } else {
                        timelineHtml = '<li class="timeline-item"><div class="timeline-content">Belum ada riwayat status.</div></li>';
                    }
                    document.querySelector('.timeline').innerHTML = timelineHtml;

                    // Tombol download jika selesai
                    if (data.surat.status === 'selesai' && data.surat.download_url) {
                        let btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = 'btn btn-success mt-3 btn-download-surat';
                        btn.id = 'downloadSuratBtn';
                        btn.innerHTML = '<i class="bi bi-download"></i> Download Surat Final';
                        statusResultDiv.appendChild(btn);
                        // Simpan pengajuan_id ke window agar bisa diakses di modal
                        window.suratPengajuanId = data.surat.pengajuan_id;
                        // Event listener: buka modal survey
                        btn.addEventListener('click', function(e) {
                          e.preventDefault();
                          // Format nama file: jenis surat-nama lengkap-nim.pdf (no underscore)
                          let jenisSurat = data.surat.nama_surat ? data.surat.nama_surat.toLowerCase() : 'surat';
                          let namaMahasiswa = data.surat.nama_mahasiswa ? data.surat.nama_mahasiswa : 'Mahasiswa';
                          let nim = data.surat.nim ? data.surat.nim : '';
                          // Hilangkan karakter non-alfabet/angka kecuali spasi dan strip
                          jenisSurat = jenisSurat.replace(/[^a-zA-Z0-9\- ]/g, '').trim();
                          namaMahasiswa = namaMahasiswa.replace(/[^a-zA-Z0-9\- ]/g, '').trim();
                          let namaFile = `${jenisSurat}-${namaMahasiswa}-${nim}.pdf`;
                          let url = data.surat.download_url;
                          showSurveyModal(namaFile, url);
                        });
                    }

                    statusResultDiv.classList.remove('d-none');
                    statusResultDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
                })
                .catch(() => {
                    statusTitleH3.textContent = 'Terjadi kesalahan. Coba lagi.';
                    statusSubtitleP.textContent = '';
                    statusResultDiv.classList.remove('d-none');
                });
        });

        // Intercept tombol download surat
          function showSurveyModal(namaFile, downloadUrl) {
            document.getElementById('surveyNamaFile').textContent = namaFile;
            // Set pengajuan_id ke hidden input
            if (window.suratPengajuanId) {
              document.getElementById('surveyPengajuanId').value = window.suratPengajuanId;
            }
            const modal = new bootstrap.Modal(document.getElementById('modalSurveyLayanan'));
            modal.show();
            // Simpan url download di elemen
            document.getElementById('formSurveyLayanan').dataset.downloadUrl = downloadUrl;
          }
// Attach event ke tombol download
          setTimeout(function() {
            document.querySelectorAll('#downloadSuratBtn').forEach(function(btn) {
              btn.addEventListener('click', function(e) {
                e.preventDefault();
                const namaFile = btn.textContent.replace('Download Surat Final','').trim() || 'Dokumen.pdf';
                const url = btn.getAttribute('href');
                showSurveyModal(namaFile, url);
              });
            });
          }, 500);


    </script>

    <script>
  document.getElementById('formSurveyLayanan').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = e.target;
    const downloadUrl = form.dataset.downloadUrl;

    const formData = new FormData(form);

    fetch('<?= base_url('survey/simpan') ?>', {
      method: 'POST',
      body: formData
    })
    .then(res => res.json())
    .then(response => {
      if (response.status === 'success') {
        const modal = bootstrap.Modal.getInstance(document.getElementById('modalSurveyLayanan'));
        modal.hide();
        window.open(downloadUrl, '_blank');
      } else {
        alert('Gagal menyimpan survei. Silakan coba lagi.');
      }
    })
    .catch(() => {
      alert('Terjadi kesalahan saat mengirim survei.');
    });
  });
</script>

<!-- Pastikan Bootstrap JS sudah di-load -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>