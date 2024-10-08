    <?php

    $id_stupen = $_GET['id_stupen'];
    $id_mitra = $_GET['id_mitra'];

    $sql = "SELECT 
                stupen.judul_stupen,
                stupen.start_date,
                stupen.end_date,
                stupen.metode,
                mitra.nama_display,
                mitra.kota,
                mitra.foto,
                mitra.program,
                stupen.description AS deskripsi,
                stupen.syarat AS persyaratan,
                stupen.sertifikat AS sertifikasi,
                modulstupen.judul_modul,
                modulstupen.isi_modul
            FROM 
                stupen
            JOIN 
                mitra ON stupen.id_mitra = mitra.id_mitra
            JOIN 
                modulstupen ON stupen.id_stupen = modulstupen.id_stupen
            WHERE 
                stupen.id_mitra = $id_mitra
                AND stupen.id_stupen = $id_stupen
            ";
    $data = mysqli_query($conn,$sql);
    $d = mysqli_fetch_array($data);

    $deskripsi = htmlspecialchars_decode($d['deskripsi']);
    $persyaratan = htmlspecialchars_decode($d['persyaratan']);
    $sertifikasi = htmlspecialchars_decode($d['sertifikasi']);
    $program = $d['program']
    
    
    ?>
    <div class="pagetitle"> 
      <h1>Studi Independent</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Program</li>
          <li class="breadcrumb-item">Studi Independent</li>
          <li class="breadcrumb-item active">Studi Independent - <?= $d['nama_display'] ?></li>
        </ol>
      </nav>
    </div>
     
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
    
                    <div class="col-xxl-4 col-md-12 border" style="margin-top: 10px; margin-bottom:10px;">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title"> <?= $d['nama_display'] ?> <span>| Studi Independent</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="../images/<?= $d['foto'] ?>" alt="foto mitra" class="rounded-circle" style="width:100px; height:100px">
                                    </div>
                                    <div class="ps-3">
                                        <h5 class="card-title"><?= $d['judul_stupen'] ?></h6>
                                        <p style="font-size: 12px;"><span><?= $d['metode'] ?></span> | <?= $d['kota'] ?></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    
                                    <div class="">
                                        <form action="daftar.php" method="post">
                                            <input type="hidden" name="id_mhs" value="<?= $id; ?>">
                                            <input type="hidden" name="id_mitra" value="<?= $id_mitra; ?>">
                                            <input type="hidden" name="id_program" value="<?= $id_stupen; ?>">
                                            <input type="hidden" name="program" value="<?= $program; ?>">
                                            <button type="submit" class="btn btn-primary">Daftar</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    
                                    <div class="card-icon d-flex align-items-center justify-content-center">
                                      <i class="bx bxs-badge-check"></i>
                                    </div>
                                    <div class="">
                                      <p style="margin-bottom: 1px; font-size:14px; font-weight : bold;" >Kegiatan Bersertifikat</p>
                                      <p style="margin-bottom: 1px; font-size:14px">Konversi SKS dan kualitas kegiatan dijamin oleh tim Kemendikbudristek</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    
                                    <div class="card-icon d-flex align-items-center justify-content-center">
                                      <i class="bx bxs-building-house"></i>
                                    </div>
                                    <div class="">
                                      <p style="margin-bottom: 1px; font-size:14px; font-weight : bold;" >Kerja dari Rumah</p>
                                      <p style="margin-bottom: 1px; font-size:14px">Kegiatan ini bisa diikuti dari mana pun</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    
                                    <div class="">
                                      <p style="margin-bottom: 1px; font-size:14px; font-weight : bold;" >Periode Kegiatan</p>
                                      <p style="margin-bottom: 1px; font-size:14px"><?= $d['start_date'] ?> - <?= $d['end_date'] ?> (5 Bulan)</p>
                                    </div>
                                </div><br>
                                <div class="d-flex align-items-center">
                                    
                                    <div class="">
                                      <h5 style="font-weight: bold; margin-bottom:20px;">Rincian Kegiatan</h5>
                                      <p style="font-size: 14px; font-weight : bold; margin-bottom:1px"><?= $d['judul_stupen'] ?></p>
                                      <p style="font-size: 14px;"><?= $deskripsi ?></p>
                                    </div>
                                </div><br>
                                <!-- <div class="d-flex align-items-center">
                                    
                                    <div class="">
                                      <h5 style="font-weight: bold; margin-bottom:20px;">Module Pembelajaran</h5>
                                      <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Lorem ipsum dolor sit.
                                            </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur, nostrum! Sint!
                                            </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div><br> -->
                                <div class="d-flex align-items-center">
                                    
                                    <div class="">
                                      <h5 style="font-weight: bold; margin-bottom:20px;">Persyaratan</h5>
                                      <p style="font-size: 14px;"><?= $persyaratan ?></p>
                                    </div>
                                </div><br>
                                <div class="d-flex align-items-center">
                                    
                                    <div class="">
                                      <h5 style="font-weight: bold; margin-bottom:20px;">Sertifikasi</h5>
                                      <p style="font-size: 14px;"><?= $sertifikasi ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
          
                </div>
            </div>
      </div>
    </section>
