<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Surat</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* Variabel Warna Utama */
        :root {
            --primary-color: #34a8a2;
            --color-done: #198754;
            --color-pending: #6c757d;
            --light-bg: #f7f9fc;
            --card-bg: #ffffff;
            --text-dark: #2c3e50;
            --text-secondary: #7f8c8d;
            --border-color: #e9ecef;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
        }

        .tracking-container {
            max-width: 800px;
        }

        /* Styling untuk Header Utama */
        .header-title {
            font-weight: 700;
            font-size: 2.5rem;
        }
        .header-subtitle {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
        }

        /* Styling untuk Kartu Input & Hasil */
        .tracking-card, .status-card {
            background-color: var(--card-bg);
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            padding: 2rem;
        }
        
        .card-title {
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--primary-color);
        }
        .card-subtitle {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin-top: 0.5rem;
        }
        
        /* Styling Form */
        #trackingForm label {
            font-weight: 600;
        }
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(52, 168, 162, 0.25);
        }
        .btn-track {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            font-weight: 600;
        }
        .btn-track:hover {
            background-color: #2c8e88;
            border-color: #2c8e88;
        }
        
        /* == Styling untuk Timeline Detail (Digabungkan) == */
        .status-header h3 {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--text-dark);
        }
        .status-header p {
            font-size: 1.1rem;
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }
        .timeline {
            list-style: none;
            padding-left: 1rem;
            position: relative;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 1.25rem;
            top: 0.5rem;
            bottom: 0.5rem;
            width: 2px;
            background-color: var(--border-color);
        }
        .timeline-item {
            display: flex;
            gap: 1.5rem;
            position: relative;
        }
        .timeline-item:not(:last-child) {
            margin-bottom: 1rem;
        }
        .timeline-icon {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            flex-shrink: 0;
            background-color: #fff;
            z-index: 2;
        }
        .timeline-content .title {
            font-weight: 600;
            font-size: 1.1rem;
        }
        .timeline-content .date {
            font-size: 0.875rem;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
        }
        .timeline-content .description {
            font-size: 0.95rem;
            color: var(--text-secondary);
        }
        .timeline-item.is-done .timeline-icon {
            background-color: var(--color-done);
            color: #ffffff;
        }
        .timeline-item.is-pending .timeline-icon {
            background-color: #f8f9fa;
            border: 2px solid var(--border-color);
            color: var(--color-pending);
        }
    </style>
</head>
<body>

    <div class="container tracking-container my-5">
        <header class="text-center mb-5">
            <h1 class="header-title">Tracking Surat</h1>
            <p class="header-subtitle mx-auto">
                Pantau status pengajuan surat Anda secara real-time. Masukkan nomor resi untuk melihat progress dan estimasi selesai.
            </p>
        </header>

        <div class="tracking-card mb-5">
            <h2 class="h4 card-title"><i class="bi bi-search"></i>Lacak Status Surat</h2>
            <p class="card-subtitle">Masukkan nomor resi yang Anda terima saat pengajuan surat</p>
            <hr class="my-4">
            <form id="trackingForm">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <label for="nomorResi" class="form-label">Nomor Resi</label>
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

    <script>
        document.getElementById('trackingForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const nomorResiInput = document.getElementById('nomorResi');
            const statusResultDiv = document.getElementById('statusResult');
            const statusTitleH3 = document.getElementById('statusTitle');
            const statusSubtitleP = document.getElementById('statusSubtitle');
            
            const nomorResi = nomorResiInput.value.trim();

            if (nomorResi) {
                // Update judul dan subjudul kartu hasil dengan data dari input
                statusTitleH3.textContent = `Status: ${nomorResi}`;
                statusSubtitleP.textContent = 'Surat Aktif Kuliah - Ahmad Fauzi'; // Data ini bisa dibuat dinamis jika ada data dari server

                // Tampilkan kartu hasil
                statusResultDiv.classList.remove('d-none');

                // Scroll ke kartu hasil
                statusResultDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
                alert('Silakan masukkan Nomor Resi terlebih dahulu.');
            }
        });
    </script>

</body>
</html>