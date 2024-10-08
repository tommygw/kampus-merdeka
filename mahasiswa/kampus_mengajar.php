<div class="pagetitle"> 
      <h1>Studi Independent</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Program</li>
          <li class="breadcrumb-item active">Kampus Mengajar</li>
        </ol>
      </nav>
    </div>

    <?php

    // Query untuk mengambil data dari tabel mitra
    $sql = "SELECT nama_display, foto, id_mitra FROM mitra WHERE program = 'kampus_mengajar'";
    $result = mysqli_query($conn, $sql);

    // Cek apakah ada data yang ditemukan
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $nama_display = htmlspecialchars($row['nama_display']);
            $foto = htmlspecialchars($row['foto']);
            $id_mitra = htmlspecialchars($row['id_mitra']);
            // Menyimpan card Bootstrap dalam variabel untuk dipanggil di HTML
            $card_html[] = '<div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Program <span>| Kampus Mengajar</span></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <img src="../images/' . $foto . '" alt="foto mitra" class="rounded-circle" style="width:60px; height:60px">
                                            </div>
                                            <div class="ps-3">
                                                <a href="index.php?page=mengajarmitra&id_mitra='.$id_mitra.'"><h6 style="font-size: 22px;">' . $nama_display . '</h6></a>
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

            <!-- Revenue Card -->
            <!-- <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div> -->
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <!-- <div class="col-xxl-4 col-md-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                    </div>
                  </div>

                </div>
              </div>

            </div> -->
            <!-- End Customers Card -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>