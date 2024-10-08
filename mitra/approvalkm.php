<div class="pagetitle"> 
    <h1>Approval Program</h1>
    <nav>
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Approval Program</li>
        </ol>
    </nav>
</div>

<?php
$email = $_SESSION['email'];
$query = "SELECT * FROM kampusmengajar INNER JOIN mitra on kampusmengajar.id_mitra = mitra.id_mitra WHERE email = '$email'";
$hasil = mysqli_query($conn, $query);

echo '<div class="row row-cols-1 row-cols-md-2 g-4">';
while ($data = mysqli_fetch_array($hasil)) {
    $sql = "SELECT COUNT(program) AS jumlah FROM transaksi_mitra WHERE id_program='" . $data['id_km'] . "' AND program='kampus_mengajar' AND status='pending'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_fetch_assoc($result)['jumlah'];

    if ($data['program'] == 'kampus_mengajar') {
        $program = "Kampus Mengajar";
    }
?>
    <div class="col-xxl-4 col-md-5">
        <div class="card info-card sales-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <h5 class="card-title">Program <span>| <?php echo $program ?></span></h5>
                    <div class="icon-container">
                        <i class="fa-solid fa-certificate" style="color: #ff7605; font-size: 32px;"></i>
                        <span class="icon-text"><?php echo $count; ?></span>
                    </div>
                </div>
                <div class="ps-3">
                    <a href="index.php?page=detailapprovalkm&id=<?php echo $data['id_km'];?>" style="font-size: 28px; display: flex; align-items: center;">
                        <h6 style="font-size: 22px; margin: 0;"><?php echo $data['nama_sekolah']; ?></h6>
                    </a>
                    <p class="card-text mb-2 mt-4"><strong>Periode Kegiatan : </strong></p>
                    <p><?php echo "{$data['start_date']} - {$data['end_date']}"; ?></p>
                    <form class="d-flex justify-content-center" action="" method="post">
                        <input type="hidden" name="id_update" value='<?php echo $data['id_km'] ?>'>
                        <input type="hidden" name="program" value='<?php echo $data['program'] ?>'>     
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .icon-container {
            position: relative;
            display: inline-block;
            margin-left: 10px; 
        }
        .icon-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 18px; 
            color: white; 
        }
    </style>

<?php
}
echo '</div>';
?>
