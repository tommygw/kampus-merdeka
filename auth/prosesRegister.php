<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$code = md5($email);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// jika belum instal di composer
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aliffakhrulidain@gmail.com';                     //SMTP username
    $mail->Password   = 'arjc smjd bllo uzvm';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@tugaskampusmerdeka.com', 'Verifikasi Akun KampusMerdeka');
    $mail->addAddress($email, $nama);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Verifikasi Akun';
    $mail->Body    = 'Hallo '.$nama . '! <br> Kamu sudah mendaftar di Kampus Merdeka sekarang waktunya verifikasi akunmu ! Klik link dibawah ini 
    <br> <a href="http://localhost/Kampusmerdeka/auth/verifikasi.php?code='.$code.'">Verifikasi</a>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send()) {
        if (isset($_POST['register'])) {
            $npm = $_POST['npm'];
            // $nama = $_POST['nama'];
            // $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $level = $_POST['level'];
            $nidn = $_POST['nidn'];
            $alamat = $_POST['alamat'];
            $kota = $_POST['kota'];
            $batch = $_POST['batch'];
        
            // Function to check if email already exists
            function cek_email($email, $conn) {
                $cekemail = mysqli_real_escape_string($conn, $email);
                $query = "SELECT * FROM user WHERE email = '$cekemail'";
                $result = mysqli_query($conn, $query);
                return mysqli_num_rows($result);
            }
        
            // Check if any input is empty
            if (!empty($level) && !empty($nama) && !empty($email) && !empty($password) && !empty($repassword)) {
                if ($password == $repassword) {
                    if (cek_email($email, $conn) == 0) {
                        $pass = md5($password);
        
                        // Pemilahan Query
                        if ($level == "Mahasiswa") {
                            $sql = "SELECT nama_batch AS batch FROM batch_kampusmerdeka WHERE status ='berjalan'";
                            $hasil = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_assoc($hasil);
                            $batch = $data['batch'];
                            $query1 = "INSERT INTO user (email, password, level, verifikasi) VALUES ('$email', '$pass', '$level', '$code')";
                            $query2 = "INSERT INTO mahasiswa (npm, nama, email, batch) VALUES ('$npm', '$nama', '$email', '$batch')";
                        } elseif ($level == "Dosen") {
                            $query1 = "INSERT INTO user (email, password, level, verifikasi) VALUES ('$email', '$pass', '$level', '$code')";
                            $query2 = "INSERT INTO dosen (nidn, nama, email) VALUES ('$nidn', '$nama', '$email')";
                        } elseif ($level == "Mitra") {
                            $query1 = "INSERT INTO user (email, password, level, verifikasi) VALUES ('$email', '$pass', '$level', '$code')";
                            $query2 = "INSERT INTO mitra (nama_perusahaan, email, alamat, kota) VALUES ('$nama', '$email', '$alamat', '$kota')";
                        } else {
                            header("Location: login.php?error=level");
                            exit();
                        }
        
                        // Eksekusi query pertama
                        if ($conn->query($query1) === TRUE) {
                            // Jika berhasil, eksekusi query kedua
                            if ($conn->query($query2) === TRUE) {
                                ?>
                                <script type="text/javascript">
                                    alert('Register berhasil ! Silakan lakukan verifikasi email !');
                                    window.location.assign('login.php');
                                </script>
                                <?php
                                exit();
                            } else {
                                ?>
                                <script type="text/javascript">
                                    alert('Register Gagal !');
                                    window.location.assign('login.php');
                                </script>
                                <?php
                                exit();
                            }
                        } else {
                            ?>
                            <script type="text/javascript">
                                alert('Register Gagal !');
                                window.location.assign('login.php');
                            </script>
                            <?php
                            exit();
                        }
                    } else {
                        ?>
                        <script type="text/javascript">
                            alert('Email sudah digunakan !');
                            window.location.assign('login.php');
                        </script>
                        <?php
                        exit();
                    }
                } else {
                    ?>
                    <script type="text/javascript">
                        alert('Harap masukan Password dan Repassword dengan benar !');
                        window.location.assign('login.php');
                    </script>
                    <?php
                    exit();
                }
            } else {
                ?>
                <script type="text/javascript">
                    alert('Harap isi semua data !');
                    window.location.assign('login.php');
                </script>
                <?php
                exit();
            }
        }
    }
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}