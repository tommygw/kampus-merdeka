<?php

include "../auth/koneksi.php";

$id_mhs = $_POST['id_mhs'];
$id_mitra = $_POST['id_mitra'];
$id_program = $_POST['id_program'];
$program = $_POST['program'];

// Check if the combination of id_mhs and id_mitra already exists
$check_query = "SELECT * FROM transaksi_mitra WHERE id_mhs = '$id_mhs' AND id_program = '$id_program' AND id_mitra = $id_mitra";
$check_result = mysqli_query($conn, $check_query);

if (mysqli_num_rows($check_result) > 0) {
    // Combination already exists, cancel registration
    ?>
    <script type="text/javascript">
        alert('Kamu sudah terdaftar di program ini !');
        window.location.assign('index.php');
    </script>
    <?php
    exit();
}


$sql = "INSERT INTO transaksi_mitra (id_mhs, id_mitra, program, id_program, status) VALUES ('$id_mhs', '$id_mitra', '$program', '$id_program','pending')";

$result = mysqli_query($conn, $sql);

if ($result) {
    ?>
    <script type="text/javascript">
        alert('Daftar berhasil!');
        window.location.assign('index.php');
    </script>
    <?php
    exit();
} else {
    $error_message = "Daftar Gagal: " . mysqli_error($conn);
    ?>
    <script type="text/javascript">
        alert('<?= $error_message ?>');
        window.location.assign('index.php');
    </script>
    <?php
    exit();
}

?>
