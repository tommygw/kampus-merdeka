<?php
include "../auth/koneksi.php";

$id_mitra = $_POST['id_mitra'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$nama_display = $_POST['nama_display'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];

if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $foto = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $target_dir = "../images/";
    $target_file = $target_dir . basename($foto);

    if (move_uploaded_file($foto_tmp, $target_file)) {
        $sql = "UPDATE mitra SET nama_perusahaan='$nama_perusahaan', nama_display='$nama_display', alamat='$alamat', kota='$kota', foto='$foto' WHERE id_mitra='$id_mitra'";
    } else {
        echo "<script type='text/javascript'>alert('Gagal Mengupload Foto !'); window.location.assign('index.php?page=profile');</script>";
        exit;
    }
} else {
    $sql = "UPDATE mitra SET nama_perusahaan='$nama_perusahaan', nama_display='$nama_display', alamat='$alamat', kota='$kota' WHERE id_mitra='$id_mitra'";
}

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>alert('Update Profile Berhasil !'); window.location.assign('index.php?page=profile');</script>";
} else {
    echo "<script type='text/javascript'>alert('Update Profile Gagal : " . $conn->error . "'); window.location.assign('index.php?page=profile');</script>";
}
