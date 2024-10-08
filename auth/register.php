<?php

//inisialisasi session
session_start();

//mengecek username pada session
if( isset($_SESSION['email']) ){
    ?>
    <script type="text/javascript">
        alert('Anda Sudah Login !');
        window.location.assign('../mahasiswa/index.php');
    </script>
    <?php
}

include 'koneksi.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - KampusMerdeka</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../landingpage/assets/img/kampus-merdeka.png" rel="icon">
  <link href="../landingpage/assets/img/kampus-merdeka.png" rel="apple-touch-icon">

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
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="../assets/img/tutwuri.png" alt="">
                  <span class="d-none d-lg-block">KampusMerdeka</span>
                </a>
              </div><!-- End Logo -->

              <!-- TAMPILAN PERTAMA -->
              <div styl class="card mb-3" id="awal">
                <div class="card-body">
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                    <p class="text-center small">Silakan pilih ingin membuat akun apa </p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate>                    
                    <div class="col-12 mb-3">
                      <button class="btn btn-primary w-100" id="button-mahasiswa">Buat Akun Mahasiswa</button>
                    </div>
                    <div class="col-12 mb-3">
                      <button class="btn btn-primary w-100" id="button-dosen">Buat Akun Dosen</button>
                    </div>
                    <div class="col-12 mb-3">
                      <button class="btn btn-primary w-100" id="button-mitra">Buat Akun Mitra</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun ? <a href="login.php">klik disini</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <!-- TAMPILAN MAHASISWA -->
              <div styl class="card mb-3" id="form-mahasiswa" style="display: none;">
                <div class="card-body">
                  <div class="pt-4 pb-2"> 
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun Mahasiswa</h5>
                    <p class="text-center small">Silakan masukan data dengan benar </p>
                  </div>

                  <form method="post" action="prosesRegister.php" class="row g-3 needs-validation" novalidate>
                  <input type="hidden" name="level" value="Mahasiswa">
                  <div class="col-12">
                      <label for="yourNPM" class="form-label" maxlength="10">NPM</label>
                      <input type="text" name="npm" class="form-control" id="yourNPM" placeholder="Masukan NPM" required>
                      <div class="invalid-feedback">NPM wajib diisi !</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control" id="yourName" placeholder="Masukan Nama" required>
                      <div class="invalid-feedback">Nama wajib diisi !</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Masukan Email" required>
                      <div class="invalid-feedback">Tolong masukan email dengan benar !</div>
                    </div>
                    
                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Masukan Password" required>
                        <div class="invalid-feedback">Password wajib diisi !</div>
                    </div>
                    
                    <div class="col-12 mb-2">
                      <label for="yourrePassword" class="form-label">Re-Password</label>
                      <input type="password" name="repassword" class="form-control" id="yourrePassword" placeholder="Masukan ulang password" required>
                      <div class="invalid-feedback">pastikan Password sama !</div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="register">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun ? <a href="login.php">klik disini</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <!-- TAMPILAN DOSEN -->
              <div styl class="card mb-3" id="form-dosen" style="display: none;">
                <div class="card-body">
                  <div class="pt-4 pb-2"> 
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun Dosen</h5>
                    <p class="text-center small">Silakan masukan data dengan benar </p>
                  </div>

                  <form method="post" action="proses_register.php" class="row g-3 needs-validation" novalidate>
                  <input type="hidden" name="level" value="Dosen">
                  <div class="col-12">
                      <label for="yourNPM" class="form-label">NIDN</label>
                      <input type="text" name="nidn" class="form-control" id="yourNPM" placeholder="Masukan NIDN" required>
                      <div class="invalid-feedback">NPM wajib diisi !</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control" id="yourName" placeholder="Masukan Nama" required>
                      <div class="invalid-feedback">Nama wajib diisi !</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Masukan Email" required>
                      <div class="invalid-feedback">Tolong masukan email dengan benar !</div>
                    </div>
                    
                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Masukan Password" required>
                        <div class="invalid-feedback">Password wajib diisi !</div>
                    </div>
                    
                    <div class="col-12 mb-2">
                      <label for="yourrePassword" class="form-label">Re-Password</label>
                      <input type="password" name="repassword" class="form-control" id="yourrePassword" placeholder="Masukan ulang password" required>
                      <div class="invalid-feedback">pastikan Password sama !</div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="register">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun ? <a href="login.php">klik disini</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <!-- TAMPILAN MITRA -->
              <div styl class="card mb-3" id="form-mitra" style="display: none;">
                <div class="card-body">
                  <div class="pt-4 pb-2"> 
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun Mitra</h5>
                    <p class="text-center small">Silakan masukan data dengan benar </p>
                  </div>

                  <form method="post" action="proses_register.php" class="row g-3 needs-validation" novalidate>
                  <input type="hidden" name="level" value="Mitra">

                    <div class="col-12">
                      <label for="yourName" class="form-label">Nama</label>
                      <input type="text" name="nama" class="form-control" id="yourName" placeholder="Masukan Nama" required>
                      <div class="invalid-feedback">Nama wajib diisi !</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Masukan Email" required>
                      <div class="invalid-feedback">Tolong masukan email dengan benar !</div>
                    </div>

                    <div class="col-12">
                      <label for="yourNPM" class="form-label">Alamat</label>
                      <input type="text" name="alamat" class="form-control" id="yourNPM" placeholder="Masukan Alamat" required>
                      <div class="invalid-feedback">NPM wajib diisi !</div>
                    </div>

                    <div class="col-12">
                      <label for="yourNPM" class="form-label">Kota</label>
                      <input type="text" name="kota" class="form-control" id="yourNPM" placeholder="Masukan Kota" required>
                      <div class="invalid-feedback">NPM wajib diisi !</div>
                    </div>
                    
                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Masukan Password" required>
                        <div class="invalid-feedback">Password wajib diisi !</div>
                    </div>
                    
                    <div class="col-12 mb-2">
                      <label for="yourrePassword" class="form-label">Re-Password</label>
                      <input type="password" name="repassword" class="form-control" id="yourrePassword" placeholder="Masukan ulang password" required>
                      <div class="invalid-feedback">pastikan Password sama !</div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="register">Buat Akun</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Sudah punya akun ? <a href="login.php">klik disini</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <script src="script.js"></script>

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

</body>

</html>