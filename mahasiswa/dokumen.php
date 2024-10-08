    <div class="pagetitle"> 
      <h1>Lengkapi Dokumen</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Lengkapi Dokumen</li>
        </ol>
      </nav>
    </div>

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lengkapi Dokumen</h5>
        <p>Lengkapi profil dan dokumenmu untuk dapat mendaftar program. Informasimu akan kami simpan dengan aman.</p>

        <div class="alert alert-warning bg-warning alert-dismissible fade show mb-4" role="alert">
          <i class="bi bi-exclamation-triangle me-1"></i>
          Pastikan kamu mengumpulkan dokumen sesuai ketentuan, ya! <br>
        - Kesalahan data pada dokumen berakibat penolakan <br>
        - Pemalsuan dokumen berakibat masuk ke daftar blacklist
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
  
        <!-- Vertical Form -->
        <form class="row g-3" method="POST" action="upload_dokumen.php" enctype="multipart/form-data">
          <input type="hidden" name="email" value="<?= $email; ?>">
          <div class="col-12">
            <label for="cv" class="form-label">Curriculum Vitae (Wajib)</label>
            <input type="file" class="form-control" id="cv" name="cv">
            <p class="text-muted" style="font-size: 12px; margin-top:10px">Unggah CV kamu dalam format PDF dengan ukuran maksimal 2 MB</p>
          </div>
          <div class="col-12">
            <label for="transkrip" class="form-label">Transkrip Nilai (Wajib)</label>
            <input type="file" class="form-control" id="transkrip" name="transkrip">
            <p class="text-muted" style="font-size: 12px; margin-top:10px">Unggah Transkrip Nilai kamu dalam format PDF dengan ukuran maksimal 2 MB</p>
          </div>
          <div class="col-12">
            <label for="ktp" class="form-label">KTP (Wajib)</label>
            <input type="file" class="form-control" id="ktp" name="ktp">
            <p class="text-muted" style="font-size: 12px; margin-top:10px">Unggah foto KTP kamu dalam format PDF dengan ukuran maksimal 2MB</p>
          </div>
          <div class="col-12">
            <label for="additional" class="form-label">Dokumen Tambahan (Jika Perlu)</label>
            <input type="file" class="form-control" id="additional" name="additional">
            <p class="text-muted" style="font-size: 12px; margin-top:10px">Unggah file dalam format PDF dengan ukuran maksimal 2 MB </p>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary" onclick="return validateForm()">Simpan</button>
          </div>
        </form><!-- Vertical Form -->

        <script type="text/javascript">
          function validateForm() {
              // Misalnya, validasi untuk memastikan semua input file telah diisi
              var cv = document.getElementById("cv").files[0];
              var transkrip = document.getElementById("transkrip").files[0];
              var ktp = document.getElementById("ktp").files[0];
              
              if (!cv || !transkrip || !ktp) {
                  alert("Mohon lengkapi semua file yang diperlukan.");
                  return false;
              }
              return true;
          }
      </script>

  
      </div>
    </div>
