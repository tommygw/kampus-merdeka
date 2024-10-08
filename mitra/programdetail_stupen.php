<?php
$accordionItems = '';

$id_stupen = $_GET['id'];
$email = $_SESSION['email'];
$query = "SELECT stupen.*, mitra.nama_perusahaan, mitra.foto, mitra.nama_display 
          FROM stupen 
          INNER JOIN mitra ON stupen.id_mitra = mitra.id_mitra 
          WHERE mitra.email = '$email' AND stupen.id_stupen = '$id_stupen'";
$data = mysqli_query($conn, $query);

if ($data && mysqli_num_rows($data) > 0) {
    $mitra = mysqli_fetch_assoc($data);


    $judulstupen = $mitra['judul_stupen'];
    $start_date = $mitra['start_date'];
    $end_date = $mitra['end_date'];
    $desckegiatan = $mitra['description'];
    $desckegiatan = nl2br($desckegiatan);
    $metodekegiatan = $mitra['metode'];
    $metodekegiatan = nl2br($metodekegiatan);
    $syarat = $mitra['syarat'];
    $syarat = nl2br($syarat);
    $sertifikasi = $mitra['sertifikat'];
    $sertifikasi = nl2br($sertifikasi);
    
    $sql = "SELECT judul_modul, isi_modul 
            FROM modulstupen 
            WHERE id_stupen = '$id_stupen'";
    $moduls = mysqli_query($conn, $sql);
    
    if ($moduls && mysqli_num_rows($moduls) > 0) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($moduls)) {
            $modul = nl2br($row['judul_modul']);
            $descmodul = nl2br($row['isi_modul']);
            
            $accordionItems .= '<div class="accordion-item">';
            $accordionItems .= '    <h2 class="accordion-header">';
            $accordionItems .= '        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulstupen' . $i . '" aria-expanded="false" aria-controls="modulstupen' . $i . '">';
            $accordionItems .= '            <h5><strong>' . $modul . '</strong></h5>';
            $accordionItems .= '        </button>';
            $accordionItems .= '    </h2>';
            $accordionItems .= '    <div id="modulstupen' . $i . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">';
            $accordionItems .= '        <div class="accordion-body">';
            $accordionItems .= '            <p>' . $descmodul . '</p>';
            $accordionItems .= '        </div>';
            $accordionItems .= '    </div>';
            $accordionItems .= '</div>';
            $i++;
        }
    } else {
        $accordionItems = '<p>No modules found for this program.</p>';
    }
} else {
    echo "No programs found for the given email.";
}
?>
  
<div class="container d-flex justify-content-center">
    <div class="card mb-3 custom-card">
        <div class="card-header">
            <h5 class="card-title text-start px-3">Informasi Kegiatan</h5>
        </div>
        <div class="card-header text-black mb-3 mt-3">
            <img src="../images/<?php echo $mitra['foto']; ?>" alt="<?php echo $mitra['nama_display']; ?>" class="logo-image">
            <p class="h3 mb-3 mt-3"><?php echo htmlspecialchars($judulstupen); ?></p>
            <p class="card-text"><?php echo htmlspecialchars($mitra['nama_perusahaan']); ?></p>
            <p class="card-text">20 SKS</p>
        </div>
        <div class="card-header text-black mb-3">
            <i class="fa-solid fa-lg fa-house-laptop"></i>
            <span class="h4"><strong><?php echo htmlspecialchars($metodekegiatan); ?></strong></span>
            <p class="small-text mt-2">Kegiatan ini bisa diikuti dari manapun</p>
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
                    <div class="accordion-item">
                        <h5 class="mt-3" style="margin-left: 15px;"><strong>Modul Pembelajaran</strong></h5>
                        <?php echo $accordionItems; ?>
                    </div>
                </div>
                <div id="rincian">
                    <div class="accordion-item">
                        <h5 class="mt-3" style="margin-left: 15px;"><strong>Persyaratan</strong></h5>
                    </div>
                    <div class="accordion-body">
                        <p><?php echo htmlspecialchars_decode($syarat); ?></p>
                    </div>
                    <div class="accordion-item mt-3">
                        <h5 class="mt-3" style="margin-left: 15px;"><strong>Sertifikasi</strong></h5>
                    </div>
                    <div class="accordion-body">
                        <p><?php echo htmlspecialchars_decode($sertifikasi); ?></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
