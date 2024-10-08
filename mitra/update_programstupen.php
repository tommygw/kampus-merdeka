<?php
// Ambil data dari database
$id = $_POST['id_update'];
$sql = "SELECT * FROM stupen WHERE id_stupen = '$id'";
$data = mysqli_query($conn, $sql);
$hasil = mysqli_fetch_array($data);

$query = "SELECT judul_modul, isi_modul FROM modulstupen WHERE id_stupen = '$id'";
$result = mysqli_query($conn, $query);

$moduls = [];
while ($row = mysqli_fetch_assoc($result)) {
    $moduls[] = $row;
}
?>

<div class="pagetitle">
    <h1>Update Program Kegiatan</h1>
    <nav>
        <ol class="breadcrumb mt-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php?page=program">Program</a></li>
            <li class="breadcrumb-item active">Update Program</li>
        </ol>
    </nav>
</div>

<form id="multiPageForm" action="index.php?page=updatesuccess" method="post">
    <div class="card">
        <div class="card-header bg-dark text-primary">
            <h3 class="text-center"><strong><?php echo htmlspecialchars($hasil['judul_stupen']); ?></strong></h3>
        </div>
        <!-- page 1 -->
        <div id="page1" class="card-body form-page active">
            <div class="mb-3 mt-3">
                <label for="namakegiatan" class="form-label form-label-bold">Nama Kegiatan</label>
                <input type="text" value="<?php echo htmlspecialchars($hasil['judul_stupen']); ?>" class="form-control" id="namakegiatan" name="namakegiatan">
            </div>

            <div class="mb-3 mt-3">
                <label for="jeniskegiatan" class="form-label form-label-bold">Jenis Kegiatan</label>
                <select class="form-select" id="jeniskegiatan" name="jeniskegiatan" aria-label="Small select example">
                    <option value="stupen">Studi Independen</option>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label for="metodekegiatan" class="form-label form-label-bold">Metode Pembelajaran</label>
                <select class="form-select" id="metodekegiatan" name="metodekegiatan">
                    <option value="Online" <?php echo ($hasil['metode'] == 'Online') ? 'selected' : ''; ?>>Online</option>
                </select>
            </div>

            <div class="mb-3 mt-3">
                <label for="periodekegiatan" class="form-label form-label-bold">Periode Kegiatan:</label>
                <div class="row">
                    <div class="col">
                        <input type="date" id="start_date" name="start_date" class="form-control" value="<?php echo htmlspecialchars($hasil['start_date']); ?>" aria-describedby="startdate">
                        <small id="startdate" class="form-text text-muted">Start Date</small>
                    </div>
                    <div class="col">
                        <input type="date" id="end_date" name="end_date" class="form-control" value="<?php echo htmlspecialchars($hasil['end_date']); ?>" aria-describedby="enddate">
                        <small id="enddate" class="form-text text-muted">End Date</small>
                    </div>
                </div>
                <div class="step-indicator mb-3 mt-3">
                    <div id="step1" class="step active">1</div>
                    <div id="step2" class="step">2</div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" onclick="saveAndNext()">Next</button>
                </div>
            </div>
        </div>
        <!-- end page 1 -->

        <!-- page 2 -->
        <div id="page2" class="card-body form-page">
            <h4 class="mb-3 mt-3"><strong>Informasi & Rincian Kegiatan</strong></h4>

            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Deskripsi Kegiatan</span>
                <textarea class="form-control" id="desckegiatan" name="desckegiatan" aria-label="With textarea" rows="10" cols="50"><?php echo htmlspecialchars_decode($hasil['description']); ?></textarea>
            </div>

            <div class="mb-3 mt-3 d-flex align-items-center justify-content-between custom-outline">
                <span class="mb-2 mt-2 d-flex justify-content-center flex-grow-1">Modul Pembelajaran</span>
                <button type="button" class="btn btn-outline-dark btn-sm" onclick="addNewmodul()">Add New Modul</button>
            </div>

            <div class="mb-3 mt-3" id="modulkegiatan">
                <?php
                foreach ($moduls as $modul) {
                    echo '<div class="input-group mb-3">';
                    echo '<span class="input-group-text">Judul Modul</span>';
                    echo '<input type="text" class="form-control" name="judulmodul[]" value="' . htmlspecialchars($modul['judul_modul']) . '">';
                    echo '</div>';
                    echo '<div class="input-group mb-3">';
                    echo '<span class="input-group-text">Isi Modul</span>';
                    echo '<textarea class="form-control" name="descmodul[]" rows="10" cols="50">' . htmlspecialchars($modul['isi_modul']) . '</textarea>';
                    echo '</div>';
                }
                ?>
            </div>

            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Persyaratan</span>
                <textarea class="form-control" id="syaratkegiatan" name="syaratkegiatan" aria-label="With textarea"rows="10" cols="50"><?php echo htmlspecialchars_decode($hasil['syarat']); ?></textarea>
            </div>

            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Sertifikasi</span>
                <textarea class="form-control" id="sertikegiatan" name="sertikegiatan" aria-label="With textarea"rows="10" cols="50"><?php echo htmlspecialchars_decode($hasil['sertifikat']); ?></textarea>
            </div>

            <div class="step-indicator">
                <div id="step1" class="step">1</div>
                <div id="step2" class="step active">2</div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <input type="hidden" name="id_program" value="<?php echo $id; ?>">
                <input type="hidden" name="id_mitra" value="<?php echo htmlspecialchars($hasil['id_mitra']); ?>">
                <button type="button" class="btn btn-secondary" onclick="saveAndBack()">Back</button>
                <button type="submit" class="btn btn-success" onclick="submitClearData()">Submit</button>
            </div>
        </div>
    </div>
    <!-- end page 2 -->
</form>