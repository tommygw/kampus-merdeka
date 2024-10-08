<?php

include "../auth/koneksi.php";

// Mengambil data dari form
$id_mhs = $_POST['id_mhs'];
$nama = $_POST['nama_lengkap'];
$npm = $_POST['npm'];
$gender = $_POST['jk'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];

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
        $sql = "UPDATE mahasiswa SET 
                nama='$nama', 
                npm='$npm',  
                gender='$gender', 
                prodi='$prodi', 
                semester='$semester', 
                foto='$foto' 
                WHERE id_mhs='$id_mhs'";
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
    $sql = "UPDATE mahasiswa SET 
            nama='$nama', 
            npm='$npm', 
            gender='$gender', 
            prodi='$prodi', 
            semester='$semester'
            WHERE id_mhs='$id_mhs'";
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