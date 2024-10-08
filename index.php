<?php

//inisialisasi session
session_start();

//mengecek username pada session
if( isset($_SESSION['email']) ){
    ?>
    <script type="text/javascript">
        alert('Anda Sudah Login !');
        window.location.assign('/mahasiswa/index.php');
    </script>
    <?php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kampus Merdeka</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="landingpage/assets/img/kampus-merdeka.png" rel="icon">
  <link href="landingpage/assets/img/kampus-merdeka.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="landingpage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="landingpage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="landingpage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="landingpage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="landingpage/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <a href="#"><img src="landingpage/assets/img/kampus-merdeka.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto " href="#testimonials">Program</a></li>
      </nav><!-- .navbar -->

      <div class="login-link">
        <a href="auth/login.php"><i class="fa-solid fa-user"></i> Log In</a>
      </div>
    </div>
  </header><!-- End Header -->

  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>Kampus Merdeka</span></h1>
      <h2>Universitas Sangga Buana YPKP Bandung</h2>
      <a href="#testimonials" class="btn-get-started scrollto">Browse Program</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Program dan Kegiatan Unggulan</h2>
          <p>Kampus Merdeka adalah cara terbaik berkuliah.</p>
          <p>Dapatkan kemerdekaan untuk membentuk masa depan yang</p>
          <p>sesuai dengan aspirasi kariermu</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="landingpage/assets/img/logo/MSIB.png" class="testimonial-img" alt="">
                <h3>Studi Independen</h3>
                <p>
                  Riset kolaboratif bersama perusahaan ternama melalui <b>Studi Independen</b>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="landingpage/assets/img/logo/pmm.png" class="testimonial-img" alt="">
                <h3>Pertukaran Mahasiswa</h3>
                <p>
                  Bertukar pengalaman budaya dengan universitas lain 
                melalui <b>Pertukaran Mahasiswa</b> dalam negeri
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="landingpage/assets/img/logo/kampus-mengajar.png" class="testimonial-img" alt="">
                <h3>Kampus Mengajar</h3>
                <p>Bantu tingkatkan kualitas pengajaran pendidikan dasar melalui <b>Kampus Mengajar</b> </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="landingpage/assets/img/logo/kkn.png" class="testimonial-img" alt="">
                <h3>Kerja Kuliah Nyata - Tematik</h3>
                <p>Perguruan Tinggi serentak bergerak, bersinergi, dan berkolaborasi
                  <b>Membangun Desa</b> sehingga bisa mandiri, maju dan sejahtera</p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="landingpage/assets/img/logo/MSIB.png" class="testimonial-img" alt="">
                <h3>Magang Bersertifikat</h3>
                <p>
                  Rasakan pengalaman dunia kerja dengan terjun langsung melalui <b>Magang MSIB</b>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="landingpage/assets/img/logo/magang-mandiri.png" class="testimonial-img" alt="">
                <h3>Magang Mandiri</h3>
                <p>
                  Temukan pengalaman dunia kerja yang dikelola secara langsung oleh perusahaan melalui <b>Magang Mandiri!</b>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="landingpage/assets/img/logo/wirausaha-merdeka.png" class="testimonial-img" alt="">
                <h3>Wirausaha Merdeka</h3>
                <p>
                  Ikuti program wirausaha dari perguruan tinggi lain melalui <b>Wirausaha Merdeka</b>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="landingpage/assets/img/logo/iisma.png" class="testimonial-img" alt="">
                <h3><a href="">IISMA</a></h3>
                <p>
                  Perluas wawasan dan koneksi melalui <b>Pertukaran Mahasiswa secara Internasional</b>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    
    <!-- ======= Program Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="section-title">
          <h2>Program yang Diikuti Mahasiswa USB YPKP Bandung</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-stupen">Studi Independen</li>
              <li data-filter=".filter-mengajar">Kampus Mengajar</li>
              <li data-filter=".filter-tukar">Pertukaran Mahasiswa</li>
              <li data-filter=".filter-kkn">KKN-Tematik</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-stupen wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/si-bangkit.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/si-bangkit.png" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bangkit Academy</a></h4>
                <p>Studi Independen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-stupen wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/si-vocasia.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/si-vocasia.png" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Vocasia</a></h4>
                <p>Studi Independen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-stupen wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/si-revou.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/si-revou.png" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">RevoU</a></h4>
                <p>Studi Independen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-tukar wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/pmm-unsri.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/pmm-unsri.png" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Universitas Sriwijaya</a></h4>
                <p>Pertukaran Mahasiswa Merdeka</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-stupen wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/si-ai4impact.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/si-ai4impact.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Celerates X Ai4impact </a></h4>
                <p>Studi Independen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-stupen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/si-hacktiv8.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/si-hacktiv8.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Hacktiv8</a></h4>
                <p>Studi Independen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-stupen wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/si-bisaai.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/si-bisaai.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">Bisa AI</a></h4>
                <p>Studi Independen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mengajar wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/kampus-mengajar.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/kampus-mengajar.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">SDN Cikopo 1 Jatinangor</a></h4>
                <p>Kampus Mengajar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mengajar wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/kampus-mengajar.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/kampus-mengajar.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">SMK Yadika 2 Cijagra Paseh </a></h4>
                <p>Kampus Mengajar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mengajar wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/kampus-mengajar.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/kampus-mengajar.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">SD IT Nurul Barokah </a></h4>
                <p>Kampus Mengajar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-stupen wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/si-1000startup.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/si-1000startup.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">1000 Startup Digital </a></h4>
                <p>Studi Independen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-stupen wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/si-coursenet.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/si-coursenet.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">CourseNet</a></h4>
                <p>Studi Independen</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-kkn wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="landingpage/assets/img/program/kkn-tematik.png" class="img-fluid" alt="">
                <a href="landingpage/assets/img/program/kkn-tematik.png" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="portfolio-details.html">KKN-Sumedang 1</a></h4>
                <p>KKN Tematik</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 footer-contact">
            <img src="landingpage/assets/img/logo/kemendikbud.png" alt="">
          </div>
          
          <div class="col-lg-6 col-md-6 footer-contact">
            <h4>Direktorat Jenderal Pendidikan Tinggi, Riset, dan
              Teknologi (Diktiristek)</h4>
            <p>
              Jl. Jenderal Sudirman, <br>
              Senayan, Jakarta 10270<br><br>
              <strong>Email:</strong> marketing@kampusmerdeka.co<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Navigasi</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>             
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengumuman</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Program</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Daftar</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>SIGMA</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="landingpage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="landingpage/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="landingpage/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="landingpage/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="landingpage/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="landingpage/assets/js/main.js"></script>

</body>

</html>