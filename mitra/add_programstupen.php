<div class="pagetitle"> 
    <h1>Tambah Program Kegiatan</h1>
    <nav>
        <ol class="breadcrumb mt-2">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item"><a href="index.php?page=program">Program</a></li>
          <li class="breadcrumb-item active">Tambah Program</li>
        </ol>
   </nav>
</div>

  <form id="multiPageForm" action="index.php?page=tambahsuccess" method="post">
      <div class="card ">
        <div class="card-header bg-dark text-primary">
          <h3 class="text-center"><strong>Tambah Program Kegiatan</strong></h3>
        </div>
        <!-- page 1 -->
        <div id="page1" class="card-body form-page active">
          <div class="mb-3 mt-3">
            <label for="namakegiatan" class="form-label form-label-bold">Nama Kegiatan</label>
            <input type="text" class="form-control" id="namakegiatan" name="namakegiatan" >
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
              <option value="Online">Online</option>
            </select>
          </div>

          <div class="mb-3 mt-3">
            <label for="periodekegiatan" class="form-label form-label-bold">Periode Kegiatan:</label>
            <div class="row">
              <div class="col">
                  <input type="date" id="start_date" name="start_date" class="form-control" aria-describedby="startdate">
                  <small id="startdate" class="form-text text-muted">Start Date</small>
              </div>
              <div class="col">
                  <input type="date" id="end_date" name="end_date" class="form-control" aria-describedby="enddate">
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
            <textarea class="form-control" id="desckegiatan" name="desckegiatan" aria-label="With textarea" rows="10" cols="50"></textarea>
          </div>

          <div class="mb-3 mt-3 d-flex align-items-center justify-content-between custom-outline">
          <span class="mb-2 mt-2 d-flex justify-content-center flex-grow-1">Modul Pembelajaran</span>
              <button type="button" class="btn btn-outline-dark btn-sm" onclick="addNewmodul()">Add New Modul</button>
          </div>

          <div class="mb-3 mt-3" id="modulkegiatan">
            <div>
              <label for="judulmodul" class="mb-2 mt-2 form-label form-label-bold">Judul Modul</label>
              <input type="text" name="judulmodul[]" class="form-control" id="judulmodul" placeholder="Judul Modul">
            </div>
            <div>
              <label for="descmodul" class="mb-2 mt-2 form-label form-label-bold">Isi Modul</label>
              <textarea class="form-control" name="descmodul[]" id="descmodul" aria-label="With textarea" rows="10" cols="50"></textarea>
            </div>
          </div>

          <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Persyaratan</span>
            <textarea class="form-control" id="syaratkegiatan" name="syaratkegiatan" aria-label="With textarea" rows="10" cols="50"></textarea>
          </div>

          <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Sertifikasi</span>
            <textarea class="form-control" id="sertikegiatan" name="sertikegiatan" aria-label="With textarea" rows="10" cols="50"></textarea>
          </div>
        
          <div class="step-indicator">
              <div id="step1" class="step">1</div>
              <div id="step2" class="step active">2</div>
          </div>
          <div class="d-flex justify-content-between align-items-center">
              <button type="button" class="btn btn-secondary" onclick="saveAndBack()">Back</button>
              <button type="submit" class="btn btn-success" onclick="submitClearData()">Submit</button>
          </div>
        </div>
      </div>
      <!-- end page 2 -->

    </form>