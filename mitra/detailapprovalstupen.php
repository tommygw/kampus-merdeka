<div class="pagetitle"> 
    <h1>List Pending</h1>
    <nav>
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?page=approval">Approval Program</a></li>
            <li class="breadcrumb-item active">List Pending</li>
        </ol>
    </nav>
</div>

<?php
$id = $_GET['id'];
$email = $_SESSION['email'];


$sql = "SELECT id_mitra FROM mitra WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$mitra = mysqli_fetch_assoc($result);
$id_mitra = $mitra['id_mitra'];

$query = "SELECT * FROM transaksi_mitra 
          INNER JOIN mahasiswa on transaksi_mitra.id_mhs = mahasiswa.id_mhs 
          WHERE id_program = '$id' AND program = 'stupen' AND status = 'pending'";

$hasil = mysqli_query($conn, $query);

echo '<div class="row row-cols-1 row-cols-md-2 g-4">';
while ($data = mysqli_fetch_array($hasil)) {

?>
    <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center mt-3">
                        <img src="../images/<?php echo $data['foto']; ?>" alt="foto-mahasiswa" class="rounded-circle" style="width:60px; height:60px">
                    </div>
                    <div class="ps-3 mt-3">
                        <form method="post" action="proses_approval.php">
                            <a href="index.php?page=datamahasiswa&id=<?php echo $data['id_mhs']; ?>"><h6 style="font-size: 22px;"><?php echo $data['nama']; ?></h6></a>
                            <a href="index.php?page=datamahasiswa&id=<?php echo $data['id_mhs']; ?>" class="btn btn-primary">Lihat Dokumen</a>
                            <input type="hidden" name="id_mhs" value="<?php echo $data['id_mhs']; ?>">
                            <input type="hidden" name="program" value="stupen">
                            <input type="hidden" name="id_mitra" value="<?php echo $id_mitra; ?>">
                            <input type="hidden" name="id_program" value="<?php echo $id; ?>">
                            <button type="submit" class="btn btn-success" name="terima">Terima</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
echo '</div>';
?>