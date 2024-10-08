<?php
include 'koneksi.php';

$code = $_GET['code'];

if (isset($code)) {
    $query = $conn->query("SELECT * FROM user WHERE verifikasi ='$code'");
    $result = $query->fetch_assoc();

    $conn->query("UPDATE user SET is_verif=1 WHERE id_user='".$result['id_user']."'");
    ?>
    <script type="text/javascript">
        alert('Verifikasi Berhasil, Silakan Login !');
        window.location.assign('login.php');
    </script>
    <?php
}