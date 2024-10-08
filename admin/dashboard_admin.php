<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard_mhs.php">Home</a></li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

  <?php

  $sql = "
  SELECT 
      (SELECT COUNT(*) FROM stupen) +
      (SELECT COUNT(*) FROM kkntematik) +
      (SELECT COUNT(*) FROM pmm) +
      (SELECT COUNT(*) FROM kampusmengajar) AS total_programs,
      (SELECT COUNT(DISTINCT id_mhs) FROM transaksi_mitra) AS total_pendaftar,
      (SELECT COUNT(*) FROM transaksi_mitra WHERE status = 'diterima') AS total_diterima
  ";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $total_programs = $row['total_programs'];
  $total_pendaftar = $row['total_pendaftar'];
  $total_diterima = $row['total_diterima'];


  ?>

    <div class="col-lg-12">
      <div class="row">

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Program <span>| Jumlah Program</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-journal-bookmark"></i>
                </div>
                <div class="ps-3">
                  <h6> <?= $total_programs; ?> Program</h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Pendaftar <span>| Jumlah Pendaftar</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people-fill">  </i>
                </div>
                <div class="ps-3">
                  <h6> <?= $total_pendaftar; ?> Orang</h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->




        

      </div>
    </div>



    <div class="card col-lg-12">
      <div class="row">
        <center>
          <h5 class="card-title">Program Kampus Merdeka</h5>
        </center>

        <div class="col-xxl-4 col-md-3 border">
          <div class="card info-card sales-card">

            <div class="card-body">
              <img src="../landingpage/assets/img/logo/MSIB.png" class="card-img-top" style="width: 10rem;" alt="...">
              <a href="index.php?page=stupen">
                <h5 class="card-title">MSIB Studi Independent</h5>
              </a>
              <p class="card-text">Riset kolaboratif bersama perusahaan ternama melalui Studi Independen.</p>
            </div>

          </div>
        </div>

        <div class="col-xxl-4 col-md-3 border">
          <div class="card info-card sales-card">

            <div class="card-body">
              <img src="../landingpage/assets/img/logo/pmm.png" class="card-img-top" style="width: 10rem;" alt="...">
              <a href="index.php?page=pmm">
                <h5 class="card-title">Pertukaran Mahasiswa</h5>
              </a>
              <p class="card-text">Bertukar pengalaman budaya dengan universitas lain melalui Pertukaran Mahasiswa dalam negeri</p>
            </div>

          </div>
        </div>

        <div class="col-xxl-4 col-md-3 border">
          <div class="card info-card sales-card">

            <div class="card-body">
              <img src="../landingpage/assets/img/logo/kkn.png" class="card-img-top" style="width: 10rem;" alt="...">
              <a href="index.php?page=kkn">
                <h5 class="card-title">KKN Tematik</h5>
              </a>
              <p class="card-text">Perguruan Tinggi Serentak Bergerak, Bersinergi, dan Berkolaborasi Membangun Desa untuk Negara</p>
            </div>

          </div>
        </div>

        <div class="col-xxl-4 col-md-3 border">
          <div class="card info-card sales-card">

            <div class="card-body">
              <img src="../landingpage/assets/img/logo/kampus-mengajar.png" class="card-img-top" style="width: 10rem;" alt="...">
              <a href="index.php?page=kampus_mengajar">
                <h5 class="card-title">Kampus Mengajar</h5>
              </a>
              <p class="card-text">Bantu tingkatkan kualitas pengajaran pendidikan dasar melalui Kampus Mengajar</p>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>
