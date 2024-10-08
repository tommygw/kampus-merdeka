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
        <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Persyaratan</span>
            <textarea class="form-control" id="syaratkegiatan" name="syaratkegiatan" aria-label="With textarea" rows="10" cols="50"></textarea>
          </div>

          <div class="input-group mb-3 mt-3">
            <span class="input-group-text">Deskripsi Kegiatan</span>
            <textarea class="form-control" id="desckegiatan" name="desckegiatan" aria-label="With textarea" rows="10" cols="50"></textarea>
          </div>

          <div class="mb-3 mt-3">
          <label for="jeniskegiatan" class="form-label form-label-bold">Jenis Kegiatan</label>
          <select class="form-select" id="jeniskegiatan" name="jeniskegiatan" aria-label="Small select example">
            <option value="kkn">KKN-Tematik</option>
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

          <div class="d-flex justify-content-center mt-4 align-items-center">
              <button type="submit" class="btn btn-success" onclick="submitClearData()">Submit</button>
          </div>
        </div>
    </div>


</form>