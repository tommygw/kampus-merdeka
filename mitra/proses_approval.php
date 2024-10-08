<?php
include "../auth/koneksi.php";

if (isset($_POST['terima'])) {
    $id_mhs = $_POST['id_mhs'];
    $id_mitra = $_POST['id_mitra'];
    $id_program = $_POST['id_program'];
    $program = $_POST['program'];
    
    $query = "UPDATE transaksi_mitra SET status = 'diterima' 
            WHERE id_mhs = '$id_mhs' AND id_mitra = '$id_mitra' 
            AND program = '$program' AND program='$program'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>
            alert('Update Data Berhasil');
            window.location.href='index.php?page=approval$program';
          </script>";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>
