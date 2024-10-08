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
    $id_mitra = $_GET['id_mitra'];
    $sql = "SELECT 
                mitra.nama_display,
                mitra.kota,
                mitra.foto,
                mitra.program,
                km.id_km,
                km.nama_sekolah,
                km.start_date,
                km.end_date,
                km.lokasi,
                km.description,
                km.syarat
            FROM 
                mitra
            JOIN 
                kampusmengajar AS km ON mitra.id_mitra = km.id_mitra
            WHERE 
                mitra.id_mitra = $id_mitra;
            ";
    
    $result = mysqli_query($conn, $sql);

    // Cek apakah ada data yang ditemukan
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $id_km = htmlspecialchars($row['id_km']);
            $nama_sekolah = htmlspecialchars($row['nama_sekolah']);
            $start_date = htmlspecialchars($row['start_date']);
            $end_date = htmlspecialchars($row['end_date']);
            $nama_display = htmlspecialchars($row['nama_display']);
            $lokasi = htmlspecialchars($row['lokasi']);
            $foto = htmlspecialchars($row['foto']);
            // Menyimpan card Bootstrap dalam variabel untuk dipanggil di HTML
            $card_html[] = '<div class="col-xxl-4 col-md-12 border" style="margin-top: 10px; margin-bottom:10px;">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$nama_display.' <span>| Studi Independent</span></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <img src="../images/' . $foto . '" alt="foto mitra" class="rounded-circle" style="width:100px; height:70px">
                                            </div>
                                            <div class="ps-3">
                                                <a href="index.php?page=mengajardetail&id_mitra='.$id_mitra.'"><h5 class="card-title">'. $nama_sekolah .'</h6></a>
                                                <p style="font-size: 12px;"><span> Di'. $lokasi .'</span> | '. $start_date .' - '. $end_date .'  </p>
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
          
        <div class="card col-lg-12">
          <div class="row">
          <center><h5 class="card-title">Program Mitra</h5></center>
          
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