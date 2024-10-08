<?php
    $id_mitra = $_GET['id_mitra'];
    $sql = "SELECT 
                mitra.nama_display,
                mitra.kota,
                mitra.foto,
                mitra.program,
                km.id_km,
                km.nama_sekolah,
                km.start_date,
                km.end_date,
                km.lokasi,
                km.description,
                km.syarat
            FROM 
                mitra
            JOIN 
                kampusmengajar AS km ON mitra.id_mitra = km.id_mitra
            WHERE 
                mitra.id_mitra = $id_mitra;
            ";

$data = mysqli_query($conn,$sql);
$d = mysqli_fetch_array($data);

$deskripsi = htmlspecialchars_decode($d['description']);
$persyaratan = htmlspecialchars_decode($d['syarat']);
$program = $d['program'];
$id_km = $d['id_km'];
?>

    <div class="pagetitle"> 
      <h1>Studi Independent</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Program</li>
          <li class="breadcrumb-item">Kampus Mengajar</li>
          <li class="breadcrumb-item active"><?= $d['nama_sekolah'] ?></li>
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
                                <h5 class="card-title"> <?= $d['nama_display'] ?> <span>| Kampus Mengajar</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <img src="../images/<?= $d['foto'] ?>" alt="foto mitra" class="rounded-circle" style="width:100px; height:100px">
                                    </div>
                                    <div class="ps-3">
                                        <h5 class="card-title"><?= $d['nama_sekolah'] ?></h6>
                                        <p style="font-size: 12px;">Di <?= $d['kota'] ?> , <?= $d['lokasi'] ?></p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon d-flex align-items-center justify-content-center">

                                    </div>
                                    <div class="ps-3">
                                        <form action="daftar.php" method="post">
                                            <input type="hidden" name="id_mhs" value="<?= $id; ?>">
                                            <input type="hidden" name="id_mitra" value="<?= $id_mitra; ?>">
                                            <input type="hidden" name="id_program" value="<?= $id_km; ?>">
                                            <input type="hidden" name="program" value="<?= $program; ?>">
                                            <button type="submit" class="btn btn-primary">Daftar</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon d-flex align-items-center justify-content-center">

                                    </div>
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

                                    </div>
                                    <div class="card-icon d-flex align-items-center justify-content-center">
                                      <i class="bx bxs-building-house"></i>
                                    </div>
                                    <div class="">
                                      <p style="margin-bottom: 1px; font-size:14px; font-weight : bold;" >Kerja dari Rumah</p>
                                      <p style="margin-bottom: 1px; font-size:14px">Kegiatan ini bisa diikuti dari mana pun</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon d-flex align-items-center justify-content-center">

                                    </div>
                                    <div class="ps-3">
                                      <p style="margin-bottom: 1px; font-size:14px; font-weight : bold;" >Periode Kegiatan</p>
                                      <p style="margin-bottom: 1px; font-size:14px"><?= $d['start_date'] ?> - <?= $d['end_date'] ?> (5 Bulan)</p>
                                    </div>
                                </div><br>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon d-flex align-items-center justify-content-center">

                                    </div>
                                    <div class="ps-3">
                                      <h5 style="font-weight: bold; margin-bottom:20px;">Rincian Kegiatan</h5>
                                      <p style="font-size: 14px; font-weight : bold; margin-bottom:1px"><?= $d['nama_sekolah'] ?></p>
                                      <p style="font-size: 14px;"><?= $deskripsi ?></p>
                                    </div>
                                </div><br>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon d-flex align-items-center justify-content-center">

                                    </div>
                                    <div class="ps-3">
                                      <h5 style="font-weight: bold; margin-bottom:20px;">Persyaratan</h5>
                                      <p style="font-size: 14px;"><?= $persyaratan ?></p>
                                    </div>
                                </div><br>
                            </div>
                        </div>
                    </div>
          
                </div>
            </div>
      </div>
    </section>