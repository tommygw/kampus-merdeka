<div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard_mitra.php">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->  
        <div class="col-lg-12">
          <div class="row">

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Welcome</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hand-thumbs-up"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Hallo, <?= $hasil['nama_display'] ?> ! Selamat Datang</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <?php
            $sql = "SELECT COUNT(program) AS total FROM transaksi_mitra WHERE id_mitra = '$id' AND status = 'pending'";
            $hasil = mysqli_query($conn, $sql);
            $data = mysqli_fetch_array($hasil);

            $query = "SELECT COUNT(id_program) AS prg FROM transaksi_mitra WHERE id_mitra = '$id' AND status = 'diterima'";
            $result = mysqli_query($conn, $query);
            $stats = mysqli_fetch_array($result);

            ?>

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title d-flex align-items-center">Approval Pending <span>| Jumlah </span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-bookmark">  </i>
                    </div>
                    <div class="ps-3">
                      <a href="../mitra/index.php?page=approval<?php echo $program;?>"><h6><?= $data['total'] ?> Kandidat</h6></a>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->



      <div class="card col-lg-12">
      <div class="row">
        <center>
          <h5 class="card-title">Program Kampus Merdeka</h5>
        </center>

        <div class="col-xxl-4 col-md-3 border">
          <div class="card info-card sales-card">

            <div class="card-body">
              <img src="../landingpage/assets/img/logo/MSIB.png" class="card-img-top" style="width: 10rem;" alt="...">
              <a href="">
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
              <a href="">
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
              <a href="">
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
              <a href="">
                <h5 class="card-title">Kampus Mengajar</h5>
              </a>
              <p class="card-text">Bantu tingkatkan kualitas pengajaran pendidikan dasar melalui Kampus Mengajar</p>
            </div>

          </div>
        </div>

      </div>
    </div>