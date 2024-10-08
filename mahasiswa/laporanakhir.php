<div class="pagetitle"> 
      <h1>Laporan Akhir</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Laporan Akhir</li>
        </ol>
      </nav>
    </div>

    <div class="card">
      <div class="card-body">
        <center><h5 class="card-title">Laporan Akhir</h5></center>
        <p>Upload Laporan Akhir Kegiatanmu !</p>

        <div class="alert alert-info alert-dismissible fade show mb-4" role="alert">
          <i class="bi bi-info-circle me-1"></i>
          Pastikan kamu mengumpulkan dokumen sesuai ketentuan, ya! <br>
        - Kesalahan data pada dokumen berakibat penolakan <br>
        - Pemalsuan dokumen berakibat masuk ke daftar blacklist
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php
          if ($a['laporan'] > 0) {
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="bi bi-info-circle me-1"></i>
                    Kamu sudah mengupload laporan akhir !
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>';
          }
        ?>
  
        <!-- Vertical Form -->
        <form class="row g-3" method="POST" action="upload_laporan.php" enctype="multipart/form-data">
          <input type="hidden" name="email" value="<?= $email; ?>">
          <div class="col-12">
            <label for="laporan" class="form-label">Laporan Akhir</label>
            <input type="file" class="form-control" id="laporan" name="laporan">
            <p class="text-muted" style="font-size: 12px; margin-top:10px">Unggah Laporan Akhir kamu dalam format PDF dengan ukuran maksimal 20 MB</p>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary" onclick="return validateForm()">Simpan</button>
          </div>
        </form><!-- Vertical Form -->

        <script type="text/javascript">
          function validateForm() {
              // Misalnya, validasi untuk memastikan semua input file telah diisi
              var laporan = document.getElementById("laporan").files[0];
              
              if (!laporan) {
                  alert("Mohon lengkapi semua file yang diperlukan.");
                  return false;
              }
              return true;
          }
      </script>

  
      </div>
    </div>
