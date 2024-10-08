<?php

session_start();

include 'koneksi.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $login = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        $d = mysqli_fetch_assoc($login);
        if ($d['is_verif'] == 1) {
            if ($d['level'] == "Mahasiswa") {
                
                $_SESSION['email'] = $email;
                $_SESSION['level'] = "Mahasiswa";
                header("location: ../mahasiswa/index.php");
    
            }else if ($d['level'] == "Mitra") {
                
                $_SESSION['email'] = $email;
                $_SESSION['level'] = "Mitra";
                header("location: ../mitra/index.php");
    
            }else if ($d['level'] == "Dosen") {
                
                $_SESSION['email'] = $email;
                $_SESSION['level'] = "Dosen";
                header("location: ../dosen/index.php");
    
            }else if ($d['level'] == "Admin") {
                
                $_SESSION['email'] = $email;
                $_SESSION['level'] = "Admin";
                header("location: ../admin/index.php");
    
            }else {
                ?>
                <script type="text/javascript">
                    alert('Username atau Password salah !');
                    window.location.assign('login.php');
                </script>
                <?php
            }
        }else{
            ?>
            <script type="text/javascript">
                alert('Harap Verifikasi Email Terlebih Dahulu !');
                window.location.assign('login.php');
            </script>
            <?php
        }

    }else {
        ?>
        <script type="text/javascript">
            alert('Username atau Password salah !');
            window.location.assign('login.php');
        </script>
        <?php
    }
}
?>

