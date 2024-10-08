


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
                      <h6>Hallo, <?= $a['nama'] ?> ! Selamat Datang</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <?php
            $sqldaftar = "SELECT COUNT(*) AS total FROM transaksi_mitra WHERE id_mhs = $id";
            $cekdaftar = mysqli_query($conn, $sqldaftar);
            $hasildaftar = mysqli_fetch_array($cekdaftar);
            ?>

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Pendaftaran <span>| Jumlah Pendaftaranmu</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-bookmark">  </i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $hasildaftar['total'] ?> Program</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            

          </div>
        </div><!-- End Left side columns -->


        <div class="card col-lg-12">
          <div class="row">
            <center><h5 class="card-title">Program Kampus Merdeka</h5></center>

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

    
