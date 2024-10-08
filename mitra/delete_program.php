<?php

$id=$_POST['id_update'];
$table=$_POST['program'];

if($table=="stupen"){
    $key='id_stupen';
} elseif($table=="kkn"){
  $key='id_kkn';
} elseif($table=="kampus_mengajar"){
  $table = 'kampusmengajar';
  $key='id_km';
} elseif($table=="pmm"){
  $key='id_pmm';
}

$sql = "DELETE FROM $table WHERE $key = $id";
$delete=mysqli_query($conn, $sql);

if ($delete) {
    echo "<script>
            alert('Berhasil dihapus');
            window.location.href='index.php?page=program';
          </script>";
} else {
    echo "<script>
            alert('Gagal menghapus data');
          </script>";
}
?>