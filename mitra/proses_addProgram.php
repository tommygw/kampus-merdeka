<?php
function displaySucces() {
    return '
    <div class="container d-flex justify-content-center">
        <div class="card mb-3 custom-card">
            <div class="card-header bg-success">
                <h5 class="card-title text-center text-white">
                    <i class="fa-sharp fa-solid fa-circle-check fa-xl" style="color: #74C0FC; margin-right: 20px;"></i>
                    Selesai Menambahkan Program
                </h5>
            </div>
            <br>
            <div class="grid gap-5 mb-5 d-flex justify-content-center">
                <a class="btn btn-primary w-25" href="../mitra/index.php?page=program">View All Program</a>
            </div>
        </div>
    </div>';
}
function displayFailed() {
  return '
  <div class="container d-flex justify-content-center">
      <div class="card mb-3 custom-card">
          <div class="card-header bg-danger">
              <h5 class="card-title text-center text-white">
                  <i class="fa-sharp fa-solid fa-circle-check fa-xl" style="color: #74C0FC; margin-right: 20px;"></i>
                  Gagal Menambahkan Program
              </h5>
          </div>
          <br>
          <div class="grid gap-5 mb-5 d-flex justify-content-center">
              <a class="btn btn-primary w-25" href="../mitra/index.php?page=program">View All Program</a>
          </div>
      </div>
  </div>';
}
$accordionItems = '';


$jeniskegiatan = $_POST['jeniskegiatan'];
$jeniskegiatan   = mysqli_real_escape_string($conn, $jeniskegiatan);
$start_date = $_POST['start_date'];
$start_date   = mysqli_real_escape_string($conn, $start_date);
$end_date = $_POST['end_date'];
$end_date   = mysqli_real_escape_string($conn, $end_date);
$desckegiatan = $_POST['desckegiatan'];
$desckegiatan = nl2br($desckegiatan);
$syaratkegiatan = $_POST['syaratkegiatan'];
$syaratkegiatan = nl2br($syaratkegiatan);



$email=$_SESSION['email'];
$query = "SELECT * FROM $jeniskegiatan INNER JOIN mitra on $jeniskegiatan.id_mitra = mitra.id_mitra WHERE email = '$email'";
$data=mysqli_query($conn,$query);
$mitra = mysqli_fetch_array($data);
$idmitra=$mitra['id_mitra'];
if($jeniskegiatan == "stupen"){
  $judul = $_POST['namakegiatan'];
  $judul = mysqli_real_escape_string($conn, $judul);
  $metodekegiatan = $_POST['metodekegiatan'];
  $metodekegiatan   = mysqli_real_escape_string($conn, $metodekegiatan);
  $sertifikat = $_POST['sertikegiatan'];
  $sertifikat = nl2br($sertifikat);
  $moduls = $_POST['judulmodul'];
  $descmoduls = $_POST['descmodul'];
  $query = "INSERT INTO stupen (id_mitra, judul_stupen, metode, start_date, end_date, description, syarat, sertifikat) VALUES
          ('$idmitra', '$judul', '$metodekegiatan', '$start_date', '$end_date', '$desckegiatan', '$syaratkegiatan', '$sertifikat')";
  
  $hasil = mysqli_query($conn, $query);
  $id_stupen = mysqli_insert_id($conn);
  
  if($hasil){
    for ($i = 0; $i < count($moduls); $i++) {
      $modul = mysqli_real_escape_string($conn, $moduls[$i]);
      $descmodul = nl2br($descmoduls[$i]);
    
      $sql = "INSERT INTO modulstupen (id_stupen, judul_modul, isi_modul) VALUES ('$id_stupen', '$modul', '$descmodul')";
      $result = mysqli_query($conn, $sql);
      if($result){
        echo displaySucces();
      } else{
        echo displayFailed();
      }
    }
  }
} elseif($jeniskegiatan =="kkn"){
    $judul = $_POST['namakegiatan'];
    $judul = mysqli_real_escape_string($conn, $judul);
    $query = "INSERT INTO kkntematik (id_mitra, nama_kegiatan, start_date, end_date, description, syarat) VALUES
          ('$idmitra', '$judul', '$start_date', '$end_date', '$desckegiatan', '$syaratkegiatan')";
    $hasil = mysqli_query($conn, $query);
    if($hasil){
      echo displaySucces();
    } else{
      echo displayFailed();
    }

  } elseif($jeniskegiatan =="kampusmengajar"){
    $judul = $_POST['namakegiatan'];
    $judul = mysqli_real_escape_string($conn, $judul);
    $query = "INSERT INTO kampusmengajar (id_mitra, nama_sekolah, start_date, end_date, description, syarat) VALUES
          ('$idmitra', '$judul', '$start_date', '$end_date', '$desckegiatan', '$syaratkegiatan')";
    $hasil = mysqli_query($conn, $query);
    if($hasil){
      echo displaySucces();
    } else{
      echo displayFailed();
    }

  } elseif($jeniskegiatan =="pmm"){
    $query = "INSERT INTO pmm (id_mitra, start_date, end_date, description, syarat) VALUES
          ('$idmitra', '$start_date', '$end_date', '$desckegiatan', '$syaratkegiatan')";
    $hasil = mysqli_query($conn, $query);
    if($hasil){
      echo displaySucces();
    } else{
      echo displayFailed();
    }
  }

?>
  
