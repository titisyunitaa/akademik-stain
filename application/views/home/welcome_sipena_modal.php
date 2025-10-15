<!-- Modal Welcome SIPENA Custom -->
<style>
.sipena-modal-bg {
  background: rgba(0,0,0,0.4);
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  z-index: 1050;
  display: none;
  align-items: center;
  justify-content: center;
}
.sipena-modal-bg.show { display: flex; }
.sipena-modal {
  background: #fff;
  border-radius: 18px;
  max-width: 540px;
  width: 95vw;
  box-shadow: 0 8px 32px rgba(44,62,80,0.18);
  overflow: hidden;
  animation: fadeInUp .3s;
}
@keyframes fadeInUp {
  from { transform: translateY(40px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}
.sipena-modal-header {
  background: linear-gradient(135deg, #2e7d32 80%, #388e3c 100%);
  color: #fff;
  padding: 32px 24px 24px 24px;
  text-align: center;
  position: relative;
}
.sipena-modal-header .sipena-icon {
  background: #fff;
  color: #2e7d32;
  border-radius: 50%;
  width: 56px;
  height: 56px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2.2rem;
  margin: 0 auto 18px auto;
}
.sipena-modal-header .close {
  position: absolute;
  top: 18px;
  right: 18px;
  background: none;
  border: none;
  color: #fff;
  font-size: 1.7rem;
  cursor: pointer;
  opacity: 0.8;
}
.sipena-modal-title {
  font-size: 2rem;
  font-weight: 700;
  margin-bottom: 8px;
}
.sipena-modal-subtitle {
  font-size: 1.1rem;
  font-weight: 400;
  margin-bottom: 0;
  color: #e0f2f1;
}
.sipena-steps {
  display: flex;
  flex-wrap: wrap;
  gap: 18px 0;
  justify-content: space-between;
  margin: 0 0 18px 0;
  padding: 24px 18px 0 18px;
}
.sipena-step {
  flex: 0 0 48%;
  background: #f8fafc;
  border-radius: 12px;
  padding: 18px 12px 14px 12px;
  display: flex;
  align-items: flex-start;
  gap: 12px;
  min-width: 200px;
}
.sipena-step-number {
  background: #2e7d32;
  color: #fff;
  border-radius: 50%;
  width: 32px;
  height: 32px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 1.2rem;
  margin-top: 2px;
}
.sipena-step-content {
  flex: 1;
}
.sipena-step-content .sipena-step-title {
  font-weight: 700;
  font-size: 1.08rem;
  margin-bottom: 2px;
  color: #222;
}
.sipena-step-content .sipena-step-desc {
  color: #6b7280;
  font-size: 0.98rem;
}
.sipena-step-icon {
  font-size: 1.2rem;
  color: #2e7d32;
  margin-right: 4px;
}
.sipena-modal-illustration {
  display: flex;
  justify-content: center;
  margin: 18px 0 8px 0;
}
.sipena-modal-illustration img {
  width: 80px;
  height: 80px;
  object-fit: contain;
  border-radius: 50%;
  background: #f1f8e9;
}
.sipena-modal-footer {
  display: flex;
  gap: 12px;
  justify-content: center;
  align-items: center;
  padding: 0 0 24px 0;
  margin-top: 8px;
}
.sipena-btn-main {
  background: #2e7d32;
  color: #fff;
  border: none;
  border-radius: 8px;
  padding: 12px 28px;
  font-size: 1.08rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 8px;
  box-shadow: 0 2px 8px rgba(44,62,80,0.08);
  transition: background 0.2s;
}
.sipena-btn-main:hover { background: #256427; }
.sipena-btn-outline {
  background: #fff;
  color: #2e7d32;
  border: 2px solid #2e7d32;
  border-radius: 8px;
  padding: 12px 22px;
  font-size: 1.08rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 8px;
  transition: background 0.2s, color 0.2s;
}
.sipena-btn-outline:hover {
  background: #e8f5e9;
  color: #256427;
}
.sipena-modal-caption {
  text-align: center;
  color: #6b7280;
  font-size: 1.04rem;
  margin-bottom: 0;
}
.sipena-modal-footer .bi { font-size: 1.2rem; }
@media (max-width: 600px) {
  .sipena-modal {
    max-width: 99vw;
    min-width: unset;
    padding: 0 2vw;
    border-radius: 18px;
  }
  .sipena-modal-header {
    padding: 24px 8px 18px 8px;
    min-height: 80px;
  }
  .sipena-modal-title {
    font-size: 1.15rem;
    font-weight: 700;
    line-height: 1.2;
  }
  .sipena-modal-subtitle {
    font-size: 0.97rem;
    margin-bottom: 0;
  }
  .sipena-steps {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px 10px;
    padding: 14px 4px 0 4px;
  }
  .sipena-step {
    min-width: 0;
    padding: 16px 8px 12px 8px;
    border-radius: 14px;
    font-size: 1.01rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 12px;
    box-shadow: 0 1px 4px rgba(44,62,80,0.04);
  }
  .sipena-step-number {
    margin-bottom: 0;
    margin-right: 4px;
  }
  .sipena-step-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .sipena-step-number {
    width: 32px;
    height: 32px;
    font-size: 1.08rem;
    margin-top: 0;
    margin-bottom: 4px;
  }
  .sipena-step-content .sipena-step-title {
    font-size: 1.08rem;
    margin-bottom: 2px;
  }
  .sipena-step-content .sipena-step-desc {
    font-size: 0.97rem;
  }
  .sipena-modal-illustration {
    margin: 14px 0 8px 0;
  }
  .sipena-modal-illustration img {
    width: 60px;
    height: 60px;
  }
  .sipena-modal-footer {
    flex-direction: row;
    gap: 10px;
    padding: 0 0 12px 0;
  }
  .sipena-btn-main, .sipena-btn-outline {
    width: 48%;
    justify-content: center;
    font-size: 1.08rem;
    padding: 14px 0;
    border-radius: 12px;
    margin-bottom: 0;
    display: block;
    text-align: center;
    box-sizing: border-box;
  }
  .sipena-btn-outline {
    background: #fff;
    border: 2px solid #2e7d32;
    color: #2e7d32;
  }
  .sipena-modal-caption {
    font-size: 0.93rem;
    margin-bottom: 0;
  }
}
</style>
<div id="welcomeSipenaModal" class="sipena-modal-bg">
  <div class="sipena-modal">
    <div class="sipena-modal-header">
      
      <button class="close" id="closeWelcomeSipena" aria-label="Close">&times;</button>
      <div class="sipena-modal-title">Selamat Datang di SIPENA </div>
      <div class="sipena-modal-subtitle">Ikuti 4 langkah mudah untuk ajukan surat akademik Anda</div>
    </div>
    <div class="sipena-steps">
      <div class="sipena-step">
        <div class="sipena-step-number">1</div>
        <div class="sipena-step-content">
          <div class="sipena-step-title"><i class="bi bi-file-earmark-text sipena-step-icon"></i>Pilih Jenis Surat</div>
          <div class="sipena-step-desc">Tentukan jenis surat akademik yang Anda butuhkan</div>
        </div>
      </div>
      <div class="sipena-step">
        <div class="sipena-step-number">2</div>
        <div class="sipena-step-content">
          <div class="sipena-step-title"><i class="bi bi-upload sipena-step-icon"></i>Isi Data & Upload Dokumen</div>
          <div class="sipena-step-desc">Lengkapi formulir dan unggah dokumen pendukung</div>
        </div>
      </div>
      <div class="sipena-step">
        <div class="sipena-step-number">3</div>
        <div class="sipena-step-content">
          <div class="sipena-step-title"><i class="bi bi-qr-code sipena-step-icon"></i>Dapatkan Kode Resi</div>
          <div class="sipena-step-desc">Simpan kode tracking untuk memantau status</div>
        </div>
      </div>
      <div class="sipena-step">
        <div class="sipena-step-number">4</div>
        <div class="sipena-step-content">
          <div class="sipena-step-title"><i class="bi bi-search sipena-step-icon"></i>Lacak & Ambil Surat</div>
          <div class="sipena-step-desc">Pantau proses dan ambil surat yang sudah selesai</div>
        </div>
      </div>
    </div>
   
    <p class="sipena-modal-caption">Proses pengajuan surat menjadi lebih mudah dan cepat</p>
    <div class="sipena-modal-footer">
      <a href="<?php echo base_url('layanan_surat') ?>" class="sipena-btn-main"><i class="bi bi-check-circle"></i> Mulai Ajukan Surat</a>
      <a href="https://youtu.be/rrVNH2_TF0A?si=7H-F8PGZ884Zq_Vy" target="_blank" class="sipena-btn-outline"><i class="bi bi-play-circle"></i> Butuh Bantuan?</a>
    </div>
    <div style="text-align:center; color:#8e9eab; font-size:0.98rem; margin-bottom:10px;">Sistem Informasi Pelayanan Akademik – Universitas Anda</div>
  </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var closeBtn = document.getElementById('closeWelcomeSipena');
    var modal = document.getElementById('welcomeSipenaModal');
    var showBtn = document.getElementById('showWelcomeSipena');
    if (closeBtn) {
      closeBtn.onclick = function() {
        modal.classList.remove('show');
        setTimeout(function(){ modal.style.display = 'none'; }, 200);
      };
    }
    if (showBtn) {
      showBtn.onclick = function() {
        modal.style.display = 'flex';
        setTimeout(function(){ modal.classList.add('show'); }, 10);
      };
    }
  });
</script>
