<div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div>

    <?php

    $query = "SELECT * FROM admin WHERE id_admin = '$id'";
    $data = mysqli_query($conn, $query);
    while ($d = mysqli_fetch_array($data)) {
    ?>

      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="../images/<?= $d['foto']; ?>" alt="Profile" class="rounded-circle">
                <h2> <?= $d['nama']; ?> </h2>
                <h3>Admin Kampus Merdeka</h3>
                <div class="social-links mt-2">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">

                  <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                  </li>


                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> -->

                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Nama</div>
                      <div class="col-lg-9 col-md-8"><?= $d['nama']; ?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8"><?= $d['email']; ?></div>
                    </div>


                      </div>
                    </div>

                  </div>

                  <?php }?>