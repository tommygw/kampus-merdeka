<div class="pagetitle"> 
      <h1>Studi Independent</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Program</li>
          <li class="breadcrumb-item active">Studi Independent</li>
        </ol>
      </nav>
    </div>

    <?php
    $id_mitra = $_GET['id_mitra'];
    // Query untuk mengambil data dari tabel mitra
    $sql = "SELECT 
                stupen.judul_stupen,
                stupen.id_stupen,
                stupen.start_date,
                stupen.end_date,
                stupen.metode,
                mitra.foto,
                mitra.nama_display
            FROM 
                stupen
            JOIN 
                mitra ON stupen.id_mitra = mitra.id_mitra
            WHERE stupen.id_mitra = '$id_mitra'";
    $result = mysqli_query($conn, $sql);

    // Cek apakah ada data yang ditemukan
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $id_stupen = htmlspecialchars($row['id_stupen']);
            $judul_stupen = htmlspecialchars($row['judul_stupen']);
            $start_date = htmlspecialchars($row['start_date']);
            $end_date = htmlspecialchars($row['end_date']);
            $nama_display = htmlspecialchars($row['nama_display']);
            $metode = htmlspecialchars($row['metode']);
            $foto = htmlspecialchars($row['foto']);
            // Menyimpan card Bootstrap dalam variabel untuk dipanggil di HTML
            $card_html[] = '<div class="col-xxl-4 col-md-12 border" style="margin-top: 10px; margin-bottom:10px;">
                                <div class="card info-card sales-card">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$nama_display.' <span>| Studi Independent</span></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <img src="../images/' . $foto . '" alt="foto mitra" class="rounded-circle" style="width:100px; height:100px">
                                            </div>
                                            <div class="ps-3">
                                                <a href="index.php?page=stupendetail&id_stupen='.$id_stupen.'&id_mitra='.$id_mitra.'"><h5 class="card-title">'. $judul_stupen .'</h6></a>
                                                <p style="font-size: 12px;"><span>'. $metode .'</span> | '. $start_date .' - '. $end_date .'  </p>
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