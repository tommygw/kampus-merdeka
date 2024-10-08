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

    $query = "SELECT * FROM dosen WHERE id_dosen = '$id'";
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
                <h3>Dosen</h3>
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

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                  </li>

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <!-- <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p> -->

                    <h5 class="card-title">Profile Details</h5>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">NIDN</div>
                      <div class="col-lg-9 col-md-8"><?= $d['nidn']; ?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Email</div>
                      <div class="col-lg-9 col-md-8"><?= $d['email']; ?></div>
                    </div>

                    <!-- <div class="row">
                      <div class="col-lg-3 col-md-4 label">Program Studi</div>
                      <div class="col-lg-9 col-md-8"><?= $d['prodi']; ?></div>
                    </div> -->

                    <!-- <div class="row">
                      <div class="col-lg-3 col-md-4 label">Semester</div>
                      <div class="col-lg-9 col-md-8"><?= $d['semester']; ?></div>
                    </div> -->

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                      <div class="col-lg-9 col-md-8">
                        <?php
                        if ($d['gender'] == 'L') {
                          echo "Laki-Laki";
                        } else {
                          echo "Perempuan";
                        }
                        ?>
                      </div>
                    </div>

                  </div>

                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <!-- Profile Edit Form -->
                    <form method="POST" action="update_profile.php" enctype="multipart/form-data">
                      <input type="hidden" name="id_dosen" value="<?= htmlspecialchars($d['id_dosen']); ?>">
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto Profile</label>
                        <div class="col-md-8 col-lg-9">
                          <!-- Periksa path foto -->
                          <img src="../images/<?= htmlspecialchars($d['foto']); ?>" alt="Profile Kosong">
                          <div class="pt-2">
                            <input class="form-control" type="file" name="foto">
                          </div>
                        </div>
                      </div>

                      <!-- Perbaiki input nama dan NIDN -->
                      <div class="row mb-3">
                        <label for="nama_lengkap" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap" placeholder="Masukan Nama Lengkap" value="<?= htmlspecialchars($d['nama']); ?>">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="nidn" class="col-md-4 col-lg-3 col-form-label">NIDN</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="nidn" type="text" class="form-control" id="nidn" placeholder="Masukan NIDN" value="<?= htmlspecialchars($d['nidn']); ?>">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="jk" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-md-8 col-lg-9">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="jk1" value="L" <?= $d['gender'] == 'L' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="jk1">
                              Laki Laki
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="jk2" value="P" <?= $d['gender'] == 'P' ? 'checked' : ''; ?>>
                            <label class="form-check-label" for="jk2">
                              Perempuan
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form><!-- End Profile Edit Form -->


                  </div>
                <?php
              }
                ?>

                <div class="tab-pane fade pt-3" id="profile-settings">

                </div><!-- End Bordered Tabs -->

                </div>
              </div>

            </div>
          </div>
      </section>

      <!-- <div class="row mb-3">
                      <label for="quillbot" class="col-md-4 col-lg-3 col-form-label">Quill bot</label>
                      <div class="col-md-8 col-lg-9">
                        <div class="quill-editor-default"></div>
                      </div>
                    </div>

                    <br><br> -->