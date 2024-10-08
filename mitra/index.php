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

$query = "SELECT * FROM mitra WHERE email = '$email'";
$data = mysqli_query($conn, $query);
$hasil = mysqli_fetch_array($data);
$id = $hasil['id_mitra'];
$program = $hasil['program'];

if ($program == 'kampus_mengajar'){
  $program = 'km';
}

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
  <link href="../assets/img/tutwuri.png" rel="icon">

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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/stylemitra.css" rel="stylesheet">

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

        

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="../images/<?php echo $hasil['foto'];?>" alt="<?php echo $hasil['nama_display'];?>" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $hasil['nama_display'];?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $hasil['nama_display'];?></h6>
              <span>Mitra</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php?page=profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            
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

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=approval<?php echo $program; ?>">
            <i class="bi bi-grid"></i>
            <span>Approval Program</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=profile">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php?page=program">
          <i class="fa-regular fa-rectangle-list"></i>
          <span>Program</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
    <?php

    if(isset($_GET['page'])){
      $page = $_GET['page'];
  
      switch ($page) {
        case 'dashboard':
          include "dashboard_mitra.php";
          break;
        case 'profile':
          include "profile.php";
          break;
        case 'program':
          include "program.php";
          break;
        case 'tambahprogram':
          include "add_program$program.php";
          break;
        case 'tambahsuccess':
            include "proses_addProgram.php";
            break;
        case 'update_programstupen':
          include "update_programstupen.php";
          break;
        case 'update_programkkn':
          include "update_programkkn.php";
          break;
        case 'update_programkm':
          include "update_programkm.php";
          break;
        case 'update_programpmm':
          include "update_programpmm.php";
          break;
        case 'deleteprogram':
          include "delete_program.php";
          break;
              case 'updatesuccess':
          include "proses_updateProgram.php";
          break;
              case 'profile':
          include "profile.php";
          break;
              case 'approvalstupen':
          include "approvalstupen.php";
          break;
          case 'detailapprovalstupen':
            include "detailapprovalstupen.php";
            break;
          case 'approvalkkn':
          include "approvalkkn.php";
          break;
          case 'detailapprovalkkn':
            include "detailapprovalkkn.php";
            break;
          case 'approvalkm':
          include "approvalkm.php";
          break;
          case 'detailapprovalkm':
            include "detailapprovalkm.php";
            break;
          case 'approvalpmm':
          include "approvalpmm.php";
          break;
          case 'detailapprovalpmm':
            include "detailapprovalpmm.php";
            break;
          case 'programdetailstupen':
            include "programdetail_stupen.php";
            break;
          case 'programdetailpmm':
            include "programdetail_pmm.php";
            break;
          case 'programdetailkkn':
            include "programdetail_kkn.php";
            break;
          case 'programdetailkm':
            include "programdetail_km.php";
            break;
          case 'datamahasiswa':
            include "datamahasiswa.php";
            break;
                  
        default:
          echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
          break;
      }
    }else{
      include "dashboard_mitra.php";
    }
    
    ?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

  <!-- Function JS -->
  <script src="../assets/js/scriptmitra.js"></script>

</body>

</html>