<!DOCTYPE html>
<html>
<head>
    <title>APP OLAH PEGAWAI</title>
</head>
<body>
    <header>
        <h1>APLIKASI OLAH DATA KEPEGAWAIAN</h1>
    </header>
    <h5>Menu</h5>
    <nav>
        <ul>
            <li><a href="formAdd.php">Daftar Baru</a></li>
            <li><a href="dataPegawai.php">Data Pegawai</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Pegawai baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
</body>
</html> 