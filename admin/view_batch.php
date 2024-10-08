<?php
include '../auth/koneksi.php';

if (isset($_POST['create'])) {
    $nama_batch = $_POST['nama_batch'];
    $angkatan = $_POST['angkatan'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO batch_kampusmerdeka (nama_batch, angkatan, end_date, status) VALUES ('$nama_batch', '$angkatan', '$end_date', '$status')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data batch berhasil ditambahkan');window.location.href='index.php?page=batch';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['delete'])) {
    $id_batch = $_GET['delete'];
    $sql = "DELETE FROM batch_kampusmerdeka WHERE id_batch='$id_batch'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data batch berhasil dihapus');window.location.href='index.php?page=batch';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_POST['update'])) {
    $id_batch = $_POST['id_batch'];
    $nama_batch = $_POST['nama_batch'];
    $angkatan = $_POST['angkatan'];
    $end_date = $_POST['end_date'];
    $status = $_POST['status'];

    $sql = "UPDATE batch_kampusmerdeka SET nama_batch='$nama_batch', angkatan='$angkatan', end_date='$end_date', status='$status' WHERE id_batch='$id_batch'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data batch berhasil diubah');window.location.href='index.php?page=batch';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<div class="container">
    <h2>Data Batch</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Batch</button>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Batch</th>
                <th>Angkatan</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM batch_kampusmerdeka";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['id_batch'] . "</td>
                        <td>" . $row['nama_batch'] . "</td>
                        <td>" . $row['angkatan'] . "</td>
                        <td>" . $row['end_date'] . "</td>
                        <td>" . $row['status'] . "</td>
                        <td>
                            <button class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#editModal' data-id_batch='" . $row['id_batch'] . "' data-nama_batch='" . $row['nama_batch'] . "' data-angkatan='" . $row['angkatan'] . "' data-end_date='" . $row['end_date'] . "' data-status='" . $row['status'] . "' data-keterangan=''>Edit</button>
                            <a href='index.php?page=batch&delete=" . $row['id_batch'] . "' class='btn btn-danger'>Hapus</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Add -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="index.php?page=batch" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Batch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama_batch" class="form-label">Nama Batch</label>
                        <input type="text" class="form-control" id="nama_batch" name="nama_batch" required>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input type="text" class="form-control" id="angkatan" name="angkatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="berjalan">Berjalan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="create" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="index.php?page=batch" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Batch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id_batch" name="id_batch">
                    <div class="mb-3">
                        <label for="nama_batch" class="form-label">Nama Batch</label>
                        <input type="text" class="form-control" id="edit_nama_batch" name="nama_batch" required>
                    </div>
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input type="text" class="form-control" id="edit_angkatan" name="angkatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="edit_end_date" name="end_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_status" class="form-label">Status</label>
                        <select class="form-select" id="edit_status" name="status" required>
                            <option value="berjalan">Berjalan</option>
                            <option value="selesai">Selesai</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var id_batch = button.getAttribute('data-id_batch');
        var nama_batch = button.getAttribute('data-nama_batch');
        var angkatan = button.getAttribute('data-angkatan');
        var end_date = button.getAttribute('data-end_date');
        var status = button.getAttribute('data-status');

        var modalId = editModal.querySelector('#id_batch');
        var modalNama = editModal.querySelector('#edit_nama_batch');
        var modalAngkatan = editModal.querySelector('#edit_angkatan');
        var modalEndDate = editModal.querySelector('#edit_end_date');
        var modalStatus = editModal.querySelector('#edit_status');


        modalId.value = id_batch;
        modalNama.value = nama_batch;
        modalAngkatan.value = angkatan;
        modalEndDate.value = end_date;
        modalStatus.value = status;  
    });
});

</script>
