<?php
include '../auth/koneksi.php';

// Fungsi untuk memindahkan file ke folder dokumen
function uploadFile($file, $target_dir, $prefix) {
    $target_file = $target_dir . basename($file["name"]);
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Periksa apakah file adalah PDF
    if($fileType != "pdf") {
        return ["status" => false, "message" => "Hanya file PDF yang diperbolehkan."];
    }

    // Periksa ukuran file
    if ($file["size"] > 2000000) {
        return ["status" => false, "message" => "Ukuran file maksimal 2MB."];
    }

    // Pindahkan file ke target directory
    $new_filename = $prefix . "_" . time() . "." . $fileType;
    if (move_uploaded_file($file["tmp_name"], $target_dir . $new_filename)) {
        return ["status" => true, "filename" => $new_filename];
    } else {
        return ["status" => false, "message" => "Terjadi kesalahan saat mengunggah file."];
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "dokumen/";

    // Unggah file
    $cv = uploadFile($_FILES["cv"], $target_dir, "cv");
    $transkrip = uploadFile($_FILES["transkrip"], $target_dir, "transkrip");
    $ktp = uploadFile($_FILES["ktp"], $target_dir, "ktp");
    $additional = uploadFile($_FILES["additional"], $target_dir, "additional");
    $email = $_POST['email'];

    // Periksa apakah unggahan berhasil
    if ($cv["status"] && $transkrip["status"] && $ktp["status"]) {
        // Simpan ke database
        $sql = "UPDATE mahasiswa SET cv = ?, transkrip = ?, ktp = ?, additional = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $cv["filename"], $transkrip["filename"], $ktp["filename"], $additional["filename"], $email);

        if ($stmt->execute()) {
            echo "<script type='text/javascript'>
                    alert('Data berhasil disimpan.');
                    window.location.assign('index.php?page=dokumen');
                  </script>";
        } else {
            echo "<script type='text/javascript'>
                    alert('Terjadi kesalahan saat menyimpan data.');
                    window.location.assign('index.php?page=dokumen');
                  </script>";
        }
    } else {
        $error_message = "";
        if (!$cv["status"]) $error_message .= $cv["message"] . " ";
        if (!$transkrip["status"]) $error_message .= $transkrip["message"] . " ";
        if (!$ktp["status"]) $error_message .= $ktp["message"] . " ";

        echo "<script type='text/javascript'>
                alert('Terjadi kesalahan: $error_message');
                window.location.assign('index.php?page=dokumen');
              </script>";
    }
}

?>
