<!DOCTYPE html>
<html>

<head>
    <title>Hasil Input Data Siswa</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css'); ?>">
</head>

<body>
    <div class="container">
        <div class="result-box">
            <h2>Hasil Input Data Siswa</h2>
            <div class="data">
                <p><strong>Nama:</strong> <?php echo $nama; ?></p>
                <p><strong>NIS:</strong> <?php echo $nis; ?></p>
                <p><strong>Kelas:</strong> <?php echo $kelas; ?></p>
                <p><strong>Tanggal Lahir:</strong> <?php echo $tanggal_lahir; ?></p>
                <p><strong>Tempat Lahir:</strong> <?php echo $tempat_lahir; ?></p>
                <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
                <p><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></p>
                <p><strong>Agama:</strong> <?php echo $agama; ?></p>
            </div>
            <!-- Tautan menuju halaman form input -->
            <a href="<?php echo base_url() . 'index.php/siswa' ?>">Kembali ke Form Input Data Siswa</a>
        </div>
    </div>

    <header>