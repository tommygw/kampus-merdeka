<?php

$timeout_duration = 900;
//inisialisasi session
session_start();

//mengecek username pada session
if( !isset($_SESSION['email']) ){
    ?>
    <script type="text/javascript">
        alert('Anda Harus Login Terlebih Dahulu !');
        window.location.assign('../auth/login.php');
    </script>
    <?php
}

if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    // Sesi telah habis, hapus semua data session
    session_unset();
    session_destroy();
    ?>
    <script type="text/javascript">
        alert('Session telah habis, Anda harus login terlebih dahulu!');
        window.location.assign('../auth/login.php');
    </script>
    <?php
    exit();
}

$_SESSION['last_activity'] = time();

$email = $_SESSION['email'];
include '../auth/koneksi.php';

$query2 = "SELECT * FROM mahasiswa WHERE email = '$email'";
$data2 = mysqli_query($conn, $query2);
$a = mysqli_fetch_array($data2);
$id = $a['id_mhs'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KampusMerdeka</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../landingpage/assets/img/kampus-merdeka.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/tutwuri.png" alt="">
        <span class="d-none d-lg-block">KampusMerdeka</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../images/<?= $a['foto'] ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"> <?= $a['nama'] ?> </span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $a['nama'] ?></h6>
              <span>Mahasiswa</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php?page=profile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php?page=approval">
                <i class="bi bi-check2-square"></i>
                <span>Ajukan Aprroval</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../auth/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- <li class="nav-heading">Pages</li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Program</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="index.php?page=stupen">
              <i class="bi bi-circle"></i><span>Studi Independent</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=pmm">
              <i class="bi bi-circle"></i><span>Pertukaran Mahasiswa</span>
            </a>
          </li>
          <!-- <li>
            <a href="index.php?page=magang">
              <i class="bi bi-circle"></i><span>Magang</span>
            </a>
          </li> -->
          <li>
            <a href="index.php?page=kkn">
              <i class="bi bi-circle"></i><span>KKN Tematik</span>
            </a>
          </li>
          <li>
            <a href="index.php?page=kampus_mengajar">
              <i class="bi bi-circle"></i><span>Kampus Mengajar</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=kegiatan">
          <i class="bi bi-person-lines-fill"></i>
          <span>Kegiatanku</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=dokumen">
          <i class="bi bi-file-earmark-plus"></i>
          <span>Lengkapi Dokumen</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=laporan">
          <i class="bi bi-file-earmark-plus"></i>
          <span>Laporan Akhir</span>
        </a>
      </li>
      <!-- End F.A.Q Page Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  <?php 

  if (empty($a['prodi']) || empty($a['semester']) || empty($a['foto'])) {
    echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
            <i class="bi  bi-info-circle me-1"></i>
            Profilemu belum lengkap, Ayo isi profilemu ! <a href="index.php?page=profile">Klik Disini</a> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
  }

  if (empty($a['cv']) || empty($a['ktp']) || empty($a['transkrip'])) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-1"></i>
            Harap segera lengkapi dokumen mu!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
  }


	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'dashboard':
				include "dashboard_mhs.php";
				break;
			case 'profile':
				include "profile.php";
				break;
			case 'kegiatan':
				include "kegiatanku.php";
				break;
      case 'dokumen':
        include "dokumen.php";
        break;
      case 'stupen':
				include "stupen.php";
				break;
      case 'magang':
				include "magang.php";
				break;
      case 'kkn':
				include "kkn.php";
				break;
      case 'pmm':
				include "pmm.php";
				break;
      case 'approval':
				include "approval.php";
				break;
      case 'kampus_mengajar':
        include "kampus_mengajar.php";
        break;
      case 'stupenmitra':
        include "stupen_mitra.php";
        break;
      case 'stupendetail':
        include "stupen_detail.php";
        break;
      case 'kkndetail':
          include "kkn_detail.php";
          break;
      case 'pmmdetail':
        include "pmm_detail.php";
        break;
      case 'mengajarmitra':
        include "mengajar_mitra.php";
        break;
      case 'mengajardetail':
        include "mengajar_detail.php";
        break;
      case 'laporan':
        include "laporanakhir.php";
        break;
            			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "dashboard_mhs.php";
	}
 
	 ?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Sigma</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>