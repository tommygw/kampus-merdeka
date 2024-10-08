<?php
function displaySuccess() {
    return '
    <div class="container d-flex justify-content-center">
        <div class="card mb-3 custom-card">
            <div class="card-header bg-success">
                <h5 class="card-title text-center text-white">
                    <i class="fa-sharp fa-solid fa-circle-check fa-xl" style="color: #74C0FC; margin-right: 20px;"></i>
                    Selesai Memperbarui Program
                </h5>
            </div>
            <br>
            <div class="grid gap-5 mb-5 d-flex justify-content-center">
                <a class="btn btn-primary w-25" href="../mitra/index.php?page=program">View All Program</a>
            </div>
        </div>
    </div>';
}

function displayFailed() {
    return '
    <div class="container d-flex justify-content-center">
        <div class="card mb-3 custom-card">
            <div class="card-header bg-danger">
                <h5 class="card-title text-center text-white">
                    <i class="fa-sharp fa-solid fa-circle-check fa-xl" style="color: #74C0FC; margin-right: 20px;"></i>
                    Gagal Memperbarui Program
                </h5>
            </div>
            <br>
            <div class="grid gap-5 mb-5 d-flex justify-content-center">
                <a class="btn btn-primary w-25" href="../mitra/index.php?page=program">View All Program</a>
            </div>
        </div>
    </div>';
}

$jeniskegiatan = $_POST['jeniskegiatan'];
$jeniskegiatan = mysqli_real_escape_string($conn, $jeniskegiatan);
$start_date = $_POST['start_date'];
$start_date = mysqli_real_escape_string($conn, $start_date);
$end_date = $_POST['end_date'];
$end_date = mysqli_real_escape_string($conn, $end_date);
$desckegiatan = $_POST['desckegiatan'];
$desckegiatan = nl2br($desckegiatan);
$syaratkegiatan = $_POST['syaratkegiatan'];
$syaratkegiatan = nl2br($syaratkegiatan);

$email = $_SESSION['email'];
$query = "SELECT * FROM $jeniskegiatan INNER JOIN mitra on $jeniskegiatan.id_mitra = mitra.id_mitra WHERE email = '$email'";
$data = mysqli_query($conn, $query);
$mitra = mysqli_fetch_array($data);
$idmitra = $mitra['id_mitra'];

if ($jeniskegiatan == "stupen") {
    $judul = $_POST['namakegiatan'];
    $judul = mysqli_real_escape_string($conn, $judul);
    $metodekegiatan = $_POST['metodekegiatan'];
    $metodekegiatan = mysqli_real_escape_string($conn, $metodekegiatan);
    $sertifikat = $_POST['sertikegiatan'];
    $sertifikat = nl2br($sertifikat);
    $moduls = $_POST['judulmodul'];
    $descmoduls = $_POST['descmodul'];
    $id_stupen = $_POST['id_program'];

    $query = "UPDATE stupen SET judul_stupen='$judul', metode='$metodekegiatan', start_date='$start_date', end_date='$end_date', description='$desckegiatan', syarat='$syaratkegiatan', sertifikat='$sertifikat' WHERE id_stupen='$id_stupen' AND id_mitra='$idmitra'";
    $hasil = mysqli_query($conn, $query);

    if ($hasil) {
        for ($i = 0; $i < count($moduls); $i++) {
            $modul = mysqli_real_escape_string($conn, $moduls[$i]);
            $descmodul = nl2br($descmoduls[$i]);

            $sql = "UPDATE modulstupen SET judul_modul='$modul', isi_modul='$descmodul' WHERE id_stupen='$id_stupen' AND id_modul='{$moduls[$i]}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo displaySuccess();
            } else {
                echo displayFailed();
            }
        }
    }
} elseif ($jeniskegiatan == "kkntematik") {
    $judul = $_POST['namakegiatan'];
    $judul = mysqli_real_escape_string($conn, $judul);
    $id_kkn = $_POST['id_program'];
    $query = "UPDATE kkntematik SET nama_kegiatan='$judul', start_date='$start_date', end_date='$end_date', description='$desckegiatan', syarat='$syaratkegiatan' WHERE id_kkn='$id_kkn' AND id_mitra='$idmitra'";
    $hasil = mysqli_query($conn, $query);
    if ($hasil) {
        echo displaySuccess();
    } else {
        echo displayFailed();
    }
} elseif ($jeniskegiatan == "kampusmengajar") {
    $judul = $_POST['namakegiatan'];
    $judul = mysqli_real_escape_string($conn, $judul);
    $id_km = $_POST['id_program'];
    $query = "UPDATE kampusmengajar SET nama_sekolah='$judul', start_date='$start_date', end_date='$end_date', description='$desckegiatan', syarat='$syaratkegiatan' WHERE id_km='$id_km' AND id_mitra='$idmitra'";
    $hasil = mysqli_query($conn, $query);
    if ($hasil) {
        echo displaySuccess();
    } else {
        echo displayFailed();
    }
} elseif ($jeniskegiatan == "pmm") {
    $id_pmm = $_POST['id_program'];
    $query = "UPDATE pmm SET start_date='$start_date', end_date='$end_date', description='$desckegiatan', syarat='$syaratkegiatan' WHERE id_pmm='$id_pmm' AND id_mitra='$idmitra'";
    $hasil = mysqli_query($conn, $query);
    if ($hasil) {
        echo displaySuccess();
    } else {
        echo displayFailed();
    }
}
?>
