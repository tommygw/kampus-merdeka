    <div class="pagetitle"> 
      <h1>KKN Tematik</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Program</li>
          <li class="breadcrumb-item active">KKN Tematik</li>
        </ol>
      </nav>
    </div>

    
    <?php

    // Query untuk mengambil data dari tabel mitra
    $sql = "SELECT nama_display, foto FROM mitra WHERE program = 'kkn'";
    $result = mysqli_query($conn, $sql);

    // Cek apakah ada data yang ditemukan
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $nama_display = htmlspecialchars($row['nama_display']);
            $foto = htmlspecialchars($row['foto']);
            // Menyimpan card Bootstrap dalam variabel untuk dipanggil di HTML
            $card_html[] = '<div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Program <span>| KKN Tematik</span></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <img src="../images/' . $foto . '" alt="foto mitra" class="rounded-circle" style="width:60px; height:60px">
                                            </div>
                                            <div class="ps-3">
                                                <a href=""><h6 style="font-size: 22px;">' . $nama_display . '</h6></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
        }
    } else {
        echo '<center><h3>BELUM ADA PROGRAM</h3></center>';
    }

    ?>
     
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

        <?php 
            if (!empty($card_html)) {
                foreach ($card_html as $card) {
                    echo $card;
                }
            }
        ?>
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>