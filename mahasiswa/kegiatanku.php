    <div class="pagetitle"> 
      <h1>Kegiatanku</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Kegiatanku</li>
        </ol>
      </nav>
    </div>

    <div class="col-12">
      <div class="card recent-sales overflow-auto">

        <div class="card-body">
          <h5 class="card-title">Recent Sales <span>| Today</span></h5>
  
          <table class="table table-borderless datatable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Program</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Nama Program</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              
              <?php
              
              $sql = "SELECT 
                        CASE 
                            WHEN t.program = 'stupen' THEN 'Studi Independen'
                            WHEN t.program = 'pmm' THEN 'Pertukaran Mahasiswa'
                            WHEN t.program = 'magang' THEN 'Magang'
                            WHEN t.program = 'kkn' THEN 'KKN'
                            WHEN t.program = 'kampus_mengajar' THEN 'Kampus Mengajar'
                        END AS Program,
                        m.nama_display AS Nama_Mitra,
                        CASE 
                            WHEN t.program = 'stupen' THEN s.judul_stupen
                            WHEN t.program = 'pmm' THEN 'Pertukaran Mahasiswa'
                            WHEN t.program = 'magang' THEN 'Magang'
                            WHEN t.program = 'kkn' THEN k.nama_kegiatan
                            WHEN t.program = 'kampus_mengajar' THEN km.nama_sekolah
                        END AS Nama_Program,
                        t.status AS Status
                    FROM 
                        transaksi_mitra AS t
                    JOIN 
                        mitra AS m ON t.id_mitra = m.id_mitra
                    LEFT JOIN 
                        stupen AS s ON t.program = 'stupen' AND t.id_program = s.id_stupen
                    LEFT JOIN 
                        kampusmengajar AS km ON t.program = 'kampus_mengajar' AND t.id_program = km.id_km
                    LEFT JOIN 
                        kkntematik AS k ON t.program = 'kkn' AND t.id_program = k.id_kkn
                    WHERE 
                        t.id_mhs = $id;";
              
              $result = mysqli_query($conn, $sql);
              
              if (mysqli_num_rows($result) > 0) {
              $i = 1;
              while ($row = mysqli_fetch_assoc($result)) {
              $program = $row['Program'];
              $status = $row['Status'] == 'diterima' ? '<span class="badge bg-success">Diterima</span>' : '<span class="badge bg-warning">Pending</span>';
              
              echo '<tr>
                  <td>' . $i++ . '</td>
                  <td>' . $program . '</td>
                  <td>' . $row['Nama_Mitra'] . '</td>
                  <td>' . $row['Nama_Program'] . '</td>
                  <td>' . $status . '</td>
                </tr>';
              }
              } else {
              echo '<tr><td colspan="5" class="text-center">No data available</td></tr>';
              }


            ?>
              <!-- <tr>
                <td>1</td>
                <td>Studi Independent</td>
                <td>vocasia</td>
                <td>program 1</td>
                <td><span class="badge bg-success">Diterima</span></td>
              </tr> -->
            </tbody>
          </table>
  
        </div>
  
      </div>
    </div><!-- End Recent Sales -->