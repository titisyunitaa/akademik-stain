<div class="container tracking-container my-5 d-flex justify-content-center align-items-center" style="min-height:60vh;">
    <div class="card p-4 w-100" style="max-width: 500px; background-color: #fff; margin:auto;" id="cardCariResi">
        <h3 class="text-center font-weight-bold mb-1">Lupa Kode Resi</h3>
        <p class="text-center text-muted mb-4">Masukkan data diri Anda untuk mendapatkan kembali kode resi dan melacak status pengajuan surat.</p>

        <form id="formResi">
            <div class="form-group mb-3">
                <input type="text" class="form-control form-control-lg" name="nama_mhs" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group mb-3">
                <input type="text" class="form-control form-control-lg" name="nim_mhs" placeholder="NIM" required>
            </div>
            <button type="submit" class="btn btn-lg w-100 text-white" style="background-color: #52b9ab;">Cari Kode Resi</button>
        </form>
        <div id="hasil"></div>

        
</div>

<script>
document.getElementById('formResi').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    fetch('<?= base_url('tracking/cari_resi') ?>', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        let hasilDiv = document.getElementById('hasil');
        if (Array.isArray(data) && data.length) {
            let html = '';
            data.forEach(item => {
                let badgeColor = '', badgeText = '', badgeIcon = '';
                switch ((item.status || '').toLowerCase()) {
                  case 'selesai':
                    badgeColor = 'bg-success text-white';
                    badgeText = 'Selesai';
                    badgeIcon = '<i class="bi bi-check-circle-fill me-1"></i>';
                    break;
                  case 'diproses':
                    badgeColor = 'bg-primary text-white';
                    badgeText = 'Diproses';
                    badgeIcon = '<i class="bi bi-arrow-repeat me-1"></i>';
                    break;
                  case 'menunggu verifikasi':
                    badgeColor = 'bg-secondary text-white';
                    badgeText = 'Menunggu Verifikasi';
                    badgeIcon = '<i class="bi bi-clock-history me-1"></i>';
                    break;
                  case 'menunggu tanda tangan':
                    badgeColor = 'bg-warning text-dark';
                    badgeText = 'Menunggu Tanda Tangan';
                    badgeIcon = '<i class="bi bi-pen me-1"></i>';
                    break;
                  case 'ditolak':
                    badgeColor = 'bg-danger text-white';
                    badgeText = 'Ditolak';
                    badgeIcon = '<i class="bi bi-x-circle-fill me-1"></i>';
                    break;
                  default:
                    badgeColor = 'bg-light text-dark';
                    badgeText = item.status || '-';
                    badgeIcon = '<i class="bi bi-info-circle me-1"></i>';
                }
                html += `
                <div class="card mb-3 shadow-sm border-0" style="background:#f8f9fa;">
                  <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                      <span class="bg-light rounded-circle p-3 d-flex align-items-center justify-content-center"><i class="bi bi-file-earmark-text" style="font-size:2rem;color:#52b9ab;"></i></span>
                    </div>
                    <div class="flex-grow-1">
                      <div class="fw-bold mb-1" style="font-size:1.2rem; letter-spacing:1px;">${item.kode_resi}</div>
                      <div class="small text-secondary mb-1">${item.jenis_surat}</div>
                      <div class="small text-muted">Diajukan: ${item.created_at}</div>
                    </div>
                    <div>
                      <span class="badge rounded-pill px-3 py-2 ${badgeColor}" style="font-size:0.95rem; letter-spacing:0.5px;">${badgeIcon}${badgeText}</span>
                    </div>
                  </div>
                </div>
                `;
            });
            hasilDiv.innerHTML = html;
        } else {
            hasilDiv.innerHTML = `
            <div class="card border-warning shadow-sm mt-3" style="max-width:400px;margin:auto;">
                <div class="card-body text-center">
                    <i class="bi bi-exclamation-circle" style="font-size:2rem;color:#ffc107;"></i>
                    <h5 class="mt-2 mb-1 text-warning">Kode Resi Tidak Ditemukan</h5>
                    <p class="mb-0 text-muted">Pastikan data yang Anda masukkan sudah benar.<br>Jika tetap tidak ditemukan, silakan hubungi admin untuk bantuan lebih lanjut.</p>
                </div>
            </div>`;
        }
    })
    .catch(() => {
        document.getElementById('hasil').innerHTML = '<p>Terjadi kesalahan. Silakan coba lagi.</p>';
    });
});
</script>