<?php
$id_kkn = $_GET['id'];
$email = $_SESSION['email'];
$query = "SELECT kkntematik.*, mitra.nama_perusahaan, mitra.foto, mitra.nama_display 
          FROM kkntematik 
          INNER JOIN mitra ON kkntematik.id_mitra = mitra.id_mitra 
          WHERE mitra.email = '$email' AND kkntematik.id_kkn = '$id_kkn'";
$data = mysqli_query($conn, $query);

if ($data && mysqli_num_rows($data) > 0) {
    $mitra = mysqli_fetch_assoc($data);


    $judul = $mitra['nama_kegiatan'];
    $start_date = $mitra['start_date'];
    $end_date = $mitra['end_date'];
    $desckegiatan = $mitra['description'];
    $desckegiatan = nl2br($desckegiatan);
    $syarat = $mitra['syarat'];
    $syarat = nl2br($syarat);
}
?>
  
<div class="container d-flex justify-content-center">
    <div class="card mb-3 custom-card">
        <div class="card-header">
            <h5 class="card-title text-start px-3">Informasi Kegiatan</h5>
        </div>
        <div class="card-header text-black mb-3 mt-3">
            <img src="../images/<?php echo $mitra['foto']; ?>" alt="<?php echo $mitra['nama_display']; ?>" class="logo-image">
            <p class="h3 mb-3 mt-3"><?php echo htmlspecialchars($judul); ?></p>
            <p class="card-text"><?php echo htmlspecialchars($mitra['nama_perusahaan']); ?></p>
            <p class="card-text">Konversi SKS</p>
        </div>
        <div class="card-header text-black mb-3">
            <p class="card-text text-secondary mb-2">Periode Kegiatan</p>
            <p class="small-text"><?php echo htmlspecialchars("{$start_date} - {$end_date}"); ?></p>
        </div>
        <div class="accordion mb-5" id="accordionStupen">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#rincian" aria-expanded="true" aria-controls="rincian">
                        <h5><strong>Rincian Kegiatan</strong></h5>
                    </button>
                </h2>
                <div id="rincian" class="accordion-collapse collapse show" data-bs-parent="#accordionStupen">
                    <div class="accordion-body">
                        <p><?php echo htmlspecialchars_decode($desckegiatan); ?></p>
                    </div>
                </div>
                <div id="rincian">
                    <div class="accordion-item">
                        <h5 class="mt-3" style="margin-left: 15px;"><strong>Persyaratan</strong></h5>
                    </div>
                    <div class="accordion-body">
                        <p><?php echo htmlspecialchars_decode($syarat); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
