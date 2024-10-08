<?php

include "../auth/koneksi.php";

// Mengambil data dari form
$id_dosen = $_POST['id_dosen'] ?? null;
$nama = $_POST['nama'] ?? null;
$nidn = $_POST['nidn'] ?? null;
$gender = $_POST['jk'] ?? null;
// $prodi = $_POST['prodi'] ?? null;
// $semester = $_POST['semester'] ?? null;

// Cek apakah ada file foto yang diupload
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $foto = $_FILES['foto']['name']; // Nama file yang diupload
    $foto_tmp = $_FILES['foto']['tmp_name']; // Temporary file

    // Lokasi untuk menyimpan foto
    $target_dir = "../images/";
    $target_file = $target_dir . basename($foto);

    // Pindahkan file yang diupload ke folder target
    if (move_uploaded_file($foto_tmp, $target_file)) {
        // Update database dengan data baru, termasuk foto
        $sql = "UPDATE dosen SET 
                nama='$nama', 
                nidn='$nidn',  
                gender='$gender', 
                foto='$foto' 
                WHERE id_dosen='$id_dosen'";
    } else {
?>
        <script type="text/javascript">
            alert('Gagal Mengupload Foto !');
            window.location.assign('index.php?page=profile');
        </script>
    <?php
        exit;
    }
} else {
    // Update database dengan data baru, tanpa foto
    $sql = "UPDATE dosen SET 
            nama='$nama', 
            nidn='$nidn', 
            gender='$gender' 
            WHERE id_dosen='$id_dosen'";
}

if ($conn->query($sql) === TRUE) {
    ?>
    <script type="text/javascript">
        alert('Update Profile Berhasil !');
        window.location.assign('index.php?page=profile');
    </script>
<?php
} else {
    $error = "Update Profile Gagal : " . $conn->error;
?>
    <script type="text/javascript">
        alert('<?= $error; ?>');
        window.location.assign('index.php?page=profile');
    </script>
<?php
}

?>