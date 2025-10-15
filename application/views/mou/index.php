
<div class="container py-4">
    <div class="mb-4">
        <h1 class="header-title mb-1">Manajemen Folder MoU & PKS</h1>
        <div class="header-subtitle">Kelola dokumen berdasarkan tahun dan jenis kerjasama</div>
    </div>
    <div class="row mb-4 g-2 align-items-center">
        <div class="col-md-5 col-12 mb-2 mb-md-0">
            <input type="text" id="searchInput" class="form-control" placeholder="Cari berkas...">
        </div>
        <div class="col-md-2 col-6">
            <select id="yearFilter" class="form-select">
                <option value="all">Semua Tahun</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
            </select>
        </div>
        <div class="col-md-3 col-6">
            <select id="categoryFilter" class="form-select">
                <option value="all">Semua Kategori</option>
                <option value="MoU">MoU</option>
                <option value="PKS">PKS</option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>
                <option value="Lokal">Lokal</option>
            </select>
        </div>
        <div class="col-md-2 col-12 text-end">
            <button class="btn btn-success w-100"><i class="bi bi-folder-plus me-1"></i> Buat Folder Baru</button>
        </div>
    </div>
    <div class="row mb-4 g-3">
        <div class="col-md-3 col-6">
            <div class="tracking-card text-center">
                <div class="card-title">Total MoU</div>
                <div class="display-5 fw-bold">24</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="tracking-card text-center">
                <div class="card-title">Total PKS</div>
                <div class="display-5 fw-bold">12</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="tracking-card text-center">
                <div class="card-title">Internasional</div>
                <div class="display-5 fw-bold">8</div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="tracking-card text-center">
                <div class="card-title">Total Dokumen</div>
                <div class="display-5 fw-bold">28</div>
            </div>
        </div>
    </div>
    <div class="folder-structure">
    <h3>📂 Struktur Folder</h3>
    <ul id="folderList">
      <li class="folder"><span class="chevron">&gt;</span> 2024
        <ul class="hidden">
          <li class="folder"><span class="chevron">&gt;</span> MoU
            <ul class="hidden">
              <li class="folder"><span class="chevron">&gt;</span> Internasional
                <ul class="hidden">
                  <li class="file"><span class="file-icon">📄</span> <a href="/uploads/mou/MoU_Harvard_University_2024.pdf" download target="_blank">MoU_Harvard_University_2024.pdf</a></li>
                  <li class="file"><span class="file-icon">📄</span> <a href="/uploads/mou/MoU_Oxford_Research_2024.pdf" download target="_blank">MoU_Oxford_Research_2024.pdf</a></li>
                </ul>
              </li>
              <li class="folder"><span class="chevron">&gt;</span> Nasional</li>
              <li class="folder"><span class="chevron">&gt;</span> Lokal</li>
            </ul>
          </li>
          <li class="folder"><span class="chevron">&gt;</span> PKS</li>
        </ul>
      </li>
      <li class="folder"><span class="chevron">&gt;</span> 2025
        <ul class="hidden"></ul>
      </li>
    </ul>
  </div>

</div>
<script>
  // Toggle expand/collapse folder on click (any .folder)
  document.querySelectorAll('#folderList .folder').forEach(folder => {
    folder.addEventListener('click', function(e) {
      // Only toggle if click is on the folder itself, not on a file link
      if (e.target.tagName.toLowerCase() === 'a') return;
      const childUl = this.querySelector(':scope > ul');
      const chevron = this.querySelector(':scope > .chevron');
      if (childUl) {
        childUl.classList.toggle('hidden');
        if (chevron) {
          if (childUl.classList.contains('hidden')) {
            chevron.textContent = '>';
          } else {
            chevron.textContent = 'v';
          }
        }
      }
      e.stopPropagation();
    });
  });
</script>
<style>
  .chevron {
    display: inline-block;
    width: 1em;
    text-align: center;
    cursor: pointer;
    font-weight: bold;
    color: #38761d;
    margin-right: 6px;
    margin-left: 0;
    vertical-align: middle;
    position: relative;
  }
  .folder > .chevron:before {
    color: #38761d;
    font-size: 1.1em;
    margin-right: 6px;
    vertical-align: middle;
    display: inline-block;
    position: relative;
    left: -6px;
  }
  .file-icon {
    color: #22c55e;
    margin-right: 4px;
    font-size: 1.1em;
    vertical-align: middle;
  }
</style>
<script>
    // Search function
    document.getElementById("searchInput").addEventListener("input", function() {
      let query = this.value.toLowerCase();
      let items = document.querySelectorAll("#folderList li");
      items.forEach(item => {
        let text = item.textContent.toLowerCase();
        if (text.includes(query)) {
          item.style.display = "list-item";
          if (query) {
            item.innerHTML = item.textContent.replace(
              new RegExp(query, "gi"),
              match => `<span class='highlight'>${match}</span>`
            );
          } else {
            item.innerHTML = item.textContent;
          }
        } else {
          item.style.display = "none";
        }
      });
    });
    // Filter kategori (simple demo)
    document.getElementById("categoryFilter").addEventListener("change", function() {
      let selected = this.value.toLowerCase();
      let items = document.querySelectorAll("#folderList li");
      items.forEach(item => {
        let text = item.textContent.toLowerCase();
        if (selected === "all" || text.includes(selected)) {
          item.style.display = "list-item";
        } else {
          item.style.display = "none";
        }
      });
    });
</script>
