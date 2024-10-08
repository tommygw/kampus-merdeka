<?php
// Ambil data dari database
$id = $_POST['id_update'];
$sql = "SELECT * FROM mitra, pmm WHERE id_pmm = '$id' AND program = 'pmm'";
$data = mysqli_query($conn, $sql);
$hasil = mysqli_fetch_array($data);

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
            <h3 class="text-center"><strong><?php echo htmlspecialchars($hasil['nama_display']); ?></strong></h3>
        </div>
        <!-- page 1 -->
        <div id="page1" class="card-body form-page active">
            <div class="mb-3 mt-3">
                <label for="namakegiatan" class="form-label form-label-bold">Nama Kampus</label>
                <input type="text" value="<?php echo htmlspecialchars($hasil['nama_display']); ?>" class="form-control" id="namakegiatan" name="namakegiatan">
            </div>

            <div class="mb-3 mt-3">
                <label for="jeniskegiatan" class="form-label form-label-bold">Jenis Kegiatan</label>
                <select class="form-select" id="jeniskegiatan" name="jeniskegiatan" aria-label="Small select example">
                    <option value="pmm">Pertukaran Mahasiswa</option>
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
            </div>

            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Deskripsi Kegiatan</span>
                <textarea class="form-control" id="desckegiatan" name="desckegiatan" aria-label="With textarea" rows="10" cols="50"><?php echo htmlspecialchars_decode($hasil['description']); ?></textarea>
            </div>
            <div class="input-group mb-3 mt-3">
                <span class="input-group-text">Persyaratan</span>
                <textarea class="form-control" id="syaratkegiatan" name="syaratkegiatan" aria-label="With textarea"rows="10" cols="50"><?php echo htmlspecialchars_decode($hasil['syarat']); ?></textarea>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <input type="hidden" name="id_program" value="<?php echo $id; ?>">
                <input type="hidden" name="id_mitra" value="<?php echo htmlspecialchars($hasil['id_mitra']); ?>">
                <button type="submit" class="btn btn-success" onclick="submitClearData()">Submit</button>
            </div>
        </div>
</form>