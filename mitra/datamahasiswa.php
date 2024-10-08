<?php
$id = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id_mhs = '$id'";
$data = mysqli_query($conn, $query);
$mhs = mysqli_fetch_assoc($data);
?>

<div class="container d-flex justify-content-center">
    <div class="card mb-3 custom-card">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title text-center">Informasi Mahasiswa</h5>
        </div>
        <div class="card-body text-center">
            <img src="../images/<?php echo htmlspecialchars($mhs['foto']); ?>" alt="foto-mhs" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
            <p class="h1 mb-3"><?php echo htmlspecialchars($mhs['nama']); ?></p>
            <p class="h4 text-muted"><?php echo htmlspecialchars($mhs['prodi']) . ' || Semester ' . htmlspecialchars($mhs['semester']); ?></p>
        </div>
        <div class="card-footer text-center">
            <a href="../mahasiswa/dokumen/<?php echo htmlspecialchars($mhs['transkrip']); ?>" class="btn btn-primary mx-3" target="_blank">Lihat Transkrip</a>
            <a href="../mahasiswa/dokumen/<?php echo htmlspecialchars($mhs['cv']); ?>" class="btn btn-secondary mx-3" target="_blank">Lihat CV</a>
        </div>
    </div>
</div>


