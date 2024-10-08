<?php
include "../auth/koneksi.php";

$sql = "
SELECT
    m.nama AS nama_mahasiswa,
    m.Email AS email_mahasiswa,
    m.Prodi AS prodi_mahasiswa,
    m.Semester AS semester,
    t.program AS program,
    COALESCE(kk.start_date, pm.start_date, st.start_date) AS start_date,
    COALESCE(kk.end_date, pm.end_date, st.end_date) AS end_date
FROM mahasiswa m
JOIN transaksi_mitra t ON m.id_mhs = t.id_mhs
LEFT JOIN kkntematik kk ON t.id_mitra = kk.id_mitra
LEFT JOIN pmm pm ON t.id_mitra = pm.id_mitra
LEFT JOIN stupen st ON t.id_mitra = st.id_mitra
";
$result = $conn->query($sql);

$programLabels = [
    'kkn' => 'Kegiatan Kuliah Kerja Nyata',
    'stupen' => 'Studi Independen',
    'kampus_mengajar' => 'Kampus Mengajar',
    'pmm' => 'Pertukaran Mahasiswa',
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Tables / Data - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.20/jspdf.plugin.autotable.min.js"></script>

    <!-- SheetJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        #mahasiswaTable tbody td {
            text-align: center;
        }

        #mahasiswaTable thead th {
            text-align: center;
        }
    </style>
</head>

<body>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Mahasiswa</h5>
                        <p>Data Mahasiswa yang mengikuti kegiatan kampus merdeka</p>

                        <!-- Buttons for Export -->
                        <div class="mb-3">
                            <button class="btn btn-danger" onclick="exportToPDF()">
                                <i class="bi bi-file-earmark-pdf"></i> Download PDF
                            </button>
                            <button class="btn btn-success" onclick="exportToExcel()">
                                <i class="bi bi-file-earmark-excel"></i> Download Excel
                            </button>
                        </div>

                        <!-- Table with stripped rows -->
                        <table class="table datatable" id="mahasiswaTable">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Program Studi</th>
                                    <th>Semester</th>
                                    <th>Kegiatan</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">End Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    // Output data per row
                                    while ($row = $result->fetch_assoc()) {
                                        $programLabel = isset($programLabels[$row["program"]]) ? $programLabels[$row["program"]] : $row["program"];
                                        echo "<tr>";
                                        echo "<td>" . $row["nama_mahasiswa"] . "</td>";
                                        echo "<td>" . $row["email_mahasiswa"] . "</td>";
                                        echo "<td>" . $row["prodi_mahasiswa"] . "</td>";
                                        echo "<td>" . $row["semester"] . "</td>";
                                        echo "<td>" . $programLabel . "</td>";
                                        echo "<td>" . $row["start_date"] . "</td>";
                                        echo "<td>" . $row["end_date"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='7'>Tidak ada data ditemukan</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Export Functions -->
    <script src="export.js"></script>
</body>

</html>