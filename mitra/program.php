<div class="pagetitle"> 
    <h1>Program dan Kegiatan Aktif</h1>
    <nav>
        <ol class="breadcrumb mt-2">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Program</li>
        </ol>
    </nav>
    <section class="section ">
        <div class="d-grid gap-3 d-md-flex justify-content-md-end">
            <a class="btn btn-primary mb-4" href="index.php?page=tambahprogram"><i class="fa-solid fa-plus"></i> Tambah Program</a>
            <input class="btn btn-warning me-md-4 mb-4" type="button" value="Edit Mode" id="edit-button" onclick="editBtn()">
            <input class="btn btn-danger me-md-4 mb-4" type="button" value="Cancel" id="cancel-button" onclick="cancelBtn()" style="display:none">
        </div>
    </section>
</div>
   

    <?php

    $email=$_SESSION['email'];
    $sql="SELECT program FROM mitra WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $table = mysqli_fetch_assoc($result);
    if($table['program'] == 'stupen'){
        $query = "SELECT id_stupen AS id, judul_stupen as judul,  program as program, start_date, end_date  FROM stupen INNER JOIN mitra on stupen.id_mitra = mitra.id_mitra WHERE email = '$email'";
    }elseif($table['program'] == 'pmm'){
        $query = "SELECT id_pmm AS id, nama_display AS judul, program as program, start_date, end_date FROM pmm INNER JOIN mitra on pmm.id_mitra = mitra.id_mitra WHERE email = '$email'";
    }elseif($table['program'] == 'kkn'){
        $query = "SELECT id_kkn AS id, nama_display AS judul, program as program, start_date, end_date FROM kkntematik k INNER JOIN mitra on k.id_mitra = k.id_mitra WHERE email = '$email'";
    }elseif($table['program'] == 'kampus_mengajar'){
        $query = "SELECT id_km AS id, nama_sekolah AS judul, program as program, start_date, end_date FROM kampusmengajar k INNER JOIN mitra on k.id_mitra = k.id_mitra WHERE email = '$email'";
    }else{
        echo"Error, coba lagi";
    }
    $hasil = mysqli_query($conn, $query);
    echo '<div class="row row-cols-1 row-cols-md-2 g-4">';
    while($data = mysqli_fetch_array($hasil)){
    
    if ($data['program']=='stupen'){
        $jenis = "stupen";
        $program = "Studi Independen";
    } elseif ($data['program']=='pmm'){
        $program = "Pertukaran Mahasiswa Merdeka";
        $jenis = "pmm";
    } elseif ($data['program']=='kkn'){
        $program = "Kuliah Kerja Nyata - Tematik";
        $jenis = "kkn";
    } elseif ($data['program']=='kampus_mengajar'){
        $program = "Kampus Mengajar";
        $jenis = "km";
    } else{
        $program = "yang lain";
    }
    ?>
        <div class="col-xxl-4 col-md-5">
            <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Program <span>| <?php echo $program ?></span></h5>
                    <div class="d-flex align-items-center">
                        <div class="ps-3">
                            <a href="index.php?page=programdetail<?php echo $jenis;?>&id=<?php echo $data['id']; ?>"><h6 style="font-size: 22px;"><?php echo $data['judul'];?></h6></a>
                            <p class="card-text mb-2 mt-4"><strong>Periode Kegiatan : </strong></p>
                            <p><?php echo "{$data['start_date']} - {$data['end_date']}";?></p>
                            <form class="d-flex justify-content-center" action="" method="post">
                                <input type="hidden" name="id_update" value='<?php echo $data['id']?>'>
                                <input type="hidden" name="program" value='<?php echo $data['program']?>'>
                                <input type="submit" class="action-buttons btn btn-outline-warning me-md-4 mb-1" value="Update" formaction='index.php?page=update_program<?php echo $jenis?>' formmethod='POST' style="display:none;">
                                <input type="submit" class="action-buttons btn btn-outline-danger me-md-4 mb-1" value="Delete"  formaction='index.php?page=deleteprogram' formmethod='POST' onclick="return confirm('Are you sure delete <?php echo $data['judul']; ?>?');" style="display:none;">        
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    <?php
    }
    ?>